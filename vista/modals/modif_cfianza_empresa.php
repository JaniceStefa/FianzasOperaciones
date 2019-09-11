<form role="form" id="actualidarDatos" action="../controlador/c_cf_pendiente.php" method="post" enctype="multipart/form-data">
<div class="modal fade" id="dataUpdate" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width: 900px;" role="document">
    <div class="modal-content">
      <!-- MODAL HEADER-->
      <div class="modal-header">
        <h5 class="modal-title" id="mediumModalLabel">Agregar Nueva Renovación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--MODAL BODY -->
      <div class="modal-body">
        <div id="datos_ajax"></div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">Número de Carta Fianza</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="txtnumero" name="txtnumero" placeholder="" class="form-control" require>
                <input type="hidden" class="form-control" id="id" name="id">
                <input type="hidden" class="form-control" id="txtempresa" name="txtempresa">
                <input type="hidden" class="form-control" id="lstentidad" name="lstentidad">
                <input type="hidden" class="form-control" id="lstoficina" name="lstoficina">
                <input type="hidden" class="form-control" id="lsttipo" name="lsttipo">
                <input type="hidden" class="form-control" id="txtmonto" name="txtmonto">
            </div>
        </div>
        <div class=" row">
          <div class="col-md-6"> 
              <div class="row form-group">
                <div class="col col-md-3">
                <label for="direccion" class="form-control-label">Desde</label></div>
                <div class="col-12 col-md-9">
                <input type="date" class="form-control" id="emision" name="emision" required maxlength="45"></div>
              </div> 
          </div>
          <div class="col-md-6"> 
              <div class="row form-group">
                <div class="col col-md-3">
                <label for="direccion" class="form-control-label">Fecha de Vencimiento</label></div>
                <div class="col-12 col-md-9">
                <input type="date" class="form-control" id="vencimiento" name="vencimiento" required maxlength="45"></div>
              </div> 
          </div>
          <div class="col-md-6"> 
              <div class="row form-group">
                  <div class="col col-md-3">
                      <label for="text-input" class=" form-control-label">Vigencia</label>
                  </div>
                  <div class="col-12 col-md-9">
                      <input type="number" id="txtvigencia" name="txtvigencia" placeholder="" class="form-control" require>
                      <input type="hidden" id="txtprioridad" name="txtprioridad" placeholder="" class="form-control" require>
                  </div>
              </div>
          </div>   
          <div class="col col-md-6">
                <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Pago Prima</label>
                </div>
                <div class="col-12 col-md-5">
                    <input type="number" id="txtprima" name="txtprima" placeholder="" class="form-control" require>
                </div>
                <div class="col col-md-4">
                    <input type="checkbox" name="chkprima" require>Cancelado
                </div>
                </div>
            </div>          
        </div>
        
        <div class="row">
          <div class="col-md-6">
              <div class="row form-group">
              <div class="col col-md-3">
                  <label for="text-input" class="form-control-label">Adjuntar archivo</label>
              </div>
              <div class="col-12 col-md-7">
                  <input type="file" name="uploadedFile1" id="uploadedFile1" require></input>
                  <!--<input type="submit" name="uploadBtn" value="Upload"/>-->
              </div>
              </div>
          </div>
        </div>  
      </div>
      <!--MODAL FOOTER -->
      <div class="modal-footer">
        <button type="reset" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" name= "update" id= "update" >Actualizar datos</button>
      </div>
    </div>
  </div>
</div>
</form>