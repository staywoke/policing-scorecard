<?php if(num(round(intval(str_replace(',', '', $scorecard['report']['total_jail_deaths_2016_2018'])))) !== 'N/A'): ?>
<div class="stat-wrapper">
  <a href="javascript:void(0)" data-city="<?= $location ?>" data-more-info="" class="more-info"></a>
  <h3>Deaths in Jail</h3>

  <p>
    <?= num(round(intval(str_replace(',', '', $scorecard['report']['total_jail_deaths_2016_2018'])))) ?> Deaths
    <span class="divider">&nbsp;|&nbsp;</span>
    <?= output($scorecard['report']['jail_deaths_per_1k_jail_population']) ?> per 1k Jail Population
  </p>

  <p class="keys">
    <span class="key key-red"></span> Homicide
    <span class="key key-orange"></span> Suicide
    <span class="key key-black"></span> Other
    <span class="key key-grey"></span> Investigating
  </p>

  <div class="progress-bar-wrapper">
    <div class="progress-bar animate-bar grouped key-red" data-percent="<?= output(floatval(round((intval($placeholder['jail_death_homicide_willful']) / intval($scorecard['report']['total_jail_deaths_2016_2018'])) * 100)), 0, '%') ?>">
      <span><?= (intval(round((intval($placeholder['jail_death_homicide_willful']) / intval($scorecard['report']['total_jail_deaths_2016_2018'])) * 100)) > 5) ? output(round((intval($placeholder['jail_death_homicide_willful']) / intval($scorecard['report']['total_jail_deaths_2016_2018'])) * 100), 0, '%') : '' ?></span>
    </div>
    <div class="progress-bar animate-bar grouped key-orange" data-percent="<?= output(floatval(round((intval($placeholder['jail_death_suicide']) / intval($scorecard['report']['total_jail_deaths_2016_2018'])) * 100)), 0, '%') ?>">
      <span><?= (intval(round((intval($placeholder['jail_death_suicide']) / intval($scorecard['report']['total_jail_deaths_2016_2018'])) * 100)) > 5) ? output(round((intval($placeholder['jail_death_suicide']) / intval($scorecard['report']['total_jail_deaths_2016_2018'])) * 100), 0, '%') : '' ?></span>
    </div>
    <div class="progress-bar animate-bar grouped key-grey" data-percent="<?= output(floatval(round((intval($placeholder['jail_death_pending_investigation']) / intval($scorecard['report']['total_jail_deaths_2016_2018'])) * 100)), 0, '%') ?>">
      <span><?= (intval(round((intval($placeholder['jail_death_pending_investigation']) / intval($scorecard['report']['total_jail_deaths_2016_2018'])) * 100)) > 5) ? output(round((intval($placeholder['jail_death_pending_investigation']) / intval($scorecard['report']['total_jail_deaths_2016_2018'])) * 100), 0, '%') : '' ?></span>
    </div>
    <div class="progress-bar animate-bar grouped key-white" data-percent="<?= output(floatval(round(((intval($placeholder['jail_death_natural']) + intval($placeholder['jail_death_accidental']) + intval($placeholder['jail_death_cannot_be_determined'])) / intval($scorecard['report']['total_jail_deaths_2016_2018'])) * 100)), 0, '%') ?>">
      <span><?= (intval(round(((intval($placeholder['jail_death_natural']) + intval($placeholder['jail_death_accidental']) + intval($placeholder['jail_death_cannot_be_determined'])) / intval($scorecard['report']['total_jail_deaths_2016_2018'])) * 100)) > 5) ? output(round(((intval($placeholder['jail_death_natural']) + intval($placeholder['jail_death_accidental']) + intval($placeholder['jail_death_cannot_be_determined'])) / intval($scorecard['report']['total_jail_deaths_2016_2018'])) * 100), 0, '%') : '' ?></span>
    </div>
  </div>

  <p class="note">^&nbsp;Higher Rate of Jail Deaths than <?= num($placeholder['percent_jail_deaths_per_1000_jail_population_table'], 0, '%', true) ?> of Depts &nbsp;&nbsp;</p>
</div>
<?php endif; ?>

<?php if(isset($placeholder['adult_jail_population'])): ?>
<div class="stat-wrapper no-border-mobile">
  <h3>Jail Incarceration rate</h3>
  <p>
    <?= num(round(intval(str_replace(',', '', $placeholder['adult_jail_population'])))) ?> Avg Daily Jail Population <span class="divider">&nbsp;|&nbsp;</span> <?= output($placeholder['jail_population_per_1k']) ?> per 1k residents
  </p>
  <?php if(!isset($placeholder['percent_jail_deaths_per_1000_jail_population_table']) || (isset($placeholder['percent_jail_deaths_per_1000_jail_population_table']) && empty($placeholder['percent_jail_deaths_per_1000_jail_population_table']))): ?>
  <div class="progress-bar-wrapper">
    <div class="progress-bar no-data" style="width: 0"></div>
  </div>
  <p class="note">City Did Not Provide Data</p>
  <?php else: ?>
  <div class="progress-bar-wrapper">
    <div class="progress-bar animate-bar <?= progressBar(100 - intval($placeholder['percent_jail_deaths_per_1000_jail_population_table']), 'reverse') ?>" data-percent="<?= output(100 - intval($placeholder['percent_jail_deaths_per_1000_jail_population_table']), 0, '%') ?>"></div>
  </div>
  <p class="note">^&nbsp; More than <?= num($placeholder['percent_jail_deaths_per_1000_jail_population_table'], 0, '%', true) ?> of Sheriff's Depts&nbsp;&nbsp;</p>
  <?php endif; ?>
</div>
<?php endif; ?>
