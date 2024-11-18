<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/micss.css">
    <title>Experiencia laboral</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript" src="../javascript/miScript.js"></script>
</head>

<body>

    <div class="container">
        <div class="row centered-images">
            <div class="col-sm-4 text-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkqrBfWtzYEHZOcWAdArjIdex-EfGiRD8iNQ&s" alt="Escudo de Colombia">
            </div>
            <div class="col-sm-4 text-center">
                <h4>FORMATO UNICO</h4>
                <h1>HOJA DE VIDA</h1>
                <h5>Persona Natural</h5>
                <h6>(Leyes 190 de 1995, 489 y 443 de 1998)</h6>
            </div>
            <div class="col-sm-4 text-center">
                <img src="https://www.race.es/revista-autoclub/wp-content/uploads/sites/4/2016/09/Toyota-300x262.jpg" alt="Foto personal">
            </div>
        </div>

        <div class="row nav-links">
            <div class="col-sm-2 text-center"><a href="DatosPersonalesHojaVida.php">DATOS PERSONALES</a></div>
            <div class="col-sm-2 text-center"><a href="FormacionAcademica.php">FORMACION ACADEMICA</a></div>
            <div class="col-sm-2 text-center"><a href="ExperienciaLaboral.php">EXPERIENCIA LABORAL</a></div>
            <div class="col-sm-2 text-center"><a href="TiempoExperiencia.php">TIEMPO TOTAL DE EXPERIENCIA</a></div>
            <div class="col-sm-2 text-center"><a href="mostrar_datos.php">DATOS GUARDADOS</a></div>

        </div>
        <h3>3- EXPERIENCIA LABORAL</h3>

        <form method="POST" action="guardar_datos_experiencialaboral.php">
            <div class="row form-section">
                <div class="col-sm-12">
                    <h4>Empleo Actual o Contrato Vigente</h4>
                </div>
            </div>

            <div class="row form-section">
                <div class="col-sm-12">
                    <h5>Empresa o Entidad:</h5>
                    <input type="text" name="empresa" class="form-control" required>
                </div>
            </div>

            <div class="row form-section">
                <div class="col-sm-12">
                    <h5>Publica/Privada:</h5>
                    <label class="radio-inline"><input type="radio" name="tipo_empresa" value="publica" required> Pública</label>
                    <label class="radio-inline"><input type="radio" name="tipo_empresa" value="privada" required> Privada</label>
                </div>
            </div>

            <div class="row form-section">
                 PAIS
                <select id="pais-correspondencia" name="pais">
                    <option value="">Seleccione un país</option>
                </select>

                DEPARTAMENTO
                <select id="departamento-correspondencia" name="departamento">
                    <option value="">Seleccione un departamento</option>
                </select>

                MUNICIPIO
                <select id="municipio-nacimiento" name="municipio">
                    <option value="">Seleccione un municipio</option>
                </select>
            </div>

            <div class="row form-section">
                <div class="col-sm-6">
                    <h5>Correo Electronico:</h5>
                    <input type="email" name="email_empresa" class="form-control" required>
                </div>
                <div class="col-sm-6">
                    <h5>Telefonos:</h5>
                    <input type="text" name="telefono_empresa" class="form-control" required>
                </div>
            </div>

            <div class="row form-section">
                <div class="col-sm-6">
                    <h5>Fecha de Ingreso:</h5>
                    <input type="date" name="fecha_ingreso" class="form-control" required>
                </div>
                <div class="col-sm-6">
                    <h5>Fecha de Retiro:</h5>
                    <input type="date" name="fecha_retiro" class="form-control">
                </div>
            </div>

            <div class="row form-section">
                <div class="col-sm-12">
                    <h5>Cargo o Contrato:</h5>
                    <input type="text" name="cargo" class="form-control" required>
                </div>
            </div>

            <div class="row form-section">
                <div class="col-sm-12">
                    <h5>Dependencia:</h5>
                    <input type="text" name="dependencia" class="form-control">
                </div>
            </div>

            <div class="row form-section">
                <div class="col-sm-12">
                    <h5>Direccion:</h5>
                    <input type="text" name="direccion" class="form-control" required>
                </div>
            </div>

            <div class="row form-section">
                <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-primary">Guardar Experiencia Laboral</button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>