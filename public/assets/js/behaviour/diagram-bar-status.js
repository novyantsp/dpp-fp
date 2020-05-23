google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawStacked);

function drawStacked() {
    var data = google.visualization.arrayToDataTable([
        ['Kabupaten/Kota', 'Konfirm Dirawat', 'Konfirm Mandiri',
         'Sembuh', 'Meninggal', { role: 'annotation' } ],
        ['Surabaya', 10, 24, 20, 32, ''],
        ['Mojokerto', 16, 22, 23, 30, ''],
        ['Lamongan', 16, 22, 23, 30, ''],
        ['Malang', 16, 22, 23, 30, ''],
        ['Tuban', 16, 22, 23, 30, ''],
        ['Pasuruan', 16, 22, 23, 30, ''],
        ['Probolinggo', 16, 22, 23, 30, ''],
        ['Banyuwangi', 16, 22, 23, 30, ''],
        ['Gresik', 16, 22, 23, 30, ''],
        ['Sidoarjo', 28, 19, 29, 30, '']
      ]);

      var options = {
        width: 600,
        height: 400,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        isStacked: true,
      };

      var chart = new google.visualization.ColumnChart(document.getElementById('bar_status_div'));
      chart.draw(data, options);
    }