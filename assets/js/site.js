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
    $modal.classList.toggle('open')
  });

  $modalOverlay.addEventListener('click', function() {
    $moreInfoContent.style.display = 'none';
    $resultsInfoContent.style.display = 'none';
    $citySelect.style.display = 'block';
    $modal.classList.toggle('open')
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
          var html = '';
          if (prop === 'police-violence') {
            html += '<p class="score"><strong>Police Violence Score:</strong>&nbsp; ' + data.police_violence_score + '</p>';
            html += '<p class="instructions"><strong>Factors used to calculate this score:</strong></p>';
            html += '<p><strong>Percentile of Less-Lethal Force per Arrest:</strong>&nbsp; ' + data.percent_of_less_lethal_force_per_arrest + '</p>';
            html += '<p><strong>Percentile of Deadly Force per Arrest:</strong>&nbsp; ' + data.percentile_of_deadly_force_incidents_per_arrest + '</p>';
            html += '<p><strong>Percentile Unarmed Victims of Deadly Force per Arrest:</strong>&nbsp; ' + data.percent_of_deadly_force_against_unarmed_people_per_arrest + '</p>';
            html += '<p><strong>Percentile of Racial Disparities in Arrests and Deadly Force:</strong>&nbsp; ' + data.percentile_overall_disparity_index + '</p>';
          } else if (prop === 'police-accountability') {
            html += '<p class="score"><strong>Police Accountability Score:</strong>&nbsp; ' + data.police_accountability_score + '</p>';
            html += '<p class="instructions"><strong>Factors used to calculate this score:</strong></p>';
            html += '<p><strong>Percentile of Complaints Sustained:</strong>&nbsp; ' + data.percent_of_complaints_sustained + '</p>';
            html += '<p><strong>Percent of Criminal Allegations Sustained:</strong>&nbsp; ' + data.percent_criminal_complaints_sustained + '</p>';
          } else if (prop === 'approach') {
            html += '<p class="score"><strong>Approach to Policing Score:</strong>&nbsp; ' + data.approach_to_policing_score + '</p>';
            html += '<p class="instructions"><strong>Factors used to calculate this score:</strong></p>';
            html += '<p><strong>Percentile of Misdemeanor Arrests per Population:</strong>&nbsp; ' + data.percent_of_misdemeanor_arrests_per_population + '</p>';
            html += '<p><strong>Percent of Homicides Solved:</strong>&nbsp; ' + data.percent_of_murders_solved + '</p>';
          }

          $citySelect.style.display = 'none';
          $resultsInfoContent.style.display = 'block';
          $resultsInfoContent.innerHTML = html.replace(/(?:\r\n|\r|\n)/g, '<br><br>');
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
