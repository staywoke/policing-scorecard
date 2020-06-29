<div class="section score animate grade-<?= ($scorecard['agency']['complete']) ? $scorecard['report']['grade_class'] : 'incomplete' ?>" id="toggle-animate">
  <div class="content">
    <div class="left">
      <div class="selected-location<?= (strlen($scorecard['agency']['name']) > 14) ? ' long' : '' ?><?= (strlen($scorecard['agency']['name']) > 25) ? ' really-long' : '' ?>">
        <span class="selected-location-label"><?= $type === 'police-department' ? 'Police Department' : 'Sheriff\'s Department' ?></span>
        <a href="javascript:void(0);" id="score-location" title="Select Other Departments in <?= $stateName ?>"><?= ($scorecard['agency']['complete']) ? '' : '<span class="incomplete">*</span>' ?><?= $scorecard['agency']['name'] ?></a>
      </div>
    </div>
    <div class="right v-center view-score" onclick="SCORECARD.loadResultsInfo('<?= $location ?>')">
      <span class="grade"><?= $scorecard['report']['overall_score'] ?><i>%</i></span>
    </div>
  </div>
  <?php if ($scorecard['agency']['complete'] === false): ?>
  <div class="content">
    <p class="incomplete-data">* An asterisk indicates that this city <strong>does not have enough data</strong> to be included in our rankings—the scorecard below reflects this. Efforts are currently underway to collect full data sets for all cities in the US.</p>
  </div>
  <?php endif; ?>
</div>
