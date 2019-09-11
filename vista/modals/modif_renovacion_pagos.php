<form role="form" id="actualidarDatos" action="../controlador/c_renovacion_pagos.php" method="post" enctype="multipart/form-data">
<div class="modal fade" id="dataEstado" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width: 900px;" role="document">
    <div class="modal-content">
      <!-- MODAL HEADER-->
      <div class="modal-header">
        <h5 class="modal-title" id="mediumModalLabel">Actualizar data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--MODAL BODY -->
      <div class="modal-body">
        <div id="datos_ajax"></div>

        <div class="row form-group">
          <div class="col col-md-3">
            <label for="text-input" class=" form-control-label">Estado: </label>
          </div>
          <div class="col-12 col-md-6">
           <input type="radio" name="estado" value="cancelado"> Cancelado
           <input type="radio" name="estado" value="vigente"> Vigente
           <br/>
           <input type="hidden" name="estadotramite" id="estadotramite">
           <input type="hidden" name="id" id="id">
           <br/>
           <input type="hidden" name="saldo" id="saldo">
          </div>
        </div>
        <div class="row">
        <div class="col-md-12">
            <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">Adjuntar voucher: </label>
            </div>
            <div class="col-12 col-md-7">
                <input type="file" name="uploadedFile" id="uploadedFile"></input>
                <!--<input type="submit" name="uploadBtn" value="Upload"/>-->
            </div>
            </div>
        </div>    
        </div>
        
        <!--<div class="row form-group">
        <div class="col col-md-3">
          <label for="text-input" class="form-control-label">Adjuntar voucher</label>
        </div>
        <div class="col-12 col-md-7">
          <input type="file" name="uploadedFile1" id="uploadedFile1" require></input>
          
        </div>-->
        </div>
      <!--MODAL FOOTER -->
      <div class="modal-footer">
        <button type="reset" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" name="update" id= "update" >Actualizar datos</button>
      </div>
    </div>
  </div>
</div>
</form>