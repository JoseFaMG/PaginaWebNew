<?php
    session_start();
    include 'conexionbd.php';

    $correo= $_POST['correo'];
    $contrasena= $_POST['contrasena'];

    
    $validar_login = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo ='$correo' and contrasena ='$contrasena'");
    if(mysqli_num_rows($validar_login)>0){
        $_SESSION['usuario']=$correo;
        header("location: ../index.html");
        exit;
    }else{

        echo '<script>
        alert("El usaurio no existe, favor de verificar sus datos");
        window.location = "../login.php";
        </script>';
        exit;

    }

?>