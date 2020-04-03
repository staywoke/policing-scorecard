<div class="content section-header">
  <h1 class="title">
    Approach to Policing
  </h1>

  <strong class="grade grade-<?= strtolower(preg_replace('/[^A-Z]/', '', getGrade($scorecard['report']['approach_to_policing_score']))) ?>">
    <span>Grade: </span><?= getGrade($scorecard['report']['approach_to_policing_score']) ?>
  </strong>

  <span class="divider">&nbsp;|&nbsp;</span>

  <?= num($scorecard['report']['approach_to_policing_score'], 0, '%') ?>

  <a href="javascript:void(0)" class="results-info" data-city="<?= $location ?>" data-result-info="approach">?</a>

  <?= getChange($scorecard['report']['change_approach_to_policing_score'], true); ?>
</div>