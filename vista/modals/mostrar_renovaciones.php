<!-- MODAL AGREGAR REGISTRO-->
<div class="modal fade" id="agregarForm" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <!-- modal medium -->
    <div class="modal-dialog" style="max-width: 1200px;" role="document">
    <div class="modal-content">
                            
    <!-- MODAL HEADER-->
    <div class="modal-header">
        <h5 class="modal-title" id="mediumModalLabel">RENOVACIONES PRÓXIMAS A VENCER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    
    <!-- MODAL BODY-->
    <div class="modal-body"> 
        <div class="row">
        <div class="card-body col-lg-6">
            <div class="alert alert-warning" role="alert">
                <h4 class="alert-heading"> Próximas a vencer 20 días</h4>
                <hr>
                <p>
                <?php
                    require_once("../modelo/m_renovacion.php");
                    $modelo=new M_Renovacion();
                    foreach ($modelo->Consulta_2() as $registro) {?>
                    <div class="row">
                        <div class="col-lg-7" align="right">
                        Número de Carta Fianza: </br>
                        Fecha de vencimiento: </br>
                        Monto Total: </br>
                        Entidad: </br>
                        Tipo: </br>
                        Empresa/Consorcio: </br>
                        </div>
                        <div class="col-lg-5">
                        <?php
                            echo " " .$registro["cod_carta_fianza"]. "</br> ";
                            $variable1 = $registro["nombre_empresa"];
                            echo " ".date('d/m/Y', strtotime($registro["fecha_venc"])). "</br>";
                            echo " " .number_format($registro["total_fianza"], 2, ".", ","). "</br> ";
                            echo " " .$registro["nombre_entidad"]. "</br> ";
                            echo " " .$registro["descripcion_tipo"]. "</br> ";?>
                            <a href="../controlador/c_cf_pendiente.php?variable1=<?php echo $variable1?>">
                            <?php echo " ".$registro["nombre_empresa"]. "</a> </br>";
                        echo"</div>";
                    echo"</div>";                                                                                              
                    echo "<hr>";
                } ?> 
                </p>
            </div>
        </div>
        <div class="card-body col-lg-6">
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading"> Próximas a vencer 15 días</h4>
                <hr>
                <p>
                <?php
                    require_once("../modelo/m_renovacion.php");
                    $modelo1=new M_Renovacion();
                    foreach ($modelo1->Consulta_3() as $registro) {?>
                    <div class="row">
                        <div class="col-lg-7" align="right">
                        Número de Carta Fianza: </br>
                        Fecha de vencimiento: </br>
                        Monto Total: </br>
                        Entidad: </br>
                        Empresa/Consorcio: </br>
                        </div>
                        <div class="col-lg-5">
                        <?php
                            echo " " .$registro["cod_carta_fianza"]. "</br> ";
                            $variable1 = $registro["nombre_empresa"];
                            echo " ".date('d/m/Y', strtotime($registro["fecha_venc"])). "</br>";
                            echo " " .number_format($registro["total_fianza"], 2, ".", ","). "</br> ";
                            echo " " .$registro["nombre_entidad"]. "</br> ";
                            echo " " .$registro["descripcion_tipo"]. "</br> ";?>
                            <a href="../controlador/c_cf_pendiente.php?variable1=<?php echo $variable1?>">
                            <?php echo " ".$registro["nombre_empresa"]. "</a> </br>";
                        echo"</div>";
                    echo"</div>";                                                                                              
                    echo "<hr>";
                } ?> 
                </p>
            </div>
        </div>
        </div>
    </div>   
    </div>       
    <!-- END MODAL CONTENT -->
    </div>
    <!-- END modal medium -->
<!-- end modal medium -->
</div>
