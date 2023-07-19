<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORGANIC-Ecotienda</title>

    <!-- Enlazar con la libreria CSS de Font-Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
          integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- Enlazar el archivo HTML con una hoja de estilos externa CSS -->
    <link rel="stylesheet" href="../css/style.css">

    <link rel="shortcut icon" href="../img/1.Icono.png" type="image/x-icon">

    <!-- Enlazar Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<!-- Barra superior -->
<section id="barra-superior">
    <div class="contenedor">
        <div class="fila">
            <div>
                <span>
                    <i class="fa-solid fa-location-dot"></i> Calle Bernard Balaguer 145 - Chosica
                </span>
                <span>
                    <i class="fa-regular fa-clock"></i> Lun-Sab 08:00-20:00
                </span>
            </div>
            <div class="bloque2">
                <span>
                    <a>
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </span>
                <span>
                    <a>
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </span>
                <span>
                    <a>
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </span>
                <span>
                    <a>
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </span>
            </div> <!-- fila -->
        </div> <!-- contenedor -->
</section>
<header id="cabecera" class="espaciado">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="logo">
            <a class="navbar-brand" href="index.php">
                <img src="../img/1.Logo.png" width="200" height="120" alt="">
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Inicio<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="nosotros.php">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="servicios.php">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="portafolio.php">Portafolio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contacto.php">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<section id="portada">
    <div class="contenedor">
        <p class="texto_enorme">¡Bienvenido a Organic Ecotienda<br>
            <span class="texto_resaltado">Descubre lo mejor de la naturaleza</span><br><span class="texto_resaltado">en cada bocado</span>
        </p>
    </div>
</section>

<section id="nosotros">
    <div class="contenedor">
        <h1>Nosotros</h1><br>
        <p>En Organic Ecotienda, creemos en una forma de vida más saludable y sostenible. </p>
        <img src="../img/flecha (1).png" alt="">
        <p>Nuestra pasión por los alimentos orgánicos y el respeto por la naturaleza nos impulsaron a fundar esta
            tienda. Trabajamos directamente con agricultores locales y proveedores comprometidos con prácticas
            ecológicas para ofrecerte los productos más frescos y nutritivos. Cada compra que haces en nuestra tienda es
            una pequeña contribución a un planeta más verde y próspero.</p>
        <div class="servicio boton">
            <a href="nosotros.php" class="btn-nosotros">MAS SOBRE NOSOTROS <span></span></a>
        </div>
    </div>
</section>

<section id="servicios" class="espaciado">
    <div class="contenedor">
        <div class="fila">
            <div class="columna">
                <div class="caja-overflow">
                    <h3>Catering</h3>
                    <img src="../img/servicios1.jpg" alt="" class="img_ajustarancho">
                    <p>Disfruta de una deliciosa selección de platillos frescos y saludables para ti y tus
                        invitados. </p>
                </div>
            </div>
            <div class="columna">
                <div class="caja-overflow">
                    <h3>Eventos</h3>
                    <img src="../img/servicios2.jpg" alt="" class="img_ajustarancho">
                    <p>Organizamos eventos especiales para promover un estilo de vida saludable y ecológico.</p>
                </div>
            </div>
            <div class="columna escala">
                <div class="caja-overflow">
                    <h3>Delivery</h3>
                    <img src="../img/servicios3.jpg" alt="" class="img_ajustarancho">
                    <p>¿Quieres disfrutar de nuestros productos orgánicos desde la comodidad de tu hogar?.</p>
                </div>
            </div>
            <div class="columna">
                <div class="caja-overflow">
                    <h3>Asesoria Nutricional</h3>
                    <img src="../img/servicios4.jpg" alt="" class="img_ajustarancho">
                    <p>Nuestro equipo de expertos en nutrición está aquí para ayudarte en tu camino hacia una
                        alimentación más saludable.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="portafolio" class="text-center">
    <div class="contenedor">
        <div class="titulo-port">
            <h2>Te Ofrecemos</h2>
            <h5>Una amplia variedad de alimentos orgánicos</h5>
            <hr>
        </div>
        <div class="row service-item-margin">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 zero-padding text-center services-list">
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 zero-padding">
                    <img src="../img/icono1.png" alt="">
                </div>
                <div class="col-lg-10 col-md-9 col-sm-9 col-xs-12 zero-padding service-item-title">

                    <h3>Frutas frescas<br> &amp; jugosas</h3>
                    <hr>
                    <p>Disfruta de la naturaleza en su mejor expresión con nuestras frutas orgánicas cuidadosamente
                        seleccionadas. Desde manzanas crujientes hasta jugosas naranjas, nuestras frutas están llenas de
                        sabor y nutrientes, perfectas para un snack saludable o para complementar tus recetas
                        favoritas.</p>
                    <a href="portafolio.php" class="elrumi-btn"><i class="fa-solid fa-cart-shopping"></i>Comprar<span
                                class="glyphicon glyphicon-triangle-right"></span></a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 second-box text-center services-list">
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 zero-padding">
                    <img src="../img/icono2.png" alt="">
                </div>
                <div class="col-lg-10 col-md-9 col-sm-9 col-xs-12 zero-padding service-item-title">
                    <h3>Verduras<br>crujientes</h3>
                    <hr>
                    <p>Nuestras verduras orgánicas son cultivadas con amor y cuidado por agricultores locales
                        comprometidos con prácticas ecológicas. Descubre una amplia variedad de opciones frescas, desde
                        tiernos espárragos hasta coloridas zanahorias, para llevar a tu mesa lo mejor de la
                        temporada.</p>
                    <a href="portafolio.php" class="elrumi-btn"><i class="fa-solid fa-cart-shopping"></i>Comprar<span
                                class="glyphicon glyphicon-triangle-right"></span></a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 zero-padding next-row text-center services-list">
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 zero-padding">
                    <img src="../img/icono4.png" alt="">
                </div>
                <div class="col-lg-10 col-md-9 col-sm-9 col-xs-12 zero-padding service-item-title">
                    <h3>Panes <br> recién horneados</h3>
                    <hr>
                    <p>El aroma del pan fresco llenará tu hogar cuando pruebes nuestras opciones de panes orgánicos.
                        Hechos con ingredientes naturales y sin aditivos, nuestros panes son perfectos para acompañar
                        tus comidas o preparar deliciosos sándwiches.</p>
                    <a href="portafolio.php" class="elrumi-btn"><i class="fa-solid fa-cart-shopping"></i>Comprar<span
                                class="glyphicon glyphicon-triangle-right"></span></a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 second-box next-row text-center services-list">
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 zero-padding">
                    <img src="../img/icono5.png" alt="">
                </div>
                <div class="col-lg-10 col-md-9 col-sm-9 col-xs-12 zero-padding service-item-title">
                    <h3>Huevos de gallinas <br>criadas en libertad</h3>
                    <hr>
                    <p>Nuestros huevos orgánicos provienen de gallinas felices y saludables, criadas en ambientes
                        abiertos y naturales. Ricos en proteínas y nutrientes, estos huevos son una elección consciente
                        para un desayuno nutritivo o para enriquecer tus recetas.</p>
                    <a href="portafolio.php" class="elrumi-btn"><i class="fa-solid fa-cart-shopping"></i>Comprar<span
                                class="glyphicon glyphicon-triangle-right"></span></a>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="pie" class="espaciado" class="text-center">
    <div class="contenedor">
        <nav class="pie barra">
            <div class="pie-logo">
                <img src="../img/1.Logo.png" alt="">
            </div>
            <ul class="pie-opciones">
                <div class="pie-items">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="servicios.php">Servicios</a></li>
                    <li><a href="portafolio.php">Portafolio</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                </div>
            </ul>
        </nav>
        <h5>2023 Organic - Ecotienda</h5>
    </div>
</div>

</body>
</html>