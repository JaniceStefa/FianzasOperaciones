<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Page-->
    <title>Renovaciones - Primas</title>
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
                                <h3 class="title-5 m-b-35">RENOVACIONES - PAGOS </h3>
                                <!--BOTONES DE CONTROL-->
                                <div class="table-data__tool">
                                    <!--BUSQUEDA EN BASE DE DATOS-->                                  
                                    <!--EXPORTAR DOCUMENTOS-->
                                    <div class="table-data__tool-right">                                    
                                    </div>
                                </div>
                                <!-- DATA TABLE -->
                                <div class="table-responsive table--no-card m-b-30">
                                    <table id="mytable" class="table table-data3 table-striped" onmouseover="this.style.cursor='pointer';" onclick="fila();">
                                        <thead class="table-earning">
                                            <tr>
                                                <th>Poliza</th>
                                                <th>Empresa/Consorcio</th>
                                                <th>Estado</th>  
                                                <th>Importe</th>
                                                <th>Fecha Emisión</th>
                                                <th>Fecha Vencimiento</th>
                                                <th>Saldo</th>
                                                <th>Prima</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php
                                            foreach($this->modelo->Consulta_Pagos() as $registro){ 
                                                echo "<tr class='tr-shadow' id='reg' ><td>".$registro["cod_cartafianza"]. "</td>";
                                                echo "<td>".$registro["nombre_empresa"]. "</td>";
                                                if ($registro["tramite_estado"] == 1)
                                                    echo "<td align='center' class='process' id='estado'>VIG</td>";
                                                else
                                                    echo "<td align='center' class='denied'>CANC</td>";

                                                echo "<td align='center'> S/.".number_format($registro["total_fianza"], 2, ".", ","). "</td>";
                                                echo "<td align='center'>".date('d/m/Y', strtotime($registro["fecha_emision"]))."</td>";
                                                echo "<td align='center'>".date('d/m/Y', strtotime($registro["fecha_venc"])). "</td>";
                                                echo "<td align='center'> S/.".number_format($registro["saldo"], 2, ".", ","). "</td>";
                                                echo "<td align='center'> S/.".number_format($registro["prima"], 2, ".", ","). "</td>";
                                                echo "<td>";?>
                                                <div class="table-data-feature">
                                                <?php 
                                                if (isset($_SESSION["usuario"])) {
                                                    if ($_SESSION["usuario"]["privilegio"] == 1) {?>
                                                    <button type="button" class="btn btn-success item" data-toggle="modal" data-target="#dataEstado" title="Cambiar Estado" data-id="<?php echo $registro["id_renovacion"]?>" data-estado="<?php echo $registro["tramite_estado"]?>" data-saldo="<?php echo $registro["prima"]?>"><i class='zmdi zmdi-refresh'></i> </button>
                                                <?php }
                                                } else{}?>
                                                <?php if ($registro['voucher'] != NULL)
                                                {?>
                                                <button type="button" class="btn btn-warning item" data-toggle="modal" data-target="#archivoC" title="Visualizar" id="#archivoCheque" data-archivo="<?php echo $registro['voucher']?>" data-id="<?php echo $registro['id_renovacion']?>" ><i class='zmdi zmdi-eye'></i> </button><?php } ?>
                                                </div></td>
                                                <?php
                                                }?>
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
            <!-- MODALES -->    
            <?php include 'modals/modif_renovacion_pagos.php';?>  
            <?php include 'modals/renovacion_pagos_voucher.php';?> 
            </div>
        </div>
    </div>

<script src="../vista/estado_pagos_1.js"></script>
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
    $('#mytable').on('click', 'tbody tr', function(event) {
       
        $(this).addClass('highlight').siblings().removeClass('highlight');
    });
</script>

<!-- Jquery JS-->
<!-- Jquery JS-->
<script src="../vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../vendor/slick/slick.min.js">
    </script>
    <script src="../vendor/wow/wow.min.js"></script>
    <script src="../vendor/animsition/animsition.min.js"></script>
    <script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../assets/js/main.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script src="../assets/js/jquery.dataTables.min.js"></script>
<script src="../assets/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="../assets/js/buttons.html5.min.js"></script>
<script src="../assets/js/buttons.print.min.js"></script>
<link rel="stylesheet" type="text/css" href="../assets/css/buttons.dataTables.min.css">


</style>
</body>
</html>