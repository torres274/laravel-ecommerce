$(document).ready(function() {

    // $('#add-row').DataTable({
    //     "pageLength": 3,
    // });

    $("#btn-add").click(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '/admin/productCategory',
            data: {
                description: $("#frmAddCategory input[name=description]").val(),
            },
            dataType: 'json',
            success: function(data) {
                $('#frmAddCategory').trigger("reset");
                $("#frmAddCategory .close").click();
                window.location.reload();

            },
            error: function(data) {
                var errors = $.parseJSON(data.responseText);
                $('#add-category-errors').html('');
                $.each(errors.messages, function(key, value) {
                    $('#add-category-errors').append('<li>' + value + '</li>');
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
            url: '/admin/productCategory/' + $("#frmEditCategory input[name=category_id]").val(),
            data: {
                description: $("#frmEditCategory input[name=description]").val(),
            },
            dataType: 'json',
            success: function(data) {
                $('#frmEditCategory').trigger("reset");
                $("#frmEditCategory .close").click();
                window.location.reload();
            },
            error: function(data) {
                var errors = $.parseJSON(data.responseText);
                $('#edit-category-errors').html('');
                $.each(errors.messages, function(key, value) {
                    $('#edit-category-errors').append('<li>' + value + '</li>');
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
            url: '/admin/productCategory/' + $("#frmDeleteCategory input[name=category_id]").val(),
            dataType: 'json',
            success: function(data) {
                $("#frmDeleteCategory .close").click();
                window.location.reload();
            },
            error: function(data) {
                console.log(data);
            }
        });
    });
});

function addCategoryForm() {
    $(document).ready(function() {
        $("#add-error-bag").hide();
        $('#addCategoryModal').modal('show');
    });
}

function editCategoryForm(category_id) {
    $.ajax({
        type: 'GET',
        url: '/admin/productCategory/' + category_id,
        success: function(data) {
            $("#edit-error-bag").hide();
            $("#frmEditCategory input[name=description]").val(data.category.description);
            $("#frmEditCategory input[name=category_id]").val(data.category.id);
            $('#editCategoryModal').modal('show');
        },
        error: function(data) {
            console.log(data);
        }
    });
}

function deleteCategoryForm(category_id) {
    $.ajax({
        type: 'GET',
        url: '/admin/productCategory/' + category_id,
        success: function(data) {
            $("#frmDeleteCategory #delete-title").html("¿Desea eliminar esta categoría (" + data.category.description + ")?");
            $("#frmDeleteCategory input[name=category_id]").val(data.category.id);
            $('#deleteCategoryModal').modal('show');
        },
        error: function(data) {
            console.log(data);
        }
    });
}