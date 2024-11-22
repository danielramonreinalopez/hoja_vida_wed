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
            <div class="col-sm-2 text-center"><a href="index.php">INICIO</a></div>
            <div class="col-sm-2 text-center"><a href="mostrar_datos.php">DATOS GUARDADOS</a></div>

        </div>

        <h3>4- TIEMPO TOTAL DE EXPERIENCIA</h3>

        <form method="POST" action="guardar_datos_tiempoexperiencia.php">
            <div class="row form-section">
                <div class="col-sm-12">
                    <h5>INDIQUE EL TIEMPO TOTAL DE SU EXPERIENCIA LABORAL EN UN NUMERO DE AÑOS Y MESES</h5>
                </div>
            </div>

            <div class="row form-section">
                <div class="col-sm-6">
                    <h5><i>OCUPACION</i></h5>
                    <select name="ocupacion" class="form-control" required>
                        <option value="servidor publico">servidor publico</option>
                        <option value="empleado del sector privado">empleado del sector privado</option>
                        <option value="trabajador independiente">trabajador independiente</option>
                    </select>
                </div>
                <div class="col-sm-6">
                    <h5><i>TIEMPO DE EXPERIENCIA</i></h5>
                    <div class="row form-section">
                        <div class="col-sm-6">
                            <h5>MESES</h5>
                            <input type="number" name="meses_experiencia" class="form-control" min="0" max="11" required>
                        </div>
                        <div class="col-sm-6">
                            <h5>AÑOS</h5>
                            <input type="number" name="anios_experiencia" class="form-control" min="0" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row form-section">
                <div class="col-sm-12">
                    <h5>TOTAL DE TIEMPO DE EXPERIENCIA (EN AÑOS)</h5>
                    <input type="text" name="total_anios_experiencia" placeholder="Años" class="form-control" required>
                </div>
            </div>

            <div class="row form-section">
                <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-primary">Guardar Tiempo de Experiencia</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>