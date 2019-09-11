<form id="actualidarDatos" action="../controlador/c_empresa_operaciones_detalles.php" method="post">
<div class="modal fade" id="dataEval" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <!-- MODAL HEADER-->
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Evaluación : </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!--MODAL BODY -->
      <div class="modal-body">
        <div id="datos_ajax"></div>
          <div class="row form-group">
            <div class="col-12 col-md-5">
            <input type="text" class="form-control" id="id" name="idempresa">
            </div>
          </div>
          <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Estado</label>
                </div>
                <div class="col-12 col-md-5">
                    <input type="radio" name="estado" value="aprobado"> APROBADO </br>
                    <input type="radio" name="estado" value="rechazado"> RECHAZADO
                </div>
          </div>
          <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Observaciones </label>
                </div>
                <div class="col-12 col-md-8">
                    <textarea class="md-textarea form-control" name="txtObservaciones"></textarea>
                </div>
          </div>

      </div>
      <!--modal FOOTER -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" name="updateTramite" id="updateTramite" >Actualizar</button>
      </div>
    </div>
  </div>
</div>
</form>