<?php if ($scorecard['report']['police_shootings_incidents'] && $scorecard['report']['percent_shot_first']): ?>
<div class="stat-wrapper">
  <a href="javascript:void(0)" data-city="<?= $location ?>" data-more-info="" class="more-info" title="More Info ..."></a>
  <h3>Police Shootings Where Police Did Not Try Non-Deadly Force Before Shooting</h3>
  <p><?= num((($scorecard['police_violence']['shot_first'] / $scorecard['report']['police_shootings_incidents'])*100), 0, '%') ?> of Shootings
    (<?= $scorecard['police_violence']['shot_first'] ?>/<?= $scorecard['report']['police_shootings_incidents'] ?>)
  </p>
  <?php if (!isset($scorecard['report']['percent_shot_first']) || (isset($scorecard['report']['percent_shot_first']) && empty($scorecard['report']['percent_shot_first']))): ?>
  <div class="progress-bar-wrapper">
    <div class="progress-bar no-data" style="width: 0"></div>
  </div>
  <?php else: ?>
  <div class="progress-bar-wrapper">
    <div
      class="progress-bar animate-bar <?= (intval($scorecard['report']['percent_shot_first']) === 0) ? 'bright-green' : 'always-bad' ?>"
      data-percent="<?= output(intval($scorecard['report']['percent_shot_first']), 0, '%') ?>"></div>
  </div>
  <?php endif; ?>

  <?php if (strtolower($state) === 'ca'): ?>
  <p class="source-link-wrapper">Source: <a href="https://openjustice.doj.ca.gov/data" class="source-link" target="_blank">CA Department of Justice</a></p>
  <?php endif; ?>
</div>
<?php endif; ?>
