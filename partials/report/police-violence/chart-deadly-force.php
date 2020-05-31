<div class="stat-wrapper">
  <a href="javascript:void(0)" data-city="<?= $location ?>" data-more-info="" class="more-info" title="More Info ..."></a>
  <a href="https://drive.google.com/open?id=1U-0WykJJLBAqSknaDF3938FI7TtXhB9z" target="_blank" class="external-link" title="Open in New Window"></a>

  <h3>Deadly Force</h3>

  <p>
    <?php if (output($scorecard['police_violence']['all_deadly_force_incidents']) === '0'): ?>
    <p class="good-job">Did Not Report Using Deadly Force in 2016-18</p>
    <?php else: ?>
    <p>
      <?= num($scorecard['report']['total_people_killed']) ?> Deaths from 2013-19
      <span class="divider">&nbsp;|&nbsp;</span>
      <?= num($scorecard['report']['killed_by_police_per_10k_arrests']) ?> every 10k arrests
    </p>
    <?php endif; ?>

    <?php if (output($scorecard['police_violence']['all_deadly_force_incidents']) === '0' || output($scorecard['report']['total_people_killed']) === '0'): ?>
    <div class="progress-bar-wrapper">
      <div class="progress-bar bright-green" style="width: 0"></div>
    </div>
    <?php elseif (!isset($scorecard['report']['total_people_killed']) || (isset($scorecard['report']['killed_by_police_per_10k_arrests']) && empty($scorecard['report']['killed_by_police_per_10k_arrests']))): ?>
    <div class="progress-bar-wrapper">
      <div class="progress-bar no-data" style="width: 0"></div>
    </div>
    <p class="note">City Did Not Provide Data</p>
    <?php else: ?>
    <div class="progress-bar-wrapper">
      <div class="progress-bar animate-bar <?= progressBar(100 - intval($scorecard['report']['percentile_killed_by_police']), 'reverse') ?>" data-percent="<?= output(100 - intval($scorecard['report']['percentile_killed_by_police']), 0, '%') ?>"></div>
    </div>
    <p class="note">^&nbsp; Used More Deadly Force per Arrest than <?= num($scorecard['report']['percentile_killed_by_police'], 0, '%', true) ?> of Depts &nbsp;&nbsp;</p>
    <?php endif; ?>
</div>