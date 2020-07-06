<div class="score-divider-full hide-mobile grade-<?= getGradeClass($scorecard['report']['police_funding_score']) ?>"></div>

<div class="content section-header">
  <h1 class="title">
    Police Funding

    <a href="javascript:void(0)" class="results-info" data-city="<?= $location ?>" data-result-info="police-funding">i</a>
  </h1>

  <div class="score-divider grade grade-<?= getGradeClass($scorecard['report']['police_funding_score']) ?>">
    <span class="section-label">Section Score:</span>
    <span class="section-score"><?= num($scorecard['report']['police_funding_score'], 0, '%') ?></span>
    <?= getChange($scorecard['report']['change_police_funding_score'], true); ?>
  </div>
</div>
