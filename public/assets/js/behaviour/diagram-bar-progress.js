google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawStacked);

function drawStacked() {
    var data = google.visualization.arrayToDataTable([
        ['Tanggal', 'Kasus Masih Dirawat', 'Kasus Meninggal',
         'Kasus Sembuh', { role: 'annotation' } ],
         ['18-03-2020', 7, 1, 0, ''],
         ['19-03-2020', 8, 1, 0, ''],
         ['20-03-2020', 14, 1, 0, ''],
         ['21-03-2020', 25, 1, 0, ''],
         ['22-03-2020', 38, 2, 0, ''],
         ['23-03-2020', 38, 2, 0, ''],
         ['24-03-2020', 47, 2, 1, ''],
         ['25-03-2020', 42, 3, 5, ''],
         ['26-03-2020', 46, 3, 7, ''],
         ['27-03-2020', 53, 4, 9, ''],
         ['28-03-2020', 64, 4, 9, ''],
         ['29-03-2020', 70, 7, 13, ''],
         ['30-03-2020', 67, 8, 16, ''],
         ['31-03-2020', 68, 8, 17, ''],
         ['1-04-2020',  72, 9, 22, ''],
         ['2-04-2020',  70, 22, 11, ''],
         ['3-04-2020',  113, 11, 28, ''],
         ['4-04-2020',  108, 14, 30, ''],
         ['5-04-2020',  136, 14, 38, ''],
         ['6-04-2020',  135, 14, 40, ''],
         ['7-04-2020',  136, 16, 42, '']
      ]);

      var options = {
        width: 600,
        height: 400,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        isStacked: true,
      };

      var chart = new google.visualization.ColumnChart(document.getElementById('bar_progress'));
      chart.draw(data, options);
    }