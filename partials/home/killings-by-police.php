<?php
$nationalSummary = getNationalSummary($states);
?>
<div class="section bg-gray stats">
  <div class="content">
    <div class="one-third">
      <h1><strong><?= $nationalSummary['total_people_killed'] ?></strong> Killings by Police</h1>

      <div class="text">
        <p>Based on population, a Black person was <strong><?= num($nationalSummary['black_deadly_force_disparity_per_population'], 1, 'x') ?> as likely</strong> and a Latinx person was <strong><?= num($nationalSummary['hispanic_deadly_force_disparity_per_population'], 1, 'x') ?> as likely</strong> to be killed by police than a White person in America from 2013-19.</p>
      </div>

      <div class="chart chart-1">
        <div id="chart-mini-people-killed"></div>
      </div>
    </div>

    <div class="one-third">
      <h1><strong><?= num($nationalSummary['total_complaints_reported']) ?></strong> civilian complaints of police misconduct</h1>

      <div class="text">
        <p>Only <strong>1 in every <?= round($nationalSummary['total_complaints_reported'] / $nationalSummary['total_complaints_sustained']) ?> complaints</strong> were ruled in favor of civilians from 2016-18.</p>
      </div>

      <div class="chart chart-2">
        <script>
        var CHART_MINI_REPORTED = <?= $nationalSummary['total_complaints_reported'] ?>;
        var CHART_MINI_SUSTAINED = <?= $nationalSummary['total_complaints_sustained'] ?>;
        </script>
        <canvas id="chart-mini-complaints-reported" width="125" height="125"></canvas>
        <span id="chart-mini-complaints-reported-label" class="national-report"></span>
      </div>
    </div>

    <div class="one-third">
      <h1><strong><?= num($nationalSummary['total_arrests']) ?></strong> arrests made</h1>

      <div class="text">
        <p>Police in the USA made <strong><?= num($nationalSummary['times_more_misdemeanor_arrests_than_violent_crime'], 1, 'x') ?> as many arrests for low level offenses</strong> as for violent crimes in 2013-2018.</p>
      </div>

      <div class="chart chart-3">
        <div class="chart-mini-arrests">
          <?php
          $fill = $nationalSummary['total_low_level_arrests'] / ($nationalSummary['total_arrests_2013'] + $nationalSummary['total_arrests_2014'] + $nationalSummary['total_arrests_2015'] + $nationalSummary['total_arrests_2016'] + $nationalSummary['total_arrests_2017'] + $nationalSummary['total_arrests_2018']);
          ?>
          <div class="filler" style="width: <?= $fill * 100 ?>%; height: 100%"></div>
        </div>
      </div>
    </div>
  </div>
</div>
