<?php

 include('../modelo/conectar_bd.php');

 $action = $_REQUEST['action'];
 
 if($action=="showAll"){
  
  $stmt=$dbcon->prepare('SELECT descripcion_tipo FROM tipo_fianza');
  $stmt->execute();
  
 }else{
  
  $stmt=$dbcon->prepare('SELECT descripcion_tipo FROM tipo_fianza');
  $stmt->execute(array(':cid'=>$action));
 }
 
 ?>
 <div class="row">
 <?php
 if($stmt->rowCount() > 0){
  
  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
  {
   extract($row);
 
   ?>
   <div class="col-xs-3">
   <div style="border-radius:3px; border:#cdcdcd solid 1px; padding:22px;"><?php echo $product_name; ?></div><br />
   </div>
   <?php  
  }
  
 }else{
  
  ?>
        <div class="col-xs-3">
   <div style="border-radius:3px; border:#cdcdcd solid 1px; padding:22px;"><?php echo $product_name; ?></div><br />
  </div>
        <?php  
 }
 
 
 ?>
 </div>