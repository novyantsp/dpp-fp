$(document).ready(function () {
    $("#datatable-basic").on('click', '.edit-rs', function () {
        const id = $(this).attr('id').substring(7);
        const kotaId = $(this).parent().attr('id').substring(7);
        document.getElementById('id-rs-edit').value = id;
        document.getElementById('kode-rs-edit').value = $("#kode-rs" + id).html();
        document.getElementById('nama-rs-edit').value = $("#nama-rs" + id).html();
        document.getElementById('jenis-rs-edit').value = $("#jenis-rs" + id).html();
        document.getElementById('tipe-rs-edit').value = $("#tipe-rs" + id).html();
        document.getElementById('alamat-rs-edit').value = $("#alamat-rs" + id).html();
        document.getElementById('kota-rs-edit').value = kotaId;
        document.getElementById('kota_id').value = kotaId;
    });
    $("#datatable-basic").on('click', '.hapus-rs', function () {
        const id = $(this).attr('id').substring(8);
        document.getElementById('hapus-rs-url').href = "rumah-sakit/" + id + "/delete"
    });
    $("#kota-rs-edit").change(function(){
        var id = $("#kota-rs-edit").val();
        document.getElementById("kota_id").value = id;
    });
    $("#kota-rs-create").change(function(){
        var id = $("#kota-rs-create").val();
        document.getElementById("kota_id_create").value = id;
    });
});
