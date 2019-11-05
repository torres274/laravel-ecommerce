<!-- Modal -->
<div class="modal fade" id="editOrderModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frmEditOrder">

                <div class="modal-header">
                    <h5 class="modal-title">
                        <span class="fw-mediumbold">Editar</span> 
                        <span class="fw-light"> Orden</span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="alert alert-danger" id="edit-error-bag">
                        <ul id="edit-order-errors"></ul>
                    </div>
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto">
                            <div class="form-group">
                                <label>Cliente</label>
                                <div class="form-group form-group-default">
                                    <select class="form-control" id="user_id" name="user_id" required="" disabled>
                                        <option value="">Seleccione</option>
                                        @foreach ($user as $users)
                                            <option value="{{ $users['id'] }}"> {{ $users['name'] }}</option>
								        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto">
                            <div class="form-group">
                                <label>Tipo de Pago</label>
                                <input class="form-control" id="payment_type" name="payment_type" required="" type="text" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto">
                            <div class="form-group">
                                <label>Estado</label>
                                <div class="form-group form-group-default">
                                    <select class="form-control" id="status" name="status" required="">
                                        <option value="">Seleccione</option>
                                        <option value="Anulado">Anulado</option>
                                        <option value="Pendiente">Pendiente</option>
                                        <option value="Facturado">Facturado</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="modal-footer">
                    <input id="order_id" name="order_id" type="hidden" value="0">
                    <button class="btn btn-primary" id="btn-edit" type="button">Actualizar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </form>         
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="seeOrderModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frmSeeOrder">

                <div class="modal-header">
                    <h5 class="modal-title">
                        <span class="fw-mediumbold">Detalle</span> 
                        <span class="fw-light"> Orden</span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <table class="display table table-head-bg-primary" >
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>

                <div class="modal-footer">
                    <input id="order_id" name="order_id" type="hidden" value="0">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </form>         
        </div>
    </div>
</div>