<head>
<?php include 'complementos/head_pag.php';?>   
    <!--<link href="../js/jquery-ui-1.12.1.custom/jquery-ui.css" rel="stylesheet">-->
<script language="javascript" type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="../js/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
</head>

<body>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <?php include 'complementos/header.php';?>            
        </header>
        <!-- END HEADER MOBILE-->
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <?php include 'complementos/menu.php';?>
        </aside>
        <!-- END MENU SIDEBAR-->
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <?php include 'complementos/header_desktop.php';?>
            </header>

           <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="title-5 m-b-35">CARTAS FIANZAS PENDIENTES </h3>
                                <!--BOTONES DE CONTROL-->
                                <div class="table-data__tool">
                                    <!--BUSQUEDA EN BASE DE DATOS-->
                                    <!--<div class="table-data__tool-left">   
                                        <form class="form-header" action="" method="POST">
                                        <input class="au-input au-input--xl" type="text" name="search" placeholder="Buscar código de fianza" />
                                        <button class="au-btn--submit" type="submit">
                                            <i class="zmdi zmdi-search"></i>
                                            <!-- INCLUIR STORE PROCEDURE DE BUSQUEDA DE DATOS-->
                                        <!--</button>
                                        </form>
                                    </div>-->

                                    <!--EXPORTAR DOCUMENTOS-->
                                    <div class="table-data__tool-right">                                    
                                        <!-- Button trigger modal -->
                                        <button id="btnmodificar" class="au-btn au-btn-icon au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>Modificar</button>

                                        <button id="btnnuevo" class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#agregarNuevo">
                                            <i class="zmdi zmdi-plus"></i>Nuevo</button>
                                    </div>
                                </div>

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
<script type="text/javascript">
    
    $(document).ready(function() {
    $('#mytable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf', 'print'
        ]
    } );
    } );

    $('#mytable').on('click', 'tbody tr', function(event) {
       
        $(this).addClass('highlight').siblings().removeClass('highlight');
        //alert(this.getElementsByTagName('td')[0].innerHTML);
    });
    $('#btnmodificar').click(function (){
        $('#modif').click();
    });
    function fila(){
        $('#btnmodificar').removeClass('au-btn--disabled');
        $('#btnmodificar').addClass('au-btn--blue');
        document.getElementById('btnmodificar').disabled=false  ; 
    }
    $('#btnmodificar').addClass('au-btn--disabled');
    document.getElementById('btnmodificar').disabled=true;
</script>
<script>
  <?php $cod = ($_GET['variable1']);?>
  $(function() {
    var codigo = "<?php echo $cod;?>";
    $("table td:first-child:contains("+codigo+")")
      .parents("tr")
      .css("background-color", "rgba(172, 186, 212,0.7)");
  });
</script>
<script src="../assets/js/jquery.dataTables.min.js"></script>
<script src="../assets/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="../assets/js/buttons.html5.min.js"></script>
<script src="../assets/js/buttons.print.min.js"></script>
<link rel="stylesheet" type="text/css" href="../assets/css/buttons.dataTables.min.css">
<style type="text/css">
    .table-striped tbody tr.highlight td { 
        background-color: #acbad4;
    }
    label.error{
        color:red;
    }
    .au-btn--disabled{
        background: #999;
        border: #d0d0d0;
        cursor: default;
    }
    .au-btn--disabled:hover{
        background: #999;
        border: #d0d0d0;
        cursor: default;
    }
    }
</style>
</body>
</html>