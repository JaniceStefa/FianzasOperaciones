<?php
    session_start();
    $controlador=new C_Sede();
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

	class C_Sede{
		private $modelo;
		public function Admi(){
			require_once("../modelo/m_sede.php");
			$this->modelo=new M_Sede();
			require_once("../vista/v_sede.php");
		}
		public function Agregar(){
			require_once("../modelo/m_sede.php");
			$this->modelo=new M_Sede();		
			$descripcion = $_POST['txtdescripcion'];
            $direccion = $_POST['txtdireccion'];
            $departamento = $_POST['lstdepartamento'];
            $telefono = $_POST['txttelefono'];
            unset($_POST['aceptar']);
			$this->modelo->Agregar_Sede($descripcion, $direccion, $departamento, $telefono);
			//Response.Redirect()	;	
			//header("Location: ../controlador/c_sede.php");
			//Redireccionar a la misma página
			echo  '<script> window.location ="../controlador/c_sede.php" </script>';
		}
		public function Update(){
			require_once("../modelo/m_sede.php");
			$this->modelo=new M_Sede();
			$descripcion = $_POST['txtdescripcion'];
            $direccion = $_POST['txtdireccion'];
            $telefono = $_POST['txttelefono'];
            $id_oficina = $_POST['id'];

            $this->modelo->Update_Sede($descripcion, $direccion, $telefono, $id_oficina);
            echo  '<script> window.location ="../controlador/c_sede.php" </script>';
		}
		public function Eliminar(){
			require_once("../modelo/m_sede.php");
			$this->modelo=new M_Sede();
			$id_oficina=$_POST['id_oficina'];
			$this->modelo->Eliminar_Sede($id_oficina);

			echo  '<script> window.location ="../controlador/c_sede.php" </script>';
		}

		public function MostrarFicha(){
			require_once("../modelo/m_sede.php");
			$this->modelo=new M_Sede();
			require_once("../vista/v_sede.php");
		}
	}  
?>