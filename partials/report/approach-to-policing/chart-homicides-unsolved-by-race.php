<?php if(isset($scorecard['report']['black_murder_unsolved_rate']) || isset($scorecard['report']['hispanic_murder_unsolved_rate']) || isset($scorecard['report']['white_murder_unsolved_rate'])): ?>
<div class="stat-wrapper grouped">
  <a href="javascript:void(0)" data-city="<?= $location ?>" data-more-info="" class="more-info"></a>
  <h3>Percent of Homicides Unsolved by Race</h3>

  <?php if(isset($scorecard['report']['black_murder_unsolved_rate']) && !empty($scorecard['report']['black_murder_unsolved_rate'])): ?>
  <p>Homicides of Black Victims Unsolved ( <?= num($scorecard['report']['black_murder_unsolved_rate'], 0, '%') ?> )</p>
  <div class="progress-bar-wrapper">
    <div class="progress-bar animate-bar dark-grey" data-percent="<?= output(intval($scorecard['report']['black_murder_unsolved_rate']), 0, '%') ?>"></div>
  </div>
  <?php endif; ?>

  <?php if(isset($scorecard['report']['hispanic_murder_unsolved_rate']) && !empty($scorecard['report']['hispanic_murder_unsolved_rate'])): ?>
  <p>Homicides of Latinx Victims Unsolved ( <?= num($scorecard['report']['hispanic_murder_unsolved_rate'], 0, '%') ?> )</p>
  <div class="progress-bar-wrapper">
    <div class="progress-bar animate-bar dark-grey" data-percent="<?= output(intval($scorecard['report']['hispanic_murder_unsolved_rate']), 0, '%') ?>"></div>
  </div>
  <?php endif; ?>

  <?php if(isset($scorecard['report']['white_murder_unsolved_rate']) && !empty($scorecard['report']['white_murder_unsolved_rate'])): ?>
  <p>Homicides of White Victims Unsolved ( <?= num($scorecard['report']['white_murder_unsolved_rate'], 0, '%') ?> )</p>
  <div class="progress-bar-wrapper">
    <div class="progress-bar animate-bar dark-grey" data-percent="<?= output(intval($scorecard['report']['white_murder_unsolved_rate']), 0, '%') ?>"></div>
  </div>
  <?php endif; ?>
</div>
<?php endif; ?>
