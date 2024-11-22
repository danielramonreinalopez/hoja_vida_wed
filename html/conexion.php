<?php
// Datos de conexión
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$base_datos = "hojavida"; // Actualiza el nombre de la base de datos

// Crear la conexión
$com = new mysqli($servidor, $usuario, $contrasena, $base_datos);


if ($com->connect_error) {
    die("Conexión fallida: " . $com->connect_error);
} else {
    echo " ";
}
