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