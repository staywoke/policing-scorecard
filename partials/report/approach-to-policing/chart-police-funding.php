<?php if(isset($scorecard['report']['percentile_police_spending']) || isset($scorecard['report']['hispanic_murder_unsolved_rate']) || isset($scorecard['report']['white_murder_unsolved_rate'])): ?>
<div class="stat-wrapper spending">
  <h3>Police Funding in 2018</h3>
  <?php if ($scorecard['report']['percent_police_budget'] > 0): ?>
  <p>
    $<?= num($scorecard['police_funding']['police_budget']) ?> (<?= $scorecard['report']['percent_police_budget'] ?> of Budget)
    <span class="divider">&nbsp;|&nbsp;</span>
    $<?= num($scorecard['report']['police_spending_per_resident']) ?> per Resident
  </p>
  <?php endif; ?>

  <?= generateBarChartHeader($scorecard, $type); ?>
  <p>&nbsp;</p>
  <p>
    <canvas id="bar-chart"></canvas>
  </p>
  <p class="note">^&nbsp;More Police Funding than <?= $scorecard['report']['percentile_police_spending'] ?> of Depts &nbsp;&nbsp;</p>
</div>
<?php endif; ?>
