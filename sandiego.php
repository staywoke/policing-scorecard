<?php
require('common.php');

$title = "San Diego Police Scorecard";
$ac = '?ac=' . getHash();
$socialUrl = rawurlencode('https://policescorecard.org');
$socialText = rawurlencode('Campaign Zero evaluated the policing practices of San Diego Police Department and San Diego Sheriff’s Department from 2016-2018.');
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
    <meta name="description" content="Campaign Zero evaluated the policing practices of San Diego Police Department and San Diego Sheriff’s Department from 2016-2018.">
    <meta name="author" content="StayWoke">

    <meta name="apple-mobile-web-app-title" content="Police Scorecard">
    <meta name="application-name" content="Police Scorecard">

    <!-- Twitter META Info -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@samswey">
    <meta property="twitter:title" content="<?= $title ?>">
    <meta property="twitter:description" content="Campaign Zero evaluated the policing practices of San Diego Police Department and San Diego Sheriff’s Department from 2016-2018..">
    <meta property="twitter:creator" content="@mrmidi">
    <meta property="twitter:image:src" content="https://policescorecard.org/assets/img/card-san-diego.jpg<?= trim($ac) ?>">
    <meta property="twitter:domain" content="https://policescorecard.org">

    <!-- Open Graph protocol -->
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= $title ?>">
    <meta property="og:url" content="https://policescorecard.org">
    <meta property="og:image" content="https://policescorecard.org/assets/img/card-san-diego.jpg<?= trim($ac) ?>">
    <meta property="og:site_name" content="San Diego Police Scorecard">
    <meta property="og:description" content="Campaign Zero evaluated the policing practices of San Diego Police Department and San Diego Sheriff’s Department from 2016-2018.">

    <link href="favicon.ico" rel="shortcut icon">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow+Condensed:300,400,500,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css<?= trim($ac) ?>">

    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2063073133961763');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2063073133961763&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->
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

          San Diego
        </div>
      </div>

      <div class="section hero sandiego">
        <div class="content">
          <h1>We evaluated the police in San Diego City and County.</h1>
          <h2>Here's what we found.</h2>
        </div>
      </div>

      <div class="section bg-gray">
        <div class="content padded text-white">
          <p>Campaign Zero evaluated the policing practices of San Diego Police Department and San Diego Sheriff's Department from 2016-2018.</p>

          <p><strong>Our results show that both departments used force more often than other large California police agencies</strong> - with San Diego Sheriff's Department using more force than the 37 California police departments that make these data public. Both departments were also more likely to <strong>stop, search</strong> and <strong>use force against black people</strong> and <strong>people with disabilities</strong>. Moreover, when civilians report excessive force or police discrimination, <strong>fewer than 1%</strong> of these allegations are upheld. See the findings of our analysis and recommendations below.</p>

          <p><a href="https://docs.google.com/document/d/1apryMIJqMlRDlFra53F2ykVedB6Er2qKd3CUcXVaSiM/edit?usp=sharing" target="_blank" class="read-methodology">Read Our Methodology</a></p>
        </div>
      </div>

      <!-- EVALUATING POLICE STOPS -->
      <div class="section">
        <div class="content chart-summary">
          <div class="left">
            <h1 class="title">
              EVALUATING POLICE STOPS
            </h1>

            <p>San Diego Police and Sheriff's Departments made <strong>116,180 traffic and street stops </strong>from July - December 2018. <strong>Both agencies stopped black people, Pacific Islanders and Native Americans at higher rates</strong> than white people, while Latinx and Asian people were stopped at lower rates.</p>

            <p>San Diego Police Department stopped black people at a rate <strong>3x higher </strong>than white people, making more than 15,000 stops of black people during a six month period in a city where only 84,000 black people live. By contrast, San Diego Sheriff's Department stopped Native Americans and Pacific Islanders at the highest rates.</p>
          </div>
          <div class="right">
            <iframe title="Stop Rates per 1,000 Population" aria-label="Column Chart" id="datawrapper-chart-bpKDC" src="//datawrapper.dwcdn.net/bpKDC/5/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}})}();</script>
          </div>
        </div>
      </div>

      <!-- POLICE SEARCHES -->
      <div class="section bg-orange">
        <div class="content chart-summary">
          <div class="left">
            <h1 class="title">
              POLICE SEARCHES
            </h1>

            <p><strong>1 in every 5 stops resulted in a police search. </strong></p>

            <p>There were substantial disparities in police treatment during these encounters. <strong>Both agencies were more likely to search black people, Native Americans and people with disabilities during a stop.</strong> By contrast, Latinx people and Pacific Islanders were searched at similar rates to white people and Asians were searched at lower rates.</p>
          </div>
          <div class="right">
            <iframe title="Search Rates" aria-label="Column Chart" id="datawrapper-chart-oG2mE" src="//datawrapper.dwcdn.net/oG2mE/5/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}})}();</script>

            <iframe title="Contraband Rates (Copy)" aria-label="Split Bars" id="datawrapper-chart-svZYN" src="//datawrapper.dwcdn.net/svZYN/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="175"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}})}();</script>
          </div>
        </div>
      </div>

      <!-- SEARCH RESULTS -->
      <div class="section">
        <div class="content chart-summary">
          <div class="left">
            <h1 class="title">
              SEARCH RESULTS
            </h1>

            <p><strong>Fewer than 1 in 4 police searches resulted in contraband being found.</strong></p>
            <p>Moreover, <strong>drugs and drug paraphernalia accounted for 66% of all contraband found.</strong> This suggests search rates could be substantially reduced overall without impacting public safety, an approach that would disproportionately benefit groups that are more likely to be searched.</p>
          </div>
          <div class="right">
            <iframe title="Contraband Found" aria-label="Split Bars" id="datawrapper-chart-V31IZ" src="//datawrapper.dwcdn.net/V31IZ/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="186"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}})}();</script>
          </div>
        </div>
      </div>

      <!-- TESTING FOR DISCRIMINATION -->
      <div class="section bg-blue">
        <div class="content chart-summary">
          <div class="left">
            <h1 class="title">
              TESTING FOR DISCRIMINATION
            </h1>

            <p>The "outcome test" evaluates whether disparities in police searches are due to police discrimination. If police are found to be more likely to search one group despite that group being less likely to have contraband (illegal weapons, drugs, etc), it suggests police are acting based on bias and not based on reasonable suspicion. Applying this test, we find <strong>San Diego police officers discriminate against people with disabilities, Asians and Native Americans </strong>when deciding to conduct searches, searching these groups more often despite being substantially less likely to find contraband as a result. <strong>San Diego sheriff's deputies demonstrated a broader pattern of discriminatory policing - </strong>discriminating against black people, Latinx people, Asians and Pacific Islanders in addition to people with disabilities and Native Americans when conducting searches.</p>

            <p>Even for groups where bias could not be established as the cause of search disparities, the fact the vast majority of searches found no contraband (and where contraband <em>was</em> found, it was overwhelmingly drugs/drug paraphernalia) suggests <strong>both agencies are generally "over-searching" the people they stop.</strong></p>
          </div>
          <div class="right">
            <iframe title="Contraband Rates" aria-label="Column Chart" id="datawrapper-chart-UbOp9" src="//datawrapper.dwcdn.net/UbOp9/5/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe> <script type="text/javascript">!function(){"use strict";window.addEventListener("message",function(a){if(void 0!==a.data["datawrapper-height"]) for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}})}();</script>
          </div>
        </div>
      </div>

      <!-- ARRESTS -->
      <div class="section">
        <div class="content chart-summary">
          <div class="left">
            <h1 class="title">
              ARRESTS
            </h1>

            <p><strong>14% of people stopped by San Diego police and 11% of people stopped by San Diego sheriff's deputies were arrested. </strong></p>

            <p>Using a 2016 dataset (the most recent version available) that includes more detailed information on 42,612 arrests made by SDPD and 28,119 arrests made by SDSD, we investigated why people were being arrested in these jurisdictions. </p>

            <p><strong>We find that misdemeanor offenses comprise the vast majority of arrests</strong> - making up 63% of all SDPD arrests and 67% of all SDSD arrests. Of these low-level offenses, <strong>drug possession, status offenses and quality of life offenses</strong> made up a significant proportion - accounting for 21% of all SDPD arrests and 34% of all SDSD arrests.</p>

            <p>A policing approach that prioritizes arrests as a response to low-level offenses disproportionately impacts black communities. For example, black people were 4.3x more likely than white people to be arrested by SDPD for drug possession, despite research showing black and white people use and sell drugs at similar rates. <strong>Both agencies made as many arrests for drug possession alone than for all Part 1 Violent and Property Crimes combined.</strong></p>
          </div>
          <div class="right">
            <a href="https://images.squarespace-cdn.com/content/v1/55ad38b1e4b0185f0285195f/1563002623935-O1WK8HU6BYE3P9ZD8CPH/ke17ZwdGBToddI8pDm48kL29nKf2ZVNtM0yycT6YvXZ7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z5QHyNOqBUUEtDDsRWrJLTmaY54ablWCYO3PdzoC6-gCAmxFa4kqrOmBN2UjzxRI9mw-PZ4Vy_Vz4b-vN-c9ylV/Arrests+Grid+SDPD.png" target="_blank">
              <img src="https://images.squarespace-cdn.com/content/v1/55ad38b1e4b0185f0285195f/1563002623935-O1WK8HU6BYE3P9ZD8CPH/ke17ZwdGBToddI8pDm48kL29nKf2ZVNtM0yycT6YvXZ7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z5QHyNOqBUUEtDDsRWrJLTmaY54ablWCYO3PdzoC6-gCAmxFa4kqrOmBN2UjzxRI9mw-PZ4Vy_Vz4b-vN-c9ylV/Arrests+Grid+SDPD.png" alt="Arrests Grid SDPD.png" />
            </a>
            <a href="https://images.squarespace-cdn.com/content/v1/55ad38b1e4b0185f0285195f/1563002651391-44XO9VFR47ZIRX51OL85/ke17ZwdGBToddI8pDm48kL29nKf2ZVNtM0yycT6YvXZ7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z5QHyNOqBUUEtDDsRWrJLTmaY54ablWCYO3PdzoC6-gCAmxFa4kqrOmBN2UjzxRI9mw-PZ4Vy_Vz4b-vN-c9ylV/Arrests+Grid+SDSD.png" target="_blank">
              <img src="https://images.squarespace-cdn.com/content/v1/55ad38b1e4b0185f0285195f/1563002651391-44XO9VFR47ZIRX51OL85/ke17ZwdGBToddI8pDm48kL29nKf2ZVNtM0yycT6YvXZ7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z5QHyNOqBUUEtDDsRWrJLTmaY54ablWCYO3PdzoC6-gCAmxFa4kqrOmBN2UjzxRI9mw-PZ4Vy_Vz4b-vN-c9ylV/Arrests+Grid+SDSD.png" alt="Arrests Grid SDSD.png" />
            </a>
          </div>
        </div>
      </div>

      <!-- POLICE USE OF FORCE -->
      <div class="section bg-gray">
        <div class="content chart-summary padded">
          <h1 class="title">
            POLICE USE OF FORCE
          </h1>

          <p><strong>1% of stops resulted in police using force. </strong></p>

          <p>To investigate use of force more extensively, we obtained additional individualized use of force data from both agencies spanning the 2016-2018 period. This includes 8,660 use of force incidents reported by San Diego Police Department and 9,543 use of force incidents reported by San Diego Sheriff's Department.</p>
        </div>
      </div>

      <!-- COMPARING USE OF FORCE RATES -->
      <div class="section">
        <div class="content chart-summary padded">
          <h1 class="title">
            COMPARING USE OF FORCE RATES
          </h1>

          <p>We compared use of force rates involving the types of force that were most commonly reported among police agencies - incidents involving "less-lethal" force such as the use of batons, tasers, chemical weapons, impact projectiles and carotid restraints. There were 1,110 of these types of force incidents reported by San Diego Police Department and 1,400 reported by San Diego Sheriff's Department. Comparing these incidents to those reported by 37 other large California law enforcement agencies where we were able to obtain such data, we find <strong>both San Diego departments used these types of force at a higher rates than most law enforcement agencies. </strong>Moreover, <strong>San Diego Sheriff's Department reported the highest use of force rate</strong> of the agencies in our analysis.</p>

          <iframe title="Less Lethal Force" aria-label="Column Chart" id="datawrapper-chart-Wyxl8" src="//datawrapper.dwcdn.net/Wyxl8/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe> <script type="text/javascript">!function(){"use strict";window.addEventListener("message",function(a){if(void 0!==a.data["datawrapper-height"]) for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}})}();</script>
        </div>
      </div>

      <!-- USE OF FORCE DISPARITIES -->
      <div class="section bg-orange">
        <div class="content chart-summary no-pad-bottom">
          <div class="left">
            <h1 class="title">
              USE OF FORCE DISPARITIES
            </h1>

            <p>Disaggregating data on all use of force incidents by race, we find <strong>both San Diego Police Department and the San Diego Sheriff's Department were more likely to use force against black people</strong> even after controlling for arrest rates. Sheriff's deputies were also more likely to use force against Asians / Pacific Islanders than whites during arrest, though this was reflective of Asians / Pacific Islanders having much lower arrest rates overall. On the other hand, use of force rates were similar between white and Latinx populations. This suggests advocacy efforts should aim to both reduce arrests of black people overall while implementing policies and training designed to eliminate racial bias in the use of force against both black and Asian / Pacific Islander populations.</p>
          </div>
          <div class="right">
            <iframe title="Use of Force per Arrest" aria-label="Column Chart" id="datawrapper-chart-wNqyj" src="//datawrapper.dwcdn.net/wNqyj/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe> <script type="text/javascript">!function(){"use strict";window.addEventListener("message",function(a){if(void 0!==a.data["datawrapper-height"]) for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}})}();</script>
          </div>
        </div>
        <div class="content chart-summary padded no-pad-top">
          <p>Available data on use of force by disability status are limited to the period from July - December 2018. These data show <strong>San Diego police were 2x more likely to use force against people with disabilities during a stop and San Diego sheriff's deputies were 2.6x more likely to do so.</strong> While more extensive research on this issue is warranted, the available data suggest there are serious issues regarding both agencies' interactions with people with disabilities.</p>
        </div>
      </div>

      <!-- USE OF FORCE SEVERITY -->
      <div class="section">
        <div class="content chart-summary padded no-pad-bottom">
          <h1 class="title">
            USE OF FORCE SEVERITY
          </h1>

          <p>In addition to examining overall use of force rates, we also calculated a weighted severity score to determine the severity of force used against each group. Using a methodology <a href="https://policingequity.org/images/pdfs-doc/CPE_SoJ_Race-Arrests-UoF_2016-07-08-1130.pdf"><span >developed</span></a> by the Center for Policing Equity, we assigned more severe forms of force a higher score than less severe forms of force:</p>
        </div>

        <div class="content chart-summary no-pad-top">
          <div class="left">
            <ul>
              <li>Lethal incidents received a weight of 6.</li>
              <li>Less lethal and Taser incidents received a weight of 5.</li>
              <li>Canine incidents received a weight of 4.</li>
              <li>OC spray incidents received a weight of 3.</li>
              <li>Weapon incidents received a weight of 2.</li>
              <li>Hands and body incidents received a weight of 1.</li>
            </ul>

            <p><strong>We find both agencies not only were more likely to use force against black people but also used higher levels of force during these encounters compared to other groups. </strong>On average, when SDPD uses force against black people they use a level of force 1.2x more severe than when using force against white people. For SDSD, it was a level of force 2.6x more severe.</p>
          </div>
          <div class="right">
            <iframe title="Use of Force Severity per Arrest" aria-label="Column Chart" id="datawrapper-chart-z18tY" src="//datawrapper.dwcdn.net/z18tY/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe> <script type="text/javascript">!function(){"use strict";window.addEventListener("message",function(a){if(void 0!==a.data["datawrapper-height"]) for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}})}();</script>
          </div>
        </div>
      </div>

      <!-- USE OF FORCE SEVERITY BY ALLEGED RESISTANCE LEVEL AND WEAPON TYPE -->
      <div class="section bg-blue">
        <div class="content chart-summary">
          <div class="left">
            <h1 class="title">
              USE OF FORCE SEVERITY BY ALLEGED RESISTANCE LEVEL AND WEAPON TYPE
            </h1>

            <p>When the data are disaggregated by level of resistance, <strong>we find both departments used more severe levels of force against black people than white people at every level of alleged resistance. </strong>Moreover, while San Diego Sheriff's Department did not report the armed/unarmed status of people they used force against, data from San Diego Police Department shows officers use <a href="https://www.datawrapper.de/_/lahis/" target="_blank">more severe levels of force</a> against black people than white people armed with the same weapons. This suggests more strict policy restrictions on the use of higher levels of force are warranted and the need to ensure such restrictions are enforced especially for encounters with black residents.</p>
          </div>
          <div class="right">
            <iframe title="Use of Force Severity by Reported Resistance Level" aria-label="Split Bars" id="datawrapper-chart-5Q0QN" src="//datawrapper.dwcdn.net/5Q0QN/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="488"></iframe> <script type="text/javascript">!function(){"use strict";window.addEventListener("message",function(a){if(void 0!==a.data["datawrapper-height"]) for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}})}();</script>
          </div>
        </div>
      </div>

      <!-- DEADLY FORCE -->
      <div class="section">
        <div class="content chart-summary padded">
          <h1 class="title">
            DEADLY FORCE
          </h1>

          <p><strong>Deadly Force by San Diego Police Department</strong></p>

          <p>San Diego Police Department reported 26 deadly force incidents from 2016-2018, including 19 police shootings and 7 other force incidents causing death or serious injury. <strong>10 people died in these encounters and 9 were seriously injured.</strong> While San Diego police used deadly force at a lower rate than the state average, we identified several issues that suggest<strong> </strong>changes to department policies could <strong>reduce deadly force further</strong>:&nbsp;</p>

          <ul>
            <li>In at least 12 of the 26 incidents (46%), the person was <strong>unarmed</strong>.</li>
            <li>6 of the 26 incidents (23%) involved people who had signs of <strong>mental health issues</strong>.</li>
            <li>4 of the 19 police shootings (21%) involved San Diego police shooting at someone who was in a <strong>moving vehicle</strong>. </li>
            <li>In 16 of the 19 police shootings (84%), San Diego police officers shot at the person <strong>without first attempting to use non-lethal force</strong> to resolve the situation.</li>
          </ul>

          <p>This suggests a need for stronger deadly force policies and better enforcement of these standards to emphasize alternatives to deadly force whenever possible.</p>

          <p><strong>Deadly Force by San Diego Sheriff's Department</strong></p>

          <p>San Diego Sheriff's Department reported 95 deadly force incidents from 2016-2018, including 22 police shootings and 73 other force incidents causing death or serious injury. 12 people were killed in these incidents and 83 were seriously injured. This is <strong>5.7x higher deadly force rate </strong>per arrest than San Diego Police Department during this period and a higher rate than 26 of California's 30 largest policing agencies.</p>

          <ul>
            <li>SDSD used force against 96 people during these 95 incidents. 68 of these people (71%) were <strong>unarmed</strong>. Only 8 of the 96 people (8%) were allegedly armed with a gun.</li>
            <li><strong>Tasers, strangleholds and weaponless physical force made up 67% of incidents</strong> causing death or serious injury.</li>
            <li>At least 14 people SDSD used deadly force on reportedly had <strong>disabilities</strong> - 13 people had signs of mental illness and one person had physical disabilities.</li>
            <li>Of 22 people shot by SDSD from 2016-2018, 14 (64%) were Latinx. <strong>Latinx people were 5.5x more likely to be shot</strong> by SDSD than white people per arrest. </li>
            <li>4 of the 22 police shootings (18%) involved San Diego sheriff's deputies shooting at someone who was in a <strong>moving vehicle</strong>.</li>
          </ul>

          <p>This suggests policy interventions should include a focus on addressing the excessive use of tasers, physical force and strangleholds while also addressing racial bias in decisions to use firearms, particularly against Latinx people.</p>

          <iframe title="" aria-label="Column Chart" id="datawrapper-chart-tPttE" src="//datawrapper.dwcdn.net/tPttE/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe> <script type="text/javascript">!function(){"use strict";window.addEventListener("message",function(a){if(void 0!==a.data["datawrapper-height"]) for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}})}();</script>
        </div>
      </div>

      <!-- DEATHS IN SAN DIEGO COUNTY JAIL -->
      <div class="section bg-gray">
        <div class="content chart-summary">
          <div class="left">
            <h1 class="title">
              DEATHS IN SAN DIEGO COUNTY JAIL
            </h1>

            <p>In addition to use of force incidents, San Diego Sheriff's Department reported 44 in-custody deaths attributed to causes other than use of force from 2016-2018. This includes at least 10 deaths reportedly due to suicide, 2 death due to homicide committed by another person in custody, and 4 reportedly due to "accidental" causes. Another 15 deaths are attributed to natural causes and 13 remained under investigation at the time of the report. After accounting for the adult jail population in each county, San Diego Sheriff's Department had a rate of 8.1 jail deaths per 1,000 jail population. As such, <strong>people were more likely to die in jail in San Diego County than 18 of the 25 largest counties in California</strong> - suggesting the need for urgent intervention to address treatment and conditions within jail facilities in San Diego.</p>
          </div>
          <div class="right">
            <iframe title="Jail Deaths" aria-label="Column Chart" id="datawrapper-chart-FlTtW" src="//datawrapper.dwcdn.net/FlTtW/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="500"></iframe> <script type="text/javascript">!function(){"use strict";window.addEventListener("message",function(a){if(void 0!==a.data["datawrapper-height"]) for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}})}();</script>
          </div>
        </div>
      </div>

      <!-- POLICE ACCOUNTABILITY -->
      <div class="section">
        <div class="content chart-summary padded">
          <h1 class="title">
            POLICE ACCOUNTABILITY
          </h1>

          <p><strong>When civilians came forward to report police misconduct, it rarely led to accountability in San Diego. </strong>Of 226 civilian complaints of San Diego Police Department conduct in 2016 and 2017, only 11% were ruled in favor of civilians. Moreover, complaints alleging the most serious misconduct were never sustained. For example, of 21 civilian complaints of police discrimination, 75 use of force complaints and 2 complaints alleging criminal misconduct, <strong>none of these complaints were sustained.</strong></p>

          <p><strong>Even fewer complaints were sustained about San Diego Sheriff's Department</strong>. The San Diego County Citizens Law Enforcement Review Board, which receives civilian complaints concerning San Diego Sheriff's Department, reported receiving 262 civilian complaints including 911 different allegations in <a href="https://www.sandiegocounty.gov/content/dam/sdc/clerb/docs/Annual%20Reports/2016%20Annual%20Report.pdf" target="_blank">2016</a> and <a href="https://www.sandiegocounty.gov/content/dam/sdc/clerb/docs/Annual%20Reports/2017%20Annual%20Report.pdf" target="_blank">2017</a>. San Diego Sheriff's Department's Internal Affairs division also <a href="https://www.sdsheriff.net/documents/2017%20Internal%20Affairs%20Report.pdf" target="_blank">reported</a> receiving 30 civilian complaints during this period, but did not report the number of civilian complaints specifically that were sustained.</p>

          <p>Of the 911 allegations reported to the Citizens Law Enforcement Review Board, 159 alleged excessive force, 51 alleged criminal conduct and 17 alleged police discrimination. The board sustained only 12 complaints overall during this period - including 1 excessive force allegation, 2 criminal allegations and 0 allegations of discrimination. This represents a <strong>5% complaint sustain rate overall, a 4% sustain rate for criminal allegations, 1% sustain rate for excessive force and 0% sustain rate for allegations of police discrimination. </strong></p>
        </div>
      </div>

      <!-- POLICY RECOMMENDATIONS FOR SAN DIEGO POLICE DEPARTMENT -->
      <div class="section bg-orange">
        <div class="content chart-summary padded no-pad-bottom">
          <h1 class="title">
            POLICY RECOMMENDATIONS FOR SAN DIEGO POLICE DEPARTMENT
          </h1>

          <p>A review of San Diego police department's policy manual, procedures and police union contract identified a number of areas where new policies could contribute towards addressing the outcomes described in this report.</p>
        </div>

        <div class="content chart-summary no-pad-top no-pad-bottom">
          <div class="left">
            <p><strong>1. Expand Alternatives to Arrest for Low-Level Offenses</strong></p>

            <p>San Diego police currently make arrests for activities such as drug possession and quality of life offenses that pose no threat to public safety. Alternative responses should be created or expanded that send substance abuse counselors, mental health professionals and other civilian responders to the scene instead of armed police officers. In these cases, subjects should not be arrested or incarcerated but rather provided with community-based services and supports. In addition to impacting arrest rates, decriminalizing or deprioritizing drug possession enforcement should also substantially reduce the number of police searches, since drugs and drug paraphernalia were the most common type of contraband cited as the basis for searching people.</p>
          </div>
          <div class="right">
            <iframe title="SDPD Low Level Charges" aria-label="Table" id="datawrapper-chart-Vu9OV" src="//datawrapper.dwcdn.net/Vu9OV/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="488"></iframe> <script type="text/javascript">!function(){"use strict";window.addEventListener("message",function(a){if(void 0!==a.data["datawrapper-height"]) for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}})}();</script>
          </div>
        </div>

        <div class="content chart-summary padded no-pad-top">
          <p><strong>2. Require Officers to Use De-Escalation</strong></p>

          <p>Our analysis found San Diego police used more force during arrest than most CA police departments. Unlike <a href="http://useofforceproject.org"><span >43 of the nation's 100 largest departments</span></a>, <strong>San Diego police department's </strong><a href="https://s3.amazonaws.com/themis.datasd.org/policies_procedures/Procedures/1.0%20Administration/104.pdf"><span ><strong>use of force procedures</strong></span></a><strong> do not require officers to use de-escalation</strong> when feasible prior to using force. Instead, the policy states that de-escalation or disengagement "may" be used and cautions officers that this tactic "may not be possible" in some situations.</p>

          <blockquote><p><em>"Disengagement or de-escalation is a tactic that an officer </em><strong><em>may</em></strong><em> employ in an attempt to resolve the situation. If an officer does not have adequate recourses to safely control a situation, or if disengagement or deescalation would assist in resolving a situation with a lower force level, an officer </em><strong><em>may</em></strong><em> disengage from the incident or de-escalate the force option. Disengagement or de-escalation </em><strong><em>may</em></strong><em> require an officer to move to a tactically sound position and wait for additional resources. Disengagement or deescalation </em><strong><em>may not be possible</em></strong><em>."</em></p></blockquote>

          <p>De-escalation requirements have been shown to <a href="http://useofforceproject.org"><span >significantly reduce</span></a> the use of force. San Diego police department should revise their use of force procedure to <strong>clarify that using de-escalation is a requirement for all officers</strong> whenever feasible.</p><p><strong>3. Ban Shooting at Moving Vehicles</strong></p><p>San Diego police department's use of force procedure allows officers to shoot at moving vehicles even if the vehicle is considered the only threat:&nbsp;</p>

          <blockquote><p><em>"H.6. Officers shall not discharge a firearm at an occupant of a vehicle unless:</em></p><p><em>1. The officer has probable cause to believe that the subject or the vehicle poses an immediate threat of death or serious physical harm to the officer and there is no reasonable alternative for the officer to avoid the harm; or,</em></p><p><em>2. The officer has probable cause to believe that the subject or the vehicle poses an immediate threat of death or serious physical harm to other persons."</em></p></blockquote>

          <p>This policy is inconsistent with the recommendations of the US Department of Justice and law enforcement groups such as the Police Executive Research Forum, which have recommended that police departments ban shooting at moving vehicles unless an occupant of the vehicle is using deadly force by means other than the vehicle. If such a policy was implemented in San Diego, it would likely have <strong>prohibited officers from shooting</strong> <strong>in 21% of all San Diego police shootings</strong> from 2016-2018.</p>

          <p><strong>4. Remove Language in the San Diego Police Union Contract to Strengthen Investigations and Accountability</strong></p><p>A review of San Diego's police union contract identified contract language that imposes unfair and unnecessary limits on the department's ability to investigate and adjudicate allegations of officer misconduct. For example, Section 41.D.1 imposes a 3 business day delay in interrogations of officers - a period that can only be reduced on a case-by-case basis by the Assistant Chief:</p>

          <blockquote><p><em>"Any officer or officers under investigation will receive at least three (3) working days notice prior to an interrogation except where a delay will hamper the gathering of evidence as determined by an Assistant Chief."</em></p></blockquote>

          <p>Policing experts have <a href="https://www.baltimoresun.com/bal-baltimore-police-department-union-contract-20150522-htmlstory.html"><span >cited</span></a> provisions imposing delays in interrogating officers as "unreasonable" and inconsistent with "best-practices" including those articulated in DOJ consent decrees. Such language should be removed from the contract and replaced with a practice of interrogating officers as soon as possible following a misconduct incident/receipt of a misconduct allegation. For example, Washington D.C.'s police union Section 13.3 states that:&nbsp;</p>

          <blockquote><p><em>"Where an employee can reasonably expect discipline to result from an investigatory interview, or the employee is the target of an administrative investigation conducted by the Employer, at the request of the employee, questioning shall be delayed for </em><strong><em>no longer than two hours</em></strong><em> in order to give the employee an opportunity to consult with a Union representative."</em></p></blockquote>

          <p><strong>5. Strengthen Community Oversight to Ensure Accountability</strong></p>

          <p>San Diego Police Department's low sustain rate for complaints suggest changes to existing investigatory and oversight structures are warranted to ensure complaints are fairly investigated and adjudicated. For example, the current San Diego's Community Review Board on Police Practices has the power to review internal affairs investigations but cannot independently investigate complaints of misconduct or subpoena witnesses. This board should either be strengthened or replaced with an independent community structure that has the power to <strong>conduct independent investigations, subpoena witnesses and documents, and impose discipline as a result of their findings.</strong> For example, San Francisco's Department of Police Accountability has these powers and, in combination with the city's police commission, gives civilians the power to impose discipline on officers in cases where the police department fails to do so.</p>
        </div>
      </div>

      <!-- RECOMMENDATIONS FOR SAN DIEGO SHERIFF'S DEPARTMENT -->
      <div class="section">
        <div class="content chart-summary padded">
          <h1 class="title">
            RECOMMENDATIONS FOR SAN DIEGO SHERIFF'S DEPARTMENT
          </h1>

          <p>We reviewed San Diego Sheriff's Department's policy manual, <a href="https://drive.google.com/drive/u/0/folders/1Pv86g4FRLRYkk-hIFCzWLF0-4IHQroNX"><span >use of force guidelines</span></a> and police union contract to determine where new policies could contribute towards addressing the outcomes described in this report.&nbsp;</p>

          <p><strong>1. Reduce SDSD Arrests by One-Third by scaling up Alternatives to Arrest for Drug Possession, Quality of Life Offenses and Other Low-Level Offenses:</strong></p>

          <p>34% of all San Diego Sheriff's Department arrests were reportedly for drug possession, status offenses and quality of life offenses that pose no threat to public safety. Compared to San Diego Police Department, San Diego Sheriff's Department would see an even greater impact on reducing arrest rates by expanding the use of alternative, community-based responses to these activities.</p>

          <p><strong>2. Strengthen the Department's De-Escalation Policy&nbsp;</strong></p>

          <p>The San Diego Sheriff's Department Use of Force guidelines require deputies to "attempt to de-escalate confrontations by using verbalization techniques" prior to using force:</p>

          <blockquote><p><em>Deputies should attempt to de-escalate confrontations by using verbalization techniques prior to, during and after any use of physical force. Commands should be given in clear, concise terms, i.e., "don't move," "slowly raise your hands over your head." Keep it simple. Arm guidance and firm grip: When verbalization proves ineffective, arm guidance or a firm grip may suffice to overcome resistance. Arm guidance or a firm grip that results in injury requires documentation.</em></p></blockquote>

          <p>While this limited de-escalation requirement is important, it is not as robust or comprehensive as the de-escalation policies adopted by other police departments such as in San Francisco, Seattle, New Orleans or Las Vegas. For example, Seattle Police Department's De-escalation policy includes <a href="https://www.seattle.gov/police-manual/title-8---use-of-force/8100---de-escalation"><span >four approaches</span></a> to de-escalating situations that officers are required to consider when possible: using communication, slowing down or stabilizing the situation, increasing distance, and shielding/utilizing cover and concealment. Of these, San Diego deputies are only required to consider using communication (i.e. "verbalization techniques").</p>

          <p><strong>3. Restrict the Use of Tasers</strong></p>

          <p><strong>San Diego Sheriff's Department killed 3 people with tasers from 2016-2018 - representing 17% of all taser deaths statewide during this period. </strong>San Diego Sheriff's Department used tasers in 582 incidents during this time, 2.2x more often per arrest than San Diego Police Department. As such, the department should impose new restrictions on the use of tasers and emphasize using de-escalation tactics and lesser forms of physical force in these situations instead. If these reforms fail to curb deaths and serious injuries from taser use, SDSD should consider banning the use of tasers entirely. </p>

          <p><strong>4. Ban the use of Carotid Restraints (i.e. Strangleholds):</strong></p>

          <p>San Diego Sheriff Department reported seriously injuring 28 people through the use of carotid restraints - a form of stranglehold - from 2016-2018. <strong>This represents 21% of all people seriously injured by this tactic statewide during this period - more than any other police agency.</strong> SDSD's use of force guidelines state that:</p>

          <blockquote><p><em>"The carotid restraint may be used on subjects who are actively resisting or assaultive."&nbsp;&nbsp;</em></p></blockquote>

          <p>This allows carotid restraints to be used even when no threat of imminent death or serious injury is present. Of the 205 people SDSD used a stranglehold on from 2016-2018, only 18 (9%) displayed "aggravated active aggression" which is the level of resistance defined by SDSD as involving a perceived threat of death or serious injury.&nbsp;</p>

          <p>Banning the use of carotid restraints by SDSD or limiting this tactic to be authorized only as deadly force can help prevent further injuries. Police departments in San Jose, Los Angeles, San Francisco, Berkeley and Corona have either banned or limited the use of carotid restraints to deadly force situations where there is a threat of imminent death or serious injury.&nbsp;San Diego Sheriff's Department should do the same.</p>

          <p><strong>5. Ban Shooting at Moving Vehicles</strong></p>

          <p><strong>4 of the 22 people shot by San Diego Sheriff's Department were in a moving vehicle when police fired at them. </strong>The use of force guidelines of the San Diego Sheriff's Department provide confusing and contradictory instructions to officers regarding shooting at moving vehicles:&nbsp;</p>

          <blockquote><p><em>"Shooting at a motor vehicle for the purpose of disabling that vehicle is prohibited. Shooting at or from a moving vehicle is prohibited, except when immediately necessary to protect persons from death or serious bodily injury. Shooting at or from moving vehicles is ineffective and extremely hazardous. Deputies must consider not only their own safety but the safety of fellow deputies and the public. Tactical considerations and decisions for real and or potential threat of the vehicle should be assessed."</em></p></blockquote>

          <p>While this policy bans shooting at vehicles "<em>for the purpose of disabling that vehicle</em>" it includes an exception that authorizes shooting at or from vehicles "<em> when immediately necessary to protect persons from death or serious bodily injury." </em>This loophole authorizes deputies to use deadly force against someone in a moving vehicle under similar circumstances (an imminent threat of death or serious injury) as someone who is not in a vehicle. This policy should be updated to reflect best-practices in the field by banning police departments from shooting at moving vehicles unless an occupant of the vehicle is using deadly force <em>by means other than the vehicle</em>.&nbsp;<strong>At least 3 of the 4 vehicle-related shootings from 2016-2018 - representing 14% of all SDSD shootings during this period - would have been prohibited by this policy</strong> because the subjects in these cases did not use force other than a vehicle against deputies or members of the public.</p>

          <p><strong>6. Improve Jail Conditions and Strengthen Oversight</strong></p>

          <p>Our analysis found San Diego County jails have higher rates of in-custody deaths than most jails in the state - including a relatively large number of deaths due to suicide and at least one death due to homicide by another inmate. While we did not have access to more detailed records describing the conditions within these facilities, the data we do have suggests the need for independent oversight and policy and practice interventions to change the conditions contributing to these outcomes.&nbsp;</p>

          <p><strong>7. Strengthen Enforcement of the Racial Profiling Ban and Use Data to Inform Interventions to Hold Deputies Accountable</strong></p>

          <p>Section 2.55 of the SDSD <a href="https://www.sdsheriff.net/documents/pp/pp-20160321.pdf"><span >Policy Manual</span></a> states that:</p>

          <blockquote><p><em>Members of the San Diego County Sheriff's Department are prohibited from inappropriately or unlawfully considering race, ethnicity, religion, national origin, sexual orientation, gender, or lifestyle in deciding whether or not enforcement intervention will occur.&nbsp;</em></p></blockquote>

          <p><strong>Despite this policy, we find substantial evidence of racial bias and bias against people with disabilities in SDSD stops, searches and use of force.</strong> Since SDSD redacted information from the data they provided us that could have been used to identify individual officers, we cannot determine which officers are responsible for producing these inequities. However, SDSD already has the data needed to begin enforcing this policy effectively. SDSD or an independent oversight agency should use these data to identify, intervene and hold accountable those officers who's records indicate a pattern of biased policing.</p>

          <p><strong>8. Repeal the One-Year Statute of Limitations on Police Misconduct Investigations</strong></p>

          <p>Section 3304(d)(1) of the <a href="https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=GOV&amp;sectionNum=3304." target="_blank">California Peace Officer Bill of Rights </a>states that:</p>

          <blockquote><p><strong><em>No punitive action, nor denial of promotion on grounds other than merit, shall be undertaken</em></strong><em> for any act, omission, or other allegation of misconduct </em><strong><em>if the investigation of the allegation is not completed within one year</em></strong><em> of the public agency's discovery by a person authorized to initiate an investigation of the allegation of an act, omission, or other misconduct.</em></p></blockquote>

          <p>Under this law, investigations can be tossed out if the police department or other investigating agency takes longer than one year to complete the investigation. According to the San Diego County Citizens Law Enforcement Review Board, <a href="https://www.sandiegocounty.gov/content/dam/sdc/clerb/docs/Annual%20Reports/2017%20Annual%20Report.pdf" target="_blank">15% of all cases in 2017</a> were dismissed because they exceeded this statute of limitations - including 22 cases investigating the deaths of civilians. California is <a href="https://www.checkthepolice.org/#review" target="_blank">one of only 4 states</a> that has a law establishing a statute of limitations of one-year or less on police misconduct investigations. <strong>This section should be repealed </strong>to enable agencies to effectively investigate and adjudicate complaints of misconduct - especially for cases resulting in death or serious injury.</p>
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

    <script src="assets/js/site.js<?= trim($ac) ?>"></script>

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
