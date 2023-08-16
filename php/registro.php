<?php

    include 'conexionbd.php';
    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);

    $query = "INSERT INTO usuarios(nombre_completo, correo ,usuario, contrasena) VALUES('$nombre_completo' ,'$correo' ,'$usuario', '$contrasena')";

    $verficar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE CORREO='$correo'");

    if(mysqli_num_rows($verficar_correo)>0){
        echo '<script>
        alert("Este Correo ya esta registrado, intenta con otro diferente");
        window.location = "../login.php";
        </script>';
        exit();
    }

    $verficar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");

    // ...

if ($ejecutar) {
    // Almacenar el nombre de usuario en una variable de sesión
    $_SESSION['nombre_completo'] = $nombre_completo;
    echo '<script>
            alert("Usuario almacenado Exitosamente");
            window.location = "../login.php";
          </script>';
} 


    if(mysqli_num_rows($verficar_usuario)>0){
        echo '<script>
        alert("Este usuario ya esta registrado, intenta con otro diferente");
        window.location = "../login.php";
        </script>';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '<script>
                alert("Usuario almacenado Exitosamente");
                window.location = "../login.php";
                </script>';
    }else{
        echo '<script>
        alert("Intentalo de nuevo, usuario no almacenado");
        window.location = "../login.php";
        </script>';
    }

    mysqli_close($conexion)

?>