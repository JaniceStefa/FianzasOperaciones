<?php 
	class M_Sede{
		private $db;
		private $entidad;

		// Conexion con Base de Datos
		public function __construct(){
			require_once("conectar_bd.php");
			$this->db=Conectar::conexion();
			$this->entidad=array();
		}
		// Agregar Nuevo Sede a Base de Datos
		public function Agregar_Sede($descripcion, $direccion, $departamento, $telefono){
			$sql="CALL SEDE_A('".$descripcion."','".$direccion."','".$departamento."','".$telefono."')";
			$this->db->query($sql);
		}
		//Actualizar datos de una sede
		public function Update_Sede($descripcion, $direccion, $telefono, $id_oficina){
			$sql="CALL SEDE_U('".$descripcion."','".$direccion."','".$telefono."','".$id_oficina."')"; 	
			$this->db->query($sql);
		}
		//Mostrar listado de Sedes 
		public function Mostrar_Sede(){

			$sql=$this->db->query("CALL SEDE_S");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->entidad[]=$filas;
			}
			return $this->entidad;
		}
		// Eliminar Sede de la lista
		public function Eliminar_Sede($id_oficina){
			$sql="CALL SEDE_D('".$id_oficina."')";
			$this->db->query($sql);
		}

		//Obtenie listado de Departamentos
		public function Listas(){
			$sql=$this->db->query("CALL GET_LISTA_DEP");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->entidad[]=$filas;
			}
			return $this->entidad;
		}

	}
?>