<?php 
	class M_Cheque{
		private $db;
		private $elemento;
		// Conexion con Base de Datos
		public function __construct(){
			require_once("conectar_bd.php");
			$this->db=Conectar::conexion();
			$this->elemento=array();
		}
		// Agregar Nuevo Presupuesto a Base de Datos
		public function Agregar_cheque($numero, $empresa, $monto, $banco, $fechagiro,  $fechacobrar, $archivo)
		{
			$sql="CALL CHEQUE_A('".$numero."','".$empresa."','".$monto."','".$banco."','".$fechagiro."','".$fechacobrar."','".$archivo."')";
			$this->db->query($sql);
		}
		//Modificar Datos del Presupuesto
		public function Update_cheque($numero, $empresa, $monto, $banco, $fechagiro,  $fechacobrar, $archivo, $id_cheque){
			$sql="CALL CHEQUE_U('".$numero."','".$empresa."','".$monto."','".$banco."','".$fechagiro."','".$fechacobrar."','".$archivo."','".$id_cheque."')";
			$this->db->query($sql);
		}
		//Mostrar listado de Presupuesto
		public function Mostrar_cheque(){

			$sql=$this->db->query("CALL CHEQUE_S");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->elemento[]=$filas;
			}
			return $this->elemento;
		}

		public function Mostrar_cheque_archi(){

			$sql=$this->db->query("CALL CHEQUE_S_ARCHI");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->elemento[]=$filas;
			}
			return $this->elemento;
		}

		public function Consultar_CF($id_cartafianza){

			$sql=$this->db->query("CALL CONSULTA_CARTA_FIANZA('".$id_cartafianza."')");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->elemento[]=$filas;
			}
			return $this->elemento;
		}

		//Eliminar Presupuesto
		public function Eliminar_cheque($id){
			$sql="CALL CHEQUE_D('".$id."')";
			$this->db->query($sql);
		}

		public function Lista_Empresa(){
			$sql=$this->db->query("CALL EMPRESA_S");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->elemento[]=$filas;
			}
			return $this->elemento;	
		}

		public function Consulta()
		{
			$sql=$this->db->query("CALL CONSULTA_CHEQUE");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->elemento[]=$filas;
			}
			return $this->elemento;
		}
		public function Estado_leido_cheque($id){
			$sql="CALL CHEQUE_ESTADO('".$id."')";
			$this->db->query($sql);
		}
	}
?>