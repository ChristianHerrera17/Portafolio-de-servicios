<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$header = 'from: ' . $mail . "\r\n";
$header .= "X-Mailer: PHP" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message ="Este mensaje fue enviado por: " . $name . " \r\n";
$message .="Su correo electronico es: " . $email . " \r\n";
$message .="Mensaje: " . $_POST['message'] . "\r\n";
$message .="Enviado el: " . date('d/m/Y' , time());

$para = 'orlanherre2011@hotmail.com';
$asunto = 'Empleo de desarrollador';

mail ($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>

