<?php 
$name = $_POST['name'];
$mail = $_POST['mail'];
$asun = $_POST['asun'];
$message = $_POST['message'];

$header = 'From: ' . $mail . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Asunto de contacto: " . $asun . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/y', time());

$para = 'markeelectronico@gmail.com';
$asunto = 'Asunto del mensaje';

mail($para, $asunto, utf8_decode($message), $header);

header("Location: enviado.html")
?>