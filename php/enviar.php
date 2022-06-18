<?php
$nombre= $_POST['nombre'];
$mail= $_POST['email'];
$empresa=$_POST['mensaje'];

$header='From '. $mail ."\r\n";
$header .="Mime-Version 1.0 /r/n";
$header .="X-Mailer: PHP/" . phpversion(). "\r\n";
$header .="Content-Type text/plain";

$mensaje = "este mensaje es enviado por".$nombre.",\r\n";
$mensaje .= "Su email es".$mail."\r\n";
$mensaje .= "Mensaje".$_POST['mensaje']."\r\n";
$mensaje .= "Enviado el ".date('d/m/Y', time());

$para="silvina.saucedo90@gmail.com";
$asunto="Mensaje de mi sitio web";

mail($para,$asunto,utf8_decode($mensaje),$header);

header("Location:index.html");

?>