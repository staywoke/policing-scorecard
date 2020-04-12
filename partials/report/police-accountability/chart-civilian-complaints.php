<div class="stat-wrapper">
  <a href="javascript:void(0)" data-city="<?= $location ?>" data-more-info="" class="more-info"></a>

  <h3>Total civilian complaints</h3>

  <?php if (output($scorecard['police_accountability']['civilian_complaints_reported']) === '0' || output($scorecard['report']['complaints_sustained']) === '0'): ?>
  <p>0 Complaints Reported</p>
  <?php else: ?>
  <p>
    <?= output($scorecard['police_accountability']['civilian_complaints_reported']) ?> Reported
    <span class="divider">&nbsp;|&nbsp;</span>
    <?= num($scorecard['report']['complaints_sustained'], 0, '%') ?> Ruled in Favor of Civilians
  </p>
  <?php endif; ?>

  <?php if (!isset($scorecard['report']['complaints_sustained']) || (isset($scorecard['report']['complaints_sustained']) && empty($scorecard['report']['complaints_sustained']))): ?>
  <div class="progress-bar-wrapper">
    <div class="progress-bar no-data" style="width: 0"></div>
  </div>
  <p class="note">&nbsp;</p>
  <?php else: ?>
  <div class="progress-bar-wrapper">
    <div class="progress-bar animate-bar <?= progressBar(100 - intval($scorecard['report']['complaints_sustained']), 'reverse') ?>" data-percent="<?= output(intval($scorecard['report']['complaints_sustained']), 0, '%') ?>"></div>
  </div>
  <p class="note">&nbsp;</p>
  <?php endif; ?>
</div>