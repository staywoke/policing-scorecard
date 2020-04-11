<div class="section bg-dotted current-state">
  <div class="content">
    <span class="state-symbol">z</span>
    USA
  </div>
</div>

<div class="section hero">
  <div class="content">
    <div class="right">
      <h1>We evaluated the police in <?= $stateName ?>.</h1>
      <h2>Read the <a href="./findings" style="color: #82add7; text-decoration: underline; font-weight: 500;">Findings.</a> See the Grade for Each Department.</h2>
      <div class="buttons">
        <a href="<?= $isProd ? $stateData['police-department'][0]['url_pretty'] : $stateData['police-department'][0]['url'] ?>" class="btn <?= $type === 'police-department' ? 'active' : '' ?>">Police Depts</a>
        <a href="<?= $isProd ? $stateData['sheriff'][0]['url_pretty'] : $stateData['sheriff'][0]['url'] ?>" class="btn <?= $type === 'sheriff' ? 'active' : '' ?>">Sheriffs Depts</a>
      </div>
    </div>
    <div class="left">
      <div class="map" id="map-layer">
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

        <div id="state-map" class="<?= $type ?> <?= $location ?>"></div>
      </div>
    </div>
    <div class="clear">&nbsp;</div>
  </div>
</div>