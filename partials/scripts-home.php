<script src="/assets/js/plugins.js<?= trim($ac) ?>"></script>
<script src="/assets/js/site.js<?= trim($ac) ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>

<script>
window.addEventListener('load', function() {
  var $deadlyForceChart = document.getElementById('deadly-force-chart');
  var $chartMiniPeopleKilled = document.getElementById('chart-mini-people-killed');
  var $chartMiniComplaintsReported = document.getElementById('chart-mini-complaints-reported');

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
            '#dc4646',
            '#5a6f83',
            '#f3f4f6',
            '#aab8c5'
          ],
          hoverBackgroundColor: [
            '#dc4646',
            '#5a6f83',
            '#f3f4f6',
            '#aab8c5'
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
        width: 100,
        height: 100,
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
          color: '#FFFFFF',
          dataLabels: {
            rotation: -90,
            color: '#d8d8d8',
            enabled: true,
            format: '{point.name}',
            align: 'left',
            y: -8,
            shadow: false,
            useHTML: true,
            overflow: 'allow',
            crop: false,
            style: {
              fontSize: document.documentElement.clientWidth > 940 ? '12px' : '10px',
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
            '#d8d8d8',
            '#58595b'
          ]
        }]
      }
    });

    var label = ((CHART_MINI_SUSTAINED === 0 && CHART_MINI_REPORTED === 0) || CHART_MINI_REPORTED === 0) ? '0' : Math.round((CHART_MINI_SUSTAINED / CHART_MINI_REPORTED) * 100);
    document.getElementById('chart-mini-complaints-reported-label').innerHTML = label + '%';
  }

  setTimeout(SCORECARD.animate, 250);
});
</script>
