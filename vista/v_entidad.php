<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Page-->
    <title>Entidades</title>
    <?php include 'complementos/head_pag.php';?>   
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <?php include 'complementos/header.php';?>            
        </header>
        <!-- END HEADER MOBILE-->
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
                                <h3 class="title-5 m-b-35">Tabla Entidades</h3>
                                <!--BOTONES DE CONTROL-->
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">   
                                    </div>
                                    <div class="table-data__tool-right">
                                        <!-- Button trigger modal -->
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#agregarForm">
                                            <i class="zmdi zmdi-plus"></i>Agregar</button>                                     
                                    </div>
                                </div>
                                <!-- DATA TABLE -->
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2 table-striped">
                                        <thead class="table-earning">
                                            <tr>
                                                <th>RUC Entidad</th>
                                                <th>Nombre Entidad</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="spacer"></tr>
                                            <?php
                                            foreach($this->modelo->Mostrar_Entidad() as $registro){
                                                echo "<tr class='tr-shadow'><td>".$registro["ruc_entidad"]. "</td>";
                                                echo "<td>".$registro["nombre_entidad"]. "</td>";
                                                echo "<td>";
                                                ?>
                                                <div class="table-data-feature">
                                                <button type="button" class="btn btn-info item" data-toggle="modal" data-target="#dataUpdate" title="Modificar" data-id="<?php echo $registro['id_entidad']?>" data-ruc="<?php echo $registro['ruc_entidad']?>"  data-nombre="<?php echo $registro['nombre_entidad']?>"><i class='zmdi zmdi-edit'></i> </button>
                                                <button type="button" class="btn btn-danger item" data-toggle="modal" data-target="#dataDelete" title="Eliminar" data-id="<?php echo $registro['id_entidad']?>"  ><i class='zmdi zmdi-delete'></i> </button>
                                                </div>
                                                </td>
                                                <?php
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
            <?php include("modals/agregar_entidad.php");?>
            <?php include("modals/modif_entidad.php");?>
            <?php include("modals/eliminar_entidad.php");?>   
            </div>
        </div>
    </div>
<?php include 'complementos/scripts.php';?>   
<script src="../vista/entidad.js"></script>
<script type="text/javascript">
    $(function() {
        $("#newModalForm").validate({
        rules: {
            txtruc: {
            required: true,
            },
            txtnombre: {
            required: true,
            },
        },
        messages: {
            txtruc: {
            required: "Ingrese datos válidos",
            },
            txtnombre: {
            required: "Ingrese datos válidos",
            },
        }
        });
    });
</script>
<style type="text/css">
    label.error{
        color:red;
    }
</style>
</body>
</html>
<!-- end document-->
