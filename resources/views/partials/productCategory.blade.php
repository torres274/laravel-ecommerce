<!-- Modal -->
<div class="modal fade" id="addCategoryModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frmAddCategory">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <span class="fw-mediumbold">Nueva</span> 
                        <span class="fw-light"> Categoria</span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="alert alert-danger" id="add-error-bag">
                        <ul id="add-category-errors"></ul>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Descripcion</label>
                                <input class="form-control" id="description" name="description" required="" type="text" >
                            </div>
                        </div>
                    </div>

                </div>
                    <div class="modal-footer">
                        <button type="button" id="btn-add" class="btn btn-primary">Agregar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    </div>
            </form>         
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editCategoryModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frmEditCategory">

                <div class="modal-header">
                    <h5 class="modal-title">
                        <span class="fw-mediumbold">Editar</span> 
                        <span class="fw-light"> Categoria</span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="alert alert-danger" id="edit-error-bag">
                        <ul id="edit-category-errors"></ul>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Descripcion</label>
                                <input class="form-control" id="description" name="description" required="" type="text" >
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <input id="category_id" name="category_id" type="hidden" value="0">
                    <button class="btn btn-primary" id="btn-edit" type="button">Actualizar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </form>         
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteCategoryModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frmDeleteCategory">
                
                <div class="modal-header">
                    <h5 class="modal-title">
                        <span class="fw-mediumbold">Eliminar</span> 
                        <span class="fw-light"> Categoria</span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p id="delete-title" name="title">
                        ¿Desea eliminar esta categoría?
                    </p>
                    <p class="text-danger">
                        <small>
                            Esta acción no se puede revertir.
                        </small>
                    </p>
                </div>

                <div class="modal-footer">
                    <input id="category_id" name="category_id" type="hidden" value="0">
                    <button class="btn btn-primary" id="btn-delete" type="button">Eliminar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </form>         
        </div>
    </div>
</div>