	function load(page){
		var parametros = {"action":"ajax","page":page};
		$("#loader").fadeIn('slow');
		$.ajax({
			url:'../controlador/c_empleado.php',
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
		  var dni = button.data('dni') // Extraer la información de atributos de datos
		  var apellidos = button.data('apellido') // Extraer la información de atributos de datos
		  var nombre = button.data('nombre') // Extraer la información de atributos de datos
		  var email = button.data('email') // Extraer la información de atributos de datos
		  var telefono = button.data('telefono') // Extraer la información de atributos de datos
		  var oficina = button.data('oficina') // Extraer la información de atributos de datos
		  	  
		  var modal = $(this)
		  modal.find('.modal-title').text('Modificar empleado: '+id)
		  modal.find('.modal-body #id').val(id)
		  modal.find('.modal-body #txtdni').val(dni)
		  modal.find('.modal-body #txtapellido').val(apellidos)
		  modal.find('.modal-body #txtnombre').val(nombre)
		  modal.find('.modal-body #txtemail').val(email)
		  modal.find('.modal-body #txttelefono').val(telefono)
		  modal.find('.modal-body #lstoficina').val(oficina)
		  
		  $('.alert').hide();//Oculto alert
		})
		
		$('#dataDelete').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id = button.data('id') // Extraer la información de atributos de datos
		  var modal = $(this)
		  modal.find('.modal-title').text('Eliminar elemento: '+id)
		  modal.find('#id').val(id)		
		})
 
	