<div class="score-divider-full hide-mobile grade-<?= getGradeClass($scorecard['report']['police_accountability_score']) ?>"></div>

<div class="content section-header">
  <div class="divider-line hide-desktop"></div>

  <h1 class="title">
    Police Accountability

    <a href="javascript:void(0)" class="results-info" data-city="<?= $location ?>" data-result-info="police-accountability">i</a>
  </h1>

  <div class="score-divider grade grade-<?= getGradeClass($scorecard['report']['police_accountability_score']) ?>">
    <span class="section-label">Section Score:</span>
    <span class="section-score"><?= num($scorecard['report']['police_accountability_score'], 0, '%') ?></span>
    <?= getChange($scorecard['report']['change_police_accountability_score'], true, 'since \'16-17'); ?>
  </div>

  <?php if (!empty($scorecard['police_accountability']['civilian_complaints_source_link']) && !empty($scorecard['police_accountability']['civilian_complaints_source'])): ?>
  <p class="source-link-wrapper">Source: <a href="<?= $scorecard['police_accountability']['civilian_complaints_source_link'] ?>" class="source-link" target="_blank"><?= $scorecard['police_accountability']['civilian_complaints_source'] ?></a></p>
  <?php endif; ?>
</div>
