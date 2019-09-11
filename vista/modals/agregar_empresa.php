<!-- MODAL AGREGAR REGISTRO-->
<form role="form" id="newModalForm" method="post" action="../controlador/c_empresa_operaciones.php">
<div class="modal fade" id="agregarForm" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <!-- modal medium -->
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
                            
    <!-- MODAL HEADER-->
    <div class="modal-header">
        <h5 class="modal-title" id="mediumModalLabel">Agregar Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    
    <!-- MODAL BODY-->
    <div class="modal-body"> 
        <div class="card-body card-block">
        <span class="badge badge-light" >
            <h4><label class=" form-control-label" >EMPRESA / CONSORCIO</label></h4>
        </span>
        <form action="#" method="post" id="form">
        <div class="row form-group" align="center">    
            <div class="col-12 col-md-12">
                <input type="radio" name="first" value="empresa" checked > EMPRESA
                <input type="radio" name="first" value="consorcio"> CONSORCIO
            </div>
        </div>
        
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class="second form-control-label">RUC Empresa </label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="txtruc" name="txtruc" placeholder="" class="second form-control" require>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".wrap").css('opacity', '.2'); // This line is used to lightly hide label for disable
                
                $("form input:radio").change(function() {
                if ($(this).val() == "consorcio") {
                $(".second").attr('checked', false);
                $(".second").attr('disabled', true);
                $(".wrap").css('opacity', '.2');
                }
                // Else Enable radio buttons.
                else {
                $(".second").attr('disabled', false);
                $(".wrap").css('opacity', '1');
                }
                });
                });
        </script>
        </form>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class="form-control-label">Razón Social</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="txtempresa" name="txtempresa" placeholder="" class="form-control" require>
            </div>
        </div>   
        <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Servicio</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="lstservicio" id="lstservicio" class="form-control" placeholder=" Seleccione entidad" >
                        <option value="">Seleccione una opción</option>
                        <option value="1">Línea de Crédito</option>
                        <option value="2">Carta Fianza</option>
                    </select>
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

         <span class="badge badge-light" >
            <h4><label class=" form-control-label" >OFICINA</label></h4>
        </span>

        <div class="row form-group">
            <div class="col-12 col-md-6">
                <select name="lstoficina" id="lstoficina" class="form-control" placeholder=" Seleccione entidad" >
                    <option value="">Seleccione una opción</option>
                    <?php
                    foreach ($this->modelo1->Lista_Oficina() as $consulta){           
                        if ($_SESSION["usuario"]["usuario"] == "userTambo"){
                            if ($consulta['descripcion'] == 'El Tambo'){ ?>
                                <option value="<?php echo $consulta['id_oficina']?>"><?php echo $consulta['descripcion']?></option>
                            <?php }
                        }
                        else{
                            if ($_SESSION["usuario"]["usuario"] == "userAyacucho"){
                                if ($consulta['descripcion'] == 'Ayacucho'){ ?>
                                    <option value="<?php echo $consulta['id_oficina']?>"><?php echo $consulta['descripcion']?></option>
                                <?php }
                            }
                            else{?>
                                <option value="<?php echo $consulta['id_oficina']?>"><?php echo $consulta['descripcion']?></option>
                            <?php }
                        }
                    } ?>
                </select>
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
    </div>
<!-- end modal medium -->
</div>
</form>
