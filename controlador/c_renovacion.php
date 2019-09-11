<?php
	session_start();
    $controlador=new C_Renovacion();
    $controlador->Admi();

	class C_Renovacion{

		private $modelo;
		private $modelo1;

		public function Admi(){
			require_once("../modelo/m_renovacion.php");
			$this->modelo=new M_Renovacion();
			$this->modelo1=new M_Renovacion();
			require_once("../vista/v_renovacion.php");
		}
	}  
?>