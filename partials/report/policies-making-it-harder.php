<div class="section bg-gray checklist">
  <div class="content">
    <h1 class="title">
      Policies Making It <span class="bad">Harder</span> to Hold Police Accountable
      <?php if ($scorecard['report']['currently_updating_union_contract'] === true): ?>*<?php endif; ?>
      <?php if ($scorecard['report']['currently_updating_union_contract'] === true): ?>
      <br><span class="title white bad">* Agency Currently Re-Negotiating Contract</span>
      <?php endif; ?>
    </h1>
  </div>

  <div class="content">
    <div class="left">
      <div class="check animate-check <?= $scorecard['policy']['disqualifies_complaints'] === true ? 'checked-bad' : 'unchecked' ?> more-info" data-city="<?= $location ?>" data-more-info="policy_language_disqualifies_complaints">
        Disqualifies Complaints
      </div>
      <div class="check animate-check <?= $scorecard['policy']['restricts_delays_interrogations'] === true ? 'checked-bad' : 'unchecked' ?> more-info" data-city="<?= $location ?>" data-more-info="policy_language_restricts_delays_interrogations">
        Restricts / Delays Interrogations
      </div>
      <div class="check animate-check <?= $scorecard['policy']['gives_officers_unfair_access_to_information'] === true ? 'checked-bad' : 'unchecked' ?> more-info" data-city="<?= $location ?>" data-more-info="policy_language_gives_officers_unfair_access_to_information">
        Gives Officers Unfair Access to Information
      </div>
    </div>

    <div class="right">
      <div class="check animate-check <?= $scorecard['policy']['limits_oversight_discipline'] === true ? 'checked-bad' : 'unchecked' ?> more-info" data-city="<?= $location ?>" data-more-info="policy_language_limits_oversight_discipline">
        Limits Oversight / Discipline
      </div>
      <div class="check animate-check <?= $scorecard['policy']['requires_city_pay_for_misconduct'] === true ? 'checked-bad' : 'unchecked' ?> more-info" data-city="<?= $location ?>" data-more-info="policy_language_requires_city_pay_for_misconduct">
        Requires City Pay for Misconduct
      </div>
      <div class="check animate-check <?= $scorecard['policy']['erases_misconduct_records'] === true ? 'checked-bad' : 'unchecked' ?> more-info" data-city="<?= $location ?>" data-more-info="policy_language_erases_misconduct_records">
        Erases Misconduct Records
      </div>
    </div>
  </div>
</div>