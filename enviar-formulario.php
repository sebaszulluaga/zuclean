<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $mensaje = $_POST['mensaje'];

  // Configura los detalles del correo electrónico
  $destinatario = 'sebastianzuca@hotmail.com';
  $asunto = 'Pagina de limpieza pisos julian';
  $cuerpo = "Nombre: $nombre\nCorreo: $correo\nMensaje: $mensaje";

  // Envía el correo electrónico
  $resultado = mail($destinatario, $asunto, $cuerpo);

  if ($resultado) {
    echo '¡Gracias por tu mensaje! Nos pondremos en contacto contigo pronto.';
  } else {
    echo 'Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.';
  }
}
?>
