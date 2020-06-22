<div class="section bg-gray footer">
  <div class="content">
    <div class="left">
      <a href="https://www.facebook.com/sharer/sharer.php?u=<?= $socialUrl ?>&t=<?= $socialText ?>" class="social">
        <i class="fa fa-facebook-f"></i>
      </a>
      <a href="https://twitter.com/intent/tweet?source=<?= $socialUrl ?>&text=<?= $socialText ?>" class="social">
        <i class="fa fa-twitter"></i>
      </a>
      <a href="mailto:?subject=<?= $socialSubject ?>&body=<?= $socialText ?>" class="social">
        <i class="fa fa-envelope"></i>
      </a>
    </div>
    <div class="right">
      <a href="https://staywoke.typeform.com/to/jBvCkB" class="get-involved" target="_blank">Get Involved</a>
      <a href="https://paypal.me/campaignzero" class="donate" target="_blank">Donate</a>
    </div>
  </div>

  <!-- State Selection -->
  <div class="content bt state-list-footer">
    <div class="one-fifth">
      <?php
        $stateCount = 0;
        foreach ($states as $key => $departments) {
          if ($stateCount < 10) {
            $link = generateStateLink($key, $isProd, $state);
            if (!empty($link)) {
              echo $link;
            }
          }

          $stateCount++;
        }
      ?>
    </div>

    <div class="one-fifth">
      <?php
        $stateCount = 0;
        foreach ($states as $key => $departments) {
          if ($stateCount >= 10 && $stateCount < 20) {
            $link = generateStateLink($key, $isProd, $state);
            if (!empty($link)) {
              echo $link;
            }
          }

          $stateCount++;
        }
      ?>
    </div>

    <div class="one-fifth">
      <?php
        $stateCount = 0;
        foreach ($states as $key => $departments) {
          if ($stateCount >= 20 && $stateCount < 30) {
            $link = generateStateLink($key, $isProd, $state);
            if (!empty($link)) {
              echo $link;
            }
          }

          $stateCount++;
        }
      ?>
    </div>

    <div class="one-fifth">
      <?php
        $stateCount = 0;
        foreach ($states as $key => $departments) {
          if ($stateCount >= 30 && $stateCount < 40) {
            $link = generateStateLink($key, $isProd, $state);
            if (!empty($link)) {
              echo $link;
            }
          }

          $stateCount++;
        }
      ?>
    </div>

    <div class="one-fifth">
      <?php
        $stateCount = 0;
        foreach ($states as $key => $departments) {
          if ($stateCount >= 40) {
            $link = generateStateLink($key, $isProd, $state);
            if (!empty($link)) {
              echo $link;
            }
          }

          $stateCount++;
        }
      ?>
    </div>
  </div>
</div>
