<?php
$deptGrades = getGrades($reportCard, strtoupper($state));
$incomplete = 0;
foreach ($deptGrades as $key => $value) {
  if ($value['complete'] === false) {
      $incomplete++;
  }
}
?>
<div class="section bg-light-gray grades short" id="score-card">
  <div class="content">
    <h1 class="title">
      <?= $stateName ?> <?= ($type === 'sheriff') ? "Sheriff's" : "Police" ?> Department Scores
    </h1>
  </div>
  <div class="content">
    <div class="left">
      <table>
        <tr>
          <th width="70%"><?= $type ?></th>
          <th>Score</th>
        </tr>
      <?php foreach($deptGrades as $index => $card): if ($index < (count($deptGrades) / 2)): ?>
        <tr>
          <td width="70%"><a href="<?= $isProd ? $card['url_pretty'] : $card['url'] ?>"><?= ($card['complete']) ? (count($deptGrades) - $index - $incomplete) . '.' : '<span class="incomplete">*</span>' ?> <?= $card['agency_name'] ?></a></td>
          <td>
            <a class="score" href="<?= $isProd ? $card['url_pretty'] : $card['url'] ?>">
              <div class="grade grade-<?= ($card['complete']) ? $card['grade_class'] : 'incomplete' ?>"></div>
              <span class="percent"><?= $card['overall_score'] ?>%</span>
            </a>
            <?= getChange($card['change_overall_score'], true, 'since \'16-17'); ?>
          </td>
        </tr>
      <?php endif; endforeach; ?>
      </table>
    </div>
    <div class="right">
      <table>
        <tr class="hide-mobile">
          <th width="70%"><?= $type ?></th>
          <th>Score</th>
        </tr>
        <?php foreach($deptGrades as $index => $card): if ($index >= (count($deptGrades) / 2)): ?>
          <tr>
            <td width="70%"><a href="<?= $isProd ? $card['url_pretty'] : $card['url'] ?>"><?= ($card['complete']) ? (count($deptGrades) - $index - $incomplete) . '.' : '<span class="incomplete">*</span>' ?> <?= $card['agency_name'] ?></a></td>
            <td>
              <a class="score" href="<?= $isProd ? $card['url_pretty'] : $card['url'] ?>">
                <div class="grade grade-<?= ($card['complete']) ? $card['grade_class'] : 'incomplete' ?>"></div>
                <span class="percent"><?= $card['overall_score'] ?>%</span>
              </a>
              <?= getChange($card['change_overall_score'], true, 'since \'16-17'); ?>
            </td>
          </tr>
        <?php endif; endforeach; ?>
      </table>
    </div>
  </div>
  <div class="content<?= (count($deptGrades) <= 10) ? ' hide-mobile' : '' ?><?= (count($deptGrades) <= 20) ? ' hide-desktop' : '' ?>">
    <a href="javascript:void(0);" class="button more" id="show-more">MORE</a>
    <a href="javascript:void(0);" class="button less" id="show-less">LESS</a>
  </div>

  <div class="content add-new-data">
    <div class="left">
      <p class="partial-data"><strong>*</strong> An asterisk indicates this city does not have enough data to be included in our rankings. <strong>Want to help add this city to the list?</strong></p>
    </div>
    <div class="right add-data">
      <button class="btn btn-primary" onclick="document.getElementById('research').click();document.querySelector('.take-action').scrollIntoView({ behavior: 'smooth' }); return false;">Add New Data</button>
    </div>
  </div>
</div>
