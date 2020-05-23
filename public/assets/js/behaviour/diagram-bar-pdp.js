google.charts.load('current', {'packages':['bar']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Kabupaten/Kota', 'PDP Dirawat', 'PDP Sehat', 'Meninggal'],
    ['Surabaya', 10, 24, 5],
    ['Mojokerto', 16, 22, 5],
    ['Lamongan', 16, 22, 5],
    ['Malang', 16, 22, 5],
    ['Tuban', 16, 22, 5],
    ['Pasuruan', 16, 22, 5],
    ['Sidoarjo', 28, 19, 5]
]);

  var options = {
    chart: {
      title: 'Diagram Total PDP',
      subtitle: '-',
    },
    bars: 'vertical',
    vAxis: {format: 'decimal'},
    height: 400,
    colors: ['#1b9e77', '#d95f02', '#7570b3']
  };

  var chart = new google.charts.Bar(document.getElementById('bar_pdp_div'));

  chart.draw(data, google.charts.Bar.options);

}