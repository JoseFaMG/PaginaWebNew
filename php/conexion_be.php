<?php

    $conexion = mysql_connect("localhost","root","2017452071","login_register_db");

    if($conexion){
        echo 'Conectado exitosamente a la Base de datos';
    }else{
        echo 'No se ha podido conectar a la base de datos';
    }

?>