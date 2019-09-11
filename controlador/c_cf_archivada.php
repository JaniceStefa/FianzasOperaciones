<?php
	session_start();
    //require_once("../controlador/c_presupuesto.php");
    $controlador=new C_CartaFianza();
    $controlador->Admi();

    $modelo=new M_CartaFianza();
    $modelo->Mostrar_CF_Archi();

    /*if(isset($_POST["export_data"])) {
	 if(!empty($modelo->Mostrar_CF_Archi())) {
		 $filename = "reporte.xls";
		 header("Content-Type: application/vnd.ms-excel");
		 header("Content-Disposition: attachment; filename=".$filename);

		 $mostrar_columnas = false;

		 foreach($modelo->Mostrar_CF_Archi() as $registro) {
		 if(!$mostrar_columnas) {
			 //echo implode("\t", array_keys($registro)) . "\n";
			 $mostrar_columnas = true;
			 }
			 //echo implode("\t", array_values($registro)) . "\n";
			 }

		 }else{
		 echo 'No hay datos a exportar';
		 }
		 exit;
	}*/

	class C_CartaFianza{

		private $modelo;
		public function Admi(){
			require_once("../modelo/m_cartafianza.php");
			$this->modelo=new M_CartaFianza();
			require_once("../vista/v_consulta_cf_archivada.php");
		}
	}  
?>