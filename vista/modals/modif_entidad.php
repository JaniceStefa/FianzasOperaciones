<form id="actualidarDatos" action="../controlador/c_entidad.php" method="post">
<div class="modal fade" id="dataUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <!-- MODAL HEADER-->
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Entidad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!--MODAL BODY -->
      <div class="modal-body">
        <div id="datos_ajax"></div>
        <div class="row form-group">
            <div class="col col-md-3">
            <label for="descripcion" class="form-control-label">RUC Entidad:</label></div>
            <div class="col-12 col-md-9">
            <input type="text" class="form-control" id="txtruc" name="txtruc" required maxlength="45"></div>
            <input type="hidden" class="form-control" id="id" name="id">
        </div>
        <div class="row form-group">
              <div class="col col-md-3">
              <label for="direccion" class="form-control-label">Nombre Entidad:</label></div>
              <div class="col-12 col-md-9">
              <input type="text" class="form-control" id="txtnombre" name="txtnombre" required maxlength="45"></div>
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