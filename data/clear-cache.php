<?php
error_reporting(0);
set_time_limit(0);

require(__DIR__ .'/../common.php');

$token = $_REQUEST['token'];
$update = $_REQUEST['update'];
$valid_token = (md5($token) === '5d0f91a00d76444b843046b7c15eb5c2');

if ($valid_token) {
    $files = glob(__DIR__ .'/../cache/*.cache');
    foreach ($files as $file) {
        if (is_file($file)) {
            unlink($file);
        }
    }
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

            <li class="dropdown active">
              <a href="/data/clear-cache.php?token=<?= $token ?>">Clear Cache</a>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <?php endif ?>

    <div class="container main" role="main">
        <div class="page-header">
          <h1>Cache Cleared</h1>
        </div>

        <p class="text-success">API Cache has been cleared.</p>
    </div>
  </body>
</html>
