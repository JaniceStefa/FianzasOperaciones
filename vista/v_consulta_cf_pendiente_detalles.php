<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Page-->
    <title>Cartas Fianzas Pendientes</title>
    <?php include 'complementos/head_pag.php';?>   
	      
</head>

<body class="animsition" style="padding-right: 0px !important;">
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
                                <h3 class="title-5 m-b-35">DETALLES DE CARTA FIANZA </h3>
                                <!--BOTONES DE CONTROL-->
                                <div class="row" style="background-color: white;">
                                    <!--BUSQUEDA EN BASE DE DATOS-->                                  
                                    <!--EXPORTAR DOCUMENTOS-->
                                    <div class="col-md-2">
										<br/>
                                    	<a class="au-btn au-btn-icon au-btn--green au-btn--small" href="../controlador/c_cf_pendiente.php">
                                            Volver</a>
                                            <br/><br/><br/>
                                    
							            <?php 
							            foreach ($this->modelo->Consultar_Archivos($_GET['varfianza']) as $registro) {?>
							              <button type="button" class="btn-success" onClick="cfscan('<?php echo $registro['archivo'] ?>');"><img src="../images/icon/<?php echo $registro['prioridad']?>.png"></button>
							              <br/><br/>
							            <?php 
							        	}
							          	?>
						      		</div>
									<div class="col-md-10">
										<div class="card-body">
								            <div class="alert alert-warning" role="alert">
								                <p>
								                    <div class="row">
								                        <div class="col-lg-3" align="right">
								                        Número de Carta Fianza: </br>
								                        Fecha de vencimiento: </br>
								                    	Fecha de emisión: </br>
								                        </div>
								                        <div class="col-lg-3">
								                        <?php
								                            echo " " .$registro['cod_cartafianza']. "</br> ";						                            
								                            echo " " .$registro['fecha_venc']. "</br> ";			
								                            echo " " .$registro['fecha_emision']. "</br> ";			
								                        ?>		
								                        </div>
								                         <div class="col-lg-3" align="right">
								                        Monto Total: </br>
								                        </div>
								                        <div class="col-lg-3">
								                        <?php
								                            echo " " .$registro['total_fianza']. "</br> ";						                            
								                        ?>		
								                        </div>
								                    </div>
								                    <hr>
								                </p>
								            </div>
								        </div>
									<div class="embed-container" >
								        <iframe width="1000" height="400" id="FrameID" name="Frame" src="" ></iframe>
									</div>       
									</div>
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
            </div>
        </div>
    </div>
<?php include 'complementos/scripts.php';?>

<script src="../vista/fianzas.js"></script>
<script type="text/javascript">
  function cfscan(newSrc) {
    document.getElementById("FrameID").src=newSrc;
  }
  function originSrc() {
    var newSrc = ""
    document.getElementById("FrameID").src=newSrc;
  } 
  
</script>

<!--JS para Tabla-->
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
