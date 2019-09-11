	function load(page){
		var parametros = {"action":"ajax","page":page};
		$("#loader").fadeIn('slow');
		$.ajax({
			url:'../controlador/c_cheque.php',
			data: parametros,
			success:function(data){
				$(".outer_div").html(data).fadeIn('slow');
				$("#loader").html("");
			}
		})
	}
 		$('#archivoCheque').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id = button.data('id') // Extraer la información de atributos de datos
		  var archivo = button.data('archivo') // Extraer la información de atributos de datos
		  var modal = $(this)
		  modal.find('.modal-title').text('Cheque Escaneado: '+id)
		  modal.find('#id').val(id)
		  modal.find('#archive').val(archivo)
		})
