<?php
include("../config/connection.php");

$id = $_GET['id'];

$sql = /** @lang text */
    "DELETE FROM producto WHERE idProducto = '$id'";

$query = mysqli_query($connection, $sql);
if ($query) {
    header("location:../compra.php");
} else {
    echo "Datos no insertados";
}
