<?php

$id=$_GET['id'];

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
$men = $_POST['mensaje'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por: " . $nombre . ",
Con numero de contacto:" . $telefono . " \r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n" ;
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'sebastian.fpg@gmail.com';
$asunto = 'Contacto Socio Cooperador';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo"<script type=\"text/javascript\">
alert('Se ha enviado Correctamente');
 window.location='index-socio.php?id=$id';
 </script>";  
?>