<div  id="archivoCarta" style="display:none" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" onClick="originSrc();">
	<div class="modal-dialog" role="document" style="max-width: 70%">
		<div class="modal-content" style="height: 90%">
			<div class="modal-header">
				<h5 class="modal-title" id="smallmodalLabel">Carta fianza escaneada:  </h5>
        <!--<form method="POST" id="form">
          <input type="text" name="id" id="id" value="">
          <button type="submit" class="btn" title="Mostrar archivo"><img src="../images/icon/refresh.png" style="width: 70%; height: 70%;"> </button>
        </form>-->
            <?php 
            $valor = 52;
            foreach ($this->modelo4->Consultar_Archivos($valor) as $registro) {?>
              <button type="button" class="btn-success" onClick="cfscan('<?php echo $registro['archivo'] ?>');"><img src="../images/icon/<?php echo $registro['prioridad']?>.png"></button>
            <?php
              }
            ?>
				<button type="button" class="close" onClick="originSrc();" data-dismiss="modal" aria-label="Close" name="close" >
          <span aria-hidden="true">&times;</span>
			  </button>
			</div>
      

			<div class="embed-container" style="max-height: 900px">
        <iframe width="560" height="315" id="FrameID" name="Frame" src="" class="col-lg-12"></iframe>
			</div>       
		</div>
	</div>
</div>

<script type="text/javascript">
  function cfscan(newSrc) {
    document.getElementById("FrameID").src=newSrc;
  }
  function originSrc() {
    var newSrc = ""
    document.getElementById("FrameID").src=newSrc;
  } 
  
</script>
<style>
.embed-container {
    position: relative;
    padding-bottom: 56.25%;
    height: 0;
    overflow: hidden;
}
.embed-container iframe {
    position: absolute;
    top:0;
    left: 0;
    width: 100%;
    height: 100%;
}
</style>