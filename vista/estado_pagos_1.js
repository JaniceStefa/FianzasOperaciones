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
 
		$('#dataEstado').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id = button.data('id') // Extraer la información de atributos de datos
		  var estado = button.data('estado') // Extraer la información de atributos de datos
		  var saldo = button.data('saldo') // Extraer la información de atributos de datos
		  
		  var modal = $(this)
		  modal.find('.modal-title').text('Actualizar Estado de Poliza: ')
		  modal.find('.modal-body #id').val(id)
		  modal.find('.modal-body #saldo').val(saldo)
		  modal.find('.modal-body #estadotramite').val(estado)
		  $('.alert').hide();//Oculto alert
		})

		$('#archivoC').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id = button.data('id') // Extraer la información de atributos de datos
		  var archivo = button.data('archivo') // Extraer la información de atributos de datos
		  var modal = $(this)
		  modal.find('#id').val(id)		
		  modal.find('#archivo').val(archivo)	
		})
		