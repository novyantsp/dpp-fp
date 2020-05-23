google.charts.load("current", {packages:["corechart"]});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Usia', 'Jumlah'],
    ['0-9 Tahun',     1],
    ['10-19 Tahun',      4],
    ['20-29 Tahun',  14],
    ['30-39 Tahun', 14],
    ['40-49 Tahun',    20],
    ['50-59 Tahun',     27],
    ['60-69 Tahun',     14],
    ['70-79 Tahun',     4],
    ['>80 Tahun',     2]

  ]);

  var options = {
    pieHole: 0.4,
  };

  var chart = new google.visualization.PieChart(document.getElementById('donutchart_kasus'));
  chart.draw(data, options);
}