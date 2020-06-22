<div class="section score animate grade-<?= $scorecard['report']['grade_class'] ?>" id="toggle-animate">
  <div class="content">
    <div class="left">
      <div class="selected-location">
        <span
          class="selected-location-label"><?= $type === 'police-department' ? 'Police Department' : 'Sheriff\'s Department' ?></span>
        <a href="javascript:void(0);" id="score-location" title="Select Other Departments in <?= $stateName ?>"><?= $scorecard['agency']['name'] ?></a>
      </div>
    </div>
    <div class="right v-center view-score" onclick="SCORECARD.loadResultsInfo('<?= $location ?>')">
      <span class="grade"><?= $scorecard['report']['overall_score'] ?>%</span>
    </div>
  </div>
</div>
