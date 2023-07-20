<?php
include("../config/connection.php");

$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];
$nombre = $_POST['nombre'];

$sql = /** @lang text */
    "INSERT INTO producto(precioProducto,detallesProducto,nombreProducto) 
VALUES('$precio','$descripcion','$nombre')";

$resultado = mysqli_query($connection, $sql);
if ($resultado) {
    header("location:../compra.php");
} else {
    echo "Datos no insertados";
}