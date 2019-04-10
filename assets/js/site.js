(function () {
  var $mapLayer = document.getElementById('map-layer');
  var $menu = document.getElementById('menu');
  var $menuToggle = document.getElementById('mobile-toggle');
  var $modal = document.getElementById('modal-wrapper');
  var $modalClose = document.getElementById('modal-close');
  var $modalContent = document.getElementById('modal-content');
  var $modalOverlay = document.getElementById('overlay');
  var $scoreCard = document.getElementById('score-card');
  var $scoreLocation = document.getElementById('score-location');
  var $selectedCity = document.getElementsByClassName('selected-city');
  var $showLess = document.getElementById('show-less');
  var $showMore = document.getElementById('show-more');
  var $moreInfo = document.getElementsByClassName('more-info');
  var $moreInfoContent = document.getElementById('more-info-content');
  var $resultsInfo = document.getElementsByClassName('results-info');
  var $resultsInfoContent = document.getElementById('results-info-content');
  var $citySelect = document.getElementById('city-select');

  // Event Listeners
  $menuToggle.addEventListener('click', function() {
    $menu.classList.toggle('open')
  });

  $modalClose.addEventListener('click', function() {
    $moreInfoContent.style.display = 'none';
    $resultsInfoContent.style.display = 'none';
    $citySelect.style.display = 'block';
    $modal.classList.toggle('open');
    $modal.classList.remove('large');
  });

  $modalOverlay.addEventListener('click', function() {
    $moreInfoContent.style.display = 'none';
    $resultsInfoContent.style.display = 'none';
    $citySelect.style.display = 'block';
    $modal.classList.toggle('open');
    $modal.classList.remove('large');
  });

  $modalOverlay.addEventListener('mousewheel', function(e) {
    e.preventDefault();
    e.stopPropagation();
    e.stopImmediatePropagation();
  });

  $modalOverlay.addEventListener('touchmove', function(e) {
    e.preventDefault();
    e.stopPropagation();
    e.stopImmediatePropagation();
  });

  $modal.addEventListener('mousewheel', function(e) {
    e.preventDefault();
    e.stopPropagation();
    e.stopImmediatePropagation();
  });

  $modal.addEventListener('touchmove', function(e) {
    e.preventDefault();
    e.stopPropagation();
    e.stopImmediatePropagation();
  });

  $modalContent.addEventListener('mousewheel', function(e) {
    e.stopPropagation();
    e.stopImmediatePropagation();
  });

  $modalContent.addEventListener('touchmove', function(e) {
    e.stopPropagation();
    e.stopImmediatePropagation();
  });

  $mapLayer.addEventListener('click', function() {
    $modal.classList.toggle('open');
    $selectedCity[0].scrollIntoView();
  });

  $scoreLocation.addEventListener('click', function() {
    $modal.classList.toggle('open');
    $selectedCity[0].scrollIntoView();
  });

  $showLess.addEventListener('click', function() {
    $scoreCard.classList.toggle('short');
  });

  $showMore.addEventListener('click', function() {
    $scoreCard.classList.toggle('short');
  });

  function loadMoreInfo(city, prop) {
    var request = new XMLHttpRequest();
    var file = 'data/json/' + city + '.json';
    request.open('GET', file, true);
    request.onload = function() {
      if (request.status >= 200 && request.status < 400) {
        var data = JSON.parse(request.responseText);
        if (data && typeof data[prop] !== 'undefined' && data[prop]) {
          $citySelect.style.display = 'none';
          $moreInfoContent.style.display = 'block';
          $moreInfoContent.innerHTML = data[prop].replace(/(?:\r\n|\r|\n)/g, '<br><br>');
          $modal.classList.toggle('open');
        } else {
          console.error('Empty Prop', prop);
        }
      } else {
        console.error('Error Fetching', file);
      }
    };

    request.onerror = function() {
      console.error('Error Fetching', file);
    };

    request.send();
  }

  function loadResultsInfo(city, prop) {
    var request = new XMLHttpRequest();
    var file = 'data/json/' + city + '.json';
    request.open('GET', file, true);
    request.onload = function() {
      if (request.status >= 200 && request.status < 400) {
        var data = JSON.parse(request.responseText);
        if (data) {
          var class_a = (data.percent_of_less_lethal_force_per_arrest) ? 'key percent-' + data.percent_of_less_lethal_force_per_arrest.replace('%', '') : 'incomplete';
          var class_b = (data.percentile_of_deadly_force_incidents_per_arrest) ? 'key percent-' + data.percentile_of_deadly_force_incidents_per_arrest.replace('%', '') : 'incomplete';
          var class_c = (data.percent_of_deadly_force_against_unarmed_people_per_arrest) ? 'key percent-' + data.percent_of_deadly_force_against_unarmed_people_per_arrest.replace('%', '') : 'incomplete';
          var class_d = (data.percentile_overall_disparity_index) ? 'key percent-' + data.percentile_overall_disparity_index.replace('%', '') : 'incomplete';
          var class_e = (data.percent_of_complaints_sustained) ? 'key percent-' + data.percent_of_complaints_sustained.replace('%', '') : 'incomplete';
          var class_f = (data.percent_criminal_complaints_sustained) ? 'key percent-' + data.percent_criminal_complaints_sustained.replace('%', '') : 'incomplete';
          var class_g = (data.percent_of_misdemeanor_arrests_per_population) ? 'key percent-' + data.percent_of_misdemeanor_arrests_per_population.replace('%', '') : 'incomplete';
          var class_h = (data.percent_of_murders_solved) ? 'key percent-' + data.percent_of_murders_solved.replace('%', '') : 'incomplete';

          var html = '';

          html += '<div class="modal-header"><div class="results-header">Average from All 3 Sections: ' + data.overall_score + '</div><div class="keys"><span class="key key-bad"></span> BAD <span class="key key-avg"></span> AVG <span class="key key-good"></span> GOOD</div></div>';
          html += '<div class="section-header no-border"><div class="label">&nbsp;</div><div class="percentile"><strong>PERCENTILE</strong></div></div>';

          html += '<div class="section-header"><div class="label">Police Violence:&nbsp; ' + data.police_violence_score + '</div><div class="percentile">50TH</div></div>';
          html += '<table>';
          html += '<tr class="' + class_a + '"><td>Less-Lethal Force per Arrest</td><td width="25px">&nbsp;</td><td width="25px" class="divider">&nbsp;</td><td width="25px">&nbsp;</td><td width="25px">&nbsp;</td></tr>';
          html += '<tr class="' + class_b + '"><td>Deadly Force per Arrest</td><td>&nbsp;</td><td class="divider">&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>';
          html += '<tr class="double ' + class_c + '"><td>Unarmed Victims of Deadly Force per Arrest</td><td>&nbsp;</td><td class="divider">&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>';
          html += '<tr class="double ' + class_d + '"><td>Racial Disparities in Arrests and Deadly Force</td><td>&nbsp;</td><td class="divider">&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>';
          html += '</table>';

          html += '<div class="section-header"><div class="label">Police Accountability:&nbsp; ' + data.police_accountability_score + '</div><div class="percentile">&nbsp;</div></div>';
          html += '<table>';
          html += '<tr class="' + class_e + '"><td>Complaints Sustained</td><td width="25px">&nbsp;</td><td width="25px" class="divider">&nbsp;</td><td width="25px">&nbsp;</td><td width="25px">&nbsp;</td></tr>';
          html += '<tr class="double ' + class_f + '"><td>Criminal Allegations Sustained</td><td width="25px">&nbsp;</td><td width="25px" class="divider">&nbsp;</td><td width="25px">&nbsp;</td><td width="25px">&nbsp;</td></tr>';
          html += '</table>';

          html += '<div class="section-header"><div class="label">Approach to Policing:&nbsp; ' + data.approach_to_policing_score + '</div><div class="percentile">&nbsp;</div></div>';
          html += '<table>';
          html += '<tr class="double ' + class_g + '"><td>Misdemeanor Arrests per Population</td><td width="25px">&nbsp;</td><td width="25px" class="divider">&nbsp;</td><td width="25px">&nbsp;</td><td width="25px">&nbsp;</td></tr>';
          html += '<tr class="' + class_h + '"><td>Homicides Solved</td><td width="25px">&nbsp;</td><td width="25px" class="divider">&nbsp;</td><td width="25px">&nbsp;</td><td width="25px">&nbsp;</td></tr>';
          html += '</table>';

          $citySelect.style.display = 'none';
          $resultsInfoContent.style.display = 'block';
          $resultsInfoContent.innerHTML = html.replace(/(?:\r\n|\r|\n)/g, '<br><br>');
          $modal.classList.toggle('open');
          $modal.classList.add('large');
        } else {
          console.error('Empty Prop', prop);
        }
      } else {
        console.error('Error Fetching', file);
      }
    };

    request.onerror = function() {
      console.error('Error Fetching', file);
    };

    request.send();
  }

  // Click Event for More Info
  Array.prototype.forEach.call($moreInfo, function(el) {
    el.addEventListener('click', function(evt) {
      var city = evt.target.getAttribute('data-city');
      var prop = evt.target.getAttribute('data-more-info');

      if (city && prop) {
        loadMoreInfo(city, prop);
      }
    });
  });

  // Click Event for Results Info
  Array.prototype.forEach.call($resultsInfo, function(el) {
    el.addEventListener('click', function(evt) {
      var city = evt.target.getAttribute('data-city');
      var prop = evt.target.getAttribute('data-result-info');

      if (city && prop) {
        loadResultsInfo(city, prop);
      }
    });
  });

  document.getElementById('toggle-animate').classList.toggle('animate');
})();
