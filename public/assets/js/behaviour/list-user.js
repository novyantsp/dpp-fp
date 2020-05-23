$(document).ready(function () {

    $("#datatable-basic").on('click', '.edit-user', function () {
        const id = $(this).attr('id').substring(9);
        document.getElementById('email_update').value = $("#email" + id).html();
        document.getElementById('nama_update').value = $("#name" + id).html();
        document.getElementById('tipeUser_update').value = $(this).parent().attr('id').substring(13);
        document.getElementById('id_update').value = id;
    });
    $("#datatable-basic").on('click', '.hapus-user', function () {
        const id = $(this).attr('id').substring(10);
        document.getElementById('hapus-user-action').href = "user/" + id + "/delete";
    });

    $("#tipeUser_update").change(function(){
        var userGroup = $("#tipeUser_update").val();
        document.getElementById("user_group_id_update").value = userGroup;
    });
    $("#tipeUser").change(function(){
        var userGroup = $("#tipeUser").val();
        document.getElementById("user_group_id").value = userGroup;
    });
});

function onDevelopment() {
    alert('Mohon maaf, fitur masih dalam tahap pengembangan!');
}
