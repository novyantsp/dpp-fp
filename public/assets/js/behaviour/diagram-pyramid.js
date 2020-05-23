google.load("visualization", "1", {
    packages: ["corechart"]
});
google.setOnLoadCallback(chart);

function chart() {
    //var data = new google.visualization.DataTable();

    var dataArray = [
        ['Usia', 'Laki-laki', 'Perempuan'],
        ['0-9 Tahun', 4,0],
        ['10-19 Tahun', 5,-5],
        ['20-29 Tahun', 12,-11],
        ['30-39 Tahun', 31,-8],
        ['40-49 Tahun', 22,-10],
        ['50-59 Tahun', 14,-10],
        ['60-69 Tahun', 11,-9],
        ['70-79 Tahun', 2,-2],
        ['>80 Tahun', 1,0]
    ];

    var data = google.visualization.arrayToDataTable(dataArray);

    var chart = new google.visualization.BarChart(document.getElementById('pyramid'));

    var options = {
        isStacked: true,
        hAxis: {
            format: ';'
        },
        vAxis: {
            direction: -1
        }
    };


    var formatter = new google.visualization.NumberFormat({
        pattern: ';'
    });

    formatter.format(data, 2)

    chart.draw(data, options);
}
