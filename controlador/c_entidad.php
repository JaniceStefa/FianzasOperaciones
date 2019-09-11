<?php
	session_start();
    $controlador=new C_Entidad();
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
        
	class C_Entidad{

		private $modelo;
		private $modelo1;

		public function Admi(){
			require_once("../modelo/m_entidad.php");
			$this->modelo=new M_Entidad();
			require_once("../vista/v_entidad.php");
		}

		public function Agregar(){
			require_once("../modelo/m_entidad.php");
			$this->modelo=new M_Entidad();
			$ruc_entidad = $_POST['txtruc'];
			$nombre_entidad = $_POST['txtnombre'];
			$this->modelo->Agregar_Entidad($ruc_entidad, $nombre_entidad);
			echo  '<script> window.location ="../controlador/c_entidad.php" </script>';
		}

		public function Update(){
			require_once("../modelo/m_entidad.php");
			$this->modelo=new M_Entidad();
			$ruc_entidad = $_POST['txtruc'];
			$nombre_entidad = $_POST['txtnombre'];
			$id_entidad = $_POST['id'];
			$this->modelo->Update_Entidad($ruc_entidad, $nombre_entidad,$id_entidad);
			echo  '<script> window.location ="../controlador/c_entidad.php" </script>';
		}


		public function Eliminar(){
			require_once("../modelo/m_entidad.php");
			$this->modelo=new M_Entidad();
			$id_entidad = $_POST['id'];
			$this->modelo->Eliminar_Entidad($id_entidad);
			echo  '<script> window.location ="../controlador/c_entidad.php" </script>';
		}
	}  
?>