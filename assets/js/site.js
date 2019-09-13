var SCORECARD_MAP;
var SCORECARD = (function () {
  var $mapLayer = document.getElementById('map-layer');
  var $menu = document.getElementById('menu');
  var $menuToggle = document.getElementById('mobile-toggle');
  var $modal = document.getElementById('modal-wrapper');
  var $modalTabs = document.getElementById('modal-header-tabs');
  var $modalClose = document.getElementById('modal-close');
  var $modalContent = document.getElementById('modal-content');
  var $modalLabel = document.getElementById('modal-label');
  var $modalOverlay = document.getElementById('overlay');
  var scoreCard = document.getElementById('score-card');
  var $scoreLocation = document.getElementById('score-location');
  var $selectedCity = document.getElementsByClassName('selected-city');
  var $showLess = document.getElementById('show-less');
  var $showMore = document.getElementById('show-more');
  var $moreInfo = document.getElementsByClassName('more-info');
  var $moreInfoContent = document.getElementById('more-info-content');
  var $resultsInfo = document.getElementsByClassName('results-info');
  var $resultsInfoContent = document.getElementById('results-info-content');
  var $citySelect = document.getElementById('city-select');
  var $toggleAnimate = document.getElementById('toggle-animate');
  var $showPolice = document.getElementById('show-police');
  var $showSheriff = document.getElementById('show-sheriff');

  // Handle Mouse Clicks for Map
  var leftMouseClicked = false;

  // Support Mouse Interaction with Mouse Pointer ( Touch events would not work on this map due to close proximity of markers )
  document.body.onmousedown = function(e) {
    if (!e) { return; }

    // Track if we have a left mouse key down
    leftMouseClicked = (typeof e.buttons === 'undefined') ? e.which === 1 : e.buttons === 1;
  };

  // Clear Mouse Down, but leave it on long enough for Map click event to check it's value
  document.body.onmouseup = function(){ setTimeout(function(){
    leftMouseClicked = false;
  }, 100) };

  // Debounce Scroll Animations
  var debounce = false;

  // Event Listeners
  if ($menuToggle) {
    $menuToggle.addEventListener('click', function() {
      $menu.classList.toggle('open')
    });
  }

  if ($modal) {
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
      $modalLabel.innerHTML = 'Select a Department';
      $modal.classList.toggle('open');
      $modalTabs.style.display = 'block';
      $selectedCity[0].scrollIntoView();
    });

    $scoreLocation.addEventListener('click', function() {
      $modalLabel.innerHTML = 'Select a Department';
      $modal.classList.toggle('open');
      $modalTabs.style.display = 'block';
      $selectedCity[0].scrollIntoView();
    });

    $showLess.addEventListener('click', function() {
      scoreCard.classList.toggle('short');
    });

    $showMore.addEventListener('click', function() {
      scoreCard.classList.toggle('short');
    });

    $showPolice.addEventListener('click', function() {
      $showPolice.classList.add('active');
      $showSheriff.classList.remove('active');

      $citySelect.classList.add('city');
      $citySelect.classList.remove('sheriff');

      $citySelect.scrollTop = 0;
    });

    $showSheriff.addEventListener('click', function() {
      $showSheriff.classList.add('active');
      $showPolice.classList.remove('active');

      $citySelect.classList.add('sheriff');
      $citySelect.classList.remove('city');

      $citySelect.scrollTop = 0;
    });
  }

  function isScrolledIntoView(el) {
    var bounding = el.getBoundingClientRect();

    return (
      bounding.top >= 0 &&
      bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight)
    );
  }

  function animateProgressBars() {
    var $progressBars = document.getElementsByClassName('animate-bar');

    Array.prototype.forEach.call($progressBars, function(el) {
      if (isScrolledIntoView(el)) {
        var percent = el.getAttribute('data-percent');
        el.style.width = percent;
        el.classList.remove('animate-bar');
      }
    });
  }

  function animateCheckMarks() {
    var $checks = document.getElementsByClassName('animate-check');

    Array.prototype.forEach.call($checks, function(el) {
      if (isScrolledIntoView(el)) {
        el.style.backgroundPosition = '0 center';
        el.classList.remove('animate-check');
      }
    });
  }

  function animate () {
    animateProgressBars();
    animateCheckMarks()
  }

  function loadMoreInfo(city, prop) {
    $modalLabel.innerHTML = '';
    $modalTabs.style.display = 'none';

    var path = (window.location.search.indexOf('sheriff') !== -1) ? 'data/json/sheriff-' : 'data/json/data-';
    var request = new XMLHttpRequest();
    var file = path + city + '.json';
    request.open('GET', file, true);
    request.onload = function() {
      if (request.status >= 200 && request.status < 400) {
        var data = JSON.parse(request.responseText);
        if (data && typeof data[prop] !== 'undefined' && data[prop]) {
          $citySelect.style.display = 'none';
          $moreInfoContent.style.display = 'block';
          $moreInfoContent.innerHTML = data[prop].replace(/(?:\r\n|\r|\n)/g, '<br><br>');
          $modal.classList.toggle('open');
          $modalContent.scrollTop = 0;
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

  function getGrade(score) {
    score = parseInt(score);

    if (score <= 59) {
      return 'F';
    } else if (score <= 62 && score >= 60) {
      return 'D-';
    } else if (score <= 66 && score >= 63) {
      return 'D';
    } else if (score <= 69 && score >= 67) {
      return 'D+';
    } else if (score <= 72 && score >= 70) {
      return 'C-';
    } else if (score <= 76 && score >= 73) {
      return 'C';
    } else if (score <= 79 && score >= 77) {
      return 'C+';
    } else if (score <= 82 && score >= 80) {
      return 'B-';
    } else if (score <= 86 && score >= 83) {
      return 'B';
    } else if (score <= 89 && score >= 87) {
      return 'B+';
    } else if (score <= 92 && score >= 90) {
      return 'A-';
    } else if (score <= 97 && score >= 93) {
      return 'A';
    } else if (score >= 98) {
      return 'A+';
    }
  }

  function loadResultsInfo(city, prop) {
    $modalLabel.innerHTML = '';
    $modalTabs.style.display = 'none';

    var path = (window.location.search.indexOf('sheriff') !== -1) ? 'data/json/sheriff-' : 'data/json/data-';
    var request = new XMLHttpRequest();
    var file = path + city + '.json';
    request.open('GET', file, true);
    request.onload = function() {
      if (request.status >= 200 && request.status < 400) {
        var data = JSON.parse(request.responseText);
        if (data) {
          var class_a = (data.percent_of_less_lethal_force_per_arrest) ? 'key percent-' + parseInt(data.percent_of_less_lethal_force_per_arrest.replace('%', '')) : 'incomplete';
          var class_b = (data.percentile_of_deadly_force_incidents_per_arrest) ? 'key percent-' + parseInt(data.percentile_of_deadly_force_incidents_per_arrest.replace('%', '')) : 'incomplete';
          var class_c = (data.percent_of_deadly_force_against_unarmed_people_per_arrest) ? 'key percent-' + parseInt(data.percent_of_deadly_force_against_unarmed_people_per_arrest.replace('%', '')) : 'incomplete';
          var class_d = (data.percentile_overall_disparity_index) ? 'key percent-' + parseInt(data.percentile_overall_disparity_index.replace('%', '')) : 'incomplete';
          var class_e = (data.percent_of_complaints_sustained && data.percent_of_complaints_sustained.replace('%', '') !== '0') ? 'key percent-' + parseInt(data.percent_of_complaints_sustained.replace('%', '')) : 'no-complaints';
          var class_f = (data.percent_criminal_complaints_sustained && data.percent_of_complaints_sustained.replace('%', '') !== '0') ? 'key percent-' + parseInt(data.percent_criminal_complaints_sustained.replace('%', '')) : 'no-complaints';
          var class_g = (data.percent_of_misdemeanor_arrests_per_population) ? 'key percent-' + parseInt(data.percent_of_misdemeanor_arrests_per_population.replace('%', '')) : 'incomplete';
          var class_h = (data.percent_of_murders_solved) ? 'key percent-' + parseInt(data.percent_of_murders_solved.replace('%', '')) : 'incomplete';

          var grade = getGrade(data.overall_score.replace('%', ''));
          var html = '';

          html += '<div class="modal-header"><div class="results-header"><strong>' + data.agency_name + '</strong><br/>Grade:&nbsp; <strong class="grade grade-' + grade.replace(/[^A-Z]/, '').toLowerCase() + '">' + grade + '</strong> (' + data.overall_score + ')</div><div class="keys"><span class="key key-bad"></span> WORSE <span class="key key-avg"></span> AVG <span class="key key-good"></span> BETTER</div></div>';
          html += '<div class="section-header no-border"><div class="label">&nbsp;</div><div class="percentile"><strong>PERCENTILE</strong></div></div>';

          html += '<div class="section-header"><div class="label">Police Violence:&nbsp; ' + data.police_violence_score + '</div><div class="percentile">50TH</div></div>';
          html += '<table>';
          html += '<tr class="' + class_a + '"><td width="160px">Less-Lethal Force per Arrest</td><td width="25px">&nbsp;</td><td width="25px" class="divider">&nbsp;</td><td width="25px">&nbsp;</td><td width="25px">&nbsp;</td></tr>';
          html += '<tr class="' + class_b + '"><td width="160px">Deadly Force per Arrest</td><td>&nbsp;</td><td class="divider">&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>';
          html += '<tr class="double ' + class_c + '"><td width="160px">Unarmed Victims of Deadly Force per Arrest</td><td>&nbsp;</td><td class="divider">&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>';
          html += '<tr class="double ' + class_d + '"><td width="160px">Racial Disparities in Arrests and Deadly Force</td><td>&nbsp;</td><td class="divider">&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>';
          html += '</table>';

          html += '<div class="section-header"><div class="label">Police Accountability:&nbsp; ' + data.police_accountability_score + '</div><div class="percentile">&nbsp;</div></div>';
          html += '<table>';
          html += '<tr class="' + class_e + '"><td width="160px">Complaints Sustained</td><td width="25px">&nbsp;</td><td width="25px" class="divider">&nbsp;</td><td width="25px">&nbsp;</td><td width="25px">&nbsp;</td></tr>';
          html += '<tr class="double ' + class_f + '"><td width="160px">Criminal Allegations Sustained</td><td width="25px">&nbsp;</td><td width="25px" class="divider">&nbsp;</td><td width="25px">&nbsp;</td><td width="25px">&nbsp;</td></tr>';
          html += '</table>';

          html += '<div class="section-header"><div class="label">Approach to Policing:&nbsp; ' + data.approach_to_policing_score + '</div><div class="percentile">&nbsp;</div></div>';
          html += '<table>';
          html += '<tr class="double ' + class_g + '"><td width="160px">Over-Policing (Misdemeanor Arrest Rate)</td><td width="25px">&nbsp;</td><td width="25px" class="divider">&nbsp;</td><td width="25px">&nbsp;</td><td width="25px">&nbsp;</td></tr>';
          html += '<tr class="' + class_h + '"><td width="160px">Homicides Solved</td><td width="25px">&nbsp;</td><td width="25px" class="divider">&nbsp;</td><td width="25px">&nbsp;</td><td width="25px">&nbsp;</td></tr>';
          html += '</table>';

          html += '<div class="summary"><strong>Average from All 3 Sections:&nbsp; ' + data.overall_score + '</strong></div>';
          html += '<div class="button-wrapper"><a href="/about" class="button" target="_blank">Read Our Methodology</a></div>';

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

  function getGrade(score) {
    score = parseInt(score);

    if (score <= 59) {
      return 'F';
    } else if (score <= 62 && score >= 60) {
      return 'D-';
    } else if (score <= 66 && score >= 63) {
      return 'D';
    } else if (score <= 69 && score >= 67) {
      return 'D+';
    } else if (score <= 72 && score >= 70) {
      return 'C-';
    } else if (score <= 76 && score >= 73) {
      return 'C';
    } else if (score <= 79 && score >= 77) {
      return 'C+';
    } else if (score <= 82 && score >= 80) {
      return 'B-';
    } else if (score <= 86 && score >= 83) {
      return 'B';
    } else if (score <= 89 && score >= 87) {
      return 'B+';
    } else if (score <= 92 && score >= 90) {
      return 'A-';
    } else if (score <= 97 && score >= 93) {
      return 'A';
    } else if (score >= 98) {
      return 'A+';
    }
  }

  function loadMap(){
    // Create the chart
    window.SCORECARD_MAP = Highcharts.mapChart('state-map', {
      chart: {
        animation: false,
        backgroundColor: 'transparent',
        borderWidth: 0,
        margin: 0,
        zoomType: false,
        styleMode: true
      },
      title: {
        text: '',
        style: {
          display: 'none'
        }
      },
      legend: {
        enabled: false
      },
      mapNavigation: {
        enabled: false
      },
      tooltip: {
        followPointer: false,
        borderColor: '#444444',
        formatter: function () {
          var city = this.point.name;
          var score = this.point.value;
          var percent = Math.round(parseFloat(score));
          var newTooltip = this.series.name + '<br /><strong>' + city + '</strong><br />Grade: ' + getGrade(score) + ' ( ' + percent + '% )';

          return newTooltip;
        }
      },
      plotOptions: {
        map: {
          animation: false,
          allAreas: false,
          mapData: Highcharts.maps['countries/us/us-ca-all'],
        },
        series: {
          animation: false
        }
      },
      series: [
        {
          animation: false,
          allAreas: true,
          showInLegend: true
        },
        {
          animation: false,
          data: map_data.sheriff,
          name: 'Sheriff Department',
          events: {
            click: function (e) {
              var loc = (typeof e.point.className !== 'undefined') ? e.point.className.replace('location-', '') : null;

              if (loc && leftMouseClicked) {
                window.location = '?sheriff=' + loc;
                e.preventDefault();
                e.stopImmediatePropagation();
              }
            }
          }
        },
        {
          animation: false,
          type: 'mappoint',
          name: 'Police Department',
          data: map_data.city[0],
          marker: {
            width: 12,
            height: 12,
            fillColor: '',
            symbol: 'url(assets/img/police-marker-f.svg)'
          },
          dataLabels: {
            formatter: function () {
              return '';
            }
          },
          events: {
            click: function (e) {
              var loc = (typeof e.point.className !== 'undefined') ? e.point.className.replace('location-', '') : null;

              if (loc && leftMouseClicked) {
                window.location = '?city=' + loc
                e.preventDefault();
                e.stopImmediatePropagation();
              }
            }
          }
        },
        {
          animation: false,
          type: 'mappoint',
          name: 'Police Department',
          data: map_data.city[1],
          marker: {
            width: 12,
            height: 12,
            fillColor: '',
            symbol: 'url(assets/img/police-marker-d.svg)'
          },
          dataLabels: {
            formatter: function () {
              return '';
            }
          },
          events: {
            click: function (e) {
              var loc = (typeof e.point.className !== 'undefined') ? e.point.className.replace('location-', '') : null;

              if (loc && leftMouseClicked) {
                window.location = '?city=' + loc
                e.preventDefault();
                e.stopImmediatePropagation();
              }
            }
          }
        },
        {
          animation: false,
          type: 'mappoint',
          name: 'Police Department',
          data: map_data.city[2],
          marker: {
            width: 12,
            height: 12,
            fillColor: '',
            symbol: 'url(assets/img/police-marker-c.svg)'
          },
          dataLabels: {
            formatter: function () {
              return '';
            }
          },
          events: {
            click: function (e) {
              var loc = (typeof e.point.className !== 'undefined') ? e.point.className.replace('location-', '') : null;

              if (loc && leftMouseClicked) {
                window.location = '?city=' + loc
                e.preventDefault();
                e.stopImmediatePropagation();
              }
            }
          }
        },
        {
          animation: false,
          type: 'mappoint',
          name: 'Police Department',
          data: map_data.city[3],
          marker: {
            width: 12,
            height: 12,
            fillColor: '',
            symbol: 'url(assets/img/police-marker-b.svg)'
          },
          dataLabels: {
            formatter: function () {
              return '';
            }
          },
          events: {
            click: function (e) {
              var loc = (typeof e.point.className !== 'undefined') ? e.point.className.replace('location-', '') : null;

              if (loc && leftMouseClicked) {
                window.location = '?city=' + loc
                e.preventDefault();
                e.stopImmediatePropagation();
              }
            }
          }
        },
        {
          animation: false,
          type: 'mappoint',
          name: 'Police Department',
          data: map_data.city[4],
          marker: {
            width: 12,
            height: 12,
            symbol: 'url(assets/img/police-marker-a.svg)'
          },
          dataLabels: {
            formatter: function () {
              return '';
            }
          },
          events: {
            click: function (e) {
              var loc = (typeof e.point.className !== 'undefined') ? e.point.className.replace('location-', '') : null;

              if (loc && leftMouseClicked) {
                window.location = '?city=' + loc
                e.preventDefault();
                e.stopImmediatePropagation();
              }
            }
          }
        }
      ]
    });

    if (map_data.selected.type === 'city') {
      window.SCORECARD_MAP.addSeries({
        id: 'current',
        type: 'mappoint',
        name: map_data.selected.name,
        data: map_data.selected.data,
        marker: {
          width: 30,
          height: 30,
          symbol: map_data.selected.icon
        },
        dataLabels: {
          style: {
            fontSize: '24px',
          },
          x: 100,
          y: 100,
          formatter: function () {
            return map_data.selected.name;
          }
        }
      }, true);

      var current = window.SCORECARD_MAP.get('current');

      function animateMarker(current, size, step) {
        var maxSize = 44;
        var minSize = 30;
        var newStep = step;
        var stepSize = 1;
        var direction = (step === 0 || step === 2 || step === 4) ? 'up' : 'down';

        if (direction === 'up' && size === maxSize) {
          direction = 'down';
          newStep++;
        } else if (direction === 'down' && size === minSize) {
          direction = 'up';
          newStep++;
        }

        if (newStep === 6) {
          return;
        }

        var newSize = (direction === 'up') ? (size + stepSize) : (size - stepSize)

        current.update({ marker: { width: newSize, height: newSize }});

        window.requestAnimationFrame(function () {
          animateMarker(current, newSize, newStep);
        });
      }

      setTimeout(function(){
        animateMarker(current, 30, 0);
      }, 250);
    }

    var type = document.getElementById('state-map').classList[0];
    var loc = document.getElementById('state-map').classList[1];
    var elm;

    if (type === 'city') {
      elm = document.querySelector('.highcharts-mappoint-series .location-' + loc).classList.add('active')
    } else if (type === 'sheriff') {
      elm = document.querySelector('.highcharts-map-series .location-' + loc);
    }

    if (elm) {
      elm.classList.add('active')
    }
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

  // Handle Progress Bars
  window.onscroll = function() {
    clearTimeout(debounce);
    debounce = setTimeout(animate, 10);
  };

  // Fix bug where if user is already on middle of page, and hits refresh, they will still see animation correctly
  setTimeout(animate, 250);
  setTimeout(animate, 500);
  setTimeout(animate, 1000);

  if ($toggleAnimate) {
    $toggleAnimate.classList.toggle('animate');
  }

  return {
    animate: animate,
    loadMap: loadMap,
    loadResultsInfo: loadResultsInfo
  }
})();
