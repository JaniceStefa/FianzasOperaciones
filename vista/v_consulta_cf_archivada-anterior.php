<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Page-->
    <title>GF Cartas Fianzas Archivadas</title>
    <?php include 'complementos/head_pag.php';?>   
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <?php include 'complementos/header.php';  ?>        
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
                                <h3 class="title-5 m-b-35">CARTAS FIANZAS ARCHIVADAS</h3>
                                <!--BOTONES DE CONTROL-->
                                <div class="table-data__tool">
                                    
                                </div>
                                <!-- DATA TABLE -->
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-data2 table-striped" id="tabletocsv">
                                        <thead>
                                            <tr>
                                                <th>Empresa</th><th>Entidad</th><th>Tipo Carta Fianza</th><th>Número Carta Fianza</th><th>Monto Total</th><th>Fecha Emisión</th><th>Vigencia</th><th>Fecha Vencimiento</th><th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach($this->modelo->Mostrar_CF_Archi() as $registro){
                                                echo "<tr><td style='font-size:80%;'>".$registro["nombre_empresa"]. "</td>";
                                                echo "<td>".$registro["nombre_entidad"]. "</td>";
                                                echo "<td>".$registro["descripcion_tipo"]. "</td>";
                                                echo "<td>".$registro["cod_carta_fianza"]. "</td>";
                                                echo "<td> S/.".number_format($registro["total_fianza"], 2, ".", ","). "</td>";
                                                echo "<td align='center'>".date('d/m/Y', strtotime($registro["fecha_emision"])). "</td>";
                                                echo "<td align='center'>".$registro["vigencia"]. " días </td>";
                                                echo "<td align='center'>".date('d/m/Y', strtotime($registro["fecha_venc"])). "</td>";
                                                 echo "<td>"?>

                                                <div class="table-data-feature">
                                                <button type="button" class="btn btn-warning item" data-toggle="modal" data-target="#archivoCarta" title="Visualizar" id="#archivoCarta" data-archivo="<?php echo $registro['archivo']?>" data-id="<?php echo $registro['id_cartafianza']?>" ><i class='zmdi zmdi-eye'></i> </button>
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
            <!-- MODALES -->    
            <?php include("modals/cfianza_archi_adjuntar.php");?>
            </div>
        </div>
    </div>
<?php include 'complementos/scripts.php';?>  
<script src="../vista/fianzas.js"></script>
<script language="javascript">
$(document).ready(function() {
    $(".botonExcel").click(function(event) {
        $("#datos_a_enviar").val( $("<div>").append( $("#Exportar_a_Excel").eq(0).clone()).html());
        $("#FormularioExportacion").submit();
});
});
</script> 
<script type="text/javascript">
    function crearCSV(){
        var tablehtml = document.getElementById("tabletocsv").innerHTML;
        var datos = tablehtml.replace(/<thead>/g,'')
                             .replace(/<\/thead>/g,'')
                             .replace(/<tbody>/g,'')
                             .replace(/<\/tbody>/g,'')
                             .replace(/<tr>/g,'')
                             .replace(/<\/tr>/g,'\r\n')
                             .replace(/<th>/g,'')
                             .replace(/<\/th>/g,',')
                             .replace(/<td>/g,'')
                             .replace(/<\/td>/g,',')
                             .replace(/<\t/g,'')
                             .replace(/<\n/g,'');
   }
</script>
<script>
    $(document).ready(function() {
    $('#tabletocsv').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf', 'print'
        ],
        "paging": false,
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
<!--<script src="../assets/js/jquery-3.3.1.js"></script>-->
<script src="../assets/js/jquery.dataTables.min.js"></script>
<script src="../assets/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="../assets/js/buttons.html5.min.js"></script>
<script src="../assets/js/buttons.print.min.js"></script>
<link rel="stylesheet" type="text/css" href="../assets/css/buttons.dataTables.min.css">


</body>
</html>
<!-- end document-->
