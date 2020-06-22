<?php
$nationalGrades = getNationalGrades($states, $type);
?>
<div class="section bg-light-gray grades short" id="score-card">
  <div class="content">
    <h1 class="title">
      2016-2018 United States <?= ($type === 'sheriff') ? "Sheriff's" : "Police" ?> Department Grades
    </h1>
  </div>
  <div class="content">
    <div class="left">
      <table>
        <tr>
          <th width="75%"><?= $type ?></th>
          <th>Score</th>
        </tr>
      <?php foreach($nationalGrades as $index => $card): if ($index < (count($nationalGrades) / 2)): ?>
        <tr>
          <td width="75%"><a href="<?= $isProd ? $card['url_pretty'] : $card['url'] ?>"><?= $index + 1 ?>. <?= $card['agency_name'] ?></a></td>
          <td>
            <a class="score" href="<?= $isProd ? $card['url_pretty'] : $card['url'] ?>">
              <div class="grade grade-<?= $card['grade_class'] ?>"></div>
              <span class="percent"><?= $card['overall_score'] ?>%</span>
            </a>
          </td>
        </tr>
      <?php endif; endforeach; ?>
      </table>
    </div>
    <div class="right">
      <table>
        <tr class="hide-mobile">
          <th width="75%"><?= $type ?></th>
          <th>Score</th>
        </tr>
        <?php foreach($nationalGrades as $index => $card): if ($index >= (count($nationalGrades) / 2)): ?>
          <tr>
            <td width="75%"><a href="<?= $isProd ? $card['url_pretty'] : $card['url'] ?>"><?= $index + 1 ?>. <?= $card['agency_name'] ?></a></td>
            <td>
              <a class="score" href="<?= $isProd ? $card['url_pretty'] : $card['url'] ?>">
                <div class="grade grade-<?= $card['grade_class'] ?>"></div>
                <span class="percent"><?= $card['overall_score'] ?>%</span>
              </a>
            </td>
          </tr>
        <?php endif; endforeach; ?>
      </table>
    </div>
  </div>
  <div class="content<?= (count($nationalGrades) <= 10) ? ' hide-mobile' : '' ?><?= (count($nationalGrades) <= 20) ? ' hide-desktop' : '' ?>">
    <a href="javascript:void(0);" class="button more" id="show-more">MORE</a>
    <a href="javascript:void(0);" class="button less" id="show-less">LESS</a>
  </div>
</div>
