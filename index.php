<?php
require('common.php');

$city = (!empty($_REQUEST['city'])) ? $_REQUEST['city'] : 'los-angeles';
$data = getCityData($city);
$grade = getGrade($data['overall_score']);
$reportCard = reportCard();
$title = "CA Policing Scorecard - {$data['agency_name']} - Grade {$grade}";
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

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css?ac=1.0.0">
  </head>

  <body>
    <div class="wrapper">
      <div class="section bg-gray header">
        <div class="content">
          <a href="./" class="logo">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 288.51 64.09"><defs><mask id="a" x="131.57" y="0" width="1.53" height="64.09" maskUnits="userSpaceOnUse"><path fill="#fff" fill-rule="evenodd" d="M131.57.22h1.53v64.09h-1.53V.22z" transform="translate(0 -.22)"/></mask></defs><path d="M154.35 11.61c0 2.1-1 2.83-2.78 2.83h-2.67V5.67h2.67c1.81 0 2.78.73 2.78 2.87zm-2.64-8.83h-4.92a1 1 0 0 0-1.15 1.14v21.86a1 1 0 0 0 1.15 1.14h1a1 1 0 0 0 1.11-1.14v-8.45h2.81c3.68 0 5.9-1.55 5.9-5.1V7.92c0-3.56-2.22-5.14-5.9-5.14zM170.65 21.51c0 2.14-1 2.86-2.78 2.86s-2.77-.72-2.77-2.86V8.26c0-2.14 1-2.86 2.77-2.86s2.78.72 2.78 2.86zM168 2.53h-.28c-3.67 0-5.89 1.52-5.89 5.11v14.49c0 3.55 2.22 5.11 5.89 5.11h.28c3.68 0 5.9-1.56 5.9-5.11V7.64c.01-3.55-2.21-5.11-5.9-5.11zM181.15 2.78h-1A1 1 0 0 0 179 3.95v21.83a1 1 0 0 0 1.14 1.14h7.53a1 1 0 0 0 1.18-1.14v-.65a1 1 0 0 0-1.14-1.14h-5.41V3.95a1 1 0 0 0-1.15-1.17M196.1 25.78V3.95a1 1 0 0 0-1.1-1.17h-1a1 1 0 0 0-1.14 1.14v21.86a1 1 0 0 0 1.14 1.18h1a1 1 0 0 0 1.1-1.18M213.23 18.37a1 1 0 0 0-1.15-1.14h-1a1 1 0 0 0-1.08 1.14v3.14c0 2.1-.9 2.86-2.67 2.86s-2.67-.76-2.67-2.86V8.26c0-2.1.9-2.86 2.67-2.86s2.67.76 2.67 2.86v2.52a1 1 0 0 0 1.14 1.14h1a1 1 0 0 0 1.09-1.14V7.64c0-3.48-2.22-5.11-5.9-5.11h-.07c-3.67 0-5.89 1.63-5.89 5.11v14.49c0 3.66 2.22 5.11 5.89 5.11h.07c3.68 0 5.9-1.49 5.9-5.11zM219.5 2.78a1 1 0 0 0-1.14 1.14v21.86a1 1 0 0 0 1.14 1.14h1a1 1 0 0 0 1.12-1.14V3.95a1 1 0 0 0-1.15-1.17zM238.26 2.78h-.72a1 1 0 0 0-1.15 1.14v15.52l-5.75-15.66a1.28 1.28 0 0 0-1.32-1h-1.15A1 1 0 0 0 227 3.95v21.83a1 1 0 0 0 1.14 1.14h.73a1 1 0 0 0 1.13-1.14v-16l6 16.25a1.23 1.23 0 0 0 1.28.93h1a1 1 0 0 0 1.13-1.18V3.95a1 1 0 0 0-1.15-1.17M250.71 2.53h-.28c-3.67 0-5.89 1.63-5.89 5.11v14.49c0 3.66 2.22 5.11 5.89 5.11h.28c3.68 0 5.9-1.49 5.9-5.11v-6.28a1 1 0 0 0-1.15-1.14h-3.88a1 1 0 0 0-1.15 1.14v.48a1 1 0 0 0 1.15 1.14h1.77v4c0 2.14-1 2.86-2.78 2.86s-2.77-.72-2.77-2.86V8.26c0-2.14 1-2.86 2.77-2.86s2.78.72 2.78 2.86v1.59a1 1 0 0 0 1.14 1.14h1a1 1 0 0 0 1.15-1.14V7.64c0-3.48-2.22-5.11-5.9-5.11M153.41 47.95l-3.15-1.72c-1.39-.8-1.91-1.32-1.91-2.77v-1.68c0-1.93.94-2.69 2.6-2.69s2.6.76 2.6 2.69v2.14a1 1 0 0 0 1.15 1.14h.9a1 1 0 0 0 1.14-1.14v-2.66c0-3.49-2.43-5-5.75-5h-.07c-3.33 0-5.76 1.48-5.76 5v3c0 2.32 1.18 3.35 3.4 4.63l3.12 1.72c1.42.79 1.94 1.42 1.94 2.86v1.9c0 1.9-.94 2.76-2.63 2.76s-2.64-.86-2.64-2.76v-2.38a1 1 0 0 0-1.15-1.14h-.9a1 1 0 0 0-1.14 1.14v3c0 3.66 2.11 5 5.79 5h.05c3.68 0 5.79-1.41 5.79-5v-3.38c0-2.31-1.32-3.49-3.4-4.66M167.35 36.29h-.07c-3.67 0-5.89 1.62-5.89 5.1v14.49c0 3.66 2.22 5.11 5.89 5.11h.07c3.68 0 5.9-1.48 5.9-5.11v-3.76a1 1 0 0 0-1.15-1.13h-1a1 1 0 0 0-1.1 1.13v3.14c0 2.11-.9 2.87-2.67 2.87s-2.67-.76-2.67-2.87V42.02c0-2.11.9-2.87 2.67-2.87s2.67.76 2.67 2.87v2.55a1 1 0 0 0 1.14 1.14h1a1 1 0 0 0 1.15-1.14v-3.18c0-3.48-2.22-5.1-5.9-5.1M186.91 55.26c0 2.14-1 2.87-2.77 2.87s-2.78-.73-2.78-2.87V42.02c0-2.14 1-2.87 2.78-2.87s2.77.73 2.77 2.87zm-2.64-19H184c-3.68 0-5.9 1.52-5.9 5.1v14.5c0 3.55 2.22 5.1 5.9 5.1h.27c3.68 0 5.9-1.55 5.9-5.1V41.39c0-3.55-2.17-5.1-5.9-5.1zM204 45.12c0 2.14-1 2.87-2.77 2.87h-2.67v-8.56h2.67c1.8 0 2.77.72 2.77 2.86zm.42 5.21c1.8-.72 2.84-2.21 2.84-4.62v-4c0-3.55-2.21-5.1-5.89-5.1h-4.93a1 1 0 0 0-1.14 1.13v21.84a1 1 0 0 0 1.14 1.14h1a1 1 0 0 0 1.14-1.14v-8.8h2.84l3.06 9a1.2 1.2 0 0 0 1.28.94h1a.93.93 0 0 0 1-1.32zM221.52 57.85h-5.93v-7.93h4.75a1 1 0 0 0 1.14-1.14v-.62a1 1 0 0 0-1.14-1.14h-4.75v-7.59h5.82a1 1 0 0 0 1.15-1.14v-.59a1 1 0 0 0-1.15-1.14h-7.94a1 1 0 0 0-1.14 1.14v21.88a1 1 0 0 0 1.14 1.14h8.05a1 1 0 0 0 1.14-1.14v-.59a1 1 0 0 0-1.14-1.14M232.75 36.29h-.07c-3.68 0-5.89 1.62-5.89 5.1v14.49c0 3.66 2.21 5.11 5.89 5.11h.07c3.68 0 5.9-1.48 5.9-5.11v-3.76a1 1 0 0 0-1.15-1.13h-1a1 1 0 0 0-1.14 1.13v3.14c0 2.11-.91 2.87-2.67 2.87s-2.67-.76-2.67-2.87V42.02c0-2.11.9-2.87 2.67-2.87s2.67.76 2.67 2.87v2.55a1 1 0 0 0 1.14 1.14h1a1 1 0 0 0 1.15-1.14v-3.18c0-3.48-2.22-5.1-5.9-5.1M246.72 52.3l2.12-11.66L251 52.3zm4.37-14.7a1.17 1.17 0 0 0-1.24-1h-1.95a1.17 1.17 0 0 0-1.25 1l-4.37 21.87c-.13.8.25 1.24 1 1.24h.87a1.11 1.11 0 0 0 1.21-1l.83-4.66h5.24l.83 4.66a1.16 1.16 0 0 0 1.25 1h1a.92.92 0 0 0 1-1.24zM268.29 45.12c0 2.14-1 2.87-2.77 2.87h-2.67v-8.56h2.67c1.8 0 2.77.72 2.77 2.86zm.42 5.21c1.8-.72 2.84-2.21 2.84-4.62v-4c0-3.55-2.22-5.1-5.89-5.1h-4.93a1 1 0 0 0-1.14 1.13v21.84a1 1 0 0 0 1.14 1.14h1a1 1 0 0 0 1.15-1.14v-8.8h2.84l3.05 9a1.21 1.21 0 0 0 1.29.94h1a.93.93 0 0 0 1-1.32zM285.25 54.99c0 2.14-1 2.86-2.78 2.86h-2.6V39.43h2.6c1.81 0 2.78.72 2.78 2.86zm-2.64-18.42h-4.85a1 1 0 0 0-1.15 1.13v21.88a1 1 0 0 0 1.15 1.13h4.85c3.68 0 5.9-1.55 5.9-5.1V41.67c0-3.55-2.22-5.1-5.9-5.1z" fill="#fff" fill-rule="evenodd"/><g mask="url(#a)"><path d="M133.1 63.33V.78a.76.76 0 0 0-.76-.76.77.77 0 0 0-.77.76v62.55a.77.77 0 0 0 .77.76.76.76 0 0 0 .76-.76" fill="#fff" fill-rule="evenodd"/></g><path d="M6.4 27.98a5.82 5.82 0 0 0 4.09-1.62.31.31 0 0 0 0-.45l-1-1.08a.32.32 0 0 0-.42 0 4.07 4.07 0 0 1-2.58 1 3.89 3.89 0 0 1 0-7.77 4 4 0 0 1 2.59 1 .27.27 0 0 0 .42 0l1-1.06a.32.32 0 0 0 0-.47 5.7 5.7 0 0 0-4.1-1.6 6.025 6.025 0 1 0 0 12.05M21.57 20.13h.06l1.68 3.65h-3.39zm-5.25 7.65h1.47a.49.49 0 0 0 .48-.34l.83-1.81h5l.9 1.85c.12.24.23.34.49.34h1.46a.3.3 0 0 0 .29-.44L22 16.11a.29.29 0 0 0-.28-.19h-.17a.31.31 0 0 0-.29.19L16 27.38a.29.29 0 0 0 .32.4zM33.2 27.78h1.51a.34.34 0 0 0 .31-.25l1-6.35h.06l2.92 6.6a.31.31 0 0 0 .29.18h.3a.28.28 0 0 0 .31-.18l3-6.58 1 6.35a.37.37 0 0 0 .32.25h1.53a.3.3 0 0 0 .31-.39l-2-11.25a.28.28 0 0 0-.3-.25h-.27a.28.28 0 0 0-.29.16l-3.7 7.91-3.71-7.91a.3.3 0 0 0-.29-.16h-.26a.28.28 0 0 0-.31.25l-2 11.25a.31.31 0 0 0 .32.39M55.29 18.15h2A1.62 1.62 0 0 1 59 19.78a1.67 1.67 0 0 1-1.67 1.74h-2zm-1.86 9.63H55a.33.33 0 0 0 .32-.32v-3.9h2.08a3.74 3.74 0 1 0 0-7.47h-4a.32.32 0 0 0-.33.32V27.5a.32.32 0 0 0 .36.28zM71.06 20.13l1.74 3.65h-3.39zm-5.25 7.65h1.46a.51.51 0 0 0 .49-.34l.83-1.81h5l.83 1.81a.47.47 0 0 0 .48.34h1.5a.3.3 0 0 0 .29-.44L71.5 16.11a.29.29 0 0 0-.29-.19H71a.3.3 0 0 0-.28.19l-5.2 11.27a.3.3 0 0 0 .29.4zM83.33 27.78h1.56a.33.33 0 0 0 .32-.32V16.41a.33.33 0 0 0-.32-.32h-1.56a.33.33 0 0 0-.32.32V27.5a.33.33 0 0 0 .32.32M98.27 27.97a8.57 8.57 0 0 0 4.18-1.09.35.35 0 0 0 .13-.27v-4.29a.31.31 0 0 0-.3-.32h-3.23a.31.31 0 0 0-.32.32v1.33a.31.31 0 0 0 .32.3h1.34v1.42a5.32 5.32 0 0 1-2 .42 3.86 3.86 0 1 1 2.52-6.75.3.3 0 0 0 .44 0l1.05-1.09a.33.33 0 0 0 0-.47 6.4 6.4 0 0 0-4.11-1.56 6.025 6.025 0 1 0 0 12.05M110.16 27.78h1.54a.32.32 0 0 0 .32-.32v-7.2l6.9 7.57a.39.39 0 0 0 .29.11h.23a.31.31 0 0 0 .32-.3V16.41a.33.33 0 0 0-.32-.32h-1.54a.32.32 0 0 0-.32.32v6.92l-6.87-7.29a.36.36 0 0 0-.28-.11h-.26a.31.31 0 0 0-.32.3V27.5a.33.33 0 0 0 .32.32M.32 47.9h7.19a.32.32 0 0 0 .32-.31V46.2a.32.32 0 0 0-.32-.32H3.22L8 36.98a.79.79 0 0 0 .16-.48.34.34 0 0 0-.32-.32h-7a.33.33 0 0 0-.32.32v1.39a.33.33 0 0 0 .32.32H5v.06l-4.9 8.8a.86.86 0 0 0-.12.52.33.33 0 0 0 .32.31M15.23 47.9h6.85a.31.31 0 0 0 .32-.31v-1.38a.32.32 0 0 0-.32-.32h-5v-2.93h4.16a.32.32 0 0 0 .32-.32v-1.39a.33.33 0 0 0-.32-.31H17.1v-2.75h5a.32.32 0 0 0 .32-.32V36.5a.32.32 0 0 0-.32-.32h-6.87a.32.32 0 0 0-.32.32v11.09a.31.31 0 0 0 .32.31M31.65 38.19h2.75a1.67 1.67 0 0 1 1.66 1.59 1.71 1.71 0 0 1-1.66 1.71h-2.75zm-1.88 9.71h1.55a.34.34 0 0 0 .32-.32v-4.27h1.86l2.24 4.47a.29.29 0 0 0 .27.15h1.77a.32.32 0 0 0 .29-.48l-2.31-4.26a3.69 3.69 0 0 0 2.49-3.41 3.64 3.64 0 0 0-3.67-3.6h-4.81a.32.32 0 0 0-.32.32v11.08a.32.32 0 0 0 .32.32zM46.9 42.06a3.87 3.87 0 1 1 3.85 3.83 3.88 3.88 0 0 1-3.85-3.83m9.91 0a6.05 6.05 0 1 0-6.06 6 6 6 0 0 0 6.06-6" fill="#fff" fill-rule="evenodd"/></svg>
          </a>

          <a href="javascript:void(0);" id="mobile-toggle"></a>

          <div id="menu">
            <ul>
              <li><a href="#">About the Data</a></li>
              <li><a href="#">Planning Team</a></li>
              <li><a href="#">More about Campaign Zero</a></li>
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
            <h1>We evaluated every police dept in CA.</h1>
            <h2>See what grade they get.</h2>
          </div>
          <div class="left">
            <div class="map">
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
          <div class="right v-center">
            <span class="label">Overall Grade:</span>
            <span class="grade"><?= $grade ?></span>
          </div>
        </div>
      </div>

      <div class="section bg-gray stats">
        <div class="content">
          <div class="one-third">
            <h1><strong><?= $data['deadly_force_incidents'] ?></strong> deadly force incident<?= $data['deadly_force_incidents'] !== '1' ? 's' : '' ?></h1>
          <?php if(!isset($data['black_deadly_force_disparity_per_population']) || empty($data['hispanic_deadly_force_disparity_per_population'])): ?>
            <p>That’s higher than <strong><?= output(100 - round(floatval($data['percentile_of_deadly_force_incidents_per_arrest']), 1), null, '%') ?></strong> of California police departments.</p>
          <?php else: ?>
            <p>Based on population, a Black person was <strong><?= num($data['black_deadly_force_disparity_per_population'], 1, 'x') ?> more likely</strong> and a Latinx person was <strong><?= num($data['hispanic_deadly_force_disparity_per_population'], 1, 'x') ?> more likely</strong> to have deadly force used on them than a White person in <?= $data['agency_name'] ?> from 2016-17.</p>
          <?php endif; ?>
          </div>
          <div class="one-third">
            <h1><strong><?= num($data['civilian_complaints_reported']) ?></strong> civilian complaints of  police misconduct</h1>
          <?php if(num($data['civilian_complaints_sustained']) === '0'): ?>
            <p> <strong>0 complaints </strong> were ruled in favor of civilians from 2016-17.</p>
          <?php else: ?>
            <p>Only <strong>1 in every <?= num($data['civilian_complaints_sustained']) ?> complaints</strong> were sustained from 2016-17. Even <strong>fewer</strong> resulted in any discipline against the officers involved.</p>
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
          <strong class="grade grade-<?= strtolower(preg_replace('/[^A-Z]/', '', getGrade($data['police_violence_score']))) ?>">Grade: <?= getGrade($data['police_violence_score']) ?></strong>
          <span class="divider">&nbsp;|&nbsp;</span>
          <?= num($data['police_violence_score'], 0, '%') ?>
        </div>
        <div class="content">
          <div class="left">
            <div class="stat-wrapper">
              <h3>Less Lethal Force</h3>
              <p>Use of batons, tasers &amp; other weapons</p>
              <p><?= output($data['use_of_less_lethal_force']) ?> Uses of Force <span class="divider">&nbsp;|&nbsp;</span> <?= output($data['less_lethal_force_per_arrest']) ?> per arrest</p>

              <?php if(!isset($data['percent_of_less_lethal_force_per_arrest']) || (isset($data['percent_of_less_lethal_force_per_arrest']) && empty($data['percent_of_less_lethal_force_per_arrest']))): ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar" style="width: 0"></div>
                </div>
                <p class="note">City Did Not Provide Data</p>
              <?php else: ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar <?= progressBar(100 - intval($data['percent_of_less_lethal_force_per_arrest']), 'reverse') ?>" style="width: <?= output(100 - intval($data['percent_of_less_lethal_force_per_arrest']), 0, '%') ?>"></div>
                </div>
                <p class="note">More Force than <?= output(100 - intval($data['percent_of_less_lethal_force_per_arrest']), 0, '%') ?> of Depts</p>
              <?php endif; ?>
            </div>

            <div class="stat-wrapper">
              <h3>Deadly Force</h3>
              <p>Force causing death or serious injury</p>
              <p><?= output($data['deadly_force_incidents']) ?> Incidents <span class="divider">&nbsp;|&nbsp;</span> <?= output($data['deadly_force_incidents_per_arrest']) ?> per 10k arrests <span class="divider">&nbsp;|&nbsp;</span> <?= output(round((floatval($data['fatality_rate']) / 100) * intval($data['number_of_people_impacted_by_deadly_force']))) ?> deaths</p>
              <?php if(!isset($data['percentile_of_deadly_force_incidents_per_arrest']) || (isset($data['percentile_of_deadly_force_incidents_per_arrest']) && empty($data['percentile_of_deadly_force_incidents_per_arrest']))): ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar" style="width: 0"></div>
                </div>
                <p class="note">City Did Not Provide Data</p>
              <?php else: ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar <?= progressBar(100 - intval($data['percentile_of_deadly_force_incidents_per_arrest']), 'reverse') ?>" style="width: <?= output(100 - intval($data['percentile_of_deadly_force_incidents_per_arrest']), 0, '%') ?>"></div>
                </div>
                <p class="note">More Deadly Force than <?= output(100 - intval($data['percentile_of_deadly_force_incidents_per_arrest']), 0, '%') ?> of Depts</p>
              <?php endif; ?>
            </div>

            <div class="stat-wrapper">
              <h3>Where Police say they perceived a gun but no gun was found</h3>
              <p><?= num($data['people_perceived_to_have_gun']) ?> Guns Perceived <span class="divider">&nbsp;|&nbsp;</span> <?= output(round(floatval($data['people_perceived_to_have_gun'])) - round(floatval($data['people_found_to_have_gun']))) ?> Did Not Have a Gun ( <?= output(intval($data['percent_police_misperceive_the_person_to_have_gun']), 0, '%') ?> )</p>
              <?php if(!isset($data['percent_police_misperceive_the_person_to_have_gun']) || (isset($data['percent_police_misperceive_the_person_to_have_gun']) && empty($data['percent_police_misperceive_the_person_to_have_gun']))): ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar" style="width: 0"></div>
                </div>
                <p class="note">City Did Not Provide Data</p>
              <?php else: ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar always-bad" style="width: <?= output(intval($data['percent_police_misperceive_the_person_to_have_gun']), 0, '%') ?>"></div>
                </div>
                <p class="note">&nbsp;</p>
              <?php endif; ?>
            </div>
          </div>
          <div class="right">
            <div class="stat-wrapper">
              <h3>Deadly Force Victims by Armed / Unarmed Status</h3>
              <p><?= num($data['percent_used_against_people_who_were_unarmed'], 0, '%') ?> were Unarmed <span class="divider">&nbsp;|&nbsp;</span> <?= num($data['percent_used_against_people_who_were_not_armed_with_gun'], 0, '%') ?> Did Not Have a Gun</p>
              <div class="canvas-wrapper">
                <div class="canvas-label"><?= num($data['deadly_force_incidents'], 0) ?><br><span>Incidents</span></div>
                <canvas id="deadly-force-chart" width="310" height="350" style="margin: 10px auto 20px auto;"></canvas>
              </div>
            </div>

            <div class="stat-wrapper grouped">
              <h3>Deadly force victims by race</h3>

              <div class="keys">
                <span class="key race-black"></span> Black
                <span class="key race-latinx"></span> Latinx
                <span class="key race-asianpacificislander"></span> API
                <span class="key race-other"></span> Other
                <span class="key race-white"></span> White
              </div>

              <p>City Population</p>
              <div class="progress-bar-wrapper">
                <div class="progress-bar grouped race-black" style="width: <?= output(floatval($data['percent_black_population']), 0, '%') ?>">
                  <span><?= (intval($data['percent_black_population']) > 5) ? output(intval($data['percent_black_population']), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar grouped race-latinx" style="width: <?= output(floatval($data['percent_hispanic_population']), 0, '%') ?>">
                  <span><?= (intval($data['percent_hispanic_population']) > 5) ? output(intval($data['percent_hispanic_population']), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar grouped race-asianpacificislander" style="width: <?= output(floatval($data['percent_asianpacificislander_population']), 0, '%') ?>">
                  <span><?= (intval($data['percent_asianpacificislander_population']) > 5) ? output(intval($data['percent_asianpacificislander_population']), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar grouped race-other" style="width: <?= output(floatval($data['percent_other_population']), 0, '%') ?>">
                  <span><?= (intval($data['percent_other_population']) > 5) ? output(intval($data['percent_other_population']), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar grouped race-white" style="width: <?= output(floatval($data['percent_white_population']), 0, '%') ?>">
                  <span><?= (intval($data['percent_white_population']) > 5) ? output(intval($data['percent_white_population']), 0, '%') : '' ?></span>
                </div>
              </div>

              <p>Arrested</p>
              <div class="progress-bar-wrapper">
                <div class="progress-bar grouped race-black" style="width: <?= output(floatval($data['percent_black_arrests']), 0, '%') ?>">
                  <span><?= (intval($data['percent_black_arrests']) > 5) ? output(intval($data['percent_black_arrests']), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar grouped race-latinx" style="width: <?= output(floatval($data['percent_hispanic_arrests']), 0, '%') ?>">
                  <span><?= (intval($data['percent_hispanic_arrests']) > 5) ? output(intval($data['percent_hispanic_arrests']), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar grouped race-asianpacificislander" style="width: <?= output(floatval($data['percent_asianpacificislander_arrests']), 0, '%') ?>">
                  <span><?= (intval($data['percent_asianpacificislander_arrests']) > 5) ? output(intval($data['percent_asianpacificislander_arrests']), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar grouped race-other" style="width: <?= output(floatval($data['percent_other_arrests']), 0, '%') ?>">
                  <span><?= (intval($data['percent_other_arrests']) > 5) ? output(intval($data['percent_other_arrests']), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar grouped race-white" style="width: <?= output(floatval($data['percent_white_arrests']), 0, '%') ?>">
                  <span><?= (intval($data['percent_white_arrests']) > 5) ? output(intval($data['percent_white_arrests']), 0, '%') : '' ?></span>
                </div>
              </div>

              <p>Victims of Deadly Force</p>
              <div class="progress-bar-wrapper">
                <div class="progress-bar grouped race-black" style="width: <?= output(floatval($data['percent_black_deadly_force']), 0, '%') ?>">
                  <span><?= (intval($data['percent_black_deadly_force']) > 5) ? output(intval($data['percent_black_deadly_force']), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar grouped race-latinx" style="width: <?= output(floatval($data['percent_hispanic_deadly_force']), 0, '%') ?>">
                  <span><?= (intval($data['percent_hispanic_deadly_force']) > 5) ? output(intval($data['percent_hispanic_deadly_force']), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar grouped race-asianpacificislander" style="width: <?= output(floatval($data['percent_asianpacificislander_deadly_force']), 0, '%') ?>">
                  <span><?= (intval($data['percent_asianpacificislander_deadly_force']) > 5) ? output(intval($data['percent_asianpacificislander_deadly_force']), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar grouped race-other" style="width: <?= output(floatval($data['percent_other_deadly_force']), 0, '%') ?>">
                  <span><?= (intval($data['percent_other_deadly_force']) > 5) ? output(intval($data['percent_other_deadly_force']), 0, '%') : '' ?></span>
                </div>
                <div class="progress-bar grouped race-white" style="width: <?= output(floatval($data['percent_white_deadly_force']), 0, '%') ?>">
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
            Policies Adopted to Limit Use of Force
          </h1>
        </div>
        <div class="content">
          <div class="left">
            <div class="check <?= $data['requires_deescalation'] === '1' ? 'checked' : 'unchecked' ?>">
              Requires De-Escalation
            </div>
            <div class="check <?= $data['bans_chokeholds_and_strangleholds'] === '1' ? 'checked' : 'unchecked' ?>">
              Bans Chokeholds / Strangleholds
            </div>
            <div class="check <?= $data['duty_to_intervene'] === '1' ? 'checked' : 'unchecked' ?>">
              Duty to Intervene
            </div>
            <div class="check <?= $data['requires_warning_before_shooting'] === '1' ? 'checked' : 'unchecked' ?>">
              Requires Warning Before Shooting
            </div>
          </div>
          <div class="right">
            <div class="check <?= $data['restricts_shooting_at_moving_vehicles'] === '1' ? 'checked' : 'unchecked' ?>">
              Restricts Shooting at Moving Vehicles
            </div>
            <div class="check <?= $data['requires_comprehensive_reporting'] === '1' ? 'checked' : 'unchecked' ?>">
              Requires Comprehensive Reporting
            </div>
            <div class="check <?= $data['requires_exhaust_all_other_means_before_shooting'] === '1' ? 'checked' : 'unchecked' ?>">
              Requires Exhaust All Means Before Shooting
            </div>
            <div class="check <?= $data['has_use_of_force_continuum'] === '1' ? 'checked' : 'unchecked' ?>">
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
          <strong class="grade grade-<?= strtolower(preg_replace('/[^A-Z]/', '', getGrade($data['police_accountability_score']))) ?>">Grade: <?= getGrade($data['police_accountability_score']) ?></strong>
          <span class="divider">&nbsp;|&nbsp;</span>
          <?= num($data['police_accountability_score'], 0, '%') ?>
        </div>
        <div class="content">
          <div class="left">
            <div class="stat-wrapper">
              <h3>Total civilian complaints</h3>
              <p><?= output($data['civilian_complaints_reported']) ?> Reported <span class="divider">&nbsp;|&nbsp;</span> <?= output(round(floatval($data['percent_of_civilian_complaints_sustained'])), 'N/A', '%') ?> Ruled in Favor of Civilians</p>
              <?php if(!isset($data['percent_of_civilian_complaints_sustained']) || (isset($data['percent_of_civilian_complaints_sustained']) && empty($data['percent_of_civilian_complaints_sustained']))): ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar" style="width: 0"></div>
                </div>
                <p class="note">City Did Not Provide Data</p>
              <?php else: ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar <?= progressBar(100 - intval($data['percent_of_civilian_complaints_sustained']), 'reverse') ?>" style="width: <?= output(intval($data['percent_of_civilian_complaints_sustained']), 0, '%') ?>"></div>
                </div>
                <p class="note">More Accountable than <?= output(intval($data['percent_of_complaints_sustained']), 0, '%') ?> of Depts</p>
              <?php endif; ?>
            </div>

            <div class="stat-wrapper">
              <h3>Use of Force Complaints</h3>
              <p><?= output($data['use_of_force_complaints_reported']) ?> Reported <span class="divider">&nbsp;|&nbsp;</span> <?= output(round(floatval($data['percent_use_of_force_complaints_sustained'])), 'N/A', '%') ?> Ruled in Favor of Civilians</p>
              <?php if(!isset($data['percent_use_of_force_complaints_sustained']) || (isset($data['percent_use_of_force_complaints_sustained']) && empty($data['percent_use_of_force_complaints_sustained']))): ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar" style="width: 0"></div>
                </div>
                <p class="note">City Did Not Provide Data</p>
              <?php else: ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar <?= progressBar(100 - intval($data['percent_use_of_force_complaints_sustained']), 'reverse') ?>" style="width: <?= output(intval($data['percent_use_of_force_complaints_sustained']), 0, '%') ?>"></div>
                </div>
                <p class="note">&nbsp;</p>
              <?php endif; ?>
            </div>
          </div>
          <div class="right">
            <div class="stat-wrapper">
              <h3>Complaints of Police Discrimination</h3>
              <p><?= output($data['discrimination_complaints_reported']) ?> Reported <span class="divider">&nbsp;|&nbsp;</span> <?= output(round(floatval($data['percent_discrimination_complaints_sustained'])), 'N/A', '%') ?> Ruled in Favor of Civilians</p>
              <?php if(!isset($data['percent_discrimination_complaints_sustained']) || (isset($data['percent_discrimination_complaints_sustained']) && empty($data['percent_discrimination_complaints_sustained']))): ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar" style="width: 0"></div>
                </div>
                <p class="note">City Did Not Provide Data</p>
              <?php else: ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar <?= progressBar(100 - intval($data['percent_discrimination_complaints_sustained']), 'reverse') ?>" style="width: <?= output(intval($data['percent_discrimination_complaints_sustained']), 0, '%') ?>"></div>
                </div>
                <p class="note">&nbsp;</p>
              <?php endif; ?>
            </div>

            <div class="stat-wrapper">
              <h3>Alleged Crimes Committed by Police</h3>
              <p><?= output($data['criminal_complaints_reported']) ?> Reported <span class="divider">&nbsp;|&nbsp;</span> <?= output(round(floatval($data['percent_criminal_complaints_sustained'])), 'N/A', '%') ?> Ruled in Favor of Civilians</p>
              <?php if(!isset($data['percent_criminal_complaints_sustained']) || (isset($data['percent_criminal_complaints_sustained']) && empty($data['percent_criminal_complaints_sustained']))): ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar" style="width: 0"></div>
                </div>
                <p class="note">City Did Not Provide Data</p>
              <?php else: ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar <?= progressBar($data['percent_criminal_complaints_sustained'], 'reverse') ?>" style="width: <?= output(intval($data['percent_criminal_complaints_sustained']), 0, '%') ?>"></div>
                </div>
                <p class="note">&nbsp;</p>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>

      <div class="section bg-gray checklist">
        <div class="content">
          <h1 class="title">
            Policies Making It Harder to Hold Police Accountable
          </h1>
        </div>
        <div class="content">
          <div class="left">
            <div class="check <?= $data['disqualifies_complaints'] === '1' ? 'checked-bad' : 'unchecked' ?>">
              Disqualifies Complaints
            </div>
            <div class="check <?= $data['restricts_delays_interrogations'] === '1' ? 'checked-bad' : 'unchecked' ?>">
              Restricts / Delays Interrogations
            </div>
            <div class="check <?= $data['gives_officers_unfair_access_to_information'] === '1' ? 'checked-bad' : 'unchecked' ?>">
              Gives Officers Unfair Access to Information
            </div>
          </div>
          <div class="right">
            <div class="check <?= $data['limits_oversight_discipline'] === '1' ? 'checked-bad' : 'unchecked' ?>">
              Limits Oversight / Discipline
            </div>
            <div class="check <?= $data['requires_city_pay_for_misconduct'] === '1' ? 'checked-bad' : 'unchecked' ?>">
              Requires City Pay for Misconduct
            </div>
            <div class="check <?= $data['erases_misconduct_records'] === '1' ? 'checked-bad' : 'unchecked' ?>">
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
          <strong class="grade grade-<?= strtolower(preg_replace('/[^A-Z]/', '', getGrade($data['approach_to_policing_score']))) ?>">Grade: <?= getGrade($data['approach_to_policing_score']) ?></strong>
          <span class="divider">&nbsp;|&nbsp;</span>
          <?= num($data['approach_to_policing_score'], 0, '%') ?>
        </div>
        <div class="content">
          <div class="left">
            <div class="stat-wrapper">
              <h3>Arrests for Low Level Offenses</h3>
              <p><?= num(round(intval($data['total_arrests']) * intval($data['percent_misdemeanor_arrests']))) ?> Misdemeanor Arrests <span class="divider">&nbsp;|&nbsp;</span> <?= output($data['misdemeanor_arrests_per_population']) ?> per 1k residents</p>
              <?php if(!isset($data['percent_of_misdemeanor_arrests_per_population']) || (isset($data['percent_of_misdemeanor_arrests_per_population']) && empty($data['percent_of_misdemeanor_arrests_per_population']))): ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar" style="width: 0"></div>
                </div>
                <p class="note">City Did Not Provide Data</p>
              <?php else: ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar <?= progressBar(100 - intval($data['percent_of_misdemeanor_arrests_per_population']), 'reverse') ?>" style="width: <?= output(100 - intval($data['percent_of_misdemeanor_arrests_per_population']), 0, '%') ?>"></div>
                </div>
                <p class="note">Higher Misdemeanor Arrest Rate than <?= output(100 - intval($data['percent_of_misdemeanor_arrests_per_population']), 0, '%') ?> of Depts</p>
              <?php endif; ?>
            </div>

            <div class="stat-wrapper">
              <h3>Murders Unsolved</h3>
              <p><?= output($data['murders']) ?> Murders from 2013-17 <span class="divider">&nbsp;|&nbsp;</span> <?= output(100 - round(floatval($data['percent_of_murders_solved'])), null, '%') ?> Unsolved</p>
              <?php if(!isset($data['percentile_of_murders_solved']) || (isset($data['percentile_of_murders_solved']) && empty($data['percentile_of_murders_solved']))): ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar" style="width: 0"></div>
                </div>
                <p class="note">City Did Not Provide Data</p>
              <?php else: ?>
                <div class="progress-bar-wrapper">
                  <div class="progress-bar <?= progressBar(intval($data['percentile_of_murders_solved']), 'reverse') ?>" style="width: <?= output(intval($data['percentile_of_murders_solved']), 0, '%') ?>"></div>
                </div>
                <p class="note">Solved Fewer Murders than <?= output(intval($data['percentile_of_murders_solved']), 0, '%') ?> of Depts</p>
              <?php endif; ?>
            </div>
          </div>
          <div class="right">
            <div class="stat-wrapper grouped">
              <h3>Percent of Total Arrests in 2016</h3>

              <p>All Misdemeanors ( <?= output(intval($data['percent_misdemeanor_arrests']), 0, '%') ?> )</p>
              <div class="progress-bar-wrapper">
                <div class="progress-bar dark-grey" style="width: <?= output(intval($data['percent_misdemeanor_arrests']), 0, '%') ?>"></div>
              </div>

              <p>Drug Possession ( <?= output(intval($data['percent_drug_possession_arrests']), 0, '%') ?> )</p>
              <div class="progress-bar-wrapper">
                <div class="progress-bar dark-grey" style="width: <?= output(intval($data['percent_drug_possession_arrests']), 0, '%') ?>"></div>
              </div>

              <p>Violent Crime ( <?= output(intval($data['percent_violent_crime_arrests']), 0, '%') ?> )</p>
              <div class="progress-bar-wrapper">
                <div class="progress-bar dark-grey" style="width: <?= output(intval($data['percent_violent_crime_arrests']), 0, '%') ?>"></div>
              </div>
            </div>
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
                <th width="175">City</th>
                <th width="50">Grade</th>
                <th>&nbsp;</th>
              </tr>
            <?php foreach($reportCard as $index => $card): if ($index < 50): ?>
              <tr>
                <td width="175"><a href="./?city=<?= strtolower(preg_replace('/ /', '-', $card['agency_name'])) ?>"><?= $card['agency_name'] ?></a></td>
                <td width="50"><?= getGrade($card['overall_score']) ?></td>
                <td><div class="grade grade-<?= strtolower(preg_replace('/[^A-Z]/', '', getGrade($card['overall_score']))) ?>"><?= intval($card['overall_score']) ?>%</div></td>
              </tr>
            <?php endif; endforeach; ?>
            </table>
          </div>
          <div class="right">
            <table>
              <tr class="hide-mobile">
                <th width="175">City</th>
                <th width="50">Grade</th>
                <th>&nbsp;</th>
              </tr>
              <?php foreach($reportCard as $index => $card): if ($index >= 50): ?>
                <tr>
                  <td width="175"><a href="./?city=<?= strtolower(preg_replace('/ /', '-', $card['agency_name'])) ?>"><?= $card['agency_name'] ?></a></td>
                  <td width="50"><?= getGrade($card['overall_score']) ?></td>
                  <td><div class="grade grade-<?= strtolower(preg_replace('/[^A-Z]/', '', getGrade($card['overall_score']))) ?>"><?= intval($card['overall_score']) ?>%</div></td>
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
            Why are we only showing you California?
          </h1>
          <p>
            In 2015 and 2016, California legislators passed Assembly Bill 71 and Assembly Bill 953 to require law enforcement agencies to report an unprecedented amount of data - including information on police use of force, civilian complaints and other aspects of policing. Using these data, combined with information obtained through public records requests, national databases and media reports, we have built the first statewide Policing Scorecard to help communities evaluate their police departments and hold them accountable. This is a living project that will be expanded to include additional data and indicators as they become available. <a href="" target="_blank">Learn more about our methodology</a>.
          </p>
        </div>
      </div>

      <div class="section bg-gray footer">
        <div class="content"></div>
      </div>
    </div>

    <div id="modal-wrapper">
      <div class="modal">
        <a href="javascript:void(0)" id="modal-close">✖</a>
        <div id="modal-content">
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script src="assets/js/site.js?ac=1.0.0"></script>
    <script>
    window.onload = function() {
      var chart = new Chart(document.getElementById("deadly-force-chart").getContext('2d'), {
        type: 'doughnut',
        options: {
          cutoutPercentage: 75,
          animation: {
            animateRotate: false,
            animateScale: false
          }
        },
        data: {
          labels: [
            'Gun',
            'Knife/Other',
            'Unarmed'
          ],
          datasets: [
            {
              data: [
                <?= floatval($data['percent_used_against_people_who_were_unarmed']) ?>,
                <?= (floatval($data['percent_used_against_people_who_were_not_armed_with_gun']) - floatval($data['percent_used_against_people_who_were_unarmed'])) ?>,
                <?= (100 - floatval($data['percent_used_against_people_who_were_not_armed_with_gun'])) ?>
              ],
              backgroundColor:[
                '#58595b',
                '#f2f4f6',
                '#f19975'
              ],
              hoverBackgroundColor:[
                '#58595b',
                '#f2f4f6',
                '#f19975'
              ]
            }
          ]
        }
      });
    };
    </script>
  </body>
</html>
