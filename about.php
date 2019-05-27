<?php
require('common.php');

$ac = '?ac=' . getHash();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>About the Data</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="description" content="About the Data">
    <meta name="author" content="StayWoke">

    <!-- Twitter META Info -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@samswey">
    <meta property="twitter:title" content="About the Data">
    <meta property="twitter:description" content="Get the facts about police violence and accountability in California. Evaluate each police department and hold them accountable here.">
    <meta property="twitter:creator" content="@mrmidi">
    <meta property="twitter:image:src" content="https://policescorecard.org/assets/img/card.jpg">
    <meta property="twitter:domain" content="https://policescorecard.org">

    <!-- Open Graph protocol -->
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="About the Data">
    <meta property="og:url" content="https://policescorecard.org">
    <meta property="og:image" content="https://policescorecard.org/assets/img/card.jpg">
    <meta property="og:site_name" content="CA Police Scorecard">
    <meta property="og:description" content="Get the facts about police violence and accountability in California. Evaluate each police department and hold them accountable here.">

    <link href="favicon.ico" rel="shortcut icon">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css?ver=1.0.0">
    <style>
    .c15.c24 {
      color: #464648;
      padding: 0;
      font-size: 28px;
      line-height: 32px;
      font-weight: 300;
      text-transform: uppercase;
      margin: 14px 0;
      font-family: 'Barlow Condensed', sans-serif;
    }
    .c3 {
      margin-bottom: 10px;
      display: block;
      color: #464648;
      font-size: 18px;
      font-weight: 400;
      text-transform: uppercase;
      font-family: 'Barlow Condensed', sans-serif;
    }
    .c7 {
      color: #82add7;
      padding: 0;
      font-size: 20px;
      line-height: 24px;
      font-weight: 400;
      text-transform: uppercase;
      margin: 14px 0 0 0;
      font-family: 'Barlow Condensed', sans-serif;
      display: block;
    }
    /* Foot Notes */
    sup a {
      font-size: 10px;
      vertical-align: super;
      font-weight: bold;
    }
    .c8 {
      font-size: 12px;
      line-height: 14px;
      margin-bottom: 10px;
    }

    /* Formula's */
    .c16 {
      margin: 30px 0;
      display: block;
      width: 100%;
      white-space: nowrap;
    }
    .c16 .large {
      color: #82add7;
      padding: 0 6px;
      line-height: 24px;
      font-weight: 500;
      text-transform: uppercase;
      font-family: 'Barlow Condensed', sans-serif;
      display: inline-block;
      font-size: 40px;
    }
    .c16 .wrap {
      max-width: 18%;
      white-space: normal;
      display: inline-block;
      vertical-align: top;
      text-align: center;
    }
    .c16.two .wrap {
      max-width: 40%;
    }

    p {
      margin-bottom: 14px;
    }

    @media only screen and (max-width: 600px) {
      .c16 .large {
        padding: 0 2px;
        font-size: 20px;
      }
      .c16 .wrap {
        max-width: 15%;
        font-size: 10px;
        line-height: 12px;
      }

      .c16.two .wrap {
        max-width: 30%;
      }
    }
    @media only screen and (min-width: 601px) and (max-width: 800px) {
      .c16 .large {
        padding: 0 4px;
        font-size: 28px;
        vertical-align: middle;
      }
      .c16 .wrap {
        max-width: 18%;
        font-size: 12px;
        line-height: 14px;
        vertical-align: middle;
      }

      .c16.two .wrap {
        max-width: 40%;
        vertical-align: middle;
      }
    }
    </style>
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
              <li><a href="about" class="active">About the Data</a></li>
              <li><a href="findings">Key Findings</a></li>
              <li><a href="https://www.joincampaignzero.org/about/" target="_blank">Planning Team</a></li>
              <li><a href="https://www.joincampaignzero.org/" target="_blank">More about Campaign Zero</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="section about">
        <div class="content">
          <h1 class="title">
            About the Data
          </h1>
          <p class="c2"><span class="c15 c24">Police Scorecard Project Methodology</span></p>
          <p class="c2 c5"><span class="c7"></span></p>
          <p class="c2"><span class="c7">Overview</span></p>
          <p class="c2"><span>The </span><span class="c0"><a class="c11" href="http://policescorecard.org">California Police Scorecard</a></span><span>&nbsp;utilizes data on a range of
              policing-related issues to evaluate how each police department interacts with, and the extent to which officers are held accountable to, the communities they serve. The indicators included in this scorecard were selected based on a review of
              the </span><span class="c0"><a class="c11" href="http://joincampaignzero.org/research">research literature</a></span><span class="c1">, input from activists and experts in the
              field, and a review of existing publicly available datasets on policing in California. The scorecard is designed to help communities, researchers, police leaders and policy-makers take informed action to reduce police use of force and improve
              accountability and public safety in their jurisdictions. </span></p>
          <p class="c2 c5"><span class="c1"></span></p>
          <p class="c2 c5"><span class="c7"></span></p>
          <p class="c2"><span class="c7">How We Collected the Data</span></p>
          <p class="c2"><span>The California Police Scorecard integrates data on police deadly force, civilian complaints and arrests that were obtained from official databases including the California Department of Justice&rsquo;s </span><span class="c0"><a
                class="c11" href="https://openjustice.doj.ca.gov/data">OpenJustice</a></span><span>&nbsp;database, UCR and the California Monthly Arrests and Citation Register. Data on police
              use of force, use of force complaints, and police policy manuals were obtained directly from police agencies via public records requests. The full list and descriptions of each data source used in this project can be found in Appendix A below.
              We&rsquo;ve also uploaded the source data used for the scorecard, including additional columns of data that could be the subject of future research, </span><span class="c0"><a class="c11" href="https://drive.google.com/drive/folders/1XAT1uFPXj5AsvNTzFeNeeTXGLP09HEIh">here</a></span><span>.</span><span
              class="c1">&nbsp;</span></p>
          <p class="c2 c5"><span class="c7"></span></p>
          <p class="c2"><span>This project will be updated over time to include additional data on policing as these data are made available by law enforcement agencies, including data on police stops and searches, police personnel, civil asset forfeiture,
              issues occurring in police custody, response times, police militarization, police discipline and other issues. These data will be released and integrated into the scoring system in the coming months. If you have information or ideas to improve
              our database, email </span><span class="c0"><a class="c11" href="mailto:sam@thisisthemovement.org">sam@thisisthemovement.org</a></span><span class="c1">.</span></p>
          <p class="c2 c5"><span class="c1"></span></p>
          <p class="c2"><span class="c1">&nbsp;</span></p>
          <p class="c2"><span class="c7">How We Calculated Agency Scores and Grades:</span></p>
          <p class="c2"><span class="c1">The scores or &ldquo;grades&rdquo; attributed to police agencies in our analysis should be interpreted as relative scores, showing how each agency compares to other agencies within the state across three areas of
              policing: police violence, police accountability, and an evaluation of each agency&rsquo;s approach to policing (for example, the extent to which an agency focuses on arresting people for low-level offenses or solving serious crimes).</span></p>
          <p class="c2 c5"><span class="c1"></span></p>
          <p class="c2"><span class="c7">Here are the factors that were used to calculate each agency&rsquo;s score:</span></p>
          <p class="c2 c5"><span class="c1"></span></p>
          <p class="c2"><span class="c7">Police Violence Score:</span></p>
          <p class="c2"><span>The police violence score takes into account how often police used higher levels of force against people including any time police used a firearm, taser, baton, OC spray, impact projectile or stranglehold on a civilian.</span><sup><a
                href="#ftnt1" id="ftnt_ref1">[1]</a></sup><span>&nbsp;Since the vast majority of use of force incidents occurred during an arrest, consistent with </span><span class="c0"><a class="c11" href="http://policingequity.org/wp-content/uploads/2016/07/CPE_SoJ_Race-Arrests-UoF_2016-07-08-1130.pdf&amp;sa=D&amp;ust=1553928833126000">previous
                research</a></span><span>&nbsp;we benchmarked use of force incidents against the total number of arrests made</span><sup><a href="#ftnt2" id="ftnt_ref2">[2]</a></sup><span>&nbsp;and then factored in the severity of force used and whether the
              people force was used against were armed into each police department&rsquo;s </span><span class="c9">police violence score</span><span class="c1">. </span></p>
          <p class="c2 c5"><span class="c1"></span></p>
          <p class="c2"><span>Racial disparities in arrests and deadly force were also factored into each department&rsquo;s </span><span class="c9">police violence score</span><span>. Since there are </span><span class="c0"><a class="c11" href="https://store.samhsa.gov/system/files/nsduhresults2013.pdf&amp;sa=D&amp;ust=1553928833127000">similar
                rates</a></span><span>&nbsp;of illicit drug use (i.e. &ldquo;offending rates&rdquo;) among most racial and ethnic groups, disparities in which groups police arrest for drug possession suggest a biased approach to law enforcement. As such, we
              used data on racial disparities in drug possession arrests from the California Monthly Arrests and Citations Register as a proxy for estimating racial bias in arrests. Drug possession arrest rates between Black and White populations and
              between Latinx and White populations were converted to Standard Scores (z-scores), averaged together into one combined score, and then converted to percentile. To calculate a racial bias score for police use of deadly force, we calculated the
              baseline probability that police use deadly force against a White person during an arrest.</span><sup><a href="#ftnt3" id="ftnt_ref3">[3]</a></sup><span>&nbsp;We then multiply the arrest-based probability by the total number of Black and
              Latinx people arrested by each police department</span><sup><a href="#ftnt4" id="ftnt_ref4">[4]</a></sup><span>, and calculate the log number of actual deadly force incidents for each community above the baseline expectation if the victims had
              been White. For each group, we used the most severe of the two disparities (either Black-White or Latinx-White, whichever had the largest disparity)</span><sup><a href="#ftnt5" id="ftnt_ref5">[5]</a></sup><span>&nbsp;and converted that to a
              percentile. Then, the percentiles of racial bias in drug arrests and of racial bias in deadly force per arrest were averaged together to produce a combined percentile of racial bias in arrests and deadly force, which was included as one of the
              four factors determining each department&rsquo;s</span><span class="c9">&nbsp;police violence score</span><span>. Each police department&rsquo;s racial disparities and resulting racial bias scores are listed in Appendix D below. In summary,
              the following formula was used to calculate each department&rsquo;s </span><span class="c9">police violence score</span><span class="c1">:</span></p>
          <p class="c2 c5"><span class="c1"></span></p>
          <p class="c16 four">
            <span class="c13 c14">
              <span class="large">(</span>
              <span class="wrap">Percentile Less Lethal Force Used per Arrest</span>
              <span class="large">+</span>
              <span class="wrap">Percentile Deadly Force Used per Arrest</span>
              <span class="large">+</span>
              <span class="wrap">Percentile Unarmed Civilians Killed or Seriously Injured</span>
              <span class="large">+</span>
              <span class="wrap">Percentile Racial Bias in Arrests and Deadly Force</span>
              <span class="large">) / 4</span>
            </span>
          </p>
          <p class="c2 c5"><span class="c13 c6"></span></p>
          <p class="c2"><span class="c7">Police Accountability Score</span></p>
          <p class="c2"><span class="c1">The police accountability score evaluates the extent to which investigations into civilian complaints of police misconduct result in a sustained finding of misconduct against the officers involved, which is usually
              the first step to imposing disciplinary consequences. The score accounts for both how police departments compare with one another in terms of their civilian complaint sustain rate, the overall proportion of complaints sustained, and the
              severity of the misconduct allegations that were sustained against officers (for example, complaints alleging police committed a criminal offense were weighted more heavily than vs non-criminal allegations). The following formula was used to
              calculate this score:</span></p>
          <p class="c2 c5"><span class="c1"></span></p>
          <p class="c16 two">
            <span class="c14">
              <span class="large">(</span>
              <span class="wrap">Percentile Civilian Complaints Sustained</span>
              <span class="large">+</span>
              <span class="wrap">Percent Criminal Complaints Sustained</span>
              <span class="large">) / 2</span>
            </span>
          </p>
          <p class="c2 c5"><span class="c1"></span></p>
          <p class="c2"><span class="c7">Approach to Police Score</span></p>
          <p class="c2"><span>The approach to policing score evaluates the extent to which police departments focus on arresting people for low-level offenses or focusing on solving serious crimes. The score accounts for the proportion of the most serious
              crimes - homicide - that an agency solves as well as how each agency compares in terms of its approach to the lowest level offenses, measured by misdemeanor arrest rates per population. Misdemeanor arrest rates per population have been cited
              in </span><span class="c0"><a class="c11" href="https://chicagounbound.uchicago.edu/cgi/viewcontent.cgi?article%3D2473%26context%3Djournal_articles&amp;sa=D&amp;ust=1553928833129000">previous research</a></span><span>&nbsp;as
              an effective measure of whether a department has adopted a </span><span>&ldquo; broken windows&rdquo; or &ldquo;zero tolerance&rdquo; policing approach</span><span>; an approach that has not been proven to improve public safety but that
              instead often exposes communities, especially marginalized communities, to increased policing, arrest and incarceration (for additional reading, see </span><span class="c0"><a class="c11" href="https://harvardpress.typepad.com/hup_publicity/2013/03/chicago-broken-windows-bernard-harcourt.html&amp;sa=D&amp;ust=1553928833129000">here</a></span><span>,
            </span><span class="c0"><a class="c11" href="https://www.researchgate.net/publication/263234452_Studying_New_York_City&#39;s_Crime_Decline_Methodological_Issues&amp;sa=D&amp;ust=1553928833130000">here</a></span><span>&nbsp;and
            </span><span class="c0"><a class="c11" href="https://www.nature.com/articles/s41562-017-0211-5&amp;sa=D&amp;ust=1553928833130000">here</a></span><span class="c1">). The following formula was used to calculate this
              score:</span></p>
          <p class="c2 c5"><span class="c1"></span></p>
          <p class="c16 two">
            <span class="c14">
              <span class="large">(</span>
              <span class="wrap">Percentile Misdemeanor Arrests per Population</span>
              <span class="large">+</span>
              <span class="wrap">Percent Homicides Cleared</span>
              <span class="large">) / 2</span>
            </span>
          </p>
          <p class="c2 c5"><span class="c1"></span></p>
          <p class="c2"><span class="c7">Review of Police Department Policies and Police Union Contracts</span></p>
          <p class="c2"><span class="c1">In addition to collecting data on police outcomes (use of force, accountability, arrests), this project also includes information on public policies that have been shown in the research literature to impact these
              outcomes. While the quality of a police department&rsquo;s policies were not one of the factors used to calculate their score, this information was collected to provide greater insight into the ways in which policies and systems either
              encourage or discourage police violence and accountability. </span></p>
          <p class="c2 c5"><span class="c1"></span></p>
          <p class="c2"><span>Specifically, the full policy manual and police union contract of each police agency was obtained and reviewed to identify the extent to which they contained language that either restricted the use of force or that imposed
              barriers to investigating and holding police accountable for misconduct. </span><span class="c0"><a class="c11" href="http://useofforceproject.org/s/Use-of-Force-Study.pdf&amp;sa=D&amp;ust=1553928833131000">Previous
                research</a></span><span>&nbsp;has shown a significant link between the restrictiveness of a police department&rsquo;s use of force policy and rates of police violence per arrest. Moreover, </span><span class="c0"><a class="c11" href="https://papers.ssrn.com/sol3/papers.cfm?abstract_id%3D3246419&amp;sa=D&amp;ust=1553928833132000">research</a></span><span>&nbsp;shows
              the categories of policy provisions we identified within police union contracts to be associated with higher levels of police abuse and police killings of unarmed civilians. The full policy manuals for each of the agencies can be found </span><span
              class="c0"><a class="c11" href="https://drive.google.com/open?id%3D1LiK5Pg_bVzweC9IXTstqkCZarIsiKkw0&amp;sa=D&amp;ust=1553928833132000">here</a></span><span>. For more information on the methodology used to review
              these policies, visit Campaign Zero&rsquo;s </span><span class="c0"><a class="c11" href="http://useofforceproject.org&amp;sa=D&amp;ust=1553928833132000">Police Use of Force project</a></span><span>&nbsp;and </span><span
              class="c0"><a class="c11" href="http://checkthepolice.org&amp;sa=D&amp;ust=1553928833132000">Police Union Contract</a></span><span class="c1">&nbsp;project. We also reviewed the statewide Law Enforcement Officer
              Bill of Rights law and included the barriers to accountability within this law that impact every agency within the state.</span></p>
          <hr style="page-break-before:always;display:none;">
          <p class="c2 c5"><span class="c1"></span></p>
          <p class="c2"><span class="c7">Appendix A:</span></p>
          <p class="c2"><span class="c7">Data Sources:</span></p>
          <p class="c2 c5"><span class="c7"></span></p>
          <p class="c2"><span class="c7">Deadly Force Incidents</span></p>
          <p class="c2"><span class="c3">DEFINITION: ALL FIREARMS DISCHARGES AND ALL USE OF FORCE INCIDENTS RESULTING IN THE DEATH OR SERIOUS INJURY OF A CIVILIAN IN 2016 AND 2017</span></p>
          <p class="c2 c5"><span class="c3"></span></p>
          <p class="c2"><span class="c0"><a class="c11" href="https://codes.findlaw.com/ca/government-code/gov-sect-12525-2.html&amp;sa=D&amp;ust=1553928833133000">Government Code section 12525.2</a></span><span class="c1">&nbsp;mandates
              law enforcement agencies in California to report annually on all:</span></p>
          <ol class="c12 lst-kix_qdy0gukcwt05-0 start" start="1">
            <li class="c2 c18"><span class="c1">incidents involving the shooting of a civilian by a police officer.</span></li>
            <li class="c2 c18"><span class="c1">incidents involving the shooting of a police officer by a civilian.</span></li>
            <li class="c2 c18"><span>incident in which the use of force by a police officer against a civilian results in serious bodily injury</span><sup><a href="#ftnt6" id="ftnt_ref6">[6]</a></sup><span class="c1">&nbsp;or death.</span></li>
            <li class="c2 c18"><span class="c1">incidents in which use of force by a civilian against a police officer results in serious bodily injury or death.</span></li>
          </ol>
          <p class="c2"><span class="c1">&nbsp;</span></p>
          <p class="c2"><span>The two years of data currently available under this reporting program, 2016 and 2017, were combined for the purposes of this analysis. In order to evaluate levels of police use of deadly force and ensure consistency across
              departments in terms of how deadly force was defined</span><span>, we excluded the incidents in the database that either were not firearms discharges or that were not other uses of force that did not cause the death or serious injury of a
              civilian (for example, incidents involving the use of deadly force against a police officer but not a civilian and incidents where police </span><span class="c1">caused an injury that was not categorized as serious). 38 of the 100 largest CA city police departments reported at least one incident that either solely involved the use of deadly force by a civilian against an officer or that involved a use of force that did not result in death or serious injury. In total, of the 1,489
              deadly force incidents in the statewide database, 213 (14%) were excluded for these reasons (see Appendix B for the list of incidents excluded). </span></p>
          <p class="c2 c5"><span class="c1"></span></p>
          <p class="c2"><span>Importantly, deadly force as defined in this scorecard and as collected under California&rsquo;s URSUS program is broader than fatal police shootings or the killings by police data commonly cited in media or crowdsourced
              databases. Deadly force includes </span><span class="c9 c15">all use of force incidents </span><span>resulting in death </span><span class="c9 c15">or serious injury</span><span class="c1">&nbsp;of a civilian or that involved a firearms
              discharge regardless of injury caused. In total, police shootings comprised 54% of the deadly force incidents included for the 100 city police departments included in this scorecard.</span></p>
          <p class="c2 c5"><span class="c1"></span></p>
          <p class="c2"><span>Since the URSUS program includes information about the circumstances of each deadly force incident - in particular which types of force were used in each incident - we were able to determine the proportion of each
              department&rsquo;s police shootings where officers did not attempt to use another type of force prior to discharging their firearms.</span><sup><a href="#ftnt7" id="ftnt_ref7">[7]</a></sup><span class="c1">&nbsp;</span></p>
          <p class="c2"><span>Finally, in reviewing the URSUS data, we found that some incidents coded as "no confirmed weapon" were incidents where the person was alleged to be using a vehicle as a weapon when force was used against them. To address this, we compiled articles and DA statements for each incident to determine whether or not the person was in a moving vehicle and to confirm other details provided to URSUS. Through this process, we identified a total of 121 vehicle incidents, 56 of which were coded as "no confirmed weapon." These incidents were reclassified in our analysis from "no confirmed weapon" to "other object."</span></p>
          <p class="c2 c5"><span class="c7"></span></p>
          <p class="c2 c5"><span class="c7"></span></p>
          <p class="c2"><span class="c7">Less Lethal Force</span></p>
          <p class="c2"><span class="c3">Definition: The Total Number of Uses of Tasers, Batons, Projectiles, Pepper Spray, Other Weapons and Strangleholds against Civilians in 2016 and 2017</span></p>
          <p class="c2 c5"><span class="c3"></span></p>
          <p class="c2"><span>To obtain information on serious police use of force that did not rise to the level of deadly force, we submitted public records requests to the 100 largest municipal police agencies in California asking for the total number of
              uses of force, by type of force used, in 2016 and 2017. 56</span><span>&nbsp;of these police departments sent us their data. </span><span>Detailed data showing use of force by force type for each responsive department can be found </span><span
              class="c0"><a class="c11" href="https://docs.google.com/document/d/1OLnfFmqz3wYkAseOr1Jh6G9hP2cPEys-X9bq4AwQINU/edit?usp%3Dsharing&amp;sa=D&amp;ust=1553928833135000">here</a></span><span class="c1">. Each
              department varied in how they categorized and reported the use of force. For example, some police departments required officers to report all weaponless strikes and control holds used against a civilian, while others only require these types
              of force to be reported when they cause injury. Similarly, some departments require officers to report whenever they display a firearm or taser, while others only require them to report when these weapons are discharged. Given these reporting
              inconsistencies, we limited our analysis to more serious forms of force since these were more consistently reported and categorized among the agencies we obtained data from. This included uses of &ldquo;less lethal&rdquo; force such as tasers,
              batons, impact projectiles, OC spray and a form of stranglehold called a carotid restraint.</span></p>
          <p class="c2 c5"><span class="c1"></span></p>
          <p class="c2"><span>Police departments also differed in how they counted uses of force when more than one officer used force during a single encounter. For example, in cases where two officers both used a taser on the same person, some departments
              count this as two uses of force while others count it as one use of force. We evaluated how each department counted use of force by examining their use of force reporting policies, use of force data, and by following-up directly with
              departments for clarification. Based on this information, we determined that most departments that sent their use of force data counted cases where multiple officers used the same type of force as multiple uses of that type of force while
              counting it as one use of force when one officer uses the same type of force more than once in the same incident.</span><sup><a href="#ftnt8" id="ftnt_ref8">[8]</a></sup><span class="c1">&nbsp;</span></p>
          <p class="c2 c5"><span class="c1"></span></p>
          <p class="c2"><span>Despite these efforts, we recognize there may still be differences that were unaccounted for within each department&rsquo;s internal system for compiling and reporting uses of less lethal force. Moreover, we could not account
              for the degree to which force may have been </span><span class="c0"><a class="c11" href="https://www.eastbayexpress.com/SevenDays/archives/2018/11/16/further-evidence-emerges-that-the-oakland-police-under-reported-use-of-force-incidents&amp;sa=D&amp;ust=1553928833137000">systematically
                underreported</a></span><span class="c1">&nbsp;by some agencies. This is a living project: we will continue to update the information on our site in response to feedback from law enforcement agencies and the public.</span></p>
          <p class="c2 c5"><span class="c1"></span></p>
          <p class="c2"><span class="c7">Civilian Complaints</span></p>
          <p class="c2"><span class="c3">Definition: The Total Number of Complaints, by Type of Complaint, reported by Civilians against Law Enforcement Personnel in 2016 and 2017</span></p>
          <p class="c2 c5"><span class="c1"></span></p>
          <p class="c2"><span class="c1">State and local law enforcement agencies provide the California Department of Justice with Citizens&#39; Complaints Against Peace Officers (CCAPO) data through an annual summary. The information includes the number
              of criminal and non-criminal complaints reported by citizens, racial and identity profiling complaints and the findings from investigations into those complaints. In addition to these categories of complaints, we also submitted public records
              requests to the 100 largest municipal police agencies in California asking for the total number of use of force complaints and the number of those complaints that were sustained (i.e. upheld by investigators).</span></p>
          <p class="c2"><span class="c1">&nbsp;</span></p>
          <p class="c2"><span class="c7">Arrests</span></p>
          <p class="c2"><span class="c3">Definition: The Total Number of Arrests Reported by Police in 2016</span></p>
          <p class="c2 c5"><span class="c1"></span></p>
          <p class="c2"><span>Data on the number and demographics of each agency&rsquo;s arrests in 2016 were obtained from the California Monthly Arrests and Citation Register (MACR). This dataset classified arrests by whether the offense was a
              misdemeanor, felony or juvenile arrest. Since juvenile arrests were not disaggregated by felony or misdemeanor offense type, we excluded juvenile arrests </span><span>(which comprised 5% of arrests statewide) </span><span>from the analysis. In
              one case, San </span><span>Francisco</span><span class="c1">, we obtained data directly from the agency because they did not report data to the MACR in a format consistent with other departments (they did not disaggregate arrests of Hispanic
              individuals from White, Black, Asian and Other racial categories). </span></p>
          <p class="c2 c5"><span class="c1"></span></p>
          <p class="c2"><span class="c7">Homicides Reported and Homicides Solved</span></p>
          <p class="c2"><span class="c3">Definition: The Total Number of Criminal Homicides Reported and the Total Number Cleared by Arrest or Exceptional Means from 2013-2017</span></p>
          <p class="c2 c5"><span class="c3"></span></p>
          <p class="c2"><span>We obtained data on the number of criminal homicides reported and those that were cleared from 2013-2017 from the FBI Uniform Crime Report and Supplementary Homicide Report databases. Consistent with the definitions used by
              these databases, criminal homicides are classified as</span><span>&nbsp;murder and non-negligent manslaughter but exclude suicides, accidents, &ldquo;justifiable homicides&rdquo; and deaths caused by negligence. Homicides were classified as
              &ldquo;cleared&rdquo; when they resulted in either an arrest or were cleared through &ldquo;exceptional means&rdquo; (These are cases in which there is sufficient evidence but an arrest is reportedly not possible, for example, if the person
              suspected has died). </span><span class="c1">We recognize that homicides cleared by arrest or exceptional means is an imperfect measure of murders &ldquo;solved,&rdquo; for a variety of reasons (for example, not everyone arrested ends up being
              guilty of the offense). However, the Uniform Crime Report does not distinguish between these outcomes and, as such, we are limited by the data that are currently available. </span></p>
          <p class="c2 c5"><span class="c1"></span></p>
          <p class="c2"><span>We also included in the scorecard statistics on proportion of homicides cleared by race of the victim. Since the Uniform Crime Report did not disaggregate agency-level homicide clearance rates by race of victim, we relied on
              the Supplementary Homicide Report (SHR) database with enhanced case-level data from the </span><span class="c0"><a class="c11" href="http://www.murderdata.org/&amp;sa=D&amp;ust=1553928833139000">Murder
                Accountability Project (MAP)</a></span><span>&nbsp;to determine the percent of homicides &ldquo;solved&rdquo; by race of the victim for each jurisdiction. Importantly, since homicides tend to be reported to the SHR database an average of 5
              months after each incident (depending on jurisdiction), fewer homicides are reported as solved in this dataset compared to the end-of-year Uniform Crime reports. </span><span class="c0"><a class="c11" href="https://www.dropbox.com/s/uxg5wouyaaq68sx/HowToForMAP2016.pdf?dl%3D0&amp;sa=D&amp;ust=1553928833140000">According
                to MAP</a></span><span>, 5-10% of </span><span>homicides reported as unsolved at the time of reporting to the SHR were cleared later. As such, the SHR data should be interpreted as the proportion of homicides solved within a shorter time
              frame than the UCR, which is useful for evaluating police efficacy at solving homicides given the race of the victim. </span>
            <hr style="page-break-before:always;display:none;">
          </p>
          <p class="c2"><span class="c7">Appendix B:</span></p>
          <p class="c2"><span class="c1">Use of Force Incidents Excluded from the Analysis of the 100 Largest CA City Police Departments:</span></p>
          <p class="c2">
            <iframe title="Incidents Excluded from Analysis of Deadly Force" aria-label="Table" id="datawrapper-chart-HgwLb" src="//datawrapper.dwcdn.net/HgwLb/5/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="1453"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}})}();</script>
          </p>
          <p class="c2 c5"><span class="c7"></span></p>
          <p class="c2 c5"><span class="c7"></span></p>
          <p class="c2 c5"><span class="c7"></span></p>
          <p class="c2"><span class="c7">Appendix C:</span></p>
          <p class="c2"><span class="c1">Deadly Force Incidents Benchmarked on Population, All Arrests and Violent Crime Arrests:</span></p>
          <p class="c2">
            <iframe title="Comparison of Deadly Force Rates per Arrest, Population, and Violent Crime Arrests" aria-label="Table" id="datawrapper-chart-KyHxg" src="//datawrapper.dwcdn.net/KyHxg/2/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="2443"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}})}();</script>
          </p>
          <p class="c2 c5"><span class="c1"></span></p>
          <hr style="page-break-before:always;display:none;">
          <p class="c2 c5"><span class="c7"></span></p>
          <p class="c2"><span class="c7">Appendix D:</span></p>
          <p class="c2"><span>Calculations of Racial Disparities and Racial Bias Scores for Each Police Department:</span></p>
          <p class="c2"><iframe title="Calculation of Racial Bias Scores for Each Police Agency" aria-label="Table" id="datawrapper-chart-ZuSNF" src="//datawrapper.dwcdn.net/ZuSNF/1/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="999"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}})}();</script></p>
          <hr class="c17">
          <div>
            <p class="c8"><a href="#ftnt_ref1" id="ftnt1">[1]</a><span class="c6">&nbsp;13 police departments reported that either they do not collect or possess data specifying the number of uses of less lethal force or that they would not provide us with these data despite being required to under the California Public Records Act. The remaining departments that did not provide us with these data indicated that they needed more time to compile and send these data, despite having several months to do so and being required by law to provide this information. These departments received an Incomplete (0%) for the less lethal force component of their police violence score. Upon receipt of these data, police department scores will be updated to reflect the data provided.</span></p>
          </div>
          <div>
            <p class="c8"><a href="#ftnt_ref2" id="ftnt2">[2]</a><span class="c6 c13">&nbsp;For the purposes of comparison, deadly force rates for each department benchmarked on population and violent crime arrests are presented in Appendix C.</span></p>
          </div>
          <div>
            <p class="c8"><a href="#ftnt_ref3" id="ftnt3">[3]</a><span class="c13 c6">&nbsp;In the case of departments where the number of White residents killed by police was zero, we replace the city-specific probability with a statewide probability.</span></p>
          </div>
          <div>
            <p class="c8"><a href="#ftnt_ref4" id="ftnt4">[4]</a><span class="c20">&nbsp;</span><span class="c6">This can be seen as a Binomial distribution with a probability </span><span class="c9 c6">p</span><span class="c6">&nbsp;of being killed while
                White given that an arrest was made with </span><span class="c9 c6">n</span><span class="c6">&nbsp;independent experiments where </span><span class="c9 c6">n</span><span class="c13 c6">=the number of Black/Latinx residents who were arrested.</span></p>
          </div>
          <div>
            <p class="c8"><a href="#ftnt_ref5" id="ftnt5">[5]</a><span class="c6">&nbsp;The most severe disparity in police violence between either Black and White populations or Latinx and White populations in each jurisdiction was used to estimate their
                level of racial bias. This methodology prevents evaluations of racial bias against one marginalized group from being erased or offset due to more equitable treatment of another group, encouraging departments to address policing in
                communities where inequities are the most severe as a means to achieve more equitable outcomes overall.</span></p>
          </div>
          <div>
            <p class="c8"><a href="#ftnt_ref6" id="ftnt6">[6]</a><span class="c6">&nbsp;</span><span class="c6">&ldquo;Serious bodily injury&rdquo; as defined by California&rsquo;s use of force reporting system means a bodily injury that involves a
                substantial risk of death, unconsciousness, protracted and obvious disfigurement, or protracted loss or impairment of the function of a bodily member or organ.</span></p>
          </div>
          <div>
            <p class="c8"><a href="#ftnt_ref7" id="ftnt7">[7]</a><span class="c6">&nbsp;Police reports to the URSUS program identified 114 shootings statewide between 2016-2017 where police also used another type of force during the incident. The order of
                force used was reported in 47 of these incidents and we were able to obtain media reports, DA statements and other documents to determine the order of force used in the remaining 67 incidents. Links to these incidents and sources for each
                determination can be found </span><span class="c0 c6"><a class="c11" href="https://docs.google.com/spreadsheets/d/1Rte9KoGJ4inoSez1DSA3ecsC-Rk34AcH4d8GNMlvOCI/edit?usp%3Dsharing&amp;sa=D&amp;ust=1553928833146000">here</a></span><span
                class="c13 c6">.</span></p>
            <p class="c8 c5"><span class="c4"></span></p>
          </div>
          <div>
            <p class="c8"><a href="#ftnt_ref8" id="ftnt8">[8]</a><span class="c6">&nbsp;There were, however, a few notable exceptions. Use of force reports from </span><span class="c0 c6"><a class="c11" href="http://assets.lapdonline.org/assets/pdf/2016-use-of-force-year-end-review-small.pdf&amp;sa=D&amp;ust=1553928833143000">Los
                  Angeles</a></span><span class="c6">&nbsp;and </span><span class="c0 c6"><a class="c11" href="http://www.sjpd.org/crimestats/forceanalysis.asp&amp;sa=D&amp;ust=1553928833144000">San Jose</a></span><span class="c13 c6">&nbsp;police
                departments counted all uses of the same type of force during an incident as one use of force, regardless of how many officers used this type of force during the incident. While imperfect, we used these cities&rsquo; more conservative use of
                less lethal force counts to calculate their scores. Since both departments had relatively high levels of less lethal force even by this more conservative count, using the conservative count still provides useful insight into issues with less
                lethal force usage by these departments. Moreover, using this more conservative count did not change these departments&rsquo; overall grades or their grades for the police violence category of analysis, both of which were already F&rsquo;s.
              </span></p>
          </div>
        </div>
      </div>
    </div>

    <script src="assets/js/site.js<?= trim($ac) ?>"></script>
  </body>
</html>
