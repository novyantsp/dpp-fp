google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawVisualization);

function drawVisualization() {
  // Some raw data (not necessarily accurate)
  var data = google.visualization.arrayToDataTable([
    ['Tanggal', 'Kasus', 'Kematian', 'Sembuh', 'Recovery Rate (%)', 'CFR (%)'],
    ['18-03-2020', 8,       1,        0,              0.00,          12.5],
    ['19-03-2020', 9,       1,        0,              0.00,          11.1],
    ['20-03-2020', 15,      1,        0,              0.00,          6.67],
    ['21-03-2020', 26,      1,        0,              0.00,          3.85],
    ['22-03-2020', 41,      1,        0,              0.00,          2.44],
    ['23-03-2020', 41,      2,        0,              0.00,          4.88],
    ['24-03-2020', 51,      2,        1,              1.96,          3.92],
    ['25-03-2020', 51,      2,        5,              9.80,          3.92],
    ['26-03-2020', 59,      3,        7,              11.86,          5.08],
    ['27-03-2020', 66,      4,        9,              13.64,          6.06],
    ['28-03-2020', 77,      4,        9,              11.69,          5.19],
    ['29-03-2020', 90,      7,        13,             14.44,          7.78],
    ['30-03-2020', 91,      8,        16,             17.58,          8.79],
    ['31-03-2020', 93,      8,        17,             18.28,          8.60],
    ['1-04-2020',  103,      9,        22,            21.36,          8.74],
    ['2-04-2020',  103,      11,        22,           21.36,          10.68],
    ['3-04-2020',  152,      11,        28,           18.42,          7.24],
    ['4-04-2020',  152,      14,        30,           19.74,          9.21],
    ['5-04-2020',  186,      14,        38,           20.43,          7.53],
    ['6-04-2020',  189,      14,        40,           21.16,          7.41],
    ['7-04-2020',  194,      16,        42,           21.65,          8.25]
  ]);

  var options = {
    vAxis: {title: 'Jumlah'},
    hAxis: {title: 'Tanggal'},
    seriesType: 'bars',
    series: {
        3: { type: 'line' },
        4: { type: 'line' }
      }    
};

  var chart = new google.visualization.ComboChart(document.getElementById('bar_line'));
  chart.draw(data, options);
}