<?php
	session_start();
    $controlador=new C_Renovacion();
    $controlador->Admi();
    if (isset($_POST['update']))
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
		$controlador->Update($dest_path);
	}
	class C_Renovacion{

		private $modelo;
		private $modelo1;
		private $modelo2;

		public function Admi(){
			require_once("../modelo/m_renovacion.php");
			$this->modelo=new M_Renovacion();
			$this->modelo1=new M_Renovacion();
			require_once("../vista/v_consulta_renovaciones_pagos.php");
		}
		public function Update($dest_path)
		{
			require_once("../modelo/m_renovacion.php");
			$id = $_POST['id'];
			$this->modelo2=new M_Renovacion();
			if(isset($_POST['estado']))
			{
			    $option = $_POST['estado']; 
			}
			if ($option == "cancelado") {
				$tramiteEstado=0; // cancelado
				$saldo=0; // cancelado
			}
			if ($option == "vigente") {
				$tramiteEstado=1; // vigente
				$saldo=$_POST['saldo'];
			}
			unset($_POST['update']);
            $this->modelo2->Update_Prima($id, $tramiteEstado, $saldo,$dest_path);
            echo  '<script> window.location ="../controlador/c_renovacion_pagos.php?"</script>';
		}
	}  
?>