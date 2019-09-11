<form id="actualidarDatos" action="../controlador/c_empleado.php" method="post">
<div class="modal fade" id="dataUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <!-- MODAL HEADER-->
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Empleadosss</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!--MODAL BODY -->
      <div class="modal-body">
        <div id="datos_ajax"></div>
          <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class="form-control-label">DNI </label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="txtdni" name="txtdni" placeholder="" class="form-control" require>
            </div>
            <input type="hidden" class="form-control" id="id" name="id">
          </div>
          <div class="row form-group">
              <div class="col col-md-3">
                  <label for="text-input" class=" form-control-label">Apellidos</label>
              </div>
              <div class="col-12 col-md-9">
                  <input type="text" id="txtapellido" name="txtapellido" placeholder="" class="form-control" require>
              </div>
          </div>
          <div class="row form-group">
              <div class="col col-md-3">
                  <label for="text-input" class=" form-control-label">Nombres</label>
              </div>
              <div class="col-12 col-md-9">
                  <input type="text" id="txtnombre" name="txtnombre" placeholder="" class="form-control" require>
              </div>
          </div>
          <div class="row form-group">
              <div class="col col-md-3">
                  <label for="text-input" class=" form-control-label">Email</label>
              </div>
              <div class="col-12 col-md-9">
                  <input type="text" id="txtemail" name="txtemail" placeholder="" class="form-control" require>
              </div>
          </div>
          <div class="row form-group">
              <div class="col col-md-3">
                  <label for="text-input" class=" form-control-label">Teléfono</label>
              </div>
              <div class="col-12 col-md-4">
                  <input type="text" id="txttelefono" name="txttelefono" placeholder="" class="form-control" require>
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