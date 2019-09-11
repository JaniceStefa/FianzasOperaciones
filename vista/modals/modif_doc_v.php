<form id="actualidarDatos" action="../controlador/c_empresa_operaciones_detalles.php" method="post">
<div class="modal fade" id="dataUpdateDocVarios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <!-- MODAL HEADER-->
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Documento Entregado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!--MODAL BODY -->
      <div class="modal-body">
        <div id="datos_ajax"></div>
          <div class="row form-group">
            <div class="col col-md-3">
            <label for="" class="form-control-label">Fecha de Entrega:</label></div>
            <div class="col-12 col-md-5">
            <input type="date" class="form-control" id="fecha" name="txtfecha" required maxlength="40"></div>
            <input type="text" class="form-control" id="empresa" name="idempresa">
            <input type="text" class="form-control" id="doc" name="iddoc">           
            <input type="text" class="form-control" id="consorcio" name="idconsorcio"> 
            </div>
      </div>
      <!--modal FOOTER -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" name="updatedocV" id="updatedocV" >Actualizar datos</button>
      </div>
    </div>
  </div>
</div>
</form>