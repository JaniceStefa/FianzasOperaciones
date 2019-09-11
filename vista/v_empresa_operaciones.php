<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Page-->
    <title>Empresas / Consorcios</title>
    <?php include 'complementos/head_pag.php';?>   

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Datatable CSS -->
    <link href='../assets/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>

    <!-- jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Datatable JS -->
    <script src="../assets/js/jquery.dataTables.min.js"></script>

</head>

<body>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <?php include 'complementos/header.php';?>            
        </header>
        <!-- END HEADER MOBILE-->
        <!-- MENU SIDEBAR-->
        <?php include 'complementos/menu_operaciones.php';?>       
        <!-- END MENU SIDEBAR-->
        <!-- PAGE CONTAINER-->
        <div class="page-container" id="contenido">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <?php include 'complementos/header_desktop_oper.php';?>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="title-5 m-b-35">Empresas/Consorcios</h3>
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
                                </div>

                                <!-- DATA TABLE -->
                                <div class="table-responsive table-responsive-data3">
                                    <table id="mytable" class="table table-data2 table-striped" >
                                        <thead class="table-earning">
                                            <tr>
                                                <th>Oficina</th>
                                                <th>Razón Social</th>
                                                <th>RUC</th>
                                                <th>Representante Legal / Contacto </th>
                                                <th>Teléf.</th>
                                                <th>Dirección</th>
                                                <th>Email</th>
                                                <th>Servicio</th>
                                                <th>Estado</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (isset($_SESSION["usuario"])) {                                              	
                                            foreach($this->modelo->Mostrar_Institucion() as $registro){
                                                if ($_SESSION["usuario"]["privilegio"] == 4) //user
                                                {
                                                	if ($registro["descripcion"] == "El Tambo" and $_SESSION["usuario"]["usuario"] == "userTambo")
                                                	{
                                                		Listado_Instituciones($registro);
                                                	}
                                                    else
                                                    {
                                                        if ($registro["descripcion"] == "Ayacucho" and $_SESSION["usuario"]["usuario"] == "userAyacucho")
                                                        {
                                                            Listado_Instituciones($registro);
                                                        }
                                                    }
                                            	}
                                            	else
                                            	{
                                            	   Listado_Instituciones($registro);
                                                }
                                            }
                                            }
                                            ?> 
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
          
            <?php include("modals/agregar_empresa.php");?>
            <?php include("modals/modif_empresa.php");?>
            <?php include("modals/agregar_documentacion.php");?>
        </div>
    </div>
</div>
<?php
function Listado_Instituciones($registro){                                                    
    echo "<tr class='tr-shadow'><td>".$registro["descripcion"]. "</td>";
    echo "<td>".$registro["razon_social"]. "</td>";
    echo "<td>".$registro["ruc"]. "</td>";
    echo "<td>".$registro["contacto_apellido"]." ".$registro["contacto_nombre"]. "</td>";
    echo "<td>".$registro["telefono"]. "</td>";
    echo "<td>".$registro["direccion"]. "</td>";
    echo "<td><span class='block-email'>".$registro["email"]. "</span></td>";
    if ($registro["tipo_servicio"] == 1 )
        echo "<td> Línea de Crédito</td>";
    else
        echo "<td> Carta Fianza</td>";
    echo "<td>";
    $id = $registro["id_institucion"];
                                                        
    echo "<div class='table-data-feature' align='center'>";
    switch ($registro['estado_doc']) {
        // TRAMITE POR INICIAR DOCUMENTACION
        case '0':?> 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dataStart" data-id="<?php echo $registro['id_institucion']?>">Iniciar Doc.</button>
            <?php break;
        // TRAMITE INGRESANDO DOCUMENTACION
        case '1':?> 
            <button type="button" class="btn btn-info item" data-toggle="modal" data-target="#dataUpdate" title="Editar" data-id="<?php echo $registro['id_institucion']?>" data-ruc="<?php echo $registro['ruc']?>" data-empresa="<?php echo $registro['razon_social']?>" data-email="<?php echo $registro['email']?>" data-phone="<?php echo $registro['telefono'] ?>" data-direccion ="<?php echo $registro['direccion']?>" data-nombre ="<?php echo $registro['contacto_nombre']?>" data-apellido ="<?php echo $registro['contacto_apellido']?>" data-dni ="<?php echo $registro['dni_contacto']?>" ><i class='zmdi zmdi-edit'></i></button>
                <a class="btn btn-warning item" title="Detalle" href="../controlador/c_empresa_operaciones_detalles.php?varid=<?php echo $id;?>"><i class='zmdi zmdi-file'></i></a> 
            <?php break;
        // TRAMITE EN EVALUACION
        case '2':?>
            <div class="">
            <!--<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#dataEval" title="Evaluacion" data-id="<?php echo $registro['id_institucion']?>">EVALUACIÓN</button>-->
            <a class="btn btn-warning" title="Detalle" href="../controlador/c_empresa_operaciones_detalles.php?varid=<?php echo $id;?>">EVALUACION</a> </div>
            <?php break;
        // TRAMITE ESTADO CULMINADO---- APROBADO / RECHAZADO
        case '3':
            if ($registro['tramite_sn'] == 1){
            ?>
            <a class="btn" title="Detalle" href="../controlador/c_empresa_operaciones_detalles.php?varid=<?php echo $id;?>" style="color: #155724; background-color: #d4edda; border-color: #c3e6cb;">APROBADO</a> </div>
            <?php
            }else{?>
            <a class="btn" title="Detalle" href="../controlador/c_empresa_operaciones_detalles.php?varid=<?php echo $id;?>" style="color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">RECHAZADO</a> </div>
            <?php }break;
        }?>
    </div>
    </td>
<?php }
?>

<?php include 'complementos/scripts.php';?>  
<script>
    $(document).ready(function() {
    $('#mytable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excel', 'print',
            {
                extend: 'pdfHtml5',
                orientation: 'landscape',
                pageSize: 'LEGAL'
            }
        ],
        "paginate": "full_numbers",
        "language": {
            "paginate": {
              "previous": "Anterior",
              "next": "Siguiente"
            }
        },
        "order": []
    } );
    } );
</script>
<!--VALIDACION DE CAMPOS -->
<script >
$(function() {
  $("#newModalForm").validate({
    rules: {
      txtruc: {
        required: true,
      },
      txtempresa: {
        required: true,
      },
      txtdni: {
        required: true,
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
      txttelef: {
        required: true,
      },
    },
    messages: {
      txtruc: {
        required: "Ingrese datos válidos",
      },
      txtempresa: {
        required: "Ingrese datos válidos",
      },
      txtdni: {
        required: "Ingrese datos válidos",
      },
      txtapellido: {
        required: "Ingrese datos válidos",
      },
      txtnombre: {
        required: "Ingrese datos válidos",
      },
      txttelef: {
        required: "Ingrese datos válidos",
      },
      txtemail: {
        required: "Ingrese datos válidos",
      },
    }
  });
});
</script>
<script src="../vista/empresa_oper2.js"></script>
</body>
</html>
<!-- end document-->
