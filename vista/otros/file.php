<?php if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Upload') 
    {
        if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK) 
        {
            $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
            $fileName = $_FILES['uploadedFile']['name'];
            $fileSize = $_FILES['uploadedFile']['size'];
            $fileType = $_FILES['uploadedFile']['type'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));
            //$newFileName = md5(time() . $fileName) . '.' . $fileExtension;
            //echo $newFileName;
            $allowedfileExtensions = array('jpg', 'pdf', 'png');
            if (in_array($fileExtension, $allowedfileExtensions)) {
                $uploadFileDir = '../doc/';
                $dest_path = $uploadFileDir . $fileName;
                 
                if(move_uploaded_file($fileTmpPath, $dest_path))
                {
                  $message ='Archivo subido correctamente';
                }
                else
                {
                  $message = 'Error al subir el archivo al directorio principal';
                }
            }       
            echo $message;
        }
    }
?>
