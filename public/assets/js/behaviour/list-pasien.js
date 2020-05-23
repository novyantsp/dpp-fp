$(document).ready(function () {
    $("#datatable-basic").on('click', '.riwayat-perjalanan', function () {
        const id = $(this).attr('id').substring(18);
        for(var i = 0; i < pasiens.length; i ++) {
            if(pasiens[i].id == id) {
                var doc = '';
                for (var j = 0; j < (pasiens[i].riwayat_perjalanan).length; j++) {
                    var perjalanan = pasiens[i].riwayat_perjalanan[j];
                    doc += '<tr></tr><td>' + (j + 1) + '</td>\n' +
                        '<td>' + (perjalanan.tanggal != null ? perjalanan.tanggal : "-") + '</td>\n' +
                        '<td>' + (perjalanan.jam != null ? perjalanan.jam : "-") + '</td>\n' +
                        '<td>' + (perjalanan.tempat != null ? perjalanan.tempat : "-") + '</td>\n' +
                        '<td>' + (perjalanan.koordinat != null ? perjalanan.koordinat : "-") + '</td>\n' +
                        '<td>' + (perjalanan.keperluan != null ? perjalanan.keperluan : "-") + '</td></tr>\n';
                }
                $("#barisRiwayat").html(doc);
                $("#nama-daftar-perjalanan").html(pasiens[i].nama);
                break;
            }
        }
    });
    $("#datatable-basic").on('click', '.daftar-otg', function () {
        const id = $(this).attr('id').substring(10);
        for(var i = 0; i < pasiens.length; i ++) {
            if(pasiens[i].id == id) {
                var doc = '';
                for (var j = 0; j < (pasiens[i].otg).length; j++) {
                    var otg = pasiens[i].otg[j];
                    doc += '<tr></tr><td>' + (j + 1) + '</td>\n' +
                        '<td>' + (otg.kode != null ? otg.kode : '-') + '</td>\n' +
                        '<td>' + (otg.nama != null ? otg.nama : '-') + '</td>\n' +
                        '<td>' + (otg.hubungan != null ? otg.hubungan : '-') + '</td>\n' +
                        '<td>' + (otg.risiko != null ? otg.risiko : '-') + '</td>\n' +
                        '<td>' + (otg.alamat != null ? otg.alamat : '-') + '</td>\n' +
                        '<td>' + (otg.telp != null ? otg.telp : '-') + '</td>\n' +
                        '<td>' + (otg.tanggal != null ? otg.tanggal : '-') + '</td>\n' +
                        '<td>' + (otg.lokasi != null ? otg.lokasi : '-') + '</td>\n' +
                        '<td>' + (otg.gejala != null ? otg.gejala : '-') + '</td>\n' +
                        '<td>' + (otg.tanggal_gejala != null ? otg.tanggal_gejala : '-') + '</td>\n' +
                        '<td>' + (otg.penyakit_penyerta != null ? otg.penyakit_penyerta : '-') + '</td>\n' +
                        '<td>' + (otg.tempat_isolasi != null ? otg.tempat_isolasi : '-') + '</td>\n' +
                        '<td>' + (otg.alamat_isolasi != null ? otg.alamat_isolasi : '-') + '</td>\n' +
                        '<td>' + (otg.instansi_isolasi != null ? otg.instansi_isolasi : '-') + '</td>\n' +
                        '<td>' + (otg.rumah_sakit != null ? otg.rumah_sakit : '-') + '</td>\n' +
                        '<td>' + (otg.tgl_rapid_test1 != null ? otg.tgl_rapid_test1 : '-') + '</td>\n' +
                        '<td>' + (otg.ket_rapid_test1 != null ? otg.ket_rapid_test1 : '-') + '</td>\n' +
                        '<td>' + (otg.tgl_rapid_test2 != null ? otg.tgl_rapid_test2 : '-') + '</td>\n' +
                        '<td>' + (otg.ket_rapid_test2 != null ? otg.ket_rapid_test2 : '-') + '</td>\n' +
                        '<td>' + (otg.tgl_spesimen1 != null ? otg.tgl_spesimen1 : '-') + '</td>\n' +
                        '<td>' + (otg.ket_spesimen1 != null ? otg.ket_spesimen1 : '-') + '</td>\n' +
                        '<td>' + (otg.tgl_spesimen2 != null ? otg.tgl_spesimen2 : '-') + '</td>\n' +
                        '<td>' + (otg.ket_spesimen2 != null ? otg.ket_spesimen2 : '-') + '</td>\n' +
                        '<td>' + (otg.alasan_spesimen != null ? otg.alasan_spesimen : '-') + '</td>\n' +
                        '<td>' + (otg.kondisi_akhir != null ? otg.kondisi_akhir : '-') + '</td>\n' +
                        '<td>' + (otg.pemantau != null ? otg.pemantau : '-') + '</td>\n' +
                        '<td>' + (otg.keterangan_akhir != null ? otg.keterangan_akhir : '-') + '</td></tr>\n';
                }
                $("#barisOtg").html(doc);
                $("#nama-daftar-otg").html(pasiens[i].nama);
                break;
            }
        }
    });
    $("#datatable-basic").on('click', '.hapus-pasien', function () {
        const id = $(this).attr('id').substring(12);
        document.getElementById("btn-hapus").href= "pasien/" + id + "/delete"
    });
});
