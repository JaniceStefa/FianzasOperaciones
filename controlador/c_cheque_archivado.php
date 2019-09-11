<?php
	session_start();
    $controlador=new C_Cheque();
    $controlador->Admi();

	class C_Cheque{

		private $modelo;

		public function Admi(){
			require_once("../modelo/m_cheque.php");
			$this->modelo=new M_Cheque();
			require_once("../vista/v_cheques_archivados.php");
		}
	}
?>