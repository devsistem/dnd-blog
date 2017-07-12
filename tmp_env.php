<?php
// Motrar todos los errores de PHP
#error_reporting(-1);
 
// No mostrar los errores de PHP
#error_reporting(0);
 
// Motrar todos los errores de PHP
#error_reporting(E_ALL);
 
// Motrar todos los errores de PHP
#ini_set('error_reporting', E_ALL);
define('WP_DEBUG_DISPLAY',true);
echo "hola";

require("/wp-includes/class-phpmailer.php");
echo "hola2";
/*
$mail = new PHPMailer();

//Luego tenemos que iniciar la validación por SMTP:
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Host = "aspmx.l.google.com";
$mail->Username = "admin@destinosydescuentos.com"; 
$mail->Password = "admin1.2"
$mail->Port = 25; 
$mail->From = "admin@destinosydescuentos.com";
$mail->FromName = "DnD"; 
$mail->AddAddress("ing.paul.cuixan@gmail.com"); 
$mail->IsHTML(true);  
$mail->Subject = "Tema"; 
$body =" Hola mundo"; 
$body .= "Aquí continuamos el mensa";
$mail->Body = $body; 
echo "antes";
$exito = $mail->Send(); // Envía el correo.

if($exito){
	 echo "El correo fue enviado correctamente";
}else{ 
	echo "Hubo un problema. Contacta a un administrador";
} */
