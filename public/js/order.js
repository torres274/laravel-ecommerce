$(document).ready(function() {
    
    $("#btn-edit").click(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'PUT',
            url: '/order/' + $("#frmEditOrder input[name=order_id]").val(),
            data: {
                status: $("#frmEditOrder select[name=status]").val(),
            },
            dataType: 'json',
            success: function(data) {
                $('#frmEditOrder').trigger("reset");
                $("#frmEditOrder .close").click();
                window.location.reload();
            },
            error: function(data) {
                var errors = $.parseJSON(data.responseText);
                $('#edit-order-errors').html('');
                $.each(errors.messages, function(key, value) {
                    $('#edit-order-errors').append('<li>' + value + '</li>');
                });
                $("#edit-error-bag").show();
            }
        });
    });

});

function editOrderForm(order_id) {
    $.ajax({
        type: 'GET',
        url: '/order/' + order_id,
        success: function(data) {
            $("#edit-error-bag").hide();
            $("#frmEditOrder select[name=user_id]").val(data.orders.user_id);
            $("#frmEditOrder input[name=payment_type]").val(data.orders.payment_type);
            $("#frmEditOrder input[name=price_total]").val(data.orders.price_total);
            $("#frmEditOrder select[name=status]").val(data.orders.status);
            $("#frmEditOrder input[name=order_id]").val(data.orders.id);
            $('#editOrderModal').modal('show');
        },
        error: function(data) {
            console.log(data);
        }
    });
}

function seeOrderForm(order_id) {
    $.ajax({
        type: 'GET',
        url: '/order/' + order_id,
        success: function(data) {

            $("#frmSeeOrder input[name=order_id]").val(data.orders.id);
            $('#seeOrderModal').modal('show');
        },
        error: function(data) {
            console.log(data);
        }
    });
}