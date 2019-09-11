<!-- MODAL AGREGAR REGISTRO-->
<form role="form" id="newModalForm" method="post" action="../controlador/c_cf_pendiente.php" enctype="multipart/form-data">
<div class="modal fade" id="agregarNuevo" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <!-- modal medium -->
    <div class="modal-dialog" style="max-width: 1200px;" role="document">
    <div class="modal-content">
                            
    <!-- MODAL HEADER-->
    <div class="modal-header">
        <h5 class="modal-title" id="mediumModalLabel">Agregar Carta Fianza</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    
    <!-- MODAL BODY-->
    <div class="modal-body"> 
        <div class="card-body card-block">
        
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">Nombre Empresa/Consorcio</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="txtempresa" name="txtempresa" placeholder="" class="form-control" require>
            </div>
        </div>

        <div class="row">
            <div class="col col-md-6">
                <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Entidad</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="lstentidad" id="lstentidad" class="form-control" placeholder=" Seleccione entidad" >
                        <option value="">Seleccione una opción</option>
                        <?php
                        foreach ($this->modelo1->Lista_Entidad() as $consulta){           
                        ?>
                        <option value="<?php echo $consulta['id_entidad']?>"><?php echo $consulta['nombre_entidad']?>
                        </option>
                        <?php } ?>
                    </select>
                </div>
                </div>
            </div>
            <div class="col col-md-6">
                <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Número de Carta</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="txtnumero" name="txtnumero" placeholder="" class="form-control" require>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-md-6">
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Tipo Carta Fianza</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="lsttipo" id="lsttipo" class="form-control" ><!--onchange='changeText(this.value)'-->
                            <option value="">Seleccione una opción</option>
                            <?php
                            foreach ($this->modelo2->Lista_Tipo() as $consulta){           
                            ?>
                            <option value="<?php echo $consulta['id_tipof']?>"><?php echo $consulta['descripcion_tipo']?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Oficina</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="lstoficina" id="lstoficina" class="form-control" >
                            <option value="">Seleccione una opción</option>
                            <?php
                            foreach ($this->modelo3->Lista_Oficina() as $consulta){           
                            ?>
                            <option value="<?php echo $consulta['id_oficina']?>"><?php echo $consulta['descripcion']?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>       
        <div class="row">
           <div class="col col-md-6">
                <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Monto Total Fianza</label>
                </div>
                <div class="col-12 col-md-6">
                    <input type="number" id="txtmonto" name="txtmonto" placeholder="" class="form-control" require>
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
            <div class="col-md-4">
                <div class="row form-group">
                <div class="col col-md-4">
                    <label for="text-input" class=" form-control-label">Fecha emisión</label>
                </div>
                <div class="col-12 col-md-7">
                    <input type="date" id="emision" name="emision" placeholder="" class="form-control" require>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row form-group">
                <div class="col col-md-4">
                    <label for="text-input" class=" form-control-label">Vigencia</label>
                </div>
                <div class="col-12 col-md-7">
                    <input type="number" id="txtvigencia" name="txtvigencia" placeholder="" class="form-control" require>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row form-group">
                <div class="col col-md-4">
                    <label for="text-input" class=" form-control-label">Fecha vencimiento</label>
                </div>
                <div class="col-12 col-md-7">
                    <input type="date" id="venc" name="venc" placeholder="" class="form-control" require>
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
                <div class="col-12 col-md-9">
                    <input type="file" name="uploadedFile" id="uploadedFile" require></input>
                    <!--<input type="submit" name="uploadBtn" value="Upload"/>-->
                </div>
                </div>
            </div>

        </div>
        <hr>
        <label for="text-input" class=" form-control-label">Datos de la Empresa / Consorcio</label>
        <div class="row">
            <div class="col-md-6">
                <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Email</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="email" id="txtemail" name="txtemail" placeholder="" class="form-control" require>
                </div>
                </div>
            </div>  
             <div class="col-md-6">
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Teléfono/Cel. Empresa</label>
                    </div>
                    <div class="col-12 col-md-4">
                        <input type="text" id="txttelef" name="txttelef" placeholder="" class="form-control" require>
                    </div>
                </div>
            </div>
        </div>
        </div>       
    </div>

    <!--MODAL FOOTER -->
    <div class="modal-footer">
        <button type="reset" class="btn btn-danger" data-dismiss="modal" >Cancelar</button> 
        <button type="submit" name= "aceptar" id="aceptar" class="btn btn-primary"> Aceptar </button> 
    </div>
     
    </div>       
    <!-- END MODAL CONTENT -->
    </div>
    <!-- END modal medium -->
    
<!-- end modal medium -->
</div>
</form>
