<div class="section bg-dotted current-state">
  <div class="content">
    <a href="javascript:void(0);" id="state-selection">
      <span class="state-symbol">z</span>
      Nationwide
    </a>
  </div>
</div>

<div class="section hero pad">
  <div class="content">
    <div class="header-intro">
      <h1>We evaluated America's <?= getNationalTotal($states) ?> largest police departments.</h1>
      <h2>Read the <a href="/findings" style="color: #82add7; text-decoration: underline; font-weight: 500;">Findings.</a> See the Grade for Each Department.</h2>
      <div class="buttons">
        <a href="<?= $isProd ? '/us/police-department' : '/?type=police-department' ?>" class="btn <?= $type === 'police-department' ? 'active' : '' ?>">Police Depts</a>
        <a href="<?= $isProd ? '/us/sheriff' : '/?type=sheriff' ?>" class="btn <?= $type === 'sheriff' ? 'active' : '' ?>">Sheriffs Depts</a>
      </div>
    </div>

    <div class="map" id="usa-map-layer">
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
        <i class="fa fa-spinner fa-spin"></i>&nbsp; Loading <?= getNationalTotalByType($states, $type) ?> Departments ...
      </div>
      <div id="usa-map" class="<?= $type ?> <?= $location ?>"></div>
      <div id="usa-map-shadow" class="<?= $type ?> <?= $location ?>"></div>

      <div id="static-map" class="<?= $type ?>"></div>
    </div>
  </div>
</div>
