<!-- MODAL AGREGAR REGISTRO-->
<form role="form" id="newModalForm" method="post" action="../controlador/c_sede.php">
<div class="modal fade" id="agregarForm" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <!-- modal medium -->
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
                            
    <!-- MODAL HEADER-->
    <div class="modal-header">
        <h5 class="modal-title" id="mediumModalLabel">Agregar Sede</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    
    <!-- MODAL BODY-->
    <div class="modal-body"> 
        <div class="card-body card-block">
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class="form-control-label">Descripción </label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="txtdescripcion" name="txtdescripcion" placeholder="" class="form-control" require>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">Dirección</label>
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
                <input type="text" id="txttelefono" name="txttelefono" placeholder="" class="form-control" require>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="select" class=" form-control-label">Departamento</label>
            </div>
            <div class="col-12 col-md-9">
                <select id="lstdepartamento" name="lstdepartamento" class="form-control">
                    <option value="" selected="selected">-----</option>
                    <option value="Amazonas">Amazonas </option>
                    <option value="Ancash">Ancash </option>
                    <option value="Apurimac">Apurimac </option>
                    <option value="Arequipa">Arequipa </option>
                    <option value="Ayacucho">Ayacucho </option>
                    <option value="Cajamarca">Cajamarca </option>
                    <option value="Callao">Callao </option>
                    <option value="Cusco">Cusco </option>
                    <option value="Huancavelica">Huancavelica </option>
                    <option value="Ica">Ica </option>
                    <option value="Junin">Junín </option>
                    <option value="La Libertad ">La Libertad </option>
                    <option value="Lambayeque">Lambayeque </option>
                    <option value="Lima">Lima </option>
                    <option value="Loreto">Loreto </option>
                    <option value="Madre De Dios">Madre De Dios </option>
                    <option value="Moquegua">Moquegua </option>
                    <option value="Pasco">Pasco </option>
                    <option value="Piura">Piura </option>
                    <option value="Puno">Puno </option>
                    <option value="San Martin">San Martin </option>
                    <option value="Tacna">Tacna </option>
                    <option value="Tumbes">Tumbes </option>
                    <option value="Ucayali">Ucayali </option>
                </select>
            </div>
        </div>

    </div>

    <!--MODAL FOOTER -->
    <div class="modal-footer">
        <button type="reset" class="btn btn-danger" data-dismiss="modal" >Cancelar</button> 
        <button type="submit" name= "aceptar" id="aceptar" class="btn btn-primary"> Aceptar  </button> 
    </div>
     
    </div>       
    <!-- END MODAL CONTENT -->
    </div>
    <!-- END modal medium -->
    </div>
<!-- end modal medium -->
</div>
</form>
