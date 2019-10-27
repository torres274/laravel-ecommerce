<!-- Modal -->
<div class="modal fade" id="editEmployeeModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="frmEditEmployee">
    
                    <div class="modal-header">
                        <h5 class="modal-title">
                            <span class="fw-mediumbold">Editar</span> 
                            <span class="fw-light"> Usuario</span>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
    
                    <div class="modal-body">
                        <div class="alert alert-danger" id="edit-error-bag">
                            <ul id="edit-employee-errors"></ul>
                        </div>
                        <div class="row">
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Rol</label>
                                    <div class="form-group form-group-default">
                                        <select class="form-control" id="role_id" name="role_id" required="">
                                            <option value="">Seleccione</option>
                                            @foreach ($role as $roles)
                                                <option value="{{ $roles['id'] }}"> {{ $roles['name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Identificación</label>
                                    <input class="form-control" id="identification" name="identification" required="" type="number" >
                                </div>
                            </div>
    
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input class="form-control" id="name" name="name" required="" type="text">
                                </div>
                            </div>
    
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Teléfono</label>
                                    <input class="form-control" id="phone" name="phone" required="" type="number">
                                </div>
                            </div>
    
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Dirección</label>
                                    <input class="form-control" id="address" name="address" required="" type="text">
                                </div>
                            </div>
    
                        </div>
                    </div>
    
                    <div class="modal-footer">
                        <input id="employee_id" name="employee_id" type="hidden" value="0">
                        <button class="btn btn-primary" id="btn-edit" type="button">Actualizar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>         
            </div>
        </div>
    </div>
        
    <!-- Modal -->
    <div class="modal fade" id="deleteEmployeeModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="frmDeleteEmployee">
                    
                    <div class="modal-header">
                        <h5 class="modal-title">
                            <span class="fw-mediumbold">Eliminar</span> 
                            <span class="fw-light"> Usuario</span>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
    
                    <div class="modal-body">
                        <p id="delete-title" name="title">
                            ¿Desea eliminar este usuario?
                        </p>
                        <p class="text-danger">
                            <small>
                                Esta acción no se puede revertir.
                            </small>
                        </p>
                    </div>
    
                    <div class="modal-footer">
                        <input id="employee_id" name="employee_id" type="hidden" value="0">
                        <button class="btn btn-primary" id="btn-delete" type="button">Eliminar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>         
            </div>
        </div>
    </div>