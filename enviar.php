<?php 
// asignando valores a las variales post

$target = "carlosfbg20002@gmail.com";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$asunto = $_POST["asunto"];
$mensaje = $_POST["mensaje"];

//formato del emnsaje

$msg = "Nombre: " .$nombre = "\n". "Correo: " . $correo = "\n". "Asunto: " . $asunto = "\n". "Mensaje : ". $mensaje;
$msn2 = "Gracias por enviar su mensaje";

mail($target,"Mensaje",$msg);
mail($correo,"Mensaje enviado correctamente",$msg2);
header("location:Formulario.html");