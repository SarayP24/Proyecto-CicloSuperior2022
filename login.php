<?php

    include "db.php";

    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['contrasenia'];

    $sql = "SELECT usuario, contrasenia FROM admin WHERE usuario ='$usuario' and contrasenia='$contrasenia'";
    $resultado = mysqli_query($conexion, $sql);
    $row = mysqli_fetch_assoc($resultado);

    if($row!=0) {
        header("Location:login.html");
    }else{
        header("Location:contratas.php");
    }

?>