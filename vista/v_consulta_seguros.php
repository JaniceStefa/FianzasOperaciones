<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Page-->
    <title>Tablas</title>
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
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="title-5 m-b-35">SEGUROS</h3>
                                <!--BOTONES DE CONTROL-->
                                <div class="table-data__tool">
                                    <!--BUSQUEDA EN BASE DE DATOS-->
                                    <div class="table-data__tool-left">   
                                        <form class="form-header" action="" method="POST">
                                        <input class="au-input au-input--xl" type="text" name="search" placeholder="Buscar n° de seguro" />
                                        <button class="au-btn--submit" type="submit">
                                            <i class="zmdi zmdi-search"></i>
                                            <!-- INCLUIR STORE PROCEDURE DE BUSQUEDA DE DATOS-->
                                        </button>
                                        </form>
                                    </div>

                                    <!--EXPORTAR DOCUMENTOS-->
                                    <div class="table-data__tool-right">                                    
                                        <!-- Button trigger modal -->
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#mediumModal">
                                            <i class="zmdi zmdi-plus"></i>Agregar</button>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" name="type">
                                                <option selected="selected">Exportar</option>
                                                <option value="">Excel</option>
                                                <option value="">PDF</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- DATA TABLE -->
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead class="table-earning">
                                            <tr>
                                                <th>Empresa</th>
                                                <th>Código Seguro</th>
                                                <th>Seguro</th>
                                                <th>Entidad</th>
                                                <th>Total Seguro</th>
                                                <th>Fecha Emisión</th>
                                                <th>Vigencia</th>
                                                <th>Fecha Vencimiento</th>
                                                <th>Banco</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="spacer"></tr>
                                            <?php
                                            foreach($this->modelo->Mostrar_Presupuesto() as $registro){
                                                echo "<tr class='tr-shadow'><td>".$registro["cod_presupuesto"]. "</td>";
                                                echo "<td>".$registro["fecha_entrega"]. "</td>";
                                                echo "<td>".$registro["fecha_entrega"]. "</td>";
                                                echo "<td>".$registro["fecha_entrega"]. "</td>";
                                                echo "<td>".$registro["fecha_entrega"]. "</td>";
                                                echo "<td>".$registro["fecha_entrega"]. "</td>";
                                                echo "<td>".$registro["fecha_pago_parcial"]. "</td>";
                                                echo "<td>".$registro["precio_parcial"]. "</td>";
                                                echo "<td>".$registro["fecha_pago_parcial"]. "</td>";                                               
                                                echo "<td>
                                                    <div class='table-data-feature'>
                                                        <button class='item' data-toggle='tooltip' data-placement='top' title='Más'>
                                                            <i class='zmdi zmdi-plus'></i>
                                                        </button></div>";
                                             } ?>                                          
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        <div class="row">
                            <?php include 'complementos/footer.php';?>    
                        </div>
                    </div>
                </div>
            </div>
            <<!-- MODAL-->
            <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <?php include 'complementos/modal_form_seguros.php';?>    
            </div>
        </div>
    </div>
<?php include 'complementos/scripts.php';?>   
</body>
</html>
<!-- end document-->
