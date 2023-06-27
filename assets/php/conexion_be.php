<?php

    $conexion = mysqli_connect("localhost","root","","login_register_bd");

    if($conexion){
        echo 'Conectado exitosamente a la Base de datos';
    }else{
        echo 'No se ha podido establecer conexcion con la Base de datos';
    }

?>
