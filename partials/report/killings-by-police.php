<div class="section bg-gray stats">
  <div class="content">
    <div class="one-third">
      <h1><strong><?= $scorecard['report']['total_people_killed'] ?></strong> Killings by Police</h1>

      <div class="text">
        <?php if($scorecard['report']['total_people_killed'] === 0): ?>
        <p><?= $scorecard['agency']['name']?> <?= ($type === 'police-department') ? 'Police' : 'Sheriff' ?> Department did not kill anyone from 2013-2019</p>
        <?php elseif($scorecard['report']['total_people_killed'] === 1): ?>
        <p><?= $scorecard['agency']['name']?> was <strong>1 of only <?= ($type === 'police-department') ? '11' : '12' ?> departments</strong> in our analysis that did not use deadly force from 2016-18.</p>
        <?php elseif(!isset($scorecard['report']['black_deadly_force_disparity_per_population']) || !isset($scorecard['report']['hispanic_deadly_force_disparity_per_population'])): ?>
        <p>That's higher than <strong><?= num($scorecard['report']['percentile_killed_by_police'], 0, '%', true) ?></strong> of <?= $stateName ?> police departments.</p>
        <?php else: ?>
        <p>Based on population, a Black person was <strong><?= num($scorecard['report']['black_deadly_force_disparity_per_population'], 1, 'x') ?> as likely</strong> and a Latinx person was <strong><?= num($scorecard['report']['hispanic_deadly_force_disparity_per_population'], 1, 'x') ?> as likely</strong> to be killed by police than a White person in <?= $scorecard['agency']['name']?> from 2013-19.</p>
        <?php endif; ?>
      </div>

      <div class="chart">
        <div id="chart-mini-people-killed"></div>
      </div>
    </div>

    <div class="one-third">
      <h1><strong><?= num($scorecard['police_accountability']['civilian_complaints_reported']) ?></strong> civilian complaints of police misconduct</h1>

      <div class="text">
        <?php if($scorecard['police_accountability']['civilian_complaints_sustained'] === 0): ?>
        <p><strong>0 complaints </strong> were ruled in favor of civilians from 2016-18.</p>
        <?php elseif($scorecard['police_accountability']['civilian_complaints_sustained'] === 1): ?>
        <p>Only <strong>1 in every <?= num($scorecard['police_accountability']['civilian_complaints_reported']) ?> complaints</strong> were ruled in favor of civilians from 2016-18.</p>
        <?php elseif(!isset($scorecard['report']['complaints_sustained']) || $scorecard['report']['complaints_sustained'] > 0): ?>
        <p><strong><?= num($scorecard['report']['complaints_sustained'], 0, '%') ?></strong> were ruled in favor of civilians from 2016-2018.</p>
        <?php else: ?>
        <p>Only <strong>1 in every <?= round(intval(str_replace(',', '', $scorecard['police_accountability']['civilian_complaints_reported'])) / intval(str_replace(',', '', $scorecard['police_accountability']['civilian_complaints_sustained']))) ?> complaints</strong> were ruled in favor of civilians from 2016-18.</p>
        <?php endif; ?>
      </div>

      <div class="chart">
        <script>
        <?php if($scorecard['police_accountability']['civilian_complaints_sustained'] === 0): ?>
        var CHART_MINI_REPORTED = 0;
        var CHART_MINI_SUSTAINED = 0;
        <?php elseif($scorecard['police_accountability']['civilian_complaints_sustained'] === 1): ?>
        var CHART_MINI_REPORTED = <?= $scorecard['police_accountability']['civilian_complaints_reported'] ?>;
        var CHART_MINI_SUSTAINED = 1;
        <?php elseif($scorecard['police_accountability']['civilian_complaints_sustained'] > 0 && $scorecard['police_accountability']['civilian_complaints_reported'] / $scorecard['police_accountability']['civilian_complaints_sustained'] <= 3): ?>
        var CHART_MINI_REPORTED = <?= $scorecard['report']['complaints_sustained'] ?>;
        var CHART_MINI_SUSTAINED = <?= 100 - $scorecard['report']['complaints_sustained'] ?>;
        <?php else: ?>
        var CHART_MINI_REPORTED = <?= (!isset($scorecard['police_accountability']['civilian_complaints_sustained']) || $scorecard['police_accountability']['civilian_complaints_sustained'] === 0) ? 0 : round($scorecard['police_accountability']['civilian_complaints_reported'] / $scorecard['police_accountability']['civilian_complaints_sustained']) ?>;
        var CHART_MINI_SUSTAINED = 1;
        <?php endif; ?>
        </script>
        <canvas id="chart-mini-complaints-reported" width="125" height="125"></canvas>
        <span id="chart-mini-complaints-reported-label"></span>
      </div>
    </div>

    <div class="one-third">
      <h1><strong><?= num($scorecard['report']['total_arrests']) ?></strong> arrests made</h1>

      <div class="text">
        <p><?= num($scorecard['report']['percent_misdemeanor_arrests'], 0, '%') ?> of all arrests were for low-level, non-violent offenses.</p>
      </div>

      <div class="chart">
        <div class="chart-mini-arrests">
          <div class="filler" style="width: <?= $scorecard['report']['percent_misdemeanor_arrests']?>%; height: <?= $scorecard['report']['percent_misdemeanor_arrests'] ?>%"></div>
        </div>
      </div>
    </div>
  </div>
</div>