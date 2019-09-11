<?php 
	class M_Entidad{
		private $db;
		private $entidad;
		// Conexion con Base de Datos
		public function __construct(){
			require_once("conectar_bd.php");
			$this->db=Conectar::conexion();
			$this->entidad=array();
		}
		// Agregar Nuevo Presupuesto a Base de Datos
		public function Agregar_Entidad($ruc_entidad, $nombre_entidad){
			$sql="CALL ENTIDAD_A('".$ruc_entidad."','".$nombre_entidad."')";
			$this->db->query($sql);
		}
		//Modificar Datos del Presupuesto
		public function Update_Entidad($ruc_entidad, $nombre_entidad,$id_entidad){
			$sql="CALL ENTIDAD_U('".$ruc_entidad."','".$nombre_entidad."','".$id_entidad. "')";
			$this->db->query($sql);
		}
		//Mostrar listado de Presupuesto
		public function Mostrar_Entidad(){

			$sql=$this->db->query("CALL ENTIDAD_S");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->entidad[]=$filas;
			}
			return $this->entidad;
		}
		//Eliminar Presupuesto
		public function Eliminar_Entidad($id_entidad){
			$sql="CALL ENTIDAD_D('".$id_entidad."')";
			$this->db->query($sql);
		}

	}
?>