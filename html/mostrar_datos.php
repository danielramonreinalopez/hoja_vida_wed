<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Conexión
include("conexion.php");

// Función para obtener datos de la base de datos
function obtenerDatos($conexion, $tabla)
{
    $query = "SELECT * FROM $tabla";
    return $conexion->query($query);
}

// Recuperar datos de cada tabla
$resultDatosPersonales = obtenerDatos($com, "DatosPersonales");
$resultTiempoExperiencia = obtenerDatos($com, "TiempoExperienciaLaboral");
$resultEducacionBasica = obtenerDatos($com, "EducacionBasicaMedia");
$resultEducacionSuperior = obtenerDatos($com, "EducacionSuperior");
$resultIdiomas = obtenerDatos($com, "Idiomas");
$resultExperienciaLaboral = obtenerDatos($com, "ExperienciaLaboral");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Datos Guardados</title>
    <style>
        .section-title {
            margin-top: 30px;
            margin-bottom: 20px;
        }

        .table {
            margin-bottom: 40px;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="row nav-links">
            <div class="col-sm-2 text-center"><a href="DatosPersonalesHojaVida.php">DATOS PERSONALES</a></div>
            <div class="col-sm-2 text-center"><a href="FormacionAcademica.php">FORMACION ACADEMICA</a></div>
            <div class="col-sm-2 text-center"><a a href="ExperienciaLaboral.php"> EXPERIENCIA LABORAL </a></div>
            <div class="col-sm-2 text-center"><a href="TiempoExperiencia.php"> TIEMPO TOTAL DE EXPERIENCIA </a></div>
            <div class="col-sm-2 text-center"><a href="index.php">INICIO</a></div>

        </div>


        <!-- Datos Personales -->
        <h1 class="text-center section-title">Datos Personales Guardados</h1>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Nombres</th>
                    <th>Tipo Documento</th>
                    <th>Número Documento</th>
                    <th>Sexo</th>
                    <th>Nacionalidad</th>
                    <th>Libreta Militar</th>
                    <th>Número Libreta</th>
                    <th>Fecha de Nacimiento</th>
                    <th>País de Nacimiento</th>
                    <th>Departamento de Nacimiento</th>
                    <th>Municipio de Nacimiento</th>
                    <th>País de Correspondencia</th>
                    <th>Departamento de Correspondencia</th>
                    <th>Municipio de Correspondencia</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $resultDatosPersonales->fetch_assoc()) { ?>
                    <tr>
                        <td><?= htmlspecialchars($row['primer_apellido']); ?></td>
                        <td><?= htmlspecialchars($row['segundo_apellido']); ?></td>
                        <td><?= htmlspecialchars($row['nombres']); ?></td>
                        <td><?= htmlspecialchars($row['tipo_documento']); ?></td>
                        <td><?= htmlspecialchars($row['numero_doc']); ?></td>
                        <td><?= htmlspecialchars($row['sexo']); ?></td>
                        <td><?= htmlspecialchars($row['nacionalidad']); ?></td>
                        <td><?= htmlspecialchars($row['libreta_tipo']); ?></td>
                        <td><?= htmlspecialchars($row['libreta_numero']); ?></td>
                        <td><?= htmlspecialchars($row['nacimiento_dia']) . '/' . htmlspecialchars($row['nacimiento_mes']) . '/' . htmlspecialchars($row['nacimiento_año']); ?></td>
                        <td><?= htmlspecialchars($row['pais_nacimiento']); ?></td>
                        <td><?= htmlspecialchars($row['departamento_nacimiento']); ?></td>
                        <td><?= htmlspecialchars($row['municipio_nacimiento']); ?></td>
                        <td><?= htmlspecialchars($row['pais_correspondencia']); ?></td>
                        <td><?= htmlspecialchars($row['departamento_correspondencia']); ?></td>
                        <td><?= htmlspecialchars($row['municipio_correspondencia']); ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <!-- Educación Básica y Media -->
        <h1 class="text-center section-title">Educación Básica y Media</h1>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Último Grado Aprobado</th>
                    <th>Título Obtenido</th>
                    <th>Fecha de Grado</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $resultEducacionBasica->fetch_assoc()) { ?>
                    <tr>
                        <td><?= htmlspecialchars($row['ultimo_grado_aprobado']); ?></td>
                        <td><?= htmlspecialchars($row['titulo_obtenido']); ?></td>
                        <td><?= htmlspecialchars($row['fecha_grado_mes']) . '/' . htmlspecialchars($row['fecha_grado_anio']); ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <!-- Educación Superior -->
        <h1 class="text-center section-title">Educación Superior</h1>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Modalidad Académica</th>
                    <th>Semestres Aprobados</th>
                    <th>Graduado</th>
                    <th>Título Obtenido</th>
                    <th>Terminación</th>
                    <th>No. de Tarjeta Profesional</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $resultEducacionSuperior->fetch_assoc()) { ?>
                    <tr>
                        <td><?= htmlspecialchars($row['Modalidad academica']); ?></td>
                        <td><?= htmlspecialchars($row['semestres_aprobados']); ?></td>
                        <td><?= htmlspecialchars($row['graduado']); ?></td>
                        <td><?= htmlspecialchars($row['titulo_obtenido']); ?></td>
                        <td><?= htmlspecialchars($row['terminacion_mes']) . '/' . htmlspecialchars($row['terminacion_anio']); ?></td>
                        <td><?= htmlspecialchars($row['tarjeta_profesional']); ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <!-- Idiomas -->
        <h1 class="text-center section-title">Idiomas</h1>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Idioma</th>
                    <th>Lo Habla</th>
                    <th>Lo Lee</th>
                    <th>Lo Escribe</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $resultIdiomas->fetch_assoc()) { ?>
                    <tr>
                        <td><?= htmlspecialchars($row['idioma']); ?></td>
                        <td><?= htmlspecialchars($row['habla']); ?></td>
                        <td><?= htmlspecialchars($row['lee']); ?></td>
                        <td><?= htmlspecialchars($row['escribe']); ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <!-- Experiencia Laboral -->
        <h1 class="text-center section-title">Experiencia Laboral Guardada</h1>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Empresa o Entidad</th>
                    <th>Tipo</th>
                    <th>País</th>
                    <th>Departamento</th>
                    <th>Municipio</th>
                    <th>Correo Electrónico</th>
                    <th>Teléfono</th>
                    <th>Fecha de Ingreso</th>
                    <th>Fecha de Retiro</th>
                    <th>Cargo</th>
                    <th>Dependencia</th>
                    <th>Dirección</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $resultExperienciaLaboral->fetch_assoc()) { ?>
                    <tr>
                        <td><?= htmlspecialchars($row['empresa']); ?></td>
                        <td><?= htmlspecialchars($row['tipo_empresa']); ?></td>
                        <td><?= htmlspecialchars($row['pais']); ?></td>
                        <td><?= htmlspecialchars($row['departamento']); ?></td>
                        <td><?= htmlspecialchars($row['municipio']); ?></td>
                        <td><?= htmlspecialchars($row['email_empresa']); ?></td>
                        <td><?= htmlspecialchars($row['telefono_empresa']); ?></td>
                        <td><?= htmlspecialchars($row['fecha_ingreso']); ?></td>
                        <td><?= htmlspecialchars($row['fecha_retiro']); ?></td>
                        <td><?= htmlspecialchars($row['cargo']); ?></td>
                        <td><?= htmlspecialchars($row['dependencia']); ?></td>
                        <td><?= htmlspecialchars($row['direccion']); ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <!-- Tiempo de Experiencia Laboral -->
        <h1 class="text-center section-title">Tiempo de Experiencia Laboral Guardada</h1>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Ocupación</th>
                    <th>Meses de Experiencia</th>
                    <th>Años de Experiencia</th>
                    <th>Total Años de Experiencia</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $resultTiempoExperiencia->fetch_assoc()) { ?>
                    <tr>
                        <td><?= htmlspecialchars($row['ocupacion']); ?></td>
                        <td><?= htmlspecialchars($row['meses_experiencia']); ?></td>
                        <td><?= htmlspecialchars($row['años_experiencia']); ?></td>
                        <td><?= htmlspecialchars($row['total_años_experiencia']); ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>