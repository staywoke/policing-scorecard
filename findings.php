<?php
require('common.php');

$ac = '?ac=' . getHash();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>Findings</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="description" content="Findings">
    <meta name="author" content="StayWoke">

    <!-- Twitter META Info -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@samswey">
    <meta property="twitter:title" content="Findings">
    <meta property="twitter:description" content="Get the facts about police violence and accountability in California. Evaluate each police department and hold them accountable here.">
    <meta property="twitter:creator" content="@mrmidi">
    <meta property="twitter:image:src" content="https://policescorecard.org/assets/img/card.jpg">
    <meta property="twitter:domain" content="https://policescorecard.org">

    <!-- Open Graph protocol -->
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Findings">
    <meta property="og:url" content="https://policescorecard.org">
    <meta property="og:image" content="https://policescorecard.org/assets/img/card.jpg">
    <meta property="og:site_name" content="CA Police Scorecard">
    <meta property="og:description" content="Get the facts about police violence and accountability in California. Evaluate each police department and hold them accountable here.">

    <link href="favicon.ico" rel="shortcut icon">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css?ver=1.0.0">
    <style>
    /* Foot Notes */
    sup a {
      font-size: 10px;
      vertical-align: super;
      font-weight: bold;
    }

    p {
      margin-bottom: 14px;
      line-height: 20px;
    }

    .lst-kix_fckzbmam001m-6>li {
      counter-increment: lst-ctn-kix_fckzbmam001m-6
    }

    .lst-kix_uruhbdngh9zy-6>li {
      counter-increment: lst-ctn-kix_uruhbdngh9zy-6
    }

    ol.lst-kix_fckzbmam001m-6.start {
      counter-reset: lst-ctn-kix_fckzbmam001m-6 0
    }

    .lst-kix_fckzbmam001m-7>li {
      counter-increment: lst-ctn-kix_fckzbmam001m-7
    }

    ol.lst-kix_fckzbmam001m-3.start {
      counter-reset: lst-ctn-kix_fckzbmam001m-3 0
    }

    .lst-kix_fckzbmam001m-7>li:before {
      content: ""counter(lst-ctn-kix_fckzbmam001m-7, lower-latin) ". "
    }

    .lst-kix_fckzbmam001m-6>li:before {
      content: ""counter(lst-ctn-kix_fckzbmam001m-6, decimal) ". "
    }

    ul.lst-kix_pr7wbpbcyk4v-8 {
      list-style-type: none
    }

    ol.lst-kix_uruhbdngh9zy-7.start {
      counter-reset: lst-ctn-kix_uruhbdngh9zy-7 0
    }

    .lst-kix_fckzbmam001m-8>li {
      counter-increment: lst-ctn-kix_fckzbmam001m-8
    }

    .lst-kix_uruhbdngh9zy-5>li {
      counter-increment: lst-ctn-kix_uruhbdngh9zy-5
    }

    ul.lst-kix_pr7wbpbcyk4v-4 {
      list-style-type: none
    }

    ul.lst-kix_pr7wbpbcyk4v-5 {
      list-style-type: none
    }

    ul.lst-kix_pr7wbpbcyk4v-6 {
      list-style-type: none
    }

    .lst-kix_fckzbmam001m-5>li {
      counter-increment: lst-ctn-kix_fckzbmam001m-5
    }

    ul.lst-kix_pr7wbpbcyk4v-7 {
      list-style-type: none
    }

    ul.lst-kix_pr7wbpbcyk4v-0 {
      list-style-type: none
    }

    ul.lst-kix_pr7wbpbcyk4v-1 {
      list-style-type: none
    }

    .lst-kix_fckzbmam001m-1>li:before {
      content: ""counter(lst-ctn-kix_fckzbmam001m-1, lower-latin) ". "
    }

    ul.lst-kix_pr7wbpbcyk4v-2 {
      list-style-type: none
    }

    ul.lst-kix_pr7wbpbcyk4v-3 {
      list-style-type: none
    }

    .lst-kix_fckzbmam001m-2>li:before {
      content: ""counter(lst-ctn-kix_fckzbmam001m-2, lower-roman) ". "
    }

    ol.lst-kix_fckzbmam001m-0.start {
      counter-reset: lst-ctn-kix_fckzbmam001m-0 0
    }

    .lst-kix_uruhbdngh9zy-8>li {
      counter-increment: lst-ctn-kix_uruhbdngh9zy-8
    }

    ol.lst-kix_fckzbmam001m-8 {
      list-style-type: none
    }

    ol.lst-kix_uruhbdngh9zy-1.start {
      counter-reset: lst-ctn-kix_uruhbdngh9zy-1 0
    }

    ol.lst-kix_fckzbmam001m-1.start {
      counter-reset: lst-ctn-kix_fckzbmam001m-1 0
    }

    .lst-kix_fckzbmam001m-4>li {
      counter-increment: lst-ctn-kix_fckzbmam001m-4
    }

    .lst-kix_uruhbdngh9zy-3>li {
      counter-increment: lst-ctn-kix_uruhbdngh9zy-3
    }

    ol.lst-kix_fckzbmam001m-2.start {
      counter-reset: lst-ctn-kix_fckzbmam001m-2 0
    }

    ol.lst-kix_fckzbmam001m-8.start {
      counter-reset: lst-ctn-kix_fckzbmam001m-8 0
    }

    ol.lst-kix_uruhbdngh9zy-8.start {
      counter-reset: lst-ctn-kix_uruhbdngh9zy-8 0
    }

    ol.lst-kix_uruhbdngh9zy-2.start {
      counter-reset: lst-ctn-kix_uruhbdngh9zy-2 0
    }

    ol.lst-kix_fckzbmam001m-4 {
      list-style-type: none
    }

    ol.lst-kix_fckzbmam001m-5 {
      list-style-type: none
    }

    ol.lst-kix_fckzbmam001m-6 {
      list-style-type: none
    }

    ol.lst-kix_fckzbmam001m-7 {
      list-style-type: none
    }

    ol.lst-kix_fckzbmam001m-0 {
      list-style-type: none
    }

    ol.lst-kix_fckzbmam001m-1 {
      list-style-type: none
    }

    ol.lst-kix_fckzbmam001m-2 {
      list-style-type: none
    }

    ol.lst-kix_fckzbmam001m-3 {
      list-style-type: none
    }

    .lst-kix_fckzbmam001m-0>li {
      counter-increment: lst-ctn-kix_fckzbmam001m-0
    }

    .lst-kix_z6y9fbn9tl0s-4>li:before {
      content: "\0025cb  "
    }

    .lst-kix_z6y9fbn9tl0s-6>li:before {
      content: "\0025cf  "
    }

    .lst-kix_z6y9fbn9tl0s-1>li:before {
      content: "\0025cb  "
    }

    .lst-kix_z6y9fbn9tl0s-5>li:before {
      content: "\0025a0  "
    }

    .lst-kix_z6y9fbn9tl0s-0>li:before {
      content: "\0025cf  "
    }

    .lst-kix_z6y9fbn9tl0s-8>li:before {
      content: "\0025a0  "
    }

    .lst-kix_z6y9fbn9tl0s-7>li:before {
      content: "\0025cb  "
    }

    ul.lst-kix_z6y9fbn9tl0s-1 {
      list-style-type: none
    }

    ul.lst-kix_z6y9fbn9tl0s-2 {
      list-style-type: none
    }

    ul.lst-kix_z6y9fbn9tl0s-0 {
      list-style-type: none
    }

    ol.lst-kix_uruhbdngh9zy-6.start {
      counter-reset: lst-ctn-kix_uruhbdngh9zy-6 0
    }

    .lst-kix_fckzbmam001m-1>li {
      counter-increment: lst-ctn-kix_fckzbmam001m-1
    }

    .lst-kix_z6y9fbn9tl0s-2>li:before {
      content: "\0025a0  "
    }

    .lst-kix_uruhbdngh9zy-0>li {
      counter-increment: lst-ctn-kix_uruhbdngh9zy-0
    }

    .lst-kix_z6y9fbn9tl0s-3>li:before {
      content: "\0025cf  "
    }

    .lst-kix_uruhbdngh9zy-2>li:before {
      content: ""counter(lst-ctn-kix_uruhbdngh9zy-2, lower-roman) ". "
    }

    .lst-kix_uruhbdngh9zy-1>li:before {
      content: ""counter(lst-ctn-kix_uruhbdngh9zy-1, lower-latin) ". "
    }

    .lst-kix_uruhbdngh9zy-5>li:before {
      content: ""counter(lst-ctn-kix_uruhbdngh9zy-5, lower-roman) ". "
    }

    .lst-kix_uruhbdngh9zy-6>li:before {
      content: ""counter(lst-ctn-kix_uruhbdngh9zy-6, decimal) ". "
    }

    .lst-kix_uruhbdngh9zy-0>li:before {
      content: ""counter(lst-ctn-kix_uruhbdngh9zy-0, decimal) ". "
    }

    .lst-kix_uruhbdngh9zy-8>li:before {
      content: ""counter(lst-ctn-kix_uruhbdngh9zy-8, lower-roman) ". "
    }

    ol.lst-kix_fckzbmam001m-7.start {
      counter-reset: lst-ctn-kix_fckzbmam001m-7 0
    }

    ol.lst-kix_uruhbdngh9zy-3.start {
      counter-reset: lst-ctn-kix_uruhbdngh9zy-3 0
    }

    .lst-kix_uruhbdngh9zy-7>li:before {
      content: ""counter(lst-ctn-kix_uruhbdngh9zy-7, lower-latin) ". "
    }

    .lst-kix_uruhbdngh9zy-2>li {
      counter-increment: lst-ctn-kix_uruhbdngh9zy-2
    }

    .lst-kix_fckzbmam001m-2>li {
      counter-increment: lst-ctn-kix_fckzbmam001m-2
    }

    ol.lst-kix_uruhbdngh9zy-0.start {
      counter-reset: lst-ctn-kix_uruhbdngh9zy-0 0
    }

    .lst-kix_uruhbdngh9zy-4>li:before {
      content: ""counter(lst-ctn-kix_uruhbdngh9zy-4, lower-latin) ". "
    }

    .lst-kix_uruhbdngh9zy-3>li:before {
      content: ""counter(lst-ctn-kix_uruhbdngh9zy-3, decimal) ". "
    }

    .lst-kix_pr7wbpbcyk4v-8>li:before {
      content: "\0025a0  "
    }

    .lst-kix_pr7wbpbcyk4v-7>li:before {
      content: "\0025cb  "
    }

    ol.lst-kix_uruhbdngh9zy-4.start {
      counter-reset: lst-ctn-kix_uruhbdngh9zy-4 0
    }

    .lst-kix_pr7wbpbcyk4v-4>li:before {
      content: "\0025cb  "
    }

    .lst-kix_pr7wbpbcyk4v-5>li:before {
      content: "\0025a0  "
    }

    .lst-kix_pr7wbpbcyk4v-6>li:before {
      content: "\0025cf  "
    }

    .lst-kix_fckzbmam001m-3>li {
      counter-increment: lst-ctn-kix_fckzbmam001m-3
    }

    .lst-kix_pr7wbpbcyk4v-0>li:before {
      content: "\0025cf  "
    }

    .lst-kix_pr7wbpbcyk4v-1>li:before {
      content: "\0025cb  "
    }

    .lst-kix_pr7wbpbcyk4v-3>li:before {
      content: "\0025cf  "
    }

    ol.lst-kix_fckzbmam001m-4.start {
      counter-reset: lst-ctn-kix_fckzbmam001m-4 0
    }

    .lst-kix_pr7wbpbcyk4v-2>li:before {
      content: "\0025a0  "
    }

    ol.lst-kix_uruhbdngh9zy-8 {
      list-style-type: none
    }

    ol.lst-kix_fckzbmam001m-5.start {
      counter-reset: lst-ctn-kix_fckzbmam001m-5 0
    }

    .lst-kix_uruhbdngh9zy-7>li {
      counter-increment: lst-ctn-kix_uruhbdngh9zy-7
    }

    ol.lst-kix_uruhbdngh9zy-6 {
      list-style-type: none
    }

    ol.lst-kix_uruhbdngh9zy-7 {
      list-style-type: none
    }

    ol.lst-kix_uruhbdngh9zy-4 {
      list-style-type: none
    }

    ol.lst-kix_uruhbdngh9zy-5 {
      list-style-type: none
    }

    ol.lst-kix_uruhbdngh9zy-2 {
      list-style-type: none
    }

    ol.lst-kix_uruhbdngh9zy-3 {
      list-style-type: none
    }

    ul.lst-kix_z6y9fbn9tl0s-7 {
      list-style-type: none
    }

    ol.lst-kix_uruhbdngh9zy-0 {
      list-style-type: none
    }

    .lst-kix_uruhbdngh9zy-1>li {
      counter-increment: lst-ctn-kix_uruhbdngh9zy-1
    }

    ul.lst-kix_z6y9fbn9tl0s-8 {
      list-style-type: none
    }

    ol.lst-kix_uruhbdngh9zy-1 {
      list-style-type: none
    }

    ul.lst-kix_z6y9fbn9tl0s-5 {
      list-style-type: none
    }

    ul.lst-kix_z6y9fbn9tl0s-6 {
      list-style-type: none
    }

    ul.lst-kix_z6y9fbn9tl0s-3 {
      list-style-type: none
    }

    ul.lst-kix_z6y9fbn9tl0s-4 {
      list-style-type: none
    }

    .lst-kix_uruhbdngh9zy-4>li {
      counter-increment: lst-ctn-kix_uruhbdngh9zy-4
    }

    ol.lst-kix_uruhbdngh9zy-5.start {
      counter-reset: lst-ctn-kix_uruhbdngh9zy-5 0
    }

    ol {
      margin: 0;
      padding: 0
    }

    table td,
    table th {
      padding: 0
    }

    .c10 {
      text-decoration-skip-ink: none;
      -webkit-text-decoration-skip: none;
      color: #1155cc;
      text-decoration: underline
    }

    .c5 {
      padding-top: 0pt;
      padding-bottom: 0pt;
      line-height: 1.0;
      text-align: left
    }

    .c13 {
      background-color: #ffffff;
      max-width: 468pt;
      padding: 72pt 72pt 72pt 72pt
    }

    .c12 {
      color: inherit;
      text-decoration: inherit
    }

    .c7 {
      padding: 0;
      margin: 0
    }

    .c0 {
      margin: 5px 0;
    }

    .c14 {
      width: 33%;
      height: 1px
    }

    .c16 {
      orphans: 2;
      widows: 2
    }

    .c19 {
      font-size: 10pt
    }

    .c2 {
      font-size: 10pt
    }

    .c15 {
      font-style: italic
    }

    .c8 {
      padding-left: 0pt
    }

    .c9 {
      height: 5pt
    }

    .c6 {
      margin-left: 0;
      margin-bottom: 8px;
    }

    .c4 {
      font-weight: 700
    }

    .subtitle {
      color: #464648;
      padding: 0;
      font-size: 28px;
      line-height: 32px;
      font-weight: 300;
      text-transform: uppercase;
      margin: 14px 0;
      font-family: 'Barlow Condensed', sans-serif;
    }

    .c3 img {
      max-width: 70%;
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
              <li><a href="about">About the Data</a></li>
              <li><a href="findings" class="active">Key Findings</a></li>
              <li><a href="https://www.joincampaignzero.org/about/" target="_blank">Planning Team</a></li>
              <li><a href="https://www.joincampaignzero.org/" target="_blank">More about Campaign Zero</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="section about">
        <div class="content">
          <h1 class="title">
            Key Findings
          </h1>
          <p class="c3"><span class="c4 subtitle">We built the first Scorecard to evaluate policing in California. Here&rsquo;s what we found.</span></p>
          <p class="c3 c9"><span class="c1"></span></p>
          <p class="c3"><span>Nationwide protests demanding an end to police violence have </span><span class="c10"><a class="c12" href="https://bit.ly/2vCY7j1">shifted public opinion</a></span><span>&nbsp;over the </span><span>past five years</span><span>. An estimated </span><span class="c10"><a class="c12" href="https://www.vox.com/2019/3/22/18259865/great-awokening-white-liberals-race-polling-trump-2020">45 million</a></span><span>&nbsp;Americans have adopted more progressive views on race and racism since the protests </span><span>began</span><span>&nbsp;in 2014. But while public opinion has changed, </span><span>policing</span><span> outcomes in most places have not. The police killed </span><span class="c10"><a class="c12" href="https://www.theroot.com/here-s-how-many-people-police-killed-in-2018-1831469528">more people</a></span><span>&nbsp;</span><span>last year than the year before</span><span>, </span><span>racial disparities in outcomes such as </span><span class="c10"><a class="c12" href="https://ucr.fbi.gov/crime-in-the-u.s/2017/crime-in-the-u.s.-2017/tables/table-43">arrests</a></span><span>&nbsp;and </span><span class="c10"><a class="c12" href="https://mappingpoliceviolence.org/">deadly force</a></span><span>&nbsp;persist</span><span>, and the criminal justice system is not more likely to hold police accountable. In a country with 18,000 law enforcement agencies, each with different issues and outcomes, changing these outcomes on a nationwide scale requires sustained organizing and advocacy efforts in </span><span class="c15">every jurisdiction</span><span>. To do this, </span><span class="c11 c4">communities need the tools to effectively evaluate each law enforcement agency and hold them accountable to measurable results. </span></p>
          <p class="c3 c9"><span class="c1"></span></p>
          <p class="c3"><span>But how do you evaluate the police?</span><span class="c4">&nbsp;</span><span>There are substantially different perspectives about what police should or should not do - and whether the institution of policing should continue to exist at all. These differences cannot all be resolved at once, but we believe there are a set of common principles that can provide an initial framework for evaluating </span><span>any </span><span class="c1">agency responsibility for protecting people from harm:</span></p>
          <p class="c3 c9"><span class="c1"></span></p>
          <ul class="c7 lst-kix_pr7wbpbcyk4v-0 start">
            <li class="c3 c8 c6"><span class="c1">The agency should prioritize protecting people from violence, not arresting people for low level offenses</span></li>
            <li class="c3 c8 c6"><span>The</span><span class="c1">&nbsp;agency should avoid the use of force, especially deadly force, to the greatest extent possible</span></li>
            <li class="c3 c8 c6"><span>When people come forward to report misconduct by employees of the agency, it </span><span>should result in some form of accountability</span><span class="c1">&nbsp;</span></li>
            <li class="c3 c8 c6"><span>When people call on the agency to help solve the </span><span>most serious crimes - </span><span class="c1">those resulting in death - they should be able to trust that agency to find the person responsible </span></li>
            <li class="c3 c8 c6"><span class="c1">The agency should accomplish these goals in ways that are not biased or discriminatory</span></li>
          </ul>
          <p class="c3 c9"><span class="c1"></span></p>
          <p class="c3"><span>Based on these principles, </span><span class="c10"><a class="c12" href="http://joincampaignzero.org">Campaign Zero</a></span><span>&nbsp;obtained data from state and local agencies to evaluate California&rsquo;s 100 largest municipal police departments and converted each evaluation (represented by a &ldquo;score&rdquo; from 0-100) into an easy-to-understand letter grade. Using this methodology, a police department received a higher grade if it made </span><span class="c15">fewer arrests</span><span>&nbsp;for low level offenses, </span><span class="c15">used</span><span>&nbsp;</span><span class="c15">less force </span><span>during arrest, had </span><span class="c15">fewer homicides unsolved</span><span>, </span><span class="c15">did not have racial disparities</span><span>&nbsp;in arrests and use of force, and </span><span class="c15">upheld civilian complaints</span><span>&nbsp;of police misconduct more often than other police departments in the state. </span><span class="c4">See the grade each police department received, and the outcomes informing each grade, at </span><span class="c10 c4"><a class="c12" href="http://policescorecard.org">policescorecard.org. </a></span></p>
          <p class="c3 c9"><span class="c1"></span></p>
          <p class="c3"><span class="c11 c4">Here are some of the major findings of our analysis:</span></p>
          <ol class="c7 lst-kix_fckzbmam001m-0 start" start="1">
            <li class="c3 c8 c6"><span>Most people arrested in California are arrested for low level offenses.</span><span class="c4">&nbsp;</span><span>Of 1,354,769 reported arrests made in 2016, 70% </span><span>were for misdemeanor offenses. Police made </span><span class="c4">1.8x </span><span>as many</span><span class="c4">&nbsp;</span><span>arrests for </span><span class="c4">drug possession</span><span>&nbsp;alone as they did for </span><span class="c4">all violent crimes combined.</span><sup class="c4"><a href="#ftnt1" id="ftnt_ref1">[1]</a></sup><span class="c11 c4">&nbsp;</span></li>
          </ol>
          <p class="c3 c6"><span><a href="assets/img/findings/image5.png" target="_"><img alt="" src="assets/img/findings/image5.png" title=""></a></span></p>
          <ol class="c7 lst-kix_fckzbmam001m-0" start="2">
            <li class="c3 c8 c6"><span>Police discharged their firearms or otherwise used force causing death or </span><span>serious bodily injury</span><sup><a href="#ftnt2" id="ftnt_ref2">[2]</a></sup><span>&nbsp;in </span><span class="c4">1,276 incidents</span><span>&nbsp;from 2016-2017, killing 328 people and seriously injuring an additional 824 people. 647 of these incidents were police shootings, while the other half were other forms of police use of force that caused death or serious injury. </span><span class="c4">Overall</span><span>, </span><span class="c11 c4">half of people killed or seriously injured by police (49%) were unarmed. </span>

            <br /><br />

            <span>Police in San Bernardino, Riverside, Stockton, Long Beach, Fremont and Bakersfield used deadly force at </span><span class="c4">substantially higher rates </span><span>than other major cities in California. San Jose and Los Angeles police used deadly force at 3x the rate of police in </span><span>San Francisco and San Diego</span><span>. </span><span>And Oakland police had one of the lowest rates of deadly force, reflecting the substantial decline in use of force incidents that has followed </span><span class="c10"><a class="c12" href="http://www.oaklandmagazine.com/April-2017/The-Year-of-No-Shootings/">DOJ mandated reforms </a></span><span>to their use of force policies. </span></p>
            <p class="c3 c6"><span><a href="assets/img/findings/image1.png" target="_"><img alt="" src="assets/img/findings/image1.png" title=""></a></span></li>
          </ol>
          <p class="c3 c9 c6"><span class="c1"></span></p>
          <ol class="c7 lst-kix_fckzbmam001m-0" start="3">
            <li class="c3 c6 c8"><span>In reviewing the policy manuals of 90 of the 100 California police departments, we find </span><span class="c4">California police have more permissive use of force standards than the national average.</span><span>&nbsp;Only 16 departments (18%) required officers to use de-escalation when possible prior to using force and only 7 departments (8%) required officers to use all available means of apprehension, including non-lethal force, prior to using </span><span>deadly</span><span class="c15">&nbsp;</span><span>force. This is significantly lower than the 42% and 43%, respectively, of the big city police departments nationwide that </span><span class="c10"><a class="c12" href="http://useofforceproject.org">have such policies in place</a></span><span>. In some places, that is beginning to change. We identified four departments that adopted new use of force policies requiring de-escalation during the 2016-2017 period - Stockton, Sacramento, San Francisco, and Los Angeles. </span><span class="c4">All four departments had </span><span class="c10 c4"><a class="c12" href="https://drive.google.com/file/d/1YNEIO19C4X-6tkU5ZhlXsj_MaVlkM7pp/view">fewer police shootings</a></span><span class="c4">&nbsp;in 2018, after these policies were enacted, than their average shootings rate during the years prior to this policy&rsquo;s enactment.</span></li>
          </ol>
          <p class="c3 c6"><span><a href="assets/img/findings/image6.png" target="_"><img alt="" class="narrow" src="assets/img/findings/image6.png" title=""></a></span></p>
          <p class="c3 c9 c6"><span class="c1"></span></p>
          <ol class="c7 lst-kix_fckzbmam001m-0" start="4">
            <li class="c3 c8 c6"><span class="c4">When people come forward to report police misconduct in California, it rarely leads to accountability</span><span>. Statewide, </span><span class="c4">only 1 in every 14 civilian complaints </span><span>of police misconduct was ruled in favor of civilians in 2016-2017. In 81% of jurisdictions, civilians reporting misconduct had less than a 1 in 5 chance of the complaint being ruled in their favor by police investigators. Complaints concerning police violence and racial/identity discrimination almost never resulted in accountability. Civilians reporting police </span><span class="c4">racial discrimination </span><span>had only a </span><span class="c4">1 in 64 chance of their complaint being upheld</span><span>&nbsp;and </span><span>civilians reporting </span><span class="c4">use of force complaints </span><span>had only a </span><span class="c4">1 in 78 chance of being upheld. This lack of administrative accountability for police violence mirrors the criminal justice system&rsquo;s approach towards police violence. </span><span>Of 647 police shootings statewide between 2016-2017</span><span class="c4">, </span><span>only </span><span class="c10"><a class="c12" href="http://mappingpoliceviolence.org">one</a></span><span>&nbsp;of these incidents has</span><span>&nbsp;resulted in an officer being prosecuted for breaking the law.</span></li>
          </ol>
          <p class="c3 c6"><span><a href="assets/img/findings/image2.png" target="_"><img alt="" src="assets/img/findings/image2.png" title=""></a></span></p>
          <ol class="c7 lst-kix_fckzbmam001m-0" start="5">
            <li class="c3 c8 c6"><span class="c4">There&rsquo;s evidence of police racial bias in California, especially against black people. </span><span>Statewide, black people were arrested for misdemeanor offenses at </span><span class="c4">2.2x higher rate</span><span>&nbsp;per population than white people. </span><span class="c4">89 of California&rsquo;s 100 largest city police departments arrested black people for drug possession at higher rates than whites</span><span>, despite research showing similar rates of drug use and selling between the groups. And while police were more likely to arrest black people for low-level offenses, they were less </span><span>likely to find someone responsible for the most serious offense - homicide - when the victim was black</span><span class="c1">. California police reported finding a suspect in 76% of homicides of white victims from 2016-2017 compared to only 48% of Latinx victims and 48% of black victims.</span>

              <br /></br>

              <span class="c4">There was also evidence of racial bias in police use of force. </span><span class="c4">California police were 32% more likely to shoot when arresting a black person and 20% more likely to shoot when arresting a Latinx person compared to a white person.</span><span>&nbsp;Similarly, police were 23% more likely to kill or seriously injure a black person and 20% more likely to kill or seriously injure a Latinx person when making an arrest. And while </span><span class="c4">46% of white people</span><span class="c15 c4">&nbsp;killed or seriously injured </span><span class="c4">by police were unarmed, 52% of black people and 51% of Latinx people were. </span>

              <br /></br>

              <span><a href="assets/img/findings/image4.png" target="_"><img alt="" src="assets/img/findings/image4.png" class="narrow" title=""></a></span>

              <br /></br>

              <span>Finally, p</span><span class="c1">olice also appear to be more likely to shoot black and Latinx people as a first response rather than first attempting non-lethal force to resolve the situation. Police shot first, rather than first attempting a lower level of force, in 87% of police shootings of black people and 84% of Latinx people compared to 81% of police shootings of white people.</span>

              <br /></br>

              <span><a href="assets/img/findings/image3.png" target="_"><img alt="" src="assets/img/findings/image3.png" title=""></a></span>

            </li>

          </ol>

          <p class="c3"><span>When these outcomes are evaluated together, it reveals a disturbing picture of policing within the state. </span><span class="c4">Most departments received a score lower than 60% - the equivalent of an F grade. </span><span>In some cases, these evaluations confirmed what has previously been reported. For example, Bakersfield Police Department, which has been </span><span class="c10"><a class="c12" href="https://www.theatlantic.com/politics/archive/2015/12/the-deadliest-county-for-police-killings-in-america/418359/">cited</a></span><span>&nbsp;as one of the deadliest departments in the nation, received the 4th lowest score among the 100 California departments. Other departments received scores that were more unexpected. For example, Carlsbad Police Department received the highest score. Further exploration of the organizational culture, leadership and practices of this department might produce valuable insights into how to improve outcomes in</span><span>&nbsp;other police departments.</span><span>&nbsp;By contrast, Beverly Hills Police Department received </span><span class="c10"><a class="c12" href="https://policescorecard.org/?city%3Dbeverly-hills">the lowest score</a></span><span class="c1">&nbsp;of all 100 departments, due to relatively high levels of police violence, severe racial inequities in law enforcement and a system that almost never holds officers accountable for misconduct. </span></p>
          <p class="c3 c9"><span class="c1"></span></p>
          <p class="c3"><span>These findings should prompt further investigations and interventions targeting low-performing police departments within the state, not only from local policymakers but also potentially from the California Attorney General, who has the power to initiate pattern and practice investigations into local police agencies.</span></p>
          <hr class="c14">
          <div>
            <p class="c5 c16"><a href="#ftnt_ref1" id="ftnt1">[1]</a><span class="c2">&nbsp;The number of arrests for drug possession has not declined significantly since marijuana legalization took effect on November 9, 2016. Of the 192k arrests for drug possession statewide in 2016, 6k of those arrests were for marijuana possession. There were also slightly </span><span class="c10 c2"><a class="c12" href="https://crime-data-explorer.fr.cloud.gov/explorer/state/california/arrest/2007/2017">more arrests</a></span><span class="c2">&nbsp;for drug possession overall in 2017 than in 2016. As such, the reported </span><span class="c10 c2"><a class="c12" href="https://www.mercurynews.com/2018/07/11/prop-64-didnt-legalize-every-cannabis-crime-but-arrests-are-falling-fast/">56% reduction</a></span><span class="c2 c18">&nbsp;in marijuana arrests in 2017 did not substantially change the total number of drug possession arrests in the state.</span></p>
          </div>
          <div>
            <p class="c5 c16"><a href="#ftnt_ref2" id="ftnt2">[2]</a><span class="c19">&nbsp;</span><span class="c2">&ldquo;Serious bodily injury&rdquo; as defined by California&rsquo;s use of force reporting system means a bodily injury that involves a substantial risk of death, unconsciousness, protracted and obvious disfigurement, or protracted loss or impairment of the function of a bodily member or organ.</span></p>
          </div>
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
