<?php


$nombre = $_POST ["nombre"];
$email = $_POST ["email"];
$mensaje = $_POST ["textarea"];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $nombre . " \r\n";
$message .= "Su e-mail es: " . $email . " \r\n";
$message .= "Mensaje: " . $_POST['textarea'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'inakizarate.dev@gmail.com';
$asunto = 'Mensaje de mi portfolio';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>


