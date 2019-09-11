<!-- MODAL AGREGAR REGISTRO-->
<form role="form" id="newModalForm" method="post" action="../controlador/c_empresa_operaciones_detalles.php">
<div class="modal fade" id="agregarFormEmpresa" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <!-- modal medium -->
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
                            
    <!-- MODAL HEADER-->
    <div class="modal-header">
        <h5 class="modal-title" id="mediumModalLabel">Agregar Empresa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    
    <!-- MODAL BODY-->
    <div class="modal-body"> 
        <div class="card-body card-block">
        <span class="badge badge-light" >
            <h4><label class=" form-control-label" >EMPRESA</label></h4>
            <input type="text" id="id" name="id" placeholder="" class="form-control">
        </span>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class="form-control-label">RUC Empresa </label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="txtruc" name="txtruc" placeholder="" class="form-control" require>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class="form-control-label">Nombre Empresa</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="txtempresa" name="txtempresa" placeholder="" class="form-control" require>
            </div>
        </div>   
        <!--SECCION CONTACTO-->
        <span class="badge badge-light" >
            <h4><label class=" form-control-label" >CONTACTO</label></h4>
        </span>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">DNI</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="txtdni" name="txtdni" placeholder="" class="form-control" require>
            </div>
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
                <input type="email" id="txtemail" name="txtemail" placeholder="" class="form-control" require>
            </div>
        </div>
         <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">Direccion</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="txtdireccion" name="txtdireccion" placeholder="" class="form-control" require>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">Teléfono</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="txttelef" name="txttelef" placeholder="" class="form-control" require>
            </div>
        </div>

    </div>

    <!--MODAL FOOTER -->
    <div class="modal-footer">
        <button type="reset" class="btn btn-danger" data-dismiss="modal" >Cancelar</button> 
        <button type="submit" name= "asociar" id="asociar" class="btn btn-primary"> Aceptar </button> 
    </div>
     
    </div>       
    <!-- END MODAL CONTENT -->
    </div>
    <!-- END modal medium -->
    </div>
<!-- end modal medium -->
</div>
</form>
