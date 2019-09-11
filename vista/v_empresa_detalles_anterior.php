<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Page-->
    <title>Documentación de Empresa</title>
    <?php include 'complementos/head_pag.php';
    $cod = ($_GET['varid']);?>   
	      
</head>

<body class="animsition" style="padding-right: 0px !important;">
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
                        <div class="row" >
                            <div class="col-md-12">
                                <h3 class="title-5 m-b-35">DOCUMENTACIÓN </h3>
                                <!--BOTONES DE CONTROL-->
                                <div class="row" style="background-color: white;">
                                    <!--BUSQUEDA EN BASE DE DATOS-->                                  
                                    <!--EXPORTAR DOCUMENTOS-->
                                    <div class="col-md-1">
										<br/>
                                    	<a class="au-btn au-btn-icon au-btn--green au-btn--small" href="../controlador/c_empresa_operaciones.php">
                                            Volver</a>
                                            <br/><br/><br/>
                                    
							            <?php 
							            foreach ($this->modelo->Consultar_Empresa($cod) as $registro) {?>
							              <br/><br/>
							            <?php 
							        	}
							          	?>
						      		</div>
									<div class="col-md-11">
										<div class="card-body">
								            <div class="card-body" style="background-color: #cce5ff"  >
								                <p><p>
								                    <div class="row">
								                        <div class="col-lg-3" align="right">
								                        RUC Empresa: </br>
								                        Nombre Empresa: </br>
								                    	FECHA INICIO: </br>
								                        </div>
								                        <div class="col-lg-3">
								                        <?php
								                            echo " " .$registro['ruc_empresa']. "</br> ";						                            
								                            echo " " .$registro['nombre_empresa']. "</br> ";			
								                            echo " " .date('d/m/Y', strtotime($registro["fecha_doc"]))."</br> ";  
								                        ?>		
								                        </div>
                                                        <div class="col-lg-3" align="right">
                                                        Representante Legal: </br>
                                                        Email: </br>
                                                        Telefono: </br>
                                                        </div>
                                                        <div class="col-lg-3">
                                                        <?php
                                                            echo " " .$registro["contacto_apellido"]." ".$registro["contacto_nombre"]. "</br> ";
                                                            echo " " .$registro['email']. "</br> ";            
                                                            echo " " .$registro['telefono']. "</br> ";          
                                                        ?>      
                                                        </div>
								                    </div>
								                    <hr>
								                </p>
								            </div>
								        </div>
									</div>
                                </div>
                                <div class="row" style="background-color: white; ">
                                    <div class="col-md-1" >
                                        
                                    </div>
                                    <div class="col-md-11" >
                                    <div class="card-body" ;>
                                       <div class="row">
                                            <?php
                                            $cont = 0;
                                            foreach ($this->modelo->Consultar_Fechas($cod) as $registro) {?>
                                                <div class="col-md-3">
                                                    Fecha: <?php echo "".$registro['fecha_entrega'].""?></br>
                                                </div>
                                                <div class="col-md-7">
                                                    <?php
                                                    if ($registro['fecha_entrega'] != NULL){
                                                    ?>
                                                    <input type="checkbox" name="<?php $registro['id_documento']?>" checked disabled> <?php echo "  ". $registro['nombre_documento']."" ?>
                                                    <?php
                                                    $cont = $cont + 1;
                                                    } else {?>
                                                    <input type="checkbox" name="documentos[]" id="dia1" value="<?php echo $registro['id_documento']?>"> <?php echo "  ". $registro['nombre_documento']."" ?>
                                                    </br>   
                                                    <?php }?>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="table-data-feature">
                                                        <?php
                                                        if ($registro['fecha_entrega'] == NULL){
                                                        ?>
                                                        <button type="button" class="btn btn-info item" data-toggle="modal" data-target="#dataUpdateDoc" title="Editar" data-empresa="<?php echo $cod ?>" data-doc="<?php echo $registro['id_documento']?>" ><i class='zmdi zmdi-edit'></i> </button>
                                                            <?php }?>
                                                    </div>
                                                </div>
                                                </br>
                                                </br>
                                       <?php }?>
                                       </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="row" style="background-color: white; ">
                                    </hr>
                                    </hr>
                                    <div class="col-md-1"> </div>
                                    <div class="col-md-11">
                                        Para los elementos que estan marcados 
                                        <button type="button" id="select" class="btn btn-info item" title="Editar" data-toggle="modal" data-target="#dataUpdateDocVarios" data-empresa="<?php echo $cod?>">                                      
                                        <i class='zmdi zmdi-edit'></i> </button>
                                        </br>
                                    </br>
                                    </div>
                                </div>

                                <!-- ESTADO POR DOCUMENTACION ENTREGADA-->
                                <div class="row" style="background-color: white;">
                                    </br>
                                    </br>
                                    <div class="col-md-12" align="center">
                                    <?php
                                        foreach ($this->modelo3->Consultar_Empresa($cod) as $registro1) {
                                        if ($cont==13){ 

                                            switch ($registro1['status']) {
                                                case '2':?> 
                                                    <div class="col-md-6">
                                                    <div class="card border border-secondary">
                                                        <div class="card-header" style="background-color: #ffeeba " >
                                                            Estado : EN EVALUACIÓN
                                                        </div>
                                                        <div class="card-body">
                                                            FECHA DE INGRESO: </br> <?php echo " " .$registro1["fecha_ingreso"]."</br> "; ?></br>
                                                            ASEGURADORA:</br> <?php echo " " .$registro1["nombre_entidad"]."</br> "; ?></br>
                                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#dataEval" title="Evaluacion" data-id="<?php echo $registro1['id_empresa']?>">EVALUACIÓN</button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <?php break;
                                                case '3':?>
                                                    <div class="col-md-6">
                                                    <div class="card border border-secondary">
                                                        <?php if ($registro1['tramite_sn'] == 1){ // 1 - aprobado?>   
                                                        <div class="card-header" style="background-color: #d4edda; " >
                                                            APROBADO
                                                        <?php }else{ // 0 - rechazado?>
                                                        <div class="card-header" style="background-color: #f5c6cb; color:#721c24;" >
                                                            RECHAZADO
                                                        <?php }?>
                                                        </div>
                                                        <div class="card-body">
                                                            FECHA DE INGRESO: </br> <?php echo " " .$registro1["fecha_ingreso"]."</br> "; ?></br>
                                                            ASEGURADORA:</br> <?php echo " " .$registro1["nombre_entidad"]."</br> "; ?></br>
                                                            OBSERVACIONES:</br> <?php echo " " .$registro1["observaciones"]."</br> "; ?></br>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <?php break;
                                                case '1':?>
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#dataUpdateStatus" data-empresa="<?php echo $cod?>">Estado : ACTIVO </button>  
                                                    <?php break;
                                            }
                                          	}
                                        else
                                        {?>
                                            <button type="button" class="btn btn-secondary" disabled>Estado : EN PROCESO </button>   
                                    <?php 
                                    }}
                                    ?>
                                    </div>
                                </div>
                                <!-- END - ESTADO POR DOCUMENTACION ENTREGADA-->

                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        <div class="row">
                            <?php include 'complementos/footer.php';?>    
                        </div>
                    </div>
                </div>
            </div>
            <?php include("modals/modif_doc.php");?>    
            <?php include("modals/modif_doc_v.php");?>  
            <?php include("modals/modif_empresa_status.php");?>  
            <?php include("modals/modif_status_tramite.php");?>
        </div>
    </div>
</div>
<?php include 'complementos/scripts.php';?>
<script src="../vista/empresa_oper_det2.js"></script>
<script>
    $(document).ready(function() {
    // Comprobacion usando .prop() (jQuery > 1.6)
        if ($('#dia1').prop('checked') ) {
        console.log("Checkbox seleccionado");
        }
    // Comprobacion usando .attr() (jQuery < 1.6)
        if ($('#dia1').attr('checked') ) {
        console.log("Checkbox seleccionado");
        }
    // Comprobacion usando funcion .is()
        if ($('#dia1').is(':checked') ) {
        console.log("Checkbox seleccionado");
        }

    // Comprobar los checkbox seleccionados
        $('#select').on('click', function() {
        var reqSelect = new Array();
        $('input[type=checkbox]:checked').not(":disabled").each(function() {
            reqSelect.push($(this).val());
        });

        if(reqSelect == 0)
        {
            alert("No existen elementos seleccionados");
        }
        else
        {
            var reqqq = reqSelect.toString();
            $('#dataUpdateDocVarios').on('show.bs.modal', function (event) {
              var button = $(event.relatedTarget) // Botón que activó el modal
              var empresa = button.data('empresa') // Extraer la información de atributos de datos

              var modal = $(this)
              modal.find('.modal-body #doc').val(reqqq)
              modal.find('.modal-body #empresa').val(empresa)

              $('.alert').hide();//Oculto alert
            })
        }
        });
    });
</script>
</body>
</html>
<!-- end document-->

