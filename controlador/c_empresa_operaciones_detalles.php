<?php
	session_start();
    $controlador=new C_Empresa();
    
    if (isset($_POST['updatedoc']))
	{
		$controlador->UpdateDOC();
	}
	 if (isset($_POST['asociar']))
	{
		$controlador->AsociarEmpresa();
	}
	if (isset($_POST['updatedocV']))
	{
		$controlador->UpdateDOCVarios();
	}
	if (isset($_POST['updatestatus']))
	{
		$controlador->UpdateEvaluacion();
	}
	if (isset($_POST['updateTramite']))
	{
		$controlador->Tramite();
	}
	$controlador->Admi();
	class C_Empresa{

		private $modelo;
		private $modelo0;
		private $modelo1;
		private $modelo2;
		private $modelo3;
		// para socios
		private $modelo4;
		private $modelo5;
		private $modelo6;
		private $modelo7;

		//
		private $modelo8;
			
		public function Admi(){
			require_once("../modelo/m_empresa_operaciones.php");
			$this->modelo=new M_Empresa();
			$this->modelo1=new M_Empresa();
			$this->modelo2=new M_Empresa();
			$this->modelo3=new M_Empresa();
			$this->modelo4=new M_Empresa();
			$this->modelo5=new M_Empresa();
			$this->modelo6=new M_Empresa();
			$this->modelo7=new M_Empresa();
			$this->modelo8=new M_Empresa();
			$this->modelo0=new M_Empresa();
			//require_once("../vista/v_empresa_detalles.php");
			require_once("../vista/v_operaciones_detalles.php");
		}
		public function UpdateDOC(){
			require_once("../modelo/m_empresa_operaciones.php");
			$this->modelo = new M_Empresa();
			$fecha_entrega = $_POST['txtfecha'];
			$id_empresa = $_POST['idempresa'];
			$id_doc = $_POST['iddoc'];
			$id_consorcio = $_POST['idconsorcio'];
			$this->modelo->Agregar_Documentacion($id_empresa, $id_doc, $fecha_entrega);
			echo "<script>
					var select = '$id_consorcio'
					window.onload = function(){
					   location.href = '../controlador/c_empresa_operaciones_detalles.php?varid='+select
					}
					</script>";
		}
		public function UpdateDOCVarios(){
			require_once("../modelo/m_empresa_operaciones.php");
			$this->modelo = new M_Empresa();
			$fecha_entrega = $_POST['txtfecha'];
			$id_empresa = $_POST['idempresa'];
			$id_consorcio = $_POST['idconsorcio'];
			// $id_doc = $_POST['iddoc'];
			$str = $_POST['iddoc'];
			$myArray = explode(',', $str);
			//print_r($myArray);
			/*$id_doc = [4,5,6];*/
			foreach ($myArray as $id) {
				$this->modelo->Agregar_Documentacion($id_empresa, $id, $fecha_entrega);
			}
			echo "<script>
					var select = '$id_consorcio'
					window.onload = function(){
					   location.href = '../controlador/c_empresa_operaciones_detalles.php?varid='+select
					}
					</script>";
		}
		public function UpdateEvaluacion(){
			require_once("../modelo/m_empresa_operaciones.php");
			$this->modelo = new M_Empresa();
			$fecha = $_POST['txtfecha'];
			$id_empresa = $_POST['idempresa'];
			$id_entidad = $_POST['lstentidad'];

			$this->modelo->Evaluacion_Documentacion($id_empresa, $id_entidad, $fecha);
			echo  '<script> window.location ="../controlador/c_empresa_operaciones.php" </script>';

		}

		public function Tramite(){
			require_once("../modelo/m_empresa_operaciones.php");
			$this->modelo1=new M_Empresa();
			$id_empresa = $_POST['idempresa'];
			if(isset($_POST['estado']))
			{
			    $option = $_POST['estado']; 
			}
			if ($option == "rechazado") {
				$tramite_sn=0; // cancelado
			}
			if ($option == "aprobado") {
				$tramite_sn=1; // vigente
			}
			$observaciones = $_POST['txtObservaciones'];

			$this->modelo1->Actualizar_Evaluacion($id_empresa, $tramite_sn, $observaciones,'1');
			echo  '<script> window.location ="../controlador/c_empresa_operaciones.php" </script>';
		}

		public function AsociarEmpresa(){
			require_once("../modelo/m_empresa_operaciones.php");
			$this->modelo1=new M_Empresa();

			$ruc_empresa = $_POST['txtruc'];
			$nombre_empresa = $_POST['txtempresa'];
			$contacto_dni = $_POST['txtdni'];
			$contacto_apellido = $_POST['txtapellido'];
			$contacto_nombre = $_POST['txtnombre'];
			$contacto_email = $_POST['txtemail'];
			$contacto_direcccion = $_POST['txtdireccion'];
			$contacto_telefono = $_POST['txttelef'];
			$consorcio = $_POST['id'];
			
			$this->modelo1->Asociar_Empresa($ruc_empresa,$nombre_empresa,$contacto_dni,$contacto_nombre,$contacto_apellido,$contacto_email,$contacto_telefono, $contacto_direcccion, $consorcio);

			//$this->modelo1->Agregar_Empresa($ruc_empresa,$nombre_empresa,$contacto_dni,$contacto_nombre,$contacto_apellido,$contacto_email,$contacto_telefono, $contacto_direcccion, $id_oficina, $tipo_servicio);
			echo "<script>
					var select = '$consorcio'
					window.onload = function(){
					   location.href = '../controlador/c_empresa_operaciones_detalles.php?varid='+select
					}
					</script>";
		}
	}  
?>