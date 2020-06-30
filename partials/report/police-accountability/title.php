<div class="score-divider-full grade-<?= strtolower(preg_replace('/[^A-Z]/', '', getGrade($scorecard['report']['police_accountability_score']))) ?>"></div>

<div class="content section-header">
  <h1 class="title">
    Police Accountability

    <a href="javascript:void(0)" class="results-info" data-city="<?= $location ?>" data-result-info="police-accountability">i</a>
  </h1>

  <div class="score-divider grade grade-<?= strtolower(preg_replace('/[^A-Z]/', '', getGrade($scorecard['report']['police_accountability_score']))) ?>">
    <span class="section-label">Section Score:</span>
    <span class="section-score"><?= num($scorecard['report']['police_accountability_score'], 0, '%') ?></span>
    <?= getChange($scorecard['report']['change_police_accountability_score'], true, 'since \'16-17'); ?>
  </div>
</div>
