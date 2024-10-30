<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/micss.css">
    <title>Datos personales</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="../javascript/miScript.js"></script>
</head>
<body>
    <div class="container">
        <div class="row centered-images">
            <div class="col-sm-4 text-center">
                <img src="C:/Users/Asus/OneDrive/Documentos/visual code projects/Progamacion web/Hoja de vida/EscudoColombiaPng.png" alt="Escudo de Colombia">
            </div>
            <div class="col-sm-4 text-center">
                <h4>FORMATO UNICO</h4>
                <h1>HOJA DE VIDA</h1>
                <h5>Persona Natural</h5>
                <h6>(Leyes 190 de 1995, 489 y 443 de 1998)</h6>
            </div>
            <div class="col-sm-4 text-center">
                <img src="C:/Users/Asus/OneDrive/Documentos/visual code projects/Progamacion web/Hoja de vida/WhatsApp Image 2024-08-16 at 8.42.07 PM.jpeg" alt="Foto personal">
            </div>
        </div>
        <!-- Links de navegación -->
        <div class="row nav-links">
            <div class="col-sm-2 text-center"><a href="DatosPersonalesHojaVida.php">DATOS PERSONALES</a></div>
            <div class="col-sm-2 text-center"><a href="FormacionAcademica.php">FORMACION ACADEMICA</a></div>
            <div class="col-sm-2 text-center"><a href="ExperienciaLaboral.php">EXPERIENCIA LABORAL</a></div>
            <div class="col-sm-2 text-center"><a href="TiempoExperiencia.php">TIEMPO TOTAL DE EXPERIENCIA</a></div>
            <div class="col-sm-4 text-center"><a href="FirmaServidor.php">FIRMA DEL SERVIDOR PUBLICO</a></div>
        </div>
        
        <h3>1 - DATOS PERSONALES</h3>
        <button id="previewBtn" class="btn btn-primary">Previsualizar</button>
        <div id="previewSection" style="display: none;">
            <h3>Vista Previa de Datos Personales</h3>
            <p id="previewContent"></p>
        </div>

        <!-- Datos personales y selecciones dinámicas -->
        <div class="row form-section">
            <div class="col-sm-4">
                <h5>PRIMER APELLIDO</h5>
                <input type="text" id="primerApellido" name="primer_apellido">
            </div>
            <div class="col-sm-4">
                <h5>SEGUNDO APELLIDO (O DE CASADA)</h5>
                <input type="text" id="segundoApellido" name="segundo_apellido">
            </div>
            <div class="col-sm-4">
                <h5>NOMBRES</h5>
                <input type="text" id="nombres" name="nombres">
            </div>
        </div>

        <!-- Sección de selección de nacionalidad, país, departamento y municipio -->
        <div class="row form-section">
            <div class="col-sm-4">
                <h5>DOCUMENTO DE IDENTIFICACIÓN</h5>
                <label class="radio-inline"><input type="radio" name="optradio" value="C.C" checked> C.C</label>
                <label class="radio-inline"><input type="radio" name="optradio" value="C.E"> C.E</label>
                <label class="radio-inline"><input type="radio" name="optradio" value="P.S"> P.S</label>
                <br><span>No.</span>
                <input type="text" id="numeroDoc" name="numero_doc">
            </div>
            <div class="col-sm-4">
                <h5>SEXO</h5>
                <label class="radio-inline"><input type="radio" name="sexo" value="F"> F</label>
                <label class="radio-inline"><input type="radio" name="sexo" value="M"> M</label>
            </div>
            <div class="col-sm-4">
                <label class="radio-inline"><h5>NACIONALIDAD</h5></label>
                <br>
                COL. <input type="radio" name="nacionalidad" value="Col">
                EXTRANJERO. <input type="radio" name="nacionalidad" value="EXTRANJERO">
                <br>PAIS
                <select id="pais-nacimiento" name="pais_nacimiento"><option value="">Seleccione un país</option></select>
            </div>
        </div>

        <!-- Fecha y lugar de nacimiento -->
        <div class="row form-section">
            <div class="col-sm-6">
                <h5>FECHA Y LUGAR DE NACIMIENTO</h5>
                <h5>FECHA</h5>
                DIA <select id="nacimiento-dia" name="nacimiento_dia"><option value="">Día</option></select>
                MES <select id="nacimiento-mes" name="nacimiento_mes"><option value="">Mes</option></select>
                AÑO <select id="nacimiento-año" name="nacimiento_año"><option value="">Año</option></select>
            
                <br><h5>PAIS</h5><select id="pais-nacimiento" name="pais_nacimiento"><option value="">Seleccione un país</option></select>
                <br><h5>DEPARTAMENTO</h5><select id="departamento-nacimiento" name="departamento_nacimiento"><option value="">Seleccione un departamento</option></select>
                <br><h5>MUNICIPIO</h5><select id="municipio-nacimiento" name="municipio_nacimiento"><option value="">Seleccione un municipio</option></select>
            </div>

            <!-- Dirección de correspondencia -->
            <div class="col-sm-6">
                <h5>DIRECCIÓN DE CORRESPONDENCIA</h5>
                <input type="text" name="direccion" style="width: 50%; box-sizing: border-box;">
                <br>PAIS <select id="pais-correspondencia" name="pais_correspondencia"><option value="">Seleccione un país</option></select>
                <br>DEPTO <select id="departamento-correspondencia" name="departamento_correspondencia" style="width: 20%; box-sizing: border-box;"><option value="">Seleccione un departamento</option></select>
                <br>MUNICIPIO <select id="municipio-correspondencia" name="municipio_correspondencia" style="width: 20%; box-sizing: border-box;"><option value="">Seleccione un municipio</option></select>
                <br>TELÉFONO <input type="text" name="telefono" style="width: 50%; box-sizing: border-box;">
                <br>EMAIL <input type="text" name="email" style="width: 50%; box-sizing: border-box;">
            </div>
        </div>
    </div>
</body>
</html>
