$(document).ready(function () {
    $("#datatable-basic").on('click', '.hapus-otg', function () {
        const id = $(this).attr('id').substring(9);
        document.getElementById("btn-hapus").href= "../pasien/otg/" + id + "/delete"
    });
    $("#datatable-basic").on('click', '.jadi-pasien', function () {
        const id = $(this).attr('id').substring(11);
        document.getElementById("btn-make-pasien").href= "../pasien/otg/" + id + "/make-pasien"
    });
});

function onDevelopment() {
    alert('Mohon maaf, fitur masih dalam tahap pengembangan!');
}
