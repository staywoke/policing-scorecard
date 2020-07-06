<div class="score-divider-full hide-mobile grade-<?= getGradeClass($scorecard['report']['police_violence_score']) ?>"></div>

<div class="content section-header">
  <div class="divider-line hide-desktop"></div>

  <h1 class="title">
    Police violence

    <a href="javascript:void(0)" class="results-info" data-city="<?= $location ?>" data-result-info="police-violence">i</a>
  </h1>

  <div class="score-divider grade grade-<?= getGradeClass($scorecard['report']['police_violence_score']) ?>">
    <span class="section-label">Section Score:</span>
    <span class="section-score"><?= num($scorecard['report']['police_violence_score'], 0, '%') ?></span>
    <?= getChange($scorecard['report']['change_police_violence_score'], true, 'since \'16-17'); ?>
  </div>
</div>
