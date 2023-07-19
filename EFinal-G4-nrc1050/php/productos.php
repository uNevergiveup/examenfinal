<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORGANIC ECOTIENDA</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">

    <!--CSS Magnific-->
    <link rel="stylesheet" href="../vendor/magnific-popup/magnific-popup.css">

    <!-- CSS del tema -->
    <link rel="stylesheet" href="../css/creative.css">
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
            <img src="../img/logo/1.Logo.png" width="200"></a>
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
<section id="barra-portafolio" class="espaciado">
    <div class="contenedor">
        <h1>Productos</h1>
        <p>
            <i class="fa-solid fa-location-dot"></i>

            <a href="index.php">Inicio</a> | Productos
        </p>
    </div> <!-- contenedor -->
</section> <!-- barra-portafolio -->


<section class="productos page-section" id="productos">
    <div class="container">

        <h1>Nuestros productos</h1><br>
        <p>En Organic Ecotienda, creemos en una forma de vida más saludable y sostenible. </p>
        <img src="../img/logo/flecha (1).png" alt="">
        <?php
        require("../config/connection.php");
        $sql = $connection->query(
            "SELECT P.id, nombre_categoria, nombre_marca, precio, descripcion, nombre 
        FROM productos P
        INNER JOIN categorias C ON P.categoria_id = C.id
        INNER JOIN marcas M ON P.marca_id = M.id"
        );
        while ($resultado = $sql->fetch_assoc()) {
        ?>
        <div class="row pb-4">

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card mt-4">
                    <img class="card-img-top" src="../img/h1.jpg" alt="">

                    <div class="card-body">
                        <h4 class="card-title">Helado de plátano</h4>
                        <p>S/ 16.00 soles</p>
                        <a href="#" class="btn btn-sm btn-primary" style="color: black;">Comprar</a>
                        <a href="#" class="btn btn-sm btn-secondary">Detalles</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card mt-4">
                    <img class="card-img-top" src="../img/h2.jpg" alt="">

                    <div class="card-body">
                        <h4 class="card-title">Helado de fresa</h4>
                        <p>S/ 14.00 soles</p>
                        <a href="#" class="btn btn-sm btn-primary" style="color: black;">Comprar</a>
                        <a href="#" class="btn btn-sm btn-secondary">Detalles</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card mt-4">
                    <img class="card-img-top" src="../img/h3.jpg" alt="">

                    <div class="card-body">
                        <h4 class="card-title">Helado de Lúcuma</h4>
                        <p>S/ 16.00 soles</p>
                        <a href="#" class="btn btn-sm btn-primary" style="color: black;">Comprar</a>
                        <a href="#" class="btn btn-sm btn-secondary">Detalles</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card mt-4">
                    <img class="card-img-top" src="../img/h4.jpg" alt="">

                    <div class="card-body">
                        <h4 class="card-title">Helado de coco</h4>
                        <p>S/ 18.00 soles</p>
                        <a href="#" class="btn btn-sm btn-primary" style="color: black;">Comprar</a>
                        <a href="#" class="btn btn-sm btn-secondary">Detalles</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card mt-4">
                    <img class="card-img-top" src="../img/h1.jpg" alt="">

                    <div class="card-body">
                        <h4 class="card-title">Helado de plátano</h4>
                        <p>S/ 16.00 soles</p>
                        <a href="#" class="btn btn-sm btn-primary" style="color: black;">Comprar</a>
                        <a href="#" class="btn btn-sm btn-secondary">Detalles</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card mt-4">
                    <img class="card-img-top" src="../img/h2.jpg" alt="">

                    <div class="card-body">
                        <h4 class="card-title">Helado de fresa</h4>
                        <p>S/ 14.00 soles</p>
                        <a href="#" class="btn btn-sm btn-primary" style="color: black;">Comprar</a>
                        <a href="#" class="btn btn-sm btn-secondary">Detalles</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card mt-4">
                    <img class="card-img-top" src="../img/h3.jpg" alt="">

                    <div class="card-body">
                        <h4 class="card-title">Helado de Lúcuma</h4>
                        <p>S/ 16.00 soles</p>
                        <a href="#" class="btn btn-sm btn-primary" style="color: black;">Comprar</a>
                        <a href="#" class="btn btn-sm btn-secondary">Detalles</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card mt-4">
                    <img class="card-img-top" src="../img/h4.jpg" alt="">

                    <div class="card-body">
                        <h4 class="card-title">Helado de coco</h4>
                        <p>S/ 18.00 soles</p>
                        <a href="#" class="btn btn-sm btn-primary" style="color: black;">Comprar</a>
                        <a href="#" class="btn btn-sm btn-secondary">Detalles</a>
                    </div>
                </div>
            </div>


            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card mt-4">
                    <img class="card-img-top" src="../img/h1.jpg" alt="">

                    <div class="card-body">
                        <h4 class="card-title">Helado de plátano</h4>
                        <p>S/ 16.00 soles</p>
                        <a href="#" class="btn btn-sm btn-primary" style="color: black;">Comprar</a>
                        <a href="#" class="btn btn-sm btn-secondary">Detalles</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card mt-4">
                    <img class="card-img-top" src="../img/h2.jpg" alt="">

                    <div class="card-body">
                        <h4 class="card-title">Helado de fresa</h4>
                        <p>S/ 14.00 soles</p>
                        <a href="#" class="btn btn-sm btn-primary" style="color: black;">Comprar</a>
                        <a href="#" class="btn btn-sm btn-secondary">Detalles</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card mt-4">
                    <img class="card-img-top" src="../img/h3.jpg" alt="">

                    <div class="card-body">
                        <h4 class="card-title">Helado de Lúcuma</h4>
                        <p>S/ 16.00 soles</p>
                        <a href="#" class="btn btn-sm btn-primary" style="color: black;">Comprar</a>
                        <a href="#" class="btn btn-sm btn-secondary">Detalles</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card mt-4">
                    <img class="card-img-top" src="../img/h4.jpg" alt="">

                    <div class="card-body">
                        <h4 class="card-title">Helado de coco</h4>
                        <p>S/ 18.00 soles</p>
                        <a href="#" class="btn btn-sm btn-primary" style="color: black;">Comprar</a>
                        <a href="#" class="btn btn-sm btn-secondary">Detalles</a>
                    </div>
                </div>
            </div>


            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card mt-4">
                    <img class="card-img-top" src="../img/h1.jpg" alt="">

                    <div class="card-body">
                        <h4 class="card-title">Helado de plátano</h4>
                        <p>S/ 16.00 soles</p>
                        <a href="#" class="btn btn-sm btn-primary" style="color: black;">Comprar</a>
                        <a href="#" class="btn btn-sm btn-secondary">Detalles</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card mt-4">
                    <img class="card-img-top" src="../img/h2.jpg" alt="">

                    <div class="card-body">
                        <h4 class="card-title">Helado de fresa</h4>
                        <p>S/ 14.00 soles</p>
                        <a href="#" class="btn btn-sm btn-primary" style="color: black;">Comprar</a>
                        <a href="#" class="btn btn-sm btn-secondary">Detalles</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card mt-4">
                    <img class="card-img-top" src="../img/h3.jpg" alt="">

                    <div class="card-body">
                        <h4 class="card-title">Helado de Lúcuma</h4>
                        <p>S/ 16.00 soles</p>
                        <a href="#" class="btn btn-sm btn-primary" style="color: black;">Comprar</a>
                        <a href="#" class="btn btn-sm btn-secondary">Detalles</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card mt-4">
                    <img class="card-img-top" src="../img/h4.jpg" alt="">

                    <div class="card-body">
                        <h4 class="card-title">Helado de coco</h4>
                        <p>S/ 18.00 soles</p>
                        <a href="#" class="btn btn-sm btn-primary" style="color: black;">Comprar</a>
                        <a href="#" class="btn btn-sm btn-secondary">Detalles</a>
                    </div>
                </div>
            </div>


        </div>

    </div>
</section>


<!-- footer -->
<section class="mbr-section mbr-section-md-padding mbr-footer footer1" id="contacts1-s"
         style="background-color: #F3F3F3;  color: #245501; padding-top: 30px; padding-bottom:30px;">

    <div class="container align-items-center">
        <div class="row">
            <div class="mbr-footer-content col-xs-12 col-sm-2 me-2">
                <div><img style="height: 200px; padding-top: 10px; padding-bottom:10px;" src="../img/logo/1.Logo.png"
                          alt="logo1"></div>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3" style="height: 150px; padding-top: 50px">
                <p><strong></strong>
                    <br><br><br></p>
            </div>

            <div class="mbr-footer-content col-xs-12 col-md-3" style="height: 150px; padding-top: 50px">
                <p><strong>Contáctanos</strong>
                    <br><br>Email: reservas@Luffy.com<br>Teléfonos: 51 (1) 234-2345</p>
            </div>

            <div class="mbr-footer-content col-xs-12 col-md-3" style="height: 150px; padding-top: 50px">
                <p><strong>Únete al equipo LUFFY</strong><br><br>
                    Email: equipo@Luffy.com</p>
            </div>

        </div>
    </div>
</section>


<!--wow-->
<script src="../js/wow.min.js"></script>
<script>
    new WOW().init();
</script>

<!--Bootsrapp JavaScrpr-->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!--Plugin JAVASCRIPT-->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!--Creative JS-->
<script src="../creativejs/creative.min.js"></script>

<script src="../js/jquery-3.2.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>

</html>




