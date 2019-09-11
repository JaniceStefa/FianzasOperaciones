<?php 
	class M_Renovacion{
		private $db;
		private $elemento;
		// Conexion con Base de Datos
		public function __construct(){
			require_once("conectar_bd.php");
			$this->db=Conectar::conexion();
			$this->elemento=array();
		}
		// Agregar Nuevo Presupuesto a Base de Datos
		public function Consulta_1()
		{
			$sql=$this->db->query("CALL CONSULTA_RENOVACION_25");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->elemento[]=$filas;
			}
			return $this->elemento;
		}
		public function Consulta_2()
		{
			$sql=$this->db->query("CALL CONSULTA_RENOVACION_20");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->elemento[]=$filas;
			}
			return $this->elemento;
		}
		public function Consulta_3()
		{
			$sql=$this->db->query("CALL CONSULTA_RENOVACION_15");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->elemento[]=$filas;
			}
			return $this->elemento;
		}
		public function Consulta_Pagos()
		{
			$sql=$this->db->query("CALL CONSULTA_RENOVACION_PAGOS");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->elemento[]=$filas;
			}
			return $this->elemento;
		}
		public function Update_Prima($id, $tramiteestado, $saldo,$voucher){
			$sql="CALL PRIMA_U('".$id."','".$tramiteestado."','".$saldo."','".$voucher."')";
			$this->db->query($sql);
		}
	}
?>