<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "goyo1555@gmail.com";
    $asunto = "Nuevo mensaje del formulario de contacto";

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Correo electrónico: $correo\n";
    $contenido .= "Mensaje:\n$mensaje";

    mail($destinatario, $asunto, $contenido);

    // Redirige a una página de confirmación
    header("Location: confirmacion.html");
}
?>
