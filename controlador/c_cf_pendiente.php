<?php
	session_start();
    //require_once("../controlador/c_presupuesto.php");
    
    $controlador=new C_CartaFianza();
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
		if (isset($_FILES['uploadedFile1']) && $_FILES['uploadedFile1']['error'] === UPLOAD_ERR_OK) 
		{
			$fileTmpPath = $_FILES['uploadedFile1']['tmp_name'];
			$fileName = $_FILES['uploadedFile1']['name'];
			$fileSize = $_FILES['uploadedFile1']['size'];
			$fileType = $_FILES['uploadedFile1']['type'];
			$fileNameCmps = explode(".", $fileName);
			$fileExtension = strtolower(end($fileNameCmps));
			$newFileName = $fileName . '.' . $fileExtension;
			$allowedfileExtensions = array('pdf');
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
	
	class C_CartaFianza{

		private $modelo;
		private $modelo1;
		private $modelo2;
		private $modelo3;
		private $modelo4;
		public function Admi(){
			require_once("../modelo/m_cartafianza.php");
			$this->modelo1=new M_CartaFianza();
			$this->modelo2=new M_CartaFianza();
			$this->modelo3=new M_CartaFianza();
			$this->modelo4=new M_CartaFianza();
			$this->modelo=new M_CartaFianza();
			require_once("../vista/v_consulta_cf_pendiente.php");
		}

		public function Agregar($dest_path){
			require_once("../modelo/m_cartafianza.php");
			$this->modelo=new M_CartaFianza();		
			$codigo = $_POST['txtnumero'];
            $fechaemision = $_POST['emision'];
            $fechavenc = $_POST['venc'];
            $idempresa = $_POST['txtempresa'];
            $identidad = $_POST['lstentidad'];
			$idoficina = $_POST['lstoficina'];
			$tipofianza = $_POST['lsttipo'];
			$totalfianza = $_POST['txtmonto'];
			$montoprima = $_POST['txtprima'];
			if (isset($_REQUEST['chkprima']))
  			{
    			$tramiteEstado=0; // cancelado
    			$saldo = 0;
    		}
    		else{
    			$tramiteEstado=1; //vigente
    			$saldo = $montoprima;
    		}
			$vigencia = $_POST['txtvigencia'];
			$email = $_POST['txtemail'];
			$telefono = $_POST['txttelef'];
            unset($_POST['aceptar']);
            
			$this->modelo->Agregar_CF($codigo, $fechaemision, $fechavenc, $idempresa, $identidad,  $idoficina, $tipofianza, $totalfianza,$vigencia,$dest_path,$email,$telefono,$montoprima,$tramiteEstado,$saldo);
			//Response.Redirect()	;	
			//header("Location: ../controlador/c_sede.php");
			//Redireccionar a la misma página
			echo  '<script> window.location ="../controlador/c_cf_pendiente.php" </script>';
		}

		public function Update($dest_path){
			require_once("../modelo/m_cartafianza.php");
			$this->modelo=new M_CartaFianza();
			$codigo = $_POST['txtnumero'];
            $fechaemision = $_POST['emision'];
            $fechavenc = $_POST['vencimiento'];
            $idempresa = $_POST['txtempresa'];
            $identidad = $_POST['lstentidad'];
			$idoficina = $_POST['lstoficina'];
			$tipofianza = $_POST['lsttipo'];
			$totalfianza = $_POST['txtmonto'];
			$vigencia = $_POST['txtvigencia'];
			$prioridad = $_POST['txtprioridad'];
			$id_cartafianza = $_POST['id'];
			$montoprima = $_POST['txtprima'];
			if (isset($_REQUEST['chkprima']))
  			{
    			$tramiteEstado=0; // cancelado
    			$saldo = 0;
    		}
    		else{
    			$tramiteEstado=1; //vigente
    			$saldo = $montoprima;
    		}
			unset($_POST['update']);
            $this->modelo->Update_CF($codigo, $fechaemision, $fechavenc, $idempresa, $identidad, $idoficina, $tipofianza, $totalfianza, $vigencia, $id_cartafianza, $dest_path, $prioridad, $montoprima, $tramiteEstado, $saldo);
            echo  '<script> window.location ="../controlador/c_cf_pendiente.php"</script>';
		}


		public function Eliminar(){
			require_once("../modelo/m_cartafianza.php");
			$this->modelo=new M_CartaFianza();
			$id=$_POST['id'];
			$this->modelo->Eliminar_CF($id);

			echo  '<script> window.location ="../controlador/c_cf_pendiente.php"</script>';
		}

		public function Detalles(){
			require_once("../modelo/m_cartafianza.php");
			$this->model=new M_CartaFianza();
			require_once("../vista/v_consulta_cf_pendiente_detalles.php");
		}

	}  

?>