(function () {
  var $menu = document.getElementById('menu');
  var $menuToggle = document.getElementById('mobile-toggle');

  var $modal = document.getElementById('modal-wrapper');
  var $modalClose = document.getElementById('modal-close');
  var $modalContent = document.getElementById('modal-content');
  var $modalOverlay = document.getElementById('overlay');

  var $heroLocation = document.getElementById('hero-location');
  var $scoreLocation = document.getElementById('score-location');

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

  $heroLocation.addEventListener('click', function() {
    $modal.classList.toggle('open')
  });

  $scoreLocation.addEventListener('click', function() {
    $modal.classList.toggle('open')
  });
})();
