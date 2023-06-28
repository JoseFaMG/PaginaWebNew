<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class= "header">
        <div class="menu container">
            <a href="#" class="logo">logo</a>
            <input type="checkbox" id="menu">
            <label for="menu">
                <img src="img/images/menu.png" class="menu-icono" alt="">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="../bienbenido.php">Inicio</a></li>
                    
                </ul>
            </nav>
        </div>
        <div class="header-content container">
            <div class="header-txt">
                <h1>Renta de salones</h1>
                <p> 
                    Podemos encontrarte todos los salones, casas, edificios que tu quieras
                    solo ve las opciones y dinos cual te gustaria
                </p>
                <a href="#" class="btn-1">Informacion</a>
            </div>
        </div>
    </header> 

    <section class="direction container">
        <p>CDMX y EDOMEX </p>
        <p>Rentadesalon@gmail.com</p>
        <p>+5515789345</p>
    </section>     
    <section class="about container">
        <div class="about-img">
            <img src="img/images/i1.jpg" alt="">
        </div>
        <div class="about-txt">
            <h2>nosotros</h2>
            <p>
                Somos un grupo dedicado a rentarte cualquier tipo de edificios
                solo para que te la pases bien y que tengas un buen dia 
                con todos y tu familia
            </p>
            <a href="#" class="btn-1">Informacion</a>
        </div>
    </section>
    <main class="Informacion container">
        <div class="Informacion-1">
            <h3>185</h3>
            <p>edificios</p>
        </div>
        <div class="Informacion-1">
            <h3>110</h3>
            <p>Salones de fiesta</p>
        </div>
        <div class="Informacion-1">
            <h3>20</h3>
            <p>casas</p>
        </div>
        <div class="Informacion-1">
            <h3>50</h3>
            <p>casas de playa</p>
        </div>
    </main>
    <section class="house">
        <div class="house-1 txt">
            <span>01</span>
            <h3>casa lorem</h3>
            <p>disponible</p>
        </div>
        <div class="house-2 txt">
            <span>02</span>
            <h3>casa lorem</h3>
            <p>disponible</p>
        </div>
        <div class="house-3 txt">
            <span>03</span>
            <h3>casa lorem</h3>
            <p>disponible</p>
        </div>

        <div class="house-4 txt">
            <span>04</span>
            <h3>casa lorem</h3>
            <p>disponible</p>
        </div>
        <div class="house-5 txt">
            <span>05</span>
            <h3>casa lorem</h3>
            <p>disponible</p>
        </div>
    </section>
    <footer class="footer container">
        <div class="footer-content">
            <div class="footer-form">
                <h2>registro</h2>
                <form id="registration-form">
                    <input class="campo" type="text" placeholder="nombre" id="Name">
                    <input class="campo" type="email" placeholder="correo" id="Email">
                    <input class="campo" type="phone" placeholder="telefono" id="Phone">
                    <input class="campo" type="home" placeholder="domicilio" id="Address">
                    <input type="date" id="BookingDate" placeholder="Fecha de reserva" class="campo" name=""><br>
                    <textarea class="campo" cols="30" rows="10"></textarea>
                    <input class="btn-2" type="submit" value="enviar">
                </form>
            </div> 
            <div class="footer-txt">
                <h3>5515778243</h3>
                <p>Info@info.com</p>
                <p>Info@info.com</p>
                <p>CDMX </p>
            </div>
        </div>
        <div class="footer-2">
            <p> Christian Delgado </p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#registration-form').submit(function(event) {
                event.preventDefault(); // Detener el comportamiento predeterminado del formulario

                var N, E, P, B, A;
                N = $('#Name').val();
                E = $('#Email').val();
                P = $('#Phone').val();
                B = $('#BookingDate').val();
                A = $('#Address').val();

                if (N.trim() === '' || E.trim() === '' || P.trim() === '' || B.trim() === '' || A.trim() === '') {
                    alert("Por favor, completa todos los campos.");
                } else {
                    // Crear un objeto de datos a enviar al servidor
                    var data = {
                        name: N,
                        email: E,
                        phone: P,
                        bookingDate: B,
                        address: A
                    };

                    // Realizar la solicitud AJAX
                    $.ajax({
                        url: "conexion.php", // Ruta al archivo PHP en tu servidor
                        type: "POST",
                        data: data,
                        success: function(response) {
                            // Manipular la respuesta del servidor
                            alert("Tu registro se envió correctamente.");
                            // Actualizar el contenido de la página o mostrar mensaje de éxito
                            // Ejemplo:
                            $('#result-message').text("Registro enviado correctamente.");
                        },
                        error: function(xhr, status, error) {
                            // Manejar errores de la solicitud
                            console.error(error);
                            alert("Ocurrió un error al enviar el registro.");
                        }
                    });
                }
            });
        });
    </script>
    <div id="result-message"></div>  
    <a class="Document" href="/index.html">NUBOX live</a>
</body>
</html>
