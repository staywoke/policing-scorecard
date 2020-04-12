<div class="stat-wrapper no-border-mobile">
  <a href="javascript:void(0)" data-city="<?= $location ?>" data-more-info="" class="more-info"></a>
  <a href="http://www.murderdata.org/p/blog-page.html?m=1" target="_blank" class="external-link" title="Open in New Window"></a>
  <h3>Homicides Unsolved</h3>

  <p>
    <?= output($scorecard['homicide']['homicides_2013_2018']) ?> Homicides from 2013-18
    <span class="divider">&nbsp;|&nbsp;</span>
    <?= (intval(str_replace(',', '', $scorecard['homicide']['homicides_2013_2018'])) - intval(str_replace(',', '', $scorecard['homicide']['homicides_2013_2018_solved']))) ?> Unsolved
  </p>

  <?php if(intval($scorecard['homicide']['homicides_2013_2018']) === 0): ?>
  <p class="good-job pad-bottom">No Homicides Reported</p>
  <?php elseif(intval($scorecard['homicide']['homicides_2013_2018']) > 0 && (intval(str_replace(',', '', $scorecard['homicide']['homicides_2013_2018'])) - intval(str_replace(',', '', $scorecard['homicide']['homicides_2013_2018_solved']))) === 0): ?>
  <p class="good-job pad-bottom">No Unsolved Homicides Reported</p>
  <?php elseif(!isset($scorecard['report']['percentile_murders_solved']) || (isset($scorecard['report']['percentile_murders_solved']) && empty($scorecard['report']['percentile_murders_solved']))): ?>
  <div class="progress-bar-wrapper">
    <div class="progress-bar no-data" style="width: 0"></div>
  </div>
  <p class="note">City Did Not Provide Data</p>
  <?php else: ?>
  <div class="progress-bar-wrapper">
    <div class="progress-bar animate-bar <?= progressBar(intval($scorecard['report']['percentile_murders_solved']), 'reverse') ?>" data-percent="<?= output(intval($scorecard['report']['percentile_murders_solved']), 0, '%') ?>"></div>
  </div>
  <p class="note">^&nbsp; Solved Fewer Homicides than <?= num($scorecard['report']['percentile_murders_solved'], 0, '%') ?> of Depts &nbsp;&nbsp;</p>
  <?php endif; ?>
</div>