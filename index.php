<?php
require('common.php');

$city = (!empty($_REQUEST['city'])) ? $_REQUEST['city'] : 'los-angeles';
$data = getCityData($city);
$grade = getGrade($data['overall_score']);
$reportCard = reportCard();
$title = "California Police Scorecard";
$ac = '?ac=' . getHash();
$socialUrl = rawurlencode('https://policescorecard.org');
$socialText = rawurlencode('Get the facts about police violence and accountability in California. Evaluate each department and hold them accountable at policescorecard.org');
$socialSubject = rawurlencode($title);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title><?= $title ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="description" content="<?= $title ?>">
    <meta name="author" content="StayWoke">

    <meta name="apple-mobile-web-app-title" content="Police Scorecard">
    <meta name="application-name" content="Police Scorecard">

    <!-- Twitter META Info -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@samswey">
    <meta property="twitter:title" content="<?= $title ?>">
    <meta property="twitter:description" content="Get the facts about police violence and accountability in California. Evaluate each police department and hold them accountable here.">
    <meta property="twitter:creator" content="@mrmidi">
    <meta property="twitter:image:src" content="https://policescorecard.org/assets/img/card.jpg<?= trim($ac) ?>">
    <meta property="twitter:domain" content="https://policescorecard.org">

    <!-- Open Graph protocol -->
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= $title ?>">
    <meta property="og:url" content="https://policescorecard.org">
    <meta property="og:image" content="https://policescorecard.org/assets/img/card.jpg<?= trim($ac) ?>">
    <meta property="og:site_name" content="CA Police Scorecard">
    <meta property="og:description" content="Get the facts about police violence and accountability in California. Evaluate each police department and hold them accountable here.">

    <link href="favicon.ico" rel="shortcut icon">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow+Condensed:300,400,500,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css<?= trim($ac) ?>">
  </head>

  <body>
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
              <li><a href="https://www.joincampaignzero.org/about/" target="_blank">Planning Team</a></li>
              <li><a href="https://www.joincampaignzero.org/" target="_blank">More about Campaign Zero</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="section bg-dotted current-state">
        <div class="content">
          <svg width="42px" height="43px" viewBox="0 0 42 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" fill-opacity="0.630151721"><g transform="translate(-534.000000, -141.000000)" fill="#000000" fill-rule="nonzero"><g transform="translate(-5.000000, 118.000000)"><g transform="translate(539.000000, 19.000000)"><g transform="translate(0.000000, 4.500000)"><path d="M21,3.3158661e-15 C15.4308,3.3158661e-15 10.0898,2.21120667 6.15066667,6.15066667 C2.21316667,10.0881667 0,15.4294 0,21 C0,26.5692 2.21302667,31.9102 6.15066667,35.8493333 C10.0899867,39.7868333 15.4312667,42 21,42 C26.5687333,42 31.9102,39.7869733 35.8493333,35.8493333 C39.7868333,31.9100133 42,26.5687333 42,21 C42,15.4289333 39.7869733,10.0879333 35.8493333,6.15066667 C31.9100133,2.21134667 26.5687333,0 21,3.3158661e-15 Z M15.2940667,9.16393333 L21.7653333,11.12174 L20.4036,17.0824733 L27.3854,28.1532067 L27.9814733,30.1966933 L26.78928,31.0479867 L26.6197493,32.24018 L26.9606353,32.8362533 L21.681702,32.24018 L21.4264913,30.5375933 L20.403838,29.25972 L19.9772767,30.1110133 L19.9772767,28.57792 L18.3585033,27.4714067 L17.76243,28.15316 L17.421544,26.7914267 L17.1663333,25.2583333 L15.63324,22.6187733 L15.974126,21.42658 L15.463686,20.2343867 L15.5493613,18.27658 L15.1228,18.021374 L14.9532693,16.2331073 L14.187656,15.637034 L14.698096,14.2753007 L14.0163427,12.6565273 L15.037176,10.9539407 L15.2923867,9.165674 L15.2940667,9.16393333 Z" id="Shape"></path></g></g></g></g></g></svg>

          California
        </div>
      </div>

      <div class="section hero">
        <div class="content">
          <div class="right">
            <h1>We evaluated the police in California.</h1>
            <h2>Read the <a href="./findings" style="color: #82add7; text-decoration: underline; font-weight: 500;">Findings.</a> See the Grade for Each Department.</h2>
          </div>
          <div class="left">
            <div class="map" id="map-layer">
              <div class="map-marker <?= $city ?>"></div>
            </div>
          </div>
          <div class="clear">&nbsp;</div>
        </div>
      </div>

      <div class="section bg-orange score animate" id="toggle-animate">
        <div class="content">
          <div class="left">
            <div class="selected-location">
              <a href="javascript:void(0);" id="score-location"><?= $data['agency_name'] ?></a>
            </div>
          </div>
          <div class="right v-center view-score" onclick="SCORECARD.loadResultsInfo('<?= $city ?>')">
            <span class="label">Overall Grade:</span>
            <span class="grade"><?= $grade ?></span>
          </div>
        </div>
      </div>

      <div class="section bg-gray stats">
        <div class="content">
          <div class="one-third">
            <h1><strong><?= $data['deadly_force_incidents'] ?></strong> deadly force incident<?= $data['deadly_force_incidents'] !== '1' ? 's' : '' ?></h1>
          <?php if(num($data['deadly_force_incidents']) === '0'): ?>
            <p><?= $data['agency_name'] ?> was <strong>1 of only 15 departments</strong> in our analysis that did not use deadly force from 2016-17.</p>
          <?php elseif(!isset($data['black_deadly_force_disparity_per_population']) || !isset($data['hispanic_deadly_force_disparity_per_population'])): ?>
            <p>That’s higher than <strong><?= num($data['percentile_of_deadly_force_incidents_per_arrest'], 0, '%', true) ?></strong> of California police departments.</p>
          <?php else: ?>
            <p>Based on population, a Black person was <strong><?= num($data['black_deadly_force_disparity_per_population'], 1, 'x') ?> more likely</strong> and a Latinx person was <strong><?= num($data['hispanic_deadly_force_disparity_per_population'], 1, 'x') ?> more likely</strong> to have deadly force used on them than a White person in <?= $data['agency_name'] ?> from 2016-17.</p>
          <?php endif; ?>
          </div>
          <div class="one-third">
            <h1><strong><?= num($data['civilian_complaints_reported']) ?></strong> civilian complaints of police misconduct</h1>
          <?php if(num($data['civilian_complaints_sustained']) === '0'): ?>
            <p> <strong>0 complaints </strong> were ruled in favor of civilians from 2016-17.</p>
          <?php elseif(num($data['civilian_complaints_sustained']) === '1'): ?>
            <p>Only <strong>1 in every <?= num($data['civilian_complaints_reported']) ?> complaints</strong> were ruled in favor of civilians from 2016-17.</p>
          <?php elseif(intval(str_replace(',', '', $data['civilian_complaints_reported'])) / intval(str_replace(',', '', $data['civilian_complaints_sustained'])) <= 3): ?>
            <p><strong><?= num($data['percent_of_civilian_complaints_sustained'], 0, '%') ?></strong> were ruled in favor of civilians from 2016-2017.</p>
          <?php else: ?>
            <p>Only <strong>1 in every <?= round(intval(str_replace(',', '', $data['civilian_complaints_reported'])) / intval(str_replace(',', '', $data['civilian_complaints_sustained']))) ?> complaints</strong> were ruled in favor of civilians from 2016-17.</p>
          <?php endif; ?>
          </div>
          <div class="one-third">
            <h1><strong><?= num($data['total_arrests']) ?></strong> arrests made</h1>
            <p>Police made <strong><?= num($data['times_more_misdemeanor_arrests_than_violent_crime'], 1, 'x') ?> as many arrests for low level offenses</strong> as for violent crimes in 2016.</p>
          </div>
        </div>
      </div>

      <div class="section pad score-details">
        <div class="content section-header">
          <h1 class="title">
            Police violence
          </h1>
          <strong class="grade grade-<?= strtolower(preg_replace('/[^A-Z]/', '', getGrade($data['police_violence_score']))) ?>"><span>Grade: </span><?= getGrade($data['police_violence_score']) ?></strong>
          <span class="divider">&nbsp;|&nbsp;</span>
          <?= num($data['police_violence_score'], 0, '%') ?>
          <a href="javascript:void(0)" class="results-info" data-city="<?= $city ?>" data-result-info="police-violence">?</a>
        </div>
        <div class="content">
          <div class="left">
            <div class="stat-wrapper">
              <a href="javascript:void(0)" data-city="<?= $city ?>" data-more-info="" class="more-info"></a>
              <h3>Less-Lethal Force</h3>
              <p>Using batons, strangleholds, tasers &amp; other weapons</p>
              <p><?= output($data['use_of_less_lethal_force']) ?> Uses of Force <span class="divider">&nbsp;|&nbsp;</span> <?= output($data['less_lethal_force_per_arrest']) ?> uses every 10k arrests</p>

              <?php if(!isset($data['percent_of_less_lethal_force_per_arrest']) || (isset($data['percent_of_less_lethal_force_per_arrest']) && empty($data['percent_of_less_lethal_force_per_arrest']))): ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar no-data" style="width: 0"></div>
                </div>
                <p class="note">City Did Not Provide Data</p>
              <?php else: ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar animate-bar <?= progressBar(100 - intval($data['percent_of_less_lethal_force_per_arrest']), 'reverse') ?>" data-percent="<?= num($data['percent_of_less_lethal_force_per_arrest'], 0, '%', true) ?>"></div>
                </div>
                <p class="note">^&nbsp; Used More Force per Arrest than <?= num($data['percent_of_less_lethal_force_per_arrest'], 0, '%', true) ?> of Depts &nbsp;&nbsp;</p>
              <?php endif; ?>
            </div>

            <div class="stat-wrapper">
              <a href="javascript:void(0)" data-city="<?= $city ?>" data-more-info="" class="more-info"></a>
              <h3>Deadly Force</h3>
              <p><?= output($data['police_shootings_incidents']) ?> Shootings + <?= intval(output($data['deadly_force_incidents'])) - intval(output($data['police_shootings_incidents'])) ?> other deaths or serious injuries</p>
              <?php if(output($data['deadly_force_incidents']) === '0'): ?>
              <p class="good-job">Did Not Report Using Deadly Force in 2016-17</p>
              <?php else: ?>
              <p><?= output($data['deadly_force_incidents']) ?> Total Incidents <span class="divider">&nbsp;|&nbsp;</span> <?= output($data['deadly_force_incidents_per_arrest']) ?> every 10k arrests</p>
              <?php endif; ?>

              <?php if(!isset($data['percentile_of_deadly_force_incidents_per_arrest']) || (isset($data['percentile_of_deadly_force_incidents_per_arrest']) && empty($data['percentile_of_deadly_force_incidents_per_arrest']))): ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar no-data" style="width: 0"></div>
                </div>
                <p class="note">City Did Not Provide Data</p>
              <?php elseif(output($data['deadly_force_incidents']) === '0'): ?>
                &nbsp;
              <?php else: ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar animate-bar <?= progressBar(100 - intval($data['percentile_of_deadly_force_incidents_per_arrest']), 'reverse') ?>" data-percent="<?= output(100 - intval($data['percentile_of_deadly_force_incidents_per_arrest']), 0, '%') ?>"></div>
                </div>
                <p class="note">^&nbsp; Used More Deadly Force per Arrest than <?= num($data['percentile_of_deadly_force_incidents_per_arrest'], 0, '%', true) ?> of Depts &nbsp;&nbsp;</p>
              <?php endif; ?>
            </div>

            <?php if(output($data['police_shootings_incidents']) !== '0' && num($data['percent_shot_first'], 0, '%') !== 'N/A'): ?>
            <div class="stat-wrapper">
              <a href="javascript:void(0)" data-city="<?= $city ?>" data-more-info="" class="more-info"></a>
              <h3>Police Shootings Where Police Did Not Attempt Non-Lethal Force Before Shooting</h3>
              <p><?= num($data['percent_shot_first'], 0, '%') ?> of Shootings (<?= $data['shot_first'] ?>/<?= $data['police_shootings_incidents'] ?>)</p>
              <?php if(!isset($data['percent_shot_first']) || (isset($data['percent_shot_first']) && empty($data['percent_shot_first']))): ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar no-data" style="width: 0"></div>
                </div>
                <p class="note">&nbsp;</p>
              <?php else: ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar animate-bar <?= (intval($data['percent_shot_first']) === 0) ? 'bright-green' : 'always-bad' ?>" data-percent="<?= output(intval($data['percent_shot_first']), 0, '%') ?>"></div>
                </div>
                <p class="note">&nbsp;</p>
              <?php endif; ?>
            </div>
            <?php endif; ?>

            <?php if(output($data['deadly_force_incidents']) !== '0' && num($data['percent_police_misperceive_the_person_to_have_gun'], 0, '%') !== 'N/A'): ?>
            <div class="stat-wrapper">
              <a href="javascript:void(0)" data-city="<?= $city ?>" data-more-info="" class="more-info"></a>
              <h3>Where Police say they saw a gun but no gun was found</h3>
              <p><?= num($data['percent_police_misperceive_the_person_to_have_gun'], 0, '%') ?> of Guns "Perceived" were Never Found (<?= output(round(floatval($data['people_perceived_to_have_gun'])) - round(floatval($data['people_found_to_have_gun']))) ?>/<?= num($data['people_perceived_to_have_gun']) ?>)</p>
              <?php if(!isset($data['percent_police_misperceive_the_person_to_have_gun']) || (isset($data['percent_police_misperceive_the_person_to_have_gun']) && empty($data['percent_police_misperceive_the_person_to_have_gun']))): ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar no-data" style="width: 0"></div>
                </div>
                <p class="note">&nbsp;</p>
              <?php else: ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar animate-bar <?= (intval($data['percent_police_misperceive_the_person_to_have_gun']) === 0) ? 'bright-green' : 'always-bad' ?>" data-percent="<?= output(intval($data['percent_police_misperceive_the_person_to_have_gun']), 0, '%') ?>"></div>
                </div>
                <p class="note">&nbsp;</p>
              <?php endif; ?>
            </div>
            <?php endif; ?>

          </div>
          <div class="right">
            <?php if(output($data['deadly_force_incidents']) !== '0'): ?>
            <div class="stat-wrapper">
              <a href="javascript:void(0)" data-city="<?= $city ?>" data-more-info="" class="more-info"></a>
              <h3>People Killed or Seriously Injured</h3>
              <p><?= output(round((floatval($data['fatality_rate']) / 100) * intval($data['number_of_people_impacted_by_deadly_force']))) ?> Deaths, <?= intval(num($data['number_of_people_impacted_by_deadly_force'], 0)) - (intval(round((floatval($data['fatality_rate']) / 100) * intval($data['number_of_people_impacted_by_deadly_force'])))) ?> Serious Injuries</p>
              <p><?= num($data['percent_used_against_people_who_were_unarmed'], 0, '%') ?> were Unarmed <span class="divider">&nbsp;|&nbsp;</span> <?= 100 - intval(num($data['percent_used_against_people_who_were_not_armed_with_gun'], 0)) ?>% had a Gun</p>
            <?php if(num($data['number_of_people_impacted_by_deadly_force'], 0) !== '0'): ?>
              <div class="canvas-wrapper">
                <div class="canvas-label"><?= num($data['number_of_people_impacted_by_deadly_force'], 0) ?><br><span><?= grammar('people', num($data['number_of_people_impacted_by_deadly_force'], 0)) ?> Killed or Seriously Injured</span></div>
                <canvas id="deadly-force-chart" width="310" height="350" style="margin: 10px auto 20px auto;"></canvas>
              </div>
            <?php else: ?>
              <p>&nbsp;</p>
            <?php endif; ?>
            </div>
            <?php endif; ?>

            <div class="stat-wrapper grouped">
              <a href="javascript:void(0)" data-city="<?= $city ?>" data-more-info="" class="more-info"></a>
              <h3>Police Violence by race</h3>

              <div class="keys">
                <span class="key race-black"></span> Black
                <span class="key race-latinx"></span> Latinx
                <span class="key race-asianpacificislander"></span> API
                <span class="key race-other"></span> Other
                <span class="key race-white"></span> White
              </div>

              <p>City Population</p>
              <div class="progress-bar-wrapper">
                <div class="progress-bar animate-bar grouped race-black" data-percent="<?= output(floatval($data['percent_black_population']), 0, '%') ?>">
                  <span><?= (intval($data['percent_black_population']) > 5) ? output(intval($data['percent_black_population']), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar animate-bar grouped race-latinx" data-percent="<?= output(floatval($data['percent_hispanic_population']), 0, '%') ?>">
                  <span><?= (intval($data['percent_hispanic_population']) > 5) ? output(intval($data['percent_hispanic_population']), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar animate-bar grouped race-asianpacificislander" data-percent="<?= output(floatval($data['percent_asianpacificislander_population']), 0, '%') ?>">
                  <span><?= (intval($data['percent_asianpacificislander_population']) > 5) ? output(intval($data['percent_asianpacificislander_population']), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar animate-bar grouped race-other" data-percent="<?= output(floatval($data['percent_other_population']), 0, '%') ?>">
                  <span><?= (intval($data['percent_other_population']) > 5) ? output(intval($data['percent_other_population']), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar animate-bar grouped race-white" data-percent="<?= output(floatval($data['percent_white_population']), 0, '%') ?>">
                  <span><?= (intval($data['percent_white_population']) > 5) ? output(intval($data['percent_white_population']), 0, '%') : '' ?></span>
                </div>
              </div>

              <p>People Arrested</p>
              <div class="progress-bar-wrapper">
                <div class="progress-bar animate-bar grouped race-black" data-percent="<?= output(floatval($data['percent_black_arrests']), 0, '%') ?>">
                  <span><?= (intval($data['percent_black_arrests']) > 5) ? output(intval($data['percent_black_arrests']), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar animate-bar grouped race-latinx" data-percent="<?= output(floatval($data['percent_hispanic_arrests']), 0, '%') ?>">
                  <span><?= (intval($data['percent_hispanic_arrests']) > 5) ? output(intval($data['percent_hispanic_arrests']), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar animate-bar grouped race-asianpacificislander" data-percent="<?= output(floatval($data['percent_asianpacificislander_arrests']), 0, '%') ?>">
                  <span><?= (intval($data['percent_asianpacificislander_arrests']) > 5) ? output(intval($data['percent_asianpacificislander_arrests']), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar animate-bar grouped race-other" data-percent="<?= output(floatval($data['percent_other_arrests']), 0, '%') ?>">
                  <span><?= (intval($data['percent_other_arrests']) > 5) ? output(intval($data['percent_other_arrests']), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar animate-bar grouped race-white" data-percent="<?= output(floatval($data['percent_white_arrests']), 0, '%') ?>">
                  <span><?= (intval($data['percent_white_arrests']) > 5) ? output(intval($data['percent_white_arrests']), 0, '%') : '' ?></span>
                </div>
              </div>

              <p>People Killed or Seriously Injured</p>
              <div class="progress-bar-wrapper">
                <div class="progress-bar animate-bar grouped race-black" data-percent="<?= output(floatval($data['percent_black_deadly_force']), 0, '%') ?>">
                  <span><?= (intval($data['percent_black_deadly_force']) > 5) ? output(intval($data['percent_black_deadly_force']), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar animate-bar grouped race-latinx" data-percent="<?= output(floatval($data['percent_hispanic_deadly_force']), 0, '%') ?>">
                  <span><?= (intval($data['percent_hispanic_deadly_force']) > 5) ? output(intval($data['percent_hispanic_deadly_force']), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar animate-bar grouped race-asianpacificislander" data-percent="<?= output(floatval($data['percent_asianpacificislander_deadly_force']), 0, '%') ?>">
                  <span><?= (intval($data['percent_asianpacificislander_deadly_force']) > 5) ? output(intval($data['percent_asianpacificislander_deadly_force']), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar animate-bar grouped race-other" data-percent="<?= output(floatval($data['percent_other_deadly_force']), 0, '%') ?>">
                  <span><?= (intval($data['percent_other_deadly_force']) > 5) ? output(intval($data['percent_other_deadly_force']), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar animate-bar grouped race-white" data-percent="<?= output(floatval($data['percent_white_deadly_force']), 0, '%') ?>">
                  <span><?= (intval($data['percent_white_deadly_force']) > 5) ? output(intval($data['percent_white_deadly_force']), 0, '%') : '' ?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="section bg-gray checklist">
        <div class="content">
          <h1 class="title">
            Policies Adopted to <span class="good">Limit</span> Use of Force
          </h1>
        </div>
        <div class="content">
          <?php if(
            output($data['requires_deescalation'], 0) === '0' &&
            output($data['bans_chokeholds_and_strangleholds'], 0) === '0' &&
            output($data['duty_to_intervene'], 0) === '0' &&
            output($data['requires_warning_before_shooting'], 0) === '0' &&
            output($data['restricts_shooting_at_moving_vehicles'], 0) === '0' &&
            output($data['requires_comprehensive_reporting'], 0) === '0' &&
            output($data['requires_exhaust_all_other_means_before_shooting'], 0) === '0' &&
            output($data['has_use_of_force_continuum'], 0) === '0'
          ): ?>
          <div class="error">City has not adopted the following policies:</div>
          <?php endif; ?>
          <div class="left">
            <div class="check animate-check <?= $data['requires_deescalation'] === '1' ? 'checked' : 'unchecked' ?> more-info" data-city="<?= $city ?>" data-more-info="policy_language_requires_deescalation">
              Requires De-Escalation
            </div>
            <div class="check animate-check <?= $data['bans_chokeholds_and_strangleholds'] === '1' ? 'checked' : 'unchecked' ?> more-info" data-city="<?= $city ?>" data-more-info="policy_language_bans_chokeholds_and_strangleholds">
              Bans Chokeholds / Strangleholds
            </div>
            <div class="check animate-check <?= $data['duty_to_intervene'] === '1' ? 'checked' : 'unchecked' ?> more-info" data-city="<?= $city ?>" data-more-info="policy_language_duty_to_intervene">
              Duty to Intervene
            </div>
            <div class="check animate-check <?= $data['requires_warning_before_shooting'] === '1' ? 'checked' : 'unchecked' ?> more-info" data-city="<?= $city ?>" data-more-info="policy_language_requires_warning_before_shooting">
              Requires Warning Before Shooting
            </div>
          </div>
          <div class="right">
            <div class="check animate-check <?= $data['restricts_shooting_at_moving_vehicles'] === '1' ? 'checked' : 'unchecked' ?> more-info" data-city="<?= $city ?>" data-more-info="policy_language_restricts_shooting_at_moving_vehicles">
              Bans Shooting at Moving Vehicles
            </div>
            <div class="check animate-check <?= $data['requires_comprehensive_reporting'] === '1' ? 'checked' : 'unchecked' ?> more-info" data-city="<?= $city ?>" data-more-info="policy_language_requires_comprehensive_reporting">
              Requires Comprehensive Reporting
            </div>
            <div class="check animate-check <?= $data['requires_exhaust_all_other_means_before_shooting'] === '1' ? 'checked' : 'unchecked' ?> more-info" data-city="<?= $city ?>" data-more-info="policy_language_requires_exhaust_all_other_means_before_shooting">
              Requires Exhaust All Means Before Shooting
            </div>
            <div class="check animate-check <?= $data['has_use_of_force_continuum'] === '1' ? 'checked' : 'unchecked' ?> more-info" data-city="<?= $city ?>" data-more-info="policy_language_has_use_of_force_continuum">
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
          <strong class="grade grade-<?= strtolower(preg_replace('/[^A-Z]/', '', getGrade($data['police_accountability_score']))) ?>"><span>Grade: </span><?= getGrade($data['police_accountability_score']) ?></strong>
          <span class="divider">&nbsp;|&nbsp;</span>
          <?= num($data['police_accountability_score'], 0, '%') ?>
          <a href="javascript:void(0)" class="results-info" data-city="<?= $city ?>" data-result-info="police-accountability">?</a>
        </div>
        <div class="content">
          <div class="left">
            <div class="stat-wrapper">
              <a href="javascript:void(0)" data-city="<?= $city ?>" data-more-info="" class="more-info"></a>
              <h3>Total civilian complaints</h3>
              <p><?= output($data['civilian_complaints_reported']) ?> Reported <span class="divider">&nbsp;|&nbsp;</span> <?= num($data['percent_of_civilian_complaints_sustained'], 0, '%') ?> Ruled in Favor of Civilians</p>
              <?php if(!isset($data['percent_of_civilian_complaints_sustained']) || (isset($data['percent_of_civilian_complaints_sustained']) && empty($data['percent_of_civilian_complaints_sustained']))): ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar no-data" style="width: 0"></div>
                </div>
                <p class="note">&nbsp;</p>
              <?php else: ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar animate-bar <?= progressBar(100 - intval($data['percent_of_civilian_complaints_sustained']), 'reverse') ?>" data-percent="<?= output(intval($data['percent_of_civilian_complaints_sustained']), 0, '%') ?>"></div>
                </div>
                <p class="note">&nbsp;</p>
              <?php endif; ?>
            </div>

            <div class="stat-wrapper">
              <a href="javascript:void(0)" data-city="<?= $city ?>" data-more-info="" class="more-info"></a>
              <h3>Use of Force Complaints</h3>
              <p><?= output($data['use_of_force_complaints_reported']) ?> Reported <span class="divider">&nbsp;|&nbsp;</span> <?= num($data['percent_use_of_force_complaints_sustained'], 0, '%') ?> Ruled in Favor of Civilians</p>
              <?php if(!isset($data['percent_use_of_force_complaints_sustained']) || (isset($data['percent_use_of_force_complaints_sustained']) && empty($data['percent_use_of_force_complaints_sustained']))): ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar no-data" style="width: 0"></div>
                </div>
                <p class="note">City Did Not Provide Data</p>
              <?php else: ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar animate-bar <?= progressBar(100 - intval($data['percent_use_of_force_complaints_sustained']), 'reverse') ?>" data-percent="<?= output(intval($data['percent_use_of_force_complaints_sustained']), 0, '%') ?>"></div>
                </div>
                <p class="note">&nbsp;</p>
              <?php endif; ?>
            </div>
          </div>
          <div class="right">
            <div class="stat-wrapper">
              <a href="javascript:void(0)" data-city="<?= $city ?>" data-more-info="" class="more-info"></a>
              <h3>Complaints of Police Discrimination</h3>
              <?php if (num($data['discrimination_complaints_reported']) === '0'): ?>
                <p>0 Complaints Reported</p>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar bright-green" style="width: 0"></div>
                </div>
                <p class="note">&nbsp;</p>
              <?php else: ?>
                <p><?= num($data['discrimination_complaints_reported']) ?> Reported <span class="divider">&nbsp;|&nbsp;</span> <?= num($data['percent_discrimination_complaints_sustained'], 0, '%') ?> Ruled in Favor of Civilians</p>
                <?php if(!isset($data['percent_discrimination_complaints_sustained']) || (isset($data['percent_discrimination_complaints_sustained']) && empty($data['percent_discrimination_complaints_sustained']))): ?>
                  <div class="progress-bar-wrapper">
                    <div class="progress-bar no-data" style="width: 0"></div>
                  </div>
                  <p class="note">City Did Not Provide Data</p>
                <?php else: ?>
                  <div class="progress-bar-wrapper">
                    <div class="progress-bar animate-bar <?= progressBar(100 - intval($data['percent_discrimination_complaints_sustained']), 'reverse') ?>" data-percent="<?= output(intval($data['percent_discrimination_complaints_sustained']), 0, '%') ?>"></div>
                  </div>
                  <p class="note">&nbsp;</p>
                <?php endif; ?>
              <?php endif; ?>
            </div>

            <div class="stat-wrapper">
              <a href="javascript:void(0)" data-city="<?= $city ?>" data-more-info="" class="more-info"></a>
              <h3>Alleged Crimes Committed by Police</h3>
              <?php if (num($data['criminal_complaints_reported']) === '0'): ?>
                <p>0 Complaints Reported</p>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar bright-green" style="width: 0"></div>
                </div>
                <p class="note">&nbsp;</p>
              <?php else: ?>
                <p><?= num($data['criminal_complaints_reported']) ?> Reported <span class="divider">&nbsp;|&nbsp;</span> <?= output($data['percent_criminal_complaints_sustained'], 0, '') ?> Ruled in Favor of Civilians</p>
                <?php if(num($data['criminal_complaints_reported']) !== '0' && (!isset($data['percent_criminal_complaints_sustained']) || (isset($data['percent_criminal_complaints_sustained']) && empty($data['percent_criminal_complaints_sustained'])))): ?>
                  <div class="progress-bar-wrapper">
                    <div class="progress-bar no-data" style="width: 0"></div>
                  </div>
                  <p class="note">City Did Not Provide Data</p>
                <?php else: ?>
                  <div class="progress-bar-wrapper">
                    <div class="progress-bar animate-bar <?= progressBar(intval($data['percent_criminal_complaints_sustained'])) ?>" data-percent="<?= output(intval($data['percent_criminal_complaints_sustained']), 0, '%') ?>"></div>
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
            Policies Making It <span class="bad">Harder</span> to Hold Police Accountable
          </h1>
        </div>
        <div class="content">
          <div class="left">
            <div class="check animate-check <?= $data['disqualifies_complaints'] === '1' ? 'checked-bad' : 'unchecked' ?> more-info" data-city="<?= $city ?>" data-more-info="policy_language_disqualifies_complaints">
              Disqualifies Complaints
            </div>
            <div class="check animate-check <?= $data['restricts_delays_interrogations'] === '1' ? 'checked-bad' : 'unchecked' ?> more-info" data-city="<?= $city ?>" data-more-info="policy_language_restricts_delays_interrogations">
              Restricts / Delays Interrogations
            </div>
            <div class="check animate-check <?= $data['gives_officers_unfair_access_to_information'] === '1' ? 'checked-bad' : 'unchecked' ?> more-info" data-city="<?= $city ?>" data-more-info="policy_language_gives_officers_unfair_access_to_information">
              Gives Officers Unfair Access to Information
            </div>
          </div>
          <div class="right">
            <div class="check animate-check <?= $data['limits_oversight_discipline'] === '1' ? 'checked-bad' : 'unchecked' ?> more-info" data-city="<?= $city ?>" data-more-info="policy_language_limits_oversight_discipline">
              Limits Oversight / Discipline
            </div>
            <div class="check animate-check <?= $data['requires_city_pay_for_misconduct'] === '1' ? 'checked-bad' : 'unchecked' ?> more-info" data-city="<?= $city ?>" data-more-info="policy_language_requires_city_pay_for_misconduct">
              Requires City Pay for Misconduct
            </div>
            <div class="check animate-check <?= $data['erases_misconduct_records'] === '1' ? 'checked-bad' : 'unchecked' ?> more-info" data-city="<?= $city ?>" data-more-info="policy_language_erases_misconduct_records">
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
          <strong class="grade grade-<?= strtolower(preg_replace('/[^A-Z]/', '', getGrade($data['approach_to_policing_score']))) ?>"><span>Grade: </span><?= getGrade($data['approach_to_policing_score']) ?></strong>
          <span class="divider">&nbsp;|&nbsp;</span>
          <?= num($data['approach_to_policing_score'], 0, '%') ?>
          <a href="javascript:void(0)" class="results-info" data-city="<?= $city ?>" data-result-info="approach">?</a>
        </div>
        <div class="content">
          <div class="left">
            <div class="stat-wrapper no-border-mobile">
              <a href="javascript:void(0)" data-city="<?= $city ?>" data-more-info="" class="more-info"></a>
              <h3>Arrests for Low Level Offenses</h3>
              <p><?= num(round(intval(str_replace(',', '', $data['total_arrests'])) * (intval($data['percent_misdemeanor_arrests']) / 100))) ?> Misdemeanor Arrests <span class="divider">&nbsp;|&nbsp;</span> <?= output($data['misdemeanor_arrests_per_population']) ?> per 1k residents</p>
              <?php if(!isset($data['percent_of_misdemeanor_arrests_per_population']) || (isset($data['percent_of_misdemeanor_arrests_per_population']) && empty($data['percent_of_misdemeanor_arrests_per_population']))): ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar no-data" style="width: 0"></div>
                </div>
                <p class="note">City Did Not Provide Data</p>
              <?php else: ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar animate-bar <?= progressBar(100 - intval($data['percent_of_misdemeanor_arrests_per_population']), 'reverse') ?>" data-percent="<?= output(100 - intval($data['percent_of_misdemeanor_arrests_per_population']), 0, '%') ?>"></div>
                </div>
                <p class="note">^&nbsp; Higher Misdemeanor Arrest Rate than <?= num($data['percent_of_misdemeanor_arrests_per_population'], 0, '%', true) ?> of Depts &nbsp;&nbsp;</p>
              <?php endif; ?>
            </div>

            <div class="stat-wrapper grouped">
              <a href="javascript:void(0)" data-city="<?= $city ?>" data-more-info="" class="more-info"></a>
              <h3 class="minor-pad">Percent of Total Arrests in 2016</h3>

              <p>All Misdemeanors ( <?= num($data['percent_misdemeanor_arrests'], 0, '%') ?> )</p>
              <div class="progress-bar-wrapper">
                <div class="progress-bar animate-bar dark-grey" data-percent="<?= output(intval($data['percent_misdemeanor_arrests']), 0, '%') ?>"></div>
              </div>

              <p>Drug Possession ( <?= num($data['percent_drug_possession_arrests'], 0, '%') ?> )</p>
              <div class="progress-bar-wrapper">
                <div class="progress-bar animate-bar dark-grey" data-percent="<?= output(intval($data['percent_drug_possession_arrests']), 0, '%') ?>"></div>
              </div>

              <p>Violent Crime ( <?= num($data['percent_violent_crime_arrests'], 0, '%') ?> )</p>
              <div class="progress-bar-wrapper">
                <div class="progress-bar animate-bar dark-grey" data-percent="<?= output(intval($data['percent_violent_crime_arrests']), 0, '%') ?>"></div>
              </div>
            </div>
          </div>
          <div class="right">
            <div class="stat-wrapper no-border-mobile">
              <a href="javascript:void(0)" data-city="<?= $city ?>" data-more-info="" class="more-info"></a>
              <h3>Homicides Unsolved</h3>
              <p><?= output($data['murders']) ?> Homicides from 2013-17 <span class="divider">&nbsp;|&nbsp;</span> <?= (intval(str_replace(',', '', $data['murders'])) - intval(str_replace(',', '', $data['murders_cleared']))) ?> Unsolved</p>
              <?php if(intval($data['murders']) === 0): ?>
                <p class="good-job pad-bottom">No Homicides Reported</p>
              <?php elseif(intval($data['murders']) > 0 && (intval(str_replace(',', '', $data['murders'])) - intval(str_replace(',', '', $data['murders_cleared']))) === 0): ?>
                <p class="good-job pad-bottom">No Unsolved Homicides Reported</p>
              <?php elseif(!isset($data['percentile_of_murders_solved']) || (isset($data['percentile_of_murders_solved']) && empty($data['percentile_of_murders_solved']))): ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar no-data" style="width: 0"></div>
                </div>
                <p class="note">City Did Not Provide Data</p>
              <?php else: ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar animate-bar <?= progressBar(intval($data['percentile_of_murders_solved']), 'reverse') ?>" data-percent="<?= output(intval($data['percentile_of_murders_solved']), 0, '%') ?>"></div>
                </div>
                <p class="note">^&nbsp; Solved Fewer Homicides than <?= num($data['percentile_of_murders_solved'], 0, '%') ?> of Depts &nbsp;&nbsp;</p>
              <?php endif; ?>
            </div>

            <?php if(isset($data['black_murder_unsolved_rate']) || isset($data['hispanic_murder_unsolved_rate']) || isset($data['white_murder_unsolved_rate'])): ?>
            <div class="stat-wrapper grouped">
              <a href="javascript:void(0)" data-city="<?= $city ?>" data-more-info="" class="more-info"></a>
              <h3>Percent of Homicides Unsolved After 5 Months by Race</h3>

              <?php if(isset($data['black_murder_unsolved_rate']) && !empty($data['black_murder_unsolved_rate'])): ?>
              <p>Homicides of Black Victims Unsolved ( <?= num($data['black_murder_unsolved_rate'], 0, '%') ?> )</p>
              <div class="progress-bar-wrapper">
                <div class="progress-bar animate-bar dark-grey" data-percent="<?= output(intval($data['black_murder_unsolved_rate']), 0, '%') ?>"></div>
              </div>
              <?php endif; ?>

              <?php if(isset($data['hispanic_murder_unsolved_rate']) && !empty($data['hispanic_murder_unsolved_rate'])): ?>
              <p>Homicides of Latinx Victims Unsolved ( <?= num($data['hispanic_murder_unsolved_rate'], 0, '%') ?> )</p>
              <div class="progress-bar-wrapper">
                <div class="progress-bar animate-bar dark-grey" data-percent="<?= output(intval($data['hispanic_murder_unsolved_rate']), 0, '%') ?>"></div>
              </div>
              <?php endif; ?>

              <?php if(isset($data['white_murder_unsolved_rate']) && !empty($data['white_murder_unsolved_rate'])): ?>
              <p>Homicides of White Victims Unsolved ( <?= num($data['white_murder_unsolved_rate'], 0, '%') ?> )</p>
              <div class="progress-bar-wrapper">
                <div class="progress-bar animate-bar dark-grey" data-percent="<?= output(intval($data['white_murder_unsolved_rate']), 0, '%') ?>"></div>
              </div>
              <?php endif; ?>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="section bg-light-gray grades short" id="score-card">
        <div class="content">
          <h1 class="title">
            2016-2017 California<br/>
            Police Department Grades
          </h1>
        </div>
        <div class="content">
          <div class="left">
            <table>
              <tr>
                <th width="200">City</th>
                <th width="50">Grade</th>
                <th>&nbsp;</th>
              </tr>
            <?php foreach($reportCard as $index => $card): if ($index < 50): ?>
              <tr>
                <td width="200"><a href="./?city=<?= strtolower(preg_replace('/ /', '-', $card['agency_name'])) ?>"><?= $index + 1 ?>. <?= $card['agency_name'] ?></a></td>
                <td width="50"><a href="./?city=<?= strtolower(preg_replace('/ /', '-', $card['agency_name'])) ?>"><?= getGrade($card['overall_score']) ?></a></td>
                <td><a href="./?city=<?= strtolower(preg_replace('/ /', '-', $card['agency_name'])) ?>"><div class="grade grade-<?= strtolower(preg_replace('/[^A-Z]/', '', getGrade($card['overall_score']))) ?>"><?= intval($card['overall_score']) ?>%</div></a></td>
              </tr>
            <?php endif; endforeach; ?>
            </table>
          </div>
          <div class="right">
            <table>
              <tr class="hide-mobile">
                <th width="200">City</th>
                <th width="50">Grade</th>
                <th>&nbsp;</th>
              </tr>
              <?php foreach($reportCard as $index => $card): if ($index >= 50): ?>
                <tr>
                  <td width="200"><a href="./?city=<?= strtolower(preg_replace('/ /', '-', $card['agency_name'])) ?>"><?= $index + 1 ?>. <?= $card['agency_name'] ?></a></td>
                  <td width="50"><a href="./?city=<?= strtolower(preg_replace('/ /', '-', $card['agency_name'])) ?>"><?= getGrade($card['overall_score']) ?></a></td>
                  <td><a href="./?city=<?= strtolower(preg_replace('/ /', '-', $card['agency_name'])) ?>"><div class="grade grade-<?= strtolower(preg_replace('/[^A-Z]/', '', getGrade($card['overall_score']))) ?>"><?= intval($card['overall_score']) ?>%</div></a></td>
                </tr>
              <?php endif; endforeach; ?>
            </table>
          </div>
        </div>
        <div class="content">
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
            <strong>This is the first statewide Police Scorecard in the United States.</strong> It was built using data from California’s <a href="https://openjustice.doj.ca.gov/data" target="_blank">OpenJustice</a> database, public records requests, national databases and media reports.
          </p>
          <p>
            <a href="/about" class="button">methodology</a>
          </p>
          <p>&nbsp;</p>
          <p>
            <strong>Use this Scorecard to identify issues within police departments that require the most urgent interventions and hold officials accountable for implementing solutions.</strong> For example, cities with higher rates of misdemeanor arrests could benefit most from solutions that create alternatives to policing and arrest for these offenses. In cities where police make fewer arrests overall but use more force when making arrests, communities could benefit significantly from policies designed to <a href="http://useofforceproject.org/" target="_blank">limit police use force</a>. And cities where complaints of police misconduct are rarely ruled in favor of civilians could benefit from creating an oversight structure to independently investigate these complaints.
          </p>
          <p>&nbsp;</p>
          <p class="take-action">Here’s how to start pushing for change:</p>
        </div>
        <div class="content">
          <p>&nbsp;</p>
        </div>
        <div class="content">
          <div class="left number number-1">
            <ul>
              <li>
                <strong>Contact your Mayor and Police Chief</strong>, share this scorecard with them and urge them to enact policies to address the issues you’ve identified:
                <ul class="contacts">
                  <li>
                    <strong>Mayor <?= $data['mayor_name'] ?></strong>
                  <?php if (!empty($data['mayor_phone'])): ?>
                    <br>
                    Phone:&nbsp; <a href="tel:1-<?= $data['mayor_phone'] ?><?= (!empty($data['mayor_phone_ext'])) ? ';ext=' . $data['mayor_phone_ext'] : '' ?>"><?= $data['mayor_phone'] ?></a>
                  <?php endif; ?>
                  <?php if (!empty($data['mayor_phone_ext'])): ?>
                    ext <?= $data['mayor_phone_ext'] ?>
                  <?php endif; ?>
                  <?php if (!empty($data['mayor_email'])): ?>
                    <br>
                    Email:&nbsp; <a href="mailto:<?= $data['mayor_email'] ?>"><?= $data['mayor_email'] ?></a>
                  <?php endif; ?>
                  </li>
                  <li>
                    <strong>Police Chief <?= $data['police_chief_name'] ?></strong>
                  <?php if (!empty($data['police_chief_phone'])): ?>
                    <br>
                    Phone:&nbsp; <a href="tel:1-<?= $data['police_chief_phone'] ?><?= (!empty($data['police_chief_phone_ext'])) ? ';ext=' . $data['police_chief_phone_ext'] : '' ?>"><?= $data['police_chief_phone'] ?></a>
                  <?php endif; ?>
                  <?php if (!empty($data['police_chief_phone_ext'])): ?>
                    ext <?= $data['police_chief_phone_ext'] ?>
                  <?php endif; ?>
                  <?php if (!empty($data['police_chief_email'])): ?>
                    <br>
                    Email:&nbsp; <a href="mailto:<?= $data['police_chief_email'] ?>"><?= $data['police_chief_email'] ?></a>
                  <?php endif; ?>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="right number number-2">
            <ul>
              <li><strong>Find your California State Assembly Member</strong> using the Campaign Zero Advocacy Tool and urge them to support <strong>Assembly Bill 392</strong>, which would limit deadly force to be legally authorized only when necessary, a change that can reduce police shootings statewide.
                <br />
              <a href="https://www.joincampaignzero.org/advocacy" class="button" target="_blank">Campaign Zero Advocacy Tool</a></li>
            </ul>
          </div>
        </div>
        <div class="content">
          <p>&nbsp;</p>
          <p>If you have feedback, questions about the project, or need support with an advocacy campaign, contact us directly at <a href="mailto:feedback@joincampaignzero.org">feedback@joincampaignzero.org</a>.</p>
        </div>
      </div>

      <div class="section next">
        <div class="content">
          <h1 class="title">
            What's Next
          </h1>

          <div class="step step-1">
            <h2>Step 1</h2>

            <div>
              <img src="assets/img/next/step1.svg" alt="Step 1" />

              <p><strong>Inform</strong> data-driven interventions in California’s 100 largest cities. Update scores and track progress over time.</p>
            </div>
          </div>

          <div class="step step-2">
            <h2>Step 2</h2>

            <div>
              <img src="assets/img/next/step2.svg" alt="Step 2" />

              <p><strong>Expand</strong> to every law enforcement agency in CA and include additional indicators such as police budgets and disciplinary outcomes.</p>
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
        <a href="javascript:void(0)" id="modal-close">✖</a>
        <div id="modal-content">
          <div id="more-info-content"></div>
          <div id="results-info-content"></div>
          <ul id="city-select">
            <li><a href="./?city=alameda"<?= ($city === 'alameda') ? ' class="selected-city"' : '' ?>>Alameda</a></li>
            <li><a href="./?city=alhambra"<?= ($city === 'alhambra') ? ' class="selected-city"' : '' ?>>Alhambra</a></li>
            <li><a href="./?city=anaheim"<?= ($city === 'anaheim') ? ' class="selected-city"' : '' ?>>Anaheim</a></li>
            <li><a href="./?city=antioch"<?= ($city === 'antioch') ? ' class="selected-city"' : '' ?>>Antioch</a></li>
            <li><a href="./?city=bakersfield"<?= ($city === 'bakersfield') ? ' class="selected-city"' : '' ?>>Bakersfield</a></li>
            <li><a href="./?city=berkeley"<?= ($city === 'berkeley') ? ' class="selected-city"' : '' ?>>Berkeley</a></li>
            <li><a href="./?city=beverly-hills"<?= ($city === 'beverly-hills') ? ' class="selected-city"' : '' ?>>Beverly Hills</a></li>
            <li><a href="./?city=buena-park"<?= ($city === 'buena-park') ? ' class="selected-city"' : '' ?>>Buena Park</a></li>
            <li><a href="./?city=burbank"<?= ($city === 'burbank') ? ' class="selected-city"' : '' ?>>Burbank</a></li>
            <li><a href="./?city=carlsbad"<?= ($city === 'carlsbad') ? ' class="selected-city"' : '' ?>>Carlsbad</a></li>
            <li><a href="./?city=chico"<?= ($city === 'chico') ? ' class="selected-city"' : '' ?>>Chico</a></li>
            <li><a href="./?city=chino"<?= ($city === 'chino') ? ' class="selected-city"' : '' ?>>Chino</a></li>
            <li><a href="./?city=chula-vista"<?= ($city === 'chula-vista') ? ' class="selected-city"' : '' ?>>Chula Vista</a></li>
            <li><a href="./?city=citrus-heights"<?= ($city === 'citrus-heights') ? ' class="selected-city"' : '' ?>>Citrus Heights</a></li>
            <li><a href="./?city=clovis"<?= ($city === 'clovis') ? ' class="selected-city"' : '' ?>>Clovis</a></li>
            <li><a href="./?city=concord"<?= ($city === 'concord') ? ' class="selected-city"' : '' ?>>Concord</a></li>
            <li><a href="./?city=corona"<?= ($city === 'corona') ? ' class="selected-city"' : '' ?>>Corona</a></li>
            <li><a href="./?city=costa-mesa"<?= ($city === 'costa-mesa') ? ' class="selected-city"' : '' ?>>Costa Mesa</a></li>
            <li><a href="./?city=culver-city"<?= ($city === 'culver-city') ? ' class="selected-city"' : '' ?>>Culver City</a></li>
            <li><a href="./?city=daly-city"<?= ($city === 'daly-city') ? ' class="selected-city"' : '' ?>>Daly City</a></li>
            <li><a href="./?city=downey"<?= ($city === 'downey') ? ' class="selected-city"' : '' ?>>Downey</a></li>
            <li><a href="./?city=el-cajon"<?= ($city === 'el-cajon') ? ' class="selected-city"' : '' ?>>El Cajon</a></li>
            <li><a href="./?city=el-monte"<?= ($city === 'el-monte') ? ' class="selected-city"' : '' ?>>El Monte</a></li>
            <li><a href="./?city=elk-grove"<?= ($city === 'elk-grove') ? ' class="selected-city"' : '' ?>>Elk Grove</a></li>
            <li><a href="./?city=escondido"<?= ($city === 'escondido') ? ' class="selected-city"' : '' ?>>Escondido</a></li>
            <li><a href="./?city=fairfield"<?= ($city === 'fairfield') ? ' class="selected-city"' : '' ?>>Fairfield</a></li>
            <li><a href="./?city=fontana"<?= ($city === 'fontana') ? ' class="selected-city"' : '' ?>>Fontana</a></li>
            <li><a href="./?city=fremont"<?= ($city === 'fremont') ? ' class="selected-city"' : '' ?>>Fremont</a></li>
            <li><a href="./?city=fresno"<?= ($city === 'fresno') ? ' class="selected-city"' : '' ?>>Fresno</a></li>
            <li><a href="./?city=fullerton"<?= ($city === 'fullerton') ? ' class="selected-city"' : '' ?>>Fullerton</a></li>
            <li><a href="./?city=garden-grove"<?= ($city === 'garden-grove') ? ' class="selected-city"' : '' ?>>Garden Grove</a></li>
            <li><a href="./?city=gardena"<?= ($city === 'gardena') ? ' class="selected-city"' : '' ?>>Gardena</a></li>
            <li><a href="./?city=glendale"<?= ($city === 'glendale') ? ' class="selected-city"' : '' ?>>Glendale</a></li>
            <li><a href="./?city=hawthorne"<?= ($city === 'hawthorne') ? ' class="selected-city"' : '' ?>>Hawthorne</a></li>
            <li><a href="./?city=hayward"<?= ($city === 'hayward') ? ' class="selected-city"' : '' ?>>Hayward</a></li>
            <li><a href="./?city=huntington-beach"<?= ($city === 'huntington-beach') ? ' class="selected-city"' : '' ?>>Huntington Beach</a></li>
            <li><a href="./?city=inglewood"<?= ($city === 'inglewood') ? ' class="selected-city"' : '' ?>>Inglewood</a></li>
            <li><a href="./?city=irvine"<?= ($city === 'irvine') ? ' class="selected-city"' : '' ?>>Irvine</a></li>
            <li><a href="./?city=livermore"<?= ($city === 'livermore') ? ' class="selected-city"' : '' ?>>Livermore</a></li>
            <li><a href="./?city=long-beach"<?= ($city === 'long-beach') ? ' class="selected-city"' : '' ?>>Long Beach</a></li>
            <li><a href="./?city=los-angeles"<?= ($city === 'los-angeles') ? ' class="selected-city"' : '' ?>>Los Angeles</a></li>
            <li><a href="./?city=merced"<?= ($city === 'merced') ? ' class="selected-city"' : '' ?>>Merced</a></li>
            <li><a href="./?city=milpitas"<?= ($city === 'milpitas') ? ' class="selected-city"' : '' ?>>Milpitas</a></li>
            <li><a href="./?city=modesto"<?= ($city === 'modesto') ? ' class="selected-city"' : '' ?>>Modesto</a></li>
            <li><a href="./?city=mountain-view"<?= ($city === 'mountain-view') ? ' class="selected-city"' : '' ?>>Mountain View</a></li>
            <li><a href="./?city=murrieta"<?= ($city === 'murrieta') ? ' class="selected-city"' : '' ?>>Murrieta</a></li>
            <li><a href="./?city=national-city"<?= ($city === 'national-city') ? ' class="selected-city"' : '' ?>>National City</a></li>
            <li><a href="./?city=newport-beach"<?= ($city === 'newport-beach') ? ' class="selected-city"' : '' ?>>Newport Beach</a></li>
            <li><a href="./?city=oakland"<?= ($city === 'oakland') ? ' class="selected-city"' : '' ?>>Oakland</a></li>
            <li><a href="./?city=oceanside"<?= ($city === 'oceanside') ? ' class="selected-city"' : '' ?>>Oceanside</a></li>
            <li><a href="./?city=ontario"<?= ($city === 'ontario') ? ' class="selected-city"' : '' ?>>Ontario</a></li>
            <li><a href="./?city=orange"<?= ($city === 'orange') ? ' class="selected-city"' : '' ?>>Orange</a></li>
            <li><a href="./?city=oxnard"<?= ($city === 'oxnard') ? ' class="selected-city"' : '' ?>>Oxnard</a></li>
            <li><a href="./?city=palm-springs"<?= ($city === 'palm-springs') ? ' class="selected-city"' : '' ?>>Palm Springs</a></li>
            <li><a href="./?city=palo-alto"<?= ($city === 'palo-alto') ? ' class="selected-city"' : '' ?>>Palo Alto</a></li>
            <li><a href="./?city=pasadena"<?= ($city === 'pasadena') ? ' class="selected-city"' : '' ?>>Pasadena</a></li>
            <li><a href="./?city=pittsburg"<?= ($city === 'pittsburg') ? ' class="selected-city"' : '' ?>>Pittsburg</a></li>
            <li><a href="./?city=pleasanton"<?= ($city === 'pleasanton') ? ' class="selected-city"' : '' ?>>Pleasanton</a></li>
            <li><a href="./?city=pomona"<?= ($city === 'pomona') ? ' class="selected-city"' : '' ?>>Pomona</a></li>
            <li><a href="./?city=redding"<?= ($city === 'redding') ? ' class="selected-city"' : '' ?>>Redding</a></li>
            <li><a href="./?city=redlands"<?= ($city === 'redlands') ? ' class="selected-city"' : '' ?>>Redlands</a></li>
            <li><a href="./?city=redondo-beach"<?= ($city === 'redondo-beach') ? ' class="selected-city"' : '' ?>>Redondo Beach</a></li>
            <li><a href="./?city=redwood-city"<?= ($city === 'redwood-city') ? ' class="selected-city"' : '' ?>>Redwood City</a></li>
            <li><a href="./?city=rialto"<?= ($city === 'rialto') ? ' class="selected-city"' : '' ?>>Rialto</a></li>
            <li><a href="./?city=richmond"<?= ($city === 'richmond') ? ' class="selected-city"' : '' ?>>Richmond</a></li>
            <li><a href="./?city=riverside"<?= ($city === 'riverside') ? ' class="selected-city"' : '' ?>>Riverside</a></li>
            <li><a href="./?city=roseville"<?= ($city === 'roseville') ? ' class="selected-city"' : '' ?>>Roseville</a></li>
            <li><a href="./?city=sacramento"<?= ($city === 'sacramento') ? ' class="selected-city"' : '' ?>>Sacramento</a></li>
            <li><a href="./?city=salinas"<?= ($city === 'salinas') ? ' class="selected-city"' : '' ?>>Salinas</a></li>
            <li><a href="./?city=san-bernardino"<?= ($city === 'san-bernardino') ? ' class="selected-city"' : '' ?>>San Bernardino</a></li>
            <li><a href="./?city=san-diego"<?= ($city === 'san-diego') ? ' class="selected-city"' : '' ?>>San Diego</a></li>
            <li><a href="./?city=san-francisco"<?= ($city === 'san-francisco') ? ' class="selected-city"' : '' ?>>San Francisco</a></li>
            <li><a href="./?city=san-jose"<?= ($city === 'san-jose') ? ' class="selected-city"' : '' ?>>San Jose</a></li>
            <li><a href="./?city=san-leandro"<?= ($city === 'san-leandro') ? ' class="selected-city"' : '' ?>>San Leandro</a></li>
            <li><a href="./?city=san-mateo"<?= ($city === 'san-mateo') ? ' class="selected-city"' : '' ?>>San Mateo</a></li>
            <li><a href="./?city=santa-ana"<?= ($city === 'santa-ana') ? ' class="selected-city"' : '' ?>>Santa Ana</a></li>
            <li><a href="./?city=santa-barbara"<?= ($city === 'santa-barbara') ? ' class="selected-city"' : '' ?>>Santa Barbara</a></li>
            <li><a href="./?city=santa-clara"<?= ($city === 'santa-clara') ? ' class="selected-city"' : '' ?>>Santa Clara</a></li>
            <li><a href="./?city=santa-cruz"<?= ($city === 'santa-cruz') ? ' class="selected-city"' : '' ?>>Santa Cruz</a></li>
            <li><a href="./?city=santa-maria"<?= ($city === 'santa-maria') ? ' class="selected-city"' : '' ?>>Santa Maria</a></li>
            <li><a href="./?city=santa-monica"<?= ($city === 'santa-monica') ? ' class="selected-city"' : '' ?>>Santa Monica</a></li>
            <li><a href="./?city=santa-rosa"<?= ($city === 'santa-rosa') ? ' class="selected-city"' : '' ?>>Santa Rosa</a></li>
            <li><a href="./?city=simi-valley"<?= ($city === 'simi-valley') ? ' class="selected-city"' : '' ?>>Simi Valley</a></li>
            <li><a href="./?city=south-gate"<?= ($city === 'south-gate') ? ' class="selected-city"' : '' ?>>South Gate</a></li>
            <li><a href="./?city=south-san-francisco"<?= ($city === 'south-san-francisco') ? ' class="selected-city"' : '' ?>>South San Francisco</a></li>
            <li><a href="./?city=stockton"<?= ($city === 'stockton') ? ' class="selected-city"' : '' ?>>Stockton</a></li>
            <li><a href="./?city=sunnyvale"<?= ($city === 'sunnyvale') ? ' class="selected-city"' : '' ?>>Sunnyvale</a></li>
            <li><a href="./?city=torrance"<?= ($city === 'torrance') ? ' class="selected-city"' : '' ?>>Torrance</a></li>
            <li><a href="./?city=tracy"<?= ($city === 'tracy') ? ' class="selected-city"' : '' ?>>Tracy</a></li>
            <li><a href="./?city=turlock"<?= ($city === 'turlock') ? ' class="selected-city"' : '' ?>>Turlock</a></li>
            <li><a href="./?city=tustin"<?= ($city === 'tustin') ? ' class="selected-city"' : '' ?>>Tustin</a></li>
            <li><a href="./?city=union-city"<?= ($city === 'union-city') ? ' class="selected-city"' : '' ?>>Union City</a></li>
            <li><a href="./?city=vacaville"<?= ($city === 'vacaville') ? ' class="selected-city"' : '' ?>>Vacaville</a></li>
            <li><a href="./?city=vallejo"<?= ($city === 'vallejo') ? ' class="selected-city"' : '' ?>>Vallejo</a></li>
            <li><a href="./?city=ventura"<?= ($city === 'ventura') ? ' class="selected-city"' : '' ?>>Ventura</a></li>
            <li><a href="./?city=visalia"<?= ($city === 'visalia') ? ' class="selected-city"' : '' ?>>Visalia</a></li>
            <li><a href="./?city=walnut-creek"<?= ($city === 'walnut-creek') ? ' class="selected-city"' : '' ?>>Walnut Creek</a></li>
            <li><a href="./?city=west-covina"<?= ($city === 'west-covina') ? ' class="selected-city"' : '' ?>>West Covina</a></li>
            <li><a href="./?city=westminster"<?= ($city === 'westminster') ? ' class="selected-city"' : '' ?>>Westminster</a></li>
            <li><a href="./?city=whittier"<?= ($city === 'whittier') ? ' class="selected-city"' : '' ?>>Whittier</a></li>
          </ul>
        </div>
      </div>
      <div id="overlay"></div>
    </div>

    <script src="assets/js/site.js<?= trim($ac) ?>"></script>
  <?php if(num($data['number_of_people_impacted_by_deadly_force'], 0) !== '0'): ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script>
    window.onload = function() {
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
                return ' ' + data['labels'][tooltip.index] + ': ' + data['datasets'][tooltip.datasetIndex]['data'][tooltip.index] + '%';
              }
            }
          }
        },
        data: {
          labels: [
            'Unarmed',
            'Knife/Other',
            'Gun'
          ],
          datasets: [
            {
              borderWidth: 0,
              data: [
                <?= floatval($data['percent_used_against_people_who_were_unarmed']) ?>,
                <?= (floatval($data['percent_used_against_people_who_were_not_armed_with_gun']) - floatval($data['percent_used_against_people_who_were_unarmed'])) ?>,
                <?= (100 - floatval($data['percent_used_against_people_who_were_not_armed_with_gun'])) ?>
              ],
              backgroundColor:[
                '#f19975',
                '#58595b',
                '#d4d9e4'
              ],
              hoverBackgroundColor:[
                '#f19975',
                '#58595b',
                '#d4d9e4'
              ]
            }
          ]
        }
      });

      setTimeout(SCORECARD.animate, 250);
    };
    </script>
  <?php endif; ?>
  </body>
</html>
