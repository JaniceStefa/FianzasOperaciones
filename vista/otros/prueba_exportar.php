<div class="container">
 <h2>Exportar datos a Excel con PHP y MySQL</h2>

 <div class="well-sm col-sm-12">
 <div class="btn-group pull-right">
 <form action=" <?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
 <button type="submit" id="export_data" name='export_data'
value="Export to excel" class="btn btn-info">Exportar a Excel</button>
 </form>
 </div>
 </div>

 <table id="" class="table table-striped table-bordered">
 <tr>
 <th>Titulo</th>
 <th>ISBN</th>
 <th>Autor</th>
 <th>Editorial</th>
 </tr>

 <tbody>
 <?php foreach($this->modelo->Mostrar_CF_Archi() as $libro) { ?>
 <tr>
 <td><?php echo $libro ['nombre_empresa']; ?></td>
 <td><?php echo $libro ['nombre_entidad']; ?></td>
 <td><?php echo $libro ['descripcion_tipo']; ?></td>
 <td><?php echo $libro ['cod_carta_fianza']; ?></td>
 </tr>
 <?php } ?>
 </tbody>
 </table>
</div>
<?php
?>