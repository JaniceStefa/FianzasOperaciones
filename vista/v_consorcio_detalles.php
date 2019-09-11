<body class="animsition" style="padding-right: 0px !important;">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <?php include 'complementos/header_mobile_operaciones.php';?>            
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
                                <!--ENCABEZADO CONSORCIO-->
                                <div class="row" style="background-color: white;">
                                    <div class="col-md-1">
										<br/>
										<?php 
							            foreach ($this->modelo->Consultar_Socios_Total($cod) as $registro) { 
                                       		$cant = $registro['cant'];
                                       	}?>
                                    	<a class="au-btn au-btn-icon au-btn--green au-btn--small" href="../controlador/c_empresa_operaciones.php">Volver</a>
										<br/><br/><br/>
						      		</div>
									<div class="col-md-11">
                                        <!--DATOS GENERALES DEL CONSORCIO-->
										<?php foreach ($this->modelo1->Consultar_Empresa($cod) as $registro) {?>
											</br>
								            <div class="card card-body" style="background-color: #cce5ff"  >
								                <div class="row">
								                	<div class="col-lg-3" align="right">
								                        Nombre Consorcio: </br>
								                    	FECHA INICIO: </br>
								                    </div>
								                    <div class="col-lg-3">
								                        <?php
								                            echo " " .$registro['razon_social']. "</br> ";			
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
								        	</div>
	                                        <!--BOTON AGREGAR EMPRESAS-->
                                        	<?php if ($cant < 4 ){ ?>
	                                        <button class="au-btn au-btn-icon au-btn--blue au-btn--small" data-toggle="modal" data-target="#agregarFormEmpresa" data-consorcio="<?php echo $cod ?>"><i class="zmdi zmdi-plus"></i>Agregar</button>  
                                        <?php	}
                                    	} 	?>
                                    	<!--END-->
									</div>
                                </div>
                                <!--END ENCABEZADO CONSORCIO-->




                                <div class="row" style="background-color: white; ">                              
                                	<div  class="col-md-3">
                                				
                                	</div>
									<div class="col-md-9">
										<div class="row">
                                       	<?PHP 
                                       	foreach ($this->modelo2->Consultar_Socios($cod) as $registroSocios) { ?>
											<div class="col-md-<?php echo 12/$cant?>" style='font-size:11.5px; padding: 10px'>
											<!--DATOS GENERALES DE UNA EMPRESA-->
												<div class="card-body" style="background-color: #cce5ff">
													<div class="row" >
											            <div class="col-lg-12">
											            	RUC : <?php echo " " .$registroSocios['ruc']. ""; ?></br>
											                Empresa: <?php echo " " .$registroSocios['razon_social']. ""; ?></br>
											                Representante: <?php echo " " .$registroSocios["contacto_apellido"]." ".$registroSocios["contacto_nombre"]. ""; ?></br>
											                Email: <?php echo " " .$registroSocios['email']. ""; ?></br>
			                                                Telefono: <?php echo " " .$registroSocios['telefono']. ""; ?></br>
											            </div>
											        </div>
											        <hr>
											    </div>
											</div>
										<?php }?>
										</div>
									</div>
								</div>

										    
								<div class="row" style="font-size: 10px ; background-color: white; " >
								<div class="col-md-3">
									<table class='table table-data2 table-striped'>
										<tbody>
									<?php
									foreach ($this->modelo8->Consultar_Documentos() as $registroDoc) {
                                    	echo "<tr><td style='font-size:10px; padding: 10px; width=50%; height:52px'>".$registroDoc['id_documento'].". ".$registroDoc['nombre_documento']."</td>";
                                    }?>
                                		</tbody>
                                    </table>
								</div>
                                <div class="col-md-9" style="font-size: 11.5px" > 
                                	<div class="row">
                                		<?php 
										$num = 6;
                                       	$modelo = "modelo".$num."";
			                            $cont = 0;
			                            foreach ($this->modelo3->Consultar_Socios($cod) as $registroSocios) {?>
			                                <div class='col-md-<?php echo 12/$cant?>'>
			                                <?php
			                                	echo "<table id='mytable' class='table table-data2 table-striped'><tbody>";
			                                	foreach ($this->$modelo->Consultar_Fechas($registroSocios['id_institucion']) as $val => $registro1) { ?>
											    	<tr style="padding: 10px">
											        <td style="padding: 10px; height: 52px">
				                                    <div class="row" style='font-size:11.5px;' >
					                                	<div class="col-md-7">
					                                    	Fecha: <?php 
					                                        //echo "{$val} => {$registro1['fecha_entrega']} ";
					                                        echo "".$registro1['fecha_entrega'].""?></br>
					                                    </div>
					                                    <div class="col-md-2">
					                                    	<?php
					                                        if ($registro1['fecha_entrega'] != NULL){
					                                        ?>
					                                       	<input type="checkbox" name="<?php $registro1['id_documento']?>" checked disabled>
					                                        <?php
					                                        $cont = $cont + 1;
					                                        } else {?>
					                                        <input type="checkbox" name="documentos[]" id="dia1" value="<?php echo $registro1['id_documento']?>">
					                                        </br>   
					                                        <?php }?>
					                                                </div>
					                                                <div class="col-md-3">
					                                                    <div class="table-data-feature" >
					                                                        <?php
					                                                        if ($registro1['fecha_entrega'] == NULL){
					                                                        ?>
					                                                        <button type="button" class="btn btn-info item" data-toggle="modal" data-target="#dataUpdateDoc" title="Editar" data-consorcio="<?php echo $registro['id_institucion'] ?>" data-doc="<?php echo $registro1['id_documento']?>" data-empresa="<?php echo $registroSocios['id_institucion']?>" ><i class='zmdi zmdi-edit'></i> </button>
					                                                            <?php }
					                                                           ?>
					                                                    </div>
					                                                </div>
				                                            	</div>
			                                            	</td>
			                                            	</tr>
				                                       	<?php 
				                                   		}
			                                   			$num = $num - 1 ; $modelo = "modelo".$num.""; 
			                                   			$empresanum = "select".$num."";?>
			                                   				<tr>
			                                   				<!-- ACCIONES EN BLOQUE -->
						                                	<td class="row" style="background-color: white; font-size: 11px ">
						                                    	<div class="col-md-11">
						                                        Elementos marcados : 
						                                        <button type="button" id="<?php echo $empresanum;?>" class="btn btn-info item" title="Editar" data-toggle="modal" data-target="#dataUpdateDocVarios" data-empresa="<?php echo $registroSocios['id_institucion']?>" data-consorcio="<?php echo $registro['id_institucion'] ?>" onclick= "btn('<?php echo $empresanum; ?>')" >                                      
						                                        <i class='zmdi zmdi-edit'></i> </button>
						                                    	</div>
						                                	</td>
						                            		</tr>
						                            		<!--END- ACCIONES EN BLOQUE-->
						                        	</tbody>
						                        	</table>
						                        	</div>
						                <?php 
                                      	}?>
									</div>
                            	</div>	                                        	
   
                            	</div>
                                <!-- ESTADO POR DOCUMENTACION ENTREGADA-->
                                <div class="row" style="background-color: white;">
                                    </br>
                                    </br>
                                    <div class="col-md-12" align="center">
                                    <?php
                                        foreach ($this->modelo4->Consultar_Empresa($cod) as $registro1) {
                                        if ($cont==15*$cant){ 
                                            // SECCION DE ESTADO DE TRAMITE ------ ACTIVO/EN EVALUACION/APROBADO-RECHAZADO
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
                                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#dataEval" title="Evaluacion" data-id="<?php echo $cod; ?>">EVALUACIÓN</button>
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
            <?php include("modals/asociar_empresas.php");?>
            <?php include("modals/modif_doc_v.php");?>  
            <?php include("modals/modif_empresa_status.php");?>  
            <?php include("modals/modif_status_tramite.php");?>
        </div>
    </div>
</div>
<?php include 'complementos/scripts.php';?>
<script src="../vista/empresa_oper_det4.js"></script>
<script>
	function btn(variable)
	{
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
        simb ='#';
        var res = simb.concat(variable);

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
              var consorcio = button.data('consorcio') // Extraer la información de atributos de datos

              var modal = $(this)
              modal.find('.modal-body #doc').val(reqqq)
              modal.find('.modal-body #empresa').val(empresa)
              modal.find('.modal-body #consorcio').val(consorcio)

              $('.alert').hide();//Oculto alert
            })
            var reqSelect = NULL;
        }
        
	}
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
              var consorcio = button.data('consorcio') // Extraer la información de atributos de datos

              var modal = $(this)
              modal.find('.modal-body #doc').val(reqqq)
              modal.find('.modal-body #empresa').val(empresa)
              modal.find('.modal-body #consorcio').val(consorcio)

              $('.alert').hide();//Oculto alert
            })
            var reqSelect = NULL;
        }
        });
    });
</script>
</body>
</html>
<!-- end document-->

