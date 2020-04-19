<?php if (isset($scorecard['police_violence']['police_shootings_2016']) && isset($scorecard['police_violence']['police_shootings_2017']) && isset($scorecard['police_violence']['police_shootings_2018'])): ?>
<div class="stat-wrapper">
  <h3>Police Use of Force By Year</h3>
  <div class="buttons" style="text-align: center; margin-top: 18px; display: block;">
    <a href="#" class="btn history-key-police active" onclick="SCORECARD.toggleHistory(0); return false;">
      <span class="key key-red"></span> Police Shootings
    </a>
    <a href="#" class="btn history-key-other" onclick="SCORECARD.toggleHistory(1); return false;">
      <span class="key key-black"></span> Other Police Weapons
    </a>
  </div>
  <p>
    <canvas id="bar-chart-history" style="margin: 0 auto;"></canvas>
  </p>
</div>
<?php endif; ?>