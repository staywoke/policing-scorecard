<div class="stat-wrapper">
  <a href="javascript:void(0)" data-city="<?= $location ?>" data-more-info="" class="more-info"></a>
  <a href="https://docs.google.com/document/d/1FIeprYO7E8_2JjQzrcMNrQqqVt_YdTAoOEqmHia96sI" target="_blank" class="external-link" title="Open in New Window"></a>

  <h3>Less-Lethal Force</h3>
  <p>Using batons, strangleholds, tasers &amp; other weapons</p>
  <p>
    <?= num($scorecard['report']['total_less_lethal_force_estimated']) ?> Incidents
    <span class="divider">&nbsp;|&nbsp;</span>
    <?= output($scorecard['report']['less_lethal_per_10k_arrests']) ?> every 10k arrests
    <?php if ($scorecard['report']['less_lethal_force_change']): ?>
    <span class="divider">&nbsp;|&nbsp;</span>
    <?php endif; ?>
    <?= getChange($scorecard['report']['less_lethal_force_change']); ?>
  </p>

  <?php if (!isset($scorecard['report']['percentile_less_lethal_force']) || (isset($scorecard['report']['percentile_less_lethal_force']) && empty($scorecard['report']['percentile_less_lethal_force']))): ?>
  <div class="progress-bar-wrapper">
    <div class="progress-bar no-data" style="width: 0"></div>
  </div>
  <p class="note">City Did Not Provide Data</p>
  <?php else: ?>
  <div class="progress-bar-wrapper">
    <div class="progress-bar animate-bar <?= progressBar(100 - intval($scorecard['report']['percentile_less_lethal_force']), 'reverse') ?>" data-percent="<?= num($scorecard['report']['percentile_less_lethal_force'], 0, '%', true) ?>"></div>
  </div>
  <p class="note">^&nbsp; Used More Force per Arrest than <?= num($scorecard['report']['percentile_less_lethal_force'], 0, '%', true) ?> of Depts &nbsp;&nbsp;</p>
  <?php endif; ?>
</div>