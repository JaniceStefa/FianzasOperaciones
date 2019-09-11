<form id="actualidarDatos" action="../controlador/c_sede.php" method="post">
<div class="modal fade" id="dataUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <!-- MODAL HEADER-->
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Sede</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!--MODAL BODY -->
      <div class="modal-body">
        <div id="datos_ajax"></div>
          <div class="row form-group">
            <div class="col col-md-3">
            <label for="descripcion" class="form-control-label">Descripción:</label></div>
            <div class="col-12 col-md-9">
            <input type="text" class="form-control" id="descripcion" name="txtdescripcion" required maxlength="45"></div>
            <input type="hidden" class="form-control" id="id" name="id">
          </div>
        <div class="row form-group">
              <div class="col col-md-3">
              <label for="direccion" class="form-control-label">Dirección:</label></div>
              <div class="col-12 col-md-9">
              <input type="text" class="form-control" id="direccion" name="txtdireccion" required maxlength="45"></div>
            </div>
        <div class="row form-group">
              <div class="col col-md-3">
              <label for="telefono" class="form-control-label">Teléfono:</label></div>
              <div class="col-12 col-md-9">
              <input type="text" class="form-control" id="phone" name="txttelefono" required maxlength="10"></div>
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