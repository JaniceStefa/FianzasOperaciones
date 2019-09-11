<?php 
	session_start(); 
	class M_Usuarios
	{
		private $db;
		private $usuarios;
		// Conexion con Base de Datos
		public function __construct()
		{
			require_once("conectar_bd.php");
			$this->db=Conectar::conexion();
			$this->usuarios=array();
		}
		// Validar Inicio de Sesion (Usuario y Contraseña)
		public function UsuarioLogin($usuario,$pw)
		{
			$sql=$this->db->query("CALL VALIDAR_LOGIN('".$usuario."','".$pw."')");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC))
			{
				$this->usuarios[]=$filas;
				$_SESSION['user'] = $filas['DNI'];
				$_SESSION['privilegio']=$filas['tipo_acceso']; //Guarda el dni con el que se esta iniciando sesion 
			}
		}
	}
?>