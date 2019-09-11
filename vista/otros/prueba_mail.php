<?php
//$headers =  'MIME-Version: 1.0' . "\r\n"; 
//$headers .= 'From: Your name <info@address.com>' . "\r\n";
//$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

//mail("jasraf.698@gmail.com","asunto prueba","Este es el cuerpo del mensaje",$headers);
require_once("../controlador/c_cf_pendiente.php")
foreach($this->modelo->Mostrar_CF() as $registro){
    $email = str($registro["email"]) ;
}


$to = $email;

$subject = "Asunto del email - prueba mailing";
$message = "Este es mi primer envío de email con PHP";
$headers = "From: 73353800@continental.edu.pe" . "\r\n" . "CC: destinatarioencopia@eail.com";
 
$result= mail($to, $subject, $message, $headers);
var_dump($result);
?>
