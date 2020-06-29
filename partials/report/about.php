<div class="section why">
  <div class="content">
    <h1 class="title">
      About This Scorecard
    </h1>
    <p>
      <strong>This is the first nationwide evaluation of policing in the United States.</strong> It was built using data from state and federal databases, public records requests to local police departments, and media reports. While police data is never perfect, and there are many issues that still need to be tracked, the Police Scorecard is designed to provide insight into many important issues in policing.
    </p>
    <p>
      <a href="/about" class="button">methodology</a>
      <a href="https://drive.google.com/drive/folders/1XAT1uFPXj5AsvNTzFeNeeTXGLP09HEIh" target="_blank" class="button">Source Data</a>
    </p>
    <p>&nbsp;</p>
    <p>
      <strong>Use this Scorecard to identify issues within police departments that require the most urgent interventions and hold officials accountable for implementing solutions.</strong> For example, cities with higher rates of misdemeanor arrests could benefit most from solutions that create alternatives to policing and arrest for these offenses. In cities where police make fewer arrests overall but use more force when making arrests, communities could benefit significantly from policies designed to hold police accountable for this behavior. And cities where complaints of police misconduct are rarely ruled in favor of civilians could benefit from creating an oversight structure to independently investigate these complaints.
    </p>
    <p>&nbsp;</p>
    <p class="take-action">Here's how to start pushing for change</p>
  </div>
  <div class="content">
    <p>&nbsp;</p>
  </div>
  <div class="content">
    <div class="tabs">
      <div role="tablist" class="tab-buttons" aria-label="Push for Change">
        <button role="tab" aria-selected="true" aria-controls="advocacy-tab" id="advocacy">Advocacy</button>
        <button role="tab" aria-selected="false" aria-controls="research-tab" id="research" tabindex="-1">Research</button>
        <button role="tab" aria-selected="false" aria-controls="data-visualization-tab" id="data-visualization" tabindex="-1">Data Visualization</button>
      </div>
      <div tabindex="0" role="tabpanel" id="advocacy-tab" aria-labelledby="advocacy">
        <div class="left number number-1">
          <ul>
            <li>
              <?php if ($type === 'sheriff'): ?>
              <strong>Contact Your County Sheriff</strong>, share this scorecard with them and urge them to enact policies to address the issues you've identified:
              <?php else: ?>
              <strong>Contact your Mayor and Police Chief</strong>, share this scorecard with them and urge them to enact policies to address the issues you've identified:
              <?php endif; ?>

              <ul class="contacts">
              <?php if (!empty($scorecard['agency']['mayor_name'])): ?>
                <li>
                  <strong>Mayor <?= $scorecard['agency']['mayor_name'] ?></strong>
                <?php if (!empty($scorecard['agency']['mayor_phone'])): ?>
                  <br>
                  Phone:&nbsp; <a href="tel:1-<?= $scorecard['agency']['mayor_phone'] ?>"><?= $scorecard['agency']['mayor_phone'] ?></a>
                <?php endif; ?>
                <?php if (!empty($scorecard['agency']['mayor_email'])): ?>
                  <br>
                  Email:&nbsp; <a href="mailto:<?= $scorecard['agency']['mayor_email'] ?>"><?= $scorecard['agency']['mayor_email'] ?></a>
                <?php endif; ?>
                </li>
              <?php endif; ?>
              <?php if (!empty($scorecard['agency']['police_chief_name'])): ?>
                <li>
                  <strong><?= ($type === 'police-department') ? 'Police Chief' : '' ?> <?= $scorecard['agency']['police_chief_name'] ?></strong>
                <?php if (!empty($scorecard['agency']['police_chief_phone'])): ?>
                  <br>
                  Phone:&nbsp; <a href="tel:1-<?= $scorecard['agency']['police_chief_phone'] ?>"><?= $scorecard['agency']['police_chief_phone'] ?></a>
                <?php endif; ?>
                <?php if (!empty($scorecard['agency']['police_chief_email'])): ?>
                  <br>
                  Email:&nbsp; <a href="mailto:<?= $scorecard['agency']['police_chief_email'] ?>"><?= $scorecard['agency']['police_chief_email'] ?></a>
                <?php endif; ?>
                </li>
              <?php endif; ?>
              </ul>

              <?php if (!empty($scorecard['agency']['advocacy_tip'])): ?>
              <div class="advocacy-tip">
                <strong>Advocacy Tip:</strong>&nbsp; <?= $scorecard['agency']['advocacy_tip'] ?>
              </div>
              <?php endif; ?>
            </li>
          </ul>
        </div>
        <div class="right number number-2">
          <ul>
            <li>
              <strong>Find your US Senator and US Representative</strong> using our Advocacy Tool and urge them to support the <strong>Justice in Policing Act</strong> to end qualified immunity, demilitarize police, and ban chokeholds and no-knock warrants.
              <br />
              <a href="https://www.joincampaignzero.org/advocacy" class="button" target="_blank">Advocacy Tool</a>
            </li>
          </ul>
        </div>
      </div>
      <div tabindex="0" role="tabpanel" id="research-tab" aria-labelledby="research" hidden="">
        <p>Join a team of researchers, students, data scientists, activists and organizers working to collect, analyze and use data for justice and accountability.</p>
        <p><a href="https://staywoke.typeform.com/to/jBvCkB" class="button" target="_blank">Join</a></p>
      </div>
      <div tabindex="0" role="tabpanel" id="data-visualization-tab" aria-labelledby="data-visualization" hidden="">
        <p>Create data visualizations and content that raises awareness about solutions to the issues identified by the data.</p>
        <p><a href="https://staywoke.typeform.com/to/jBvCkB" class="button" target="_blank">Join</a></p>
      </div>
    </div>
  </div>
  <div class="content">
    <p>&nbsp;</p>
    <p>If you have feedback, questions about the project, or need support with an advocacy campaign, contact our Project Lead, <a href="mailto:sam@thisisthemovement.org">Samuel Sinyangwe</a>.</p>
  </div>
</div>
