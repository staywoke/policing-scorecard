<?php
require('common.php');

$state = (!empty($_REQUEST['state'])) ? $_REQUEST['state'] : null;
$type = (!empty($_REQUEST['type'])) ? $_REQUEST['type'] : null;
$location = (!empty($_REQUEST['location'])) ? $_REQUEST['location'] : null;
$ac = '?ac=' . getHash();
$page = 'home';

if (!empty($state) && !empty($type) && !empty($location)) {
  // Fetch External Data
  $reportCard = fetchGrades($state, $type);
  $scorecard = fetchLocationScorecard($state, $type, $location);
  $stateData = fetchStateData($state);

  $page = 'report';

  $stateName = $scorecard['geo']['state']['name'];
  $stateCode = $scorecard['geo']['state']['abbr'];
  $title = "{$stateName} Police Scorecard";
  $description = "Get the facts about police violence and accountability in {$stateName}. Evaluate each department and hold them accountable at policescorecard.org";
  $socialUrl = rawurlencode('https://policescorecard.org');
  $socialText = rawurlencode($description);
  $socialSubject = rawurlencode($title);
  $grade = $scorecard['report']['grade_letter'];

  // A placeholder while we swap out static data with API, some props do not exist
  $placeholder = array();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title><?= $title ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="description" content="The Police Scorecard evaluates police departments based on quantitative data on arrests, use of force, accountability and other policing issues to make progress towards more just and equitable policing outcomes.">
    <meta name="author" content="StayWoke">

    <meta name="apple-mobile-web-app-title" content="Police Scorecard">
    <meta name="application-name" content="Police Scorecard">

    <!-- Twitter META Info -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@samswey">
    <meta property="twitter:title" content="<?= $title ?>">
    <meta property="twitter:description" content="<?= $description ?>">
    <meta property="twitter:creator" content="@mrmidi">
    <meta property="twitter:image:src" content="https://policescorecard.org/assets/img/card.jpg<?= trim($ac) ?>">
    <meta property="twitter:domain" content="https://policescorecard.org">

    <!-- Open Graph protocol -->
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= $title ?>">
    <meta property="og:url" content="https://policescorecard.org">
    <meta property="og:image" content="https://policescorecard.org/assets/img/card.jpg<?= trim($ac) ?>">
    <meta property="og:site_name" content="<?= $title ?>">
    <meta property="og:description" content="<?= $description ?>">

    <link href="favicon.ico" rel="shortcut icon">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow+Condensed:300,400,500,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css<?= trim($ac) ?>">

    <!-- Facebook Pixel Code -->
    <script>!function(e,n,t,o,c,s,a){e.fbq||(c=e.fbq=function(){c.callMethod?c.callMethod.apply(c,arguments):c.queue.push(arguments)},e._fbq||(e._fbq=c),(c.push=c).loaded=!0,c.version="2.0",c.queue=[],(s=n.createElement(t)).async=!0,s.src="https://connect.facebook.net/en_US/fbevents.js",(a=n.getElementsByTagName(t)[0]).parentNode.insertBefore(s,a))}(window,document,"script"),fbq("init","2063073133961763")</script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2063073133961763&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->
  </head>

  <body>
    <div class="wrapper">
      <!-- Main Menu -->
      <?php include_once('partials/header-menu.php'); ?>

      <!-- Page Content -->
      <?php include_once("pages/${page}.php"); ?>

      <!-- Footer -->
      <?php include_once('partials/footer.php'); ?>
    </div>

    <!-- Modal -->
    <?php include_once('partials/modal.php'); ?>

    <!-- Scripts -->
    <?php include_once("partials/scripts-${page}.php"); ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141045547-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-141045547-1');
    </script>
  </body>
</html>
