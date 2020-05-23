$(document).ready(function () {
    $("#yaKontak").click(function () {
        $("#inputKontak").show(function () {
            // untuk kontak erat
            /*$.ajax({
                type: 'GET',
                url: "/input-data/kota",
                cache: false,
                success: function(msg){
                    $("#kota-ke").html("<option value=\"\">Pilih Kota</option>" + msg);
                }
            });*/
            $("#kota-ke").change(function(){
                var kota = $("#kota-ke").val();
                $("#kecamatan-ke").html('');
                $("#kelurahan-ke").html('');
                $.ajax({
                    type: 'GET',
                    url: "/pasien/kecamatan/" + kota + "/-1",
                    data: {kotaId: kota},
                    cache: false,
                    success: function(msg){
                        $("#kecamatan-ke").html("<option value=\"\">Pilih Kecamatan</option>" + msg);
                        $("#kelurahan-ke").html('');
                    }
                });
            });

            $("#kecamatan-ke").change(function(){
                var kecamatan = $("#kecamatan-ke").val();
                $("#kelurahan-ke").html('');
                $.ajax({
                    type: 'GET',
                    url: "/pasien/kelurahan/" + kecamatan + "/-1",
                    data: {kecamatanId: kecamatan},
                    cache: false,
                    success: function(msg){
                        $("#kelurahan-ke").html("<option value=\"\">Pilih Kelurahan</option>" + msg);
                    }
                });
            });

            $("#kelurahan-ke").change(function(){
                var kelurahan = $("#kelurahan-ke").val();
                document.getElementById("kelurahanKeInput").value = kelurahan;
            });

            // untuk kontak erat hubungan
            /* $.ajax({
                 type: 'GET',
                 url: "/input-data/kota",
                 cache: false,
                 success: function(msg){
                     $("#kota-hubung").html("<option value=\"\">Pilih Kota</option>" + msg);
                 }
             });*/

            $("#kota-hubung").change(function(){
                var kota = $("#kota-hubung").val();
                $("#kecamatan-hubung").html('');
                $("#kelurahan-hubung").html('');
                $.ajax({
                    type: 'GET',
                    url: "/pasien/kecamatan/" + kota + "/-1",
                    data: {kotaId: kota},
                    cache: false,
                    success: function(msg){
                        $("#kecamatan-hubung").html("<option value=\"\">Pilih Kecamatan</option>" + msg);
                        $("#kelurahan-hubung").html('');
                    }
                });
            });

            $("#kecamatan-hubung").change(function(){
                var kecamatan = $("#kecamatan-hubung").val();
                $("#kelurahan-hubung").html('');
                $.ajax({
                    type: 'GET',
                    url: "/pasien/kelurahan/" + kecamatan + "/-1",
                    data: {kecamatanId: kecamatan},
                    cache: false,
                    success: function(msg){
                        $("#kelurahan-hubung").html("<option value=\"\">Pilih Kelurahan</option>" + msg);
                    }
                });
            });

            $("#kelurahan-hubung").change(function(){
                var kelurahan = $("#kelurahan-hubung").val();
                document.getElementById("kelurahanHubungInput").value = kelurahan;
            });
        });
    });
    $("#tidakKontak").click(function () {
        $("#inputKontak").hide(100);
    });

    /*$("#penyerta").click(function () {
        var checkBox = document.getElementById("penyerta");
        if(checkBox.checked === true){
            checkBox.value = 1;
        } else {
            checkBox.value = 0;
        }
    });*/

    $("#yaPenyakit").click(function () {
        document.getElementById("penyerta").value = 1;
        $("#inputPenyakit").show(100);
    });
    $("#tidakPenyakit").click(function () {
        document.getElementById("penyerta").value = 0;
        $("#inputPenyakit").hide(100);
    });

    $("#yaIsolasi").click(function () {
        document.getElementById("isolasi").value = 1;
        $("#inputIsolasi").show(100);
    });
    $("#tidakIsolasi").click(function () {
        document.getElementById("isolasi").value = 0;
        $("#inputIsolasi").hide(100);
    });

    $("#yaDirawat").click(function () {
        document.getElementById("dirawat-rs").value = 1;
        $("#inputDirawat").show(100);
    });
    $("#tidakDirawat").click(function () {
        document.getElementById("dirawat-rs").value = 0;
        $("#inputDirawat").hide(100);
    });
    $("#yaRapid").click(function () {
        document.getElementById("rapid-test").value = 1;
        $("#inputRapidTest").show(100);
    });
    $("#tidakRapid").click(function () {
        document.getElementById("rapid-test").value = 0;
        $("#inputRapidTest").hide(100);
        document.getElementById('tanggalAmbil3').value = '';
        document.getElementById('tanggalAmbil4').value = '';
        document.getElementById('keterangan3').value = '';
        document.getElementById('keterangan4').value = '';
    });
    $("#yaSpesimen").click(function () {
        document.getElementById("spesimen").value = 1;
        $("#inputSpesimen").show(100);
        $("#alasan-spesimen").hide(100);
    });
    $("#tidakSpesimen").click(function () {
        document.getElementById("spesimen").value = 0;
        $("#inputSpesimen").hide(100);
        $("#alasan-spesimen").show(100);
        document.getElementById('tanggalAmbil1').value = '';
        document.getElementById('tanggalAmbil2').value = '';
        document.getElementById('keterangan1').value = '';
        document.getElementById('keterangan2').value = '';
    });

  /*  var mapPasien = document.getElementById('locationPickerPasien');
    var mapKontak = document.getElementById('locationPickerKontak');
    var mapRiwayat = document.getElementById('locationPickerRiwayat');

    // ini untuk bagian place picker
    var lpPasien = new locationPicker(mapPasien, { setCurrentPosition: true, lat: -7.256979, lng: 112.752045}, {zoom: 9});
    var lpKontak = new locationPicker(mapKontak, { setCurrentPosition: true, lat: -7.256979, lng: 112.752045}, {zoom: 9});
    var lpRiwayat = new locationPicker(mapRiwayat, { setCurrentPosition: true, lat: -7.256979, lng: 112.752045}, {zoom: 9});
    $("#locationPickerRiwayat").hide(0);
    $("#locationPickerKontak").hide(0);
    $("#locationPickerPasien").hide(0);
    var locRiwayatOpen = false;
    var locKontakOpen = false;
    var locPasienOpen = false;
    $("#ambil-koordinat-riwayat").click(function () {
        if(!locRiwayatOpen) {
            document.getElementById("ambil-koordinat-riwayat-text").innerText = 'Pilih';
            $("#locationPickerRiwayat").show(100);
            locRiwayatOpen = true;
        } else {
            document.getElementById("ambil-koordinat-riwayat-text").innerText = 'Ambil';
            $("#locationPickerRiwayat").hide(100);
            var locRiwayat= lpRiwayat.getMarkerPosition();
            document.getElementById('koordinatRiwayat').value = locRiwayat.lat.toFixed(6) + ',' + locRiwayat.lng.toFixed(6);
            locRiwayatOpen = false;
        }
    });
    $("#ambil-koordinat-kontak").click(function () {
        if(!locKontakOpen) {
            document.getElementById("ambil-koordinat-kontak-text").innerText = 'Pilih';
            $("#locationPickerKontak").show(100);
            locKontakOpen = true;
        } else {
            document.getElementById("ambil-koordinat-kontak-text").innerText = 'Ambil';
            $("#locationPickerKontak").hide(100);
            var locKontak= lpKontak.getMarkerPosition();
            document.getElementById('koordinatKontak').value = locKontak.lat.toFixed(6) + ',' + locKontak.lng.toFixed(6);
            locKontakOpen = false;
        }
    });
    $("#ambil-koordinat-pasien").click(function () {
        if(!locPasienOpen) {
            document.getElementById("ambil-koordinat-pasien-text").innerText = 'Pilih';
            $("#locationPickerPasien").show(100);
            locPasienOpen = true;
        } else {
            document.getElementById("ambil-koordinat-pasien-text").innerText = 'Ambil';
            $("#locationPickerPasien").hide(100);
            var locPasien= lpPasien.getMarkerPosition();
            document.getElementById('koordinatPasien').value = locPasien.lat.toFixed(6) + ',' + locPasien.lng.toFixed(6);
            locPasienOpen = false;
        }
    });

    // map on drag listener
    google.maps.event.addListener(lpPasien.map, 'idle', function (event) {
        // Get current location and show it in HTML
        var location = lpPasien.getMarkerPosition();
        document.getElementById('koordinatPasien').value = location.lat.toFixed(6) + ',' + location.lng.toFixed(6);
    });
    google.maps.event.addListener(lpKontak.map, 'idle', function (event) {
        // Get current location and show it in HTML
        var location = lpKontak.getMarkerPosition();
        document.getElementById('koordinatKontak').value = location.lat.toFixed(6) + ',' + location.lng.toFixed(6);
    });
    google.maps.event.addListener(lpRiwayat.map, 'idle', function (event) {
        // Get current location and show it in HTML
        var location = lpRiwayat.getMarkerPosition();
        document.getElementById('koordinatRiwayat').value = location.lat.toFixed(6) + ',' + location.lng.toFixed(6);
    });*/

    $('#input_tgl_lahir').on('changeDate', function(ev){
        $(this).datepicker('hide');
        var age = getAge(document.getElementById("input_tgl_lahir").value);
        document.getElementById("input-usia").value = age;
    });
    $('#tanggal').on('changeDate', function(ev){
        $(this).datepicker('hide');
    });
    $('#tanggalKontak').on('changeDate', function(ev){
        $(this).datepicker('hide');
    });
    $('#tanggalAmbil1').on('changeDate', function(ev){
        $(this).datepicker('hide');
    });
    $('#tanggalAmbil2').on('changeDate', function(ev){
        $(this).datepicker('hide');
    });
    $('#input_tgl_masuk_rs').on('changeDate', function(ev){
        $(this).datepicker('hide');
    });
    $('#input_tgl_mulai_gejala').on('changeDate', function(ev){
        $(this).datepicker('hide');
    });
    $('#tanggalGejalaOtg').on('changeDate', function(ev){
        $(this).datepicker('hide');
    });
    $('#tanggalAmbil3').on('changeDate', function(ev){
        $(this).datepicker('hide');
    });
    $('#tanggalAmbil4').on('changeDate', function(ev){
        $(this).datepicker('hide');
    });
});

function getAge(birth) {
    var today = new Date();
    var curr_date = today.getDate();
    var curr_month = today.getMonth() + 1;
    var curr_year = today.getFullYear();

    var pieces = birth.split('/');
    var birth_date = pieces[0];
    var birth_month = pieces[1];
    var birth_year = pieces[2];

    if (curr_month == birth_month && curr_date >= birth_date) return parseInt(curr_year-birth_year);
    if (curr_month == birth_month && curr_date < birth_date) return parseInt(curr_year-birth_year-1);
    if (curr_month > birth_month) return parseInt(curr_year-birth_year);
    if (curr_month < birth_month) return parseInt(curr_year-birth_year-1);
}

$(document).ready(function () {
    var id = 0;
    $("#butsend").click(function () {
        $("#tabelRiwayat").append('<tr valign="top">\n\
                <td >' + (id + 1) + '</td>\n\
                <td class="tanggal' + id + '">' + $("#tanggal").val() + '</td>\n\
                <td class="jam' + id + '">' + $("#jam").val() + '</td>\n\
                <td class="tempat' + id + '">' + $("#tempat").val() + '</td>\n\
                <td class="koordinatRiwayat' + id + '">' + $("#koordinatRiwayat").val() + '</td>\n\
                <td class="keperluan' + id + '">' + $("#keperluan").val() + '</td>\n\
                <td><a href="javascript:void(0);" class="remCF" id="rmRiwayat' + id + '">Remove</a></td>\n\ </tr>');
        $("#tabelRiwayat")
            .prepend(`
                <input type="hidden" id="riwayat_lokasi` + id + `" name="riwayat_lokasi[` + (id++) + `]" value="`
                + $("#tanggal").val() + `|`
                + $("#jam").val() + `|`
                + $("#keperluan").val() + `|`
                + $("#tempat").val() + `|`
                + $("#koordinatRiwayat").val() + `|`
                + $("#kelurahanPerjalananInput").val() + `|`
                + $("#kecamatan-perjalanan").val() +`"/>
                `)
    });
    $("#tabelRiwayat").on('click', '.remCF', function () {
        const idRow = $(this).attr('id');
        const inputId = "#riwayat_lokasi" + idRow.substring(9); //rmRiwayat
        $(this).parent().parent().remove();
        $(inputId).remove();

        var table = document.getElementById("tabelRiwayat");
        var iNew = 1;
        for (var r = 0; r < table.rows.length; r++) {
            if(r > 0)
                table.rows[r].cells[0].innerHTML = iNew++;
        }
        id = iNew - 1;
    });
    $('#butsend').click(function (e) {
        e.preventDefault();
        $('#riwayat').modal('toggle');
        return false;
    });
});

$(document).ready(function () {
    $.ajax({
        type: 'GET',
        url: "/pasien/kota/-1",
        cache: false,
        success: function(msg){
            $("#kota").html("<option value=\"\">Pilih Kota</option>" + msg);
            $("#kota-perjalanan").html("<option value=\"\">Pilih Kota</option>" + msg);
            $("#kota-ke").html("<option value=\"\">Pilih Kota</option>" + msg);
            $("#kota-hubung").html("<option value=\"\">Pilih Kota</option>" + msg);
            $("#kota-isolasi").html("<option value=\"\">Pilih Kota</option>" + msg);
        }
    });

    $("#kota").change(function(){
        var kota = $("#kota").val();
        $("#kecamatan").html('');
        $("#kelurahan").html('');
        $.ajax({
            type: 'GET',
            url: "/pasien/kecamatan/" + kota + "/-1",
            data: {kotaId: kota},
            cache: false,
            success: function(msg){
                $("#kecamatan").html("<option value=\"\">Pilih Kecamatan</option>" + msg);
                $("#kelurahan").html('');
            }
        });
    });

    $("#kecamatan").change(function(){
        var kecamatan = $("#kecamatan").val();
        document.getElementById("kecamatanInput").value = kecamatan;
        $("#kelurahan").html('');
        $.ajax({
            type: 'GET',
            url: "/pasien/kelurahan/" + kecamatan + "/-1",
            data: {kecamatanId: kecamatan},
            cache: false,
            success: function(msg){
                $("#kelurahan").html("<option value=\"\">Pilih Kelurahan</option>" + msg);
            }
        });
    });

    $("#kelurahan").change(function(){
        var kelurahan = $("#kelurahan").val();
        document.getElementById("kelurahanInput").value = kelurahan;
    });

    // untuk bagian model riwayat penyakit
    /* $.ajax({
         type: 'GET',
         url: "/input-data/kota",
         cache: false,
         success: function(msg){
             $("#kota-perjalanan").html("<option value=\"\">Pilih Kota</option>" + msg);
         }
     });*/

    $("#kota-perjalanan").change(function(){
        var kota = $("#kota-perjalanan").val();
        $("#kecamatan-perjalanan").html('');
        $("#kelurahan-perjalanan").html('');
        $.ajax({
            type: 'GET',
            url: "/pasien/kecamatan/" + kota + "/-1",
            data: {kotaId: kota},
            cache: false,
            success: function(msg){
                $("#kecamatan-perjalanan").html("<option value=\"\">Pilih Kecamatan</option>" + msg);
                $("#kelurahan-perjalanan").html('');
            }
        });
    });

    $("#kecamatan-perjalanan").change(function(){
        var kecamatan = $("#kecamatan-perjalanan").val();
        $("#kelurahan-perjalanan").html('');
        $.ajax({
            type: 'GET',
            url: "/pasien/kelurahan/" + kecamatan + "/-1",
            data: {kecamatanId: kecamatan},
            cache: false,
            success: function(msg){
                $("#kelurahan-perjalanan").html("<option value=\"\">Pilih Kelurahan</option>" + msg);
            }
        });
    });

    $("#kelurahan-perjalanan").change(function(){
        var kelurahan = $("#kelurahan-perjalanan").val();
        document.getElementById("kelurahanPerjalananInput").value = kelurahan;
    });

    // isolasi
    $("#kota-isolasi").change(function(){
        var kota = $("#kota-isolasi").val();
        $("#kecamatan-isolasi").html('');
        $("#kelurahan-isolasi").html('');
        $.ajax({
            type: 'GET',
            url: "/pasien/kecamatan/" + kota + "/-1",
            data: {kotaId: kota},
            cache: false,
            success: function(msg){
                $("#kecamatan-isolasi").html("<option value=\"\">Pilih Kecamatan</option>" + msg);
                $("#kelurahan-isolasi").html('');
            }
        });
    });

    $("#kecamatan-isolasi").change(function(){
        var kecamatan = $("#kecamatan-isolasi").val();
        $("#kelurahan-isolasi").html('');
        $.ajax({
            type: 'GET',
            url: "/pasien/kelurahan/" + kecamatan + "/-1",
            data: {kecamatanId: kecamatan},
            cache: false,
            success: function(msg){
                $("#kelurahan-isolasi").html("<option value=\"\">Pilih Kelurahan</option>" + msg);
            }
        });
    });

    $("#kelurahan-isolasi").change(function(){
        var kelurahan = $("#kelurahan-isolasi").val();
        document.getElementById("kelurahanIsolasiInput").value = kelurahan;
    });

});

$(document).ready(function () {
    var id = 0;
    $("#butKirim").click(function () {
        $("#tabelKontak")
            .prepend(`
                <input type="hidden" id="kontak_erat` + id + `" name="kontak_erat[` + id + `]" value="`
                + $("#namaKontak").val() + `|`
                + $("#nohp").val() + `|`
                + $("#alamatKE").val() + `|`
                + $("#kelurahanKeInput").val() + `|`
                + $("#kategoriKE").val() + `|`
                + $("#hubungan").val() + `|`
                + $("#tanggalKontak").val() + `|`
                + $("#lokasiBertemu").val() + `|`
                + $("#koordinatKontak").val() + `|`
                + $("#kelurahanHubungInput").val() + `|`
                + $("#kode-otg").val() + `|`
                + $("#tanggalGejalaOtg").val() + `|`
                + $("#kecamatan-ke").val() + `|`
                + $("#kecamatan-hubung").val() +`"/>` +
                `<input type="hidden" id="riwayat_sakit` + id + `" name="riwayat_sakit[` + id + `]" value="`
                + $("#gejala").val() + `|`
                + $("#penyerta").val() + `|`
                + $("#penyakit").val() + `|`
                + $("#rsDirawat").val() + `"/>`+
                `<input type="hidden" id="isolasi` + id + `" name="isolasi[` + id + `]" value="`
                + $("#isolasi").val() + `|`
                + $("#tempatIsolasi").val() + `|`
                + $("#alamatIsolasi").val() + `|`
                + $("#kelurahanIsolasiInput").val() + `|`
                + $("#instansi").val() + `|`
                + $("#kecamatan-isolasi").val() + `"/>`+
                `<input type="hidden" id="spesimen` + id + `" name="spesimen[` + id + `]" value="`
                + $("#spesimen").val() + `|`
                + $("#tanggalAmbil1").val() + `|`
                + $("#tanggalAmbil2").val() + `|`
                + $("#alasan").val() + `|`
                + $("#kondisi").val() + `|`
                + $("#pemantau").val() + `|`
                + $("#tanggalAmbil3").val() + `|`
                + $("#tanggalAmbil4").val() + `|`
                + $("#keterangan1").val() + `|`
                + $("#keterangan2").val() + `|`
                + $("#keterangan3").val() + `|`
                + $("#keterangan4").val() + `|`
                + $("#keterangan").val() + `|`
                + $("#rapid-test").val() + ` "/>`);
        $("#tabelKontak").append('<tr valign="top">\n\
                <td id="">' + (id + 1) + '</td>\n\
                <td class="kodeKontak' + id + '">' + $("#kode-otg").val() + '</td>\n\
                <td class="namaKontak' + id + '">' + $("#namaKontak").val() + '</td>\n\
                <td class="hubungan' + id + '">' + $("#hubungan").val() + '</td>\n\
                <td class="kategoriKE' + id + '">' + (($("#kategoriKE").val() == 1) ? "Tanpa Gejala" : (($("#kategoriKE").val() == 2) ? "Ringan" : (($("#kategoriKE").val() == 3) ? "Sedang" : "Berat"  ))) + '</td>\n\
                <td class="alamatKE' + id + '">' + $("#alamatKE").val() + '</td>\n\
                <td class="nohp' + id + '">' + $("#nohp").val() + '</td>\n\
                <td class="tanggalKontak' + id + '">' + $("#tanggalKontak").val() + '</td>\n\
                <td class="lokasiBertemu' + id + '">' + $("#lokasiBertemu").val() + '</td>\n\
                <td class="gejala' + id + '">' + $("#gejala").val() + '</td>\n\
                <td class="tglgejala' + id + '">' + $("#tanggalGejalaOtg").val() + '</td>\n\
                <td class="penyakit' + id + '">' + $("#penyakit").val() + '</td>\n\
                <td class="tempatIsolasi' + id + '">' + $("#tempatIsolasi").val() + '</td>\n\
                <td class="alamatIsolasi' + id + '">' + $("#alamatIsolasi").val() + '</td>\n\
                <td class="instansi' + id + '">' + $("#instansi").val() + '</td>\n\
                <td class="rsDirawat' + id + '">' + (document.getElementById("rsDirawat").value != '' ? $("#rsDirawat option:selected").html() : '') + '</td>\n\
                <td class="tanggalRapidTest1_' + id + '">' + $("#tanggalAmbil3").val() + '</td>\n\
                <td class="keteranganRapidTest1_' + id + '">' + ($("#keterangan3").val() == 0 ? 'Negatif' : ($("#keterangan3").val() == 1 ? 'Positif' : '')) + '</td>\n\
                <td class="tanggalRapidTest2_' + id + '">' + $("#tanggalAmbil4").val() + '</td>\n\
                <td class="keteranganRapidTest2_' + id + '">' + ($("#keterangan4").val() == 0 ? 'Negatif' : ($("#keterangan4").val() == 1 ? 'Positif' : '')) + '</td>\n\
                <td class="tanggalSpesimen1_' + id + '">' + $("#tanggalAmbil1").val() + '</td>\n\
                <td class="keteranganSpesimen1_' + id + '">' + ($("#keterangan1").val() == 0 ? 'Negatif' : ($("#keterangan1").val() == 1 ? 'Positif' : '')) + '</td>\n\
                <td class="tanggalSpesimen2_' + id + '">' + $("#tanggalAmbil2").val() + '</td>\n\
                <td class="keteranganSpesimen2_' + id + '">' + ($("#keterangan2").val() == 0 ? 'Negatif' : ($("#keterangan2").val() == 1 ? 'Positif' : '')) + '</td>\n\
                <td class="alasan' + id + '">' + $("#alasan").val() + '</td>\n\
                <td class="kondisi' + id + '">' + (($("#kondisi").val() == 1) ? "Sehat" : (($("#kondisi").val() == 2) ? "Sakit" : ($("#kondisi").val() == 3 ? "Meninggal" : ($("#kondisi").val() == 4 ? "Tidak ada keterangan" : "-")))) + '</td>\n\
                <td class="pemantau' + id + '">' + $("#pemantau").val() + '</td>\n\
                <td class="keterangan' + id + '">' + $("#keterangan").val() + '</td>\n\
                <td><a href="javascript:void(0);" class="remCF" id="kontak_kerat' + id + '">Remove</a></td>\n\ </tr>');
        id ++
    });

    $("#tabelKontak").on('click', '.remCF', function () {
        const idRow = $(this).attr('id').substring(12);
        const inputKontakEratId = "#kontak_erat" + idRow;
        const inputRiwayatSakitId = "#riwayat_sakit" + idRow;
        const inputIsolasiId = "#isolasi" + idRow;
        const inputSpesimenId = "#spesimen" + idRow;
        $(this).parent().parent().remove();
        $(inputKontakEratId).remove();
        $(inputRiwayatSakitId).remove();
        $(inputIsolasiId).remove();
        $(inputSpesimenId).remove();

        var table = document.getElementById("tabelKontak");
        var iNew = 1;
        for (var r = 0; r < table.rows.length; r++) {
            if(r > 0)
                table.rows[r].cells[0].innerHTML = iNew++;
        }
        id = iNew - 1;
    });
    $('#butKirim').click(function (e) {
        e.preventDefault();
        $('#kontak').modal('toggle');
        return false;
    });

    $("#input-kriteria").change(function() {
        var kriteria = $("#input-kriteria").val();
        document.getElementById("kriteriaPasien").value = kriteria;
    });
    $("#input-rs").change(function() {
        var rs = $("#input-rs").val();
        document.getElementById("inputRs").value = rs;
    });
});
