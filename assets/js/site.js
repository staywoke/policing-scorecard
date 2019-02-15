(function () {
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
  var $citySelect = document.getElementById('city-select');

  // Event Listeners
  $menuToggle.addEventListener('click', function() {
    $menu.classList.toggle('open')
  });

  $modalClose.addEventListener('click', function() {
    $moreInfoContent.style.display = 'none';
    $citySelect.style.display = 'block';
    $modal.classList.toggle('open')
  });

  $modalOverlay.addEventListener('click', function() {
    $moreInfoContent.style.display = 'none';
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

  document.getElementById('toggle-animate').classList.toggle('animate');
})();
