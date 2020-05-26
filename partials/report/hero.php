<div class="section bg-dotted current-state">
  <div class="content">
    <a href="javascript:void(0);" id="state-selection">
      <span class="state-symbol"><?= getStateIcon($stateCode) ?></span>
      <?= $stateName ?>
    </a>
  </div>
</div>

<div class="section hero">
  <div class="content">
    <div class="right">
      <h1>We evaluated <?= getStateTotal($states, $stateCode) ?> of <?= $stateName ?>'s largest police departments.</h1>

      <h2>Read the <a href="/findings" style="color: #82add7; text-decoration: underline; font-weight: 500;">Findings.</a> See the Grade for Each Department.</h2>
      <?php if (isset($stateData['police-department']) && isset($stateData['sheriff']) && count($stateData['police-department']) > 0 && count($stateData['sheriff']) > 0): ?>
      <div class="buttons">
        <a href="<?= $isProd ? $stateData['police-department'][0]['url_pretty'] : $stateData['police-department'][0]['url'] ?>" class="btn <?= $type === 'police-department' ? 'active' : '' ?>">Police Depts</a>
        <a href="<?= $isProd ? $stateData['sheriff'][0]['url_pretty'] : $stateData['sheriff'][0]['url'] ?>" class="btn <?= $type === 'sheriff' ? 'active' : '' ?>">Sheriffs Depts</a>
      </div>
      <?php endif; ?>
    </div>
    <div class="left">
      <div class="map" id="state-map-layer">
        <svg style="position: absolute; left: -10000px; top: -10000px;">
          <defs>
            <filter id="drop-shadow">
              <feOffset dx='0' dy='0' />
              <feGaussianBlur stdDeviation='2' result='offset-blur' />
              <feComposite operator='out' in='SourceGraphic' in2='offset-blur' result='inverse' />
              <feFlood flood-color='black' flood-opacity='1' result='color' />
              <feComposite operator='in' in='color' in2='inverse' result='shadow' />
              <feComposite operator='over' in='shadow' in2='SourceGraphic' />
            </filter>
          </defs>
        </svg>

        <div id="map-loading">
          <i class="fa fa-spinner fa-spin"></i>&nbsp; Loading Map ...
        </div>
        <div id="state-map" class="<?= $type ?> <?= $location ?>"></div>
        <div id="state-map-shadow" class="<?= $type ?> <?= $location ?>"></div>
      </div>
    </div>
    <div class="clear">&nbsp;</div>
  </div>
</div>