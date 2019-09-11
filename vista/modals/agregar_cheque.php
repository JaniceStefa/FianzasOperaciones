<!-- MODAL AGREGAR REGISTRO-->
<form role="form" id="newModalForm" method="post" action="../controlador/c_cheque.php" enctype="multipart/form-data">
<div class="modal fade" id="agregarNuevo" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <!-- modal medium -->
    <div class="modal-dialog" style="max-width: 1200px;" role="document">
    <div class="modal-content">
                            
    <!-- MODAL HEADER-->
    <div class="modal-header">
        <h5 class="modal-title" id="mediumModalLabel">Agregar Cheque</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    
    <!-- MODAL BODY-->
    <div class="modal-body"> 
        <div class="card-body card-block">
        <div class="row">
        <div class="col col-md-6" id="izquierda">        
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">Número de Cheque</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="txtnumero" name="txtnumero" placeholder="" class="form-control" require>
            </div>
        </div>
        </div>
        <div class="col col-md-6" id="derecha">
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">Nombre Empresa</label>
            </div>
            <div class="col-12 col-md-9">
                <select name="txtempresa" id="txtempresa" class="form-control" ><!--onchange='changeText(this.value)'-->
                <option value="">Seleccione una opción</option>
                <?php
                foreach ($this->modelo1->Lista_Empresa() as $consulta){
                ?>
                <option value="<?php echo $consulta['id_cartafianza']?>"><?php echo $consulta['nombre_empresa']." - ". $consulta['cod_carta_fianza']?>
                </option>
                    <?php } ?>
            </select>
            </div>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col col-md-6" id="izquierda">
            <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">Monto</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="txtmonto" name="txtmonto" placeholder="" class="form-control" require>
            </div>
            </div>
        </div>
        <div class="col-md-6" id="derecha">
            <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">Banco</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="txtbanco" name="txtbanco" placeholder="" class="form-control" require>
            </div>
            </div>
        </div>
        </div>
        </div>        

        <div class="row">
        <div class="col-md-6">
            <div class="row form-group">
            <div class="col col-md-4">
                <label for="text-input" class=" form-control-label">Fecha de giro</label>
            </div>
            <div class="col-12 col-md-7">
                <input type="date" id="fgiro" name="fgiro" placeholder="" class="form-control" require>
            </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row form-group">
            <div class="col col-md-4">
                <label for="text-input" class=" form-control-label">Fecha a cobrar</label>
            </div>
            <div class="col-12 col-md-7">
                <input type="date" id="fcobrar" name="fcobrar" placeholder="" class="form-control" require>
            </div>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6">
            <div class="row form-group">
            <div class="col col-md-4">
                <label for="text-input" class=" form-control-label">Adjuntar archivo</label>
            </div>
            <div class="col-12 col-md-7">
                <input type="file" name="uploadedFile" id="uploadedFile"></input>
                <!--<input type="submit" name="uploadBtn" value="Upload"/>-->
            </div>
            </div>
        </div>    
        </div>
        
    </div>

    <!--MODAL FOOTER -->
    <div class="modal-footer">
        <button type="reset" class="btn btn-danger" data-dismiss="modal" >Cancelar</button> 
        <button type="submit" name= "aceptar" id="aceptar" class="btn btn-primary"> Aceptar </button> 
    </div>
     
    </div>       
    <!-- END MODAL CONTENT -->
    </div>
    <!-- END modal medium -->
    
<!-- end modal medium -->
</div>
</form>
