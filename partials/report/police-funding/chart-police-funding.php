<?php if (isset($scorecard['police_funding']['total_budget_2010']) && isset($scorecard['police_funding']['housing_budget_2010']) && isset($scorecard['police_funding']['health_budget_2010']) && isset($scorecard['police_funding']['police_budget_2010']) && isset($scorecard['police_funding']['total_budget']) && isset($scorecard['report']['police_spending_per_resident']) && isset($scorecard['police_funding']['percentile_police_spending_ratio'])): ?>
<div class="stat-wrapper">
  <h3>Police Funding By Year</h3>
  <p>
    <?= nFormatter($scorecard['police_funding']['total_budget'], 2) ?>
    <span class="divider">&nbsp;|&nbsp;</span>
    <?= nFormatter($scorecard['report']['police_spending_per_resident'], 2) ?> per Resident
  </p>
  <p>
    More police funding per capita than <?= num($scorecard['police_funding']['percentile_police_spending_ratio'], 0, '%', true) ?> of Depts
  </p>

  <div id="chart-police-funding"></div>

  <?php if (!empty($scorecard['police_funding']['budget_source_link'])): ?>
  <p class="source-link-wrapper">Source: <a href="<?= $scorecard['police_funding']['budget_source_link'] ?>" class="source-link" target="_blank">US Census Bureau</a></p>
  <?php endif; ?>
</div>
<?php endif; ?>
