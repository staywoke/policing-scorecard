<div class="content section-header">
  <h1 class="title">
    Police Accountability
  </h1>

  <strong class="grade grade-<?= strtolower(preg_replace('/[^A-Z]/', '', getGrade($scorecard['report']['police_accountability_score']))) ?>">
    <span>Score: </span>
  </strong>

  <?= num($scorecard['report']['police_accountability_score'], 0, '%') ?>

  <a href="javascript:void(0)" class="results-info" data-city="<?= $location ?>" data-result-info="police-accountability">?</a>

  <?= getChange($scorecard['report']['change_police_accountability_score'], true, 'since \'16-17'); ?>
</div>
