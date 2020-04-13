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
<?php usort($stateData['police-department'], function($a, $b) { return strcmp($a['agency_name'], $b['agency_name']); }); foreach($stateData['police-department'] as $index => $department): ?>
        <li class="police-department"><a href="<?= $isProd ? $department['url_pretty'] : $department['url'] ?>"<?= ($type === 'police-department' && $location === $department['slug']) ? ' class="selected-city"' : '' ?>><?= $department['agency_name'] ?> Police</a></li>
<?php endforeach; ?>
<?php usort($stateData['sheriff'], function($a, $b) { return strcmp($a['agency_name'], $b['agency_name']); }); foreach($stateData['sheriff'] as $index => $department): ?>
        <li class="sheriff"><a href="<?= $isProd ? $department['url_pretty'] : $department['url'] ?>"<?= ($type === 'sheriff' && $location === $department['slug']) ? ' class="selected-city"' : '' ?>><?= $department['agency_name'] ?> Sheriff</a></li>
<?php endforeach; ?>
      </ul>

      <ul id="state-select">
      <?php
        foreach ($states as $key => $departments) {
          $link = generateStateLink($key, $isProd, $state);
          if (!empty($link)) {
            echo "<li>${link}</li>\n";
          }
        }
      ?>
      </ul>
    </div>
  </div>
  <div id="overlay"></div>
</div>
