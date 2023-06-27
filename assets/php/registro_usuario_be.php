<?php
    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contracena = $_POST['contracena'];

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contracena)
             VALUES('$nombre_completo','$correo','$usuario','$contracena')";

    $ejecutar = mysql_query($conexion, $query);
?>