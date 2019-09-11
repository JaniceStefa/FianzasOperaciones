<?php
	session_start();
    //require_once("../controlador/c_presupuesto.php");
    $controlador=new C_Cheque();
    $controlador->Admi();

    if (isset($_POST['aceptar']))
    {       
        if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK) 
		{
			$fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
			$fileName = $_FILES['uploadedFile']['name'];
			$fileSize = $_FILES['uploadedFile']['size'];
			$fileType = $_FILES['uploadedFile']['type'];
			$fileNameCmps = explode(".", $fileName);
			$fileExtension = strtolower(end($fileNameCmps));
			$newFileName = $fileName . '.' . $fileExtension;
			$allowedfileExtensions = array('jpg', 'pdf', 'png');
			if (in_array($fileExtension, $allowedfileExtensions)) {
				$uploadFileDir = '../doc/';
				$dest_path = $uploadFileDir . $fileName;
				 echo $dest_path;
				if(move_uploaded_file($fileTmpPath, $dest_path))
				{
				  $message ='Archivo subido correctamente';
				}
				else
				{
				  $message = 'Error al subir el archivo al directorio principal';
				}
			}		
		}
        $controlador->Agregar($dest_path);
	}
	if (isset($_POST['delete']))
    {
        $controlador->Eliminar();
	}
	if (isset($_POST['update']))
	{
		$controlador->Update();
	}
	if (isset($_POST['estado_cheque']))
    {
    	$controlador->Estado();
    }

	class C_Cheque{

		private $modelo;
		private $modelo1;

		public function Admi(){
			require_once("../modelo/m_cheque.php");
			$this->modelo1=new M_Cheque();
			$this->modelo=new M_Cheque();
			require_once("../vista/v_cheques.php");
		}

		public function Agregar($dest_path){
			require_once("../modelo/m_cheque.php");
			$this->modelo=new M_Cheque();		
			$numero = $_POST['txtnumero'];
            $empresa = $_POST['txtempresa'];
            $monto = $_POST['txtmonto'];
            $banco = $_POST['txtbanco'];
            $fechagiro = $_POST['fgiro'];
			$fechacobrar = $_POST['fcobrar'];
            unset($_POST['aceptar']);
			$this->modelo->Agregar_cheque($numero, $empresa, $monto, $banco, $fechagiro, $fechacobrar, $dest_path);
			echo  '<script> window.location ="../controlador/c_cheque.php" </script>';
		}

		public function Update(){
			require_once("../modelo/m_cheque.php");
			$this->modelo=new M_Cheque();
			$numero = $_POST['txtnumero'];
            $empresa = $_POST['txtempresa'];
            $monto = $_POST['txtmonto'];
            $banco = $_POST['txtbanco'];
            $fechagiro = $_POST['fgiro'];
			$fechacobrar = $_POST['fcobrar'];
			$archivo = $_POST['archivo'];
			$id_cheque = $_POST['id'];

            $this->modelo->Update_cheque($numero, $empresa, $monto, $banco, $fechagiro, $fechacobrar, $archivo, $id_cheque);
            echo  '<script> window.location ="../controlador/c_cheque.php" </script>';
		}

		public function Eliminar(){
			require_once("../modelo/m_cheque.php");
			$this->modelo=new M_Cheque();
			$id=$_POST['id'];
			$this->modelo->Eliminar_cheque($id);

			echo  '<script> window.location ="../controlador/c_cheque.php" </script>';
		}

		public function Estado(){
			require_once("../modelo/m_cheque.php");
			$this->modelo=new M_Cheque();
			$id= $_POST['id'];
			$this->modelo->Estado_leido_cheque($id);

			echo  '<script> window.location ="../controlador/c_cheque.php" </script>';
		}
	}  
?>