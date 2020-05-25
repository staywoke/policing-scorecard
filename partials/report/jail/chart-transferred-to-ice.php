<?php
$drug_ice_transfers = isset($scorecard['jail']['drug_ice_transfers']) ? $scorecard['jail']['drug_ice_transfers'] : 0;
$other_ice_transfers = isset($scorecard['jail']['other_ice_transfers']) ? $scorecard['jail']['other_ice_transfers'] : 0;
$violent_ice_transfers = isset($scorecard['jail']['violent_ice_transfers']) ? $scorecard['jail']['violent_ice_transfers'] : 0;

$total_ice_transfers = ($drug_ice_transfers + $other_ice_transfers + $violent_ice_transfers);
$percent_drug_transfers = ($drug_ice_transfers / $total_ice_transfers) * 100;
$percent_violent_transfers = ($violent_ice_transfers / $total_ice_transfers) * 100;
$percent_other_transfers = ($other_ice_transfers / $total_ice_transfers) * 100;
?>
<?php if ($total_ice_transfers && $percent_drug_transfers && $percent_drug_transfers && $percent_other_transfers): ?>
<div class="stat-wrapper">
  <a href="javascript:void(0)" data-city="<?= $location ?>" data-more-info="" class="more-info" title="More Info ..."></a>
  <h3>People Transferred to ICE in 2018</h3>

  <p><?= num($total_ice_transfers) ?> people were transferred to ICE</p>

  <p class="keys">
    <span class="key key-red"></span> Violent Crime
    <span class="key key-orange"></span> Drug Offenses
    <span class="key key-black"></span> Other
  </p>

  <div class="progress-bar-wrapper">
    <div class="progress-bar animate-bar grouped key-red" data-percent="<?= output(floatval($percent_violent_transfers), 0, '%') ?>">
      <span><?= (intval($percent_violent_transfers) > 5) ? num(intval($percent_violent_transfers), 0, '%') : '' ?></span>
    </div>
    <div class="progress-bar animate-bar grouped key-orange" data-percent="<?= output(floatval($percent_drug_transfers), 0, '%') ?>">
      <span><?= (intval($percent_drug_transfers) > 5) ? num(intval($percent_drug_transfers), 0, '%') : '' ?></span>
    </div>
    <div class="progress-bar animate-bar grouped key-black" data-percent="<?= output(floatval($percent_other_transfers), 0, '%') ?>">
      <span><?= (intval($percent_other_transfers) > 5) ? num(intval($percent_other_transfers), 0, '%') : '' ?></span>
    </div>
  </div>
</div>
<?php endif; ?>
