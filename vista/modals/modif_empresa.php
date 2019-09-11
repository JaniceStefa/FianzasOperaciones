<form id="actualidarDatos" action="../controlador/c_empresa_operaciones.php" method="post">
<div class="modal fade" id="dataUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <!-- MODAL HEADER-->
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Empresa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!--MODAL BODY -->
      <div class="modal-body">
        <div id="datos_ajax"></div>
          <div class="row form-group">
            <div class="col col-md-3">
            <label for="" class="form-control-label">RUC:</label></div>
            <div class="col-12 col-md-9">
            <input type="text" class="form-control" id="ruc" name="txtruc" required maxlength="45" ></div>
            <input type="hidden" class="form-control" id="id" name="id">
          </div>
        <div class="row form-group">
              <div class="col col-md-3">
              <label for="" class="form-control-label">Razón Social:</label></div>
              <div class="col-12 col-md-9">
              <input type="text" class="form-control" id="empresa" name="txtempresa" required maxlength="45"></div>
            </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">DNI</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="dni" name="txtdni" placeholder="" class="form-control" require>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">Apellidos</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="apellido" name="txtapellido" placeholder="" class="form-control" require>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">Nombres</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="nombre" name="txtnombre" placeholder="" class="form-control" require>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">Email</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="email" id="email" name="txtemail" placeholder="" class="form-control" require>
            </div>
        </div>
         <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">Direccion</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="direccion" name="txtdireccion" placeholder="" class="form-control" require>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">Teléfono</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="phone" name="txttelef" placeholder="" class="form-control" require>
            </div>
        </div>     
      </div>

      <!--modal FOOTER -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" name="update" id="update" >Actualizar datos</button>
      </div>
    </div>
  </div>
</div>
</form>