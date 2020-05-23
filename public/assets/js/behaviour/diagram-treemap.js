google.charts.load('current', {'packages':['treemap']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Location', 'Parent', 'size', 'increase/decrease (color)'],
    ['Kategori Kasus',    null,                 0,                               0],
    ['ODP',   'Kategori Kasus',             0,                               0],
    ['PDP',    'Kategori Kasus',             0,                               0],
    ['Konfirm',      'Kategori Kasus',             0,                               0],
    ['ODP Pantau',    'ODP',             42,                              -11],
    ['ODP Selesai',    'ODP',            11,                              10],
    ['PDP Dirawat',       'PDP',            52,                              31],
    ['PDP Sehat',    'PDP',            24,                              12],
    ['PDP Meninggal',    'PDP',            16,                              -23],
    ['Konfirm Dirawat',    'Konfirm',             42,                              -11],
    ['Konfirm Mandiri',   'Konfirm',             31,                              -2],
    ['Sembuh',    'Konfirm',             22,                              -13],
    ['Meninggal',     'Konfirm',             17,                              4],
    ['Positif',      'Konfirm',             31,                               12]    
  ]);

  tree = new google.visualization.TreeMap(document.getElementById('treemap_div'));

  tree.draw(data, {
    minColor: '#f00',
    midColor: '#ddd',
    maxColor: '#0d0',
    headerHeight: 15,
    fontColor: 'black',
    showScale: true
  });

}