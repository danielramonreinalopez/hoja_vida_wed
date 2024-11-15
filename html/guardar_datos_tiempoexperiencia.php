<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("conexion.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Sanitizar entradas
    $ocupacion = isset($_POST['ocupacion']) ? trim($_POST['ocupacion']) : null;
    $meses_experiencia = isset($_POST['meses_experiencia']) ? (int)trim($_POST['meses_experiencia']) : null;
    $anios_experiencia = isset($_POST['anios_experiencia']) ? (int)trim($_POST['anios_experiencia']) : null;
    $total_anios_experiencia = isset($_POST['total_anios_experiencia']) ? (float)trim($_POST['total_anios_experiencia']) : null;

    // Preparar consulta
    $consulta = $com->prepare("INSERT INTO TiempoExperienciaLaboral (ocupacion, meses_experiencia, años_experiencia, total_años_experiencia) VALUES (?, ?, ?, ?)");
    $consulta->bind_param("siid", $ocupacion, $meses_experiencia, $anios_experiencia, $total_anios_experiencia);

    try {
        if ($consulta->execute()) {
            header("Location: TiempoExperiencia.php");
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
