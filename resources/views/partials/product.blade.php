<!-- Modal -->
<div class="modal fade" id="addProductModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frmAddProduct">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <span class="fw-mediumbold">Nuevo</span> 
                        <span class="fw-light"> Producto</span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="alert alert-danger" id="add-error-bag">
                        <ul id="add-product-errors"></ul>
                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input class="form-control" id="name" name="name" required="" type="text" >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Categoria</label>
                                <div class="form-group form-group-default">
                                    <select class="form-control" id="category_id" name="category_id" required="">
                                        <option value="">Seleccione</option>
                                        @foreach ($productCategory as $category)
                                            <option value="{{ $category['id'] }}"> {{ $category['description'] }}</option>
								        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Descripcion</label>
                                <input class="form-control" id="description" name="description" required="" type="text" >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Precio Neto</label>
                                <input class="form-control" id="price_neto" name="price_neto" required="" type="number" onChange="calculo();">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>IVA</label>
                                <input class="form-control" id="iva" name="iva" required="" readonly>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Precio Total</label>
                                <input class="form-control" id="price_total" name="price_total" required="" readonly>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Imagen</label>
                                <input class="form-control" id="image" name="image" required="" type="file">
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
<div class="modal fade" id="editProductModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frmEditProduct">

                <div class="modal-header">
                    <h5 class="modal-title">
                        <span class="fw-mediumbold">Editar</span> 
                        <span class="fw-light"> Producto</span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="alert alert-danger" id="edit-error-bag">
                        <ul id="edit-product-errors"></ul>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input class="form-control" id="name" name="name" required="" type="text" >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Categoria</label>
                                <div class="form-group form-group-default">
                                    <select class="form-control" id="category_id" name="category_id" required="">
                                        <option value="">Seleccione</option>
                                        @foreach ($productCategory as $category)
                                            <option value="{{ $category['id'] }}"> {{ $category['description'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Descripcion</label>
                                <input class="form-control" id="description" name="description" required="" type="text" >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Precio Neto</label>
                                <input class="form-control" id="price_neto2" name="price_neto2" type="number" required="" onChange="calculo2();">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>IVA</label>
                                <input class="form-control" id="iva2" name="iva2" required="" readonly>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Precio Total</label>
                                <input class="form-control" id="price_total2" name="price_total2" required="" readonly>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Imagen</label>
                                <input class="form-control-file" id="image" name="image" required="" type="file">
                            </div>
                        </div> 

                    </div>
                </div>

                <div class="modal-footer">
                    <input id="product_id" name="product_id" type="hidden" value="0">
                    <button class="btn btn-primary" id="btn-edit" type="button">Actualizar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </form>         
        </div>
    </div>
</div>
    
<!-- Modal -->
<div class="modal fade" id="deleteProductModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frmDeleteProduct">
                
                <div class="modal-header">
                    <h5 class="modal-title">
                        <span class="fw-mediumbold">Eliminar</span> 
                        <span class="fw-light"> Producto</span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p id="delete-title" name="title">
                        ¿Desea eliminar este producto?
                    </p>
                    <p class="text-danger">
                        <small>
                            Esta acción no se puede revertir.
                        </small>
                    </p>
                </div>

                <div class="modal-footer">
                    <input id="product_id" name="product_id" type="hidden" value="0">
                    <button class="btn btn-primary" id="btn-delete" type="button">Eliminar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </form>         
        </div>
    </div>
</div>