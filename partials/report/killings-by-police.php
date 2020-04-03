<div class="section bg-gray stats">
  <div class="content">
    <div class="one-third">
      <h1><strong><?= $scorecard['report']['total_people_killed'] ?></strong> Killings by Police</h1>

      <?php if(num($scorecard['report']['total_people_killed']) === '0'): ?>
      <p><?= $scorecard['agency']['name']?> was <strong>1 of only <?= ($type === 'police-department') ? '11' : '12' ?> departments</strong> in our analysis that did not use deadly force from 2016-18.</p>
      <?php elseif(!isset($scorecard['report']['black_deadly_force_disparity_per_population']) || !isset($scorecard['report']['hispanic_deadly_force_disparity_per_population'])): ?>
      <p>That's higher than <strong><?= num($scorecard['report']['percentile_killed_by_police'], 0, '%', true) ?></strong> of <?= $stateName ?> police departments.</p>
      <?php else: ?>
      <p>Based on population, a Black person was <strong><?= num($scorecard['report']['black_deadly_force_disparity_per_population'], 1, 'x') ?> as likely</strong> and a Latinx person was <strong><?= num($scorecard['report']['hispanic_deadly_force_disparity_per_population'], 1, 'x') ?> as likely</strong> to be killed by police than a White person in <?= $scorecard['agency']['name']?> from 2013-19.</p>
      <?php endif; ?>
    </div>

    <div class="one-third">
      <h1><strong><?= num($scorecard['police_accountability']['civilian_complaints_reported']) ?></strong> civilian complaints of police misconduct</h1>

      <?php if(num($scorecard['police_accountability']['civilian_complaints_sustained']) === '0'): ?>
      <p><strong>0 complaints </strong> were ruled in favor of civilians from 2016-18.</p>
      <?php elseif(num($scorecard['police_accountability']['civilian_complaints_sustained']) === '1'): ?>
      <p>Only <strong>1 in every <?= num($scorecard['police_accountability']['civilian_complaints_reported']) ?> complaints</strong> were ruled in favor of civilians from 2016-18.</p>
      <?php elseif(intval(str_replace(',', '', $scorecard['police_accountability']['civilian_complaints_reported'])) / intval(str_replace(',', '', $scorecard['police_accountability']['civilian_complaints_sustained'])) <= 3): ?>
      <p><strong><?= num($scorecard['report']['calc_complaints_sustained'], 0, '%') ?></strong> were ruled in favor of civilians from 2016-2018.</p>
      <?php else: ?>
      <p>Only <strong>1 in every <?= round(intval(str_replace(',', '', $scorecard['police_accountability']['civilian_complaints_reported'])) / intval(str_replace(',', '', $scorecard['police_accountability']['civilian_complaints_sustained']))) ?> complaints</strong> were ruled in favor of civilians from 2016-18.</p>
      <?php endif; ?>
    </div>

    <div class="one-third">
      <h1><strong><?= num($scorecard['report']['total_arrests']) ?></strong> arrests made</h1>

      <?php if (intval($scorecard['report']['percentile_low_level_arrests_per_1k_population']) <= 75): ?>
      <p>Police in <?= $scorecard['agency']['name']?> made <strong><?= num($scorecard['report']['times_more_misdemeanor_arrests_than_violent_crime'], 1, 'x') ?> as many arrests for low level offenses</strong> as for violent crimes in 2013-2018.</p>
      <?php else: ?>
      <p><?= $scorecard['agency']['name']?> had a lower misdemeanor arrest rate than <strong><?= num($scorecard['report']['percentile_low_level_arrests_per_1k_population'], 1, '%') ?></strong> of departments.</p>
      <?php endif; ?>
    </div>
  </div>
</div>