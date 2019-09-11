<form id="DatosDocumentacion" action="../controlador/c_empresa_operaciones.php" method="post">
<div class="modal fade" id="dataStart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="smallmodalLabel">Iniciar Documentación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <input type="hidden" id="id" name="id"> 
      <div class="modal-body">
        <p>¿Está seguro que desea iniciar documentación a la fecha</p>
        <p><?php echo date("d-M-Y")?>?</p>
      </div>                   
      
      <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
      <button type="submit" name="confirmar" id="confirmar" class="btn btn-primary">Confirmar</button>
      </div>
    </div>
  </div>
</div>
</form>