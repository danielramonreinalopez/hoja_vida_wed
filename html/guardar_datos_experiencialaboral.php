<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("conexion.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Sanitizar entradas 
    $empresa = trim($_POST['empresa']);
    $tipo_empresa = trim($_POST['tipo_empresa']);
    $pais = trim($_POST['pais']);
    $departamento = trim($_POST['departamento']);
    $municipio = trim($_POST['municipio']);
    $email_empresa = trim($_POST['email_empresa']);
    $telefono_empresa = trim($_POST['telefono_empresa']);
    $fecha_ingreso = trim($_POST['fecha_ingreso']);
    $fecha_retiro = trim($_POST['fecha_retiro']);
    $cargo = trim($_POST['cargo']);
    $dependencia = trim($_POST['dependencia']);
    $direccion = trim($_POST['direccion']);

    // Preparar consulta
    $consulta = $com->prepare("INSERT INTO ExperienciaLaboral (empresa, tipo_empresa, pais, departamento, municipio, email_empresa, telefono_empresa, fecha_ingreso, fecha_retiro, cargo, dependencia, direccion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $consulta->bind_param("ssssssssssss", $empresa, $tipo_empresa, $pais, $departamento, $municipio, $email_empresa, $telefono_empresa, $fecha_ingreso, $fecha_retiro, $cargo, $dependencia, $direccion);

    try {
        if ($consulta->execute()) {
            header("Location: ExperienciaLaboral.php");
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
