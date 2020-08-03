var SCORECARD_MAP;
var SCORECARD = (function () {
  var $stateMapLayer = document.getElementById('state-map-layer');
  var $usaMapLayer = document.getElementById('usa-map-layer');
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
  var $selectedState = document.querySelector('#state-select a.active');
  var $showLess = document.getElementById('show-less');
  var $showMore = document.getElementById('show-more');
  var $moreInfo = document.getElementsByClassName('more-info');
  var $moreInfoContent = document.getElementById('more-info-content');
  var $resultsInfo = document.getElementsByClassName('results-info');
  var $resultsInfoContent = document.getElementById('results-info-content');
  var $citySelect = document.getElementById('city-select');
  var $stateSelect = document.getElementById('state-select');
  var $stateSelection = document.getElementById('state-selection');
  var $toggleAnimate = document.getElementById('toggle-animate');
  var $showPolice = document.getElementById('show-police');
  var $showSheriff = document.getElementById('show-sheriff');
  var $stateMap = document.getElementById('state-map');
  var $stateMapShadow = document.getElementById('state-map-shadow');

  // Handle Mouse Clicks for Map
  window.leftMouseClicked = false;

  // Support Mouse Interaction with Mouse Pointer ( Touch events would not work on this map due to close proximity of markers )
  document.body.onmousedown = function(e) {
    if (!e) { return; }

    // Track if we have a left mouse key down
    window.leftMouseClicked = (typeof e.buttons === 'undefined') ? e.which === 1 : e.buttons === 1;
  };

  // Clear Mouse Down, but leave it on long enough for Map click event to check it's value
  document.body.onmouseup = function(){ setTimeout(function(){
    window.leftMouseClicked = false;
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
      $stateSelect.style.display = 'none';
      $modal.classList.toggle('open');
      $modal.classList.remove('large');

      if ($citySelect) {
        $citySelect.style.display = 'block';
      }
    });

    $modalOverlay.addEventListener('click', function() {
      $moreInfoContent.style.display = 'none';
      $resultsInfoContent.style.display = 'none';
      $stateSelect.style.display = 'none';
      $modal.classList.toggle('open');
      $modal.classList.remove('large');

      if ($citySelect) {
        $citySelect.style.display = 'block';
      }
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
  }

  if ($stateSelection) {}
  $stateSelection.addEventListener('click', function() {
    $modalLabel.innerHTML = 'Select a State';
    $modal.classList.toggle('open');
    $modalTabs.style.display = 'none';
    $stateSelect.style.display = 'block';

    if ($citySelect) {
      $citySelect.style.display = 'none';
    }

    if ($selectedState) {
      $selectedState.scrollIntoView();
    }
  });

  if ($stateMapLayer) {
    $stateMapLayer.addEventListener('click', function() {
      $modalLabel.innerHTML = 'Select a Department';
      $modal.classList.toggle('open');
      $modalTabs.style.display = 'block';
      $stateSelect.style.display = 'none';

      if ($citySelect) {
        $citySelect.style.display = 'block';
      }

      if ($selectedCity) {
        $selectedCity[0].scrollIntoView();
      }
    });
  }

  if ($usaMapLayer) {
    $usaMapLayer.addEventListener('click', function() {
      $modalLabel.innerHTML = 'Select a State';
      $modal.classList.toggle('open');
      $modalTabs.style.display = 'none';
      $stateSelect.style.display = 'block';

      if ($citySelect) {
        $citySelect.style.display = 'none';
      }

      if ($selectedState) {
        $selectedState.scrollIntoView();
      }
    });
  }

  if ($scoreLocation) {
    $scoreLocation.addEventListener('click', function() {
      $modalLabel.innerHTML = 'Select a Department';
      $modal.classList.toggle('open');
      $modalTabs.style.display = 'block';
      $stateSelect.style.display = 'none';

      if ($citySelect) {
        $citySelect.style.display = 'block';
      }

      if ($selectedCity) {
        $selectedCity[0].scrollIntoView();
      }
    });
  }

  if ($showLess) {
    $showLess.addEventListener('click', function() {
      scoreCard.classList.toggle('short');
    });
  }

  if ($showMore) {
    $showMore.addEventListener('click', function() {
      scoreCard.classList.toggle('short');
    });
  }

  if ($showPolice) {
    $showPolice.addEventListener('click', function() {
      $showPolice.classList.add('active');
      $showSheriff.classList.remove('active');

      $citySelect.classList.add('police-department');
      $citySelect.classList.remove('sheriff');

      $citySelect.scrollTop = 0;
    });
  }

  if ($showSheriff) {
    $showSheriff.addEventListener('click', function() {
      $showSheriff.classList.add('active');
      $showPolice.classList.remove('active');

      $citySelect.classList.add('sheriff');
      $citySelect.classList.remove('police-department');

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
        el.classList.remove('animate-check');
      }
    });
  }

  function animate () {
    animateProgressBars();
    animateCheckMarks()
  }

  function loadMoreInfo(info) {
    $modalLabel.innerHTML = '';
    $modalTabs.style.display = 'none';

    if (info) {
      $citySelect.style.display = 'none';
      $stateSelect.style.display = 'none';
      $moreInfoContent.style.display = 'block';
      $moreInfoContent.innerHTML = info.replace(/(?:\r\n|\r|\n)/g, '<br><br>');
      $modal.classList.toggle('open');
      $modalContent.scrollTop = 0;
    }
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

  function loadResultsInfo() {
    $modalLabel.innerHTML = '';
    $modalTabs.style.display = 'none';

    var label = (window.location.search.indexOf('sheriff') !== -1) ? 'Sheriff\'s Department' : 'Police Department';

    if (SCORECARD_DATA) {
      var class_a = (typeof SCORECARD_DATA.report.percentile_less_lethal_force === 'number') ? 'key percent-' + SCORECARD_DATA.report.percentile_less_lethal_force : 'incomplete';
      var class_b = (typeof SCORECARD_DATA.report.percentile_killed_by_police === 'number') ? 'key percent-' + SCORECARD_DATA.report.percentile_killed_by_police : 'incomplete';
      var class_c = (typeof SCORECARD_DATA.report.percentile_unarmed_killed_by_police === 'number') ? 'key percent-' + SCORECARD_DATA.report.percentile_unarmed_killed_by_police : 'incomplete';
      var class_d = (typeof SCORECARD_DATA.report.percentile_overall_disparity_index === 'number') ? 'key percent-' + SCORECARD_DATA.report.percentile_overall_disparity_index : 'incomplete';
      var class_e = (typeof SCORECARD_DATA.report.percentile_complaints_sustained === 'number') ? 'key percent-' + SCORECARD_DATA.report.percentile_complaints_sustained : 'no-complaints';
      var class_f = (typeof SCORECARD_DATA.report.percent_criminal_complaints_sustained === 'number') ? 'key percent-' + SCORECARD_DATA.report.percent_criminal_complaints_sustained : 'no-complaints';
      var class_g = (typeof SCORECARD_DATA.report.percentile_low_level_arrests_per_1k_population === 'number') ? 'key percent-' + SCORECARD_DATA.report.percentile_low_level_arrests_per_1k_population : 'incomplete';
      var class_h = (typeof SCORECARD_DATA.report.percent_murders_solved === 'number') ? 'key percent-' + SCORECARD_DATA.report.percent_murders_solved : 'incomplete';
      var class_i = (typeof SCORECARD_DATA.report.percentile_jail_incarceration_per_1k_population === 'number') ? 'key percent-' + SCORECARD_DATA.report.percentile_jail_incarceration_per_1k_population : 'incomplete';
      var class_j = (typeof SCORECARD_DATA.report.percentile_jail_deaths_per_1k_jail_population === 'number') ? 'key percent-' + SCORECARD_DATA.report.percentile_jail_deaths_per_1k_jail_population : 'incomplete';

      var class_k = (typeof SCORECARD_DATA.police_funding.percentile_police_spending_ratio === 'number') ? 'key percent-' + SCORECARD_DATA.police_funding.percentile_police_spending_ratio : 'incomplete';
      var class_l = (typeof SCORECARD_DATA.police_funding.percentile_misconduct_settlements_per_population === 'number') ? 'key percent-' + SCORECARD_DATA.police_funding.percentile_misconduct_settlements_per_population : 'incomplete';
      var class_m = (typeof SCORECARD_DATA.police_funding.percentile_fines_forfeitures_per_resident === 'number') ? 'key percent-' + SCORECARD_DATA.police_funding.percentile_fines_forfeitures_per_resident : 'incomplete';
      var class_n = (typeof SCORECARD_DATA.police_funding.percentile_officers_per_population === 'number') ? 'key percent-' + SCORECARD_DATA.police_funding.percentile_officers_per_population : 'incomplete';

      if (SCORECARD_DATA.report.percentile_killed_by_police === 0) {
        class_b = 'none-reported';
      }

      if (SCORECARD_DATA.report.percentile_unarmed_killed_by_police === 0) {
        class_c = 'none-reported';
      }

      var html = '';

      html += '<div class="modal-header"><div class="results-header"><strong style="position: relative; top: -2px;">' + SCORECARD_DATA.agency.name + ' ' + label + '</strong><br/>Score: ' + SCORECARD_DATA.report.overall_score + '%</div><div class="keys"><span class="key key-bad"></span> WORSE <span class="key key-avg"></span> AVG <span class="key key-good"></span> BETTER</div></div>';
      html += '<div class="section-header no-border"><div class="label">&nbsp;</div><div class="percentile"><strong>PERCENTILE</strong></div></div>';

      html += '<div class="section-header"><div class="label">Police Funding:&nbsp; ' + (SCORECARD_DATA.report.police_funding_score ? SCORECARD_DATA.report.police_funding_score : 0) + '%</div><div class="percentile">50TH</div></div>';
      html += '<table>';
      html += '<tr class="' + class_k + '"><td width="160px">Police Budget per Capita</td><td width="25px">&nbsp;</td><td width="25px" class="divider">&nbsp;</td><td width="25px">&nbsp;</td><td width="25px">&nbsp;</td></tr>';
      html += '<tr class="' + class_l + '"><td width="160px">Misconduct Settlements</td><td>&nbsp;</td><td class="divider">&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>';
      html += '<tr class="' + class_m + '"><td width="160px">Fines/Forfeitures</td><td>&nbsp;</td><td class="divider">&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>';
      html += '<tr class="' + class_n + '"><td width="160px">Officers per Capita</td><td>&nbsp;</td><td class="divider">&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>';
      html += '</table>';

      html += '<div class="section-header"><div class="label">Police Violence:&nbsp; ' + (SCORECARD_DATA.report.police_violence_score ? SCORECARD_DATA.report.police_violence_score : 0) + '%</div><div class="percentile">&nbsp;</div></div>';
      html += '<table>';
      html += '<tr class="' + class_a + '"><td width="160px">Less-Lethal Force per Arrest</td><td width="25px">&nbsp;</td><td width="25px" class="divider">&nbsp;</td><td width="25px">&nbsp;</td><td width="25px">&nbsp;</td></tr>';
      html += '<tr class="' + class_b + '"><td width="160px">Deadly Force per Arrest</td><td>&nbsp;</td><td class="divider">&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>';
      html += '<tr class="double ' + class_c + '"><td width="160px">Unarmed Victims of Deadly Force per Arrest</td><td>&nbsp;</td><td class="divider">&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>';
      html += '<tr class="double ' + class_d + '"><td width="160px">Racial Disparities in Arrests and Deadly Force</td><td>&nbsp;</td><td class="divider">&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>';
      html += '</table>';

      html += '<div class="section-header"><div class="label">Police Accountability:&nbsp; ' + (SCORECARD_DATA.report.police_accountability_score ? SCORECARD_DATA.report.police_accountability_score : 0) + '%</div><div class="percentile">&nbsp;</div></div>';
      html += '<table>';
      html += '<tr class="' + class_e + '"><td width="160px">Complaints Sustained</td><td width="25px">&nbsp;</td><td width="25px" class="divider">&nbsp;</td><td width="25px">&nbsp;</td><td width="25px">&nbsp;</td></tr>';
      html += '<tr class="' + class_f + '"><td width="160px">Criminal Allegations Sustained</td><td width="25px">&nbsp;</td><td width="25px" class="divider">&nbsp;</td><td width="25px">&nbsp;</td><td width="25px">&nbsp;</td></tr>';
      html += '</table>';

      html += '<div class="section-header"><div class="label">Approach to Policing:&nbsp; ' + (SCORECARD_DATA.report.approach_to_policing_score ? SCORECARD_DATA.report.approach_to_policing_score : 0) + '%</div><div class="percentile">&nbsp;</div></div>';
      html += '<table>';
      html += '<tr class="double ' + class_g + '"><td width="160px">Over-Policing (Misdemeanor Arrest Rate)</td><td width="25px">&nbsp;</td><td width="25px" class="divider">&nbsp;</td><td width="25px">&nbsp;</td><td width="25px">&nbsp;</td></tr>';
      html += '<tr class="' + class_h + '"><td width="160px">Homicides Solved</td><td width="25px">&nbsp;</td><td width="25px" class="divider">&nbsp;</td><td width="25px">&nbsp;</td><td width="25px">&nbsp;</td></tr>';

      if (SCORECARD_DATA.report.percentile_jail_deaths_per_1k_jail_population && SCORECARD_DATA.report.percentile_jail_incarceration_per_1k_population) {
        html += '<tr class="' + class_i + '"><td width="160px">Jail Incarceration Rate</td><td width="25px">&nbsp;</td><td width="25px" class="divider">&nbsp;</td><td width="25px">&nbsp;</td><td width="25px">&nbsp;</td></tr>';
        html += '<tr class="' + class_j + '"><td width="160px">Jail Deaths per 1,000</td><td width="25px">&nbsp;</td><td width="25px" class="divider">&nbsp;</td><td width="25px">&nbsp;</td><td width="25px">&nbsp;</td></tr>';
      }

      html += '</table>';

      html += '<div class="summary"><strong>Average from All 4 Sections:&nbsp; ' + SCORECARD_DATA.report.overall_score + '%</strong></div>';
      html += '<div class="button-wrapper"><a href="/about" class="button" target="_blank">Read Our Methodology</a></div>';

      $citySelect.style.display = 'none';
      $stateSelect.style.display = 'none';
      $resultsInfoContent.style.display = 'block';
      $resultsInfoContent.innerHTML = html.replace(/(?:\r\n|\r|\n)/g, '<br><br>');
      $modal.classList.toggle('open');
      $modal.classList.add('large');
    }
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

  function loadMap(abbr){
    // Create the chart
    if ($stateMap && $stateMapShadow) {
      window.SCORECARD_MAP = Highcharts.mapChart('state-map', {
        chart: {
          animation: false,
          backgroundColor: 'transparent',
          borderWidth: 0,
          margin: 5,
          zoomType: false,
          styleMode: true,
          events: {
            load: function () {
              document.getElementById('map-loading').style.display = 'none';
            }
          }
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
          shared: false,
          formatter: function () {
            var city = this.point.name;
            var percent = Math.round(parseFloat(this.point.value));
            var incompleteIndicator = (this.point.colorIndex === 1) ? '<span style="color: rgba(255, 255, 255, 0.5); font-size: 24px; margin: 0; padding: 0; font-weight: 300;"> *</span><br>' : '<br>';
            var incompleteMessage = (this.point.colorIndex === 1) ? '<p style="color: rgba(0, 0, 0, 0); font-size: 5px; margin: 0; padding: 0;">.</p><br><p style="color: rgba(255, 255, 255, 0.5); font-size: 10px; display: block; margin: 0; padding: 0; text-transform: uppercase;">* Incomplete Data</p>' : '';

            var title = '<span style="color: rgba(255, 255, 255, 0.75); font-family: \'Barlow Condensed\', sans-serif; text-transform: uppercase; display: block; margin: 0; padding: 0; ">' + this.series.name + '</span><br>';
            var department = '<strong style="color: #FFF; font-weight: 600; font-size: 24px; line-height: 24px; font-family: \'Barlow Condensed\', sans-serif; text-transform: uppercase; margin: 0; padding: 0; ">' + city + '</strong>';
            var score = '<span style="color: #FFF; font-family: \'Barlow Condensed\', sans-serif; text-transform: uppercase; font-size: 28px; line-height: 28px; font-weight: 300; margin-top: 4px;  display: block; margin: 0; padding: 0; ">' + percent + '%</span><br>';

            var newTooltip = title + department + incompleteIndicator + score + incompleteMessage;

            return newTooltip;
          }
        },
        plotOptions: {
          map: {
            animation: false,
            allAreas: false,
            mapData: Highcharts.maps['countries/us/us-' + abbr.toLowerCase() + '-all'],
          },
          series: {
            stickyTracking: false,
            animation: false,
            clip: false,
            states: {
              hover: {
                halo: {
                  size: 12,
                  attributes: {
                    zIndex: 500,
                    opacity: 1,
                    fill: 'transparent',
                    'stroke-width': 2,
                    stroke: '#000000'
                  }
                }
              },
              inactive: {
                opacity: 1
              }
            }
          }
        },
        series: [
          {
            animation: false,
            allAreas: true,
            showInLegend: true
          }
        ]
      });

      // Add Map Shadow
      Highcharts.mapChart('state-map-shadow', {
        chart: {
          animation: false,
          backgroundColor: 'transparent',
          borderWidth: 0,
          margin: 5,
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
        plotOptions: {
          map: {
            animation: false,
            allAreas: false,
            mapData: Highcharts.maps['countries/us/us-' + abbr.toLowerCase() + '-all'],
          },
          series: {
            animation: false,
            shadow: false,
            clip: false
          }
        },
        series: [
          {
            animation: false,
            allAreas: true,
            showInLegend: true
          }
        ]
      });

      if (map_data && map_data.selected && map_data.selected.type === 'sheriff') {
        window.SCORECARD_MAP.addSeries({
          animation: false,
          data: map_data.sheriff,
          name: 'Sheriff Department',
          events: {
            click: function (e) {
              if (e.point && typeof e.point.className !== 'undefined') {
                var loc = e.point.className.replace('location-', '');
                var url = '/?state=' + SCORECARD_STATE + '&type=' + map_data.selected.type + '&location=' + loc;
                var prettyUrl = '/' + SCORECARD_STATE + '/' + map_data.selected.type + '/' + loc;

                if (loc && window.leftMouseClicked) {
                  window.location = (SCORECARD_ENV === 'production') ? prettyUrl : url;
                  e.preventDefault();
                  e.stopImmediatePropagation();
                }
              }
            }
          }
        })
      }

      if (map_data && map_data.city && map_data.selected && map_data.selected.type === 'police-department') {
        var MARKER_RADIUS = 8;

        window.SCORECARD_MAP.addSeries({
          animation: false,
          data: map_data.sheriff,
          name: 'Police Department',
          events: {
            click: function (e) {
              if (e.point && typeof e.point.className !== 'undefined') {
                var loc = e.point.className.replace('location-', '');
                var url = '/?state=' + SCORECARD_STATE + '&type=' + map_data.selected.type + '&location=' + loc;
                var prettyUrl = '/' + SCORECARD_STATE + '/' + map_data.selected.type + '/' + loc;

                if (loc && window.leftMouseClicked) {
                  window.location = (SCORECARD_ENV === 'production') ? prettyUrl : url;
                  e.preventDefault();
                  e.stopImmediatePropagation();
                }
              }
            }
          }
        });

        // INCOMPLETE GRADE
        window.SCORECARD_MAP.addSeries({
          id: 'grade-incomplete',
          animation: false,
          type: 'mappoint',
          name: 'Police Department',
          data: map_data.city[0],
          zIndex: 2,
          marker: {
            width: MARKER_RADIUS,
            height: MARKER_RADIUS,
            symbol: 'url(assets/img/police-marker-incomplete.svg)'
          },
          dataLabels: {
            formatter: function () {
              return '';
            }
          },
          events: {
            click: function (e) {
              if (e.point && typeof e.point.className !== 'undefined') {
                var loc = e.point.className.replace('location-', '');
                var url = '/?state=' + SCORECARD_STATE + '&type=' + map_data.selected.type + '&location=' + loc;
                var prettyUrl = '/' + SCORECARD_STATE + '/' + map_data.selected.type + '/' + loc;

                if (loc && window.leftMouseClicked) {
                  window.location = (SCORECARD_ENV === 'production') ? prettyUrl : url;
                  e.preventDefault();
                  e.stopImmediatePropagation();
                }
              }
            }
          }
        });

        // B GRADE
        window.SCORECARD_MAP.addSeries({
          id: 'grade-b',
          animation: false,
          type: 'mappoint',
          name: 'Police Department',
          data: map_data.city[5],
          zIndex: 3,
          marker: {
            width: MARKER_RADIUS,
            height: MARKER_RADIUS,
            symbol: 'url(assets/img/police-marker-b.svg)'
          },
          dataLabels: {
            formatter: function () {
              return '';
            }
          },
          events: {
            click: function (e) {
              if (e.point && typeof e.point.className !== 'undefined') {
                var loc = e.point.className.replace('location-', '');
                var url = '/?state=' + SCORECARD_STATE + '&type=' + map_data.selected.type + '&location=' + loc;
                var prettyUrl = '/' + SCORECARD_STATE + '/' + map_data.selected.type + '/' + loc;

                if (loc && window.leftMouseClicked) {
                  window.location = (SCORECARD_ENV === 'production') ? prettyUrl : url;
                  e.preventDefault();
                  e.stopImmediatePropagation();
                }
              }
            }
          }
        });

        // C GRADE
        window.SCORECARD_MAP.addSeries({
          id: 'grade-c',
          animation: false,
          type: 'mappoint',
          name: 'Police Department',
          data: map_data.city[4],
          zIndex: 4,
          marker: {
            width: MARKER_RADIUS,
            height: MARKER_RADIUS,
            symbol: 'url(assets/img/police-marker-c.svg)'
          },
          dataLabels: {
            formatter: function () {
              return '';
            }
          },
          events: {
            click: function (e) {
              if (e.point && typeof e.point.className !== 'undefined') {
                var loc = e.point.className.replace('location-', '');
                var url = '/?state=' + SCORECARD_STATE + '&type=' + map_data.selected.type + '&location=' + loc;
                var prettyUrl = '/' + SCORECARD_STATE + '/' + map_data.selected.type + '/' + loc;

                if (loc && window.leftMouseClicked) {
                  window.location = (SCORECARD_ENV === 'production') ? prettyUrl : url;
                  e.preventDefault();
                  e.stopImmediatePropagation();
                }
              }
            }
          }
        });

        // D GRADE
        window.SCORECARD_MAP.addSeries({
          id: 'grade-d',
          animation: false,
          type: 'mappoint',
          name: 'Police Department',
          data: map_data.city[3],
          zIndex: 5,
          marker: {
            width: MARKER_RADIUS,
            height: MARKER_RADIUS,
            symbol: 'url(assets/img/police-marker-d.svg)'
          },
          dataLabels: {
            formatter: function () {
              return '';
            }
          },
          events: {
            click: function (e) {
              if (e.point && typeof e.point.className !== 'undefined') {
                var loc = e.point.className.replace('location-', '');
                var url = '/?state=' + SCORECARD_STATE + '&type=' + map_data.selected.type + '&location=' + loc;
                var prettyUrl = '/' + SCORECARD_STATE + '/' + map_data.selected.type + '/' + loc;

                if (loc && window.leftMouseClicked) {
                  window.location = (SCORECARD_ENV === 'production') ? prettyUrl : url;
                  e.preventDefault();
                  e.stopImmediatePropagation();
                }
              }
            }
          }
        });

        // F GRADE
        window.SCORECARD_MAP.addSeries({
          id: 'grade-f',
          animation: false,
          type: 'mappoint',
          name: 'Police Department',
          data: map_data.city[2],
          zIndex: 6,
          marker: {
            width: MARKER_RADIUS,
            height: MARKER_RADIUS,
            symbol: 'url(assets/img/police-marker-f.svg)'
          },
          dataLabels: {
            formatter: function () {
              return '';
            }
          },
          events: {
            click: function (e) {
              if (e.point && typeof e.point.className !== 'undefined') {
                var loc = e.point.className.replace('location-', '');
                var url = '/?state=' + SCORECARD_STATE + '&type=' + map_data.selected.type + '&location=' + loc;
                var prettyUrl = '/' + SCORECARD_STATE + '/' + map_data.selected.type + '/' + loc;

                if (loc && window.leftMouseClicked) {
                  window.location = (SCORECARD_ENV === 'production') ? prettyUrl : url;
                  e.preventDefault();
                  e.stopImmediatePropagation();
                }
              }
            }
          }
        });

        // F MINUS GRADE
        window.SCORECARD_MAP.addSeries({
          id: 'grade-f-minus',
          animation: false,
          type: 'mappoint',
          name: 'Police Department',
          data: map_data.city[1],
          zIndex: 7,
          marker: {
            width: MARKER_RADIUS,
            height: MARKER_RADIUS,
            symbol: 'url(assets/img/police-marker-f-minus.svg)'
          },
          dataLabels: {
            formatter: function () {
              return '';
            }
          },
          events: {
            click: function (e) {
              if (e.point && typeof e.point.className !== 'undefined') {
                var loc = e.point.className.replace('location-', '');
                var url = '/?state=' + SCORECARD_STATE + '&type=' + map_data.selected.type + '&location=' + loc;
                var prettyUrl = '/' + SCORECARD_STATE + '/' + map_data.selected.type + '/' + loc;

                if (loc && window.leftMouseClicked) {
                  window.location = (SCORECARD_ENV === 'production') ? prettyUrl : url;
                  e.preventDefault();
                  e.stopImmediatePropagation();
                }
              }
            }
          }
        });

        // A GRADE
        window.SCORECARD_MAP.addSeries({
          id: 'grade-a',
          animation: false,
          type: 'mappoint',
          name: 'Police Department',
          data: map_data.city[6],
          zIndex: 8,
          marker: {
            width: MARKER_RADIUS,
            height: MARKER_RADIUS,
            symbol: 'url(assets/img/police-marker-a.svg)'
          },
          dataLabels: {
            formatter: function () {
              return '';
            }
          },
          events: {
            click: function (e) {
              if (e.point && typeof e.point.className !== 'undefined') {
                var loc = e.point.className.replace('location-', '');
                var url = '/?state=' + SCORECARD_STATE + '&type=' + map_data.selected.type + '&location=' + loc;
                var prettyUrl = '/' + SCORECARD_STATE + '/' + map_data.selected.type + '/' + loc;

                if (loc && window.leftMouseClicked) {
                  window.location = (SCORECARD_ENV === 'production') ? prettyUrl : url;
                  e.preventDefault();
                  e.stopImmediatePropagation();
                }
              }
            }
          }
        });

        // Current Location Marker
        window.SCORECARD_MAP.addSeries({
          id: 'current',
          type: 'mappoint',
          name: map_data.selected.name,
          data: map_data.selected.data,
          zIndex: 9,
          className: 'current-marker',
          marker: {
            width: 30,
            height: 30,
            symbol: map_data.selected.icon
          }
        });
      }

      var type = $stateMap.classList[0];
      var loc = $stateMap.classList[1];
      var elm;

      if (loc && type === 'police-department') {
        elm = document.querySelector('.highcharts-mappoint-series .location-' + loc)
      } else if (loc && type === 'sheriff') {
        elm = document.querySelector('.highcharts-map-series .location-' + loc);
      }

      if (elm) {
        elm.classList.add('active')
      }
    }
  }

  function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  }

  function nFormatter(num) {
    num = parseInt(num);

    if (num === 0) {
      return '$0';
    }

    var units = ["k", "M", "B", "T"];
    var order = Math.floor(Math.log(num) / Math.log(1000));
    var unitname = units[(order - 1)];

    // output number remainder + unitname
    var val = parseFloat(num / 1000 ** order).toFixed(2)
    val = val.replace('.00', '')
    val = val.replace('.10', '.1')
    val = val.replace('.20', '.2')
    val = val.replace('.30', '.3')
    val = val.replace('.40', '.4')
    val = val.replace('.50', '.5')
    val = val.replace('.60', '.6')
    val = val.replace('.70', '.7')
    val = val.replace('.80', '.8')
    val = val.replace('.90', '.9')

    return '$' + val + unitname;
  }

  function toggleHistory(show) {
    var police = myBarHistory.getDatasetMeta(0);
    var other = myBarHistory.getDatasetMeta(1);

    var policeButton = document.querySelector('.history-key-police');
    var otherButton = document.querySelector('.history-key-other');

    if (show === 0) {
      police.hidden = false;
      other.hidden = true;
    } else if (show === 1) {
      police.hidden = true;
      other.hidden = false;
    }

    policeButton.classList.toggle('active');
    otherButton.classList.toggle('active');

    myBarHistory.update();
  }

  // Click Event for More Info
  Array.prototype.forEach.call($moreInfo, function(el) {
    el.addEventListener('click', function(evt) {
      var info = evt.target.getAttribute('data-more-info');

      if (info && typeof SCORECARD_DATA.policy[info] !== 'undefined' && SCORECARD_DATA.policy[info]) {
        loadMoreInfo(SCORECARD_DATA.policy[info]);
      } else if (typeof info === 'string') {
        loadMoreInfo(info);
      }
    });
  });

  // Click Event for Results Info
  Array.prototype.forEach.call($resultsInfo, function(el) {
    el.addEventListener('click', function() {
      loadResultsInfo();
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
    getGrade: getGrade,
    loadMap: loadMap,
    loadResultsInfo: loadResultsInfo,
    toggleHistory: toggleHistory,
    nFormatter: nFormatter,
    numberWithCommas: numberWithCommas
  }
})();
