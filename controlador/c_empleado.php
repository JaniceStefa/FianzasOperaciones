<?php
	session_start();
    //require_once("../controlador/c_presupuesto.php");
    $controlador=new C_Empleado();
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
        

	class C_Empleado{

		private $modelo;
		private $modelo1;

		public function Admi(){
			require_once("../modelo/m_empleado.php");
			$this->modelo=new M_Empleado();
			$this->modelo1=new M_Empleado();
			require_once("../vista/v_empleado.php");
		}

		public function Agregar(){
			require_once("../modelo/m_empleado.php");
			$this->modelo=new M_Empleado();
			$dni = $_POST['txtdni'];
			$apellido = $_POST['txtapellido'];
			$nombre = $_POST['txtnombre'];
			$email = $_POST['txtemail'];
			$telefono = $_POST['txttelefono'];
			$id_oficina = $_POST['lstoficina'];
			$this->modelo->Agregar_Empleado($dni, $apellido, $nombre, $email, $telefono, $id_oficina);
			echo  '<script> window.location ="../controlador/c_empleado.php" </script>';
		}

		public function Update(){
			require_once("../modelo/m_empleado.php");
			$this->modelo=new M_Empleado();
			$dni = $_POST['txtdni'];
			$apellido = $_POST['txtapellido'];
			$nombre = $_POST['txtnombre'];
			$email = $_POST['txtemail'];
			$telefono = $_POST['txttelefono'];
			$id_oficina = $_POST['lstoficina'];
			$id_empleado = $_POST['id'];
			$this->modelo->Update_Empleado($dni, $apellido, $nombre, $email, $telefono,$id_empleado);
			echo  '<script> window.location ="../controlador/c_empleado.php" </script>';
		}


		public function Eliminar(){
			require_once("../modelo/m_empleado.php");
			$this->modelo=new M_Empleado();
			$id_empleado = $_POST['id'];
			$this->modelo->Eliminar_Empleado($id_empleado);
			echo  '<script> window.location ="../controlador/c_empleado.php" </script>';
		}
	}  
?>