<?php if($scorecard['report']['percentile_police_spending']): ?>
<div class="stat-wrapper spending">
  <h3>Police Funding in 2018</h3>
  <?php if ($scorecard['report']['percent_police_budget'] > 0): ?>
  <p>
    $<?= num($scorecard['police_funding']['police_budget']) ?> (<?= num($scorecard['report']['percent_police_budget'], 0, '%') ?> of Budget)
    <span class="divider">&nbsp;|&nbsp;</span>
    $<?= num($scorecard['report']['police_spending_per_resident']) ?> per Resident
  </p>
  <?php endif; ?>

  <?= generateBarChartHeader($scorecard, $type); ?>
  <p>&nbsp;</p>
  <p>
    <canvas id="bar-chart"></canvas>
  </p>
  <p class="note">^&nbsp;More Police Funding than <?= num($scorecard['report']['percentile_police_spending'], 0, '%') ?> of Depts &nbsp;&nbsp;</p>
</div>
<?php endif; ?>
