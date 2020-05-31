<script src="/assets/js/plugins.js<?= trim($ac) ?>"></script>
<script src="/assets/js/maps/us-<?= $type === 'police-department' ? 'all' : 'all-all' ?>.js"></script>
<script src="/assets/js/site.js<?= trim($ac) ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>

<script>
var SCORECARD_ENV = '<?= $isProd ? 'production' : 'development' ?>';

var map_type = '<?= $type ?>';
var map_data = <?= getNationalMapData($states, $type) ?>;
var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);

// TODO: There is currently a bug in rendering dynamic charts in Chrome Browser
if (isChrome) {
  document.getElementById('static-map').style.display = 'block';
  document.getElementById('usa-map').style.display = 'none';
  document.getElementById('usa-map-shadow').style.display = 'none';
  document.getElementById('map-loading').style.display = 'none';
} else {
  document.getElementById('static-map').style.display = 'none';
  document.getElementById('map-loading').style.display = 'block';
}

window.addEventListener('load', function() {
  // TODO: There is currently a bug in rendering dynamic charts in Chrome Browser
  if (!isChrome) {
    window.SCORECARD_MAP = Highcharts.mapChart('usa-map', {
      chart: {
        animation: false,
        backgroundColor: 'transparent',
        borderWidth: 0,
        margin: 0,
        zoomType: false,
        styleMode: false
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
          var newTooltip = this.series.name + '<br /><strong>' + city + '</strong><br />Grade: ' + SCORECARD.getGrade(score) + ' ( ' + percent + '% )';

          return newTooltip;
        }
      },
      plotOptions: {
        map: {
          animation: false,
          allAreas: false,
          mapData: map_type === 'police-department' ? Highcharts.maps['countries/us/us-all'] : Highcharts.maps['countries/us/us-all-all'],
        }
      },
      series: [
        {
          allAreas: true,
          showInLegend: false,
          joinBy: null,
          turboThreshold: 0
        }
      ]
    });

    Highcharts.mapChart('usa-map-shadow', {
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
      plotOptions: {
        map: {
          animation: false,
          allAreas: false,
          mapData: map_type === 'police-department' ? Highcharts.maps['countries/us/us-all'] : Highcharts.maps['countries/us/us-all-all'],
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
        }
      ]
    });

    if (map_type === 'police-department' && map_data) {
      window.SCORECARD_MAP.addSeries({
        animation: false,
        type: 'mappoint',
        name: 'Police Department',
        joinBy: null,
        shadow: false,
        turboThreshold: 0,
        showInLegend: false,
        marker: {
          width: 8,
          height: 8,
          fillColor: null,
          symbol: 'url(/assets/img/police-marker-f.svg)'
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
              var url = '/?state=' + e.point.stateAbbr + '&type=' + map_type + '&location=' + loc;
              var prettyUrl = '/' + e.point.stateAbbr + '/' + map_type + '/' + loc;

              if (loc && window.leftMouseClicked) {
                window.location = (SCORECARD_ENV === 'production') ? prettyUrl : url;
                e.preventDefault();
                e.stopImmediatePropagation();
              }
            }
          }
        }
      });

      window.SCORECARD_MAP.addSeries({
        animation: false,
        type: 'mappoint',
        name: 'Police Department',
        joinBy: null,
        shadow: false,
        turboThreshold: 0,
        showInLegend: false,
        marker: {
          width: 8,
          height: 8,
          fillColor: '',
          symbol: 'url(/assets/img/police-marker-d.svg)'
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
              var url = '/?state=' + e.point.stateAbbr + '&type=' + map_type + '&location=' + loc;
              var prettyUrl = '/' + e.point.stateAbbr + '/' + map_type + '/' + loc;

              if (loc && window.leftMouseClicked) {
                window.location = (SCORECARD_ENV === 'production') ? prettyUrl : url;
                e.preventDefault();
                e.stopImmediatePropagation();
              }
            }
          }
        }
      });

      window.SCORECARD_MAP.addSeries({
        animation: false,
        type: 'mappoint',
        name: 'Police Department',
        joinBy: null,
        shadow: false,
        turboThreshold: 0,
        showInLegend: false,
        marker: {
          width: 8,
          height: 8,
          fillColor: '',
          symbol: 'url(/assets/img/police-marker-c.svg)'
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
              var url = '/?state=' + e.point.stateAbbr + '&type=' + map_type + '&location=' + loc;
              var prettyUrl = '/' + e.point.stateAbbr + '/' + map_type + '/' + loc;

              if (loc && window.leftMouseClicked) {
                window.location = (SCORECARD_ENV === 'production') ? prettyUrl : url;
                e.preventDefault();
                e.stopImmediatePropagation();
              }
            }
          }
        }
      });

      window.SCORECARD_MAP.addSeries({
        animation: false,
        type: 'mappoint',
        name: 'Police Department',
        joinBy: null,
        shadow: false,
        turboThreshold: 0,
        showInLegend: false,
        marker: {
          width: 8,
          height: 8,
          fillColor: '',
          symbol: 'url(/assets/img/police-marker-b.svg)'
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
              var url = '/?state=' + e.point.stateAbbr + '&type=' + map_type + '&location=' + loc;
              var prettyUrl = '/' + e.point.stateAbbr + '/' + map_type + '/' + loc;

              if (loc && window.leftMouseClicked) {
                window.location = (SCORECARD_ENV === 'production') ? prettyUrl : url;
                e.preventDefault();
                e.stopImmediatePropagation();
              }
            }
          }
        }
      });

      window.SCORECARD_MAP.addSeries({
        animation: false,
        type: 'mappoint',
        name: 'Police Department',
        joinBy: null,
        shadow: false,
        turboThreshold: 0,
        showInLegend: false,
        marker: {
          width: 8,
          height: 8,
          symbol: 'url(/assets/img/police-marker-a.svg)'
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
              var url = '/?state=' + e.point.stateAbbr + '&type=' + map_type + '&location=' + loc;
              var prettyUrl = '/' + e.point.stateAbbr + '/' + map_type + '/' + loc;

              if (loc && window.leftMouseClicked) {
                window.location = (SCORECARD_ENV === 'production') ? prettyUrl : url;
                e.preventDefault();
                e.stopImmediatePropagation();
              }
            }
          }
        }
      });

      // Wait to load data until after the rest of the site is done loading to prevent page blocking
      setTimeout(function() {
        window.SCORECARD_MAP.series[1].setData(map_data[0]);
        window.SCORECARD_MAP.series[2].setData(map_data[1]);
        window.SCORECARD_MAP.series[3].setData(map_data[2]);
        window.SCORECARD_MAP.series[4].setData(map_data[3]);
        window.SCORECARD_MAP.series[5].setData(map_data[4]);
        document.getElementById('map-loading').style.display = 'none';
      }, 0);

    } else if (map_type === 'sheriff' && map_data) {
      window.SCORECARD_MAP.addSeries({
        animation: false,
        name: 'Sheriff Department',
        events: {
          click: function (e) {
            if (e.point && typeof e.point.className !== 'undefined') {
              var loc = e.point.className.replace('location-', '');
              var url = '/?state=' + e.point.stateAbbr + '&type=' + map_type + '&location=' + loc;
              var prettyUrl = '/' + e.point.stateAbbr + '/' + map_type + '/' + loc;

              if (loc && window.leftMouseClicked) {
                window.location = (SCORECARD_ENV === 'production') ? prettyUrl : url;
                e.preventDefault();
                e.stopImmediatePropagation();
              }
            }
          }
        }
      });

      // Wait to load data until after the rest of the site is done loading to prevent page blocking
      setTimeout(function() {
        window.SCORECARD_MAP.series[1].setData(map_data);
        document.getElementById('map-loading').style.display = 'none';
      }, 0);
    }
  }

  var $deadlyForceChart = document.getElementById('deadly-force-chart');
  var $chartMiniPeopleKilled = document.getElementById('chart-mini-people-killed');
  var $chartMiniComplaintsReported = document.getElementById('chart-mini-complaints-reported');

  SCORECARD.loadMap('<?= $stateCode ?>');

  if ($deadlyForceChart) {
    var chart = new Chart($deadlyForceChart.getContext('2d'), {
      type: 'doughnut',
      options: {
        cutoutPercentage: 75,
        animation: {
          animateRotate: true,
          animateScale: false
        },
        tooltips: {
          callbacks: {
            label: function(tooltip, data) {
              return ' ' + data['labels'][tooltip.index] + ': ' + data['datasets'][tooltip.datasetIndex]['data'][tooltip.index] + '%';
            }
          }
        },
        legend: {
          display: true,
          labels: {
            boxWidth: 20
          }
        }
      },
      data: {
        labels: [
          'Unarmed',
          'Other',
          'Gun',
          'Vehicle'
        ],
        datasets: [{
          borderWidth: 0,
          data: [
            <?= $scorecard['report']['percent_used_against_people_who_were_unarmed'] ?>,
            <?= ($scorecard['report']['percent_used_against_people_who_were_not_armed_with_gun'] - $scorecard['report']['percent_used_against_people_who_were_unarmed']) ?>,
            <?= (100 - floatval($scorecard['report']['percent_used_against_people_who_were_not_armed_with_gun'])) ?>,
            <?= $scorecard['police_violence']['vehicle_people_killed'] ?>
          ],
          backgroundColor: [
            '#f19975',
            '#58595b',
            '#d4d9e4',
            '#9a9b9f'
          ],
          hoverBackgroundColor: [
            '#f19975',
            '#58595b',
            '#d4d9e4',
            '#9a9b9f'
          ]
        }]
      }
    });
  }

  if ($chartMiniPeopleKilled) {
    Highcharts.chart($chartMiniPeopleKilled, {
      chart: {
        type: 'column',
        backgroundColor: 'transparent',
        width: document.documentElement.clientWidth > 940 ? 150 : 100,
        height: document.documentElement.clientWidth > 940 ? 150 : 125,
        margin: 0,
        maintainAspectRatio: false,
        clip: false
      },
      responsive: true,
      legend: {
        enabled: false
      },
      title: {
        enabled: false,
        text: ''
      },
      tooltip: {
        enabled: false
      },
      xAxis: {
        gridLineWidth: 0,
        lineWidth: 0,
        tickWidth: 0,
        labels: {
          enabled: false
        },
        title: {
          text: ''
        }
      },
      yAxis: {
        gridLineWidth: 0,
        lineWidth: 0,
        tickWidth: 0,
        labels: {
          enabled: false
        },
        title: {
          text: ''
        }
      },
      plotOptions: {
        series: {
          borderWidth: 0,
          groupPadding: 0,
          pointPadding: 0.1,
          animation: false,
          enableMouseTracking: false,
          dataLabels: {
            rotation: -90,
            color: '#FFFFFF',
            enabled: true,
            format: '{point.name}',
            inside: true,
            crop: false,
            overflow: 'allow',
            align: 'left',
            style: {
              fontSize: document.documentElement.clientWidth > 940 ? '10px' : '8px',
              fontFamily: 'Verdana, sans-serif',
              textTransform: 'uppercase'
            }
          }
        }
      },
      series: [{
        data: [
          ['Black', <?= (!isset($nationalSummary['total_black_population']) || $nationalSummary['total_black_population'] === 0) ? 0 : round(($nationalSummary['total_black_people_killed'] / $nationalSummary['total_black_population']) * 100, 2) ?>],
          ['Latinx', <?= (!isset($nationalSummary['total_hispanic_population']) || $nationalSummary['total_hispanic_population'] === 0) ? 0 : round(($nationalSummary['total_hispanic_people_killed'] / $nationalSummary['total_hispanic_population']) * 100, 2) ?>],
          ['White', <?= (!isset($nationalSummary['total_white_population']) || $nationalSummary['total_white_population'] === 0) ? 0 : round(($nationalSummary['total_white_people_killed'] / $nationalSummary['total_white_population']) * 100, 2) ?>]
        ]
      }]
    });
  }

  if ($chartMiniComplaintsReported) {
    new Chart($chartMiniComplaintsReported.getContext('2d'), {
      type: 'doughnut',
      chart: {
        backgroundColor: 'transparent',
        width: 125,
        height: 125
      },
      responsive: true,
      legend: {
        enabled: false
      },
      title: {
        enabled: false,
        text: ''
      },
      tooltip: {
        enabled: false
      },
      options: {
        cutoutPercentage: 75,
        animation: {
          animateRotate: true,
          animateScale: false
        },
        tooltips: {
          display: false
        },
        legend: {
          display: false
        }
      },
      data: {
        datasets: [{
          borderWidth: 0,
          data: [
            CHART_MINI_SUSTAINED,
            CHART_MINI_REPORTED
          ],
          backgroundColor: [
            '#82ADD7',
            '#58595b'
          ]
        }]
      }
    });

    var label = (CHART_MINI_SUSTAINED === 0 && CHART_MINI_REPORTED === 0) ? '0' : Math.round((CHART_MINI_SUSTAINED / CHART_MINI_REPORTED) * 100);
    document.getElementById('chart-mini-complaints-reported-label').innerHTML = label + '%';
  }

  setTimeout(SCORECARD.animate, 250);
});
</script>
