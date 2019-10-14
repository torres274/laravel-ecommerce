$(document).ready(function() {

    $("#btn-add").click(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: '/product',
            data: {
                name: $("#frmAddProduct input[name=name]").val(),
                category_id: $("#frmAddProduct select[name=category_id]").val(),
                description: $("#frmAddProduct input[name=description]").val(),
                price_neto: $("#frmAddProduct input[name=price_neto]").val(),
                iva: $("#frmAddProduct input[name=iva]").val(),
                price_total: $("#frmAddProduct input[name=price_total]").val(),
                image: $("#frmAddProduct input[name=image]").val(),
            },
            dataType: 'json',
            success: function(data) {
                $('#frmAddProduct').trigger("reset");
                $("#frmAddProduct .close").click();
                window.location.reload();

            },
            error: function(data) {
                var errors = $.parseJSON(data.responseText);
                $('#add-product-errors').html('');
                $.each(errors.messages, function(key, value) {
                    $('#add-product-errors').append('<li>' + value + '</li>');
                });
                $("#add-error-bag").show();
            }
        });
    });

    $("#btn-edit").click(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'PUT',
            url: '/product/' + $("#frmEditProduct input[name=product_id]").val(),
            data: {
                name: $("#frmEditProduct input[name=name]").val(),
                category_id: $("#frmEditProduct select[name=category_id]").val(),
                description: $("#frmEditProduct input[name=description]").val(),
                price_neto: $("#frmEditProduct input[name=price_neto]").val(),
                iva: $("#frmEditProduct input[name=iva]").val(),
                price_total: $("#frmEditProduct input[name=price_total]").val(),
                image: $("#frmEditProduct input[name=image]").val(),
            },
            dataType: 'json',
            success: function(data) {
                $('#frmEditProduct').trigger("reset");
                $("#frmEditProduct .close").click();
                window.location.reload();
            },
            error: function(data) {
                var errors = $.parseJSON(data.responseText);
                $('#edit-product-errors').html('');
                $.each(errors.messages, function(key, value) {
                    $('#edit-product-errors').append('<li>' + value + '</li>');
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
            url: '/product/' + $("#frmDeleteProduct input[name=product_id]").val(),
            dataType: 'json',
            success: function(data) {
                $("#frmDeleteProduct .close").click();
                window.location.reload();
            },
            error: function(data) {
                console.log(data);
            }
        });
    });
});

function addProductForm() {
    $(document).ready(function() {
        $("#add-error-bag").hide();
        $('#addProductModal').modal('show');
    });
}

function editProductForm(product_id) {
    $.ajax({
        type: 'GET',
        url: '/product/' + product_id,
        success: function(data) {
            $("#edit-error-bag").hide();
            $("#frmEditProduct input[name=name]").val(data.products.name);
            $("#frmEditProduct select[name=category_id]").val(data.products.category_id);
            $("#frmEditProduct input[name=description]").val(data.products.description);
            $("#frmEditProduct input[name=price_neto]").val(data.products.price_neto);
            $("#frmEditProduct input[name=iva]").val(data.products.iva);
            $("#frmEditProduct input[name=price_total]").val(data.products.price_total);
            $("#frmEditProduct input[name=image]").val(data.products.image);
            $("#frmEditProduct input[name=product_id]").val(data.products.id);
            $('#editProductModal').modal('show');
        },
        error: function(data) {
            console.log(data);
        }
    });
}

function deleteProductForm(product_id) {
    $.ajax({
        type: 'GET',
        url: '/product/' + product_id,
        success: function(data) {
            $("#frmDeleteProduct #delete-title").html("¿Desea eliminar este producto (" + data.products.name + ")?");
            $("#frmDeleteProduct input[name=product_id]").val(data.products.id);
            $('#deleteProductModal').modal('show');
        },
        error: function(data) {
            console.log(data);
        }
    });
}

function calculo(){
    var tasa = 13;
    var price_neto = $("input[name=price_neto]").val();
    var iva = (price_neto * tasa)/100;

    $("input[name=iva]").val(iva);

    $("input[name=price_total]").val(parseInt(price_neto)+parseInt(iva));
}