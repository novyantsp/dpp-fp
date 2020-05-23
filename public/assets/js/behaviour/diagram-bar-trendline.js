google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawVisualization);

function drawVisualization() {
  var data = google.visualization.arrayToDataTable([
    ['Tanggal', 'Total Kasus'],
    ['20-03-2020',  1],
    ['23-03-2020',  5],
    ['26-03-2020',  7],
    ['29-03-2020',  39],
    ['1-04-2020',  36]
  ]);

  var options = {
    vAxis: {title: 'Jumlah'},
    hAxis: {title: 'Tanggal'},
    seriesType: 'bars',
    series: {5: {type: 'line'}}       
 };

  var chart = new google.visualization.ComboChart(document.getElementById('bar_trendline_div'));
  chart.draw(data, options);
}
