<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Page-->
    <title>Cartas Fianzas Pendientes</title>
     <!--<link href="../js/jquery-ui-1.12.1.custom/jquery-ui.css" rel="stylesheet">-->
    <?php include 'complementos/head_pag.php';?>   
    <script language="javascript" type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="../js/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
</head>  

<div id="archivo_carta" style="display:none" class="modal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 70%">
        <div class="modal-content" style="height: 80%">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" name="close" onclick="closeDialog()">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="max-height: 900px">
                <iframe src="../doc/yourpdffile.pdf" class="col-lg-12" style="height: 85%"></iframe>
            </div>
        </div>
    </div>
</div> 

