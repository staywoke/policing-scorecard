<div class="stat-wrapper">
  <a href="javascript:void(0)" data-city="<?= $location ?>" data-more-info="" class="more-info" title="More Info ..."></a>

  <h3>Use of Force Complaints</h3>

  <?php if (output($scorecard['police_accountability']['use_of_force_complaints_reported']) === '0'): ?>
  <p>0 Complaints Reported &nbsp;|&nbsp; 0% Ruled in Favor of Civilians</p>
  <div class="progress-bar-wrapper">
    <div class="progress-bar bright-green" style="width: 0"></div>
  </div>
  <p class="note">&nbsp;</p>
  <?php elseif (!isset($scorecard['report']['percent_use_of_force_complaints_sustained']) || (isset($scorecard['report']['percent_use_of_force_complaints_sustained']) && empty($scorecard['report']['percent_use_of_force_complaints_sustained']))): ?>
  <p>
    <?= num($scorecard['police_accountability']['use_of_force_complaints_reported']) ?> Reported
    <span class="divider">&nbsp;|&nbsp;</span>
    <?= num($scorecard['report']['percent_use_of_force_complaints_sustained'], 0, '%') ?> Ruled in Favor of Civilians
  </p>
  <div class="progress-bar-wrapper">
    <div class="progress-bar no-data" style="width: 0"></div>
  </div>
  <p class="note">City Did Not Provide Data</p>
  <?php else: ?>
  <p>
    <?= num($scorecard['police_accountability']['use_of_force_complaints_reported']) ?> Reported
    <span class="divider">&nbsp;|&nbsp;</span>
    <?= num($scorecard['report']['percent_use_of_force_complaints_sustained'], 0, '%') ?> Ruled in Favor of Civilians
  </p>
  <div class="progress-bar-wrapper">
    <div class="progress-bar animate-bar <?= progressBar(100 - intval($scorecard['report']['percent_use_of_force_complaints_sustained']), 'reverse') ?>" data-percent="<?= output(intval($scorecard['report']['percent_use_of_force_complaints_sustained']), 0, '%') ?>">
    </div>
  </div>
  <p class="note">&nbsp;</p>
  <?php endif; ?>
</div>