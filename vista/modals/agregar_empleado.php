<!-- MODAL AGREGAR REGISTRO-->
<form role="form" id="newModalForm" method="post" action="../controlador/c_empleado.php">
<div class="modal fade" id="agregarForm" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <!-- modal medium -->
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
                            
    <!-- MODAL HEADER-->
    <div class="modal-header">
        <h5 class="modal-title" id="mediumModalLabel">Agregar Empleado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    
    <!-- MODAL BODY-->
    <div class="modal-body"> 
        <div class="card-body card-block">
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class="form-control-label">DNI </label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="txtdni" name="txtdni" placeholder="" class="form-control" require>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">Apellidos</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="txtapellido" name="txtapellido" placeholder="" class="form-control" require>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">Nombres</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="txtnombre" name="txtnombre" placeholder="" class="form-control" require>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">Email</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="email" id="txtemail" name="txtemail" placeholder="" class="form-control" require>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">Teléfono</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="txttelefono" name="txttelefono" placeholder="" class="form-control" require>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">Oficina</label>
            </div>
            <div class="col-12 col-md-9">
                <select name="lstoficina" id="lstoficina" class="form-control" >
                    <option value="">Seleccione una opción</option>
                    <?php
                    foreach ($this->modelo1->Lista_Oficina() as $consulta){           
                    ?>
                    <option value="<?php echo $consulta['id_oficina']?>"><?php echo $consulta['descripcion']?>
                    </option>
                    <?php } ?>
                </select>
            </div>
        </div>
    </div>

    <!--MODAL FOOTER -->
    <div class="modal-footer">
        <button type="reset" class="btn btn-danger" data-dismiss="modal" >Cancelar</button> 
        <button type="submit" name= "aceptar" id="aceptar" class="btn btn-primary"> Aceptar  </button> 
    </div>
     
    </div>       
    <!-- END MODAL CONTENT -->
    </div>
    <!-- END modal medium -->
    </div>
<!-- end modal medium -->
</div>
</form>
