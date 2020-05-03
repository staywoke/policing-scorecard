<script>
  var SCORECARD_ENV = '<?= $isProd ? 'production' : 'development' ?>';
  var SCORECARD_STATE = '<?= $state ?>';
  var SCORECARD_DATA = <?= json_encode($scorecard) ?>;
  var map_data = {
    city: <?= $type === 'police-department' ? getMapData($state, 'police-department') : 'null' ?> ,
    sheriff: <?= $type === 'sheriff' ? getMapData($state, 'sheriff') : 'null' ?>,
    selected: <?= getMapLocation($type, $scorecard, $location) ?>
  };
</script>

<script src="/assets/js/plugins.js<?= trim($ac) ?>"></script>
<script src="/assets/js/maps/us-<?= strtolower($stateCode) ?>-all.js"></script>
<script src="/assets/js/site.js<?= trim($ac) ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>

<?php if (isset($scorecard['arrests']['arrests_2016']) && isset($scorecard['arrests']['arrests_2017']) && isset($scorecard['arrests']['arrests_2018'])): ?>
<script>
  window.addEventListener('load', function() {
    var ctx = document.getElementById('bar-chart-arrests').getContext('2d');
    var arrestsData = <?= generateArrestChart($scorecard, $type); ?> ;
    window.myBarArrests = new Chart(ctx, {
      type: 'bar',
      data: arrestsData,
      options: {
        maintainAspectRatio: false,
        responsive: true,
        legend: {
          display: false,
        },
        title: {
          display: false,
        },
        tooltips: {
          mode: 'index',
          intersect: false,
          callbacks: {
            label: function(tooltipItem, data) {
              var label = (data.datasets[tooltipItem.datasetIndex].label) ? ' ' + data.datasets[tooltipItem.datasetIndex].label : '';

              if (label) {
                label += ': ';
              }

              label += SCORECARD.numberWithCommas(tooltipItem.yLabel);

              return label;
            }
          },
        },
        scales: {
          xAxes: [{
            minBarLength: 5,
            maxBarThickness: 20,
            stacked: true,
            gridLines: {
              color: "rgba(0, 0, 0, 0)",
            }
          }],
          yAxes: [{
            minBarLength: 5,
            stacked: true,
            gridLines: {
              color: "rgba(0, 0, 0, 0)",
            },
            ticks: {
              beginAtZero: true,
              maxTicksLimit: 2,
              callback: function(value, index, values) {
                return (value === 0) ? '' : SCORECARD.numberWithCommas(value);
              }
            }
          }]
        }
      }
    });
  });

</script>
<?php endif; ?>

<?php if(isset($scorecard['police_violence']['police_shootings_2016']) && isset($scorecard['police_violence']['police_shootings_2017']) && isset($scorecard['police_violence']['police_shootings_2018'])): ?>
<script>
  window.addEventListener('load', function() {
    var ctx = document.getElementById('bar-chart-history').getContext('2d');
    var historyChartData = <?= generateHistoryChart($scorecard, $type); ?> ;
    window.myBarHistory = new Chart(ctx, {
      type: 'bar',
      data: historyChartData,
      options: {
        animation: {
          duration: 0,
        },
        maintainAspectRatio: false,
        responsive: false,
        legend: {
          display: false,
        },
        title: {
          display: false,
        },
        tooltips: {
          mode: 'index',
          intersect: false
        },
        scales: {
          xAxes: [{
            minBarLength: 5,
            maxBarThickness: 20,
            stacked: true,
            gridLines: {
              color: "rgba(0, 0, 0, 0)",
            }
          }],
          yAxes: [{
            minBarLength: 5,
            stacked: true,
            gridLines: {
              color: "rgba(0, 0, 0, 0)",
            },
            ticks: {
              beginAtZero: true,
              maxTicksLimit: 2,
              callback: function(value, index, values) {
                return (value === 0) ? '' : Math.round(value);
              }
            }
          }]
        }
      }
    });
  });

</script>
<?php endif; ?>

<?php if(isset($scorecard['report']['percentile_police_spending']) || isset($scorecard['report']['hispanic_murder_unsolved_rate']) || isset($scorecard['report']['white_murder_unsolved_rate'])): ?>
<script>
  window.addEventListener('load', function() {
    var barChartData = <?= generateBarChart($scorecard, $type); ?> ;

    var $chart = document.getElementById('bar-chart');

    if (!$chart) {
      return false;
    }

    var ctx = $chart.getContext('2d');
    window.myBar = new Chart(ctx, {
      type: 'bar',
      data: barChartData,
      options: {
        maintainAspectRatio: false,
        tooltips: {
          callbacks: {
            label: function(tooltipItem, data) {
              var label = (data.datasets[tooltipItem.datasetIndex].label) ? ' ' + data.datasets[tooltipItem.datasetIndex].label : '';

              if (label) {
                label += ': ';
              }

              label += SCORECARD.nFormatter(tooltipItem.yLabel);

              return label;
            }
          },
        },
        responsive: true,
        legend: {
          display: false,
        },
        title: {
          display: false,
        },
        scales: {
          xAxes: [{
            minBarLength: 5,
            maxBarThickness: 20,
            gridLines: {
              color: "rgba(0, 0, 0, 0)",
            }
          }],
          yAxes: [{
            minBarLength: 5,
            gridLines: {
              color: "rgba(0, 0, 0, 0)",
            },
            ticks: {
              beginAtZero: true,
              maxTicksLimit: 2,
              callback: function(value, index, values) {
                return (value === 0) ? '' : SCORECARD.nFormatter(value);
              }
            }
          }]
        }
      }
    });
  });

</script>
<?php endif; ?>

<script>
  window.addEventListener('load', function() {
    var $deadlyForceChart = document.getElementById("deadly-force-chart");

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
                return ' ' + data['labels'][tooltip.index] + ': ' + data['datasets'][tooltip.datasetIndex][
                  tooltip.index
                ] + '%';
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

    setTimeout(SCORECARD.animate, 250);
  });
</script>
