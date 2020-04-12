<div class="stat-wrapper grouped">
  <a href="javascript:void(0)" data-city="<?= $location ?>" data-more-info="" class="more-info"></a>
  <a href="https://github.com/campaignzero/ca-police-scorecard/blob/master/ca_police_scorecard.ipynb" target="_blank" class="external-link" title="Open in New Window"></a>

  <h3>Police Violence by race</h3>

  <div class="keys">
    <span class="key key-red"></span> Black
    <span class="key key-orange"></span> Latinx
    <span class="key key-black"></span> API
    <span class="key key-grey"></span> Other
    <span class="key key-white"></span> White
  </div>

  <p>City Population</p>
  <div class="progress-bar-wrapper">
    <div class="progress-bar animate-bar grouped key-red" data-percent="<?= output(floatval($scorecard['agency']['black_population']), 0, '%') ?>">
      <span><?= (intval($scorecard['agency']['black_population']) > 5) ? output(intval($scorecard['agency']['black_population']), 0, '%') : '' ?></span>
    </div>
    <div class="progress-bar animate-bar grouped key-orange" data-percent="<?= output(floatval($scorecard['agency']['hispanic_population']), 0, '%') ?>">
      <span><?= (intval($scorecard['agency']['hispanic_population']) > 5) ? output(intval($scorecard['agency']['hispanic_population']), 0, '%') : '' ?></span>
    </div>
    <div class="progress-bar animate-bar grouped key-black" data-percent="<?= output(floatval($scorecard['agency']['asian_pacific_population']), 0, '%') ?>">
      <span><?= (intval($scorecard['agency']['asian_pacific_population']) > 5) ? output(intval($scorecard['agency']['asian_pacific_population']), 0, '%') : '' ?></span>
    </div>
    <div class="progress-bar animate-bar grouped key-grey" data-percent="<?= output(floatval($scorecard['agency']['other_population']), 0, '%') ?>">
      <span><?= (intval($scorecard['agency']['other_population']) > 5) ? output(intval($scorecard['agency']['other_population']), 0, '%') : '' ?></span>
    </div>
    <div class="progress-bar animate-bar grouped key-white" data-percent="<?= output(floatval($scorecard['agency']['white_population']), 0, '%') ?>">
      <span><?= (intval($scorecard['agency']['white_population']) > 5) ? output(intval($scorecard['agency']['white_population']), 0, '%') : '' ?></span>
    </div>
  </div>

  <p>People Arrested</p>
  <div class="progress-bar-wrapper">
    <div class="progress-bar animate-bar grouped key-red" data-percent="<?= output(floatval($scorecard['report']['percent_black_arrests']), 0, '%') ?>">
      <span><?= (intval($scorecard['report']['percent_black_arrests']) > 5) ? output(intval($scorecard['report']['percent_black_arrests']), 0, '%') : '' ?></span>
    </div>
    <div class="progress-bar animate-bar grouped key-orange" data-percent="<?= output(floatval($scorecard['report']['percent_hispanic_arrests']), 0, '%') ?>">
      <span><?= (intval($scorecard['report']['percent_hispanic_arrests']) > 5) ? output(intval($scorecard['report']['percent_hispanic_arrests']), 0, '%') : '' ?></span>
    </div>
    <div class="progress-bar animate-bar grouped key-black" data-percent="<?= output(floatval($scorecard['report']['percent_asian_pacific_arrests']), 0, '%') ?>">
      <span><?= (intval($scorecard['report']['percent_asian_pacific_arrests']) > 5) ? output(intval($scorecard['report']['percent_asian_pacific_arrests']), 0, '%') : '' ?></span>
    </div>
    <div class="progress-bar animate-bar grouped key-grey" data-percent="<?= output(floatval($scorecard['report']['percent_other_arrests']), 0, '%') ?>">
      <span><?= (intval($scorecard['report']['percent_other_arrests']) > 5) ? output(intval($scorecard['report']['percent_other_arrests']), 0, '%') : '' ?></span>
    </div>
    <div class="progress-bar animate-bar grouped key-white" data-percent="<?= output(floatval($scorecard['report']['percent_white_arrests']), 0, '%') ?>">
      <span><?= (intval($scorecard['report']['percent_white_arrests']) > 5) ? output(intval($scorecard['report']['percent_white_arrests']), 0, '%') : '' ?></span>
    </div>
  </div>

  <p>People Killed</p>
  <div class="progress-bar-wrapper">
    <div class="progress-bar animate-bar grouped key-red" data-percent="<?= output($scorecard['report']['percent_black_deadly_force'], 0, '%') ?>">
      <span><?= ($scorecard['report']['percent_black_deadly_force'] > 5) ? output($scorecard['report']['percent_black_deadly_force'], 0, '%') : '' ?></span>
    </div>
    <div class="progress-bar animate-bar grouped key-orange" data-percent="<?= output($scorecard['report']['percent_hispanic_deadly_force'], 0, '%') ?>">
      <span><?= ($scorecard['report']['percent_hispanic_deadly_force'] > 5) ? output($scorecard['report']['percent_hispanic_deadly_force'], 0, '%') : '' ?></span>
    </div>
    <div class="progress-bar animate-bar grouped key-black" data-percent="<?= output($scorecard['report']['percent_asian_pacific_islander_deadly_force'], 0, '%') ?>">
      <span><?= ($scorecard['report']['percent_asian_pacific_islander_deadly_force'] > 5) ? output($scorecard['report']['percent_asian_pacific_islander_deadly_force'], 0, '%') : '' ?></span>
    </div>
    <div class="progress-bar animate-bar grouped key-grey" data-percent="<?= output($scorecard['report']['percent_other_deadly_force'], 0, '%') ?>">
      <span><?= ($scorecard['report']['percent_other_deadly_force'] > 5) ? output($scorecard['report']['percent_other_deadly_force'], 0, '%') : '' ?></span>
    </div>
    <div class="progress-bar animate-bar grouped key-white" data-percent="<?= output($scorecard['report']['percent_white_deadly_force'], 0, '%') ?>">
      <span><?= ($scorecard['report']['percent_white_deadly_force'] > 5) ? output($scorecard['report']['percent_white_deadly_force'], 0, '%') : '' ?></span>
    </div>
  </div>

  <p class="note" style="margin-top: 0">^&nbsp; More Racial Bias in Arrests and Deadly Force than <?= num((1 - intval($scorecard['report']['percentile_overall_disparity_index'])), 0, '%', true) ?> of Depts &nbsp;&nbsp;</p>
</div>