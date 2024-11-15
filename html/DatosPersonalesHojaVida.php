<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Personales</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/micss.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="../javascript/miScript.js"></script>
</head>

<body>
    <div class="container">
        <div class="row centered-images">
            <div class="col-sm-4 text-center">
                <img src="../images/EscudoColombiaPng.png" alt="Escudo de Colombia">
            </div>
            <div class="col-sm-4 text-center">
                <h4>FORMATO UNICO</h4>
                <h1>HOJA DE VIDA</h1>
                <h5>Persona Natural</h5>
                <h6>(Leyes 190 de 1995, 489 y 443 de 1998)</h6>
            </div>
            <div class="col-sm-4 text-center">
                <img src="../images/WhatsAppImage.jpeg" alt="Foto personal">
            </div>
        </div>

        <form method="POST" action="guardar_datos_personales.php">
            <div class="row nav-links">
                <div class="col-sm-2 text-center"><a href="DatosPersonalesHojaVida.php">DATOS PERSONALES</a></div>
                <div class="col-sm-2 text-center"><a href="FormacionAcademica.php">FORMACION ACADEMICA</a></div>
                <div class="col-sm-2 text-center"><a a href="ExperienciaLaboral.php"> EXPERIENCIA LABORAL </a></div>
                <div class="col-sm-2 text-center"><a href="TiempoExperiencia.php"> TIEMPO TOTAL DE EXPERIENCIA </a></div>
            </div>

            <div class="contenedor">

                <!-- El Título De La Sección -->
                <div class="section-title">1 DATOS PERSONALES</div>

                <!-- Personal Information Form -->
                <div class="row form-section">
                    <div class="col-sm-4">
                        <h5>PRIMER APELLIDO</h5>
                        <input type="text" id="primerApellido" name="primer_apellido" required>
                    </div>
                    <div class="col-sm-4">
                        <h5>SEGUNDO APELLIDO (O DE CASADA)</h5>
                        <input type="text" id="segundoApellido" name="segundo_apellido">
                    </div>
                    <div class="col-sm-4">
                        <h5>NOMBRES</h5>
                        <input type="text" id="nombres" name="nombres" required>
                    </div>
                </div>

                <!-- Document and Gender Selection -->
                <div class="row form-section">
                    <div class="col-sm-4">
                        <h5>DOCUMENTO DE IDENTIFICACIÓN</h5>
                        <label class="radio-inline"><input type="radio" name="tipo_documento" value="C.C" checked> C.C</label>
                        <label class="radio-inline"><input type="radio" name="tipo_documento" value="C.E"> C.E</label>
                        <label class="radio-inline"><input type="radio" name="tipo_documento" value="P.S"> Pas.</label>
                        <br>
                        <span>No.</span> <input type="text" id="numeroDoc" name="numero_doc" required>
                    </div>
                    <div class="col-sm-4">
                        <h5>SEXO</h5>
                        <label class="radio-inline"><input type="radio" name="sexo" value="F" required> F</label>
                        <label class="radio-inline"><input type="radio" name="sexo" value="M" required> M</label>
                    </div>
                    <div class="col-sm-4">
                        <h5>NACIONALIDAD</h5>
                        <label class="radio-inline"><input type="radio" name="nacionalidad" value="Col" required> COL.</label>
                        <label class="radio-inline"><input type="radio" name="nacionalidad" value="Extranjero" required> EXTRANJERO</label>
                        <br>
                        <h5>PAÍS</h5>
                        <input type="text" id="pais" name="pais" required>
                    </div>
                </div>

                <!-- Military Card, Birthdate, and Address -->
                <div class="row form-section">
                    <div class="col-sm-6">
                        <h5>LIBRETA MILITAR</h5>
                        <label class="radio-inline"><input type="radio" name="libreta_tipo" value="primera_clase"> Primera Clase</label>
                        <label class="radio-inline"><input type="radio" name="libreta_tipo" value="segunda_clase"> Segunda Clase</label>
                        <span>NÚMERO</span> <input type="text" id="libretaNumero" name="libreta_numero">
                        <h5>FECHA Y LUGAR DE NACIMIENTO</h5>
                        <h5>FECHA</h5>
                        <div class="row">
                            <div class="col-sm-4"><input type="number" min="1" max="31" placeholder="Día" name="nacimiento_dia" required></div>
                            <div class="col-sm-4"><input type="number" min="1" max="12" placeholder="Mes" name="nacimiento_mes" required></div>
                            <div class="col-sm-4"><input type="number" min="1900" max="2100" placeholder="Año" name="nacimiento_año" required></div>
                        </div>
                        <h5>PAÍS</h5><input type="text" name="pais_nacimiento" required>
                        <h5>DEPTO</h5><input type="text" name="departamento_nacimiento" required>
                        <h5>MUNICIPIO</h5><input type="text" name="municipio_nacimiento" required>
                    </div>

                    <div class="col-sm-6">
                        <h5>DIRECCIÓN DE CORRESPONDENCIA</h5>
                        <input type="text" name="direccion_correspondencia" placeholder="Dirección" required>
                        <h5>PAÍS</h5><input type="text" name="pais_correspondencia" required>
                        <h5>DEPTO</h5><input type="text" name="departamento_correspondencia" required>
                        <h5>MUNICIPIO</h5><input type="text" name="municipio_correspondencia" required>
                        <h5>TELÉFONO</h5><input type="tel" name="telefono" pattern="[0-9]{7,10}" required>
                        <h5>EMAIL</h5><input type="email" name="email" required>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="row form-section">
                    <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-primary">Guardar Datos</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>