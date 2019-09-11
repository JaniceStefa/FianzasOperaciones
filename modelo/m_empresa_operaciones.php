<?php 
	class M_Empresa{
		private $db;
		private $empresa;
		// Conexion con Base de Datos
		public function __construct(){
			require_once("conectar_bd.php");
			$this->db=Conectar::conexion();
			$this->empresa=array();
		}
		// Agregar Nuevo Presupuesto a Base de Datos
		public function Agregar_Empresa($ruc_empresa,$nombre_empresa,$contacto_dni,$contacto_nombre, $contacto_apellido,$contacto_email,$contacto_telefono, $contacto_direccion, $id_oficina, $tipo_servicio){
			$sql="CALL EMPRESA_A('".$ruc_empresa."','".$nombre_empresa."','".$contacto_dni."','".$contacto_nombre."','".$contacto_apellido."','".$contacto_email."','".$contacto_telefono."','".$contacto_direccion."','".$id_oficina."','".$tipo_servicio."')";
			$this->db->query($sql);
		}
		public function Agregar_Consorcio($nombre_empresa,$contacto_dni,$contacto_nombre, $contacto_apellido,$contacto_email,$contacto_telefono, $contacto_direccion, $id_oficina, $tipo_servicio){
			$sql="CALL CONSORCIO_A('".$nombre_empresa."','".$contacto_dni."','".$contacto_nombre."','".$contacto_apellido."','".$contacto_email."','".$contacto_telefono."','".$contacto_direccion."','".$id_oficina."','".$tipo_servicio."')";
			$this->db->query($sql);
		}
		public function Agregar_Institucion($ruc, $nombre_empresa,$contacto_dni,$contacto_nombre, $contacto_apellido,$contacto_email,$contacto_telefono, $contacto_direccion, $id_oficina, $tipo_servicio, $id_cat){
			$sql="CALL INSTITUCION_A('".$ruc."','".$nombre_empresa."','".$contacto_dni."','".$contacto_nombre."','".$contacto_apellido."','".$contacto_email."','".$contacto_telefono."','".$contacto_direccion."','".$id_oficina."','".$tipo_servicio."','".$id_cat."')";
			$this->db->query($sql);
		}
		//Modificar Datos del Presupuesto
		public function Update_Empresa($ruc_empresa,$nombre_empresa,$contacto_dni,$contacto_nombre, $contacto_apellido,$contacto_email,$contacto_telefono, $contacto_direccion, $id_empresa){
			$sql="CALL EMPRESA_U('".$ruc_empresa."','".$nombre_empresa."','".$contacto_dni."','".$contacto_nombre."','".$contacto_apellido."','".$contacto_email."','".$contacto_telefono."','".$contacto_direccion."','".$id_empresa."')";
			$this->db->query($sql);
		}

		public function Update_Institucion($ruc_empresa,$nombre_empresa,$contacto_dni,$contacto_nombre, $contacto_apellido,$contacto_email,$contacto_telefono, $contacto_direccion, $id_institucion){
			$sql="CALL INSTITUCION_U('".$ruc_empresa."','".$nombre_empresa."','".$contacto_dni."','".$contacto_nombre."','".$contacto_apellido."','".$contacto_email."','".$contacto_telefono."','".$contacto_direccion."','".$id_institucion."')";
			$this->db->query($sql);
		}

		public function Asociar_Empresa($ruc_empresa,$nombre_empresa,$contacto_dni,$contacto_nombre, $contacto_apellido,$contacto_email,$contacto_telefono, $contacto_direccion, $id_consorcio){
			$sql="CALL SOCIOS_A('".$ruc_empresa."','".$nombre_empresa."','".$contacto_dni."','".$contacto_nombre."','".$contacto_apellido."','".$contacto_email."','".$contacto_telefono."','".$contacto_direccion."','".$id_consorcio."')";
			$this->db->query($sql);
		}
		
		public function Mostrar_Institucion(){
			$sql=$this->db->query("CALL INSTITUCION_S");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->empresa[]=$filas;
			}
			return $this->empresa;
		}

		public function Mostrar_Empresa(){
			$sql=$this->db->query("CALL EMPRESA_S");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->empresa[]=$filas;
			}
			return $this->empresa;
		}

		public function Consultar_Empresa($id_empresa){
			$sql=$this->db->query("CALL CONSULTAR_EMPRESA('".$id_empresa."')");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->elemento[]=$filas;
			}
			return $this->elemento;
		}
		public function Consultar_Consorcio($id_consorcio){
			$sql=$this->db->query("CALL CONSULTAR_CONSORCIO('".$id_consorcio."')");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->elemento[]=$filas;
			}
			return $this->elemento;
		}
		public function Consultar_Socios($id_consorcio){
			$sql=$this->db->query("CALL CONSULTAR_SOCIOS('".$id_consorcio."')");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->elemento[]=$filas;
			}
			return $this->elemento;
		}
		public function Consultar_Socios_Total($id_consorcio){
			$sql=$this->db->query("CALL CONSULTAR_SOCIOS_TOTAL('".$id_consorcio."')");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->elemento[]=$filas;
			}
			return $this->elemento;
		}
		public function Consultar_Documentos(){
			$sql=$this->db->query("CALL DOCUMENTO_S");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->empresa[]=$filas;
			}
			return $this->empresa;
		}
		public function Consultar_Categoria($id_institucion){
			$sql=$this->db->query("CALL CONSULTAR_CATEGORIA('".$id_institucion."')");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->empresa[]=$filas;
			}
			return $this->empresa;
		}

		public function Consultar_Fechas($id_empresa){
			$sql=$this->db->query("CALL CONSULTAR_DOCUMENTACION('".$id_empresa."')");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->empresa[]=$filas;
			}
			return $this->empresa;
		}

		public function Agregar_Documentacion($id_empresa, $id_doc, $fecha_entrega){
			$sql="CALL DOCUMENTO_A('".$id_empresa."','".$id_doc."','".$fecha_entrega."')";
			$this->db->query($sql);
		}

		public function Iniciar_Documentacion_Consorcio($id_tramite){
			$sql="CALL DOCUMENTACION_CONSORCIO_N('".$id_tramite."')";
			$this->db->query($sql);
		}
		public function Iniciar_Documentacion_Empresa($id_tramite){
			$sql="CALL DOCUMENTACION_N('".$id_tramite."')";
			$this->db->query($sql);
		}
		public function Iniciar_Documentacion_Institucion($id_institucion){
			$sql="CALL DOCUMENTACION_INSTITUCION_N('".$id_institucion."')";
			$this->db->query($sql);
		}
		
		public function Lista_Oficina(){
			$sql=$this->db->query("CALL SEDE_S");
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

		public function Evaluacion_Documentacion($id_empresa,$id_entidad,$fecha){
			$sql="CALL EVALUACION_A('".$id_empresa."','".$id_entidad."','".$fecha."')";
			$this->db->query($sql);
		}

		public function Actualizar_Evaluacion($id_empresa,$tramite_sn,$observaciones){
			$sql="CALL EVALUACION_U('".$id_empresa."','".$tramite_sn."','".$observaciones."')";
			$this->db->query($sql);
		}


		public function Eliminar_Empresa($id_empresa){
			$sql="CALL CLIENTE_D('".$id_empresa."')";
			$this->db->query($sql);
		}
		//Mostrar REPORTE
		public function ReporteSSSSS_Empresa($id_empresa){
			$sql="CALL REPORTE_EMPRESA('".$id_empresa."')";
			$this->db->query($sql);
		}
		public function Reporte_Empresa($ID){

			$sql=$this->db->query("CALL REPORTE_EMPRESA('".$ID."')");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->empresa[]=$filas;
			}
			return $this->empresa;
		}

		public function Detalles(){

			$sql=$this->db->query("CALL EMPRESA_S");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->empresa[]=$filas;
			}
			return $this->empresa;
		}
	}
?>