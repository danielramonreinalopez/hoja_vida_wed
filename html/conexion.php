<?php
// Datos de conexión
$servidor = "localhost";
$usuario = "root";
$contrasena = "roni12345678"; // La contraseña está vacía por defecto en XAMPP
$base_datos = "hojavida"; // Actualiza el nombre de la base de datos

// Crear la conexión
$com = new mysqli($servidor, $usuario, $contrasena, $base_datos);

// Verificar la conexión
if ($com->connect_error) {
    die("Conexión fallida: " . $com->connect_error);
} else {
    echo "Conexión exitosa a la base de datos 'hojavida'";
}

// Aquí puedes añadir código para interactuar con las tablas
