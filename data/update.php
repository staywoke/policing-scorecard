<?php
error_reporting(0);
set_time_limit(5);

$token = $_REQUEST['token'];
$update = $_REQUEST['update'];
$valid_token = (md5($token) === '5d0f91a00d76444b843046b7c15eb5c2');

/**
 * URLs for Widget Data
 */
$data_url = 'https://docs.google.com/spreadsheets/d/1IuNh-y2kHQkOdXywp9Rnwl4IOnON4WQla5_XhPWeAQM/export?format=csv&id=1IuNh-y2kHQkOdXywp9Rnwl4IOnON4WQla5_XhPWeAQM&gid=1005611362';

function parse_csv() {
  $data = array();
  $grades = array();
  $headers = array();
  if (($handle = fopen('data.csv', 'r')) !== FALSE) {
    while (($row = fgetcsv($handle, 0, ',')) !== FALSE) {
      if (sizeof($headers) === 0) {
        foreach($row as $index => $cell) {
          $headers[] = $cell;
        }
      } else {
        $grade = array();

        foreach($row as $index => $cell) {
          $key = $headers[$index];
          $data[$key] = $cell;

          if ($key === 'agency_name') {
            $grade['agency_name'] = $cell;
          }
          if ($key === 'overall_score') {
            $grade['overall_score'] = floatval($cell);
          }
        }

        $filename = 'json/' . str_replace(' ', '-', strtolower($row[0])) . '.json';
        $json = json_encode($data);
        $grades[] = $grade;

        file_put_contents($filename, $json);
      }
    }

    fclose($handle);

    $filename = 'json/_grades.json';
    $json = json_encode($grades);

    file_put_contents($filename, $json);
  }

//  return json_encode($data);
}

/**
 * @param $file
 * @param $name
 * @return string
 */
function update_file($file, $name)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $file);
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_AUTOREFERER, false);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 2);
    curl_setopt($ch, CURLOPT_TIMEOUT, 3);
    curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);

    $result = curl_exec($ch);
    $output = "";

    if ($errno = curl_errno($ch)) {
        $error_message = curl_strerror($errno);
        $output .= "<p><span class=\"label label-danger\">ERROR</span>&nbsp; Failed to Download <b>{$name}.csv</b> - Error ({$errno}): {$error_message}</p>";
    } elseif (!$result) {
        $output .= "<p><span class=\"label label-danger\">ERROR</span>&nbsp; Failed to Download <b>{$name}.csv</b> CSV File</p>";
    } else {
        file_put_contents("{$name}.csv", $result);
        $output .= "<p><span class=\"label label-success\">SUCCESS</span>&nbsp; <a class='download-link' href='{$name}.csv' target='_blank'>{$name}.csv</a> downloaded &amp; application updated</p>";
    }

    curl_close($ch);

    parse_csv();

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
        <p>&nbsp;</p>
        <p><a href="update.php?update=true&token=<?= $_REQUEST['token']; ?>" type="button" class="btn btn-primary" onclick="return updateData()">Get Latest Spreadsheet</a></p>
      <?php elseif ($update && $valid_token): ?>
        <div class="page-header">
            <h1>Downloaded Data</h1>
        </div>
        <?= update_file($data_url, 'data'); ?>
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
