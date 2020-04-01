<?php
require('common.php');

$state = (!empty($_REQUEST['state'])) ? $_REQUEST['state'] : null;
$type = (!empty($_REQUEST['type'])) ? $_REQUEST['type'] : null;
$location = (!empty($_REQUEST['location'])) ? $_REQUEST['location'] : null;
$ac = '?ac=' . getHash();

if (!empty($state) && !empty($type) && !empty($location)) {
  $scorecard = fetchLocationScorecard($state, $type, $location);

  $stateName = $scorecard['geo']['state']['name'];
  $stateCode = $scorecard['geo']['state']['abbr'];
  $title = "{$stateName} Police Scorecard";
  $description = "Get the facts about police violence and accountability in {$stateName}. Evaluate each department and hold them accountable at policescorecard.org";
  $socialUrl = rawurlencode('https://policescorecard.org');
  $socialText = rawurlencode($description);
  $socialSubject = rawurlencode($title);
  $grade = $scorecard['report']['grade_letter'];

  $reportCard = fetchGrades($state, $type);
  $stateData = fetchStateData($state);

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
    <a href="/sandiego" id="sticky-top-bar">Click Here to Read Our San Diego Report</a>

    <div class="wrapper">
      <div class="section bg-gray header">
        <div class="content">
          <a href="./" class="logo">
            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 288.53 64.07"><defs><style>.cls-1{fill:#fff;fill-rule:evenodd}</style><mask id="mask" x="131.59" y="-.02" width="1.53" height="64.09" maskUnits="userSpaceOnUse"><g transform="translate(-259.98 -478.02)"><path class="cls-1" d="M391.57 478h1.53v64.09h-1.53z" id="a"/></g></mask></defs><path class="cls-1" d="M414.35 489.61c0 2.1-1 2.83-2.78 2.83h-2.67v-8.77h2.67c1.81 0 2.78.73 2.78 2.87zm-2.64-8.83h-4.92a1 1 0 0 0-1.15.83.81.81 0 0 0 0 .31v21.86a1 1 0 0 0 .84 1.14.81.81 0 0 0 .31 0h1a1 1 0 0 0 1.11-.87 1.22 1.22 0 0 0 0-.27v-8.45h2.81c3.68 0 5.9-1.55 5.9-5.1v-4.31c0-3.56-2.22-5.14-5.9-5.14zm18.94 18.73c0 2.14-1 2.86-2.78 2.86s-2.77-.72-2.77-2.86v-13.25c0-2.14 1-2.86 2.77-2.86s2.78.72 2.78 2.86zm-2.65-19h-.28c-3.67 0-5.89 1.52-5.89 5.11v14.49c0 3.55 2.22 5.11 5.89 5.11h.28c3.68 0 5.9-1.56 5.9-5.11v-14.47c.01-3.55-2.21-5.11-5.9-5.11zm13.15.25h-1a1 1 0 0 0-1.15.82 1 1 0 0 0 0 .35v21.83a1 1 0 0 0 .84 1.14.76.76 0 0 0 .3 0h7.53a1 1 0 0 0 1.17-.79.82.82 0 0 0 0-.35v-.65A1 1 0 0 0 448 502a.76.76 0 0 0-.3 0h-5.4v-20a1 1 0 0 0-.8-1.17 1 1 0 0 0-.35 0m15 23V482a1 1 0 0 0-.81-1.16.93.93 0 0 0-.29 0h-1a1 1 0 0 0-1.14.84.76.76 0 0 0 0 .3v21.86a1 1 0 0 0 .79 1.17.82.82 0 0 0 .35 0h1a1 1 0 0 0 1.1-1.18m17.13-7.41a1 1 0 0 0-.84-1.14.81.81 0 0 0-.31 0h-1a1 1 0 0 0-1.09.91 1.85 1.85 0 0 0 0 .23v3.14c0 2.1-.9 2.86-2.67 2.86s-2.67-.76-2.67-2.86v-13.3c0-2.1.9-2.86 2.67-2.86s2.67.76 2.67 2.86v2.52a1 1 0 0 0 .84 1.14.76.76 0 0 0 .3 0h1a1 1 0 0 0 1.1-.89 2 2 0 0 0 0-.25v-3.14c0-3.48-2.22-5.11-5.9-5.11h-.07c-3.67 0-5.89 1.63-5.89 5.11v14.49c0 3.66 2.22 5.11 5.89 5.11h.07c3.68 0 5.9-1.49 5.9-5.11zM413.41 526l-3.15-1.72c-1.39-.8-1.91-1.32-1.91-2.77v-1.68c0-1.93.94-2.69 2.6-2.69s2.6.76 2.6 2.69v2.14a1 1 0 0 0 .84 1.14.81.81 0 0 0 .31 0h.9a1 1 0 0 0 1.14-.84.76.76 0 0 0 0-.3v-2.66c0-3.49-2.43-5-5.75-5h-.07c-3.33 0-5.76 1.48-5.76 5v3c0 2.32 1.18 3.35 3.4 4.63l3.12 1.72c1.42.79 1.94 1.42 1.94 2.86v1.9c0 1.9-.94 2.76-2.63 2.76s-2.64-.86-2.64-2.76V531a1 1 0 0 0-.84-1.14.81.81 0 0 0-.31 0h-.9a1 1 0 0 0-1.14.84.76.76 0 0 0 0 .3v3c0 3.66 2.11 5 5.79 5h.05c3.68 0 5.79-1.41 5.79-5v-3.38c0-2.31-1.32-3.49-3.4-4.66m14-11.66h-.07c-3.67 0-5.89 1.62-5.89 5.1v14.49c0 3.66 2.22 5.11 5.89 5.11h.07c3.68 0 5.9-1.48 5.9-5.11v-3.76a1 1 0 0 0-.85-1.13.76.76 0 0 0-.3 0h-1a1 1 0 0 0-1.1.88 1 1 0 0 0 0 .25v3.14c0 2.11-.9 2.87-2.67 2.87s-2.67-.76-2.67-2.87V520c0-2.11.9-2.87 2.67-2.87s2.67.76 2.67 2.87v2.55a1 1 0 0 0 .84 1.14.76.76 0 0 0 .3 0h1a1 1 0 0 0 1.15-.83.81.81 0 0 0 0-.31v-3.18c0-3.48-2.22-5.1-5.9-5.1m19.52 19c0 2.14-1 2.87-2.77 2.87s-2.78-.73-2.78-2.87V520c0-2.14 1-2.87 2.78-2.87s2.77.73 2.77 2.87zm-2.64-19H444c-3.68 0-5.9 1.52-5.9 5.1v14.5c0 3.55 2.22 5.1 5.9 5.1h.27c3.68 0 5.9-1.55 5.9-5.1v-14.48c0-3.55-2.17-5.1-5.9-5.1zm19.69 8.85c0 2.14-1 2.87-2.77 2.87h-2.67v-8.56h2.67c1.8 0 2.77.72 2.77 2.86zm.42 5.21c1.8-.72 2.84-2.21 2.84-4.62v-4c0-3.55-2.21-5.1-5.89-5.1h-4.93a1 1 0 0 0-1.14.84 1.41 1.41 0 0 0 0 .29v21.84a1 1 0 0 0 .84 1.14.76.76 0 0 0 .3 0h1a1 1 0 0 0 1.14-.84.76.76 0 0 0 0-.3v-8.8h2.84l3.06 9a1.21 1.21 0 0 0 1.28.94h1a.93.93 0 0 0 1.08-.75 1 1 0 0 0-.08-.57zm17.1 7.52h-5.93v-7.93h4.75a1 1 0 0 0 1.14-.84.76.76 0 0 0 0-.3v-.62a1 1 0 0 0-.84-1.14.76.76 0 0 0-.3 0h-4.75v-7.59h5.82a1 1 0 0 0 1.15-.83.81.81 0 0 0 0-.31v-.59a1 1 0 0 0-.84-1.14.81.81 0 0 0-.31 0h-7.94a1 1 0 0 0-1.14.84.76.76 0 0 0 0 .3v21.88a1 1 0 0 0 .84 1.14.76.76 0 0 0 .3 0h8a1 1 0 0 0 1.14-.84.76.76 0 0 0 0-.3V537a1 1 0 0 0-.84-1.14.76.76 0 0 0-.3 0m11.23-21.56h-.07c-3.68 0-5.89 1.62-5.89 5.1v14.49c0 3.66 2.21 5.11 5.89 5.11h.07c3.68 0 5.9-1.48 5.9-5.11v-3.76a1 1 0 0 0-.85-1.13.76.76 0 0 0-.3 0h-1a1 1 0 0 0-1.14.84 1.41 1.41 0 0 0 0 .29v3.14c0 2.11-.91 2.87-2.67 2.87s-2.67-.76-2.67-2.87V520c0-2.11.9-2.87 2.67-2.87s2.67.76 2.67 2.87v2.55a1 1 0 0 0 .84 1.14.76.76 0 0 0 .3 0h1a1 1 0 0 0 1.15-.83.81.81 0 0 0 0-.31v-3.18c0-3.48-2.22-5.1-5.9-5.1m14 16l2.12-11.66L511 530.3zm4.37-14.7a1.17 1.17 0 0 0-1.24-1h-2a1.17 1.17 0 0 0-1.25 1l-4.37 21.87c-.13.8.25 1.24 1 1.24h.87a1.11 1.11 0 0 0 1.21-1l.83-4.66h5.24l.83 4.66a1.16 1.16 0 0 0 1.25 1h1a.92.92 0 0 0 1-.77.84.84 0 0 0 0-.47zm17.2 7.52c0 2.14-1 2.87-2.77 2.87h-2.67v-8.56h2.67c1.8 0 2.77.72 2.77 2.86zm.42 5.21c1.8-.72 2.84-2.21 2.84-4.62v-4c0-3.55-2.22-5.1-5.89-5.1h-4.93a1 1 0 0 0-1.14.84 1.41 1.41 0 0 0 0 .29v21.84a1 1 0 0 0 .84 1.14.76.76 0 0 0 .3 0h1a1 1 0 0 0 1.15-.83.81.81 0 0 0 0-.31v-8.8h2.84l3 9a1.21 1.21 0 0 0 1.29.94h1a.93.93 0 0 0 1.08-.75 1 1 0 0 0-.08-.57zm16.56 4.7c0 2.14-1 2.86-2.78 2.86h-2.6v-18.43h2.6c1.81 0 2.78.72 2.78 2.86zm-2.64-18.42h-4.85a1 1 0 0 0-1.15.83 1.5 1.5 0 0 0 0 .3v21.88a1 1 0 0 0 .85 1.13.76.76 0 0 0 .3 0h4.85c3.68 0 5.9-1.55 5.9-5.1v-13.95c0-3.55-2.22-5.1-5.9-5.1zm-55.06-12.42h-5.93v-7.93h4.75a1 1 0 0 0 1.14-.84 1.5 1.5 0 0 0 0-.3v-.62a1 1 0 0 0-.84-1.14.76.76 0 0 0-.3 0h-4.75v-7.59h5.82a1 1 0 0 0 1.15-.83 1.61 1.61 0 0 0 0-.31v-.6a1 1 0 0 0-.84-1.14.81.81 0 0 0-.31 0h-7.94a1 1 0 0 0-1.14.84.76.76 0 0 0 0 .3v21.88a1 1 0 0 0 .83 1.14h8.36a1 1 0 0 0 1.14-.84 1.5 1.5 0 0 0 0-.3v-.59a1 1 0 0 0-.84-1.14.76.76 0 0 0-.3 0" transform="translate(-259.98 -478.02)"/><g mask="url(#mask)"><path class="cls-1" d="M393.1 541.33v-62.55a.76.76 0 0 0-.76-.76.77.77 0 0 0-.77.76v62.55a.77.77 0 0 0 .77.76.76.76 0 0 0 .76-.76" transform="translate(-259.98 -478.02)"/></g><path class="cls-1" d="M266.4 506a5.83 5.83 0 0 0 4.09-1.62.31.31 0 0 0 0-.44l-1-1.08a.33.33 0 0 0-.42 0 4.09 4.09 0 0 1-2.58 1 3.89 3.89 0 0 1 0-7.77 4 4 0 0 1 2.59 1 .27.27 0 0 0 .38 0l1-1.06a.32.32 0 0 0 0-.45 5.69 5.69 0 0 0-4.1-1.6 6 6 0 1 0 0 12.05m15.17-7.85h.06l1.68 3.65h-3.39zm-5.25 7.65h1.47a.48.48 0 0 0 .48-.34l.83-1.81h5l.9 1.85c.12.24.23.34.49.34H287a.29.29 0 0 0 .32-.27.25.25 0 0 0 0-.17L282 494.11a.29.29 0 0 0-.28-.19h-.17a.3.3 0 0 0-.29.19L276 505.38a.29.29 0 0 0 .15.38.32.32 0 0 0 .17.02zm16.88 0h1.51a.34.34 0 0 0 .31-.25l1-6.35h.06l2.92 6.6a.32.32 0 0 0 .29.18h.3a.28.28 0 0 0 .31-.18l3-6.58 1 6.35a.37.37 0 0 0 .32.25h1.53a.29.29 0 0 0 .32-.27.25.25 0 0 0 0-.12l-2-11.25a.29.29 0 0 0-.3-.25h-.27a.28.28 0 0 0-.29.16L299.5 502l-3.71-7.91a.3.3 0 0 0-.29-.16h-.26a.28.28 0 0 0-.31.25l-2 11.25a.31.31 0 0 0 .22.38h.1m22-9.65h2a1.62 1.62 0 0 1 1.71 1.53v.1a1.67 1.67 0 0 1-1.6 1.74h-2.07zm-1.86 9.63H315a.34.34 0 0 0 .32-.32v-3.9h2.08a3.74 3.74 0 1 0 .39-7.47h-4.39a.32.32 0 0 0-.33.31v11.09a.32.32 0 0 0 .36.28zm17.63-7.65l1.74 3.65h-3.39zm-5.25 7.65h1.46a.51.51 0 0 0 .49-.34l.83-1.81h5l.83 1.81a.48.48 0 0 0 .48.34h1.5a.29.29 0 0 0 .32-.27.25.25 0 0 0 0-.17l-5.19-11.23a.28.28 0 0 0-.29-.19h-.2a.32.32 0 0 0-.28.19l-5.2 11.27a.29.29 0 0 0 .18.38.22.22 0 0 0 .11.01zm17.52 0h1.56a.34.34 0 0 0 .32-.32v-11a.34.34 0 0 0-.32-.32h-1.56a.34.34 0 0 0-.32.32v11.03a.34.34 0 0 0 .32.32m14.94.15a8.63 8.63 0 0 0 4.18-1.09.37.37 0 0 0 .13-.27v-4.29a.31.31 0 0 0-.3-.32h-3.23a.31.31 0 0 0-.32.3v1.35a.31.31 0 0 0 .32.3h1.34v1.42a5.27 5.27 0 0 1-2 .42 3.86 3.86 0 1 1 2.52-6.75.3.3 0 0 0 .42 0l1-1.09a.33.33 0 0 0 0-.47 6.4 6.4 0 0 0-4.11-1.56 6 6 0 1 0 0 12.05m11.87-.19h1.54a.32.32 0 0 0 .32-.32v-7.2l6.9 7.57a.36.36 0 0 0 .29.11h.23a.31.31 0 0 0 .32-.3v-11.23a.34.34 0 0 0-.32-.32h-1.43a.32.32 0 0 0-.32.32v6.92l-6.87-7.33a.34.34 0 0 0-.28-.11h-.26a.31.31 0 0 0-.32.3v11.31a.34.34 0 0 0 .32.32M260.32 525.9h7.19a.33.33 0 0 0 .32-.31v-1.39a.32.32 0 0 0-.32-.32h-4.29L268 515a.84.84 0 0 0 .16-.48.34.34 0 0 0-.32-.32h-7a.34.34 0 0 0-.32.32v1.39a.34.34 0 0 0 .32.32H265v.06l-4.9 8.8a.87.87 0 0 0-.12.52.33.33 0 0 0 .32.31m14.93 0h6.85a.31.31 0 0 0 .32-.3v-1.38a.32.32 0 0 0-.32-.32h-5V521h4.16a.32.32 0 0 0 .32-.32v-1.39a.33.33 0 0 0-.32-.31h-4.14v-2.75h5a.32.32 0 0 0 .32-.32v-1.41a.32.32 0 0 0-.32-.32h-6.87a.32.32 0 0 0-.32.32v11.09a.31.31 0 0 0 .31.31m16.42-9.71h2.75a1.66 1.66 0 0 1 1.66 1.59 1.71 1.71 0 0 1-1.66 1.71h-2.75zm-1.88 9.71h1.55a.34.34 0 0 0 .32-.32v-4.27h1.86l2.24 4.47a.28.28 0 0 0 .27.15h1.77a.31.31 0 0 0 .33-.31.25.25 0 0 0 0-.17l-2.31-4.26a3.68 3.68 0 0 0 2.49-3.41 3.63 3.63 0 0 0-3.67-3.6h-4.81a.32.32 0 0 0-.32.32v11.08a.32.32 0 0 0 .29.32zm17.13-5.84a3.87 3.87 0 1 1 3.91 3.83h-.06a3.89 3.89 0 0 1-3.85-3.83m9.91 0a6.05 6.05 0 1 0-6.1 6 6 6 0 0 0 6.06-5.94v-.06" transform="translate(-259.98 -478.02)"/></svg>
          </a>

          <a href="javascript:void(0);" id="mobile-toggle"></a>

          <div id="menu">
            <ul>
              <li><a href="about">About the Data</a></li>
              <li><a href="findings">Key Findings</a></li>
              <li><a href="sandiego">Reports</a></li>
              <li><a href="https://www.joincampaignzero.org/about/" target="_blank">Planning Team</a></li>
              <li><a href="https://www.joincampaignzero.org/" target="_blank">About Campaign Zero</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="section bg-dotted current-state">
        <div class="content">
          <span class="state-symbol"><?= getStateIcon($stateCode) ?></span>
          <?= $stateName ?>
        </div>
      </div>

      <div class="section hero">
        <div class="content">
          <div class="right">
            <h1>We evaluated the police in <?= $stateName ?>.</h1>
            <h2>Read the <a href="./findings" style="color: #82add7; text-decoration: underline; font-weight: 500;">Findings.</a> See the Grade for Each Department.</h2>
            <div class="buttons">
              <a href="<?= $stateData['police-department'][0]['url'] ?>" class="btn <?= $type === 'police-department' ? 'active' : '' ?>">Police Depts</a>
              <a href="<?= $stateData['sheriff'][0]['url'] ?>" class="btn <?= $type === 'sheriff' ? 'active' : '' ?>">Sheriffs Depts</a>
            </div>
          </div>
          <div class="left">
            <div class="map" id="map-layer">
              <svg style="position: absolute; left: -10000px; top: -10000px;">
                <defs>
                  <filter id="drop-shadow">
                    <feOffset dx='0' dy='0'/>
                    <feGaussianBlur stdDeviation='2' result='offset-blur'/>
                    <feComposite operator='out' in='SourceGraphic' in2='offset-blur' result='inverse'/>
                    <feFlood flood-color='black' flood-opacity='1' result='color'/>
                    <feComposite operator='in' in='color' in2='inverse' result='shadow'/>
                    <feComposite operator='over' in='shadow' in2='SourceGraphic'/>
                  </filter>
                </defs>
              </svg>

              <div id="state-map" class="<?= $type ?> <?= $location ?>"></div>
            </div>
          </div>
          <div class="clear">&nbsp;</div>
        </div>
      </div>

      <div class="section bg-orange score animate" id="toggle-animate">
        <div class="content">
          <div class="left">
            <div class="selected-location">
              <span class="selected-location-label"><?= $type === 'police-department' ? 'Police Department:' : 'Sheriff\'s Department:' ?></span>
              <a href="javascript:void(0);" id="score-location"><?= $scorecard['agency']['name'] ?></a>
            </div>
          </div>
          <div class="right v-center view-score" onclick="SCORECARD.loadResultsInfo('<?= $location ?>')">
            <span class="grade"><?= $grade ?></span>
            <span class="label"><?= $scorecard['report']['overall_score'] ?>%</span>
          </div>
        </div>
      </div>

      <div class="section bg-gray stats">
        <div class="content">
          <div class="one-third">
            <h1><strong><?= $scorecard['report']['total_people_killed'] ?></strong> Killings by Police</h1>
          <?php if(num($scorecard['report']['total_people_killed']) === '0'): ?>
            <p><?= $scorecard['agency']['name']?> was <strong>1 of only <?= ($type === 'police-department') ? '11' : '12' ?> departments</strong> in our analysis that did not use deadly force from 2016-18.</p>
          <?php elseif(!isset($scorecard['report']['black_deadly_force_disparity_per_population']) || !isset($scorecard['report']['hispanic_deadly_force_disparity_per_population'])): ?>
            <p>That's higher than <strong><?= num($scorecard['report']['percentile_killed_by_police'], 0, '%', true) ?></strong> of <?= $stateName ?> police departments.</p>
          <?php else: ?>
            <p>Based on population, a Black person was <strong><?= num($scorecard['report']['black_deadly_force_disparity_per_population'], 1, 'x') ?> as likely</strong> and a Latinx person was <strong><?= num($scorecard['report']['hispanic_deadly_force_disparity_per_population'], 1, 'x') ?> as likely</strong> to be killed by police than a White person in <?= $scorecard['agency']['name']?> from 2013-19.</p>
          <?php endif; ?>
          </div>
          <div class="one-third">
            <h1><strong><?= num($scorecard['police_accountability']['civilian_complaints_reported']) ?></strong> civilian complaints of police misconduct</h1>
          <?php if(num($scorecard['police_accountability']['civilian_complaints_sustained']) === '0'): ?>
            <p> <strong>0 complaints </strong> were ruled in favor of civilians from 2016-18.</p>
          <?php elseif(num($scorecard['police_accountability']['civilian_complaints_sustained']) === '1'): ?>
            <p>Only <strong>1 in every <?= num($scorecard['police_accountability']['civilian_complaints_reported']) ?> complaints</strong> were ruled in favor of civilians from 2016-18.</p>
          <?php elseif(intval(str_replace(',', '', $scorecard['police_accountability']['civilian_complaints_reported'])) / intval(str_replace(',', '', $scorecard['police_accountability']['civilian_complaints_sustained'])) <= 3): ?>
            <p><strong><?= num($scorecard['report']['calc_complaints_sustained'], 0, '%') ?></strong> were ruled in favor of civilians from 2016-2018.</p>
          <?php else: ?>
            <p>Only <strong>1 in every <?= round(intval(str_replace(',', '', $scorecard['police_accountability']['civilian_complaints_reported'])) / intval(str_replace(',', '', $scorecard['police_accountability']['civilian_complaints_sustained']))) ?> complaints</strong> were ruled in favor of civilians from 2016-18.</p>
          <?php endif; ?>
          </div>
          <div class="one-third">
            <h1><strong><?= num($scorecard['report']['total_arrests']) ?></strong> arrests made</h1>
          <?php if (intval($scorecard['report']['percentile_low_level_arrests_per_1k_population']) <= 75): ?>
            <p>Police in <?= $scorecard['agency']['name']?> made <strong><?= num($scorecard['report']['times_more_misdemeanor_arrests_than_violent_crime'], 1, 'x') ?> as many arrests for low level offenses</strong> as for violent crimes in 2013-2018.</p>
          <?php else: ?>
            <p><?= $scorecard['agency']['name']?> had a lower misdemeanor arrest rate than <strong><?= num($scorecard['report']['percentile_low_level_arrests_per_1k_population'], 1, '%') ?></strong> of departments.</p>
          <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="section pad score-details">
        <div class="content section-header">
          <h1 class="title">
            Police violence
          </h1>
          <strong class="grade grade-<?= strtolower(preg_replace('/[^A-Z]/', '', getGrade($scorecard['report']['police_violence_score']))) ?>"><span>Grade: </span><?= getGrade($scorecard['report']['police_violence_score']) ?></strong>
          <span class="divider">&nbsp;|&nbsp;</span>
          <?= num($scorecard['report']['police_violence_score'], 0, '%') ?>
          <a href="javascript:void(0)" class="results-info" data-city="<?= $location ?>" data-result-info="police-violence">?</a>
          <?= getChange($scorecard['report']['change_police_violence_score'], true, 'since \'16-17'); ?>
        </div>
        <div class="content">
          <div class="left">
          <?php if (isset($scorecard['police_violence']['police_shootings_2016']) && isset($scorecard['police_violence']['police_shootings_2017']) && isset($scorecard['police_violence']['police_shootings_2018'])): ?>
            <div class="stat-wrapper">
              <h3>Police Use of Force By Year</h3>
              <div class="buttons" style="text-align: center; margin-top: 18px; display: block;">
                <a href="#" class="btn history-key-police active" onclick="toggleHistory(0); return false;"><span class="key key-red"></span> Police Shootings</a>
                <a href="#" class="btn history-key-other" onclick="toggleHistory(1); return false;"><span class="key key-black"></span> Other Police Weapons</a>
              </div>
              <p>
                <canvas id="bar-chart-history" style="margin: 0 auto;"></canvas>
              </p>
            </div>
          <?php endif; ?>

            <div class="stat-wrapper">
              <a href="javascript:void(0)" data-city="<?= $location ?>" data-more-info="" class="more-info"></a>
              <a href="https://docs.google.com/document/d/1FIeprYO7E8_2JjQzrcMNrQqqVt_YdTAoOEqmHia96sI" target="_blank" class="external-link" title="Open in New Window"></a>

              <h3>Less-Lethal Force</h3>
              <p>Using batons, strangleholds, tasers &amp; other weapons</p>
              <p>
                <?= num($scorecard['report']['total_less_lethal_force_estimated']) ?> Incidents
                <span class="divider">&nbsp;|&nbsp;</span>
                <?= output($scorecard['report']['less_lethal_per_10k_arrests']) ?> every 10k arrests
                <?php if($scorecard['report']['less_lethal_force_change']): ?><span class="divider">&nbsp;|&nbsp;</span><?php endif; ?>
                <?= getChange($scorecard['report']['less_lethal_force_change']); ?>
              </p>

              <?php if(!isset($scorecard['report']['percentile_less_lethal_force']) || (isset($scorecard['report']['percentile_less_lethal_force']) && empty($scorecard['report']['percentile_less_lethal_force']))): ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar no-data" style="width: 0"></div>
                </div>
                <p class="note">City Did Not Provide Data</p>
              <?php else: ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar animate-bar <?= progressBar(100 - intval($scorecard['report']['percentile_less_lethal_force']), 'reverse') ?>" data-percent="<?= num($scorecard['report']['percentile_less_lethal_force'], 0, '%', true) ?>"></div>
                </div>
                <p class="note">^&nbsp; Used More Force per Arrest than <?= num($scorecard['report']['percentile_less_lethal_force'], 0, '%', true) ?> of Depts &nbsp;&nbsp;</p>
              <?php endif; ?>
            </div>

            <div class="stat-wrapper">
              <a href="javascript:void(0)" data-city="<?= $location ?>" data-more-info="" class="more-info"></a>
              <a href="https://drive.google.com/open?id=1U-0WykJJLBAqSknaDF3938FI7TtXhB9z" target="_blank" class="external-link" title="Open in New Window"></a>
              <h3>Deadly Force</h3>
              <p>
              <?php if(output($scorecard['police_violence']['all_deadly_force_incidents']) === '0'): ?>
              <p class="good-job">Did Not Report Using Deadly Force in 2016-18</p>
              <?php else: ?>
              <p>
                <?= num($scorecard['report']['total_people_killed']) ?> People killed by police
                <span class="divider">&nbsp;|&nbsp;</span>
                <?= output($scorecard['report']['killed_by_police_per_10k_arrests']) ?> every 10k arrests
              </p>
              <?php endif; ?>

              <?php if(!isset($scorecard['report']['percentile_killed_by_police']) || (isset($scorecard['report']['percentile_killed_by_police']) && empty($scorecard['report']['percentile_killed_by_police']))): ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar no-data" style="width: 0"></div>
                </div>
                <p class="note">City Did Not Provide Data</p>
              <?php elseif(output($scorecard['police_violence']['all_deadly_force_incidents']) === '0'): ?>
                &nbsp;
              <?php else: ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar animate-bar <?= progressBar(100 - intval($scorecard['report']['percentile_killed_by_police']), 'reverse') ?>" data-percent="<?= output(100 - intval($scorecard['report']['percentile_killed_by_police']), 0, '%') ?>"></div>
                </div>
                <p class="note">^&nbsp; Used More Deadly Force per Arrest than <?= num($scorecard['report']['percentile_killed_by_police'], 0, '%', true) ?> of Depts &nbsp;&nbsp;</p>
              <?php endif; ?>
            </div>

            <?php if($scorecard['report']['police_shootings_incidents'] && $scorecard['report']['percent_shot_first']): ?>
            <div class="stat-wrapper">
              <a href="javascript:void(0)" data-city="<?= $location ?>" data-more-info="" class="more-info"></a>
              <h3>Police Shootings Where Police Did Not Attempt Non-Lethal Force Before Shooting</h3>
              <p><?= num($scorecard['report']['percent_shot_first'], 0, '%') ?> of Shootings (<?= $scorecard['police_violence']['shot_first'] ?>/<?= $scorecard['report']['police_shootings_incidents'] ?>)</p>
              <?php if(!isset($scorecard['report']['percent_shot_first']) || (isset($scorecard['report']['percent_shot_first']) && empty($scorecard['report']['percent_shot_first']))): ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar no-data" style="width: 0"></div>
                </div>
                <p class="note">&nbsp;</p>
              <?php else: ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar animate-bar <?= (intval($scorecard['report']['percent_shot_first']) === 0) ? 'bright-green' : 'always-bad' ?>" data-percent="<?= output(intval($scorecard['report']['percent_shot_first']), 0, '%') ?>"></div>
                </div>
                <p class="note">&nbsp;</p>
              <?php endif; ?>
            </div>
            <?php endif; ?>

            <?php if(output($scorecard['police_violence']['all_deadly_force_incidents']) !== '0' && num($scorecard['report']['percent_police_misperceive_the_person_to_have_gun'], 0, '%') !== 'N/A'): ?>
            <div class="stat-wrapper">
              <a href="javascript:void(0)" data-city="<?= $location ?>" data-more-info="" class="more-info"></a>
              <h3>Where Police say they saw a gun but no gun was found</h3>
              <p><?= num($scorecard['report']['percent_police_misperceive_the_person_to_have_gun'], 0, '%') ?> of Guns "Perceived" were Never Found (<?= output(round(floatval($scorecard['police_violence']['people_killed_or_injured_gun_perceived'])) - round(floatval($scorecard['police_violence']['people_killed_or_injured_armed_with_gun']))) ?>/<?= num($scorecard['police_violence']['people_killed_or_injured_gun_perceived']) ?>)</p>
              <?php if(!isset($scorecard['report']['percent_police_misperceive_the_person_to_have_gun']) || (isset($scorecard['report']['percent_police_misperceive_the_person_to_have_gun']) && empty($scorecard['report']['percent_police_misperceive_the_person_to_have_gun']))): ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar no-data" style="width: 0"></div>
                </div>
                <p class="note">&nbsp;</p>
              <?php else: ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar animate-bar <?= (intval($scorecard['report']['percent_police_misperceive_the_person_to_have_gun']) === 0) ? 'bright-green' : 'always-bad' ?>" data-percent="<?= output(intval($scorecard['report']['percent_police_misperceive_the_person_to_have_gun']), 0, '%') ?>"></div>
                </div>
                <p class="note">&nbsp;</p>
              <?php endif; ?>
            </div>
            <?php endif; ?>

          </div>
          <div class="right">
            <?php if(output($scorecard['report']['total_people_killed']) !== '0'): ?>
            <div class="stat-wrapper">
              <a href="javascript:void(0)" data-city="<?= $location ?>" data-more-info="" class="more-info"></a>
              <h3>People Killed by Police, 2013-2019</h3>
              <p><?= num($scorecard['report']['percent_used_against_people_who_were_unarmed'], 0, '%') ?> were Unarmed <span class="divider">&nbsp;|&nbsp;</span> <?= 100 - intval(num($scorecard['report']['percent_used_against_people_who_were_not_armed_with_gun'], 0)) ?>% had a Gun</p>
            <?php if(num($scorecard['report']['total_people_killed'], 0) !== '0'): ?>
              <div class="canvas-wrapper">
                <div class="canvas-label"><?= num($scorecard['report']['total_people_killed'], 0) ?><br><span><?= grammar('people', num($scorecard['report']['total_people_killed'], 0)) ?> Killed by Police</span></div>
                <canvas id="deadly-force-chart" width="310" height="350" style="margin: 10px auto 20px auto;"></canvas>
              </div>
            <?php else: ?>
              <p>&nbsp;</p>
            <?php endif; ?>
            </div>
            <?php endif; ?>

            <div class="stat-wrapper grouped">
              <a href="javascript:void(0)" data-city="<?= $location ?>" data-more-info="" class="more-info"></a>
              <a href="https://github.com/campaignzero/ca-police-scorecard/blob/master/ca_police_scorecard.ipynb" target="_blank" class="external-link" title="Open in New Window"></a>
              <h3>Police Violence by race</h3>

              <div class="keys">
                <span class="key key-red"></span> Black
                <span class="key key-orange"></span> Latinx
                <span class="key key-black"></span> API
                <span class="key key-grey"></span> Other
                <span class="key key-white"></span> White
              </div>

              <p>City Population</p>
              <div class="progress-bar-wrapper">
                <div class="progress-bar animate-bar grouped key-red" data-percent="<?= output(floatval($scorecard['agency']['black_population']), 0, '%') ?>">
                  <span><?= (intval($scorecard['agency']['black_population']) > 5) ? output(intval($scorecard['agency']['black_population']), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar animate-bar grouped key-orange" data-percent="<?= output(floatval($scorecard['agency']['hispanic_population']), 0, '%') ?>">
                  <span><?= (intval($scorecard['agency']['hispanic_population']) > 5) ? output(intval($scorecard['agency']['hispanic_population']), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar animate-bar grouped key-black" data-percent="<?= output(floatval($scorecard['agency']['asian_pacific_population']), 0, '%') ?>">
                  <span><?= (intval($scorecard['agency']['asian_pacific_population']) > 5) ? output(intval($scorecard['agency']['asian_pacific_population']), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar animate-bar grouped key-grey" data-percent="<?= output(floatval($scorecard['agency']['other_population']), 0, '%') ?>">
                  <span><?= (intval($scorecard['agency']['other_population']) > 5) ? output(intval($scorecard['agency']['other_population']), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar animate-bar grouped key-white" data-percent="<?= output(floatval($scorecard['agency']['white_population']), 0, '%') ?>">
                  <span><?= (intval($scorecard['agency']['white_population']) > 5) ? output(intval($scorecard['agency']['white_population']), 0, '%') : '' ?></span>
                </div>
              </div>

              <p>People Arrested</p>
              <div class="progress-bar-wrapper">
                <div class="progress-bar animate-bar grouped key-red" data-percent="<?= output(floatval($scorecard['report']['percent_black_arrests']), 0, '%') ?>">
                  <span><?= (intval($scorecard['report']['percent_black_arrests']) > 5) ? output(intval($scorecard['report']['percent_black_arrests']), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar animate-bar grouped key-orange" data-percent="<?= output(floatval($scorecard['report']['percent_hispanic_arrests']), 0, '%') ?>">
                  <span><?= (intval($scorecard['report']['percent_hispanic_arrests']) > 5) ? output(intval($scorecard['report']['percent_hispanic_arrests']), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar animate-bar grouped key-black" data-percent="<?= output(floatval($scorecard['report']['percent_asian_pacific_arrests']), 0, '%') ?>">
                  <span><?= (intval($scorecard['report']['percent_asian_pacific_arrests']) > 5) ? output(intval($scorecard['report']['percent_asian_pacific_arrests']), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar animate-bar grouped key-grey" data-percent="<?= output(floatval($scorecard['report']['percent_other_arrests']), 0, '%') ?>">
                  <span><?= (intval($scorecard['report']['percent_other_arrests']) > 5) ? output(intval($scorecard['report']['percent_other_arrests']), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar animate-bar grouped key-white" data-percent="<?= output(floatval($scorecard['report']['percent_white_arrests']), 0, '%') ?>">
                  <span><?= (intval($scorecard['report']['percent_white_arrests']) > 5) ? output(intval($scorecard['report']['percent_white_arrests']), 0, '%') : '' ?></span>
                </div>
              </div>

              <p>People Killed or Seriously Injured</p>
              <div class="progress-bar-wrapper">
                <div class="progress-bar animate-bar grouped key-red" data-percent="<?= output(floatval($scorecard['report']['percent_black_deadly_force']), 0, '%') ?>">
                  <span><?= (intval($scorecard['report']['percent_black_deadly_force']) > 5) ? output(intval($scorecard['report']['percent_black_deadly_force']), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar animate-bar grouped key-orange" data-percent="<?= output(floatval($scorecard['report']['percent_hispanic_deadly_force']), 0, '%') ?>">
                  <span><?= (intval($scorecard['report']['percent_hispanic_deadly_force']) > 5) ? output(intval($scorecard['report']['percent_hispanic_deadly_force']), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar animate-bar grouped key-black" data-percent="<?= output(floatval($scorecard['report']['percent_asianpacificislander_deadly_force']), 0, '%') ?>">
                  <span><?= (intval($scorecard['report']['percent_asianpacificislander_deadly_force']) > 5) ? output(intval($scorecard['report']['percent_asianpacificislander_deadly_force']), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar animate-bar grouped key-grey" data-percent="<?= output(floatval($scorecard['report']['percent_other_deadly_force']), 0, '%') ?>">
                  <span><?= (intval($scorecard['report']['percent_other_deadly_force']) > 5) ? output(intval($scorecard['report']['percent_other_deadly_force']), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar animate-bar grouped key-white" data-percent="<?= output(floatval($scorecard['report']['percent_white_deadly_force']), 0, '%') ?>">
                  <span><?= (intval($scorecard['report']['percent_white_deadly_force']) > 5) ? output(intval($scorecard['report']['percent_white_deadly_force']), 0, '%') : '' ?></span>
                </div>
              </div>

              <p class="note" style="margin-top: 0">^&nbsp; More Racial Bias in Arrests and Deadly Force than <?= num((1 - intval($scorecard['report']['percentile_overall_disparity_index'])), 0, '%', true) ?> of Depts &nbsp;&nbsp;</p>
            </div>
          </div>
        </div>
      </div>

      <div class="section bg-gray checklist">
        <div class="content">
          <h1 class="title">
            Policies Adopted to <span class="good">Limit</span> Use of Force <?php if ($scorecard['report']['currently_updating_use_of_force'] === true): ?>*<?php endif; ?>
          <?php if ($scorecard['report']['currently_updating_use_of_force'] === true): ?>
            <br><span class="title white">* Agency Currently Updating Policy</span>
          <?php endif; ?>
          </h1>
        </div>
        <div class="content">
          <?php if(
            $scorecard['policy']['requires_deescalation'] === false &&
            $scorecard['policy']['bans_chokeholds_and_strangleholds'] === false &&
            $scorecard['policy']['duty_to_intervene'] === false &&
            $scorecard['policy']['requires_warning_before_shooting'] === false &&
            $scorecard['policy']['restricts_shooting_at_moving_vehicles'] === false &&
            $scorecard['policy']['requires_comprehensive_reporting'] === false &&
            $scorecard['policy']['requires_exhaust_all_other_means_before_shooting'] === false &&
            $scorecard['policy']['has_use_of_force_continuum'] === false
          ): ?>
          <div class="error">City has not adopted the following policies:</div>
          <?php endif; ?>
          <div class="left">
            <div class="check animate-check <?= $scorecard['policy']['requires_deescalation'] === true ? 'checked' : 'unchecked' ?> more-info" data-city="<?= $location ?>" data-more-info="policy_language_requires_deescalation">
              Requires De-Escalation
            </div>
            <div class="check animate-check <?= $scorecard['policy']['bans_chokeholds_and_strangleholds'] === true ? 'checked' : 'unchecked' ?> more-info" data-city="<?= $location ?>" data-more-info="policy_language_bans_chokeholds_and_strangleholds">
              Bans Chokeholds / Strangleholds
            </div>
            <div class="check animate-check <?= $scorecard['policy']['duty_to_intervene'] === true ? 'checked' : 'unchecked' ?> more-info" data-city="<?= $location ?>" data-more-info="policy_language_duty_to_intervene">
              Duty to Intervene
            </div>
            <div class="check animate-check <?= $scorecard['policy']['requires_warning_before_shooting'] === true ? 'checked' : 'unchecked' ?> more-info" data-city="<?= $location ?>" data-more-info="policy_language_requires_warning_before_shooting">
              Requires Warning Before Shooting
            </div>
          </div>
          <div class="right">
            <div class="check animate-check <?= $scorecard['policy']['restricts_shooting_at_moving_vehicles'] === true ? 'checked' : 'unchecked' ?> more-info" data-city="<?= $location ?>" data-more-info="policy_language_restricts_shooting_at_moving_vehicles">
              Bans Shooting at Moving Vehicles
            </div>
            <div class="check animate-check <?= $scorecard['policy']['requires_comprehensive_reporting'] === true ? 'checked' : 'unchecked' ?> more-info" data-city="<?= $location ?>" data-more-info="policy_language_requires_comprehensive_reporting">
              Requires Comprehensive Reporting
            </div>
            <div class="check animate-check <?= $scorecard['policy']['requires_exhaust_all_other_means_before_shooting'] === true ? 'checked' : 'unchecked' ?> more-info" data-city="<?= $location ?>" data-more-info="policy_language_requires_exhaust_all_other_means_before_shooting">
              Requires Exhaust Alternatives Before Shooting
            </div>
            <div class="check animate-check <?= $scorecard['policy']['has_use_of_force_continuum'] === true ? 'checked' : 'unchecked' ?> more-info" data-city="<?= $location ?>" data-more-info="policy_language_has_use_of_force_continuum">
              Has Use of Force Continuum
            </div>
          </div>
        </div>
      </div>

      <div class="section bb pad accountability">
        <div class="content section-header">
          <h1 class="title">
            Police Accountability
          </h1>
          <strong class="grade grade-<?= strtolower(preg_replace('/[^A-Z]/', '', getGrade($scorecard['report']['police_accountability_score']))) ?>"><span>Grade: </span><?= getGrade($scorecard['report']['police_accountability_score']) ?></strong>
          <span class="divider">&nbsp;|&nbsp;</span>
          <?= num($scorecard['report']['police_accountability_score'], 0, '%') ?>
          <a href="javascript:void(0)" class="results-info" data-city="<?= $location ?>" data-result-info="police-accountability">?</a>
          <?= getChange($scorecard['report']['change_police_accountability_score'], true, 'since \'16-17'); ?>
        </div>
        <div class="content">
          <div class="left">
            <div class="stat-wrapper">
              <a href="javascript:void(0)" data-city="<?= $location ?>" data-more-info="" class="more-info"></a>
              <h3>Total civilian complaints</h3>
              <?php if (output($scorecard['police_accountability']['civilian_complaints_reported']) === '0' || output($scorecard['report']['complaints_sustained']) === '0'): ?>
                <p>0 Complaints Reported</p>
              <?php else: ?>
              <p><?= output($scorecard['police_accountability']['civilian_complaints_reported']) ?> Reported <span class="divider">&nbsp;|&nbsp;</span> <?= num($scorecard['report']['complaints_sustained'], 0, '%') ?> Ruled in Favor of Civilians</p>
              <?php endif; ?>

              <?php if(!isset($scorecard['report']['complaints_sustained']) || (isset($scorecard['report']['complaints_sustained']) && empty($scorecard['report']['complaints_sustained']))): ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar no-data" style="width: 0"></div>
                </div>
                <p class="note">&nbsp;</p>
              <?php else: ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar animate-bar <?= progressBar(100 - intval($scorecard['report']['complaints_sustained']), 'reverse') ?>" data-percent="<?= output(intval($scorecard['report']['complaints_sustained']), 0, '%') ?>"></div>
                </div>
                <p class="note">&nbsp;</p>
              <?php endif; ?>
            </div>

            <div class="stat-wrapper">
              <a href="javascript:void(0)" data-city="<?= $location ?>" data-more-info="" class="more-info"></a>
              <h3>Use of Force Complaints</h3>
              <?php if (output($scorecard['police_accountability']['use_of_force_complaints_reported']) === '0' || output($scorecard['report']['percent_use_of_force_complaints_sustained']) === '0'): ?>
                <p>0 Complaints Reported</p>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar bright-green" style="width: 0"></div>
                </div>
                <p class="note">&nbsp;</p>
              <?php elseif(!isset($scorecard['report']['percent_use_of_force_complaints_sustained']) || (isset($scorecard['report']['percent_use_of_force_complaints_sustained']) && empty($scorecard['report']['percent_use_of_force_complaints_sustained']))): ?>
                <p><?= output($scorecard['police_accountability']['use_of_force_complaints_reported']) ?> Reported <span class="divider">&nbsp;|&nbsp;</span> <?= num($scorecard['report']['percent_use_of_force_complaints_sustained'], 0, '%') ?> Ruled in Favor of Civilians</p>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar no-data" style="width: 0"></div>
                </div>
                <p class="note">City Did Not Provide Data</p>
              <?php else: ?>
                <p><?= output($scorecard['police_accountability']['use_of_force_complaints_reported']) ?> Reported <span class="divider">&nbsp;|&nbsp;</span> <?= num($scorecard['report']['percent_use_of_force_complaints_sustained'], 0, '%') ?> Ruled in Favor of Civilians</p>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar animate-bar <?= progressBar(100 - intval($scorecard['report']['percent_use_of_force_complaints_sustained']), 'reverse') ?>" data-percent="<?= output(intval($scorecard['report']['percent_use_of_force_complaints_sustained']), 0, '%') ?>"></div>
                </div>
                <p class="note">&nbsp;</p>
              <?php endif; ?>
            </div>

            <?php if (isset($scorecard['police_accountability']['complaints_in_detention_reported']) || isset($scorecard['report']['percent_complaints_in_detention_sustained'])): ?>
            <div class="stat-wrapper">
              <h3>Complaints of Misconduct in Jail</h3>
              <?php if (output($scorecard['police_accountability']['complaints_in_detention_reported']) === '0' || output($scorecard['report']['percent_complaints_in_detention_sustained']) === '0'): ?>
                <p>0 Complaints Reported</p>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar bright-green" style="width: 0"></div>
                </div>
                <p class="note">&nbsp;</p>
              <?php elseif(!isset($scorecard['report']['percent_complaints_in_detention_sustained']) || (isset($scorecard['report']['percent_complaints_in_detention_sustained']) && empty($scorecard['report']['percent_complaints_in_detention_sustained']))): ?>
                <p><?= output($scorecard['police_accountability']['complaints_in_detention_reported']) ?> Reported <span class="divider">&nbsp;|&nbsp;</span> <?= num($scorecard['report']['percent_complaints_in_detention_sustained'], 0, '%') ?> Ruled in Favor of Civilians</p>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar no-data" style="width: 0"></div>
                </div>
                <p class="note">City Did Not Provide Data</p>
              <?php else: ?>
                <p><?= output($scorecard['police_accountability']['complaints_in_detention_reported']) ?> Reported <span class="divider">&nbsp;|&nbsp;</span> <?= num($scorecard['report']['percent_complaints_in_detention_sustained'], 0, '%') ?> Ruled in Favor of Civilians</p>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar animate-bar <?= progressBar(100 - intval($scorecard['report']['percent_complaints_in_detention_sustained']), 'reverse') ?>" data-percent="<?= output(intval($scorecard['report']['percent_complaints_in_detention_sustained']), 0, '%') ?>"></div>
                </div>
                <p class="note">&nbsp;</p>
              <?php endif; ?>
              </div>
            <?php endif; ?>
          </div>
          <div class="right">
            <div class="stat-wrapper">
              <a href="javascript:void(0)" data-city="<?= $location ?>" data-more-info="" class="more-info"></a>
              <h3>Complaints of Police Discrimination</h3>
              <?php if (num($scorecard['police_accountability']['discrimination_complaints_reported']) === '0'): ?>
                <p>0 Complaints Reported</p>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar bright-green" style="width: 0"></div>
                </div>
                <p class="note">&nbsp;</p>
              <?php else: ?>
                <p><?= num($scorecard['police_accountability']['discrimination_complaints_reported']) ?> Reported <span class="divider">&nbsp;|&nbsp;</span> <?= num($scorecard['report']['percent_discrimination_complaints_sustained'], 0, '%') ?> Ruled in Favor of Civilians</p>
                <?php if(!isset($scorecard['report']['percent_discrimination_complaints_sustained']) || (isset($scorecard['report']['percent_discrimination_complaints_sustained']) && empty($scorecard['report']['percent_discrimination_complaints_sustained']))): ?>
                  <div class="progress-bar-wrapper">
                    <div class="progress-bar no-data" style="width: 0"></div>
                  </div>
                  <p class="note">City Did Not Provide Data</p>
                <?php else: ?>
                  <div class="progress-bar-wrapper">
                    <div class="progress-bar animate-bar <?= progressBar(100 - intval($scorecard['report']['percent_discrimination_complaints_sustained']), 'reverse') ?>" data-percent="<?= output(intval($scorecard['report']['percent_discrimination_complaints_sustained']), 0, '%') ?>"></div>
                  </div>
                  <p class="note">&nbsp;</p>
                <?php endif; ?>
              <?php endif; ?>
            </div>

            <div class="stat-wrapper">
              <a href="javascript:void(0)" data-city="<?= $location ?>" data-more-info="" class="more-info"></a>
              <h3>Alleged Crimes Committed by Police</h3>
              <?php if (num($scorecard['police_accountability']['criminal_complaints_reported']) === '0'): ?>
                <p>0 Complaints Reported</p>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar bright-green" style="width: 0"></div>
                </div>
                <p class="note">&nbsp;</p>
              <?php else: ?>
                <p><?= num($scorecard['police_accountability']['criminal_complaints_reported']) ?> Reported <span class="divider">&nbsp;|&nbsp;</span> <?= output($scorecard['report']['percent_criminal_complaints_sustained'], 0, '') ?> Ruled in Favor of Civilians</p>
                <?php if(num($scorecard['police_accountability']['criminal_complaints_reported']) !== '0' && (!isset($scorecard['report']['percent_criminal_complaints_sustained']) || (isset($scorecard['report']['percent_criminal_complaints_sustained']) && empty($scorecard['report']['percent_criminal_complaints_sustained'])))): ?>
                  <div class="progress-bar-wrapper">
                    <div class="progress-bar no-data" style="width: 0"></div>
                  </div>
                  <p class="note">City Did Not Provide Data</p>
                <?php else: ?>
                  <div class="progress-bar-wrapper">
                    <div class="progress-bar animate-bar <?= progressBar(intval($scorecard['report']['percent_criminal_complaints_sustained'])) ?>" data-percent="<?= output(intval($scorecard['report']['percent_criminal_complaints_sustained']), 0, '%') ?>"></div>
                  </div>
                  <p class="note">&nbsp;</p>
                <?php endif; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>

      <div class="section bg-gray checklist">
        <div class="content">
          <h1 class="title">
            Policies Making It <span class="bad">Harder</span> to Hold Police Accountable <?php if ($scorecard['report']['currently_updating_union_contract'] === true): ?>*<?php endif; ?>
            <?php if ($scorecard['report']['currently_updating_union_contract'] === true): ?>
            <br><span class="title white bad">* Agency Currently Re-Negotiating Contract</span>
            <?php endif; ?>
          </h1>
        </div>
        <div class="content">
          <div class="left">
            <div class="check animate-check <?= $scorecard['policy']['disqualifies_complaints'] === true ? 'checked-bad' : 'unchecked' ?> more-info" data-city="<?= $location ?>" data-more-info="policy_language_disqualifies_complaints">
              Disqualifies Complaints
            </div>
            <div class="check animate-check <?= $scorecard['policy']['restricts_delays_interrogations'] === true ? 'checked-bad' : 'unchecked' ?> more-info" data-city="<?= $location ?>" data-more-info="policy_language_restricts_delays_interrogations">
              Restricts / Delays Interrogations
            </div>
            <div class="check animate-check <?= $scorecard['policy']['gives_officers_unfair_access_to_information'] === true ? 'checked-bad' : 'unchecked' ?> more-info" data-city="<?= $location ?>" data-more-info="policy_language_gives_officers_unfair_access_to_information">
              Gives Officers Unfair Access to Information
            </div>
          </div>
          <div class="right">
            <div class="check animate-check <?= $scorecard['policy']['limits_oversight_discipline'] === true ? 'checked-bad' : 'unchecked' ?> more-info" data-city="<?= $location ?>" data-more-info="policy_language_limits_oversight_discipline">
              Limits Oversight / Discipline
            </div>
            <div class="check animate-check <?= $scorecard['policy']['requires_city_pay_for_misconduct'] === true ? 'checked-bad' : 'unchecked' ?> more-info" data-city="<?= $location ?>" data-more-info="policy_language_requires_city_pay_for_misconduct">
              Requires City Pay for Misconduct
            </div>
            <div class="check animate-check <?= $scorecard['policy']['erases_misconduct_records'] === true ? 'checked-bad' : 'unchecked' ?> more-info" data-city="<?= $location ?>" data-more-info="policy_language_erases_misconduct_records">
              Erases Misconduct Records
            </div>
          </div>
        </div>
      </div>

      <div class="section pad approach">
        <div class="content section-header">
          <h1 class="title">
            Approach to Policing
          </h1>
          <strong class="grade grade-<?= strtolower(preg_replace('/[^A-Z]/', '', getGrade($scorecard['report']['approach_to_policing_score']))) ?>"><span>Grade: </span><?= getGrade($scorecard['report']['approach_to_policing_score']) ?></strong>
          <span class="divider">&nbsp;|&nbsp;</span>
          <?= num($scorecard['report']['approach_to_policing_score'], 0, '%') ?>
          <a href="javascript:void(0)" class="results-info" data-city="<?= $location ?>" data-result-info="approach">?</a>
          <?= getChange($scorecard['report']['change_approach_to_policing_score'], true); ?>
        </div>
        <div class="content">
          <div class="left">
          <?php if (isset($scorecard['arrests']['arrests_2016']) && isset($scorecard['arrests']['arrests_2017']) && isset($scorecard['arrests']['arrests_2018'])): ?>
            <div class="stat-wrapper">
              <h3>Arrests By Year</h3>
              <p style="margin-top: 18px;">
                <canvas id="bar-chart-arrests"></canvas>
              </p>
            </div>
          <?php endif; ?>

            <div class="stat-wrapper no-border-mobile">
              <a href="javascript:void(0)" data-city="<?= $location ?>" data-more-info="" class="more-info"></a>
              <h3>Arrests for Low Level Offenses</h3>
              <p><?= num(round(intval(str_replace(',', '', $scorecard['report']['total_arrests'])) * (intval($scorecard['report']['percent_misdemeanor_arrests']) / 100))) ?> Misdemeanor Arrests <span class="divider">&nbsp;|&nbsp;</span> <?= output($scorecard['report']['low_level_arrests_per_1k_population']) ?> per 1k residents</p>
              <?php if(!isset($scorecard['report']['percentile_low_level_arrests_per_1k_population']) || (isset($scorecard['report']['percentile_low_level_arrests_per_1k_population']) && empty($scorecard['report']['percentile_low_level_arrests_per_1k_population']))): ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar no-data" style="width: 0"></div>
                </div>
                <p class="note">City Did Not Provide Data</p>
              <?php else: ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar animate-bar <?= progressBar(100 - intval($scorecard['report']['percentile_low_level_arrests_per_1k_population']), 'reverse') ?>" data-percent="<?= output(100 - intval($scorecard['report']['percentile_low_level_arrests_per_1k_population']), 0, '%') ?>"></div>
                </div>
                <p class="note">^&nbsp; Higher Misdemeanor Arrest Rate than <?= num($scorecard['report']['percentile_low_level_arrests_per_1k_population'], 0, '%', true) ?> of Depts &nbsp;&nbsp;</p>
              <?php endif; ?>
            </div>

            <div class="stat-wrapper grouped">
              <a href="javascript:void(0)" data-city="<?= $location ?>" data-more-info="" class="more-info"></a>
              <h3>Percent of total arrests by type</h3>

              <p>All Misdemeanors ( <?= num($scorecard['report']['percent_misdemeanor_arrests'], 0, '%') ?> )</p>
              <div class="progress-bar-wrapper">
                <div class="progress-bar animate-bar dark-grey" data-percent="<?= output(intval($scorecard['report']['percent_misdemeanor_arrests']), 0, '%') ?>"></div>
              </div>

              <p>Drug Possession ( <?= num($scorecard['report']['percent_drug_possession_arrests'], 0, '%') ?> )</p>
              <div class="progress-bar-wrapper">
                <div class="progress-bar animate-bar dark-grey" data-percent="<?= output(intval($scorecard['report']['percent_drug_possession_arrests']), 0, '%') ?>"></div>
              </div>

              <p>Violent Crime ( <?= num($scorecard['report']['percent_violent_crime_arrests'], 0, '%') ?> )</p>
              <div class="progress-bar-wrapper">
                <div class="progress-bar animate-bar dark-grey" data-percent="<?= output(intval($scorecard['report']['percent_violent_crime_arrests']), 0, '%') ?>"></div>
              </div>
            </div>
          </div>

          <div class="right">
            <div class="stat-wrapper no-border-mobile">
              <a href="javascript:void(0)" data-city="<?= $location ?>" data-more-info="" class="more-info"></a>
              <a href="http://www.murderdata.org/p/blog-page.html?m=1" target="_blank" class="external-link" title="Open in New Window"></a>
              <h3>Homicides Unsolved</h3>
              <p><?= output($scorecard['homicide']['homicides_2013_2018']) ?> Homicides from 2013-18 <span class="divider">&nbsp;|&nbsp;</span> <?= (intval(str_replace(',', '', $scorecard['homicide']['homicides_2013_2018'])) - intval(str_replace(',', '', $scorecard['homicide']['homicides_2013_2018_solved']))) ?> Unsolved</p>
              <?php if(intval($scorecard['homicide']['homicides_2013_2018']) === 0): ?>
                <p class="good-job pad-bottom">No Homicides Reported</p>
              <?php elseif(intval($scorecard['homicide']['homicides_2013_2018']) > 0 && (intval(str_replace(',', '', $scorecard['homicide']['homicides_2013_2018'])) - intval(str_replace(',', '', $scorecard['homicide']['homicides_2013_2018_solved']))) === 0): ?>
                <p class="good-job pad-bottom">No Unsolved Homicides Reported</p>
              <?php elseif(!isset($scorecard['report']['percentile_murders_solved']) || (isset($scorecard['report']['percentile_murders_solved']) && empty($scorecard['report']['percentile_murders_solved']))): ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar no-data" style="width: 0"></div>
                </div>
                <p class="note">City Did Not Provide Data</p>
              <?php else: ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar animate-bar <?= progressBar(intval($scorecard['report']['percentile_murders_solved']), 'reverse') ?>" data-percent="<?= output(intval($scorecard['report']['percentile_murders_solved']), 0, '%') ?>"></div>
                </div>
                <p class="note">^&nbsp; Solved Fewer Homicides than <?= num($scorecard['report']['percentile_murders_solved'], 0, '%') ?> of Depts &nbsp;&nbsp;</p>
              <?php endif; ?>
            </div>

            <?php if(isset($scorecard['report']['black_murder_unsolved_rate']) || isset($scorecard['report']['hispanic_murder_unsolved_rate']) || isset($scorecard['report']['white_murder_unsolved_rate'])): ?>
            <div class="stat-wrapper grouped">
              <a href="javascript:void(0)" data-city="<?= $location ?>" data-more-info="" class="more-info"></a>
              <h3>Percent of Homicides Unsolved by Race</h3>

              <?php if(isset($scorecard['report']['black_murder_unsolved_rate']) && !empty($scorecard['report']['black_murder_unsolved_rate'])): ?>
              <p>Homicides of Black Victims Unsolved ( <?= num($scorecard['report']['black_murder_unsolved_rate'], 0, '%') ?> )</p>
              <div class="progress-bar-wrapper">
                <div class="progress-bar animate-bar dark-grey" data-percent="<?= output(intval($scorecard['report']['black_murder_unsolved_rate']), 0, '%') ?>"></div>
              </div>
              <?php endif; ?>

              <?php if(isset($scorecard['report']['hispanic_murder_unsolved_rate']) && !empty($scorecard['report']['hispanic_murder_unsolved_rate'])): ?>
              <p>Homicides of Latinx Victims Unsolved ( <?= num($scorecard['report']['hispanic_murder_unsolved_rate'], 0, '%') ?> )</p>
              <div class="progress-bar-wrapper">
                <div class="progress-bar animate-bar dark-grey" data-percent="<?= output(intval($scorecard['report']['hispanic_murder_unsolved_rate']), 0, '%') ?>"></div>
              </div>
              <?php endif; ?>

              <?php if(isset($scorecard['report']['white_murder_unsolved_rate']) && !empty($scorecard['report']['white_murder_unsolved_rate'])): ?>
              <p>Homicides of White Victims Unsolved ( <?= num($scorecard['report']['white_murder_unsolved_rate'], 0, '%') ?> )</p>
              <div class="progress-bar-wrapper">
                <div class="progress-bar animate-bar dark-grey" data-percent="<?= output(intval($scorecard['report']['white_murder_unsolved_rate']), 0, '%') ?>"></div>
              </div>
              <?php endif; ?>
            </div>
            <?php endif; ?>

            <?php if(isset($scorecard['report']['percentile_police_spending']) || isset($scorecard['report']['hispanic_murder_unsolved_rate']) || isset($scorecard['report']['white_murder_unsolved_rate'])): ?>
            <div class="stat-wrapper spending">
              <h3>Police Funding in 2018</h3>
              <?php if ($scorecard['report']['percent_police_budget'] > 0): ?>
              <p>$<?= num($scorecard['police_funding']['police_budget']) ?> (<?= $scorecard['report']['percent_police_budget'] ?> of Budget) <span class="divider">&nbsp;|&nbsp;</span> $<?= num($scorecard['report']['police_spending_per_resident']) ?> per Resident</p>
              <?php endif; ?>
              <?= generateBarChartHeader($scorecard, $type); ?>
              <p>&nbsp;</p>
              <p>
                <canvas id="bar-chart"></canvas>
              </p>
              <p class="note">^&nbsp;More Police Funding than <?= $scorecard['report']['percentile_police_spending'] ?> of Depts &nbsp;&nbsp;</p>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>

      <?php if($type === 'sheriff' && num(round(intval(str_replace(',', '', $placeholder['total_jail_deaths_2016_2018'])))) !== 'N/A'): ?>
      <div class="section pad jail">
        <div class="content">
          <div class="left">
          <?php if(num(round(intval(str_replace(',', '', $placeholder['total_jail_deaths_2016_2018'])))) !== 'N/A'): ?>
            <div class="stat-wrapper">
              <a href="javascript:void(0)" data-city="<?= $location ?>" data-more-info="" class="more-info"></a>
              <h3>Deaths in Jail</h3>

              <p><?= num(round(intval(str_replace(',', '', $placeholder['total_jail_deaths_2016_2018'])))) ?> Deaths <span class="divider">&nbsp;|&nbsp;</span> <?= output($scorecard['report']['jail_deaths_per_1k_jail_population']) ?> per 1k Jail Population</p>

              <p class="keys">
                <span class="key key-red"></span> Homicide
                <span class="key key-orange"></span> Suicide
                <span class="key key-black"></span> Other
                <span class="key key-grey"></span> Investigating
              </p>

              <div class="progress-bar-wrapper">
                <div class="progress-bar animate-bar grouped key-red" data-percent="<?= output(floatval(round((intval($placeholder['jail_death_homicide_willful']) / intval($placeholder['total_jail_deaths_2016_2018'])) * 100)), 0, '%') ?>">
                  <span><?= (intval(round((intval($placeholder['jail_death_homicide_willful']) / intval($placeholder['total_jail_deaths_2016_2018'])) * 100)) > 5) ? output(round((intval($placeholder['jail_death_homicide_willful']) / intval($placeholder['total_jail_deaths_2016_2018'])) * 100), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar animate-bar grouped key-orange" data-percent="<?= output(floatval(round((intval($placeholder['jail_death_suicide']) / intval($placeholder['total_jail_deaths_2016_2018'])) * 100)), 0, '%') ?>">
                  <span><?= (intval(round((intval($placeholder['jail_death_suicide']) / intval($placeholder['total_jail_deaths_2016_2018'])) * 100)) > 5) ? output(round((intval($placeholder['jail_death_suicide']) / intval($placeholder['total_jail_deaths_2016_2018'])) * 100), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar animate-bar grouped key-grey" data-percent="<?= output(floatval(round((intval($placeholder['jail_death_pending_investigation']) / intval($placeholder['total_jail_deaths_2016_2018'])) * 100)), 0, '%') ?>">
                  <span><?= (intval(round((intval($placeholder['jail_death_pending_investigation']) / intval($placeholder['total_jail_deaths_2016_2018'])) * 100)) > 5) ? output(round((intval($placeholder['jail_death_pending_investigation']) / intval($placeholder['total_jail_deaths_2016_2018'])) * 100), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar animate-bar grouped key-white" data-percent="<?= output(floatval(round(((intval($placeholder['jail_death_natural']) + intval($placeholder['jail_death_accidental']) + intval($placeholder['jail_death_cannot_be_determined'])) / intval($placeholder['total_jail_deaths_2016_2018'])) * 100)), 0, '%') ?>">
                  <span><?= (intval(round(((intval($placeholder['jail_death_natural']) + intval($placeholder['jail_death_accidental']) + intval($placeholder['jail_death_cannot_be_determined'])) / intval($placeholder['total_jail_deaths_2016_2018'])) * 100)) > 5) ? output(round(((intval($placeholder['jail_death_natural']) + intval($placeholder['jail_death_accidental']) + intval($placeholder['jail_death_cannot_be_determined'])) / intval($placeholder['total_jail_deaths_2016_2018'])) * 100), 0, '%') : '' ?></span>
                </div>
              </div>

              <p class="note">^&nbsp;Higher Rate of Jail Deaths than <?= num($placeholder['percent_jail_deaths_per_1000_jail_population_table'], 0, '%', true) ?> of Depts &nbsp;&nbsp;</p>
            </div>
            <?php endif; ?>
            <?php if(isset($placeholder['adult_jail_population'])): ?>
            <div class="stat-wrapper no-border-mobile">
              <h3>Jail Incarceration rate</h3>
              <p><?= num(round(intval(str_replace(',', '', $placeholder['adult_jail_population'])))) ?> Avg Daily Jail Population <span class="divider">&nbsp;|&nbsp;</span> <?= output($placeholder['jail_population_per_1k']) ?> per 1k residents</p>
              <?php if(!isset($placeholder['percent_jail_deaths_per_1000_jail_population_table']) || (isset($placeholder['percent_jail_deaths_per_1000_jail_population_table']) && empty($placeholder['percent_jail_deaths_per_1000_jail_population_table']))): ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar no-data" style="width: 0"></div>
                </div>
                <p class="note">City Did Not Provide Data</p>
              <?php else: ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar animate-bar <?= progressBar(100 - intval($placeholder['percent_jail_deaths_per_1000_jail_population_table']), 'reverse') ?>" data-percent="<?= output(100 - intval($placeholder['percent_jail_deaths_per_1000_jail_population_table']), 0, '%') ?>"></div>
                </div>
                <p class="note">^&nbsp; More than <?= num($placeholder['percent_jail_deaths_per_1000_jail_population_table'], 0, '%', true) ?> of Sheriff's Depts &nbsp;&nbsp;</p>
              <?php endif; ?>
            </div>
            <?php endif; ?>
          </div>
          <div class="right">
          <?php if(isset($placeholder['total_ice_transfers']) && isset($placeholder['percent_violent_transfers']) && isset($placeholder['percent_drug_transfers']) && isset($placeholder['percent_other_transfers'])): ?>
          <div class="stat-wrapper">
            <a href="javascript:void(0)" data-city="<?= $location ?>" data-more-info="" class="more-info"></a>
            <h3>People Transferred to ICE in 2018</h3>

            <p><?= num(round(intval(str_replace(',', '', $placeholder['total_ice_transfers'])))) ?> people were transferred to ICE</p>

            <p class="keys">
              <span class="key key-red"></span> Violent Crime
              <span class="key key-orange"></span> Drug Offenses
              <span class="key key-black"></span> Other
            </p>

            <div class="progress-bar-wrapper">
              <div class="progress-bar animate-bar grouped key-red" data-percent="<?= output(floatval($placeholder['percent_violent_transfers']), 0, '%') ?>">
                <span><?= (intval($placeholder['percent_violent_transfers']) > 5) ? output(intval($placeholder['percent_violent_transfers']), 0, '%') : '' ?></span>
              </div>
              <div class="progress-bar animate-bar grouped key-orange" data-percent="<?= output(floatval($placeholder['percent_drug_transfers']), 0, '%') ?>">
                <span><?= (intval($placeholder['percent_drug_transfers']) > 5) ? output(intval($placeholder['percent_drug_transfers']), 0, '%') : '' ?></span>
              </div>
              <div class="progress-bar animate-bar grouped key-black" data-percent="<?= output(floatval($placeholder['percent_other_transfers']), 0, '%') ?>">
                <span><?= (intval($placeholder['percent_other_transfers']) > 5) ? output(intval($placeholder['percent_other_transfers']), 0, '%') : '' ?></span>
              </div>
            </div>
          </div>
          <?php endif; ?>


          </div>
        </div>
      </div>
      <?php endif; ?>

      <div class="section bg-light-gray grades short" id="score-card">
        <div class="content">
          <h1 class="title">
            2016-2018 <?= $stateName ?><br/>
            <?= ($type === 'sheriff') ? "Sheriff's" : "Police" ?> Department Grades
          </h1>
        </div>
        <div class="content">
          <div class="left">
            <table>
              <tr>
                <th width="180"><?= $type ?></th>
                <th width="50">Grade</th>
                <th>&nbsp;</th>
              </tr>
            <?php foreach($reportCard as $index => $card): if ($index < (count($reportCard) / 2)): ?>
              <tr>
                <td width="180"><a href="<?= $card['url'] ?>"><?= $index + 1 ?>. <?= $card['agency_name'] ?></a></td>
                <td width="50"><a href="<?= $card['url'] ?>"><?= $card['grade_letter'] ?></a></td>
                <td>
                  <a class="score" href="<?= $card['url'] ?>">
                    <div class="grade grade-<?= $card['grade_class'] ?>"><?= $card['overall_score'] ?>%</div>
                  </a>
                  <?= getChange($card['change_overall_score'], true, 'since \'16-17'); ?>
                </td>
              </tr>
            <?php endif; endforeach; ?>
            </table>
          </div>
          <div class="right">
            <table>
              <tr class="hide-mobile">
                <th width="180"><?= $type ?></th>
                <th width="50">Grade</th>
                <th>&nbsp;</th>
              </tr>
              <?php foreach($reportCard as $index => $card): if ($index >= (count($reportCard) / 2)): ?>
                <tr>
                  <td width="180"><a href="<?= $card['url'] ?>"><?= $index + 1 ?>. <?= $card['agency_name'] ?></a></td>
                  <td width="50"><a href="<?= $card['url'] ?>"><?= $card['grade_letter'] ?></a></td>
                  <td>
                    <a class="score" href="<?= $card['url'] ?>">
                      <div class="grade grade-<?= $card['grade_class'] ?>"><?= $card['overall_score'] ?>%</div>
                    </a>
                    <?= getChange($card['change_overall_score'], true, 'since \'16-17'); ?>
                  </td>
                </tr>
              <?php endif; endforeach; ?>
            </table>
          </div>
        </div>
        <div class="content<?= (count($reportCard) <= 10) ? ' hide-mobile' : '' ?><?= (count($reportCard) <= 20) ? ' hide-desktop' : '' ?>">
          <a href="javascript:void(0);" class="button more" id="show-more">MORE</a>
          <a href="javascript:void(0);" class="button less" id="show-less">LESS</a>
        </div>
      </div>

      <div class="section why">
        <div class="content">
          <h1 class="title">
            About This Scorecard
          </h1>
          <p>
            <strong>This is the first statewide Police Scorecard in the United States.</strong> It was built using data from <?= $stateName ?>'s <a href="https://openjustice.doj.ca.gov/data" target="_blank">OpenJustice</a> database, public records requests, national databases and media reports.
          </p>
          <p>
            <a href="/about" class="button">methodology</a>
            <a href="https://drive.google.com/drive/folders/1XAT1uFPXj5AsvNTzFeNeeTXGLP09HEIh" target="_blank" class="button">Source Data</a>
          </p>
          <p>&nbsp;</p>
          <p>
            <strong>Use this Scorecard to identify issues within police departments that require the most urgent interventions and hold officials accountable for implementing solutions.</strong> For example, cities with higher rates of misdemeanor arrests could benefit most from solutions that create alternatives to policing and arrest for these offenses. In cities where police make fewer arrests overall but use more force when making arrests, communities could benefit significantly from policies designed to <a href="http://useofforceproject.org/" target="_blank">limit police use force</a>. And cities where complaints of police misconduct are rarely ruled in favor of civilians could benefit from creating an oversight structure to independently investigate these complaints.
          </p>
          <p>&nbsp;</p>
          <p class="take-action">Here's how to start pushing for change:</p>
        </div>
        <div class="content">
          <p>&nbsp;</p>
        </div>
        <div class="content">
          <div class="left number number-1">
            <ul>
              <li>
                <?php if ($type === 'sheriff'): ?>
                <strong>Contact Your County Sheriff</strong>, share this scorecard with them and urge them to enact policies to address the issues you've identified:
                <?php else: ?>
                <strong>Contact your Mayor and Police Chief</strong>, share this scorecard with them and urge them to enact policies to address the issues you've identified:
                <?php endif; ?>

                <ul class="contacts">
                <?php if (!empty($scorecard['agency']['mayor_name'])): ?>
                  <li>
                    <strong>Mayor <?= $scorecard['agency']['mayor_name'] ?></strong>
                  <?php if (!empty($scorecard['agency']['mayor_phone'])): ?>
                    <br>
                    Phone:&nbsp; <a href="tel:1-<?= $scorecard['agency']['mayor_phone'] ?>"><?= $scorecard['agency']['mayor_phone'] ?></a>
                  <?php endif; ?>
                  <?php if (!empty($scorecard['agency']['mayor_email'])): ?>
                    <br>
                    Email:&nbsp; <a href="mailto:<?= $scorecard['agency']['mayor_email'] ?>"><?= $scorecard['agency']['mayor_email'] ?></a>
                  <?php endif; ?>
                  </li>
                <?php endif; ?>
                <?php if (!empty($scorecard['agency']['police_chief_name'])): ?>
                  <li>
                    <strong><?= ($type === 'police-department') ? 'Police Chief' : '' ?> <?= $scorecard['agency']['police_chief_name'] ?></strong>
                  <?php if (!empty($scorecard['agency']['police_chief_phone'])): ?>
                    <br>
                    Phone:&nbsp; <a href="tel:1-<?= $scorecard['agency']['police_chief_phone'] ?>"><?= $scorecard['agency']['police_chief_phone'] ?></a>
                  <?php endif; ?>
                  <?php if (!empty($scorecard['agency']['police_chief_email'])): ?>
                    <br>
                    Email:&nbsp; <a href="mailto:<?= $scorecard['agency']['police_chief_email'] ?>"><?= $scorecard['agency']['police_chief_email'] ?></a>
                  <?php endif; ?>
                  </li>
                <?php endif; ?>
                </ul>

                <div class="advocacy-tip">
                  <strong>Advocacy Tip:</strong>&nbsp; <?= $stateName ?>'s new deadly force law goes into effect in January - requiring departments to adopt more restrictive deadly force policies. Tell your <?= ($type === 'sheriff') ? 'Sheriff' : 'Mayor and Police Chief' ?> to adopt a policy that explicitly requires police to exhaust all available alternatives prior to using deadly force.&nbsp; <a href="http://useofforceproject.org/s/Use-of-Force-Study.pdf" target="_blank"><strong>Research</strong></a> shows this policy saves lives.
                </div>
              </li>
            </ul>
          </div>
          <div class="right number number-2">
            <ul>
              <li><strong>Find your US Senator and US Representative</strong> using the Campaign Zero Advocacy Tool and urge them to support the <strong>PEACE Act</strong>, which would require police departments to adopt policies requiring de-escalation and alternatives to deadly force, a change that would reduce police shootings nationwide.
                <br />
              <a href="https://www.joincampaignzero.org/advocacy" class="button" target="_blank">Campaign Zero Advocacy Tool</a></li>
            </ul>
          </div>
        </div>
        <div class="content">
          <p>&nbsp;</p>
          <p>If you have feedback, questions about the project, or need support with an advocacy campaign, contact our Project Lead, <a href="mailto:sam@thisisthemovement.org">Samuel Sinyangwe</a>.</p>
        </div>
      </div>

      <div class="section next">
        <div class="content">
          <h1 class="title">
            What's Next
          </h1>

          <div class="step step-1">
            <h2>Step 1 <span class="completed">COMPLETED</span></h2>

            <div>
              <img src="assets/img/next/step1.svg" alt="Step 1" />

              <p><strong>Inform</strong> data-driven interventions in <?= $stateName ?>'s 100 largest cities. Update scores and track progress over time.</p>
            </div>
          </div>

          <div class="step step-2">
            <h2>Step 2 <span class="completed">COMPLETED</span></h2>

            <div>
              <img src="assets/img/next/step2.svg" alt="Step 2" />

              <p><strong>Expand</strong> to every major law enforcement agency in CA and include additional indicators such as police budgets and jail incarceration.</p>
            </div>
          </div>

          <div class="step step-3">
            <h2>Step 3</h2>

            <div>
              <img src="assets/img/next/step3.svg" alt="Step 3" />

              <p><strong>Work towards a national</strong> police scorecard as more data are made available by federal, state, and local agencies. Create the foundation for a National Policing Intervention System to improve policing outcomes nationwide.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="section bg-gray footer">
        <div class="content">
          <div class="left">
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?= $socialUrl ?>&t=<?= $socialText ?>" class="social">
              <i class="fa fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com/intent/tweet?source=<?= $socialUrl ?>&text=<?= $socialText ?>" class="social">
              <i class="fa fa-twitter"></i>
            </a>
            <a href="mailto:?subject=<?= $socialSubject ?>&body=<?= $socialText ?>" class="social">
              <i class="fa fa-envelope"></i>
            </a>
          </div>
          <div class="right">
            <a href="https://staywoke.typeform.com/to/jBvCkB" class="get-involved" target="_blank">Get Involved</a>
            <a href="http://paypal.me/campaignzero" class="donate" target="_blank">Donate</a>
          </div>
        </div>
        <div class="content bt">
          This is a project of
          <a href="https://www.joincampaignzero.org/" class="title" target="_blank">Campaign Zero</a>
        </div>
      </div>
    </div>

    <div id="modal-wrapper">
      <div class="modal">
        <div id="modal-header-tabs">
          <a href="javascript:void(0)" id="modal-close">✖</a>
          <a href="javascript:void(0)" class="show-button<?= $type === 'police-department' ? ' active' : '' ?>" id="show-police">Police</a>
          <a href="javascript:void(0)" class="show-button<?= $type === 'sheriff' ? ' active' : '' ?>" id="show-sheriff">Sheriffs</a>
        </div>

        <div id="modal-content">
          <div id="modal-label">Select Department</div>
          <div id="more-info-content"></div>
          <div id="results-info-content"></div>
          <ul id="city-select" class="<?= $type ?>">
<?php foreach($stateData['police-department'] as $index => $department): ?>
            <li class="police-department"><a href="<?= $department['url'] ?>"<?= ($type === 'police-department' && $location === $department['slug']) ? ' class="selected-city"' : '' ?>><?= $department['agency_name'] ?> Police</a></li>
<?php endforeach; ?>
<?php foreach($stateData['sheriff'] as $index => $department): ?>
            <li class="sheriff"><a href="<?= $department['url'] ?>"<?= ($type === 'sheriff' && $location === $department['slug']) ? ' class="selected-city"' : '' ?>><?= $department['agency_name'] ?> Sheriff</a></li>
<?php endforeach; ?>
          </ul>
        </div>
      </div>
      <div id="overlay"></div>
    </div>

    <script>
    var map_data = {
      city: <?= getMapData($state, 'police-department') ?>,
      sheriff: <?= getMapData($state, 'sheriff') ?>,
      selected: <?= getMapLocation($type, $scorecard, $location) ?>
    };
    </script>
    <script src="assets/js/plugins.js<?= trim($ac) ?>"></script>
    <script src="assets/js/maps/us-<?= strtolower($stateCode) ?>-all.js"></script>
    <script src="assets/js/site.js<?= trim($ac) ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>

  <?php if(isset($scorecard['arrests']['arrests_2016']) && isset($scorecard['arrests']['arrests_2017']) && isset($scorecard['arrests']['arrests_2018'])): ?>
    <script>
    function numberWithCommas(x) {
      return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    window.addEventListener('load', function() {
      var ctx = document.getElementById('bar-chart-arrests').getContext('2d');
      var arrestsData = <?= generateArrestChart($scorecard, $type); ?>;
      window.myBarArrests = new Chart(ctx, {
        type: 'bar',
        data: arrestsData,
        options: {
          maintainAspectRatio: false,
          responsive: true,
          legend: {
            display: false,
          },
          title: {
            display: false,
          },
          tooltips: {
						mode: 'index',
						intersect: false,
            callbacks: {
              label: function(tooltipItem, data) {
                var label = (data.datasets[tooltipItem.datasetIndex].label) ? ' ' + data.datasets[tooltipItem.datasetIndex].label : '';

                if (label) {
                  label += ': ';
                }

                label += numberWithCommas(tooltipItem.yLabel);

                return label;
              }
            },
					},
          scales: {
            xAxes: [{
              minBarLength: 5,
              maxBarThickness: 20,
              stacked: true,
              gridLines: {
                color: "rgba(0, 0, 0, 0)",
              }
            }],
            yAxes: [{
              minBarLength: 5,
              stacked: true,
              gridLines: {
                color: "rgba(0, 0, 0, 0)",
              },
              ticks: {
                beginAtZero: true,
                maxTicksLimit: 2,
                callback: function(value, index, values) {
                  return (value === 0) ? '' : numberWithCommas(value);
                }
              }
            }]
          }
        }
      });
    });
    </script>
  <?php endif; ?>

  <?php if(isset($scorecard['police_violence']['police_shootings_2016']) && isset($scorecard['police_violence']['police_shootings_2017']) && isset($scorecard['police_violence']['police_shootings_2018'])): ?>
    <script>
    function toggleHistory(show) {
      var police = myBarHistory.getDatasetMeta(0);
      var other = myBarHistory.getDatasetMeta(1);

      var policeButton = document.querySelector('.history-key-police');
      var otherButton = document.querySelector('.history-key-other');

      if (show === 0) {
        police.hidden = false;
        other.hidden = true;
      } else if (show === 1) {
        police.hidden = true;
        other.hidden = false;
      }

      policeButton.classList.toggle('active');
      otherButton.classList.toggle('active');

      myBarHistory.update();
    }

    window.addEventListener('load', function() {
      var ctx = document.getElementById('bar-chart-history').getContext('2d');
      var historyChartData = <?= generateHistoryChart($scorecard, $type); ?>;
      window.myBarHistory = new Chart(ctx, {
        type: 'bar',
        data: historyChartData,
        options: {
          animation: {
            duration: 0,
          },
          maintainAspectRatio: false,
          responsive: false,
          legend: {
            display: false,
          },
          title: {
            display: false,
          },
          tooltips: {
						mode: 'index',
						intersect: false
					},
          scales: {
            xAxes: [{
              minBarLength: 5,
              maxBarThickness: 20,
              stacked: true,
              gridLines: {
                color: "rgba(0, 0, 0, 0)",
              }
            }],
            yAxes: [{
              minBarLength: 5,
              stacked: true,
              gridLines: {
                color: "rgba(0, 0, 0, 0)",
              },
              ticks: {
                beginAtZero: true,
                maxTicksLimit: 2,
                callback: function(value, index, values) {
                  return (value === 0) ? '' : Math.round(value);
                }
              }
            }]
          }
        }
      });
    });
    </script>
  <?php endif; ?>

  <?php if(isset($scorecard['report']['percentile_police_spending']) || isset($scorecard['report']['hispanic_murder_unsolved_rate']) || isset($scorecard['report']['white_murder_unsolved_rate'])): ?>
    <script>
    function nFormatter(num) {
      num = parseInt(num);

      if (num === 0) {
        return '$0';
      }

      var units = ["k", "M", "B", "T"];
      var order = Math.floor(Math.log(num) / Math.log(1000));
      var unitname = units[(order - 1)];

      // output number remainder + unitname
      return '$' + parseFloat(num / 1000 ** order).toFixed(2) + unitname;
    }

    window.addEventListener('load', function() {
      var barChartData = <?= generateBarChart($scorecard, $type); ?>;

      var ctx = document.getElementById('bar-chart').getContext('2d');
      window.myBar = new Chart(ctx, {
        type: 'bar',
        data: barChartData,
        options: {
          maintainAspectRatio: false,
          tooltips: {
            callbacks: {
              label: function(tooltipItem, data) {
                var label = (data.datasets[tooltipItem.datasetIndex].label) ? ' ' + data.datasets[tooltipItem.datasetIndex].label : '';

                if (label) {
                  label += ': ';
                }

                label += nFormatter(tooltipItem.yLabel);

                return label;
              }
            },
          },
          responsive: true,
          legend: {
            display: false,
          },
          title: {
            display: false,
          },
          scales: {
            xAxes: [{
              minBarLength: 5,
              maxBarThickness: 20,
              gridLines: {
                color: "rgba(0, 0, 0, 0)",
              }
            }],
            yAxes: [{
              minBarLength: 5,
              gridLines: {
                color: "rgba(0, 0, 0, 0)",
              },
              ticks: {
                beginAtZero: true,
                maxTicksLimit: 2,
                callback: function(value, index, values) {
                  return (value === 0) ? '' : nFormatter(value);
                }
              }
            }]
          }
        }
      });
    });
    </script>
  <?php endif; ?>

  <?php if($scorecard['police_violence']['all_deadly_force_incidents']): ?>
    <script>
    window.addEventListener('load', function() {
      SCORECARD.loadMap('<?= $stateCode ?>');
      var chart = new Chart(document.getElementById("deadly-force-chart").getContext('2d'), {
        type: 'doughnut',
        options: {
          cutoutPercentage: 75,
          animation: {
            animateRotate: true,
            animateScale: false
          },
          tooltips: {
            callbacks: {
              label: function(tooltip, data) {
                return ' ' + data['labels'][tooltip.index] + ': ' + data['datasets'][tooltip.datasetIndex][tooltip.index] + '%';
              }
            }
          },
          legend: {
            display: true,
            labels: {
              boxWidth: 20
            }
          }
        },
        data: {
          labels: [
            'Unarmed',
            'Other',
            'Gun',
            'Vehicle'
          ],
          datasets: [
            {
              borderWidth: 0,
              data: [
                <?= $scorecard['report']['percent_used_against_people_who_were_unarmed'] ?>,
                <?= ($scorecard['report']['percent_used_against_people_who_were_not_armed_with_gun'] - $scorecard['report']['percent_used_against_people_who_were_unarmed']) ?>,
                <?= (100 - floatval($scorecard['report']['percent_used_against_people_who_were_not_armed_with_gun'])) ?>,
                <?= $scorecard['police_violence']['vehicle_people_killed'] ?>
              ],
              backgroundColor:[
                '#f19975',
                '#58595b',
                '#d4d9e4',
                '#9a9b9f'
              ],
              hoverBackgroundColor:[
                '#f19975',
                '#58595b',
                '#d4d9e4',
                '#9a9b9f'
              ]
            }
          ]
        }
      });

      setTimeout(SCORECARD.animate, 250);
    });
    </script>
  <?php else: ?>
  <script>
    window.onload = function() {
      SCORECARD.loadMap('<?= $stateCode ?>');
    };
  </script>
  <?php endif; ?>

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
