google.charts.load("current", {packages:["corechart"]});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Usia', 'Jumlah'],
    ['Laki-Laki',     65],
    ['Perempuan',     35]

  ]);

  var options = {
    pieHole: 0.4,
  };

  var chart = new google.visualization.PieChart(document.getElementById('donutchart_proporsi'));
  chart.draw(data, options);
}