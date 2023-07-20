<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="css/styles.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
<h1 class="text-center" style="background-color: black; color:white; border-radius: 5px;">EDITAR PRODUCTOS</h1>
<br>
<form class="container" action="../CRUD/update_data.php" method="POST">
    <?php
    include ('../config/connection.php');

    $sql = "SELECT * FROM producto WHERE idProducto =".$_GET['id'];
    $resultado = $connection->query($sql);

    $row = $resultado->fetch_assoc();
    ?>

    <input type="Hidden" class="form-control" name="id" value="<?php echo $row['idProducto']; ?>">

    <div class="mb-3">
        <label class="form-label">Precio</label>
        <input type="text" class="form-control" name="Precio" value="<?php echo $row['precioProducto']; ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Descripcion</label>
        <input type="text" class="form-control" name="Descripcion" value="<?php echo $row['detallesProducto']; ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" class="form-control" name="Nombre" value="<?php echo $row['nombreProducto']; ?>">
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-danger">Agregar</button>
        <a href="../index.php" class="btn btn-dark">Regresar</a>
    </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
</body><?php
