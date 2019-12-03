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
    <script>! function(f, b, e, v, n, t, s){if (f.fbq) return; n=f.fbq=function(){n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)}; if (!f._fbq) f._fbq=n; n.push=n; n.loaded=!0; n.version='2.0'; n.queue=[]; t=b.createElement(e); t.async=!0; t.src=v; s=b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t, s)}(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js'); fbq('init', '2063073133961763'); </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2063073133961763&ev=PageView&noscript=1" /> </noscript>
    <!-- End Facebook Pixel Code -->
  </head>

  <body>
    <div class="wrapper">
      <div class="section bg-gray header">
        <div class="content">
          <a href="./" class="logo">
            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 288.53 64.07">
              <defs>
                <style>
                .cls-1 {
                  fill: #fff;
                  fill-rule: evenodd
                }
                </style>
                <mask id="mask" x="131.59" y="-.02" width="1.53" height="64.09" maskUnits="userSpaceOnUse">
                  <g transform="translate(-259.98 -478.02)">
                    <path class="cls-1" d="M391.57 478h1.53v64.09h-1.53z" id="a" /> </g>
                </mask>
              </defs>
              <path class="cls-1" d="M414.35 489.61c0 2.1-1 2.83-2.78 2.83h-2.67v-8.77h2.67c1.81 0 2.78.73 2.78 2.87zm-2.64-8.83h-4.92a1 1 0 0 0-1.15.83.81.81 0 0 0 0 .31v21.86a1 1 0 0 0 .84 1.14.81.81 0 0 0 .31 0h1a1 1 0 0 0 1.11-.87 1.22 1.22 0 0 0 0-.27v-8.45h2.81c3.68 0 5.9-1.55 5.9-5.1v-4.31c0-3.56-2.22-5.14-5.9-5.14zm18.94 18.73c0 2.14-1 2.86-2.78 2.86s-2.77-.72-2.77-2.86v-13.25c0-2.14 1-2.86 2.77-2.86s2.78.72 2.78 2.86zm-2.65-19h-.28c-3.67 0-5.89 1.52-5.89 5.11v14.49c0 3.55 2.22 5.11 5.89 5.11h.28c3.68 0 5.9-1.56 5.9-5.11v-14.47c.01-3.55-2.21-5.11-5.9-5.11zm13.15.25h-1a1 1 0 0 0-1.15.82 1 1 0 0 0 0 .35v21.83a1 1 0 0 0 .84 1.14.76.76 0 0 0 .3 0h7.53a1 1 0 0 0 1.17-.79.82.82 0 0 0 0-.35v-.65A1 1 0 0 0 448 502a.76.76 0 0 0-.3 0h-5.4v-20a1 1 0 0 0-.8-1.17 1 1 0 0 0-.35 0m15 23V482a1 1 0 0 0-.81-1.16.93.93 0 0 0-.29 0h-1a1 1 0 0 0-1.14.84.76.76 0 0 0 0 .3v21.86a1 1 0 0 0 .79 1.17.82.82 0 0 0 .35 0h1a1 1 0 0 0 1.1-1.18m17.13-7.41a1 1 0 0 0-.84-1.14.81.81 0 0 0-.31 0h-1a1 1 0 0 0-1.09.91 1.85 1.85 0 0 0 0 .23v3.14c0 2.1-.9 2.86-2.67 2.86s-2.67-.76-2.67-2.86v-13.3c0-2.1.9-2.86 2.67-2.86s2.67.76 2.67 2.86v2.52a1 1 0 0 0 .84 1.14.76.76 0 0 0 .3 0h1a1 1 0 0 0 1.1-.89 2 2 0 0 0 0-.25v-3.14c0-3.48-2.22-5.11-5.9-5.11h-.07c-3.67 0-5.89 1.63-5.89 5.11v14.49c0 3.66 2.22 5.11 5.89 5.11h.07c3.68 0 5.9-1.49 5.9-5.11zM413.41 526l-3.15-1.72c-1.39-.8-1.91-1.32-1.91-2.77v-1.68c0-1.93.94-2.69 2.6-2.69s2.6.76 2.6 2.69v2.14a1 1 0 0 0 .84 1.14.81.81 0 0 0 .31 0h.9a1 1 0 0 0 1.14-.84.76.76 0 0 0 0-.3v-2.66c0-3.49-2.43-5-5.75-5h-.07c-3.33 0-5.76 1.48-5.76 5v3c0 2.32 1.18 3.35 3.4 4.63l3.12 1.72c1.42.79 1.94 1.42 1.94 2.86v1.9c0 1.9-.94 2.76-2.63 2.76s-2.64-.86-2.64-2.76V531a1 1 0 0 0-.84-1.14.81.81 0 0 0-.31 0h-.9a1 1 0 0 0-1.14.84.76.76 0 0 0 0 .3v3c0 3.66 2.11 5 5.79 5h.05c3.68 0 5.79-1.41 5.79-5v-3.38c0-2.31-1.32-3.49-3.4-4.66m14-11.66h-.07c-3.67 0-5.89 1.62-5.89 5.1v14.49c0 3.66 2.22 5.11 5.89 5.11h.07c3.68 0 5.9-1.48 5.9-5.11v-3.76a1 1 0 0 0-.85-1.13.76.76 0 0 0-.3 0h-1a1 1 0 0 0-1.1.88 1 1 0 0 0 0 .25v3.14c0 2.11-.9 2.87-2.67 2.87s-2.67-.76-2.67-2.87V520c0-2.11.9-2.87 2.67-2.87s2.67.76 2.67 2.87v2.55a1 1 0 0 0 .84 1.14.76.76 0 0 0 .3 0h1a1 1 0 0 0 1.15-.83.81.81 0 0 0 0-.31v-3.18c0-3.48-2.22-5.1-5.9-5.1m19.52 19c0 2.14-1 2.87-2.77 2.87s-2.78-.73-2.78-2.87V520c0-2.14 1-2.87 2.78-2.87s2.77.73 2.77 2.87zm-2.64-19H444c-3.68 0-5.9 1.52-5.9 5.1v14.5c0 3.55 2.22 5.1 5.9 5.1h.27c3.68 0 5.9-1.55 5.9-5.1v-14.48c0-3.55-2.17-5.1-5.9-5.1zm19.69 8.85c0 2.14-1 2.87-2.77 2.87h-2.67v-8.56h2.67c1.8 0 2.77.72 2.77 2.86zm.42 5.21c1.8-.72 2.84-2.21 2.84-4.62v-4c0-3.55-2.21-5.1-5.89-5.1h-4.93a1 1 0 0 0-1.14.84 1.41 1.41 0 0 0 0 .29v21.84a1 1 0 0 0 .84 1.14.76.76 0 0 0 .3 0h1a1 1 0 0 0 1.14-.84.76.76 0 0 0 0-.3v-8.8h2.84l3.06 9a1.21 1.21 0 0 0 1.28.94h1a.93.93 0 0 0 1.08-.75 1 1 0 0 0-.08-.57zm17.1 7.52h-5.93v-7.93h4.75a1 1 0 0 0 1.14-.84.76.76 0 0 0 0-.3v-.62a1 1 0 0 0-.84-1.14.76.76 0 0 0-.3 0h-4.75v-7.59h5.82a1 1 0 0 0 1.15-.83.81.81 0 0 0 0-.31v-.59a1 1 0 0 0-.84-1.14.81.81 0 0 0-.31 0h-7.94a1 1 0 0 0-1.14.84.76.76 0 0 0 0 .3v21.88a1 1 0 0 0 .84 1.14.76.76 0 0 0 .3 0h8a1 1 0 0 0 1.14-.84.76.76 0 0 0 0-.3V537a1 1 0 0 0-.84-1.14.76.76 0 0 0-.3 0m11.23-21.56h-.07c-3.68 0-5.89 1.62-5.89 5.1v14.49c0 3.66 2.21 5.11 5.89 5.11h.07c3.68 0 5.9-1.48 5.9-5.11v-3.76a1 1 0 0 0-.85-1.13.76.76 0 0 0-.3 0h-1a1 1 0 0 0-1.14.84 1.41 1.41 0 0 0 0 .29v3.14c0 2.11-.91 2.87-2.67 2.87s-2.67-.76-2.67-2.87V520c0-2.11.9-2.87 2.67-2.87s2.67.76 2.67 2.87v2.55a1 1 0 0 0 .84 1.14.76.76 0 0 0 .3 0h1a1 1 0 0 0 1.15-.83.81.81 0 0 0 0-.31v-3.18c0-3.48-2.22-5.1-5.9-5.1m14 16l2.12-11.66L511 530.3zm4.37-14.7a1.17 1.17 0 0 0-1.24-1h-2a1.17 1.17 0 0 0-1.25 1l-4.37 21.87c-.13.8.25 1.24 1 1.24h.87a1.11 1.11 0 0 0 1.21-1l.83-4.66h5.24l.83 4.66a1.16 1.16 0 0 0 1.25 1h1a.92.92 0 0 0 1-.77.84.84 0 0 0 0-.47zm17.2 7.52c0 2.14-1 2.87-2.77 2.87h-2.67v-8.56h2.67c1.8 0 2.77.72 2.77 2.86zm.42 5.21c1.8-.72 2.84-2.21 2.84-4.62v-4c0-3.55-2.22-5.1-5.89-5.1h-4.93a1 1 0 0 0-1.14.84 1.41 1.41 0 0 0 0 .29v21.84a1 1 0 0 0 .84 1.14.76.76 0 0 0 .3 0h1a1 1 0 0 0 1.15-.83.81.81 0 0 0 0-.31v-8.8h2.84l3 9a1.21 1.21 0 0 0 1.29.94h1a.93.93 0 0 0 1.08-.75 1 1 0 0 0-.08-.57zm16.56 4.7c0 2.14-1 2.86-2.78 2.86h-2.6v-18.43h2.6c1.81 0 2.78.72 2.78 2.86zm-2.64-18.42h-4.85a1 1 0 0 0-1.15.83 1.5 1.5 0 0 0 0 .3v21.88a1 1 0 0 0 .85 1.13.76.76 0 0 0 .3 0h4.85c3.68 0 5.9-1.55 5.9-5.1v-13.95c0-3.55-2.22-5.1-5.9-5.1zm-55.06-12.42h-5.93v-7.93h4.75a1 1 0 0 0 1.14-.84 1.5 1.5 0 0 0 0-.3v-.62a1 1 0 0 0-.84-1.14.76.76 0 0 0-.3 0h-4.75v-7.59h5.82a1 1 0 0 0 1.15-.83 1.61 1.61 0 0 0 0-.31v-.6a1 1 0 0 0-.84-1.14.81.81 0 0 0-.31 0h-7.94a1 1 0 0 0-1.14.84.76.76 0 0 0 0 .3v21.88a1 1 0 0 0 .83 1.14h8.36a1 1 0 0 0 1.14-.84 1.5 1.5 0 0 0 0-.3v-.59a1 1 0 0 0-.84-1.14.76.76 0 0 0-.3 0" transform="translate(-259.98 -478.02)" />
              <g mask="url(#mask)">
                <path class="cls-1" d="M393.1 541.33v-62.55a.76.76 0 0 0-.76-.76.77.77 0 0 0-.77.76v62.55a.77.77 0 0 0 .77.76.76.76 0 0 0 .76-.76" transform="translate(-259.98 -478.02)" /> </g>
              <path class="cls-1" d="M266.4 506a5.83 5.83 0 0 0 4.09-1.62.31.31 0 0 0 0-.44l-1-1.08a.33.33 0 0 0-.42 0 4.09 4.09 0 0 1-2.58 1 3.89 3.89 0 0 1 0-7.77 4 4 0 0 1 2.59 1 .27.27 0 0 0 .38 0l1-1.06a.32.32 0 0 0 0-.45 5.69 5.69 0 0 0-4.1-1.6 6 6 0 1 0 0 12.05m15.17-7.85h.06l1.68 3.65h-3.39zm-5.25 7.65h1.47a.48.48 0 0 0 .48-.34l.83-1.81h5l.9 1.85c.12.24.23.34.49.34H287a.29.29 0 0 0 .32-.27.25.25 0 0 0 0-.17L282 494.11a.29.29 0 0 0-.28-.19h-.17a.3.3 0 0 0-.29.19L276 505.38a.29.29 0 0 0 .15.38.32.32 0 0 0 .17.02zm16.88 0h1.51a.34.34 0 0 0 .31-.25l1-6.35h.06l2.92 6.6a.32.32 0 0 0 .29.18h.3a.28.28 0 0 0 .31-.18l3-6.58 1 6.35a.37.37 0 0 0 .32.25h1.53a.29.29 0 0 0 .32-.27.25.25 0 0 0 0-.12l-2-11.25a.29.29 0 0 0-.3-.25h-.27a.28.28 0 0 0-.29.16L299.5 502l-3.71-7.91a.3.3 0 0 0-.29-.16h-.26a.28.28 0 0 0-.31.25l-2 11.25a.31.31 0 0 0 .22.38h.1m22-9.65h2a1.62 1.62 0 0 1 1.71 1.53v.1a1.67 1.67 0 0 1-1.6 1.74h-2.07zm-1.86 9.63H315a.34.34 0 0 0 .32-.32v-3.9h2.08a3.74 3.74 0 1 0 .39-7.47h-4.39a.32.32 0 0 0-.33.31v11.09a.32.32 0 0 0 .36.28zm17.63-7.65l1.74 3.65h-3.39zm-5.25 7.65h1.46a.51.51 0 0 0 .49-.34l.83-1.81h5l.83 1.81a.48.48 0 0 0 .48.34h1.5a.29.29 0 0 0 .32-.27.25.25 0 0 0 0-.17l-5.19-11.23a.28.28 0 0 0-.29-.19h-.2a.32.32 0 0 0-.28.19l-5.2 11.27a.29.29 0 0 0 .18.38.22.22 0 0 0 .11.01zm17.52 0h1.56a.34.34 0 0 0 .32-.32v-11a.34.34 0 0 0-.32-.32h-1.56a.34.34 0 0 0-.32.32v11.03a.34.34 0 0 0 .32.32m14.94.15a8.63 8.63 0 0 0 4.18-1.09.37.37 0 0 0 .13-.27v-4.29a.31.31 0 0 0-.3-.32h-3.23a.31.31 0 0 0-.32.3v1.35a.31.31 0 0 0 .32.3h1.34v1.42a5.27 5.27 0 0 1-2 .42 3.86 3.86 0 1 1 2.52-6.75.3.3 0 0 0 .42 0l1-1.09a.33.33 0 0 0 0-.47 6.4 6.4 0 0 0-4.11-1.56 6 6 0 1 0 0 12.05m11.87-.19h1.54a.32.32 0 0 0 .32-.32v-7.2l6.9 7.57a.36.36 0 0 0 .29.11h.23a.31.31 0 0 0 .32-.3v-11.23a.34.34 0 0 0-.32-.32h-1.43a.32.32 0 0 0-.32.32v6.92l-6.87-7.33a.34.34 0 0 0-.28-.11h-.26a.31.31 0 0 0-.32.3v11.31a.34.34 0 0 0 .32.32M260.32 525.9h7.19a.33.33 0 0 0 .32-.31v-1.39a.32.32 0 0 0-.32-.32h-4.29L268 515a.84.84 0 0 0 .16-.48.34.34 0 0 0-.32-.32h-7a.34.34 0 0 0-.32.32v1.39a.34.34 0 0 0 .32.32H265v.06l-4.9 8.8a.87.87 0 0 0-.12.52.33.33 0 0 0 .32.31m14.93 0h6.85a.31.31 0 0 0 .32-.3v-1.38a.32.32 0 0 0-.32-.32h-5V521h4.16a.32.32 0 0 0 .32-.32v-1.39a.33.33 0 0 0-.32-.31h-4.14v-2.75h5a.32.32 0 0 0 .32-.32v-1.41a.32.32 0 0 0-.32-.32h-6.87a.32.32 0 0 0-.32.32v11.09a.31.31 0 0 0 .31.31m16.42-9.71h2.75a1.66 1.66 0 0 1 1.66 1.59 1.71 1.71 0 0 1-1.66 1.71h-2.75zm-1.88 9.71h1.55a.34.34 0 0 0 .32-.32v-4.27h1.86l2.24 4.47a.28.28 0 0 0 .27.15h1.77a.31.31 0 0 0 .33-.31.25.25 0 0 0 0-.17l-2.31-4.26a3.68 3.68 0 0 0 2.49-3.41 3.63 3.63 0 0 0-3.67-3.6h-4.81a.32.32 0 0 0-.32.32v11.08a.32.32 0 0 0 .29.32zm17.13-5.84a3.87 3.87 0 1 1 3.91 3.83h-.06a3.89 3.89 0 0 1-3.85-3.83m9.91 0a6.05 6.05 0 1 0-6.1 6 6 6 0 0 0 6.06-5.94v-.06" transform="translate(-259.98 -478.02)" /> </svg>
          </a>
          <a href="javascript:void(0);" id="mobile-toggle"></a>
          <div id="menu">
            <ul>
              <li><a href="about">About the Data</a> </li>
              <li><a href="findings">Key Findings</a> </li>
              <li><a href="https://www.joincampaignzero.org/about/" target="_blank">Planning Team</a> </li>
              <li><a href="https://www.joincampaignzero.org/" target="_blank">More about Campaign Zero</a> </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="section bg-dotted current-state">
        <div class="content">
          <svg width="42px" height="43px" viewBox="0 0 42 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" fill-opacity="0.630151721">
              <g transform="translate(-534.000000, -141.000000)" fill="#000000" fill-rule="nonzero">
                <g transform="translate(-5.000000, 118.000000)">
                  <g transform="translate(539.000000, 19.000000)">
                    <g transform="translate(0.000000, 4.500000)">
                      <path d="M21,3.3158661e-15 C15.4308,3.3158661e-15 10.0898,2.21120667 6.15066667,6.15066667 C2.21316667,10.0881667 0,15.4294 0,21 C0,26.5692 2.21302667,31.9102 6.15066667,35.8493333 C10.0899867,39.7868333 15.4312667,42 21,42 C26.5687333,42 31.9102,39.7869733 35.8493333,35.8493333 C39.7868333,31.9100133 42,26.5687333 42,21 C42,15.4289333 39.7869733,10.0879333 35.8493333,6.15066667 C31.9100133,2.21134667 26.5687333,0 21,3.3158661e-15 Z M15.2940667,9.16393333 L21.7653333,11.12174 L20.4036,17.0824733 L27.3854,28.1532067 L27.9814733,30.1966933 L26.78928,31.0479867 L26.6197493,32.24018 L26.9606353,32.8362533 L21.681702,32.24018 L21.4264913,30.5375933 L20.403838,29.25972 L19.9772767,30.1110133 L19.9772767,28.57792 L18.3585033,27.4714067 L17.76243,28.15316 L17.421544,26.7914267 L17.1663333,25.2583333 L15.63324,22.6187733 L15.974126,21.42658 L15.463686,20.2343867 L15.5493613,18.27658 L15.1228,18.021374 L14.9532693,16.2331073 L14.187656,15.637034 L14.698096,14.2753007 L14.0163427,12.6565273 L15.037176,10.9539407 L15.2923867,9.165674 L15.2940667,9.16393333 Z" id="Shape"></path>
                    </g>
                  </g>
                </g>
              </g>
            </g>
          </svg> San Diego </div>
      </div>

      <div class="section hero sandiego">
        <div class="content">
          <h1>We evaluated policing in San Diego City and County.</h1>
          <h2>Here's what we found.</h2> </div>
      </div>

      <div class="section bg-gray">
        <div class="content padded text-white no-pad-bottom">
          <p><strong>Campaign Zero</strong> evaluated the policing practices of San Diego Police Department (SDPD) and San Diego Sheriff’s Department (SDSD).</p>

          <p>Our results show both departments to be engaged in a pattern of discriminatory policing. <strong>Both departments stopped black people at a rate more than 2x higher than white people and were more likely to search, arrest, use force against black people during a stop.</strong> Both departments not only use force more often but also use more severe forms of force against black people than other groups, even after controlling for arrest rates and alleged level of resistance. </p>

          <p>We also found evidence of <strong>anti-Latinx bias, anti-LGBT bias and bias against people with disabilities</strong> in both departments’ search practices. Moreover, when communities report police discrimination or excessive force, fewer than 1% of these allegations were upheld by either department. Our summary findings and policy recommendations to reduce police violence, strengthen accountability and make communities safer are presented below.</p>

          <p><a href="/assets/san-diego/police-scorecard-san-diego-report.pdf" target="_blank" class="read-methodology">Read the Full Report</a> </p>

        </div>
      </div>

      <!-- EVALUATING POLICE STOPS -->
      <div class="section">
        <div class="content chart-summary">
          <div class="left">
            <h1 class="title">EVALUATING POLICE STOPS</h1>
            <p><strong>San Diego Police and Sheriff's Departments made 230,643 traffic and pedestrian stops from July 2018 - June 2019.</strong> </p>
            <p>Both agencies stopped black people and Pacific Islanders at higher rates than white people. For example, San Diego police made 35,038 stops of black people during a 12-month period in a city with a total of 88,774 black residents - an extreme level of policing impacting black San Diego residents. Black people were more likely than white people to be stopped in 84% of San Diego Police Department beats and in every area of San Diego Sheriff’s Department’s jurisdiction. Moreover, fewer than 15% of these stops were initiated from civilian calls for service (i.e 911 calls), indicating that these racial disparities are the product of police decision-making rather than officers responding to community calls for assistance.</p>
          </div>

          <div class="right">
            <iframe title="San Diego Sheriff's Dept Stop Rates (Copy)" aria-label="Split Bars" id="datawrapper-chart-LMr7q" src="//datawrapper.dwcdn.net/LMr7q/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="383"></iframe>
            <script type="text/javascript">!function(){"use strict";window.addEventListener("message",function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}})}();</script>

            <p><br><strong>Map of San Diego Police Department Stops</strong> </p>

            <iframe width="100%" height="520" frameborder="0" src="https://samswey.carto.com/viz/1e0b8d87-ec99-4923-91b9-1a69c5f02826/embed_map" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
          </div>
        </div>
      </div>

      <!-- POLICE SEARCHES -->
      <div class="section bg-orange">
        <div class="content chart-summary">
          <div class="left">
            <h1 class="title">POLICE SEARCHES</h1>
            <p><strong>1 in every 5 stops resulted in a police search. </strong> </p>
            <p>There were substantial disparities in police treatment during these stops. <strong>Both agencies were more likely to search black people, people perceived to be LGBT and people perceived to have disabilities during a stop.</strong> Moreover, in situations where police had the most discretion, they tended to engage in discriminatory search practices. For example, San Diego police were 44% more likely to search Latinx people and 133% more likely to search black people than white people during a routine traffic stop - especially for equipment violations. Moreover, San Diego police were 23% more likely to search a black person and 60% more likely to search a Latinx person based solely on the consent of the person being searched - a type of search where officers have the most discretion. San Diego sheriff's deputies were also more likely to conduct these types of searches, called "consent searches", on black and Latinx people during a stop. Among the groups in our analysis, people perceived to have mental disabilities experienced some of the most extreme search disparities - this group was 81% more likely to be searched by San Diego police and 112% more likely to be searched by San Diego sheriff’s deputies during a stop than people who were not perceived to have a disability. </p>
          </div>
          <div class="right">
            <iframe title="Bias Against People with Mental Disabilities in San Diego PD Stops" aria-label="Column Chart" id="datawrapper-chart-81XRG" src="//datawrapper.dwcdn.net/81XRG/2/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe>
            <script type="text/javascript">! function(){"use strict"; window.addEventListener("message", function(a){if (void 0 !==a.data["datawrapper-height"]) for (var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-" + e) || document.querySelector("iframe[src*='" + e + "']"); t && (t.style.height=a.data["datawrapper-height"][e] + "px")}})}(); </script>

            <p>&nbsp;</p>

            <iframe title="Bias Against People with Mental Disabilities in San Diego SD Stops" aria-label="Column Chart" id="datawrapper-chart-wKjJo" src="//datawrapper.dwcdn.net/wKjJo/4/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe>
            <script type="text/javascript">! function(){"use strict"; window.addEventListener("message", function(a){if (void 0 !==a.data["datawrapper-height"]) for (var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-" + e) || document.querySelector("iframe[src*='" + e + "']"); t && (t.style.height=a.data["datawrapper-height"][e] + "px")}})}(); </script>
          </div>
        </div>
      </div>

      <!-- SEARCH RESULTS -->
      <div class="section">
        <div class="content chart-summary">
          <div class="left">
            <h1 class="title">SEARCH RESULTS</h1>
            <p><strong>77% of all searches by these departments did not report finding contraband.</strong></p>
            <p>Moreover, the contraband these departments did report finding rarely posed a public safety risk justifying the use of this intrusive police tactic. Drugs or drug paraphernalia represented two-thirds of all contraband reportedly found while fewer than 1% of searches by either department reportedly found a gun. And while San Diego police and sheriff’s departments were more likely to search black and Latinx people during routine traffic stops, they were <strong>significantly less likely to find contraband during these searches</strong>. This suggests both departments are over-searching people in general, with little to no public safety benefit, while engaging in biased policing towards communities of color in particular.</p>
            <p>Both departments also engaged in discriminatory search practices against people perceived to have disabilities and people perceived to be LGBT. These groups were also searched at higher rates despite being substantially less likely to be found with contraband.</p>
          </div>
          <div class="right">
            <iframe title="SDSD searches were less likely to find contraband on people of color, especially during traffic stops (Copy)" aria-label="Grouped Column Chart" id="datawrapper-chart-6a6RU" src="//datawrapper.dwcdn.net/6a6RU/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe>
            <script type="text/javascript">!function(){"use strict";window.addEventListener("message",function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}})}();</script>
          </div>
        </div>
      </div>

      <!-- ARRESTS -->
      <div class="section bg-blue">
        <div class="content chart-summary">
          <div class="left">
            <h1 class="title">ARRESTS</h1>
            <p>We obtained detailed data on 88,372 arrests made from 2016-2018 by San Diego Police Department and 28,119 arrests made in 2016 by San Diego Sheriff’s Department. Analyzing these data, we find that misdemeanor offenses comprise the vast majority of arrests - making up 71% of all SDPD arrests and 67% of all SDSD arrests. Of these low-level offenses, drug possession, status offenses and quality of life offenses made up a significant proportion - accounting for 34% of SDPD arrests and 34% of SDSD arrests.</p>
            <p>This policing approach, which uses arrests as a response to low-level offenses, disproportionately impacts black communities. For example, black people were 4.1x more likely than white people to be arrested by SDPD for drug possession, despite research showing black and white people use and sell drugs at similar rates. Both agencies made as many arrests for drug possession alone as they did for all Part 1 Violent and Property Crimes combined.</p>
          </div>
          <div class="right">
            <div class="right">
              <a href="/assets/san-diego/arrests-1.png" target="_blank"> <img src="/assets/san-diego/arrests-1.png" alt="Arrests Grid SDPD.png" /> </a>
              <a href="/assets/san-diego/arrests-2.png" target="_blank"> <img src="/assets/san-diego/arrests-2.png" alt="Arrests Grid SDSD.png" /> </a>
            </div>
          </div>
        </div>
      </div>

      <!-- POLICE USE OF FORCE -->
      <div class="section">
        <div class="content chart-summary padded">
          <h1 class="title">POLICE USE OF FORCE</h1>
          <p>To investigate use of force more extensively, we obtained additional individualized use of force data from both agencies from 2016-2018. This includes <strong>8,660 use of force cases</strong> reported by San Diego Police Department and <strong>9,543 use of force cases</strong> reported by San Diego Sheriff's Department.</p>
        </div>
      </div>

      <!-- COMPARING USE OF FORCE RATES -->
      <div class="section bg-gray">
        <div class="content chart-summary padded">
          <h1 class="title">COMPARING USE OF FORCE RATES</h1>
          <p>To compare use of force by San Diego police with other agencies within the state, we developed a “use of force” index that includes the types of force that are most commonly reported across police agencies. This includes police use of batons, tasers, chemical agents, bean bag shotguns and potentially deadly tactics such as strangleholds against civilians. There were 1,060 cases of these types of force incidents reported by San Diego Police Department from 2017-2018. Comparing these incidents to those reported by 42 other large California city police departments where we were able to obtain such data, we find <strong>San Diego police used force at a higher rate than 95% of California law enforcement agencies in our analysis.</strong> </p>
          <iframe title="San Diego Police Department uses Force at Higher Rates than Most CA Police Departments" aria-label="Column Chart" id="datawrapper-chart-oAOML" src="//datawrapper.dwcdn.net/oAOML/7/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="500"></iframe>
          <script type="text/javascript">! function(){"use strict"; window.addEventListener("message", function(a){if (void 0 !==a.data["datawrapper-height"]) for (var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-" + e) || document.querySelector("iframe[src*='" + e + "']"); t && (t.style.height=a.data["datawrapper-height"][e] + "px")}})}(); </script>
        </div>
      </div>

      <!-- USE OF FORCE DISPARITIES -->
      <div class="section">
        <div class="content chart-summary">
          <div class="left">
            <h1 class="title">USE OF FORCE DISPARITIES</h1>
            <p>Between 2016-2018, San Diego Police Department and the San Diego Sheriff's Department were more likely to use force against black people, even after controlling for arrest rates. Sheriff's deputies were also more likely to use force against Asians / Pacific Islanders than whites during arrest.</p>
            <p>Available data on use of force by disability status, which was limited to the period from July 2018 - July 2019, shows San Diego police were 172% more likely to use force against people perceived to have mental disabilities during a stop and San Diego sheriff's deputies were 70% more likely to do so. This suggests there are serious issues regarding both agencies' interactions with black people and people with disabilities.</p>
          </div>
          <div class="right">
            <iframe title="San Diego police were more likely to use weapons and other types of force against Black People" aria-label="Column Chart" id="datawrapper-chart-YUYaD" src="//datawrapper.dwcdn.net/YUYaD/2/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="450"></iframe>
            <script type="text/javascript">!function(){"use strict";window.addEventListener("message",function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}})}();</script>

            <p>&nbsp;</p>

            <iframe title="San Diego deputies were more likely to use nearly every type of force against People of Color" aria-label="Grouped Bars" id="datawrapper-chart-gq7Ze" src="//datawrapper.dwcdn.net/gq7Ze/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="783"></iframe>
            <script type="text/javascript">!function(){"use strict";window.addEventListener("message",function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}})}();</script>
          </div>
        </div>
      </div>

      <!-- USE OF FORCE SEVERITY -->
      <div class="section bg-orange">
        <div class="content chart-summary">
          <div class="left">
            <h1 class="title">USE OF FORCE SEVERITY</h1>
            <p>Using a methodology <a href="https://policingequity.org/images/pdfs-doc/CPE_SoJ_Race-Arrests-UoF_2016-07-08-1130.pdf" target="_blank">developed</a> by the Center for Policing Equity, we assigned more severe forms of force - like the use of tasers and canines - a higher score than less severe forms of force - like punches and kicks. <strong>The results show both departments not only were more likely to use force against black people but also used higher levels of force during these encounters compared to other groups.</strong> On average, when SDPD uses force against black people they use a level of force 1.3x more severe than when using force against white people. For SDSD, it was a level of force 2.7x more severe. Both departments used more severe levels of force against black people than white people even after controlling for the level of resistance officers reported encountering. </p>
          </div>
          <div class="right">
            <iframe title="Use of Force Severity per Arrest" aria-label="Grouped Column Chart" id="datawrapper-chart-z18tY" src="//datawrapper.dwcdn.net/z18tY/10/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe>
            <script type="text/javascript">!function(){"use strict";window.addEventListener("message",function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}})}();</script>
          </div>
        </div>
      </div>

      <!-- DEADLY FORCE -->
      <div class="section">
        <div class="content chart-summary padded">
          <h1 class="title">DEADLY FORCE</h1>

          <p><strong>Deadly Force by San Diego Police Department</strong> </p>

          <p>San Diego Police Department reported 26 deadly force incidents from 2016-2018, including 19 police shootings and 7 other force incidents causing death or serious injury. <strong>10 people died in these encounters and 9 were seriously injured.</strong> While San Diego police used deadly force at a lower rate than the state average, we identified several issues that suggest<strong> </strong>changes to department policies could <strong>reduce deadly force further</strong>:&nbsp;</p>

          <ul>
            <li>In at least 8 of the 26 incidents (31%), the person was <strong>unarmed</strong>.</li>
            <li>8 of the 26 incidents (31%) involved people who had signs of <strong>mental health issues or drug/alcohol impairment</strong>.</li>
            <li>4 of the 19 police shootings (21%) involved San Diego police shooting at someone who was in a <strong>moving vehicle</strong>. </li>
            <li>In 16 of the 19 police shootings (84%), San Diego police officers shot at the person <strong>without first attempting to use non-lethal force</strong> to resolve the situation.</li>
          </ul>

          <p>This suggests a need for stronger deadly force policies and better enforcement of these standards to emphasize alternatives to deadly force whenever possible.</p>

          <p><strong>Deadly Force by San Diego Sheriff's Department</strong> </p>

          <p>San Diego Sheriff's Department reported 95 deadly force incidents from 2016-2018, including 22 police shootings and 73 other force incidents causing death or serious injury. 12 people were killed in these incidents and 83 were seriously injured. This is <strong>4.6x higher deadly force rate </strong>per arrest than San Diego Police Department during this period and a higher rate than 26 of California's 30 largest policing agencies.</p>

          <ul>
            <li>SDSD used force against 96 people during these 95 incidents. 68 of these people (71%) were <strong>unarmed</strong>. Only 8 of the 96 people (8%) were allegedly armed with a gun.</li>
            <li><strong>Tasers, strangleholds and weaponless physical force made up 67% of incidents</strong> causing death or serious injury.</li>
            <li>At least 14 people SDSD used deadly force on reportedly had <strong>disabilities</strong> - 13 people had signs of mental illness and one person had physical disabilities.</li>
            <li>Of 22 people shot by SDSD from 2016-2018, 14 (64%) were Latinx. <strong>Latinx people were 5.5x more likely to be shot</strong> by SDSD than white people per arrest. </li>
            <li>4 of the 22 police shootings (18%) involved San Diego sheriff's deputies shooting at someone who was in a <strong>moving vehicle</strong>.</li>
          </ul>

          <p>This suggests policy interventions should include a focus on addressing the excessive use of tasers, physical force and strangleholds while also addressing racial bias in decisions to use firearms, particularly against Latinx people.</p>

          <iframe title="San Diego Sheriff's Department uses Deadly Force at Higher Rates than Most Departments" aria-label="Column Chart" id="datawrapper-chart-0J9oL" src="//datawrapper.dwcdn.net/0J9oL/2/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="400"></iframe>
          <script type="text/javascript">! function(){"use strict"; window.addEventListener("message", function(a){if (void 0 !==a.data["datawrapper-height"]) for (var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-" + e) || document.querySelector("iframe[src*='" + e + "']"); t && (t.style.height=a.data["datawrapper-height"][e] + "px")}})}(); </script>
        </div>
      </div>

      <!-- DEATHS IN SAN DIEGO COUNTY JAIL -->
      <div class="section bg-blue">
        <div class="content chart-summary">
          <div class="left">
            <h1 class="title">DEATHS IN SAN DIEGO COUNTY JAIL</h1>
            <p>In addition to use of force incidents, San Diego Sheriff's Department reported 44 in-custody deaths attributed to causes other than use of force from 2016-2018. This includes at least 10 deaths reportedly due to suicide, 2 death due to homicide committed by another person in custody, and 4 reportedly due to "accidental" causes. Another 15 deaths are attributed to natural causes and 13 remained under investigation at the time of the report. After accounting for the adult jail population in each county, San Diego Sheriff's Department had a rate of 8.1 jail deaths per 1,000 jail population. As such, <strong>people were more likely to die in jail in San Diego County than 18 of the 25 largest counties in California</strong> - suggesting the need for urgent intervention to address treatment and conditions within jail facilities in San Diego.</p>
          </div>
          <div class="right">
            <iframe title="Jail Deaths" aria-label="Column Chart" id="datawrapper-chart-FlTtW" src="//datawrapper.dwcdn.net/FlTtW/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="500"></iframe>
            <script type="text/javascript">! function(){"use strict"; window.addEventListener("message", function(a){if (void 0 !==a.data["datawrapper-height"]) for (var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-" + e) || document.querySelector("iframe[src*='" + e + "']"); t && (t.style.height=a.data["datawrapper-height"][e] + "px")}})}(); </script>
          </div>
        </div>
      </div>

      <!-- POLICE ACCOUNTABILITY -->
      <div class="section">
        <div class="content chart-summary padded">
          <h1 class="title">POLICE ACCOUNTABILITY</h1>
          <p><strong>When civilians came forward to report police misconduct, it rarely led to accountability in San Diego. </strong>Of 226 civilian complaints of San Diego Police Department conduct in 2016 and 2017, only 11% were ruled in favor of civilians. Moreover, complaints alleging the most serious misconduct were never sustained. For example, of 21 civilian complaints of police discrimination, 75 use of force complaints and 2 complaints alleging criminal misconduct, <strong>none of these complaints were sustained.</strong> </p>
          <p><strong>An even lower proportion of civilian complaints were sustained that alleged San Diego Sheriff's Department misconduct</strong>. Of the 417 complaints reported to the San Diego Citizens Law Enforcement Review Board from 2016-2018, the board sustained only 18 complaints. This represents a <strong>4% complaint sustain rate</strong> overall, including a 3% sustain rate for criminal allegations, <strong>0.4% sustain rate</strong> for excessive force and <strong>0% sustain rate</strong> for allegations of police discrimination.</p>
        </div>
      </div>

        <!-- POLICY RECOMMENDATIONS FOR SAN DIEGO POLICE DEPARTMENT -->
        <div class="section bg-gray">
          <div class="content chart-summary padded no-pad-bottom">
            <h1 class="title">POLICY RECOMMENDATIONS FOR SAN DIEGO POLICE DEPARTMENT</h1>
            <p>A review of San Diego police and sheriff’s department policy manuals, procedures and police union contracts identified a number of areas where new policies could contribute towards addressing the outcomes described in this report.</p>
          </div>
          <div class="content chart-summary no-pad-top no-pad-bottom">
            <div class="left number-list">
              <p class="number-list n1"><strong>Expand Alternatives to Arrest for Low-Level Offenses</strong> </p>
              <p>Our review of San Diego police arrest data identified a number of low-level offenses that could be decriminalized entirely or deprioritized for enforcement. These offenses tended to involve drug possession, status offenses, quality of life offenses and municipal code violations that posed no threat to the public or property. Instead of a policing-based response to these activities, alternative responses should be developed or expanded that send substance abuse counselors, mental health professionals and other civilian responders to the scene instead of armed police officers. For example, the <a href="https://www.wsj.com/articles/when-mental-health-experts-not-police-are-the-first-responders-1543071600" target="_blank">CAHOOTS program</a> in Eugene, OR deploys mental health providers instead of police officers to calls involving a suspected mental health crisis - responding to nearly 1 in 5 calls for service citywide. For example, the following low-level offenses, other than drug possession, result in the largest number of arrests:</p>
            </div>
            <div class="right">
              <iframe title="SDPD Low Level Charges" aria-label="Table" id="datawrapper-chart-Vu9OV" src="//datawrapper.dwcdn.net/Vu9OV/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="488"></iframe>
              <script type="text/javascript">! function(){"use strict"; window.addEventListener("message", function(a){if (void 0 !==a.data["datawrapper-height"]) for (var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-" + e) || document.querySelector("iframe[src*='" + e + "']"); t && (t.style.height=a.data["datawrapper-height"][e] + "px")}})}(); </script>
            </div>
          </div>
          <div class="content chart-summary padded no-pad-top number-list">
            <p class="number-list n2"><strong>Require Officers to Use De-Escalation</strong> </p>
            <p>Unlike <a href="http://useofforceproject.org" target="_blank">43 of the nation’s 100 largest departments,</a> San Diego police department policies do not explicitly require officers to use de-escalation when possible prior to using force. Instead, the policy states that de-escalation or disengagement "may" be used in some circumstances and cautions officers that this tactic “may not be possible” in some situations. De-escalation requirements have been shown to significantly reduce the use of deadly force. San Diego police department should revise their use of force procedure to clarify that the use of de-escalation is a requirement for all officers whenever possible rather than the use of force.</p>
            <p class="number-list n3"><strong>Ban Shooting at Moving Vehicles</strong> </p>
            <p>San Diego police department’s use of force procedure allows officers to shoot at moving vehicles even if the vehicle is considered the only threat. This policy is inconsistent with the recommendations of the US Department of Justice and law enforcement groups such as the Police Executive Research Forum, which have recommended that police departments ban shooting at moving vehicles unless an occupant of the vehicle is using deadly force by means other than the vehicle (for example, shooting at someone from the vehicle). If such a policy was implemented in San Diego, it would likely have restricted officers from shooting at vehicles in 21% of San Diego police shootings from 2016-2018.</p>
            <p class="number-list n4"><strong>Ban the use of Carotid Restraints / Strangleholds:</strong> </p>
            <p>San Diego’s use of force procedure allows officers to use Carotid Restraint Holds (a form of stranglehold) against civilians in situations where deadly force would not be authorized. From 9/25/2016 - 12/31/2018, San Diego police used this dangerous tactic on 208 people. Only 6 of these cases (3%) reportedly involved a ”life-threatening” level of resistance from the subject, while 153 cases (74%) involved someone who was reportedly “passively” or “actively” resisting. In departments such as San Francisco and Berkeley, the use of Carotid Restraints and Chokeholds are banned. By banning the use of Carotid Restraints, San Diego police can reduce the risk of injury or death to civilians.</p>
            <p class="number-list n5"><strong>Address Anti-Black Bias in Policing Outcomes</strong> </p>
            <p>Our findings indicate that black people, in particular, had both high arrest rates and high exposure to police use of force as a population - experiencing 5x higher use of force rate per resident. As such, policymakers should consider measures designed to both reduce the overall number of black people arrested by San Diego police as well as measures to address anti-black bias in police use of force during the process of arrest. At the assignment level, the Gang Unit, Narcotics, and Task Force officers stopped black people at higher rates than officers working other assignments. Policymakers and police leadership should re-examine the utility of continuing to assign officers to these units given their racially disparate impact. Moreover, given the new RIPA data collection requirements, the San Diego Police Department should have the data needed to identify which officers, specifically, exhibit a pattern of anti-black bias in stops, searches, arrests and use of force. This information should be used to hold these officers accountable and protect black communities from discriminatory policing.</p>
            <p class="number-list n6"><strong>Ban Consent Searches and Stops for Equipment Violations</strong> </p>
            <p>When San Diego police officers had more discretion - during “consensual” encounters or stops for routine traffic violations - they tended to use this discretion to search black and Latinx individuals at higher rates despite being less likely to find contraband during these searches. Racial disparities were particularly high for traffic stops for equipment violations, suggesting San Diego police may be conducting these stops as a pretext to investigate black and Latinx drivers. As a strategy to protect residents - especially black and brown residents - from intrusive and unnecessary police contact, SDPD officers should be required to have probable cause to initiate a search and stops for equipment violations should be banned.</p>
            <p class="number-list n7"><strong>Remove Language in the San Diego Police Union Contract to Strengthen Investigations and Accountability</strong> </p>
            <p>A review of San Diego’s police union contract identified contract language that imposes unfair and unnecessary limits on the department’s ability to investigate and adjudicate allegations of officer misconduct. For example, Section 41.D.1 imposes a 3 business day delay in interrogations of officers - a period that can only be reduced on a case-by-case basis by the Assistant Chief. Such language should be removed from the contract and replaced with a practice of interrogating officers as soon as possible following a misconduct incident/receipt of a misconduct allegation.</p>
            <p class="number-list n8"><strong>Strengthen Community Oversight to Ensure Accountability</strong> </p>
            <p>Low sustain rates for SDPD complaints, especially complaints alleging use of force violations, suggest changes to existing investigatory and oversight structures are warranted. For example, the current San Diego’s Community Review Board on Police Practices has the power to review internal affairs investigations but cannot independently investigate complaints of misconduct or subpoena witnesses. This board should be replaced with an independent community structure that has the power to conduct independent investigations, subpoena witnesses and documents, and impose discipline as a result of their findings. For example, San Francisco’s Department of Police Accountability has many of these powers and, in combination with the city’s police commission, gives civilians the power to impose discipline on officers in cases where the police department fails to do so.</p>
            <p class="number-list n9"><strong>Address Inconsistencies in the Use of Force Data Reported by San Diego Police Department</strong> </p>
            <p>There were notable inconsistencies between the use of force and arrests databases provided by San Diego Police Department and the data that SDPD reported to the RIPA program. During the period where these two databases overlap, from 7/1/18 - 12/31/18, there were 1,554 uses of force reported to the RIPA program and 2,476 uses of force reported in San Diego Police Department’s use of force database. Based on the number of cases in the department’s use of force database, use of force involving police pointing a firearm at people, using batons, chemical spray, or other forms of physical or vehicle contact were under-reported to the RIPA program during this period. Additionally, while 13 canine incidents were reported to RIPA, they weren’t included within the department’s use of force database, indicating the department’s internal databases should be strengthened to incorporate data that is inclusive of all use of force types.</p>
            <p class="number-list n10"><strong>Improve Police Data Transparency in California:</strong> </p>
            <p>We conducted our analysis based on the data reported by California’s RIPA, URSUS and CCOPA programs combined with data we were able to obtain from agencies via public records requests. Despite this, there remain aspects of policing that we could not obtain data on due to a combination of unwillingness by CA Department of Justice to provide data and existing limitations on police data imposed by state law. For example, we could not obtain detailed arrests data from the Monthly Arrests and Citation Register that was more recent than 2016 because the state’s OpenJustice database does not provide this information at the agency-level. Instead, the OpenJustice database aggregates data at the county-level, making it difficult to determine how many arrests a single agency within a county made or how many of those arrests were felony, misdemeanor or status offenses. While we requested this data repeatedly from the CA Department of Justice, they did not provide it. </p>
            <p>Additionally, the state’s RIPA regulations should be revised to permit more comprehensive analyses of policing practices. For example, RIPA’s regulations <a href="https://oag.ca.gov/sites/all/files/agweb/pdfs/ripa/stop-data-reg-final-text-110717.pdf?" target="_blank">don’t require agencies to specify</a> whether a stop is a vehicle or pedestrian stop. Instead, departments indicate a “primary reason for stop” that can include either “traffic violation” or categories such as “reasonable suspicion.” As such, both vehicle and pedestrian stops based on “reasonable suspicion” are grouped together, making it difficult to understand how officers may be approaching different types of stops. Additionally, RIPA’s regulations currently prevent the public from accessing data showing the ID numbers of the officers making each stop. <strong>If we had such information, we could’ve evaluated which officers make the most stops - and which officers were engaging in a pattern of biased policing practices.</strong> Despite the passage of SB 1421, which made it possible to obtain records of police misconduct in limited set of cases (for example, cases involving deadly force, sustained complaints of sexual assault and official dishonesty), further legislation is needed to allow the public to access the full range of data needed to effectively track, predict and prevent police misconduct.</p>
          </div>
        </div>

        <!-- RECOMMENDATIONS FOR SAN DIEGO SHERIFF'S DEPARTMENT -->
        <div class="section">
          <div class="content chart-summary padded no-pad-bottom">
            <h1 class="title">
            RECOMMENDATIONS FOR SAN DIEGO SHERIFF'S DEPARTMENT
          </h1>
            <p>We reviewed San Diego Sheriff's Department's policy manual, <a href="https://drive.google.com/drive/u/0/folders/1Pv86g4FRLRYkk-hIFCzWLF0-4IHQroNX"><span >use of force guidelines</span></a> and police union contract to determine where new policies could contribute towards addressing the outcomes described in this report.&nbsp;</p>
          </div>
          <div class="content chart-summary padded no-pad-top number-list">
            <p class="number-list n1"><strong>Reduce SDSD Arrests by One-Third by scaling up Alternatives to Arrest for Drug Possession, Quality of Life Offenses and Other Low-Level Offenses:</strong> </p>
            <p>34% of all San Diego Sheriff's Department arrests were reportedly for drug possession, status offenses and quality of life offenses that pose no threat to public safety. As such, San Diego Sheriff's Department would see a substantial reduction in arrest rates by expanding the use of alternative, community-based responses to these activities. </p>
            <p class="number-list n2"><strong>Ban Consent Searches and Limit Pretext Stops</strong> </p>
            <p>We found evidence San Diego Sheriff’s Department engaged in biased police search practices - searching black and brown people at higher rates despite being less likely to find contraband during these searches. SDSD should take action to substantially reduce the number of searches conducted - especially of black and brown residents. Banning or strongly restricting searches originating from traffic-violation stops as well as consent searches would reduce the overall number of SDSD searches by as much as 31%. One way to accomplish this would be to require deputies to have probable cause to initiate a search.</p>
            <p class="number-list n3"><strong>Strengthen the Department's De-Escalation Policy&nbsp;</strong> </p>
            <p>The San Diego Sheriff's Department Use of Force guidelines require deputies to "attempt to de-escalate confrontations by using verbalization techniques" prior to using force. However, while this limited de-escalation requirement is important, it does not contain language that is nearly as comprehensive or robust as the language contained within de-escalation policies adopted by police departments in cities like San Francisco, Seattle, New Orleans or Las Vegas. For example, Seattle Police Department's De-escalation policy includes <a href="https://www.seattle.gov/police-manual/title-8---use-of-force/8100---de-escalation" target="_blank">four approaches</a> to de-escalating situations that officers are required to consider when possible: using communication, slowing down or stabilizing the situation, increasing distance, and shielding/utilizing cover and concealment. Of these, San Diego deputies are only required to consider using communication (i.e. "verbalization techniques").</p>
            <p class="number-list n4"><strong>Restrict the Use of Tasers</strong> </p>
            <p><strong>San Diego Sheriff's Department killed 3 people with tasers from 2016-2018 - representing 17% of all taser deaths statewide during this period. San Diego Sheriff's Department used tasers in 582 incidents during this time, 2x more often per arrest than San Diego Police Department. As such, the department should impose new restrictions on the use of tasers and emphasize using de-escalation tactics and lesser forms of physical force in these situations instead. If these reforms fail to curb deaths and serious injuries from taser use, SDSD should consider banning the use of tasers entirely.</p>
          <p class="number-list n5"><strong>Ban the use of Carotid Restraints (i.e. Strangleholds):</strong> </p>
            <p>San Diego Sheriff Department reported seriously injuring 28 people through the use of carotid restraints - a form of stranglehold - from 2016-2018. This represents 21% of all people seriously injured by this tactic statewide during this period - more than any other police agency. SDSD's use of force guidelines allow carotid restraints to be used even when no threat of imminent death or serious injury is present. Of the 205 people SDSD used a stranglehold on from 2016-2018, only 18 (9%) displayed "aggravated active aggression" which is the level of resistance defined by SDSD as involving a perceived threat of death or serious injury.</p>
            <p>Banning the use of carotid restraints by SDSD or limiting this tactic to be authorized only as deadly force can help prevent further injuries.</p>
            <p class="number-list n6"><strong>Ban Shooting at Moving Vehicles</strong> </p>
            <p>4 of the 22 people shot by San Diego Sheriff's Department were in a moving vehicle when police fired at them. The use of force guidelines of the San Diego Sheriff's Department provide confusing and contradictory instructions to officers regarding shooting at moving vehicles. While their policy bans shooting at vehicles "for the purpose of disabling that vehicle" it includes an exception that authorizes shooting at or from vehicles " when immediately necessary to protect persons from death or serious bodily injury." This loophole authorizes deputies to use deadly force against someone in a moving vehicle under similar circumstances (an imminent threat of death or serious injury) as deadly force would be authorized under their policy for anyone, whether or not they were in a vehicle. This policy should be updated to reflect best-practices in the field by banning police departments from shooting at moving vehicles unless an occupant of the vehicle is using deadly force by means other than the vehicle. At least 3 of the 4 vehicle-related shootings from 2016-2018 - representing 14% of all SDSD shootings during this period - would have been prohibited by this policy because the subjects in these cases did not use force other than a vehicle against deputies or members of the public.</p>
            <p class="number-list n7"><strong>Improve Jail Conditions and Strengthen Oversight</strong> </p>
            <p>Our analysis found San Diego County jails have higher rates of in-custody deaths than most jails in the state - including a relatively large number of deaths due to suicide and at least one death due to homicide by another inmate. This is consistent with the <a href="https://www.disabilityrightsca.org/public-reports/san-diego-jail-suicides-report" target="_blank">analyses</a> from Disability Rights California as well as <a href="https://www.sandiegouniontribune.com/news/watchdog/story/2019-10-01/another-inmate-of-san-diego-county-dies-behind-bars" target="_blank">recent reporting</a> that finds not only does San Diego County jail have a high rate of in-custody deaths, especially suicides, but also that 82% of the in-custody deaths over the past decade were of people who were awaiting trial. This suggests the need for independent oversight and policy and practice interventions specifically focused on reducing jail incarceration and improving conditions for those incarcerated there. </p>
            <p class="number-list n8"><strong>Empower the San Diego County Citizens’ Law Enforcement Review Board to Enforce Accountability</strong> </p>
            <p>The San Diego County Citizens’ Law Enforcement Review Board’s mission is to increase public confidence in government and the accountability of law enforcement. However, the board does not currently have the power to impose discipline or determine the policies of the San Diego Sheriff’s Department. Without these powers, the Sheriff’s Department routinely fails to follow the board’s recommendations. For example, <a href="https://www.sandiegocounty.gov/content/dam/sdc/clerb/docs/Annual%20Reports/CLERB-2018AnnualReport-Final.pdf" target="_blank">the majority</a> of the board’s policy recommendations in 2018 were not implemented by SDSD. The board’s powers should be strengthened to be able to implement policy recommendations and to hold deputies accountable for misconduct.</p>
            <p class="number-list n9"><strong>Allow Residents to Submit Anonymous Complaints of Deputy Misconduct</strong> </p>
            <p>People who’ve experienced violence or other forms of misconduct at the hands of San Diego sheriff’s deputies have three options for filing formal misconduct complaints:</p>
            <p>1. Submit a complaint in-person at the San Diego Sheriff’s Office</p>
            <p>2. File a complaint by mail to the SDSD Internal Affairs Unit or;</p>
            <p>3. Submit a complaint in-person at the San Diego Sheriff’s Office</p>
            <p>In order for complaints to be investigated, <a href="https://www.sandiegocounty.gov/content/sdc/clerb/faqs/faqs_page.html" target="_blank">they must be submitted in</a> writing and signed under penalty of perjury. Complainants must <a href="https://www.sandiegocounty.gov/content/dam/sdc/clerb/docs/WebComplaintForm/Web%20Complaint.pdf" target="_blank">complete a form</a> that requires they enter their full name and sign a sworn statement under penalty. The form does not allow for anonymous complaints - creating potential barriers to communities that are hesitant to identify themselves in the process of reporting police misconduct due to potential retaliation. In 2018, for example, the San Diego County Citizens Law Enforcement Review Board <a href="https://www.sandiegocounty.gov/content/dam/sdc/clerb/docs/Annual%20Reports/CLERB-2018AnnualReport-Final.pdf" target="_blank">ruled</a> 55 complaints “procedurally closed” and dismissed them because they were not able to obtain a signed complaint - representing 32% of all complaints closed that year. Anonymous complaints should be accepted by San Diego County Citizens Law Enforcement Review Board just as they are in many other jurisdictions - for example, Oakland’s <a href="https://apps.oaklandca.gov/CPRA/CCPComplaintDetail.aspx" target="_blank">police complaint form</a> allows complainants to select “decline to state” as an alternative to identifying themselves.</p>
            <p class="number-list n10"><strong>Strengthen Enforcement of the Racial Profiling Ban and Use Data to Inform Interventions to Hold Deputies Accountable</strong> </p>
            <p>Section 2.55 of the SDSD <a href="https://www.sdsheriff.net/documents/pp/pp-20160321.pdf" target="_blank">Policy Manual</a> states that:</p>
            <blockquote>
              <p><em>“Members of the San Diego County Sheriff's Department are prohibited from inappropriately or unlawfully considering race, ethnicity, religion, national origin, sexual orientation, gender, or lifestyle in deciding whether or not enforcement intervention will occur.”</em> </p>
            </blockquote>
            <p> Despite this policy, we find substantial evidence of racial bias and bias against people with disabilities in SDSD stops, searches and use of force. Since SDSD redacted information from the data they provided us that could have been used to identify individual officers, we cannot determine which officers are responsible for producing these inequities. However, SDSD already has the data needed to begin enforcing this policy effectively. SDSD or an independent oversight agency should use these data to identify, intervene and hold accountable those officers who's records indicate a pattern of biased policing. SDSD should also strengthen its use of force data collection efforts to assign unique identifiers to individuals who force was used against and to begin systematically tracking and publishing individualized use of force data that includes more expansive information - such as the weapon type (if any) subjects had when force was used against them. </p>
            <p class="number-list n11"><strong>Address Underreporting Issues with the Arrests Data Reported by San Diego Sheriff’s Department:</strong> </p>
            <p>We found substantial differences between the number of arrests SDSD reported to RIPA and arrests statistics reported in SDSD’s <a href="https://www.sdsheriff.net/documents/2018%20Use%20of%20Force.pdf" target="_blank">2018 Annual Use of Force Report.</a> According to the annual report, deputies made 18,613 arrests during the full year of 2018. By contrast, SDSD’s RIPA database includes only 4,444 arrests made during the second half of 2018 (7/1/2018 - 12/31/2018) and 8,206 arrests during the full year period covering 7/1/2018 - 6/30/2019. This suggests SDPD failed to report to RIPA roughly half of all arrests made during the second half of 2018. SDSD should improve the quality of its reporting to ensure compliance with the Racial and Identity Profiling Act. </p>
            <p class="number-list n12"><strong>Repeal the One-Year Statute of Limitations on Police Misconduct Investigations</strong> </p>
            <p>Section 3304(d)(1) of the <a href="https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=GOV&sectionNum=3304." target="_blank">California Peace Officer Bill of Rights</a> prevents investigations from resulting in discipline against officers if the police department or other investigating agency takes longer than one year to complete the investigation. According to the San Diego County Citizens Law Enforcement Review Board, <a href="https://www.sandiegocounty.gov/content/dam/sdc/clerb/docs/Annual%20Reports/2017%20Annual%20Report.pdf" target="_blank">15% of all cases in 2017</a> were dismissed because they exceeded this statute of limitations - including 22 cases investigating the deaths of civilians. California is <a href="https://www.checkthepolice.org/#review" target="_blank">one of only 4 states</a> that has a law establishing a statute of limitations of one-year or less on police misconduct investigations. This section should be repealed to enable agencies to effectively investigate and adjudicate complaints of misconduct - especially for cases resulting in death or serious injury.</p>
          </div>
        </div>
        <div class="section bg-gray footer">
          <div class="content">
            <div class="left">
              <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fpolicescorecard.org&t=Campaign%20Zero%20evaluated%20the%20policing%20practices%20of%20San%20Diego%20Police%20Department%20and%20San%20Diego%20Sheriff%E2%80%99s%20Department%20from%202016-2018." class="social"> <i class="fa fa-facebook-f"></i> </a>
              <a href="https://twitter.com/intent/tweet?source=https%3A%2F%2Fpolicescorecard.org&text=Campaign%20Zero%20evaluated%20the%20policing%20practices%20of%20San%20Diego%20Police%20Department%20and%20San%20Diego%20Sheriff%E2%80%99s%20Department%20from%202016-2018." class="social"> <i class="fa fa-twitter"></i> </a>
              <a href="mailto:?subject=San%20Diego%20Police%20Scorecard&body=Campaign%20Zero%20evaluated%20the%20policing%20practices%20of%20San%20Diego%20Police%20Department%20and%20San%20Diego%20Sheriff%E2%80%99s%20Department%20from%202016-2018." class="social"> <i class="fa fa-envelope"></i> </a>
            </div>
            <div class="right"> <a href="https://staywoke.typeform.com/to/jBvCkB" class="get-involved" target="_blank">Get Involved</a> <a href="http://paypal.me/campaignzero" class="donate" target="_blank">Donate</a> </div>
          </div>
          <div class="content bt"> This is a project of <a href="https://www.joincampaignzero.org/" class="title" target="_blank">Campaign Zero</a> </div>
        </div>
      </div>

      <script src="assets/js/site.js<?= trim($ac) ?>"></script>

      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141045547-1"></script>
      <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-141045547-1');
      </script>
  </body>
</html>