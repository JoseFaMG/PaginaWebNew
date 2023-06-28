<?php
    include 'conexion_be.php';
    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contracena = $_POST['pass'];

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, pass)
             VALUES('$nombre_completo', '$correo', '$usuario', '$pass')";

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '<script>alert("Usuario almacenado correctamente");</script>';
    }
?>