<?php

    include "db.php";

    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    $insertar = "INSERT INTO `contacto` (`nombre`, `telefono`, `correo`, `mensaje`) VALUES 
    ('$nombre', '$telefono', '$correo', '$mensaje')";

    $resultado = mysqli_query($conexion, $insertar) or die ("Error para registrar los datos");

    mysqli_close ($conexion);
    echo '<script type="text/javascript"> alert("Mensaje Enviado");
    window.location="contact.html";</script>';

?>