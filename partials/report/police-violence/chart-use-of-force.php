<?php if (isset($scorecard['police_violence']['police_shootings_2016']) && isset($scorecard['police_violence']['police_shootings_2017']) && isset($scorecard['police_violence']['police_shootings_2018'])): ?>
<div class="stat-wrapper">
  <h3>Police Use of Force By Year</h3>
  <p>More Police Shootings per Arrest than <?= num(100 - $scorecard['police_violence']['percentile_police_shootings_per_arrest'], 0, '%') ?> of Depts</p>
  <div class="buttons">
    <a href="#" class="btn history-key-police active" onclick="SCORECARD.toggleHistory(0); return false;">
      <span class="key key-red"></span> Police Shootings
    </a>
    <a href="#" class="btn history-key-other" onclick="SCORECARD.toggleHistory(1); return false;">
      <span class="key key-black"></span> Other Police Weapons
    </a>
  </div>
  <p>
    <canvas id="bar-chart-history"></canvas>
  </p>
</div>
<?php endif; ?>
