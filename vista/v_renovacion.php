<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Page-->
    <title>Renovaciones</title>
    <?php include 'complementos/head_pag.php';?>   
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <?php include 'complementos/header.php';?>            
        </header>
        <!-- END HEADER MOBILE-->
        <!-- MENU SIDEBAR-->
        <?php include 'complementos/menu.php';?>       
        <!-- END MENU SIDEBAR-->
        <!-- PAGE CONTAINER-->
        <div class="page-container" id="contenido">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <?php include 'complementos/header_desktop.php';?>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <h3 class="title-5 m-b-35">Renovaciones Cartas Fianzas</h3>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card ">
                                    <div class="card-header">
                                        <strong class="card-title">Próximas a vencer</strong>
                                    </div>
                                    <div class="row">
                                    <div class="card-body col-lg-6">
                                        <div class="alert alert-warning" role="alert">
                                            <h4 class="alert-heading"> Próximas a vencer (20 días)</h4>
                                            <hr>
                                            <p>
                                                <?php
                                                foreach ($this->modelo->Consulta_2() as $registro) {
                                                 ?>
                                               <div class="row">
                                                    <div class="col-lg-7" align="right">
                                                        <p>Número de Carta Fianza: </p>
                                                        <p>Fecha de vencimiento: </p>
                                                        <p>Monto Total: </p>
                                                        <p>Entidad: </p>
                                                        <p>Tipo: </p>
                                                        <p>Empresa/Consorcio: </p>
                                                    </div>
                                                    <div class="col-lg-5">

                                                        <?php
                                                            echo " " .$registro["cod_carta_fianza"]. "</p> ";
                                                            $variable1 = $registro["nombre_empresa"];
                                                            echo " ".date('d/m/Y', strtotime($registro["fecha_venc"])). "</p>";
                                                            echo " " .number_format($registro["total_fianza"], 2, ".", ","). "</p> ";
                                                            echo " " .$registro["nombre_entidad"]. "</p> ";
                                                            echo " " .$registro["descripcion_tipo"]. "</p> ";?>
                                                            <a href="../controlador/c_cf_pendiente.php?variable1=<?php echo $variable1?>">
                                                            <?php 
                                                            echo " ".$registro["nombre_empresa"]. "</a> </p>";
                                                echo"</div>";
                                                echo"</div>";                                                                                              
                                                echo "<hr>";
                                                }
                                                ?> 
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-body col-lg-6">
                                        <div class="alert alert-danger" role="alert">
                                            <h4 class="alert-heading"> Próximas a vencer (15 días)</h4>
                                            <hr>
                                            <p>
                                                <?php
                                                foreach ($this->modelo1->Consulta_3() as $registro) {
                                                 ?>
                                                <div class="row">
                                                    <div class="col-lg-7" align="right">
                                                        <p>Número de Carta Fianza: </p>
                                                        <p>Fecha de vencimiento: </p>
                                                        <p>Monto Total: </p>
                                                        <p>Entidad: </p>
                                                        <p>Tipo: </p>
                                                        <p>Empresa/Consorcio: </p>
                                                    </div>
                                                    <div class="col-lg-5">

                                                        <?php
                                                            echo " " .$registro["cod_carta_fianza"]. "</p> ";
                                                            $variable1 = $registro["nombre_empresa"];
                                                            echo " ".date('d/m/Y', strtotime($registro["fecha_venc"])). "</p>";
                                                            echo " " .number_format($registro["total_fianza"], 2, ".", ","). "</p> ";
                                                            echo " " .$registro["nombre_entidad"]. "</p> ";
                                                            echo " " .$registro["descripcion_tipo"]. "</p> ";?>
                                                            <a href="../controlador/c_cf_pendiente.php?variable1=<?php echo $variable1?>">
                                                            <?php 
                                                            echo " ".$registro["nombre_empresa"]. "</a> </p>";
                                                echo"</div>";
                                                echo"</div>";  
                                                echo "<hr>";
                                            	}
                                                ?> 
                                            </p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php include 'complementos/footer.php';?>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include 'complementos/scripts.php';?>   
</body>
</html>
<!-- end document-->
