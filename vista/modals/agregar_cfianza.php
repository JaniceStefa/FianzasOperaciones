<!-- MODAL AGREGAR REGISTRO-->
<form role="form" id="newModalForm" method="post" action="../controlador/c_cf_pendiente.php">
<div class="modal fade" id="agregarForm" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <!-- modal medium -->
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
                            
    <!-- MODAL HEADER-->
    <div class="modal-header">
        <h5 class="modal-title" id="mediumModalLabel">Agregar Carta Fianza</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    
    <!-- MODAL BODY-->
    <div class="modal-body"> 
        <div class="card-body card-block">
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class="form-control-label">Empresa </label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="txtempresa" name="txtempresa" placeholder="" class="form-control" require>
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">Tipo Carta Fianza</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="txttipo" name="txttipo" placeholder="" class="form-control" require>
            </div>
        </div>


        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">Código</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="txtcod" name="txtcod" placeholder="" class="form-control" require>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">Total </label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="txttotal" name="txttotal" placeholder="" class="form-control" require>
            </div>
        </div>


        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">Entidad</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="txtentidad" name="txtentidad" placeholder="" class="form-control" require>
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">Fecha Emisión </label>
            </div>
            <div class="col-12 col-md-4">
                <input type="date" id="txtfemision" name="txtfemision" placeholder="" class="form-control" require>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">Fecha Vencimiento </label>
            </div>
            <div class="col-12 col-md-4">
                <input type="date" id="txtfvenc" name="txtfvenc" placeholder="" class="form-control" require>
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
