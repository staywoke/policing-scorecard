<?php if (output($scorecard['report']['total_people_killed']) !== '0'): ?>
<div class="stat-wrapper">
  <a href="javascript:void(0)" data-city="<?= $location ?>" data-more-info="" class="more-info"></a>
  <h3>Deadly Force by Armed Status</h3>

  <p>
    <?= num($scorecard['report']['percent_used_against_people_who_were_unarmed'], 0, '%') ?> were Unarmed
    <span class="divider">&nbsp;|&nbsp;</span>
    <?= 100 - intval(num($scorecard['report']['percent_used_against_people_who_were_not_armed_with_gun'], 0)) ?>% had a Gun
  </p>

  <?php if (num($scorecard['report']['total_people_killed'], 0) !== '0'): ?>
  <div class="canvas-wrapper">
    <div class="canvas-label">
      <?= num($scorecard['report']['total_people_killed'], 0) ?><br>
      <span><?= grammar('people', num($scorecard['report']['total_people_killed'], 0)) ?> Killed by Police</span>
    </div>
    <canvas id="deadly-force-chart" width="310" height="350" style="margin: 10px auto 20px auto;"></canvas>
  </div>
  <?php else: ?>
  <p>&nbsp;</p>
  <?php endif; ?>
</div>
<?php endif; ?>