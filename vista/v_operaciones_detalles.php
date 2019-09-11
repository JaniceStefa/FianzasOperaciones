<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Page-->
    <title>Documentación de Consorcio</title>
    <?php include 'complementos/head_pag.php';
    $cod = $cod = ($_GET['varid']);;
    //($_GET['varid']);?>   
</head>
<?php
    foreach ($this->modelo->Consultar_Categoria($cod) as $registro) { 
        if ($registro['id_cat'] == 1){
            include 'v_empresa_detalles.php';
        }
        else
        {
            include 'v_consorcio_detalles.php';
        }
    }
?>
</html>
<!-- end document-->

