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

  // Event Listeners
  $menuToggle.addEventListener('click', function() {
    $menu.classList.toggle('open')
  });

  $modalClose.addEventListener('click', function() {
    $modal.classList.toggle('open')
  });

  $modalOverlay.addEventListener('click', function() {
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
})();
