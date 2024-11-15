<?php
// Mostrar errores (solo para desarrollo)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Conexión
include("conexion.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitizar entradas
    $primer_apellido = trim($_POST['primer_apellido']);
    $segundo_apellido = trim($_POST['segundo_apellido']);
    $nombres = trim($_POST['nombres']);
    $tipo_documento = trim($_POST['tipo_documento']);
    $numero_doc = trim($_POST['numero_doc']);
    $sexo = trim($_POST['sexo']);
    $nacionalidad = trim($_POST['nacionalidad']);
    $pais = trim($_POST['pais']);
    $libreta_tipo = trim($_POST['libreta_tipo']);
    $libreta_numero = trim($_POST['libreta_numero']);
    $nacimiento_dia = trim($_POST['nacimiento_dia']);
    $nacimiento_mes = trim($_POST['nacimiento_mes']);
    $nacimiento_año = trim($_POST['nacimiento_año']);
    $pais_nacimiento = trim($_POST['pais_nacimiento']);
    $departamento_nacimiento = trim($_POST['departamento_nacimiento']);
    $municipio_nacimiento = trim($_POST['municipio_nacimiento']);
    $direccion_correspondencia = trim($_POST['direccion_correspondencia']);
    $pais_correspondencia = trim($_POST['pais_correspondencia']);
    $departamento_correspondencia = trim($_POST['departamento_correspondencia']);
    $municipio_correspondencia = trim($_POST['municipio_correspondencia']);
    $telefono = trim($_POST['telefono']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // Preparar consulta
    $consulta = $com->prepare("INSERT INTO DatosPersonales (primer_apellido, segundo_apellido, nombres, tipo_documento, numero_doc, sexo, nacionalidad, pais, libreta_tipo, libreta_numero, nacimiento_dia, nacimiento_mes, nacimiento_año, pais_nacimiento, departamento_nacimiento, municipio_nacimiento, direccion_correspondencia, pais_correspondencia, departamento_correspondencia, municipio_correspondencia, telefono, email) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

    $consulta->bind_param("ssssssssssssssssssssss", $primer_apellido, $segundo_apellido, $nombres, $tipo_documento, $numero_doc, $sexo, $nacionalidad, $pais, $libreta_tipo, $libreta_numero, $nacimiento_dia, $nacimiento_mes, $nacimiento_año, $pais_nacimiento, $departamento_nacimiento, $municipio_nacimiento, $direccion_correspondencia, $pais_correspondencia, $departamento_correspondencia, $municipio_correspondencia, $telefono, $email);

    try {
        if ($consulta->execute()) {
            header("Location: DatosPersonalesHojaVida.php");
            exit();
        } else {
            throw new Exception("Error al guardar los datos: " . $consulta->error);
        }
    } catch (Exception $e) {
        error_log($e->getMessage());
        echo "Ocurrió un error al guardar los datos. Por favor, inténtalo más tarde.";
    }

    $consulta->close();
}

$com->close();
