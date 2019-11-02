$(document).ready(function() {

    $("#btn-edit").click(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'PUT',
            url: '/admin/employee/' + $("#frmEditEmployee input[name=employee_id]").val(),
            data: {
                role_id: $("#frmEditEmployee select[name=role_id]").val(),
                identification: $("#frmEditEmployee input[name=identification]").val(),
                name: $("#frmEditEmployee input[name=name]").val(),
                phone: $("#frmEditEmployee input[name=phone]").val(),
                address: $("#frmEditEmployee input[name=address]").val(),
            },
            dataType: 'json',
            success: function(data) {
                $('#frmEditEmployee').trigger("reset");
                $("#frmEditEmployee .close").click();
                window.location.reload();
            },
            error: function(data) {
                var errors = $.parseJSON(data.responseText);
                $('#edit-employee-errors').html('');
                $.each(errors.messages, function(key, value) {
                    $('#edit-employee-errors').append('<li>' + value + '</li>');
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
            url: '/admin/employee/' + $("#frmDeleteEmployee input[name=employee_id]").val(),
            dataType: 'json',
            success: function(data) {
                $("#frmDeleteEmployee .close").click();
                window.location.reload();
            },
            error: function(data) {
                console.log(data);
            }
        });
    });
});

function editEmployeeForm(employee_id) {
    $.ajax({
        type: 'GET',
        url: '/admin/employee/' + employee_id,
        success: function(data) {
            $("#edit-error-bag").hide();
            $("#frmEditEmployee select[name=role_id]").val(data.users.role_id);
            $("#frmEditEmployee input[name=identification]").val(data.users.identification);
            $("#frmEditEmployee input[name=name]").val(data.users.name);
            $("#frmEditEmployee input[name=phone]").val(data.users.phone);
            $("#frmEditEmployee input[name=address]").val(data.users.address);
            $("#frmEditEmployee input[name=employee_id]").val(data.users.id);
            $('#editEmployeeModal').modal('show');
        },
        error: function(data) {
            console.log(data);
        }
    });
}

function deleteEmployeeForm(employee_id) {
    $.ajax({
        type: 'GET',
        url: '/admin/employee/' + employee_id,
        success: function(data) {
            $("#frmDeleteEmployee #delete-title").html("¿Desea eliminar este usuario (" + data.users.name + ")?");
            $("#frmDeleteEmployee input[name=employee_id]").val(data.users.id);
            $('#deleteEmployeeModal').modal('show');
        },
        error: function(data) {
            console.log(data);
        }
    });
}