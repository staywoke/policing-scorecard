<?php if(isset($placeholder['total_ice_transfers']) && isset($placeholder['percent_violent_transfers']) && isset($placeholder['percent_drug_transfers']) && isset($placeholder['percent_other_transfers'])): ?>
<div class="stat-wrapper">
  <a href="javascript:void(0)" data-city="<?= $location ?>" data-more-info="" class="more-info"></a>
  <h3>People Transferred to ICE in 2018</h3>

  <p><?= num(round(intval(str_replace(',', '', $placeholder['total_ice_transfers'])))) ?> people were transferred to ICE</p>

  <p class="keys">
    <span class="key key-red"></span> Violent Crime
    <span class="key key-orange"></span> Drug Offenses
    <span class="key key-black"></span> Other
  </p>

  <div class="progress-bar-wrapper">
    <div class="progress-bar animate-bar grouped key-red" data-percent="<?= output(floatval($placeholder['percent_violent_transfers']), 0, '%') ?>">
      <span><?= (intval($placeholder['percent_violent_transfers']) > 5) ? output(intval($placeholder['percent_violent_transfers']), 0, '%') : '' ?></span>
    </div>
    <div class="progress-bar animate-bar grouped key-orange" data-percent="<?= output(floatval($placeholder['percent_drug_transfers']), 0, '%') ?>">
      <span><?= (intval($placeholder['percent_drug_transfers']) > 5) ? output(intval($placeholder['percent_drug_transfers']), 0, '%') : '' ?></span>
    </div>
    <div class="progress-bar animate-bar grouped key-black" data-percent="<?= output(floatval($placeholder['percent_other_transfers']), 0, '%') ?>">
      <span><?= (intval($placeholder['percent_other_transfers']) > 5) ? output(intval($placeholder['percent_other_transfers']), 0, '%') : '' ?></span>
    </div>
  </div>
</div>
<?php endif; ?>
