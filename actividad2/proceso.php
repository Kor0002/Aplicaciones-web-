<?php
function comprobarEdad($nombre, $apellidos, $edad) {
    if ($edad >= 18) {
        echo "Hola $nombre $apellidos, tienes $edad años y eres <strong>mayor de edad</strong>.";
    } else {
        echo "Hola $nombre $apellidos, tienes $edad años y eres <strong>menor de edad</strong>.";
    }
}

if (isset($_GET['nombre']) && isset($_GET['apellidos']) && isset($_GET['edad'])) {
    $nombre = $_GET['nombre'];
    $apellidos = $_GET['apellidos'];
    $edad = (int)$_GET['edad'];

    comprobarEdad($nombre, $apellidos, $edad);
} else {
    echo "No se han recibido todos los datos.";
}
?>
