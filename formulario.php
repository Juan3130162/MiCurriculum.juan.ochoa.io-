<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "juan-8as@hotmail.es";
    $asunto = "Oportunidad de empleo";

    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Email: $email\n";
    $cuerpoMensaje .= "Mensaje: $mensaje\n";

  
    if (mail($destinatario, $asunto, $cuerpoMensaje)) {
    echo "Correo enviado con éxito";
} else {
    echo "Error al enviar el correo";
}

    
    echo '<script>alert("El correo ha sido enviado. ¡Gracias!");</script>';
    echo '<script>window.location.href = "contacto.html";</script>';
    exit();
}
?>
