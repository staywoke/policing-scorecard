<?php
error_reporting(0);
set_time_limit(0);

require(__DIR__ .'/../common.php');

$token = $_REQUEST['token'];
$update = $_REQUEST['update'];
$valid_token = (md5($token) === '5d0f91a00d76444b843046b7c15eb5c2');
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css">

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
    .card-header {
      border: 1px solid #ddd;
      background: #eee;
    }
    .card-header h5 {
      margin: 0;
    }
    .card-header .btn-link {
      width: 100%;
      text-align: left;
    }
    .card-body {
      border: 1px solid #ddd;
      background: #f7f7f7;
    }
    .accordion {
      margin-top: 10px;
    }
    .accordion ul {
      margin-left: 12px;
      padding: 10px 16px;
    }
    #results {
      margin-top: 20px;
      margin-bottom: 20px;
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
          <div class="navbar-brand">
            <a href="/data/update.php?token=<?= $token ?>" style="color: white;">Police Scorecard</a>
          </div>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="https://docs.google.com/spreadsheets/d/14ZrbaHnzb2eTtrwLS2o8CwNC7EJ90ZVHAVksf81Bfo8/edit" target="_blank">Manage Data</a>
            </li>

            <li class="dropdown">
              <a href="/data/clear-cache.php?token=<?= $token ?>">Clear Cache</a>
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

        <p>Use the button below to pull down the latest CSV file from Google Sheets and import the data into our API.</p>

        <div class="alert alert-danger alert-dismissible" role="alert" style="display: none;">
          <strong>ERROR:</strong> <span id="api-error-message">The import failed to complete.</span>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <p><button class="btn btn-primary" onclick="return updateData()" data-loading-text="<i class='fa fa-spinner fa-spin '></i> &nbsp;Downloading Data ...">Download Latest Data</button> <div id="loading-text" class="text-info small" style="display: none;">&nbsp;This may take a few minutes</div></p>

        <div id="results" style="display: none">

          <h4 class="text-info">Import Results:</h4>

          <div class="accordion" id="summary">
            <!-- Success -->
            <div class="card">
              <div class="card-header" id="headingSuccess">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSuccess" aria-expanded="true" aria-controls="collapseSuccess">
                  Success ( <span id="successTotal"></span> )
                  </button>
                </h5>
              </div>

              <div id="collapseSuccess" class="collapse" aria-labelledby="headingSuccess" data-parent="#summary">
                <div class="card-body">
                  <div id="success">
                    <ul></ul>
                  </div>
                </div>
              </div>
            </div>

            <!-- Failed -->
            <div class="card">
              <div class="card-header" id="headingFailed">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFailed" aria-expanded="true" aria-controls="collapseFailed">
                  Failed ( <span id="failedTotal"></span> )
                  </button>
                </h5>
              </div>

              <div id="collapseFailed" class="collapse" aria-labelledby="headingFailed" data-parent="#summary">
                <div class="card-body">
                  <div id="failed">
                    <ul></ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <h5 class="text-info">Meta Info:</h5>

          <div class="accordion" id="accordion">
            <!-- Errors -->
            <div class="card">
              <div class="card-header" id="headingErrors">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseErrors" aria-expanded="true" aria-controls="collapseErrors">
                    Errors ( <span id="errorsTotal"></span> )
                  </button>
                </h5>
              </div>

              <div id="collapseErrors" class="collapse" aria-labelledby="headingErrors" data-parent="#accordion">
                <div class="card-body">
                  <div id="errors">
                    <ul></ul>
                  </div>
                </div>
              </div>
            </div>

            <!-- Warnings -->
            <div class="card">
              <div class="card-header" id="headingWarnings">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseWarnings" aria-expanded="true" aria-controls="collapseWarnings">
                    Warnings ( <span id="warningsTotal"></span> )
                  </button>
                </h5>
              </div>

              <div id="collapseWarnings" class="collapse" aria-labelledby="headingWarnings" data-parent="#accordion">
                <div class="card-body">
                  <div id="warnings">
                    <ul></ul>
                  </div>
                </div>
              </div>
            </div>

            <!-- Notices -->
            <div class="card">
              <div class="card-header" id="headingNotices">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNotices" aria-expanded="true" aria-controls="collapseNotices">
                    Notices ( <span id="noticesTotal"></span> )
                  </button>
                </h5>
              </div>

              <div id="collapseNotices" class="collapse" aria-labelledby="headingNotices" data-parent="#accordion">
                <div class="card-body">
                  <div id="notices">
                    <ul></ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php else: ?>
        <h1><span class="label label-danger">Unauthorized Access</span></h1>
      <?php endif ?>
    </div>

    <script>
    function updateData() {
      if (confirm('This will overwrite the existing data and cannot be undone. Continue ?')) {
        var $button = $('button.btn-primary');
        var $errors = $('#errors ul');
        var $failed = $('#failed ul');
        var $loadingText = $('#loading-text');
        var $notices = $('#notices ul');
        var $results = $('#results');
        var $success = $('#success ul');
        var $warnings = $('#warnings ul');

        var $errorsTotal = $('#errorsTotal');
        var $failedTotal = $('#failedTotal');
        var $noticesTotal = $('#noticesTotal');
        var $successTotal = $('#successTotal');
        var $warningsTotal = $('#warningsTotal');

        var failedTotal = 0;
        var successTotal = 0;

        $errors.html('');
        $failed.html('');
        $notices.html('');
        $results.slideUp();
        $success.html('');
        $warnings.html('');

        $errorsTotal.text(0);
        $failedTotal.text(0);
        $noticesTotal.text(0);
        $successTotal.text(0);
        $warningsTotal.text(0);

        $button.button('loading');
        $loadingText.show();

        $('#api-error-message').text('The import failed to complete.');
        $('.alert').slideUp();

        $.ajax({
          type: 'POST',
          url: '<?= API_BASE ?>update/scorecard',
          data: {
            token: '<?= $token ?>'
          },
          beforeSend: function (jqXHR, settings) {
            jqXHR.setRequestHeader('API-Key', '<?= API_KEY ?>');
          },
          headers: {
            'API-Key': '<?= API_KEY ?>',
            'Connection': 'keep-alive'
          },
          error: function (request, status, error) {
            $button.button('reset');
            $loadingText.hide();

            $('.alert').slideDown();
          },
          success: function (response) {
            if (response && response.data) {
              $.each(response.errors, function(key, row) {
                $errors.append('<li>' + row + '</li>');
              });

              $.each(response.notices, function(key, row) {
                $notices.append('<li>' + row + '</li>');
              });

              $.each(response.warnings, function(key, row) {
                $warnings.append('<li>' + row + '</li>');
              });

              $.each(response.data, function(key, row) {
                if (row.success) {
                  successTotal++;
                  $success.append('<li>' + row.location + '</li>');
                } else {
                  failedTotal++;
                  $failed.append('<li>' + row.location + ': ' + row.message + '<pre style="display: none">' + row.stack + '</pre></li>');
                }
              });

              $warningsTotal.text(response.warnings.length.toLocaleString());
              $noticesTotal.text(response.notices.length.toLocaleString());
              $errorsTotal.text(response.errors.length.toLocaleString());
              $successTotal.text(successTotal.toLocaleString());
              $failedTotal.text(failedTotal.toLocaleString());

              $results.slideDown();
            } else if (response && response.errors) {
              $button.button('reset');
              $loadingText.hide();

              $('#api-error-message').text(response.errors[0])

              $('.alert').slideDown();
            }

            $button.button('reset');
            $loadingText.hide();
          },
          dataType: 'json'
        });

        return false;
      }

      return false;
    }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
  </body>
</html>
