google.charts.load('current', {
    'packages': ['table']
});
google.charts.setOnLoadCallback(drawTable);

function drawTable() {
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Kabupaten/Kota');
    data.addColumn('number', 'ODP');
    data.addColumn('number', 'PDP');
    data.addColumn('number', 'Positif');
    data.addRows([
        ['Surabaya', {v: 100, f: '100'}, {v: 100, f: '100'}, {v: 100, f: '100'} ],
        ['Lamongan', {v:80,   f: '80'}, {v: 100, f: '100'}, {v: 100, f: '100'} ],
        ['Malang', {v: 125, f: '125'}, {v: 100, f: '100'}, {v: 100, f: '100'} ],
        ['Batu', {v: 70,  f: '70'}, {v: 100, f: '100'}, {v: 100, f: '100'} ],
        ['Jombang', {v: 70,  f: '70'}, {v: 100, f: '100'}, {v: 100, f: '100'} ],
        ['Mojokerto', {v: 70,  f: '70'}, {v: 100, f: '100'}, {v: 100, f: '100'} ],
        ['Banyuwangi', {v: 70,  f: '70'}, {v: 100, f: '100'}, {v: 100, f: '100'} ],
        ['Tuban', {v: 70,  f: '70'}, {v: 100, f: '100'}, {v: 100, f: '100'} ],
        ['Blitar', {v: 70,  f: '70'}, {v: 100, f: '100'}, {v: 100, f: '100'} ],
        ['Probolinggo', {v: 70,  f: '70'}, {v: 100, f: '100'}, {v: 100, f: '100'} ]
      ]);

    var table = new google.visualization.Table(document.getElementById('table_div'));

    table.draw(data, {
        showRowNumber: true,
        width: '100%',
        height: '100%'
    });
}
