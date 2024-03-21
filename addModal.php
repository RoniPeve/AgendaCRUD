<!-- Agregar Nuevo -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            	<center><h4 class="modal-title" id="myModalLabel">Agregar Contacto</h4></center>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="borrarDatos()"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="agregar.php" method="POST" id="mi_formulario">
                        <div class="row form-group mb-3">
                            <div class="col-sm-2">
                                <label for="" class="control-label">Nombre:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nombrecontacto">
                            </div>
                        </div>
                        <div class="row form-group mb-3">
                            <div class="col-sm-2">
                                <label for="" class="control-label">Celular:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="tel" class="form-control" name="celular">
                            </div>
                        </div>
                        <div class="row form-group mb-3">
                            <div class="col-sm-2">
                                <label for="" class="control-label">Email:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="row form-group mb-3">
                            <div class="col-sm-2">
                                <label for="" class="control-label">Dirección:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="direccion">
                            </div>
                        </div>
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="borrarDatos()"><span class="fa fa-close"></span>Cancelar</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="fa fa-save"></span> Guardar</button>
            </div>

            </form>
        </div>
        
    </div>
</div>
<script>
    function borrarDatos(){
        document.getElementById("mi_formulario").reset();
    }
</script>