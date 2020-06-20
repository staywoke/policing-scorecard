<?php
error_reporting(0);
set_time_limit(0);

$token = $_REQUEST['token'];
$update = $_REQUEST['update'];
$valid_token = (md5($token) === '5d0f91a00d76444b843046b7c15eb5c2');

/**
 * URLs for Widget Data
 */
$data_url = 'https://docs.google.com/spreadsheets/d/1IuNh-y2kHQkOdXywp9Rnwl4IOnON4WQla5_XhPWeAQM/export?format=csv&id=1IuNh-y2kHQkOdXywp9Rnwl4IOnON4WQla5_XhPWeAQM&gid=1005611362';
$sheriff_url = 'https://docs.google.com/spreadsheets/d/1Nek1JLMGt_hdxEMPkPIRNdqjhjN8JsRCE_TxYYjpxEM/export?format=csv&id=1Nek1JLMGt_hdxEMPkPIRNdqjhjN8JsRCE_TxYYjpxEM&gid=878259683';

/**
 * Parse CSV File
 */
function parse_csv($name) {
  $data = array();
  $grades = array();
  $headers = array();
  if (($handle = fopen($name . '.csv', 'r')) !== FALSE) {
    while (($row = fgetcsv($handle, 0, ',')) !== FALSE) {
      if (sizeof($headers) === 0) {
        foreach($row as $index => $cell) {
          $headers[] = trim($cell);
        }
      } else {
        $grade = array();

        foreach($row as $index => $cell) {
          $key = $headers[trim($index)];
          $cell = trim($cell);

          $data[$key] = ($cell !== '') ? $cell : NULL;

          if ($key === 'agency_name') {
            $grade['agency_name'] = trim($cell);
          }
          if ($key === 'overall_score') {
            $grade['overall_score'] = floatval(trim($cell));
          }
          if ($key === 'change_overall_score') {
            $grade['change_overall_score'] = $cell;
          }
        }

        if (!empty($row[0])) {
          $key = trim(preg_replace("/[^A-Za-z0-9- ]/", '', strtolower($row[0])));
          $filename = 'json/' . $name . '-' . str_replace(' ', '-', $key) . '.json';
          $json = json_encode($data);
          $grades[] = $grade;

          unlink($filename);
          file_put_contents($filename, $json);
        }
      }
    }

    fclose($handle);

    $grades_filename = 'json/_' . $name . '_grades.json';
    $grades_json = json_encode($grades);

    unlink($grades_filename);
    file_put_contents($grades_filename, $grades_json);
  }
}

/**
 * Update Data for URL
 * @param  [String] $file URL to Google Sheet
 * @param  [String] $name Name of File
 * @return [String]       Output
 */
function update_file($file, $name) {
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $file);
  curl_setopt($ch, CURLOPT_VERBOSE, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_AUTOREFERER, false);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);
  curl_setopt($ch, CURLOPT_TIMEOUT, 20);
  curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

  $result = curl_exec($ch);
  $output = "";

  if ($errno = curl_errno($ch)) {
    $error_message = curl_strerror($errno);
    $output .= "<p><span class=\"label label-danger\">ERROR</span>&nbsp; Failed to Download <b>{$name}.csv</b> - Error ({$errno}): {$error_message}</p>";
  } elseif (!$result) {
    $output .= "<p><span class=\"label label-danger\">ERROR</span>&nbsp; Failed to Download <b>{$name}.csv</b> CSV File</p>";
  } else {
    unlink("{$name}.csv");
    file_put_contents("{$name}.csv", $result);
    $output .= "<p><span class=\"label label-success\">SUCCESS</span>&nbsp; <a class='download-link' href='{$name}.csv' target='_blank'>{$name}.csv</a> downloaded &amp; application updated</p>";
  }

  curl_close($ch);

  parse_csv($name);

  return $output;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Policing Scorecard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="shortcut icon" href="https://embed.joincampaignzero.org/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css">

    <style>
    .main {
      padding-top: 40px;
    }
    .navbar-brand {
      color: #FFF !important;
    }
    .download-link {
      color: #222;
      text-decoration: none;
      font-weight: bold;
    }
    .download-link:hover {
      color: #000;
      text-decoration: underline;
    }
    a.btn-primary {
      width: 170px;
      text-align: left;
    }
    </style>
  </head>
  <body>
    <?php if ($valid_token): ?>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="navbar-brand">Police Scorecard</div>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="https://docs.google.com/spreadsheets/d/1IuNh-y2kHQkOdXywp9Rnwl4IOnON4WQla5_XhPWeAQM/edit#gid=1005611362" target="_blank">Manage Data</a>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <?php endif ?>

    <div class="container main" role="main">
      <?php if (!$update && $valid_token): ?>
        <div class="page-header">
          <h1>Manage Data</h1>
        </div>

        <p><span class="label label-info">CURRENT</span>&nbsp; <a class='download-link' href='data.csv' target='_blank'>data.csv</a> downloaded</p>
        <p><span class="label label-info">CURRENT</span>&nbsp; <a class='download-link' href='sheriff.csv' target='_blank'>sheriff.csv</a> downloaded</p>
        <p>&nbsp;</p>
        <p><a href="update.php?update=true&token=<?= $_REQUEST['token']; ?>" type="button" class="btn btn-primary" onclick="return updateData()">Get Latest Spreadsheet</a></p>
      <?php elseif ($update && $valid_token): ?>
        <div class="page-header">
          <h1>Downloaded Data</h1>
        </div>
        <?= update_file($data_url, 'data'); ?>
        <?= update_file($sheriff_url, 'sheriff'); ?>
        <p>&nbsp;</p>
        <p><a href="update.php?update=true&token=<?= $_REQUEST['token']; ?>" type="button" class="btn btn-primary" onclick="return updateData()">Get Latest Spreadsheet</a></p>
      <?php else: ?>
        <h1><span class="label label-danger">Unauthorized Access</span></h1>
      <?php endif ?>
    </div>

    <script>
    function updateData() {
      if (confirm('This will overwrite the existing data and cannot be undone. Continue ?')) {
        $('a.btn-primary').attr('disabled', 'disabled').css('cursor', 'pointer').text('Downloading Data ...');
        return true;
      }

      return false;
    }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
  </body>
</html>
