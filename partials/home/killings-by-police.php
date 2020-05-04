<?php
$nationalSummary = getNationalSummary($states);
?>
<div class="section bg-gray stats">
  <div class="content">
    <div class="one-third">
      <h1><strong><?= $nationalSummary['total_people_killed'] ?></strong> Killings by Police</h1>
      <p>Based on population, a Black person was <strong><?= $nationalSummary['black_deadly_force_disparity_per_population'] ?>x as likely</strong> and a Latinx person was <strong><?= $nationalSummary['hispanic_deadly_force_disparity_per_population'] ?>x as likely</strong> to be killed by police than a White person in the USA from 2013-19.</p>
    </div>

    <div class="one-third">
      <h1><strong><?= num($nationalSummary['total_complaints_reported']) ?></strong> civilian complaints of police misconduct</h1>
      <p>Only <strong>1 in every <?= round($nationalSummary['total_complaints_reported'] / $nationalSummary['total_complaints_sustained']) ?> complaints</strong> were ruled in favor of civilians from 2016-18.</p>
    </div>

    <div class="one-third">
      <h1><strong><?= num($nationalSummary['total_arrests']) ?></strong> arrests made</h1>
      <p>Police in the USA made <strong><?= $nationalSummary['times_more_misdemeanor_arrests_than_violent_crime'] ?>x as many arrests for low level offenses</strong> as for violent crimes in 2013-2018.</p>
    </div>
  </div>
</div>