<?php
	session_start();
    //require_once("../controlador/c_presupuesto.php");
    $controlador=new C_CartaFianza();
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

	class C_CartaFianza{

		private $modelo;

		public function Admi(){
			require_once("../modelo/m_cartafianza.php");
			$this->modelo=new M_CartaFianza();
			require_once("../vista/v_consulta_cf_pendiente.php");
		}

		public function Agregar(){
			require_once("../modelo/m_cartafianza.php");
			$this->modelo=new M_CartaFianza();		
			$codigo = $_POST['txtcod'];
            $fechaemision = $_POST['txtfemision'];
            $fechavenc = $_POST['txtfvenc'];
            $idempresa = $_POST['txtempresa'];
            $identidad = $_POST['txtentidad'];
            $idestado = '1';
			$idoficina = '89';
			$tipofianza = $_POST['txttipo'];
			$totalfianza = $_POST['txttotal'];
            unset($_POST['aceptar']);
			$this->modelo->Agregar_CF($codigo, $fechaemision, $fechavenc, $idempresa, $identidad, $idestado, $idoficina, $tipofianza, $totalfianza);
			//Response.Redirect()	;	
			//header("Location: ../controlador/c_sede.php");
			//Redireccionar a la misma página
			echo  '<script> window.location ="../controlador/c_cf_pendiente.php" </script>';
		}

		public function Cambiar(){
			require_once("../modelo/m_cartafianza.php");
			$this->modelo=new M_CartaFianza();
			$codigo = $_POST['txtcod'];
            $fechaemision = $_POST['txtfemision'];
            $fechavenc = $_POST['txtfvenc'];
            $idempresa = $_POST['txtempresa'];
            $identidad = $_POST['txtentidad'];
            $idestado = '1';
			$idoficina = '89';
			$tipofianza = $_POST['txttipo'];
			$totalfianza = $_POST['txttotal'];
			$id_cartafianza = $_POST['id'];

            $this->modelo->Update_CF($codigo, $fechaemision, $fechavenc, $idempresa, $identidad, $idestado, $idoficina, $tipofianza, $totalfianza,$id_cartafianza);
            echo  '<script> window.location ="../controlador/c_cf_pendiente.php" </script>';
		}


		public function Eliminar(){
			require_once("../modelo/m_cartafianza.php");
			$this->modelo=new M_CartaFianza();
			$id_oficina=$_POST['id_oficina'];
			$this->modelo->Eliminar_CF($id_oficina);

			echo  '<script> window.location ="../controlador/c_cf_pendiente.php" </script>';
		}
		public function Consultas(){
			require_once("../modelo/m_cartafianza.php");
			$this->modelo=new M_CartaFianza();
			$pieData = $_POST['id'];
			$this->modelo->Eliminar_CF($id);
		}

	}  

?>