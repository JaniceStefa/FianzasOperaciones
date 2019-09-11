<?php
	session_start();
    $controlador=new C_Empresa();
    $controlador->Reporte();

	class C_Empresa{

		private $modelo;
		private $modelo1;

		public function Reporte(){
			require_once("../modelo/m_empresa.php");
			$this->modelo=new M_Empresa();
			$this->modelo1=new M_Empresa();
			require_once("../vista/reporte.php");
		}
	}  
?>


