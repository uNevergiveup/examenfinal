<?php
include("../config/connection.php");

$id = $_POST['id'];
$precio = $_POST['Precio'];
$descripcion = $_POST['Descripcion'];
$nombre = $_POST['Nombre'];

$sql = /** @lang text */
    "UPDATE producto SET 
                          precioProducto = '".$precio."',
                          detallesProducto = '".$descripcion."',
                          nombreProducto = '".$nombre."' WHERE idProducto = ".$id." ";

$resultado = mysqli_query($connection, $sql);
if ($resultado = $connection -> query($sql)) {
    header("location:../compra.php");
}
