<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("conexion.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitizar entradas
    $ultimo_grado_aprobado = isset($_POST['ultimo_grado_aprobado']) ? trim($_POST['ultimo_grado_aprobado']) : null;
    $titulo_obtenido = isset($_POST['titulo_obtenido']) ? trim($_POST['titulo_obtenido']) : null;
    $fecha_grado_mes = isset($_POST['fecha_grado_mes']) ? (int)$_POST['fecha_grado_mes'] : null;
    $fecha_grado_anio = isset($_POST['fecha_grado_anio']) ? (int)$_POST['fecha_grado_anio'] : null;

    // Validar entradas obligatorias
    if ($ultimo_grado_aprobado === null) {
        echo "<div class='alert alert-danger'>El campo 'Ultimo Grado Aprobado' es obligatorio.</div>";
        exit;
    }

    // Preparar consulta para EducacionBasicaMedia
    $consulta = $com->prepare("INSERT INTO EducacionBasicaMedia (ultimo_grado_aprobado, titulo_obtenido, fecha_grado_mes, fecha_grado_anio) VALUES (?, ?, ?, ?)");

    if ($consulta) {
        $consulta->bind_param("ssii", $ultimo_grado_aprobado, $titulo_obtenido, $fecha_grado_mes, $fecha_grado_anio);
        try {
            if ($consulta->execute()) {
                echo "<div class='alert alert-success'>Datos de educación básica y media guardados exitosamente.</div>";
            } else {
                throw new Exception("Error al guardar los datos: " . $consulta->error);
            }
        } catch (Exception $e) {
            error_log($e->getMessage());
            echo "<div class='alert alert-danger'>Ocurrió un error al guardar los datos. Por favor, inténtalo más tarde.</div>";
        }
        $consulta->close();
    }

    // Datos para EducacionSuperior
    $modalidad_academica = isset($_POST['modalidad_academica']) ? trim($_POST['modalidad_academica']) : null;
    $semestres_aprobados = isset($_POST['semestres_aprobados']) ? (int)$_POST['semestres_aprobados'] : null;
    $graduado = isset($_POST['graduado']) ? trim($_POST['graduado']) : null;
    $titulo_obtenido_superior = isset($_POST['titulo_obtenido_superior']) ? trim($_POST['titulo_obtenido_superior']) : null;
    $terminacion_mes = isset($_POST['terminacion_mes']) ? (int)$_POST['terminacion_mes'] : null;
    $terminacion_anio = isset($_POST['terminacion_anio']) ? (int)$_POST['terminacion_anio'] : null;
    $tarjeta_profesional = isset($_POST['tarjeta_profesional']) ? trim($_POST['tarjeta_profesional']) : null;

    // Preparar consulta para EducacionSuperior
    $consulta_superior = $com->prepare("INSERT INTO EducacionSuperior (modalidad_academica, semestres_aprobados, graduado, titulo_obtenido, terminacion_mes, terminacion_anio, tarjeta_profesional) VALUES (?, ?, ?, ?, ?, ?, ?)");

    if ($consulta_superior) {
        $consulta_superior->bind_param("sisssis", $modalidad_academica, $semestres_aprobados, $graduado, $titulo_obtenido_superior, $terminacion_mes, $terminacion_anio, $tarjeta_profesional);
        try {
            if ($consulta_superior->execute()) {
                echo "<div class='alert alert-success'>Datos de educación superior guardados exitosamente.</div>";
            } else {
                throw new Exception("Error al guardar los datos: " . $consulta_superior->error);
            }
        } catch (Exception $e) {
            error_log($e->getMessage());
            echo "<div class='alert alert-danger'>Ocurrió un error al guardar los datos de educación superior. Por favor, inténtalo más tarde.</div>";
        }
        $consulta_superior->close();
    }

    // Datos para Idiomas
    $idioma = isset($_POST['idioma']) ? trim($_POST['idioma']) : null;
    $habla = isset($_POST['habla']) ? trim($_POST['habla']) : null;
    $lee = isset($_POST['lee']) ? trim($_POST['lee']) : null;
    $escribe = isset($_POST['escribe']) ? trim($_POST['escribe']) : null;

    // Validar entradas obligatorias para Idiomas
    if ($idioma === null || $habla === null || $lee === null || $escribe === null) {
        echo "<div class='alert alert-danger'>Todos los campos de idiomas son obligatorios.</div>";
        exit;
    }

    // Preparar consulta para Idiomas
    $consulta_idiomas = $com->prepare("INSERT INTO Idiomas (idioma, habla, lee, escribe) VALUES (?, ?, ?, ?)");

    if ($consulta_idiomas) {
        $consulta_idiomas->bind_param("ssss", $idioma, $habla, $lee, $escribe);
        try {
            if ($consulta_idiomas->execute()) {
                echo "<div class='alert alert-success'>Datos de idiomas guardados exitosamente.</div>";
            } else {
                throw new Exception("Error al guardar los datos: " . $consulta_idiomas->error);
            }
        } catch (Exception $e) {
            error_log($e->getMessage());
            echo "<div class='alert alert-danger'>Ocurrió un error al guardar los datos de idiomas. Por favor, inténtalo más tarde.</div>";
        }
        $consulta_idiomas->close();
    }
}

$com->close();
