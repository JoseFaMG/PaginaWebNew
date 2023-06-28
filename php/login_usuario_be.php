<?php

    session_start();

    include ´conexion_be.php´;

    $correo = $_POST[´correo´];
    $contrasena = $_POST[´contrasena´];
    $contrasena = hash(´sha512´, $contrasena);

    $validar_login = mysql_query($conexion, "SELEC * FROM usuarios WHERE correo =´$correo´ and contrasena=´$contrasena´");
    
    if(mysql_num_rowa($validad_login) > 0){
        $_SESSION[´usuario´] = $correo;
        header("location: bienvenida.php");
        exit;    
    }else{
        echo ´
            <script>
                alert("Usuario no existe, por favor verifique los datos introducidos");
                window.location = "../indexphp";
            </script>    
        ´;
        exit;

    }
?>
