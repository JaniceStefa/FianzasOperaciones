<head>
<?php include 'complementos/head_pag.php';?>   
    <!--<link href="../js/jquery-ui-1.12.1.custom/jquery-ui.css" rel="stylesheet">-->
<script language="javascript" type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="../js/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
</head>

<body>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <?php include 'complementos/header.php';?>            
        </header>
        <!-- END HEADER MOBILE-->
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <?php include 'complementos/menu.php';?>
        </aside>
        <!-- END MENU SIDEBAR-->
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <?php include 'complementos/header_desktop.php';?>
            </header>

           <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="title-5 m-b-35">CARTAS FIANZAS PENDIENTES </h3>
                                <!--BOTONES DE CONTROL-->
                                <div class="table-data__tool">
                                    <!--EXPORTAR DOCUMENTOS-->
                                    <div class="table-data__tool-right">                                    
                                        <!-- Button trigger modal -->
                                        <button id="btnmodificar" class="au-btn au-btn-icon au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>Modificar</button>

                                        <button id="btnnuevo" class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#agregarNuevo">
                                            <i class="zmdi zmdi-plus"></i>Nuevo</button>
                                    </div>
                                </div>

                                <!-- DATA TABLE -->
                                <div class="table-responsive table--no-card m-b-30">
                                    <table id="mytable" class=" table table-data2 table-striped" onmouseover="this.style.cursor='pointer';" onclick="fila();">
                                        <thead class="table-earning">
                                            <tr>
                                                <th>Empresa</th>
                                                <th>Entidad</th>
                                                <th>Tipo Carta Fianza</th>  <!-- tipo de carta fianza-->
                                                <th>Número Carta Fianza</th>
                                                <th>Monto Total</th>
                                                <th>Fecha Emisión</th>
                                                <th>Vigencia</th>
                                                <th>Fecha Vencimiento</th>
                                                <th></th>
                                                <!-- <th>Cheques</th> cheques boton de mayor información, incluir los demas cheques
                                                <th>Banco</th>
                                                <th>Monto</th>-->
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php
                                            
                                            foreach($this->modelo->Mostrar_CF() as $registro){
                                                echo "<tr class='tr-shadow'><td>".$registro["nombre_empresa"]. "</td>";

                                                echo "<td>".$registro["archivo"]. "</td>";

                                                echo "<td>".$registro["nombre_entidad"]. "</td>";
                                                echo "<td>".$registro["descripcion_tipo"]. "</td>";
                                                echo "<td>".$registro["cod_carta_fianza"]. "</td>";
                                                echo "<td>".$registro["total_fianza"]. "</td>";
                                                echo "<td>".date('d/m/Y', strtotime($registro["fecha_emision"]))."</td>";
                                                echo "<td>".$registro["vigencia"]. "</td>";
                                                echo "<td>".date('d/m/Y', strtotime($registro["fecha_venc"])). "</td>";
                                                echo "<td>"?>


                                            <div class="table-data-feature">
                                                <button type="button" id="modif" class="btn btn-info item" data-toggle="modal" data-target="#dataUpdate" title="Modificar" data-id="<?php echo $registro['id_cartafianza']?>" data-empresa="<?php echo $registro['nombre_empresa']?>" data-oficina="<?php echo $registro['id_oficina']?>" data-codigo="<?php echo $registro['cod_carta_fianza']?>" data-tipo="<?php echo $registro['id_tipof']?>" data-entidad="<?php echo $registro['id_entidad']?>" data-total="<?php echo $registro['total_fianza']?>" data-emision="<?php echo $registro['fecha_emision']?>" data-vigencia="<?php echo $registro['vigencia']?>" data-vencimiento="<?php echo $registro['fecha_venc']?>"><i class='zmdi zmdi-edit'></i> </button>
                                                <button type="button" class="btn btn-success item" data-toggle="modal" data-target="#dataDelete" title="Archivar" data-id="<?php echo $registro['id_cartafianza']?>"  ><i class='zmdi zmdi-archive'></i> </button>
                                                <button type="button" class="btn btn-warning item" data-toggle="modal" data-target="#archivo_carta" title="Visualizar" id="#archivo_carta" data-archivo="<?php echo $registro['archivo']?>" data-id="<?php echo $registro['id_cartafianza']?>" ><i class='zmdi zmdi-eye'></i> </button>
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

			<?php include("modals/cfianza_adjuntar.php");?>
			<?php include("modals/agregar_empresacartas.php");?>
            <?php include("modals/modif_cfianza_empresa.php");?>
            <?php include("modals/archivar_cfianza.php");?>
		</div> 
	</div>
<?php include 'complementos/scripts.php';?>
<script src="../vista/fianzassss.js"></script>

<script type="text/javascript">
    
    $(document).ready(function() {
    $('#mytable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf', 'print'
        ]
    } );
    } );

    $('#mytable').on('click', 'tbody tr', function(event) {
       
        $(this).addClass('highlight').siblings().removeClass('highlight');
        //alert(this.getElementsByTagName('td')[0].innerHTML);
    });
    $('#btnmodificar').click(function (){
        $('#modif').click();
    });
    function fila(){
        $('#btnmodificar').removeClass('au-btn--disabled');
        $('#btnmodificar').addClass('au-btn--blue');
        document.getElementById('btnmodificar').disabled=false  ; 
    }
    $('#btnmodificar').addClass('au-btn--disabled');
    document.getElementById('btnmodificar').disabled=true;

    <?php $cod = ($_GET['variable1']);?>
	  $(function() {
	    var codigo = "<?php echo $cod;?>";
	    $("table td:first-child:contains("+codigo+")")
	      .parents("tr")
	      .css("background-color", "rgba(172, 186, 212,0.7)");
	  });
</script>
<script src="../assets/js/jquery.dataTables.min.js"></script>
<script src="../assets/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="../assets/js/buttons.html5.min.js"></script>
<script src="../assets/js/buttons.print.min.js"></script>
<link rel="stylesheet" type="text/css" href="../assets/css/buttons.dataTables.min.css">
<style type="text/css">
    .table-striped tbody tr.highlight td { 
        background-color: #acbad4;
    }
    label.error{
        color:red;
    }
    .au-btn--disabled{
        background: #999;
        border: #d0d0d0;
        cursor: default;
    }
    .au-btn--disabled:hover{
        background: #999;
        border: #d0d0d0;
        cursor: default;
    }
    }
</style>
</body>
</html>