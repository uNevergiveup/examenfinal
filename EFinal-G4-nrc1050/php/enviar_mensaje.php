<?php
include "../config/connection.php";
if (isset($_POST['send'])) {
    if (
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['apellidos']) >= 1 &&
        strlen($_POST['telefono']) >= 1 &&
        strlen($_POST['mensaje']) >= 1 &&
        isset($_POST['pais']) && strlen($_POST['pais']) >= 1
    ) {
        $nombre = trim($_POST['nombre']);
        $apellidos = trim($_POST['apellidos']);
        $telefono = trim($_POST['telefono']);
        $mensaje = trim($_POST['mensaje']);
        $pais = trim($_POST['pais']);
        $consulta = "INSERT INTO contacto(
                      nombreContacto,apellidosContacto,telefonoContacto,asuntoContacto,paisContacto)
                      VALUES('$nombre','$apellidos','$telefono','$mensaje','$pais')";

        $resultado = mysqli_query($connection,$consulta);
        if($resultado){
            ?>
            <h3 class = "success">Mensaje enviado.</h3>
            <?php
        }else{
            ?>
            <h3 class = "error">Ha ocurrido un error, intente de nuevo.</h3>
            <?php
        }
    }
}