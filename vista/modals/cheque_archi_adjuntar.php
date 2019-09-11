<div  id="archivoCheque" style="display:none" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" onClick="originSrc();">
    <div class="modal-dialog" role="document" style="max-width: 70%">
        <div class="modal-content" style="height: 90%">
            <div class="modal-header">
                <h5 class="modal-title" id="smallmodalLabel">Cheque escaneado: </h5>
                <button type="button" class="btn" onClick="newSrc();" title="Mostrar archivo"><img src="../images/icon/refresh.png" style="width: 70%; height: 70%;"> </button>
                <button type="button" class="close" onClick="originSrc();" data-dismiss="modal" aria-label="Close" name="close" >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <input type="hidden" id="archivo" name="archivo">
            <input type="hidden" id="id" name="id">
            <div class="embed-container" style="max-height: 900px">
                <iframe width="560" height="315" id="FrameID" name="Frame" src="" class="col-lg-12"></iframe>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
  function newSrc() {
    var newSrc = document.getElementById("archivo").value;
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