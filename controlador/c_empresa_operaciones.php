<?php
	session_start();
    $controlador=new C_Empresa();
    $controlador->Admi();

    if (isset($_POST['aceptar']))
    {
        $controlador->Agregar();
	}
	if (isset($_POST['delete']))
    {
        $controlador->Eliminar();
	}
	if (isset($_POST['update']))
	{
		$controlador->Update();
	}
	if (isset($_POST['confirmar']))
	{
		$controlador->Documentacion();
	}

	
	class C_Empresa{

		private $modelo;
		private $modelo1;

		
		public function Admi(){
			require_once("../modelo/m_empresa_operaciones.php");
			$this->modelo=new M_Empresa();
			$this->modelo1=new M_Empresa();
			require_once("../vista/v_empresa_operaciones.php");
		}

		public function Agregar(){
			require_once("../modelo/m_empresa_operaciones.php");
			$this->modelo1=new M_Empresa();
			//$ruc_empresa = $_POST['txtruc'];
			$nombre_empresa = $_POST['txtempresa'];
			$contacto_dni = $_POST['txtdni'];
			$contacto_apellido = $_POST['txtapellido'];
			$contacto_nombre = $_POST['txtnombre'];
			$contacto_email = $_POST['txtemail'];
			$contacto_direcccion = $_POST['txtdireccion'];
			$contacto_telefono = $_POST['txttelef'];
			$id_oficina = $_POST['lstoficina'];
			$tipo_servicio = $_POST['lstservicio'];

			if(isset($_POST['first']))
			{
			    $option = $_POST['first']; 
			}
			if ($option == "empresa") {
				$ruc_empresa = $_POST['txtruc'];
				$id_cat = 1;
			}
			if ($option == "consorcio") {
				$ruc_empresa = NULL;
				$id_cat = 2;
			}
			$this->modelo1->Agregar_Institucion($ruc_empresa, $nombre_empresa,$contacto_dni,$contacto_nombre,$contacto_apellido,$contacto_email,$contacto_telefono, $contacto_direcccion, $id_oficina, $tipo_servicio, $id_cat);

			//$this->modelo1->Agregar_Empresa($ruc_empresa,$nombre_empresa,$contacto_dni,$contacto_nombre,$contacto_apellido,$contacto_email,$contacto_telefono, $contacto_direcccion, $id_oficina, $tipo_servicio);
			echo  '<script> window.location ="../controlador/c_empresa_operaciones.php" </script>';
		}

		public function Update(){
			require_once("../modelo/m_empresa_operaciones.php");
			$this->modelo=new M_Empresa();
			$ruc_empresa = $_POST['txtruc'];
			$nombre_empresa = $_POST['txtempresa'];
			$contacto_dni = $_POST['txtdni'];
			$contacto_apellido = $_POST['txtapellido'];
			$contacto_nombre = $_POST['txtnombre'];
			$contacto_email = $_POST['txtemail'];
			$contacto_direcccion = $_POST['txtdireccion'];
			$contacto_telefono = $_POST['txttelef'];
			$id_institucion = $_POST['id'];
			$this->modelo->Update_Institucion($ruc_empresa,$nombre_empresa,$contacto_dni,$contacto_nombre, $contacto_apellido,$contacto_email,$contacto_telefono, $contacto_direcccion, $id_institucion);
			echo  '<script> window.location ="../controlador/c_empresa_operaciones.php" </script>';
		}

		public function Eliminar(){
			require_once("../modelo/m_empresa_operaciones.php");
			$this->modelo=new M_Empresa();
			$id_empresa=$_POST['id_oficina'];
			$this->modelo->Eliminar_Empresa($id_empresa);
			echo  '<script> window.location ="../controlador/c_empresa.php" </script>';
		}
		
		public function Documentacion(){
			require_once("../modelo/m_empresa_operaciones.php");
			$this->modelo1=new M_Empresa();

			$id_institucion = $_POST['id'];
			$this->modelo1->Iniciar_Documentacion_Institucion($id_institucion);
			echo  '<script> window.location ="../controlador/c_empresa_operaciones.php" </script>';
		}


		public function UpdateStatus(){
			require_once("../modelo/m_empresa_operaciones.php");
			$this->modelo1=new M_Empresa();

			$id_empresa = $_POST['id'];
			$this->modelo1->UpdateStatus($id_empresa);
			echo  '<script> window.location ="../controlador/c_empresa_operaciones.php" </script>';
		}

		public function Reporte(){
			require_once("../modelo/m_empresa_operaciones.php");
			$this->modelo=new M_Empresa();
			require_once("../vista/reporte.php");
		}
	}  
?>


