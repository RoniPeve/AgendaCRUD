<!-- Editar -->
<div class="modal fade" id="edit_<?php echo $fila["idPersona"]; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            	<center><h4 class="modal-title" id="myModalLabel">Editar Contacto</h4></center>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="editar.php?id=<?php echo $fila["idPersona"]; ?>" method="POST" id="mi_form_edit">
                        <div class="row form-group mb-3">
                            <div class="col-sm-2">
                                <label for="" class="control-label">Nombre:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nombrecontacto" value="<?php echo $fila["Nombre"]; ?>" data-original-value="<?php echo $fila["Nombre"]; ?>">
                            </div>
                        </div>
                        <div class="row form-group mb-3">
                            <div class="col-sm-2">
                                <label for="" class="control-label" >Celular:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="tel" class="form-control" name="celular" value="<?php echo $fila["Telefono"]; ?>" data-original-value="<?php echo $fila["Telefono"]; ?>">
                            </div>
                        </div>
                        <div class="row form-group mb-3">
                            <div class="col-sm-2">
                                <label for="" class="control-label">Email:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" value="<?php echo $fila["Correo"]; ?>" data-original-value="<?php echo $fila["Correo"]; ?>">
                            </div>
                        </div>
                        <div class="row form-group mb-3">
                            <div class="col-sm-2">
                                <label for="" class="control-label">Dirección:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="direccion" value="<?php echo $fila["Direccion"]; ?>" data-original-value="<?php echo $fila["Direccion"]; ?>">
                            </div>
                        </div>
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><span class="fa fa-close"></span>Cancelar</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="fa fa-check"></span> Actualizar</button>
            </div>

            </form>
        </div>
        
    </div>
</div>


<!-- Eliminar -->
<div class="modal fade" id="delete_<?php echo $fila["idPersona"]; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            	<center><h4 class="modal-title" id="myModalLabel">Eliminar Contacto</h4></center>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-center">¿Desea eliminar los datos del usuario:?</p>
                <h3 class="text-center"><?php echo $fila["Nombre"]; ?></h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><span class="fa fa-close"></span>Cancelar</button>
                <a href="delete.php?id=<?php echo $fila["idPersona"]; ?>"  class="btn btn-danger"><span class="fa fa-trash"></span>SI</a>
                
            </div>

            </form>
        </div>
        
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var editModals = document.querySelectorAll('.modal.fade');
        
        editModals.forEach(function(modal) {
            modal.addEventListener('hidden.bs.modal', function() {
                var nombre = modal.querySelector('input[name="nombrecontacto"]');
                var celular = modal.querySelector('input[name="celular"]');
                var email = modal.querySelector('input[name="email"]');
                var direccion = modal.querySelector('input[name="direccion"]');
                
                // Restablecer los valores originales de los campos del formulario
                nombre.value = nombre.getAttribute('data-original-value');
                celular.value = celular.getAttribute('data-original-value');
                email.value = email.getAttribute('data-original-value');
                direccion.value = direccion.getAttribute('data-original-value');
            });
        });
    });
</script>

