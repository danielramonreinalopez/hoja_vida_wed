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
        </div>

        <h3>4- TIEMPO TOTAL DE EXPERIENCIA</h3>

        <div class="row form-section">
            <div class="col-sm-12">
                <h5>INDIQUE EL TIEMPO TOTAL DE SU EXPERIENCIA LABORAL EN UN NUMERO DE AÑOS Y MESES</h5>
            </div>
        </div>

        <div class="row form-section">
            <div class="col-sm-6">
                <h5><i>OCUPACION</i></h5>
                <select name="ocupacion" class="form-control">
                    <option value="servidor publico">servidor publico</option>
                    <option value="empleado del sector privado">empleado del sector privado</option>
                    <option value="trabajador independiente">trabajador independiente</option>
                </select>
            </div>
            <div class="col-sm-6">
                <h5><i>TIEMPO DE EXPERIENCIA</i></h5>
                <div class="row form-section">
                    <div class="col-sm-6">
                        MES
                        <select id="nacimiento-mes" name="nacimiento_mes" style="width: 10%; box-sizing: border-box;">
                            <option value="">Mes</option>
                        </select>
                    </div>
                    <div class="col-xs-6">

                        AÑO
                        <select id="nacimiento-año" name="nacimiento_año" style="width: 10%; box-sizing: border-box;">
                            <option value="">Año</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row form-section">
            <div class="col-sm-12">
                <h5>TOTAL DE TIEMPO DE EXPERIENCIA</h5>
                <input type="text" name="total_tiempo_de_experiencia" placeholder="Años" class="form-control">
            </div>
        </div>
    </div>
</body>

</html>

