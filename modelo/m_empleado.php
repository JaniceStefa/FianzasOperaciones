<?php 
	class M_Empleado{
		private $db;
		private $elemento;
		// Conexion con Base de Datos
		public function __construct(){
			require_once("conectar_bd.php");
			$this->db=Conectar::conexion();
			$this->elemento=array();
		}
		// Agregar Nuevo Presupuesto a Base de Datos
		public function Agregar_Empleado($dni,$apellido, $nombre, $email, $telefono, $id_oficina)
		{
			$sql="CALL EMPLEADO_A('".$dni."','".$apellido."','".$nombre."','".$email."','".$telefono."','".$id_oficina."')";
			$this->db->query($sql);
		}
		//Modificar Datos del Presupuesto
		public function Update_Empleado($dni,$apellido, $nombre, $email, $telefono, $id_empleado){
			$sql="CALL EMPLEADO_U('".$dni."','".$apellido."','".$nombre."','".$email."','".$telefono."','".$id_empleado."')";
			$this->db->query($sql);
		}
		//Mostrar listado de Presupuesto
		public function Mostrar_Empleado(){

			$sql=$this->db->query("CALL EMPLEADO_S");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->elemento[]=$filas;
			}
			return $this->elemento;
		}
		//Eliminar Presupuesto
		public function Eliminar_Empleado($id_empleado){
			$sql="CALL EMPLEADO_D('".$id_empleado."')";
			$this->db->query($sql);
		}
		public function Lista_Oficina(){
			$sql=$this->db->query("CALL SEDE_S");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->elemento[]=$filas;
			}
			return $this->elemento;
		}
	}
?>