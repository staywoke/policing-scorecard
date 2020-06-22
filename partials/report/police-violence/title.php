<div class="content section-header">
  <h1 class="title">
    Police violence
  </h1>

  <strong class="grade grade-<?= strtolower(preg_replace('/[^A-Z]/', '', getGrade($scorecard['report']['police_violence_score']))) ?>">
    <span>Score: </span>
  </strong>

  <?= num($scorecard['report']['police_violence_score'], 0, '%') ?>

  <a href="javascript:void(0)" class="results-info" data-city="<?= $location ?>" data-result-info="police-violence">?</a>

  <?= getChange($scorecard['report']['change_police_violence_score'], true, 'since \'16-17'); ?>
</div>
