<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];
    $to = 'daryork43@gmail.com'; // Reemplaza con tu dirección de correo electrónico
    $subject = 'Nuevo mensaje de formulario de contacto';
    $message = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje;
    $headers = "From: " . $correo;

    if (mail($to, $subject, $message, $headers)) {
        echo 'Mensaje enviado con éxito';
    } else {
        echo 'Error al enviar el mensaje';
    }
}
?>
