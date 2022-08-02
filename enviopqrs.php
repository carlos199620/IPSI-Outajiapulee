<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

$destinatario = "krlosochoaj01@gmail.com";
$nombre = $_POST["nombredeusuario"];
$asunto = $_POST["opcion"];
$correo = $_POST["user_mail"];
$mensaje = $_POST["user_message"];
$cabecera = "correo: " . $correo;

$contenido = "Nombre: " . $nombre . "\nTipo de Solicitud: " . $asunto . "\nCorreo: " . $correo . "\n \n" . $mensaje . "\nCorreo de contacto: " . $cabecera;
$envio = @mail($destinatario,$asunto,$contenido);
header("Location:index.php");

?>