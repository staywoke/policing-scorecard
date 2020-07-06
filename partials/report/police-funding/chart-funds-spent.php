<?php if ($scorecard['police_funding']['average_annual_misconduct_settlements']): ?>
<div class="stat-wrapper">
  <a href="javascript:void(0)" data-city="<?= $location ?>" data-more-info="" class="more-info" title="More Info ..."></a>
  <h3>Funds Spent in Misconduct Settlements</h3>
  <p>
    <?= nFormatter($scorecard['police_funding']['average_annual_misconduct_settlements'], 0) ?> per year from <?= $scorecard['police_funding']['year_misconduct_settlement_data'] ?>
    <span class="divider">&nbsp;|&nbsp;</span>
    <?= num($scorecard['police_funding']['misconduct_settlements_per_10k_population']) ?> per 10k population
  </p>

  <?php if (!isset($scorecard['police_funding']['percentile_misconduct_settlements_per_population']) || (isset($scorecard['police_funding']['percentile_misconduct_settlements_per_population']) && empty($scorecard['police_funding']['percentile_misconduct_settlements_per_population']))): ?>
  <div class="progress-bar-wrapper">
    <div class="progress-bar no-data" style="width: 0"></div>
  </div>
  <?php else: ?>
  <div class="progress-bar-wrapper">
    <div class="progress-bar animate-bar <?= (intval($scorecard['police_funding']['percentile_misconduct_settlements_per_population']) < 50) ? 'bright-green' : 'always-bad' ?>" data-percent="<?= output(intval($scorecard['police_funding']['percentile_misconduct_settlements_per_population']), 0, '%') ?>"></div>
  </div>
  <?php endif; ?>

  <p class="note" style="margin-top: 0">^&nbsp; More Spending due to Misconduct than <?= num($scorecard['police_funding']['percentile_misconduct_settlements_per_population'], 0, '%', true) ?> of Depts &nbsp;&nbsp;</p>

  <?php if ($scorecard['police_funding']['misconduct_settlement_source']): ?>
  <p class="source-link-wrapper">Source: <a href="<?= $scorecard['police_funding']['misconduct_settlement_source'] ?>" class="source-link" target="_blank">UCLA Law Review</a></p>
  <?php endif; ?>
</div>
<?php endif; ?>


