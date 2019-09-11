<?php
/*-----------------------
Autor: Obed Alvarado
http://www.obedalvarado.pw
Fecha: 27-02-2016
Version de PHP: 5.6.3
----------------------------*/
	# conectare la base de datos
    $con=@mysqli_connect('localhost', 'root', '', 'db_group_fianzas');
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }


	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['id'])) {
           $errors[] = "ID vacío";
        } else if (empty($_POST['descripcion'])){
			$errors[] = "Código vacío";
		} else if (empty($_POST['direccion'])){
			$errors[] = "Nombre vacío";
		} else if (empty($_POST['departamento'])){
			$errors[] = "Moneda vacío";
		} else if (empty($_POST['provincia'])){
			$errors[] = "Capital vacío";
		} else if (empty($_POST['telefono'])){
			$errors[] = "Continente vacío";
		}   else if (
			!empty($_POST['id']) &&
			!empty($_POST['descripcion']) && 
			!empty($_POST['direccion']) &&
			!empty($_POST['departamento']) &&
			!empty($_POST['provincia']) &&
			!empty($_POST['telefono'])
			
		){
 
		// escaping, additionally removing everything that could be (html/javascript-) code
		$codigo=mysqli_real_escape_string($con,(strip_tags($_POST["descripcion"],ENT_QUOTES)));
		$nombre=mysqli_real_escape_string($con,(strip_tags($_POST["direccion"],ENT_QUOTES)));
		$moneda=mysqli_real_escape_string($con,(strip_tags($_POST["departamento"],ENT_QUOTES)));
		$capital=mysqli_real_escape_string($con,(strip_tags($_POST["departamento"],ENT_QUOTES)));
		$continente=mysqli_real_escape_string($con,(strip_tags($_POST["telefono"],ENT_QUOTES)));
		$id=intval($_POST['id']);
		$sql="UPDATE oficina SET  descripcion='".$codigo."', direccion='".$nombre."',
		departamento='".$moneda."', provincia='".$capital."', telefono='".$continente."'	WHERE id='".$id."'";
		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = "Los datos han sido actualizados satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		} else {
			$errors []= "Error desconocido.";
		}
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}
 
?>