<?php
	session_start();
    //require_once("../controlador/c_presupuesto.php");
    
    $controlador=new C_CartaFianza();
	$controlador->Detalles();


	class C_CartaFianza{

		private $modelo;
		
		public function Detalles(){
			require_once("../modelo/m_cartafianza.php");
			$this->modelo=new M_CartaFianza();
			require_once("../vista/v_consulta_cf_pendiente_detalles.php");
		}

	}  

?>