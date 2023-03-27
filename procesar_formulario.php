<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $mensaje = $_POST['message'];

    // Dirección de correo electrónico donde se enviará el mensaje
    $destinatario = 'jfvingenieria@gmail.com';

    // Asunto del mensaje
    $asunto = 'Mensaje enviado desde formulario de contacto';

    // Construye el mensaje
    $mensaje = "De: $nombre <$email>\r\n";
    $mensaje .= "Mensaje: $mensaje\r\n";

    // Encabezados del correo electrónico
    $headers = "From: $nombre <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Envía el mensaje
    mail($destinatario, $asunto, $mensaje, $headers);

    // Redirige al usuario a una página de confirmación
    header('Location: confirmacion.html');
  }
?>