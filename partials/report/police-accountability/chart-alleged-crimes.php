<div class="stat-wrapper">
  <a href="javascript:void(0)" data-city="<?= $location ?>" data-more-info="" class="more-info"></a>
  <h3>Alleged Crimes Committed by Police</h3>

  <?php if (num($scorecard['police_accountability']['criminal_complaints_reported']) === '0'): ?>
  <p>0 Complaints Reported</p>
  <div class="progress-bar-wrapper">
    <div class="progress-bar bright-green" style="width: 0"></div>
  </div>
  <p class="note">&nbsp;</p>
  <?php else: ?>
    <p>
      <?= num($scorecard['police_accountability']['criminal_complaints_reported']) ?> Reported
      <span class="divider">&nbsp;|&nbsp;</span>
      <?= output($scorecard['report']['percent_criminal_complaints_sustained'], 0, '') ?> Ruled in Favor of Civilians
    </p>
    <?php if(num($scorecard['police_accountability']['criminal_complaints_reported']) !== '0' && (!isset($scorecard['report']['percent_criminal_complaints_sustained']) || (isset($scorecard['report']['percent_criminal_complaints_sustained']) && empty($scorecard['report']['percent_criminal_complaints_sustained'])))): ?>
    <div class="progress-bar-wrapper">
      <div class="progress-bar no-data" style="width: 0"></div>
    </div>
    <p class="note">City Did Not Provide Data</p>
    <?php else: ?>
    <div class="progress-bar-wrapper">
      <div class="progress-bar animate-bar <?= progressBar(intval($scorecard['report']['percent_criminal_complaints_sustained'])) ?>" data-percent="<?= output(intval($scorecard['report']['percent_criminal_complaints_sustained']), 0, '%') ?>"></div>
    </div>
    <p class="note">&nbsp;</p>
    <?php endif; ?>
  <?php endif; ?>
</div>