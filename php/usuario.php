<?php
     
     include 'conexionbd.php';

     $correo = $_POST['correo'];
     $contrasena = $_POST['contrasena'];

     $validar_login= mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$correo' and contrasena ='$contrasena'");

     if(mysqli_num_rows($validar_login)>0){
        header("location: ../bienbenido.php");
        exit;
    }else{
        echo '<script>
        alert("Usuario Incorrecto, por favor verifique los datos introducidos");
        windows.location = "../login.php";
        </script>';
        exit;
     }

?>