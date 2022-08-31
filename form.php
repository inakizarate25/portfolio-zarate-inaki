<?php


$nombre = $_POST ["nombre"];
$email = $_POST ["email"];
$mensaje = $_POST ["textarea"];

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje = "Su e-mail es: " . $mail . ",\r\n";
$mensaje = "Mensaje: " $_POST ["mensaje"] . ",\r\n";
$mensaje = "Enviado el " . date("d/m/y" time ()) . ;

$para = "inakizarate.dev@gmail.com";
$asunto = "Este mail fue enviado desde Mi Portfolio";



mail($para, $asunto, utf8_decode($mensaje), $header);


header("location:index.html");


