<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORGANIC-Ecotienda</title>
    
    <!-- Enlazar con la libreria CSS de Font-Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
    <!-- Enlazar el archivo HTML con una hoja de estilos externa CSS -->
        <link rel="stylesheet" href="../css/style.css">
           
        <link rel="shortcut icon" href="../img/1.Icono.png" type="image/x-icon">
    
    <!-- Enlazar Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul  class="nav justify-content-end">
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
    <section id="barra-servicios" class="espaciado">
        <div class="contenedor">
            <h1>Servicios</h1>
            <p>
                <i class="fa-solid fa-location-dot"></i>
    
                <a href="index.php">Inicio</a>  |  Servicios
            </p>
        </div> <!-- contenedor -->
    </section> <!-- barra-servicios -->

    <div id="pie" class="espaciado">
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