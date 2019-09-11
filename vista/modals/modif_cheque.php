<form id="actualidarDatos" action="../controlador/c_cheque.php" method="post">
<div class="modal fade" id="dataUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width: 900px;" role="document">
    <div class="modal-content">
      <!-- MODAL HEADER-->
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Cheque</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!--MODAL BODY -->
      <div class="modal-body">
        <div id="datos_ajax"></div>
        <input type="hidden" id="id" name="id">
        <div class="card-body card-block">
        <div class="row">
        <div class="col col-md-8" id="izquierda">        
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">Número de Cheque</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="txtnumero" name="txtnumero" placeholder="" class="form-control" require>
            </div>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-8" id="izquierda">
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
        <div class="col-md-6" >
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
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" name="update" id="update" >Actualizar datos</button>
      </div>
    </div>
  </div>
</div>
</form>