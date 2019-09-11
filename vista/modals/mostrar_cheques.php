<!-- MODAL AGREGAR REGISTRO-->
<div class="modal fade" id="mostrarForm" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <!-- modal medium -->
    <div class="modal-dialog" style="max-width: 1200px;" role="document">
    <div class="modal-content">
                            
    <!-- MODAL HEADER-->
    <div class="modal-header">
        <h5 class="modal-title" id="mediumModalLabel">Listado de Cheques</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    
    <!-- MODAL BODY-->
    <div class="modal-body"> 
        <div class="row">
                <?php
                    require_once("../modelo/m_cheque.php");
                    $modelo=new M_Cheque();
                    $modelo1=new M_Cheque();
                    if (empty($modelo->Consulta()))
                    {
                        echo " No se encontraron resultados.";
                    }
                    foreach ($modelo1->Consulta() as $registro) {?>

                    <div class="card-body col-lg-6"  style="padding-bottom: 0rem">
                    <div class="alert alert-success" role="alert">
                    <div class="row">
                        <div class="col-lg-7" align="right">
                        Número de Cheque: </br>
                        Empresa: </br>
                        Monto: </br>
                        Banco: </br>
                        Fecha de giro: </br>
                        Fecha a cobrar: </br>
                        </div>
                        <div class="col-lg-5">
                        <?php
                            echo " " .$registro["numero_cheque"]. "</br> ";
                            echo " " .$registro["nombre_empresa"]. "</br> ";
                            echo " " .$registro["monto"]. "</br> ";
                            echo " " .$registro["banco"]. "</br> ";
                            echo " ".date('d/m/Y', strtotime($registro["fecha_giro"])). "</br>";
                            echo " ".date('d/m/Y', strtotime($registro["fecha_cobrar"])). "</br>";
                            echo "<td>"?>
                        </div>
                        <div class="col-lg-">
                        <form role="form" id="CambiarEstado" method="post" action="../controlador/c_cheque.php">  
                        <input type="hidden" name="id" id="id" value="<?php echo $registro['id_cheque']?>">
                        <button type="submit" class="btn btn-primary item" title="Leído" id="estado_cheque" name="estado_cheque"><i class='zmdi zmdi-check' ></i> </button>
                        </form>
                        </div>
                    </div>
                    </div>
                    </div>
                    <?php
                    } ?>
        </div>
    </div>   
    </div>       
    <!-- END MODAL CONTENT -->
    </div>
    <!-- END modal medium -->
<!-- end modal medium -->
</div>
