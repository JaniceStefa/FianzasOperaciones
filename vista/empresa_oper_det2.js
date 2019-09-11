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
 		$('#agregarFormEmpresa').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id = button.data('id') // Extraer la información de atributos de datos

		  var modal = $(this)
		  modal.find('.modal-body #id').val(id)

		  $('.alert').hide();//Oculto alert
		})

		$('#dataUpdateDoc').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var empresa = button.data('empresa') // Extraer la información de atributos de datos
		  var doc = button.data('doc') // Extraer la información de atributos de datos

		  var modal = $(this)
		  modal.find('.modal-body #doc').val(doc)
		  modal.find('.modal-body #empresa').val(empresa)

		  $('.alert').hide();//Oculto alert
		})

		$('#dataUpdateDocVarios').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var empresa = button.data('empresa') // Extraer la información de atributos de datos
		  var doc = button.data('doc') // Extraer la información de atributos de datos

		  var modal = $(this)
		  modal.find('.modal-body #doc').val(doc)
		  modal.find('.modal-body #empresa').val(empresa)

		  $('.alert').hide();//Oculto alert
		})

		$('#dataUpdateStatus').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var empresa = button.data('empresa') // Extraer la información de atributos de datos

		  var modal = $(this)
		  modal.find('.modal-body #empresa').val(empresa)

		  $('.alert').hide();//Oculto alert
		})

		$('#dataEval').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id = button.data('id') // Extraer la información de atributos de datos
		  
		  var modal = $(this)
		  modal.find('.modal-body #id').val(id)
		  $('.alert').hide();//Oculto alert
		})
		
		$('#dataDelete').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id = button.data('id') // Extraer la información de atributos de datos
		  var modal = $(this)
		  modal.find('.modal-title').text('Eliminar elemento: '+id)
		  modal.find('#id_oficina').val(id)		
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
		