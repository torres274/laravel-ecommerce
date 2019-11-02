$(document).ready(function() {

    $("#btn-edit").click(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'PUT',
            url: '/admin/administrator/' + $("#frmEditAdministrator input[name=administrator_id]").val(),
            data: {
                role_id: $("#frmEditAdministrator select[name=role_id]").val(),
                identification: $("#frmEditAdministrator input[name=identification]").val(),
                name: $("#frmEditAdministrator input[name=name]").val(),
                phone: $("#frmEditAdministrator input[name=phone]").val(),
                address: $("#frmEditAdministrator input[name=address]").val(),
            },
            dataType: 'json',
            success: function(data) {
                $('#frmEditAdministrator').trigger("reset");
                $("#frmEditAdministrator .close").click();
                window.location.reload();
            },
            error: function(data) {
                var errors = $.parseJSON(data.responseText);
                $('#edit-administrator-errors').html('');
                $.each(errors.messages, function(key, value) {
                    $('#edit-administrator-errors').append('<li>' + value + '</li>');
                });
                $("#edit-error-bag").show();
            }
        });
    });

    $("#btn-delete").click(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'DELETE',
            url: '/admin/administrator/' + $("#frmDeleteAdministrator input[name=administrator_id]").val(),
            dataType: 'json',
            success: function(data) {
                $("#frmDeleteAdministrator .close").click();
                window.location.reload();
            },
            error: function(data) {
                console.log(data);
            }
        });
    });
});

function editAdministratorForm(administrator_id) {
    $.ajax({
        type: 'GET',
        url: '/admin/administrator/' + administrator_id,
        success: function(data) {
            $("#edit-error-bag").hide();
            $("#frmEditAdministrator select[name=role_id]").val(data.users.role_id);
            $("#frmEditAdministrator input[name=identification]").val(data.users.identification);
            $("#frmEditAdministrator input[name=name]").val(data.users.name);
            $("#frmEditAdministrator input[name=phone]").val(data.users.phone);
            $("#frmEditAdministrator input[name=address]").val(data.users.address);
            $("#frmEditAdministrator input[name=administrator_id]").val(data.users.id);
            $('#editAdministratorModal').modal('show');
        },
        error: function(data) {
            console.log(data);
        }
    });
}

function deleteAdministratorForm(administrator_id) {
    $.ajax({
        type: 'GET',
        url: '/admin/administrator/' + administrator_id,
        success: function(data) {
            $("#frmDeleteAdministrator #delete-title").html("¿Desea eliminar este usuario (" + data.users.name + ")?");
            $("#frmDeleteAdministrator input[name=administrator_id]").val(data.users.id);
            $('#deleteAdministratorModal').modal('show');
        },
        error: function(data) {
            console.log(data);
        }
    });
}