<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORGANIC ECOTIENDA</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!--CSS Magnific-->
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css">

    <!-- CSS del tema -->
    <link rel="stylesheet" href="css/creative.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!--Font Awesome-->
    <link
            rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
            integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"/>


    <!-- Animate CSS -->
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

</head>

<body>

<!-- Menú de navegación -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <img src="imagenes/logo/1.Logo.png" width="200"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto my-2 my-lg-0">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="index.php">INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="nosotros.php">NOSOTROS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="productos.php">PRODUCTOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="portafolio.php">PORTAFOLIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="contacto.php">CONTACTO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="compra.php">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span class="glyphicon glyphicon-triangle-right"></span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>


<!--CONTENIDO-->
<section id="barra-contacto" class="espaciado">
    <div class="contenedor">
        <h1>Contacto</h1>
        <p>
            <i class="fa-solid fa-location-dot"></i>

            <a href="index.php">Inicio</a> | Contacto
        </p>
    </div> <!-- contenedor -->
</section> <!-- barra-contacto -->


<div class="container" style="margin-top: 40px">
    <h4 style="text-align: center">¿Dudas o consultas? Dejanos tus datos y nos contactaremos contigo.</h4>
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="imagenes/vendedora.jpg"
                 class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1" style="margin-top: 40px">
            <form action="php/enviar_mensaje.php" method="post">
                <!-- Name input -->
                <div class="form-group">
                    <label for="formName">Nombre</label>
                    <input name="nombre" type="text" id="formName" class="form-control form-control-lg"/>
                </div>
                <!-- LastName input -->
                <div class="form-group">
                    <label for="formName">Apellidos</label>
                    <input name="apellidos" type="text" id="formName" class="form-control form-control-lg"/>
                </div>

                <!-- Phone input -->
                <div class="form-group">
                    <label for="formEmail">Telefono</label>
                    <input name="telefono" type="text" id="formEmail" class="form-control form-control-lg"/>
                </div>

                <div class="form-group">
                    <label for="selectCountry">Selecciona una opción:</label>
                    <select name="pais" class="form-control" id="selectCountry">
                        <option value="">Selecciona un país</option>
                        <option value="AR">Argentina</option>
                        <option value="BR">Brasil</option>
                        <option value="CL">Chile</option>
                        <option value="CO">Colombia</option>
                        <option value="CR">Costa Rica</option>
                        <option value="CU">Cuba</option>
                        <option value="DO">República Dominicana</option>
                        <option value="EC">Ecuador</option>
                        <option value="ES">España</option>
                        <option value="FR">Francia</option>
                        <option value="IT">Italia</option>
                        <option value="MX">México</option>
                        <option value="PE">Perú</option>
                        <option value="PT">Portugal</option>
                        <option value="US">Estados Unidos</option>
                        <option value="VE">Venezuela</option>
                        <option value="AL">Alemania</option>
                        <option value="JP">Japón</option>
                        <option value="AU">Australia</option>
                        <option value="GB">Reino Unido</option>
                    </select>
                </div>

                <!-- Asunto input -->
                <div class="form-group">
                    <label for="formEmail">Mensaje</label>
                    <textarea name="mensaje" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="text-center text-lg-start mt-4 pt-2" style="margin: auto">
                    <button name="send" type="submit" class="btn btn-primary btn-lg"
                            style="padding-left: 4rem; padding-right: 4rem;">Enviar
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>


<!-- footer -->
<section class="mbr-section mbr-section-md-padding mbr-footer footer1" id="contacts1-s"
         style="background-color: #F3F3F3;  color: #245501; padding-top: 30px; padding-bottom:30px;">

    <div class="container align-items-center">
        <div class="row">
            <div class="mbr-footer-content col-xs-12 col-sm-2 me-2">
                <div><img style="height: 200px; padding-top: 10px; padding-bottom:10px;" src="imagenes/logo/1.Logo.png">
                </div>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3" style="height: 150px; padding-top: 50px">
                <p><strong></strong>
                    <br><br><br></p>
            </div>

            <div class="mbr-footer-content col-xs-12 col-md-3" style="height: 150px; padding-top: 50px">
                <p><strong>Contáctanos</strong>
                    <br><br>Email: informacion.organicet@gmail.com<br>Teléfonos: 51 (1) 234-2345</p>
            </div>

            <div class="mbr-footer-content col-xs-12 col-md-3" style="height: 150px; padding-top: 50px">
                <p><strong>Únete al equipo Organic Ecotienda</strong><br><br>
                    Email: equipo.organicet@gmail.com</p>
            </div>

        </div>
    </div>
</section>


<!--wow-->
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>

<!--Bootsrapp JavaScrpr-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!--Plugin JAVASCRIPT-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!--Creative JS-->
<script src="creativejs/creative.min.js"></script>

<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>





