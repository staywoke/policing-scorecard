<?php
include_once(__DIR__ .'/../partials/report/hero.php');
include_once(__DIR__ .'/../partials/report/location-selection.php');
include_once(__DIR__ .'/../partials/report/killings-by-police.php');
?>

<!-- Police Funding -->
<div class="section bb pad funding">
  <!-- Section Title -->
  <?php include_once(__DIR__ .'/../partials/report/police-funding/title.php'); ?>

  <div class="content">
    <div class="left">
      <!-- Police Funding -->
      <?php include_once(__DIR__ .'/../partials/report/police-funding/chart-police-funding.php'); ?>

      <!-- Funds Spent -->
      <?php include_once(__DIR__ .'/../partials/report/police-funding/chart-funds-spent.php'); ?>
    </div>

    <div class="right">
      <!-- Funds Taken from Communities -->
      <?php include_once(__DIR__ .'/../partials/report/police-funding/chart-funds-taken.php'); ?>

      <!-- Officers Per Population -->
      <?php include_once(__DIR__ .'/../partials/report/police-funding/chart-officers-per-population.php'); ?>
    </div>
  </div>
</div>

<!-- Police Violence -->
<div class="section bb pad score-details">
  <!-- Section Title -->
  <?php include_once(__DIR__ .'/../partials/report/police-violence/title.php'); ?>

  <div class="content">
    <div class="left">
      <!-- Police Use of Force by Year -->
      <?php include_once(__DIR__ .'/../partials/report/police-violence/chart-use-of-force.php'); ?>

      <!-- Less-Lethal Force -->
      <?php include_once(__DIR__ .'/../partials/report/police-violence/chart-less-lethal-force.php'); ?>

      <!-- Deadly Force -->
      <?php include_once(__DIR__ .'/../partials/report/police-violence/chart-deadly-force.php'); ?>

      <!-- Police Shootings Where Police Did Not Attempt Non-Lethal Force Before Shooting -->
      <?php include_once(__DIR__ .'/../partials/report/police-violence/chart-police-shootings.php'); ?>

      <!-- Where Police say they saw a gun but no gun was found -->
      <?php include_once(__DIR__ .'/../partials/report/police-violence/chart-saw-gun.php'); ?>
    </div>
    <div class="right">
      <!-- People Killed by Police, 2013-2019 -->
      <?php include_once(__DIR__ .'/../partials/report/police-violence/chart-people-killed.php'); ?>

      <!-- Police Violence by race -->
      <?php include_once(__DIR__ .'/../partials/report/police-violence/chart-violence-by-race.php'); ?>
    </div>
  </div>
</div>

<!-- Police Accountability -->
<div class="section bb pad accountability">
  <!-- Section Title -->
  <?php include_once(__DIR__ .'/../partials/report/police-accountability/title.php'); ?>

  <div class="content">
    <div class="left">
      <!-- Total civilian complaints -->
      <?php include_once(__DIR__ .'/../partials/report/police-accountability/chart-civilian-complaints.php'); ?>

      <!-- Use of Force Complaints -->
      <?php include_once(__DIR__ .'/../partials/report/police-accountability/chart-use-of-force.php'); ?>

      <!-- Complaints of Misconduct in Jail -->
      <?php include_once(__DIR__ .'/../partials/report/police-accountability/chart-misconduct.php'); ?>
    </div>

    <div class="right">
      <!-- Complaints of Police Discrimination -->
      <?php include_once(__DIR__ .'/../partials/report/police-accountability/chart-police-discrimination.php'); ?>

      <!-- Alleged Crimes Committed by Police -->
      <?php include_once(__DIR__ .'/../partials/report/police-accountability/chart-alleged-crimes.php'); ?>
    </div>
  </div>
</div>

<!-- Approach to Policing -->
<div class="section pad approach">
  <!-- Section Title -->
  <?php include_once(__DIR__ .'/../partials/report/approach-to-policing/title.php'); ?>

  <div class="content">
    <div class="left">
      <!-- Arrests By Year -->
      <?php include_once(__DIR__ .'/../partials/report/approach-to-policing/chart-arrests-by-year.php'); ?>

      <!-- Arrests for Low Level Offenses -->
      <?php include_once(__DIR__ .'/../partials/report/approach-to-policing/chart-arrests-low-level.php'); ?>

      <!-- Percent of total arrests by type -->
      <?php include_once(__DIR__ .'/../partials/report/approach-to-policing/chart-arrests-by-type.php'); ?>
    </div>

    <div class="right">
      <!-- Homicides Unsolved -->
      <?php include_once(__DIR__ .'/../partials/report/approach-to-policing/chart-homicides-unsolved.php'); ?>

      <!-- Percent of Homicides Unsolved by Race -->
      <?php include_once(__DIR__ .'/../partials/report/approach-to-policing/chart-homicides-unsolved-by-race.php'); ?>
    </div>
  </div>
</div>

<?php if($type === 'sheriff' && num(round(intval(str_replace(',', '', $scorecard['report']['total_jail_deaths_2016_2018'])))) !== 'N/A'): ?>
<!-- Jail -->
<div class="section pad jail">
  <div class="content">
    <div class="left">
      <!-- Deaths in Jail -->
      <?php include_once(__DIR__ .'/../partials/report/jail/chart-deaths-in-jail.php'); ?>
    </div>

    <div class="right">
      <!-- People Transferred to ICE in 2018 -->
      <?php include_once(__DIR__ .'/../partials/report/jail/chart-transferred-to-ice.php'); ?>
    </div>
  </div>
</div>
<?php endif; ?>

<!-- Grades -->
<?php include_once(__DIR__ .'/../partials/report/grades.php'); ?>

<!-- About This Scorecard -->
<?php include_once(__DIR__ .'/../partials/report/about.php'); ?>

<!-- What's Next -->
<?php include_once(__DIR__ .'/../partials/report/whats-next.php'); ?>
