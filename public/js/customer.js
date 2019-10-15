$(document).ready(function() {

    // $('#add-row').DataTable({
    //     "pageLength": 3,
    // });
    
    $("#btn-edit").click(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'PUT',
            url: '/customer/' + $("#frmEditCustomer input[name=customer_id]").val(),
            data: {
                role_id: $("#frmEditCustomer select[name=role_id]").val(),
            },
            dataType: 'json',
            success: function(data) {
                $('#frmEditCustomer').trigger("reset");
                $("#frmEditCustomer .close").click();
                window.location.reload();
            },
            error: function(data) {
                var errors = $.parseJSON(data.responseText);
                $('#edit-customer-errors').html('');
                $.each(errors.messages, function(key, value) {
                    $('#edit-customer-errors').append('<li>' + value + '</li>');
                });
                $("#edit-error-bag").show();
            }
        });
    });

});

function editCustomerForm(customer_id) {
    $.ajax({
        type: 'GET',
        url: '/customer/' + customer_id,
        success: function(data) {
            $("#edit-error-bag").hide();
            $("#frmEditCustomer select[name=role_id]").val(data.users.role_id);
            $("#frmEditCustomer input[name=identification]").val(data.users.identification);
            $("#frmEditCustomer input[name=name]").val(data.users.name);
            $("#frmEditCustomer input[name=email]").val(data.users.email);
            $("#frmEditCustomer input[name=customer_id]").val(data.users.id);
            $('#editCustomerModal').modal('show');
        },
        error: function(data) {
            console.log(data);
        }
    });
}