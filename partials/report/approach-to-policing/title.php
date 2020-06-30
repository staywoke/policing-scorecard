<div class="score-divider-full grade-<?= strtolower(preg_replace('/[^A-Z]/', '', getGrade($scorecard['report']['police_violence_score']))) ?>"></div>
<div class="score-divider-full grade-<?= strtolower(preg_replace('/[^A-Z]/', '', getGrade($scorecard['report']['approach_to_policing_score']))) ?>"></div>

<div class="content section-header">
  <h1 class="title">
    Approach to Policing

    <a href="javascript:void(0)" class="results-info" data-city="<?= $location ?>" data-result-info="approach">i</a>
  </h1>

  <div class="score-divider grade grade-<?= strtolower(preg_replace('/[^A-Z]/', '', getGrade($scorecard['report']['approach_to_policing_score']))) ?>">
    <span class="section-label">Section Score:</span>
    <span class="section-score"><?= num($scorecard['report']['approach_to_policing_score'], 0, '%') ?></span>
    <?= getChange($scorecard['report']['change_approach_to_policing_score'], true); ?>
  </div>
</div>
