	function load(page){
		var parametros = {"action":"ajax","page":page};
		$("#loader").fadeIn('slow');
		$.ajax({
			url:'v_sede.php',
			data: parametros,
			success:function(data){
				$(".outer_div").html(data).fadeIn('slow');
				$("#loader").html("");
			}
		})
	}
 
		$('#dataUpdate').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var ruc = button.data('ruc') // Extraer la información de atributos de datos
		  var id = button.data('id') // Extraer la información de atributos de datos
		  var empresa = button.data('empresa') // Extraer la información de atributos de datos
		  var nombre = button.data('nombre') // Extraer la información de atributos de datos
		  var apellido = button.data('apellido') // Extraer la información de atributos de datos
		  var dni = button.data('dni') // Extraer la información de atributos de datos
		  var email = button.data('email') // Extraer la información de atributos de datos
		  var telefono = button.data('phone') // Extraer la información de atributos de datos
		  var direccion = button.data('direccion') // Extraer la información de atributos de datos
		  
		  var modal = $(this)
		  modal.find('.modal-title').text('Modificar Datos: ')
		  modal.find('.modal-body #id').val(id)
		  modal.find('.modal-body #ruc').val(ruc)
		  modal.find('.modal-body #empresa').val(empresa)
		  modal.find('.modal-body #dni').val(dni)
		  modal.find('.modal-body #nombre').val(nombre)
		  modal.find('.modal-body #apellido').val(apellido)
		  modal.find('.modal-body #email').val(email)
		  modal.find('.modal-body #phone').val(telefono)
		  modal.find('.modal-body #direccion').val(direccion)
		  $('.alert').hide();//Oculto alert
		})
		
		$('#dataStart').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id = button.data('id') // Extraer la información de atributos de datos
		  var modal = $(this)
		  modal.find('#id').val(id)		
		})

		$('#dataEval').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id = button.data('id') // Extraer la información de atributos de datos
		  
		  var modal = $(this)
		  modal.find('.modal-body #id').val(id)
		  $('.alert').hide();//Oculto alert
		})
 
	$( "#actualizarDatos" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "modificar.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_ajax").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#datos_ajax").html(datos);
					
					load(1);
				  }
			});
		  event.preventDefault();
		});
		