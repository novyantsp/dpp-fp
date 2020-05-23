google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawVisualization);

function drawVisualization() {
  var data = google.visualization.arrayToDataTable([
    ['Tanggal', 'Total Kasus'],
    ['11-02-2020',  1],
    ['13-02-2020',  0],
    ['15-02-2020',  0],
    ['17-02-2020',  0],
    ['19-02-2020',  0],
    ['21-02-2020',  0],
    ['23-02-2020',  1],
    ['25-02-2020',  1],
    ['27-02-2020',  0],
    ['29-02-2020',  1],
    ['02-03-2020',  0],
    ['04-03-2020',  1],
    ['06-03-2020',  7],
    ['08-03-2020',  1],
    ['10-03-2020',  2],
    ['12-03-2020',  3],
    ['14-03-2020',  12],
    ['16-03-2020',  7],
    ['18-03-2020',  7],
    ['20-03-2020',  12],
    ['22-03-2020',  16],
    ['24-03-2020',  15],
    ['26-03-2020',  12],
    ['28-03-2020',  5],
    ['30-03-2020',  7],
    ['1-04-2020',  1]
  ]);

  var options = {
    vAxis: {title: 'Jumlah'},
    hAxis: {title: 'Tanggal'},
    seriesType: 'bars',
    series: {5: {type: 'line'}}       
 };

  var chart = new google.visualization.ComboChart(document.getElementById('bar_positif_div'));
  chart.draw(data, options);
}