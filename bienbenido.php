<?php

    session_start();
    if(!isset($_SESSION['usuario'])){
      echo '<script>
    alert("Debe iniciar seción");
    window.location="login.php";
    </script>';
      session_destroy();
      die();
    }    
    

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="img/logo.png" />
    <title>NUBOX live</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/slider.css" rel="stylesheet" />
  </head>

  <body class="bg-light">
    <!-- Topbar Start -->
    <div class="container-fluid">
      <div class="row bg-secondary py-1 px-xl-5">
        <div class="col-lg-6 d-none d-lg-block">
          <div class="d-inline-flex align-items-center h-100">
            <!-------------------->
            <!---navbar-->
            <!------------------->
           
            <a class="text-body mr-3" href="">Sobre nosotros</a>
            <a class="text-body mr-3" href="">Contacto</a>
            <a class="text-body mr-3" href="">Sucursales</a>
            <a class="text-body mr-3" href="">Ayuda</a>
            <a class="text-body mr-3">Bienbenido, <?php echo $_SESSION['usuario']; ?></a>
            <a class="text-body mr-3" href = "php/cerrar.php">Finalizar Sesion</a>

          </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
          <div class="d-inline-flex align-items-center">
            <div class="btn-group">
              
              <div class="dropdown-menu dropdown-menu-right">
                <a href='/login.php'>Registrate</a>
                <button class="dropdown-item" type="button">
                  iniciar sesión
                </button>
              </div>
            </div>
          </div>
          <div class="d-inline-flex align-items-center d-block d-lg-none">
            <a href="" class="btn px-0 ml-2">
              <i class="fas fa-heart text-dark"></i>
              <span
                class="badge text-dark border border-dark rounded-circle"
                style="padding-bottom: 2px"
                >0</span
              >
            </a>
            <a href="" class="btn px-0 ml-2">
              <i class="fas fa-shopping-cart text-dark"></i>
              <span
                class="badge text-dark border border-dark rounded-circle"
                style="padding-bottom: 2px"
                >0</span
              >
            </a>
          </div>
        </div>
      </div>
      <div
        class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex"
      >
        <div class="col-lg-4">
          <a href="" class="text-decoration-none">
            <!--------->
            <!---logo-->
            <!--------->
            <span class="h1 text-uppercase text-primary bg-dark px-2">NUB</span>
            <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1"
              >OX</span>
          </a>
        </div>
        <div class="col-lg-4 col-6 text-left">
          <form action="">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Buscar" />
              <div class="input-group-append">
                <span class="input-group-text bg-transparent text-primary">
                  <i class="fa fa-search"></i>
                </span>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-4 col-6 text-right">
          <p class="m-0">Servicio al cliente</p>
          <h5 class="m-0">55 3653 1973</h5>
        </div>
      </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
      <div class="row px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
          <a
            class="btn d-flex align-items-center justify-content-between bg-primary w-100"
            data-toggle="collapse"
            href="#navbar-vertical"
            style="height: 65px; padding: 0 30px"
          >
            <h6 class="text-dark m-0">
              <i class="fa fa-bars mr-2"></i>Sucursales
            </h6>
            <i class="fa fa-angle-down text-dark"></i>
          </a>
          <nav
            class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light"
            id="navbar-vertical"
            style="width: calc(100% - 30px); z-index: 999"
          >
            <div class="navbar-nav w-100">
              <div class="nav-item dropdown dropright">
                <div
                  class="dropdown-menu position-absolute rounded-0 border-0 m-0"
                ></div>
              </div>
              <a href="" class="nav-item nav-link">Agricola oriental</a>
              <a href="" class="nav-item nav-link">Ayotla</a>
              <a href="" class="nav-item nav-link">Aguilas</a>
              <a href="" class="nav-item nav-link">Chalco</a>
              <a href="" class="nav-item nav-link">Condesa</a>
              <a href="" class="nav-item nav-link">Ixtapaluca</a>
              <a href="" class="nav-item nav-link">Lomas de Chapultepec</a>
              <a href="" class="nav-item nav-link">Los reyes</a>
              <a href="" class="nav-item nav-link">Polanco</a>
              <a href="" class="nav-item nav-link">Santa Fé</a>
              <a href="" class="nav-item nav-link">San Francisco</a>
            </div>
          </nav>
        </div>
        <div class="col-lg-9">
          <nav
            class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0"
          >
            <a href="" class="text-decoration-none d-block d-lg-none">
              <span class="h1 text-uppercase text-dark bg-light px-2">NUB</span>
              <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1"
                >OX</span
              >
            </a>
            <button
              type="button"
              class="navbar-toggler"
              data-toggle="collapse"
              data-target="#navbarCollapse"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div
              class="collapse navbar-collapse justify-content-between"
              id="navbarCollapse"
            >
              <div class="navbar-nav mr-auto py-0">
                
                <div class="nav-item dropdown"></div>
                <a href="pagina-main/contactanos.php" class="nav-item nav-link">Contactanos</a>
               
              </div>
              <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                <a href="" class="btn px-0">
                  <i class="fas fa-heart text-primary"></i>
                  <span
                    class="badge text-secondary border border-secondary rounded-circle"
                    style="padding-bottom: 2px"
                    >0</span
                  >
                </a>
                <a href="" class="btn px-0 ml-3">
                  <i class="fas fa-shopping-cart text-primary"></i>
                 
                </a>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid mb-3">
      <div class="row px-xl-5">
        <div class="col-lg-8">
          <div
            id="header-carousel"
            class="carousel slide carousel-fade mb-30 mb-lg-0"
            data-ride="carousel"
          >
            <ol class="carousel-indicators">
              <li
                data-target="#header-carousel"
                data-slide-to="0"
                class="active"
              ></li>
              <li data-target="#header-carousel" data-slide-to="1"></li>
              <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div
                class="carousel-item position-relative active"
                style="height: 430px"
              >
                <img
                  class="position-absolute w-100 h-100"
                  src="img/8.jpg"
                  style="object-fit: cover"
                />
                <div
                  class="carousel-caption d-flex flex-column align-items-center justify-content-center"
                >
                  <div class="p-3" style="max-width: 700px">
                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">
                      Aparta tu lugar
                    </p>
                    <h1
                      class="display-4 text-white mb-3 animate__animated animate__fadeInDown"
                    >
                      ¡Desde oficinas¡
                    </h1>
                    <a
                      class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                      href="#"
                      >Solicita ahora</a
                    >
                  </div>
                </div>
              </div>
              <div
                class="carousel-item position-relative"
                style="height: 430px"
              >
                <img
                  class="position-absolute w-100 h-100"
                  src="img/7.jpg"
                  style="object-fit: cover"
                />
                <div
                  class="carousel-caption d-flex flex-column align-items-center justify-content-center"
                >
                  <div class="p-3" style="max-width: 700px">
                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">
                      Aparta tu lugar
                    </p>
                    <h1
                      class="display-4 text-white mb-3 animate__animated animate__fadeInDown"
                    >
                      !Hasta salones¡
                    </h1>
                    <a
                      class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                      href="#"
                      >Solicita ahora</a
                    >
                  </div>
                </div>
              </div>
              <div
                class="carousel-item position-relative"
                style="height: 430px"
              >
                <img
                  class="position-absolute w-100 h-100"
                  src="img/6.jpg"
                  style="object-fit: cover"
                />
                <div
                  class="carousel-caption d-flex flex-column align-items-center justify-content-center"
                >
                  <div class="p-3" style="max-width: 700px">
                    <h1
                      class="display-4 text-white mb-3 animate__animated animate__fadeInDown"
                    >
                      Utiliza tu tarjeta de crédito para apartar
                    </h1>
                    <p
                      class="mx-md-5 px-5 animate__animated animate__bounceIn"
                    ></p>
                    <a
                      class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                      href="#"
                      >Solicita ahora</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="product-offer mb-30" style="height: 200px">
            <img class="img-fluid" src="img/logo.png" alt="" />
          </div>
          <div class="product-offer mb-30" style="height: 200px">
            <img class="img-fluid" src="img/9.jpg" alt="" />
            <div class="offer-text">
              <h6 class="text-white text-uppercase"></h6>
              <h3 class="text-white mb-3">Fechas disponibles</h3>
              <a href="" class="btn btn-primary">Consultar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Carousel End -->

    <!-- Featured Start -->
    <div class="container-fluid pt-5">
      <div class="row px-xl-5 pb-3">
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
          <div
            class="d-flex align-items-center bg-light mb-4"
            style="padding: 30px"
          >
            <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
            <h5 class="font-weight-semi-bold m-0">Cancelación</h5>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
          <div
            class="d-flex align-items-center bg-light mb-4"
            style="padding: 30px"
          >
            <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
            <h5 class="font-weight-semi-bold m-0">Aclaración de saldos</h5>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
          <div
            class="d-flex align-items-center bg-light mb-4"
            style="padding: 30px"
          >
            <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
            <h5 class="font-weight-semi-bold m-0">Solicitud de cambios</h5>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
          <div
            class="d-flex align-items-center bg-light mb-4"
            style="padding: 30px"
          >
            <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
            <h5 class="font-weight-semi-bold m-0">24/7 Atención a clientes</h5>
          </div>
        </div>
      </div>
    </div>

    <!-- Ofertas comienza -->
    <div class="container-fluid pt-5 pb-3">
      <div class="row px-xl-5">
        <div class="col-md-6">
          <div class="product-offer mb-30" style="height: 300px">
            <img class="img-fluid" src="img/9.jpg" alt="" />
            <div class="offer-text">
              <h6 class="text-white text-uppercase"></h6>
              <h3 class="text-white mb-3">Fechas disponibles</h3>
              <a href="" class="btn btn-primary">Consultar</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="product-offer mb-30" style="height: 300px">
            <img class="img-fluid" src="img/offer-2.jpg" alt="" />
            <div class="offer-text">
              <h6 class="text-white text-uppercase"></h6>
              <h3 class="text-white mb-3">Bolsas de trabajo</h3>
              <a href="" class="btn btn-primary">Consultar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ofertas fin -->

    <!-- Slider/Carrusel Salonesy oficinas -->
    <div
      id="carouselExampleControls"
      class="carousel slide"
      data-ride="carousel"
    >
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <div class="card mb-3">
              <img src="img/10.jpg" height = "250" width = "270" />
              <div class="card-body">
                <h5 class="card-title">Zona Ixtapaluca</h5>
                <p class="card-text">Salones y oficinas</p>
                <p class="card-text">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="card mb-3">
              <img src="img/6.jpg" height = "250" width = "270" />
              <div class="card-body">
                <h5 class="card-title">Zona San Francisco</h5>
                <p class="card-text">Salones y oficinas</p>
                <p class="card-text">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="card mb-3">
              <img src="img/11.jpg" height = "250" width = "270" />
              <div class="card-body">
                <h5 class="card-title">Zona Ayotla</h5>
                <p class="card-text">Salones y oficinas</p>
                <p class="card-text">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="card mb-3">
              <img src="img/12.jpg" height = "250" width = "270" />
              <div class="card-body">
                <h5 class="card-title">Zona los reyes</h5>
                <p class="card-text">Salones y oficinas</p>
                <p class="card-text">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="card mb-3">
              <img src="img/13.jpg" height = "250" width = "270" center/>
              <div class="card-body">
                <h5 class="card-title">Zona Chalco</h5>
                <p class="card-text">Salones y oficinas</p>
                <p class="card-text">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a
        class="carousel-control-prev bg-light"
        href="#carouselExampleControls"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="carousel-control-next bg-light"
        href="#carouselExampleControls"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- Servicios fin-->

    <!-- Footer  -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
      <div class="row px-xl-5 pt-5">
        <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
          <h5 class="text-secondary text-uppercase mb-4">
            Ponte en contacto con asesores
          </h5>
          <p class="mb-2">
            <i class="fa fa-map-marker-alt text-primary mr-3"></i>Sucursales en
            toda el área metropolitana
          </p>
          <p class="mb-2">
            <i class="fa fa-envelope text-primary mr-3"></i>contacto_nb@nubox.mx
          </p>
          <p class="mb-0">
            <i class="fa fa-phone-alt text-primary mr-3"></i>55 3653 1973
          </p>
        </div>
        <div class="col-lg-8 col-md-12">
          <div class="row">
            <div class="col-md-4 mb-5">
              <h5 class="text-secondary text-uppercase mb-4">Servicios</h5>
              <div class="d-flex flex-column justify-content-start">
                <a class="text-secondary mb-2" href="#"
                  ><i class="fa fa-angle-right mr-2"></i>Home</a
                >
                <a class="text-secondary mb-2" href="#"
                  ><i class="fa fa-angle-right mr-2"></i>Seguros</a
                >
                <a class="text-secondary mb-2" href="#"
                  ><i class="fa fa-angle-right mr-2"></i>Creditos</a
                >
                <a class="text-secondary" href="#"
                  ><i class="fa fa-angle-right mr-2"></i>Contacto</a
                >
              </div>
            </div>
            <div class="col-md-4 mb-5">
              
            <div class="col-md-4 mb-5">
              <h5 class="text-secondary text-uppercase mb-4">Newsletter</h5>
              <form action="">
                <div class="input-group">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Escribe tu correo electronico"
                  />
                  <div class="input-group-append">
                    <button class="btn btn-primary">Registrate</button>
                  </div>
                </div>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="row border-top mx-xl-5 py-4"
        style="border-color: rgba(256, 256, 256, 0.1) !important"
      >
        <div class="col-md-6 px-xl-0"></div>
        <div class="col-md-6 px-xl-0 text-center text-md-right">
          <img class="img-fluid" src="img/payments.png" alt="" />
        </div>
      </div>
    </div>
    <!-- Footer fin -->
    <!-- volver arriba -->
    <a href="#" class="btn btn-primary back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>
    <!-- JavaScript Librarias -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <a class="NUBOX live" href="index.html">Document</a>
  </body>
</html>
