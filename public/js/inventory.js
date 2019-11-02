$(document).ready(function() {

    $("#btn-add").click(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: '/admin/inventory',
            data: {
                product_id: $("#frmAddInventory select[name=product_id]").val(),
                stock: $("#frmAddInventory input[name=stock]").val(),
            },
            dataType: 'json',
            success: function(data) {
                $('#frmAddInventory').trigger("reset");
                $("#frmAddInventory .close").click();
                window.location.reload();

            },
            error: function(data) {
                var errors = $.parseJSON(data.responseText);
                $('#add-inventory-errors').html('');
                $.each(errors.messages, function(key, value) {
                    $('#add-inventory-errors').append('<li>' + value + '</li>');
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
            url: '/admin/inventory/' + $("#frmEditInventory input[name=inventory_id]").val(),
            data: {
                product_id: $("#frmEditInventory select[name=product_id]").val(),
                stock: $("#frmEditInventory input[name=stock]").val(),
            },
            dataType: 'json',
            success: function(data) {
                $('#frmEditInventory').trigger("reset");
                $("#frmEditInventory .close").click();
                window.location.reload();
            },
            error: function(data) {
                var errors = $.parseJSON(data.responseText);
                $('#edit-inventory-errors').html('');
                $.each(errors.messages, function(key, value) {
                    $('#edit-inventory-errors').append('<li>' + value + '</li>');
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
            url: '/admin/inventory/' + $("#frmDeleteInventory input[name=inventory_id]").val(),
            dataType: 'json',
            success: function(data) {
                $("#frmDeleteInventory .close").click();
                window.location.reload();
            },
            error: function(data) {
                console.log(data);
            }
        });
    });
});

function addInventoryForm() {
    $(document).ready(function() {
        $("#add-error-bag").hide();
        $('#addInventoryModal').modal('show');
    });
}

function editInventoryForm(inventory_id) {
    $.ajax({
        type: 'GET',
        url: '/admin/inventory/' + inventory_id,
        success: function(data) {
            $("#edit-error-bag").hide();
            $("#frmEditInventory select[name=product_id]").val(data.inventories.product_id);
            $("#frmEditInventory input[name=stock]").val(data.inventories.stock);           
            $("#frmEditInventory input[name=inventory_id]").val(data.inventories.id);
            $('#editInventoryModal').modal('show');
        },
        error: function(data) {
            console.log(data);
        }
    });
}

function deleteInventoryForm(inventory_id) {
    $.ajax({
        type: 'GET',
        url: '/admin/inventory/' + inventory_id,
        success: function(data) {
            $("#frmDeleteInventory #delete-title").html("¿Desea eliminar el inventario de este producto?");
            $("#frmDeleteInventory input[name=inventory_id]").val(data.inventories.id);
            $('#deleteInventoryModal').modal('show');
        },
        error: function(data) {
            console.log(data);
        }
    });
}