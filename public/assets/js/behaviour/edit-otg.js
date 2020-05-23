$(document).ready(function () {
    hideOnClicked('#otg_tgl_bertemu');
    hideOnClicked('#otg_tgl_gejala');
    hideOnClicked('#otg_tgl_ambil1');
    hideOnClicked('#otg_tgl_ambil2');
    hideOnClicked('#otg_tgl_ambil3');
    hideOnClicked('#otg_tgl_ambil4');

    document.getElementById('otg_kategori').value = (otg.risiko_id != null) ? otg.risiko_id : -1;
    document.getElementById('otg_rs').value = (otg.rumah_sakit_id != null) ? otg.rumah_sakit_id : -1;
    document.getElementById('otg_ket_ambil1').value = (otg.ket_rapid_test1 != null) ? otg.ket_rapid_test1 : -1;
    document.getElementById('otg_ket_ambil2').value = (otg.ket_rapid_test2 != null) ? otg.ket_rapid_test2 : -1;
    document.getElementById('otg_ket_ambil3').value = (otg.ket_spesimen1 != null) ? otg.ket_spesimen1 : -1;
    document.getElementById('otg_ket_ambil4').value = (otg.ket_spesimen2 != null) ? otg.ket_spesimen2 : -1;
    document.getElementById('otg_kondisi').value = (otg.kondisi_akhir_id != null) ? otg.kondisi_akhir_id : -1;


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


    $("#tabelKontak").on('click', '.hapus-otg', function () {
        const idKontak = $(this).attr('id').substring(9);
        document.getElementById('delete-title').innerHTML = "Hapus Orang Tanpa Gejala (OTG)";
        document.getElementById('delete-h').innerHTML = "Apakah Anda yakin menghapus Orang Tanpa Gejala (OTG) ini?";
        document.getElementById('delete-btn').href = "../../pasien/otg/" + idKontak + "/delete";
    });

    $("#yaPenyakit").click(function () {
        document.getElementById("penyerta").value = 1;
        $("#inputPenyakit").show(100);
    });
    $("#tidakPenyakit").click(function () {
        document.getElementById("penyerta").value = 0;
        document.getElementById("otg_penyakit_penyerta").value = '';
        $("#inputPenyakit").hide(100);
    });

    $("#yaIsolasi").click(function () {
        document.getElementById("isolasi").value = 1;
        $("#inputIsolasi").show(100);
    });
    $("#tidakIsolasi").click(function () {
        document.getElementById("isolasi").value = '';
        document.getElementById("otg_tempat_isolasi").value = '';
        document.getElementById("otg_alamat_isolasi").value = '';
        document.getElementById("otg_kelurahan_isolasi").value = '';
        document.getElementById("otg_instansi_isolasi").value = '';
        document.getElementById("otg_kota_isolasi").value = '';
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
        document.getElementById('')
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

    onWilayahChanged("#otg-kelurahan", "#otg_kecamatan",
        "#otg_kota", "otg_kelurahan");
    onWilayahChanged("#otg-kelurahan-hubung", "#otg_kecamatan_hubung",
        "#otg_kota_hubung", "otg_kelurahan_hubung");
    onWilayahChanged("#otg-kelurahan-isolasi", "#kecamatan-isolasi",
        "#otg_kota_isolasi", "otg_kelurahan_isolasi");
});

function hideOnClicked(id) {
    $(id).on('changeDate', function(ev){
        $(this).datepicker('hide');
    });
}

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
