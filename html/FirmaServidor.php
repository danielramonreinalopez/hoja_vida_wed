<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>FIRMA DEL SERVIDOR PUBLICO O CONTRATISTA</title>
    <link rel="stylesheet" href="../css/micss.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript" src="../javascript/miScript.js"></script>
</head>

<body>
    <div class="container">
        <div class="row centered-images">
            <div class="col-sm-4 text-center">
                <img src="C:\Users\Asus\OneDrive\Documentos\visual code projects\Progamacion web\Hoja de vida\EscudoColombiaPng.png"
                    alt="Escudo de Colombia">
            </div>
            <div class="col-sm-4 text-center">
                <h4>FORMATO UNICO</h4>
                <h1>HOJA DE VIDA</h1>
                <h5>Persona Natural</h5>
                <h6>(Leyes 190 de 1995, 489 y 443 de 1998)</h6>
            </div>
            <div class="col-sm-4 text-center">
                <img src="C:\Users\Asus\OneDrive\Documentos\visual code projects\Progamacion web\Hoja de vida\WhatsApp Image 2024-08-16 at 8.42.07 PM.jpeg"
                    alt="Foto personal">
            </div>
        </div>

        <div class="row nav-links">
        <div class="col-sm-2 text-center"><a href="DatosPersonalesHojaVida.php">DATOS PERSONALES</a></div>
            <div class="col-sm-2 text-center"><a href="FormacionAcademica.php">FORMACION ACADEMICA</a></div>
            <div class="col-sm-2 text-center"><a href="ExperienciaLaboral.php">EXPERIENCIA LABORAL</a></div>
            <div class="col-sm-2 text-center"><a href="TiempoExperiencia.php">TIEMPO TOTAL DE EXPERIENCIA</a></div>
            <div class="col-sm-4 text-center"><a href="FirmaServidor.php">FIRMA DEL SERVIDOR PUBLICO</a></div>
        
        <h3>5- FIRMA DEL SERVIDOR PUBLICO O CONTRATISTA</h3>

        <div class="row form-section">
            <div class="col-sm-12">
                <h5>MANIFIESTO BAJO LA GRAVEDAD DEL JURAMENTO QUE</h5>
                <label class="radio-inline"><input type="radio" name="juramento" value="si"> SI</label>
                <label class="radio-inline"><input type="radio" name="juramento" value="no"> NO</label>
                <h5>ME ENCUENTRO DENTRO DE LAS CAUSALES DE INHABILIDAD E INCOPATIBILIDAD DEL ORDEN CONSTITUCIONAL O
                    LEGAL,
                    PARA EJERCER CARGOS EMPLEOS PUBLICOS O PARA CELEBRAR CONTRATOS DE PRESTACION DE SERVISIOS CON LA
                    ADMINISTRACION PUBLICA.</h5>
                <h5>PARA TODOS LOS EFECTOS LEGALES, CERTIFICO QUE LOS DATOS POR MI ANOTADOS EN EL PRESENTE FORMATO DE
                    HOJA
                    DE VIDA, SON VERACES,(ARTICULO 5o. DE LA LEY 190/95)</h5>
            </div>
        </div>

        <div class="row form-section">
            <div class="col-sm-6">
                <br><h5>DEPARTAMENTO</h5><select id="departamento-nacimiento" name="departamento_nacimiento"><option value="">Seleccione un departamento</option></select>
                <br><h5>MUNICIPIO</h5><select id="municipio-nacimiento" name="municipio_nacimiento"><option value="">Seleccione un municipio</option></select>
            </div>
            <div class="col-sm-6">
                <h5><i>FECHA</i></h5>
                <div class="row">
                    DIA <select id="nacimiento-dia" name="nacimiento_dia"><option value="">Día</option></select>
                    MES <select id="nacimiento-mes" name="nacimiento_mes"><option value="">Mes</option></select>
                    AÑO <select id="nacimiento-año" name="nacimiento_año"><option value="">Año</option></select>
                </div>
            </div>
        </div>

        <div class="row form-section">
            <div class="col-sm-12">
                <h5>FIRMA DEL SERVIDOR PUBLICO O CONTRATISTA</h5>
                <input type="text" name="Firma" placeholder="Firma" class="form-control">
            </div>
        </div>
    </div>
</body>

</html>