<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Page-->
    <title>Empleados</title>
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
                                <h3 class="title-5 m-b-35">Tabla Empleados</h3>
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
                                                <th>DNI</th>
                                                <th>NombreS</th>
                                                <th>Apellidos</th>
                                                <th>Email</th>
                                                <th>Teléf.</th>
                                                <!--<th>Cargo</th>-->
                                                <th>Oficina</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="spacer"></tr>
                                            <?php
                                            foreach($this->modelo->Mostrar_Empleado() as $registro){
                                                echo "<tr class='tr-shadow'><td>".$registro["dni"]. "</td>";
                                                echo "<td>".$registro["apellido"]. "</td>";
                                                echo "<td>".$registro["nombre"]. "</td>";
                                                echo "<td> <span class='block-email'>".$registro["email"]. "</span></td>";
                                                echo "<td>".$registro["telefono"]. "</td>";
                                                echo "<td>".$registro["descripcion"]. "</td>";
                                                echo "<td>";
                                                ?>
                                                <div class="table-data-feature">
                                                <button type="button" class="btn btn-info item" data-toggle="modal" data-target="#dataUpdate" title="Modificar" data-id="<?php echo $registro['id_empleado']?>" data-dni="<?php echo $registro['dni']?>"  data-apellido="<?php echo $registro['apellido']?>" data-nombre="<?php echo $registro['nombre']?>" data-email="<?php echo $registro['email']?>" data-telefono="<?php echo $registro['telefono']?>" data-oficina="<?php echo $registro['id_oficina']?>"><i class='zmdi zmdi-edit'></i> </button>
                                                <button type="button" class="btn btn-danger item" data-toggle="modal" data-target="#dataDelete" title="Eliminar" data-id="<?php echo $registro['id_empleado']?>"  ><i class='zmdi zmdi-delete'></i> </button>
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
            <?php include("modals/agregar_empleado.php");?>
            <?php include("modals/modif_empleado.php");?>
            <?php include("modals/eliminar_empleado.php");?>    
            </div>
        </div>
    </div>
<?php include 'complementos/scripts.php';?>   
<!--VALIDACION DE CAMPOS -->
<script >
$(function() {
  $("#newModalForm").validate({
    rules: {
      txtdni: {
        required: true,
        maxlength: 8,
      },
      txtapellido: {
        required: true,
      },
      txtnombre: {
        required: true,
      },
      txtemail: {
        required: true,
      },
      txttelefono: {
        required: true,
      },
      lstoficina: {
        required: true,
      },
    },
    messages: {
      txtdni: {
        required: "Ingrese datos válidos",
        maxlength: "Ingrese un número de 8 dígitos",
      },
      txtapellido: {
        required: "Ingrese datos válidos",       
      },
      txtnombre: {
        required: "Ingrese datos válidos",
      },
      txtemail: {
        required: "Ingrese datos válidos",
        email: "Ingrese un correo electrónico válido",
      },
      txttelefono: {
        required: "Ingrese datos válidos",       
      },
      lstoficina: {
        required: "Seleccione una opción válida",
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
<script src="../vista/empleados.js"></script>
</body>
</html>
<!-- end document-->
