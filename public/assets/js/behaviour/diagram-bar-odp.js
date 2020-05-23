google.charts.load('current', {'packages':['bar']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Kabupaten/Kota', 'ODP Pantau', 'ODP Selesai'],
    ['Surabaya', 10, 24],
    ['Mojokerto', 16, 22],
    ['Lamongan', 16, 22],
    ['Malang', 16, 22],
    ['Tuban', 16, 22],
    ['Pasuruan', 16, 22],
    ['Sidoarjo', 28, 19]
]);

  var options = {
    chart: {
      title: 'Diagram Total ODP',
      subtitle: '-',
    },
    bars: 'vertical',
    vAxis: {format: 'decimal'},
    height: 400,
    colors: ['#1b9e77', '#d95f02', '#7570b3']
  };

  var chart = new google.charts.Bar(document.getElementById('bar_odp_div'));

  chart.draw(data, google.charts.Bar.options);

}