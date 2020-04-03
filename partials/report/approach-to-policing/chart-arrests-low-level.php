<div class="stat-wrapper no-border-mobile">
  <a href="javascript:void(0)" data-city="<?= $location ?>" data-more-info="" class="more-info"></a>
  <h3>Arrests for Low Level Offenses</h3>

  <p>
    <?= num(round(intval(str_replace(',', '', $scorecard['report']['total_arrests'])) * (intval($scorecard['report']['percent_misdemeanor_arrests']) / 100))) ?>
    Misdemeanor Arrests
    <span class="divider">&nbsp;|&nbsp;</span>
    <?= output($scorecard['report']['low_level_arrests_per_1k_population']) ?> per 1k residents
  </p>

  <?php if(!isset($scorecard['report']['percentile_low_level_arrests_per_1k_population']) || (isset($scorecard['report']['percentile_low_level_arrests_per_1k_population']) && empty($scorecard['report']['percentile_low_level_arrests_per_1k_population']))): ?>
  <div class="progress-bar-wrapper">
    <div class="progress-bar no-data" style="width: 0"></div>
  </div>
  <p class="note">City Did Not Provide Data</p>
  <?php else: ?>
  <div class="progress-bar-wrapper">
    <div class="progress-bar animate-bar <?= progressBar(100 - intval($scorecard['report']['percentile_low_level_arrests_per_1k_population']), 'reverse') ?>" data-percent="<?= output(100 - intval($scorecard['report']['percentile_low_level_arrests_per_1k_population']), 0, '%') ?>"></div>
  </div>
  <p class="note">^&nbsp; Higher Misdemeanor Arrest Rate than <?= num($scorecard['report']['percentile_low_level_arrests_per_1k_population'], 0, '%', true) ?> of Depts &nbsp;&nbsp;</p>
  <?php endif; ?>
</div>