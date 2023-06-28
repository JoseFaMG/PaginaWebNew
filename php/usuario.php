<?php
     session_start();
     include 'conexionbd.php';

     $correo = $_POST['correo'];
     $contrasena = $_POST['contrasena'];
     $contrasena = hash('sha512', $contrasena);
     $nombre_completo = $_POST['nombre_completo'];
     $validar_login= mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$correo' and contrasena ='$contrasena'");
        $getnombre = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombre_completo=$nombre_completo");
     if(mysqli_num_rows($validar_login)>0){
        $_SESSION['usuario'] = $correo;
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