$(document).ready(function () {
    $('#input_tgl_lahir').on('changeDate', function(ev){
        $(this).datepicker('hide');
        var age = getAge(document.getElementById("input_tgl_lahir").value);
        document.getElementById("input-usia").value = age;
    });
    $('#input_tgl_masuk_rs').on('changeDate', function(ev){
        $(this).datepicker('hide');
    });
    $('#input_tgl_mulai_gejala').on('changeDate', function(ev){
        $(this).datepicker('hide');
    });

    // Untuk aksi di riwyat perjalanan dan otg
    $("#tabelRiwayat").on('click', '.edit-perjalanan', function () {
        const idRiwayat = $(this).attr('id').substring(15);
        for(var i = 0; i < pasien.riwayat_perjalanan.length; i ++) {
            var perjalanan = pasien.riwayat_perjalanan[i];
            if(perjalanan.id == idRiwayat) {
                    document.getElementById('perjalanan-tanggal').value = perjalanan.tanggal;
                    document.getElementById('perjalanan-jam').value = perjalanan.jam;
                    document.getElementById('perjalanan-tempat').value = perjalanan.tempat;
                    document.getElementById('perjalanan-keperluan').value = perjalanan.keperluan;
                    document.getElementById('perjalanan_kelurahan').value = perjalanan.kelurahan_id;
                    document.getElementById('perjalanan_id').value = perjalanan.id;

                    initWilayahOnUpdate(perjalanan.kelurahan_id, "#perjalanan-kelurahan",
                        "#perjalanan-kecamatan", "#perjalanan-kota", "perjalanan_kelurahan");
                break;
            }
        }
    });
    $("#tabelRiwayat").on('click', '.hapus-perjalanan', function () {
        const idRiwayat = $(this).attr('id').substring(16);
        document.getElementById('delete-title').innerHTML = "Hapus Riwayat Perjalanan";
        document.getElementById('delete-h').innerHTML = "Apakah Anda yakin menghapus Riwayat Perjalanan ini?";
        document.getElementById('delete-btn').href = "../../pasien/riwayat-perjalanan/" + idRiwayat + "/delete";
    });
    $("#tabelKontak").on('click', '.edit-otg', function () {
        const idKontak = $(this).attr('id').substring(8);
        for(var i = 0; i < pasien.otg.length; i ++) {
            var otg = pasien.otg[i];
            if (otg.id == idKontak) {
                document.getElementById('otg_id').value = otg.id;
                document.getElementById('otg_kode').value = (otg.kode != null) ? otg.kode : '';
                document.getElementById('otg_nama').value = (otg.nama != null) ? otg.nama : '';
                document.getElementById('otg_hubungan').value = (otg.hubungan != null) ? otg.hubungan : '';
                document.getElementById('otg_kategori').value = (otg.risiko_id != null) ? otg.risiko_id : -1;
                document.getElementById('otg_alamat').value = (otg.alamat != null) ? otg.alamat : '';
                document.getElementById('otg_telp').value = (otg.telp != null) ? otg.telp : '';
                document.getElementById('otg_tgl_bertemu').value = (otg.tanggal != null) ? otg.tanggal : '';
                document.getElementById('otg_lokasi_bertemu').value = (otg.lokasi != null) ? otg.lokasi : '';
                document.getElementById('otg_gejala').value = (otg.gejala != null) ? otg.gejala : '';
                document.getElementById('otg_tgl_gejala').value = (otg.tanggal_gejala != null) ? otg.tanggal_gejala : '';
                document.getElementById('otg_penyakit_penyerta').value = (otg.penyakit_penyerta != null) ? otg.penyakit_penyerta : '';
                document.getElementById('otg_tempat_isolasi').value = (otg.tempat_isolasi != null) ? otg.tempat_isolasi : '';
                document.getElementById('otg_alamat_isolasi').value = (otg.alamat_isolasi != null) ? otg.alamat_isolasi : '';
                document.getElementById('otg_instansi_isolasi').value = (otg.instansi_isolasi != null) ? otg.instansi_isolasi : '';
                document.getElementById('otg_rs').value = (otg.rumah_sakit_id != null) ? otg.rumah_sakit_id : 0;
                document.getElementById('otg_tgl_ambil1').value = (otg.tgl_rapid_test1 != null) ? otg.tgl_rapid_test1 : '';
                document.getElementById('otg_ket_ambil1').value = (otg.ket_rapid_test1 != null) ? otg.ket_rapid_test1 : -1;
                document.getElementById('otg_tgl_ambil2').value = (otg.tgl_rapid_test2 != null) ? otg.tgl_rapid_test2 : '';
                document.getElementById('otg_ket_ambil2').value = (otg.ket_rapid_test2 != null) ? otg.ket_rapid_test2 : -1;
                document.getElementById('otg_tgl_ambil3').value = (otg.tgl_spesimen1 != null) ? otg.tgl_spesimen1 : '';
                document.getElementById('otg_ket_ambil3').value = (otg.ket_spesimen1 != null) ? otg.ket_spesimen1 : -1;
                document.getElementById('otg_tgl_ambil4').value = (otg.tgl_spesimen2 != null) ? otg.tgl_spesimen2 : '';
                document.getElementById('otg_ket_ambil4').value = (otg.ket_spesimen2 != null) ? otg.ket_spesimen2 : -1;
                document.getElementById('otg_alasan').innerHTML = (otg.alasan_spesimen != null) ? otg.alasan_spesimen : '';
                document.getElementById('otg_kondisi').value = (otg.kondisi_akhir_id != null) ? otg.kondisi_akhir_id : -1;
                document.getElementById('otg_pemantau').value = (otg.pemantau != null) ? otg.pemantau : '';
                document.getElementById('otg_keterangan').innerHTML = (otg.keterangan_akhir != null) ? otg.keterangan_akhir : '';


                initWilayahOnUpdate(otg.kelurahan_id, "#otg-kelurahan",
                    "#otg_kecamatan", "#otg_kota", "otg_kelurahan");
                initWilayahOnUpdate(otg.kelurahan_id_hubung, "#otg-kelurahan-hubung",
                    "#otg_kecamatan_hubung", "#otg_kota_hubung", "otg_kota_hubung");
                initWilayahOnUpdate(otg.kelurahan_id_isolasi, "#otg-kelurahan-isolasi",
                    "#otg_kecamatan_isolasi", "#otg_kota_isolasi", "otg_kota_isolasi");

                if(otg.penyakit_penyerta != null) {
                    $("#inputPenyakit").show(100);
                }
                if(otg.tempat_isolasi != null || otg.alamat_isolasi != null || otg.instansi_isolasi != null) {
                    $("#inputIsolasi").show(100);
                }
                if(otg.rumah_sakit_id != null) {
                    $("#inputDirawat").show(100);
                }
                if(otg.tgl_rapid_test1 != null || otg.tgl_rapid_test2 != null) {
                    $("#inputRapidTest").show(100);
                }
                if(otg.tgl_spesimen1 != null || otg.tgl_spesimen2 != null) {
                    $("#inputSpesimen").show(100);
                }

                break;
            }
        }
    });
    $("#tabelKontak").on('click', '.hapus-otg', function () {
        const idKontak = $(this).attr('id').substring(9);
        document.getElementById('delete-title').innerHTML = "Hapus Orang Tanpa Gejala (OTG)";
        document.getElementById('delete-h').innerHTML = "Apakah Anda yakin menghapus Orang Tanpa Gejala (OTG) ini?";
        document.getElementById('delete-btn').href = "../../pasien/otg/" + idKontak + "/delete";
    });

    $("#yaPenyakit_create").click(function () {
        document.getElementById("penyerta_create").value = 1;
        $("#inputPenyakit_create").show(100);
    });
    $("#tidakPenyakit_create").click(function () {
        document.getElementById("penyerta_create").value = 0;
        $("#inputPenyakit_create").hide(100);
    });

    $("#yaIsolasi_create").click(function () {
        document.getElementById("isolasi_create").value = 1;
        $("#inputIsolasi_create").show(100);
    });
    $("#tidakIsolasi_create").click(function () {
        document.getElementById("isolasi_create").value = 0;
        $("#inputIsolasi_create").hide(100);
    });

    $("#yaDirawat_create").click(function () {
        document.getElementById("dirawat-rs_create").value = 1;
        $("#inputDirawat_create").show(100);
    });
    $("#tidakDirawat_create").click(function () {
        document.getElementById("dirawat-rs_create").value = 0;
        $("#inputDirawat_create").hide(100);
    });
    $("#yaRapid_create").click(function () {
        document.getElementById("rapid-test_create").value = 1;
        $("#inputRapidTest_create").show(100);
    });
    $("#tidakRapid_create").click(function () {
        document.getElementById("rapid-test_create").value = 0;
        $("#inputRapidTest_create").hide(100);
        document.getElementById('create_otg_tgl_ambil1').value = '';
        document.getElementById('create_otg_tgl_ambil1').value = '';
        document.getElementById('create_otg_ket_ambil2').value = '';
        document.getElementById('create_otg_ket_ambil2').value = '';
    });
    $("#yaSpesimen_create").click(function () {
        document.getElementById("spesimen").value = 1;
        $("#inputSpesimen_create").show(100);
        $("#alasan-spesimen_create").hide(100);
    });
    $("#tidakSpesimen_create").click(function () {
        document.getElementById("spesimen").value = 0;
        $("#inputSpesimen_create").hide(100);
        $("#alasan-spesimen_create").show(100);
        document.getElementById('create_otg_tgl_ambil3').value = '';
        document.getElementById('create_otg_tgl_ambil3').value = '';
        document.getElementById('create_otg_ket_ambil4').value = '';
        document.getElementById('create_otg_ket_ambil4').value = '';
    });
    // hardcode langsung di sini untuk edit
    $("#yaPenyakit_update").click(function () {
        document.getElementById("penyerta_update").value = 1;
        $("#inputPenyakit_update").show(100);
    });
    $("#tidakPenyakit_update").click(function () {
        document.getElementById("penyerta_update").value = 0;
        $("#inputPenyakit_update").hide(100);
    });

    $("#yaIsolasi_update").click(function () {
        document.getElementById("isolasi_update").value = 1;
        $("#inputIsolasi_update").show(100);
    });
    $("#tidakIsolasi_update").click(function () {
        document.getElementById("isolasi_update").value = 0;
        $("#inputIsolasi_update").hide(100);
    });

    $("#yaDirawat_update").click(function () {
        document.getElementById("dirawat-rs_update").value = 1;
        $("#inputDirawat_update").show(100);
    });
    $("#tidakDirawat_update").click(function () {
        document.getElementById("dirawat-rs_update").value = 0;
        $("#inputDirawat_update").hide(100);
    });
    $("#yaRapid_update").click(function () {
        document.getElementById("rapid-test_update").value = 1;
        $("#inputRapidTest_update").show(100);
    });
    $("#tidakRapid_update").click(function () {
        document.getElementById("rapid-test_update").value = 0;
        $("#inputRapidTest_update").hide(100);
        document.getElementById('otg_tgl_ambil1').value = '';
        document.getElementById('otg_tgl_ambil1').value = '';
        document.getElementById('otg_ket_ambil2').value = '';
        document.getElementById('otg_ket_ambil2').value = '';
    });
    $("#yaSpesimen_update").click(function () {
        document.getElementById("spesimen_update").value = 1;
        $("#inputSpesimen_update").show(100);
        $("#alasan-spesimen_update").hide(100);
    });
    $("#tidakSpesimen_update").click(function () {
        document.getElementById("spesimen_update").value = 0;
        $("#inputSpesimen_update").hide(100);
        $("#alasan-spesimen_update").show(100);
        document.getElementById('otg_tgl_ambil3').value = '';
        document.getElementById('otg_tgl_ambil3').value = '';
        document.getElementById('otg_ket_ambil4').value = '';
        document.getElementById('otg_ket_ambil4').value = '';
    });

    initKota("#create-perjalanan-kota");
    initKota("#create_otg_kota");
    initKota("#create_otg_kota_hubung");
    initKota("#create_otg_kota_isolasi");
    onWilayahChanged("#create-perjalanan-kelurahan", "#create-perjalanan-kecamatan",
        "#create-perjalanan-kota", "create_perjalanan_kelurahan");
    onWilayahChanged("#create-otg-kelurahan", "#create_otg_kecamatan",
        "#create_otg_kota", "create_otg_kelurahan");
    onWilayahChanged("#create-otg-kelurahan-hubung", "#create_otg_kecamatan_hubung",
        "#create_otg_kota_hubung", "create_otg_kelurahan_hubung");
    onWilayahChanged("#create-otg-kelurahan-isolasi", "#create-kecamatan-isolasi",
        "#create_otg_kota_isolasi", "create_otg_kelurahan_isolasi");
});

// untuk init wialayah langsung pada halaman edit
function initWilayahOnUpdate(kelurahanId, kelurahanSelect, kecamatanSelect, kotaSelect, kelurahanSelected) {
    $(kotaSelect).html('');
    $(kecamatanSelect).html('');
    $(kelurahanSelect).html('');

    if(kelurahanId != null) {
        $.ajax({
            type: 'GET',
            url: "/pasien/wilayah-update/" + kelurahanId,
            data: {kelurahanId: kelurahanId},
            cache: false,
            success: function (msg) {
                if(msg == null) {
                    initKota(kotaSelect);
                    return;
                } else if(msg == ""){
                    initKota(kotaSelect);
                    return;
                } else {
                    wilayahs = msg.split("|", 3);
                    $(kelurahanSelect).html("<option value=\"\">Pilih Kelurahan</option>" + wilayahs[0]);
                    $(kecamatanSelect).html("<option value=\"\">Pilih Kecamatan</option>" + wilayahs[1]);
                    $(kotaSelect).html("<option value=\"\">Pilih Kota</option>" + wilayahs[2]);
                }
            }
        });
    } else {
        initKota(kotaSelect);
    }

    onWilayahChanged(kelurahanSelect, kecamatanSelect, kotaSelect, kelurahanSelected);
}

function initKota(kotaSelect) {
    $.ajax({
        type: 'GET',
        url: "/pasien/kota/-1",
        data: {selected: '-1'},
        cache: false,
        success: function (msg) {
            $(kotaSelect).html("<option value=\"\">Pilih Kota</option>" + msg);
        }
    });
}

function onWilayahChanged(kelurahanSelect, kecamatanSelect, kotaSelect, kelurahanSelected){
    $(kotaSelect).change(function(){
        var kota = $(kotaSelect).val();
        $(kecamatanSelect).html('');
        $(kelurahanSelect).html('');
        $.ajax({
            type: 'GET',
            url: "/pasien/kecamatan/" + kota + "/-1",
            data: {kotaId: kota},
            cache: false,
            success: function (msg) {
                $(kecamatanSelect).html("<option value=\"\">Pilih Kecamatan</option>" + msg);
                $(kelurahanSelect).html('');
            }
        });
    });

    $(kecamatanSelect).change(function(){
        var kecamatan = $(kecamatanSelect).val();
        $(kelurahanSelect).html('');
        $.ajax({
            type: 'GET',
            url: "/pasien/kelurahan/" + kecamatan + "/-1",
            data: {kecamatanId: kecamatan},
            cache: false,
            success: function (msg) {
                $(kelurahanSelect).html("<option value=\"\">Pilih Kelurahan</option>" + msg);
            }
        });
    });

    $(kelurahanSelect).change(function(){
        document.getElementById(kelurahanSelected).value = $(kelurahanSelect).val();
    });
}

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
    var kotaLoaded = false;
    var kecamatanLoaded = false;
    var kelurahanLoaded = false;
    if(pasien.kelurahan_id != null) {
        $.ajax({
            type: 'GET',
            url: "/pasien/kota/" + pasien.kota_id,
            data: {selected: pasien.kota_id},
            cache: false,
            success: function (msg) {
                kotaLoaded = true;
                $("#kota").html("<option value=\"\">Pilih Kota</option>" + msg);
            }
        });
        $.ajax({
            type: 'GET',
            url: "/pasien/kecamatan/" + pasien.kota_id + "/" + pasien.kecamatan_id,
            data: {kotaId: pasien.kota_id, selected: pasien.kecamatan_id},
            cache: false,
            success: function(msg){
                kecamatanLoaded = true;
                $("#kecamatan").html("<option value=\"\">Pilih Kecamatan</option>" + msg);
                $("#kelurahan").html('');
            }
        });
        $.ajax({
            type: 'GET',
            url: "/pasien/kelurahan/" + pasien.kecamatan_id + "/" + pasien.kelurahan_id,
            data: {kecamatanId: pasien.kecamatan_id, selected: pasien.kelurahan_id},
            cache: false,
            success: function(msg){
                kelurahanLoaded = true;
                $("#kelurahan").html("<option value=\"\">Pilih Kelurahan</option>" + msg);
            }
        });
    } else {
        kotaLoaded = true;
        kecamatanLoaded = true;
        kelurahanLoaded = true;
        $.ajax({
            type: 'GET',
            url: "/pasien/kota/-1",
            data: {selected: '-1'},
            cache: false,
            success: function (msg) {
                $("#kota").html("<option value=\"\">Pilih Kota</option>" + msg);
            }
        });
    }

    $("#kota").change(function(){
        if(kotaLoaded && kecamatanLoaded && kelurahanLoaded) {
            var kota = $("#kota").val();
            $("#kecamatan").html('');
            $("#kelurahan").html('');
            $.ajax({
                type: 'GET',
                url: "/pasien/kecamatan/" + kota + "/-1",
                data: {kotaId: kota},
                cache: false,
                success: function (msg) {
                    $("#kecamatan").html("<option value=\"\">Pilih Kecamatan</option>" + msg);
                    $("#kelurahan").html('');
                }
            });
        }
    });

    $("#kecamatan").change(function(){
        if(kotaLoaded && kecamatanLoaded && kelurahanLoaded) {
            var kecamatan = $("#kecamatan").val();
            $("#kelurahan").html('');
            $.ajax({
                type: 'GET',
                url: "/pasien/kelurahan/" + kecamatan + "/-1",
                data: {kecamatanId: kecamatan},
                cache: false,
                success: function (msg) {
                    $("#kelurahan").html("<option value=\"\">Pilih Kelurahan</option>" + msg);
                }
            });
        }
    });

    $("#kelurahan").change(function(){
        var kelurahan = $("#kelurahan").val();
        document.getElementById("kelurahanInput").value = kelurahan;
    });

});
