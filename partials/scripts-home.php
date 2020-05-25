<script src="/assets/js/plugins.js<?= trim($ac) ?>"></script>
<script src="/assets/js/maps/us-<?= $type === 'police-department' ? 'all' : 'all-all' ?>.js"></script>
<script src="/assets/js/site.js<?= trim($ac) ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>

<script>
var SCORECARD_ENV = '<?= $isProd ? 'production' : 'development' ?>';

var map_type = '<?= $type ?>';
var map_data = <?= getNationalMapData($states, $type) ?>;

window.addEventListener('load', function() {
  window.SCORECARD_MAP = Highcharts.mapChart('usa-map', {
    chart: {
      animation: false,
      backgroundColor: 'transparent',
      borderWidth: 0,
      margin: 0,
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
      },
      series: {
        turboThreshold: 0,
        animation: false
      }
    },
    series: [
      {
        animation: false,
        allAreas: true,
        showInLegend: true,
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
      data: map_data[0],
      joinBy: null,
      shadow: false,
      marker: {
        width: 8,
        height: 8,
        fillColor: '',
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
      data: map_data[1],
      joinBy: null,
      shadow: false,
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
      data: map_data[2],
      joinBy: null,
      shadow: false,
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
      data: map_data[3],
      joinBy: null,
      shadow: false,
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
      data: map_data[4],
      joinBy: null,
      shadow: false,
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
  } else if (map_type === 'sheriff' && map_data) {
    window.SCORECARD_MAP.addSeries({
      animation: false,
      data: map_data,
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
    })
  }
});
</script>