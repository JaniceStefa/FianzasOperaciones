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
 
		$('#dataUpdate').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id = button.data('id') // Extraer la información de atributos de datos
		  var empresa = button.data('empresa')
		  var numero = button.data('codigo') // Extraer la información de atributos de datos
		  var monto = button.data('monto') // Extraer la información de atributos de datos
		  var banco = button.data('banco') // Extraer la información de atributos de datos
		  var fechagiro = button.data('fgiro') // Extraer la información de atributos de datos
		  var fechacobrar = button.data('fcobrar') // Extraer la información de atributos de datos
		  	  
		  //var oficina = button.data('lstoficina') // Extraer la información de atributos de datos
		  
		  var modal = $(this)
		  modal.find('.modal-title').text('Modificar : '+id)
		  modal.find('.modal-body #id').val(id)
		  modal.find('.modal-body #txtnumero').val(numero)
		  modal.find('.modal-body #txtempresa').val(empresa)
		  modal.find('.modal-body #txtmonto').val(monto)
		  modal.find('.modal-body #txtbanco').val(banco)
		  modal.find('.modal-body #fgiro').val(fechagiro)
		  modal.find('.modal-body #fcobrar').val(fechacobrar)
		  
		  $('.alert').hide();//Oculto alert
		})
		
		$('#dataDelete').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id = button.data('id') // Extraer la información de atributos de datos
		  var modal = $(this)
		  modal.find('.modal-title').text('Archivar elemento: '+id)
		  modal.find('#id').val(id)		
		})

		$('#archivoCheque').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id = button.data('id') // Extraer la información de atributos de datos
		  var archivo = button.data('archivo') // Extraer la información de atributos de datos
		  var modal = $(this)
		  modal.find('.modal-title').text('Carta Escaneada: ' + id)
		  modal.find('#id').val(id)		
		  modal.find('#archivo').val(archivo)	
		})
