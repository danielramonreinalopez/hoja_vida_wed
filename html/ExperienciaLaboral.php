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
        <h3>3- EXPERIENCIA LABORAL</h3>

        <div class="row form-section">
            <div class="col-sm-12">
                <h4>Empleo Actual o Contrato Vigente</h4>
            </div>
        </div>

        <div class="row form-section">
            <div class="col-sm-12">
                <h5>Empresa o Entidad:</h5>
                <input type="text" name="empresa_actual" class="form-control">
            </div>
        </div>

        <div class="row form-section">
            <div class="col-sm-12">
                <h5>Publica/Privada:</h5>
                <label class="radio-inline"><input type="radio" name="tipo_empresa_actual" value="publica">
                    Pública</label>
                <label class="radio-inline"><input type="radio" name="tipo_empresa_actual" value="privada">
                    Privada</label>
            </div>
        </div>

        <div class="row form-section">
            <div class="col-sm-4">
                PAIS
                <select id="pais-nacimiento" name="pais_nacimiento">
                    <option value="">Seleccione un país</option>
                </select>
            </div>
            <div class="col-sm-4">
                DEPARTAMENTO
                <select id="departamento-nacimiento" name="departamento_nacimiento">
                    <option value="">Seleccione un departamento</option>
                </select>
                <br>

                
            </div>
            <div class="col-sm-4">
                MUNICIPIO
                <select id="municipio-nacimiento" name="municipio_nacimiento">
                    <option value="">Seleccione un municipio</option>
                </select>
            </div>
        </div>

        <div class="row form-section">
            <div class="col-sm-6">
                <h5>Correo Electronico:</h5>
                <input type="email" name="email_empresa_actual" class="form-control">
            </div>
            <div class="col-sm-6">
                <h5>Telefonos:</h5>
                <input type="text" name="telefono_empresa_actual" class="form-control">
            </div>
        </div>

        <div class="row form-section">
            <div class="col-sm-6">
                <h5>Fecha de Ingreso:</h5>
                <div class="row">
                    <div class="col-xs-4">
                        <input type="text" name="dia_ingreso_actual" placeholder="Dia" class="form-control">
                    </div>
                    <div class="col-xs-4">
                        <input type="text" name="mes_ingreso_actual" placeholder="Mes" class="form-control">
                    </div>
                    <div class="col-xs-4">
                        <input type="text" name="ano_ingreso_actual" placeholder="Año" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <h5>Fecha de Retiro:</h5>
                <div class="row">
                    <div class="col-xs-4">
                        <input type="text" name="dia_retiro_actual" placeholder="Dia" class="form-control">
                    </div>
                    <div class="col-xs-4">
                        <input type="text" name="mes_retiro_actual" placeholder="Mes" class="form-control">
                    </div>
                    <div class="col-xs-4">
                        <input type="text" name="ano_retiro_actual" placeholder="Año" class="form-control">
                    </div>
                </div>
            </div>
        </div>

        <div class="row form-section">
            <div class="col-sm-12">
                <h5>Cargo o Contrato:</h5>
                <input type="text" name="cargo_actual" class="form-control">
            </div>
        </div>

        <div class="row form-section">
            <div class="col-sm-12">
                <h5>Dependencia:</h5>
                <input type="text" name="dependencia_actual" class="form-control">
            </div>
        </div>

        <div class="row form-section">
            <div class="col-sm-12">
                <h5>Direccion:</h5>
                <input type="text" name="direccion_actual" class="form-control">
            </div>
        </div>

        <div class="row form-section"></div>
        <div class="col-sm-12">
            <h4>Empleo o Contrato anterior</h4>
        </div>


        <div class="row form-section">
            <div class="col-sm-12">
                <h5>Empresa o Entidad:</h5>
                <input type="text" name="empresa_actual" class="form-control">
            </div>
        </div>

        <div class="row form-section">
            <div class="col-sm-12">
                <h5>Publica/Privada:</h5>
                <label class="radio-inline"><input type="radio" name="tipo_empresa_actual" value="publica">
                    Pública</label>
                <label class="radio-inline"><input type="radio" name="tipo_empresa_actual" value="privada">
                    Privada</label>
            </div>
        </div>

        <div class="row form-section">
            <div class="col-sm-4">
                <h5>Pais:</h5>
                <input type="text" name="pais_actual" class="form-control">
            </div>
            <div class="col-sm-4">
                <h5>Departamento:</h5>
                <input type="text" name="departamento_actual" class="form-control">
            </div>
            <div class="col-sm-4">
                <h5>Municipio:</h5>
                <input type="text" name="municipio_actual" class="form-control">
            </div>
        </div>

        <div class="row form-section">
            <div class="col-sm-6">
                <h5>Correo Electronico:</h5>
                <input type="email" name="email_empresa_actual" class="form-control">
            </div>
            <div class="col-sm-6">
                <h5>Telefonos:</h5>
                <input type="text" name="telefono_empresa_actual" class="form-control">
            </div>
        </div>

        <div class="row form-section">
            <div class="col-sm-6">
                <h5>Fecha de Ingreso:</h5>
                <div class="row">
                    <div class="col-xs-4">
                        <input type="text" name="dia_ingreso_actual" placeholder="Dia" class="form-control">
                    </div>
                    <div class="col-xs-4">
                        <input type="text" name="mes_ingreso_actual" placeholder="Mes" class="form-control">
                    </div>
                    <div class="col-xs-4">
                        <input type="text" name="ano_ingreso_actual" placeholder="Año" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <h5>Fecha de Retiro:</h5>
                <div class="row">
                    <div class="col-xs-4">
                        <input type="text" name="dia_retiro_actual" placeholder="Dia" class="form-control">
                    </div>
                    <div class="col-xs-4">
                        <input type="text" name="mes_retiro_actual" placeholder="Mes" class="form-control">
                    </div>
                    <div class="col-xs-4">
                        <input type="text" name="ano_retiro_actual" placeholder="Año" class="form-control">
                    </div>
                </div>
            </div>
        </div>

        <div class="row form-section">
            <div class="col-sm-12">
                <h5>Cargo o Contrato:</h5>
                <input type="text" name="cargo_actual" class="form-control">
            </div>
        </div>

        <div class="row form-section">
            <div class="col-sm-12">
                <h5>Dependencia:</h5>
                <input type="text" name="dependencia_actual" class="form-control">
            </div>
        </div>

        <div class="row form-section">
            <div class="col-sm-12">
                <h5>Direccion:</h5>
                <input type="text" name="direccion_actual" class="form-control">
            </div>
        </div>

    </div>


</body>

</html>