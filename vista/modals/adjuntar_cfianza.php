<head>
<?php include '../complementos/head_pag.php';?>   
    <!--<link href="../js/jquery-ui-1.12.1.custom/jquery-ui.css" rel="stylesheet">-->
<script language="javascript" type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="../js/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
</head>

<div class="row">
        <div class="col-md-4">
            <div class="row form-group">
            <div class="col col-md-4">
                <label for="text-input" class=" form-control-label">Adjuntar archivo</label>
            </div>
            <div class="col-12 col-md-7">
                <form action="file.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="uploadedFile" id="uploadedFile"></input>
                    <input type="submit" name="uploadBtn" value="Upload"/>
                </form>
            </div>
            </div>
        </div>    
        </div>

<a href="#" id="triggesr">this link</a>
<button type="button" class="btn btn-success item" title="Visualizar" id="trigger"><i class='zmdi zmdi-eye'></i> </button>


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

<script language="javascript" type="text/javascript">
  $(document).ready(function() {
    $('#trigger').click(function(){
      $("#archivo_carta").dialog();
    }); 
  });
  function closeDialog(){
    $("#archivo_carta").dialog("close");
  }
</script>