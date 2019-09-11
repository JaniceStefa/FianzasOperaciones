<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title Page-->
    <title>Oficinas</title>
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
                                <h3 class="title-5 m-b-35">Tabla Oficinas</h3>
                                <!--BOTONES DE CONTROL-->
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">   
                                    </div>
                                    <div class="table-data__tool-right">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="au-btn au-btn-icon au-btn--green au-btn--small " data-toggle="modal" data-target="#agregarForm">
                                            <i class="zmdi zmdi-plus"></i>Agregar</button>
                                        
                                    </div>
                                </div>

                                <!-- DATA TABLE -->
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2 table-striped">
                                        <thead class="table-earning">
                                            <tr>
                                                <th>Oficina</th>
                                                <th>Dirección</th>
                                                <th>Departamento</th>
                                                <th>Teléf.</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="spacer"></tr>
                                            <?php

                                            foreach($this->modelo->Mostrar_Sede() as $registro){
                                                echo "<tr class='tr-shadow'>";
                                                echo "<td>".$registro["descripcion"]. "</td>";
                                                echo "<td>".$registro["direccion"]. "</td>";
                                                echo "<td>".$registro["departamento"]. "</td>";
                                                echo "<td>".$registro["telefono"]. "</td>";
                                                echo "<td>"
                                                ?>
                                                <div class="table-data-feature">
                                                <button type="button" class="btn btn-info item" data-toggle="modal" data-target="#dataUpdate" title="Modificar" data-id="<?php echo $registro['id_oficina']?>" data-descripcion="<?php echo $registro['descripcion']?>" data-direccion="<?php echo $registro['direccion']?>" data-departamento="<?php echo $registro['nombre']?>" data-provincia="<?php echo $registro['provincia']?>" data-phone="<?php echo $registro['telefono']?>"><i class='zmdi zmdi-edit'></i> </button>
                                                <button type="button" class="btn btn-danger item" data-toggle="modal" data-target="#dataDelete" title="Eliminar" data-id="<?php echo $registro['id_oficina']?>"  ><i class='zmdi zmdi-delete'></i> </button>
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

            <?php include("modals/agregar_sede.php");?>
            <?php include("modals/modif_sede.php");?>
            <?php include("modals/eliminar_sede.php");?>

    </div>
    </div>
    </div>
<?php include 'complementos/scripts.php';?>  

<!--VALIDACION DE CAMPOS -->
<script >
$(function() {
  $("#newModalForm").validate({
    rules: {
      txtdescripcion: {
        required: true,
      },
      txtdireccion: {
        required: true,
      },
      txttelefono: {
        required: true,
      },
    },
    messages: {
      txtdescripcion: {
        required: "Ingrese datos válidos",
      },
      txtdireccion: {
        required: "Ingrese datos válidos",       
      },
      txttelefono: {
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
<script src="../vista/sede.js"></script>

</body>
</html>
<!-- end document-->
