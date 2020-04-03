<div class="section bg-gray checklist">
  <div class="content">
    <h1 class="title">
      Policies Adopted to <span class="good">Limit</span> Use of Force <?php if ($scorecard['report']['currently_updating_use_of_force'] === true): ?>*<?php endif; ?>
      <?php if ($scorecard['report']['currently_updating_use_of_force'] === true): ?>
      <br><span class="title white">* Agency Currently Updating Policy</span>
      <?php endif; ?>
    </h1>
  </div>

  <div class="content">
    <?php if (
      $scorecard['policy']['requires_deescalation'] === false &&
      $scorecard['policy']['bans_chokeholds_and_strangleholds'] === false &&
      $scorecard['policy']['duty_to_intervene'] === false &&
      $scorecard['policy']['requires_warning_before_shooting'] === false &&
      $scorecard['policy']['restricts_shooting_at_moving_vehicles'] === false &&
      $scorecard['policy']['requires_comprehensive_reporting'] === false &&
      $scorecard['policy']['requires_exhaust_all_other_means_before_shooting'] === false &&
      $scorecard['policy']['has_use_of_force_continuum'] === false
    ): ?>
    <div class="error">City has not adopted the following policies:</div>
    <?php endif; ?>

    <div class="left">
      <div class="check animate-check <?= $scorecard['policy']['requires_deescalation'] === true ? 'checked' : 'unchecked' ?> more-info" data-city="<?= $location ?>" data-more-info="policy_language_requires_deescalation">
        Requires De-Escalation
      </div>
      <div class="check animate-check <?= $scorecard['policy']['bans_chokeholds_and_strangleholds'] === true ? 'checked' : 'unchecked' ?> more-info" data-city="<?= $location ?>" data-more-info="policy_language_bans_chokeholds_and_strangleholds">
        Bans Chokeholds / Strangleholds
      </div>
      <div class="check animate-check <?= $scorecard['policy']['duty_to_intervene'] === true ? 'checked' : 'unchecked' ?> more-info" data-city="<?= $location ?>" data-more-info="policy_language_duty_to_intervene">
        Duty to Intervene
      </div>
      <div class="check animate-check <?= $scorecard['policy']['requires_warning_before_shooting'] === true ? 'checked' : 'unchecked' ?> more-info" data-city="<?= $location ?>" data-more-info="policy_language_requires_warning_before_shooting">
        Requires Warning Before Shooting
      </div>
    </div>

    <div class="right">
      <div class="check animate-check <?= $scorecard['policy']['restricts_shooting_at_moving_vehicles'] === true ? 'checked' : 'unchecked' ?> more-info" data-city="<?= $location ?>" data-more-info="policy_language_restricts_shooting_at_moving_vehicles">
        Bans Shooting at Moving Vehicles
      </div>
      <div class="check animate-check <?= $scorecard['policy']['requires_comprehensive_reporting'] === true ? 'checked' : 'unchecked' ?> more-info" data-city="<?= $location ?>" data-more-info="policy_language_requires_comprehensive_reporting">
        Requires Comprehensive Reporting
      </div>
      <div class="check animate-check <?= $scorecard['policy']['requires_exhaust_all_other_means_before_shooting'] === true ? 'checked' : 'unchecked' ?> more-info" data-city="<?= $location ?>" data-more-info="policy_language_requires_exhaust_all_other_means_before_shooting">
        Requires Exhaust Alternatives Before Shooting
      </div>
      <div class="check animate-check <?= $scorecard['policy']['has_use_of_force_continuum'] === true ? 'checked' : 'unchecked' ?> more-info" data-city="<?= $location ?>" data-more-info="policy_language_has_use_of_force_continuum">
        Has Use of Force Continuum
      </div>
    </div>
  </div>
</div>