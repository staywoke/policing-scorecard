<div class="stat-wrapper grouped">
  <a href="javascript:void(0)" data-city="<?= $location ?>" data-more-info="" class="more-info"></a>
  <h3>Percent of total arrests by type</h3>

  <p>All Misdemeanors ( <?= num($scorecard['report']['percent_misdemeanor_arrests'], 0, '%') ?> )</p>
  <div class="progress-bar-wrapper">
    <div class="progress-bar animate-bar dark-grey" data-percent="<?= output(intval($scorecard['report']['percent_misdemeanor_arrests']), 0, '%') ?>"></div>
  </div>

  <p>Drug Possession ( <?= num($scorecard['report']['percent_drug_possession_arrests'], 0, '%') ?> )</p>
  <div class="progress-bar-wrapper">
    <div class="progress-bar animate-bar dark-grey" data-percent="<?= output(intval($scorecard['report']['percent_drug_possession_arrests']), 0, '%') ?>"></div>
  </div>

  <p>Violent Crime ( <?= num($scorecard['report']['percent_violent_crime_arrests'], 0, '%') ?> )</p>
  <div class="progress-bar-wrapper">
    <div class="progress-bar animate-bar dark-grey" data-percent="<?= output(intval($scorecard['report']['percent_violent_crime_arrests']), 0, '%') ?>"></div>
  </div>
</div>