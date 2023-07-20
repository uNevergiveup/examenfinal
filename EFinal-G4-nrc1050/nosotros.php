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
	rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>


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
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
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
  <section id="barra-nosotros" class="espaciado">
    <div class="contenedor">
        <h1>Nosotros</h1>
        <p>
            <i class="fa-solid fa-location-dot"></i>

            <a href="index.php">Inicio</a>  |  Nosotros
        </p>
    </div> <!-- contenedor -->
</section> <!-- barra-nosotros -->

<section class="page-section" id="nosotros">
    <div class="container">
        <h1>Nuestra historia</h1><br>
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

<!--SECCION FONDO MOVIBLE-->
<section class="fondo">
	
</section>

<!-- SECCION SERVICIOS -->
  
<section class="page-section" id="nosotros">
    <div class="container">

      <h1 class="text-center mt-0">Nuestra Cultura</h2>
      <hr class="divider my-4">
      
      <div class="row">

        <div class="col-md-6 col-lg-3 text-center">
          <div class="mt-5">
            <i class="fa-4x fa-solid fa-rocket mb-4 " style="color: #245501;"></i>
            <h3 class="h4 mb-2">MISIÓN</h3>
            <p class="text-muted mb-0">Puedes consultar aquí acerca de nuestra Misión</p>
            <button class="btn btn-primary btn-xl js-scroll-trigger" style="background-color: #245501; color: white"  data-toggle="modal" data-target="#fm-modal">
                Saber +
            </button>
            <div class="modal fade" id="fm-modal" tabindex="-1" role="dialog" aria-labelledby="fm-modal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">MISIÓN</h5>
                            <button class="close" data-dismiss="modal" aria-label="cerrar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h3>Eventos en los que participamos</h3>
                            <br>
                            <p>Baby Showers</p>
                            <p>Bautizos</p>
                            <p>Cumpleaños</p>
                            <p>Bodas</p>
                            <p>Aniversarios</p>
                            <p>Fiestas temáticas</p>
                        </div>
                    </div>
                </div>
            </div>
          </div>          
        </div>

      <div class="col-md-6 col-lg-3 text-center">
          <div class="mt-5">
            <i class="fa-4x fa-solid fa-eye mb-4" style="color: #245501;"></i>
          
            <h3 class="h4 mb-2">VISIÓN</h3>
            <p class="text-muted mb-0">Puedes consultar aquí acerca de nuestra Visión</p>
            <button class="btn btn-primary btn-xl js-scroll-trigger" style="background-color: #245501; color: white"  data-toggle="modal" data-target="#fm-modal1">
                Saber +
            </button>
            <div class="modal fade" id="fm-modal1" tabindex="-1" role="dialog" aria-labelledby="fm-modal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">VISIÓN</h5>
                            <button class="close" data-dismiss="modal" aria-label="cerrar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h3>Zonas de Eventos</h3>
                            <br>
                            <p>Zona Lima Sur</p>
                            <p>Zona Lima Norte</p>
                            <p>Zona Lima Centro</p>
                            <p>Zona Lima Este</p>
                            <p>Zona Lima Oeste</p>
                            <p>Otros</p>
                        </div>
                    </div>
                </div>
            </div>
          </div>          
        </div>

        <div class="col-md-6 col-lg-3 text-center">
          <div class="mt-5">
            <i class="fa-4x fa-solid fa-people-group mb-4 " style="color: #245501;"></i>
            <h3 class="h4 mb-2">VALORES</h3>
            <p class="text-muted mb-0">Puedes consultar aquí acerca de nuestros valores</p>
            
            <button class="btn btn-primary btn-xl js-scroll-trigger" style="background-color: #245501; color: white" data-toggle="modal" data-target="#fm-modal2">
                Saber +
            </button>
            <div class="modal fade" id="fm-modal2" tabindex="-1" role="dialog" aria-labelledby="fm-modal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">VALORES</h5>
                            <button class="close" data-dismiss="modal" aria-label="cerrar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h3>Suministramos a...</h3>
                            <br>
                            <p>Pequeños emprendimientos</p>
                            <p>Negocios de bodegas</p>
                            <p>Tiendas departamentales</p>
                            <p>Otros</p>
                        </div>
                    </div>
                </div>
            </div>
          </div>          
        </div>

        <div class="col-md-6 col-lg-3 text-center">
          <div class="mt-5">
            <i class=" fa-4x fa-solid fa-file-circle-check mb-4" style="color: #245501;"></i>
        
            <h3 class="h4 mb-2">POLÍTICAS</h3>
            <p class="text-muted mb-0">Puede consultar aquí acerca de nuestras políticas</p>
            <button class="btn btn-primary btn-xl js-scroll-trigger" style="background-color: #245501; color: white" data-toggle="modal" data-target="#fm-modal3">
                Saber +
            </button>
            <div class="modal fade" id="fm-modal3" tabindex="-1" role="dialog" aria-labelledby="fm-modal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">POLÍTICAS</h5>
                            <button class="close" data-dismiss="modal" aria-label="cerrar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h3>Reservaciones</h3>
                            <br>
                            <p>Aceptamos reservaciones con 15 días de anticipación si son más de 15 personas. En caso sean menos de 15 personas pueden reservar hasta con 7 días de anicipación</p>
                            <p>Sedes de reserva: Av. Benavides y Jesus María</p>
                           
                        </div>
                    </div>
                </div>
            </div>
          </div>          
        </div>

      </div>

    </div>
  </section>




  <!-- footer -->
  <section class="mbr-section mbr-section-md-padding mbr-footer footer1" id="contacts1-s" style="background-color: #F3F3F3;  color: #245501; padding-top: 30px; padding-bottom:30px;" >
    
    <div class="container align-items-center">
        <div class="row">
            <div class="mbr-footer-content col-xs-12 col-sm-2 me-2">
                <div><img style="height: 200px; padding-top: 10px; padding-bottom:10px;" src="imagenes/logo/1.Logo.png"></div>
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