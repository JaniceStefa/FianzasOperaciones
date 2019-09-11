<form id="eliminarDatos" action="../controlador/c_cf_pendiente.php" method="post">
<div class="modal fade" id="dataDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="smallmodalLabel">Archivar elemento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <input type="text" id="id" name="id"> 

      <div class="modal-body">
        <p>¿Está seguro que desea archivar la cyyyyarta fianza?</p>
      </div>                   
      
      <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
      <button type="submit" name="delete" id="delete" class="btn btn-primary">Confirmar</button>
      </div>
    </div>
  </div>
</div>
</form>