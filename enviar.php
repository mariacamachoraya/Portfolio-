<?php

//llamando a los campos
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$mensaje = $_POST["mensaje"];

//datos para el correro
$destinatario = "mariacamachoraya@hotmail.com";
$asunto = "Contacto desde la web";

$carta = "De: $nombre \n";
$carta.= "Correo: $correo \n ";
$carta.= "Mensaje $mensaje";

//enviando correo
mail($destinatario, $asunto, $carta);
header("Location: mensaje-de-envio.html");

?>