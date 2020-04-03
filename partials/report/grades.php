<div class="section bg-light-gray grades short" id="score-card">
  <div class="content">
    <h1 class="title">
      2016-2018 <?= $stateName ?><br/>
      <?= ($type === 'sheriff') ? "Sheriff's" : "Police" ?> Department Grades
    </h1>
  </div>
  <div class="content">
    <div class="left">
      <table>
        <tr>
          <th width="180"><?= $type ?></th>
          <th width="50">Grade</th>
          <th>&nbsp;</th>
        </tr>
      <?php foreach($reportCard as $index => $card): if ($index < (count($reportCard) / 2)): ?>
        <tr>
          <td width="180"><a href="<?= $card['url'] ?>"><?= $index + 1 ?>. <?= $card['agency_name'] ?></a></td>
          <td width="50"><a href="<?= $card['url'] ?>"><?= $card['grade_letter'] ?></a></td>
          <td>
            <a class="score" href="<?= $card['url'] ?>">
              <div class="grade grade-<?= $card['grade_class'] ?>"><?= $card['overall_score'] ?>%</div>
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
          <th width="180"><?= $type ?></th>
          <th width="50">Grade</th>
          <th>&nbsp;</th>
        </tr>
        <?php foreach($reportCard as $index => $card): if ($index >= (count($reportCard) / 2)): ?>
          <tr>
            <td width="180"><a href="<?= $card['url'] ?>"><?= $index + 1 ?>. <?= $card['agency_name'] ?></a></td>
            <td width="50"><a href="<?= $card['url'] ?>"><?= $card['grade_letter'] ?></a></td>
            <td>
              <a class="score" href="<?= $card['url'] ?>">
                <div class="grade grade-<?= $card['grade_class'] ?>"><?= $card['overall_score'] ?>%</div>
              </a>
              <?= getChange($card['change_overall_score'], true, 'since \'16-17'); ?>
            </td>
          </tr>
        <?php endif; endforeach; ?>
      </table>
    </div>
  </div>
  <div class="content<?= (count($reportCard) <= 10) ? ' hide-mobile' : '' ?><?= (count($reportCard) <= 20) ? ' hide-desktop' : '' ?>">
    <a href="javascript:void(0);" class="button more" id="show-more">MORE</a>
    <a href="javascript:void(0);" class="button less" id="show-less">LESS</a>
  </div>
</div>