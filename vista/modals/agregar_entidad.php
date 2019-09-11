<!-- MODAL AGREGAR REGISTRO-->
<form role="form" id="newModalForm" method="post" action="../controlador/c_entidad.php">
<div class="modal fade" id="agregarForm" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <!-- modal medium -->
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
                            
    <!-- MODAL HEADER-->
    <div class="modal-header">
        <h5 class="modal-title" id="mediumModalLabel">Agregar Entidad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    
    <!-- MODAL BODY-->
    <div class="modal-body"> 
        <div class="card-body card-block">
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class="form-control-label">RUC Entidad </label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="txtruc" name="txtruc" placeholder="" class="form-control" require>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">Nombre Entidad</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="txtnombre" name="txtnombre" placeholder="" class="form-control" require>
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
