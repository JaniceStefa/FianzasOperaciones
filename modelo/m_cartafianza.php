<?php 
	class M_CartaFianza{
		private $db;
		private $elemento;
		// Conexion con Base de Datos
		public function __construct(){
			require_once("conectar_bd.php");
			$this->db=Conectar::conexion();
			$this->elemento=array();
		}
		// Agregar Nuevo Presupuesto a Base de Datos
		public function Agregar_CF($cod_carta_fianza, $fecha_emision, $fecha_venc, $id_empresa, $id_entidad, $id_oficina, $id_tipo_fianza, $total_fianza, $vigencia, $archivo,$email,$telefono,$montoprima, $tramiteestado,$saldo)
		{
			$sql="CALL FIANZA_A('".$cod_carta_fianza."','".$fecha_emision."','".$fecha_venc."','".$id_empresa."','".$id_entidad."','".$id_oficina."','".$id_tipo_fianza."','".$total_fianza."','".$vigencia ."','". $archivo."','".$email."','".$telefono."','".$montoprima."','".$tramiteestado."','".$saldo."')";
			$this->db->query($sql);
		}
		public function Validar_CF($cod_carta_fianza)
		{
			$sql=$this->db->query("CALL VALIDAR_DUPLICADOS('".$cod_carta_fianza."')");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->elemento[]=$filas;
			}
			return $this->elemento;
		}
		//Modificar Datos del Presupuesto
		public function Update_CF($cod_carta_fianza, $fecha_emision, $fecha_venc, $id_empresa, $id_entidad, $id_oficina, $id_tipo_fianza, $total_fianza, $vigencia, $id_cartafianza, $archivo, $prioridad,$montoprima, $tramiteestado,$saldo){
			$sql="CALL FIANZA_U('".$id_cartafianza."','".$cod_carta_fianza."','".$fecha_emision."','".$fecha_venc."','".$id_empresa."','".$id_entidad."','".$id_oficina."','".$id_tipo_fianza."','".$total_fianza."','".$vigencia ."','".$archivo."','".$prioridad."','".$montoprima."','".$tramiteestado."','".$saldo."')";
			$this->db->query($sql);
		}
		//Mostrar listado de Presupuesto
		public function Mostrar_CF(){

			$sql=$this->db->query("CALL FIANZA_S");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->elemento[]=$filas;
			}
			return $this->elemento;
		}

		public function Mostrar_CF_Archi(){

			$sql=$this->db->query("CALL FIANZA_S_ARCHI");
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

		public function Consultar_Archivos($id_cartafianza){

			$sql=$this->db->query("CALL CONSULTA_SCAN('".$id_cartafianza."')");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->elemento[]=$filas;
			}
			return $this->elemento;
		}

		//Eliminar Presupuesto
		public function Eliminar_CF($id_cartafianza){
			$sql="CALL FIANZA_D('".$id_cartafianza."')";
			$this->db->query($sql);
		}


		public function Lista_Tipo(){
			$sql=$this->db->query("CALL GET_LISTATIPOFIANZA");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->elemento[]=$filas;
			}
			return $this->elemento;
		}
		public function Lista_Entidad(){
			$sql=$this->db->query("CALL ENTIDAD_S");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->elemento[]=$filas;
			}
			return $this->elemento;
		}
		public function Lista_Oficina(){
			$sql=$this->db->query("CALL SEDE_S");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->elemento[]=$filas;
			}
			return $this->elemento;
		}
		public function Consulta_Mail(){
			$ql = $this->db->query("CALL CONSULTA_MAIL");
			while($filas = $sql->fetch(PDO::FETCH_ASSOC)){
				$this->elemento[]=$filas;
			}
			return $this->elemento;
		}
	}
?>