<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$Email = $_POST['Email'];
$mensaje = $_POST['mensaje'];

$destinatario = "benjamintruitrui9@gmail.com";
$asunto = "Solicitud de Inscripción en taller de verano - Shuffle Básico";

// Crear el cuerpo del mensaje
$carta = "De: $nombre \n";
$carta .= "Whatsapp: $telefono \n";
$carta .= "Correo: $Email \n";
$carta .= "Mensaje: $mensaje \n";

// Enviar el correo
mail($destinatario, $asunto, $carta);

// Redirigir a una página de confirmación
header('Location: mensaje-enviado.php');
?>
