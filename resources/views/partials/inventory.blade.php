<!-- Modal -->
<div class="modal fade" id="addInventoryModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frmAddInventory">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <span class="fw-mediumbold">Nuevo</span> 
                        <span class="fw-light"> Inventario</span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="alert alert-danger" id="add-error-bag">
                        <ul id="add-inventory-errors"></ul>
                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Producto</label>
                                <div class="form-group form-group-default">
                                    <select class="form-control" id="product_id" name="product_id" required="">
                                        <option value="">Seleccione</option>
                                        @foreach ($product as $products)
                                            <option value="{{ $products['id'] }}"> {{ $products['name'] }}</option>
								        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Stock</label>
                                <input class="form-control" id="stock" name="stock" required="" type="number">
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
<div class="modal fade" id="editInventoryModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frmEditInventory">

                <div class="modal-header">
                    <h5 class="modal-title">
                        <span class="fw-mediumbold">Editar</span> 
                        <span class="fw-light"> Inventario</span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="alert alert-danger" id="edit-error-bag">
                        <ul id="edit-inventory-errors"></ul>
                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Producto</label>
                                <div class="form-group form-group-default">
                                    <select class="form-control" id="product_id" name="product_id" required="" disabled>
                                        <option value="">Seleccione</option>
                                        @foreach ($product as $products)
                                            <option value="{{ $products['id'] }}"> {{ $products['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Stock</label>
                                <input class="form-control" id="stock" name="stock" required="" type="number">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="modal-footer">
                    <input id="inventory_id" name="inventory_id" type="hidden" value="0">
                    <button class="btn btn-primary" id="btn-edit" type="button">Actualizar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </form>         
        </div>
    </div>
</div>
    
<!-- Modal -->
<div class="modal fade" id="deleteInventoryModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frmDeleteInventory">
                
                <div class="modal-header">
                    <h5 class="modal-title">
                        <span class="fw-mediumbold">Eliminar</span> 
                        <span class="fw-light"> Inventario</span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p id="delete-title" name="title">
                        ¿Desea eliminar este inventario de productos?
                    </p>
                    <p class="text-danger">
                        <small>
                            Esta acción no se puede revertir.
                        </small>
                    </p>
                </div>

                <div class="modal-footer">
                    <input id="inventory_id" name="inventory_id" type="hidden" value="0">
                    <button class="btn btn-primary" id="btn-delete" type="button">Eliminar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </form>         
        </div>
    </div>
</div>