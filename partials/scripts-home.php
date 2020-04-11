<script src="/assets/js/plugins.js<?= trim($ac) ?>"></script>
<script src="/assets/js/maps/us-all.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>

<script>
window.addEventListener('load', function() {
    window.SCORECARD_MAP = Highcharts.mapChart('usa-map', {
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
          mapData: Highcharts.maps['countries/us/us-all'],
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
});
</script>