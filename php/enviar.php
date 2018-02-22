<?php
    $destino= "contacto@regalaunaapp.com";
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];
    $contenido = "Nombre: " . $nombre . "\nCorreo: " . $Correo . "\nTelefono: " $telefono . "\nMensaje " . $mensaje;
    mail($destino,"Contacto", $contenido);
    header("Location:gracias.html")
?>