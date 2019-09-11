	function load(page){
		var parametros = {"action":"ajax","page":page};
		$("#loader").fadeIn('slow');
		$.ajax({
			url:'../controlador/c_cfianzas.php',
			data: parametros,
			success:function(data){
				$(".outer_div").html(data).fadeIn('slow');
				$("#loader").html("");
			}
		})
	}
 
		$('#dataUpdate').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id = button.data('id') // Extraer la información de atributos de datos
		  var empresa = button.data('empresa')
		  //var empresa = button.data('txtempresa') // Extraer la información de atributos de datos
		  var codigo = button.data('codigo') // Extraer la información de atributos de datos
		  var tipo = button.data('tipo') // Extraer la información de atributos de datos
		  var entidad = button.data('entidad') // Extraer la información de atributos de datos
		  var total = button.data('total') // Extraer la información de atributos de datos
		  var emision = button.data('emision') // Extraer la información de atributos de datos
		  var vencimiento = button.data('vencimiento') // Extraer la información de atributos de datos
		  var vigencia = button.data('vigencia') // Extraer la información de atributos de datos
		  var oficina = '89'
		  //var oficina = button.data('lstoficina') // Extraer la información de atributos de datos
		  
		  var modal = $(this)
		  modal.find('.modal-title').text('Agregar Renovación: '+id)
		  modal.find('.modal-body #id').val(id)
		  modal.find('.modal-body #txtnumero').val(codigo)
		  modal.find('.modal-body #lsttipo').val(tipo)
		  modal.find('.modal-body #lstentidad').val(entidad)
		  modal.find('.modal-body #lstoficina').val(oficina)
		  modal.find('.modal-body #emision').val(emision)
		  modal.find('.modal-body #vencimiento').val(vencimiento)
		  modal.find('.modal-body #vigencia').val(vigencia)
		  modal.find('.modal-body #txtempresa').val(empresa)
		  modal.find('.modal-body #txtmonto').val(total)
		  modal.find('.modal-body #txtvigencia').val(vigencia)
		  
		  $('.alert').hide();//Oculto alert
		})
		
		$('#dataDelete').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id = button.data('id') // Extraer la información de atributos de datos
		  var modal = $(this)
		  modal.find('.modal-title').text('Archivar elemento: '+id)
		  modal.find('#id').val(id)		
		})

		$('#archivoCarta').on('show.bs.modal',function(event){
			var button = $(event.relatedTarget) // Botón que activó el modal
		  	var id = button.data('id') // Extraer la información de atributos de datos
		  	var archivo = button.data('archivo')
		  	var modal = $(this)
		  	modal.find('.modal-title').text('Carta Escaneada: '+id)
		  	modal.find('#id').val(id)
		  	modal.find('#archivo').val(archivo)
		})

		$(function() {		
		  $("#newModalForm").validate({
		    rules: {
		      txtempresa: {
		        required: true,
		      },
		      lstentidad: {
		        required: true,
		      },
		      lsttipo: {
		        required: true,
		      },
		      txtnumero: {
		        required: true,
		      },
		      txtmonto: {
		        required: true,
		      },
		      lstoficina: {
		        required: true,
		      },
		      emision: {
		        required: true,
		      },
		      txtvigencia: {
		        required: true,
		      },
		      venc: {
		        required: true,
		      },
		      txttelef: {
		        required: true,
		      },
		      txtemail: {
		        required: true,
		      },
		      uploadedFile{
		      	required: true,
		      }
		    },
		    messages: {
		      txtempresa: {
		        required: "Ingrese datos válidos",	        
		      },
		      txtnumero: {
		        required: "Ingrese datos válidos",
		      },
		      txtmonto: {
		        required: "Ingrese datos válidos",
		      },
		      emision: {
		        required: "Ingrese fecha válida",
		      },
		      txtvigencia: {
		        required: "Ingrese datos válidos",
		      },
		      txttelef: {
		        required: "Ingrese datos válidos",
		      },
		      txtemail: {
		        required: "Ingrese datos válidos",
		        email: "Ingrese un correo electrónico válido",
		      },
		      venc: {
		        required: "Ingrese fecha válida",
		      },
		      lsttipo: {
		      	required: "Seleccione una opción",
		      },
		      lstoficina: {
		      	required: "Seleccione una opción",
		      },
		      lstentidad: {
		      	required: "Seleccione una opción",
		      },
		      uploadedFile: {
		      	required: "Suba una archivo pdf",
		      },
		    }
		  });

		  $("#actualidarDatos").validate({
		    rules: {
		      txtnumero: {
		        required: true,
		      },
		      txtvigencia: {
		        required: true,
		      },
		      uploadedFile{
		      	required: true,
		      }
		    },
		    messages: {
		      txtnumero: {
		        required: "Ingrese datos válidos",
		      },
		      txtvigencia: {
		        required: "Ingrese datos válidos",
		      },
		      uploadedFile: {
		      	required: "Suba una archivo pdf",
		      },
		    }
		  });
		});

		
	