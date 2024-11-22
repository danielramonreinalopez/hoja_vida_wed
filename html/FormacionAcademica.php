<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/micss.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="../javascript/miScript.js"></script>
    <title>Formación Académica</title>
</head>

<body>
    <div class="container">
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
                <div class="col-sm-2 text-center"><a href="index.php">INICIO</a></div>
                <div class="col-sm-2 text-center"><a href="ExperienciaLaboral.php">EXPERIENCIA LABORAL</a></div>
                <div class="col-sm-2 text-center"><a href="TiempoExperiencia.php">TIEMPO TOTAL DE EXPERIENCIA</a></div>
                <div class="col-sm-2 text-center"><a href="mostrar_datos.php">DATOS GUARDADOS</a></div>


            </div>

            <H3>2-FORMACION ACADEMICA</H3>

            <form method="POST" action="guardar_datos_formacionacademica.php">
                <!-- Educación Básica y Media Section -->
                <div class="form-section">
                    <h5>EDUCACIÓN BÁSICA Y MEDIA</h5>
                    <p>MARQUE CON UNA X EL ÚLTIMO GRADO APROBADO (LOS GRADOS DE 1o. A 6o. DE BACHILLERATO EQUIVALEN A LOS GRADOS 6o. A 11o. DE EDUCACIÓN BÁSICA SECUNDARIA Y MEDIA)</p>
                    <div class="row">
                        <div class="col-xs-4 text-center">
                            <h6>PRIMARIA</h6>
                            <label class="radio-inline"><input type="radio" name="ultimo_grado_aprobado" value="1" required>1o</label>
                            <label class="radio-inline"><input type="radio" name="ultimo_grado_aprobado" value="2">2o</label>
                            <label class="radio-inline"><input type="radio" name="ultimo_grado_aprobado" value="3">3o</label>
                            <label class="radio-inline"><input type="radio" name="ultimo_grado_aprobado" value="4">4o</label>
                            <label class="radio-inline"><input type="radio" name="ultimo_grado_aprobado" value="5">5o</label>
                        </div>
                        <div class="col-xs-4 text-center">
                            <h6>SECUNDARIA</h6>
                            <label class="radio-inline"><input type="radio" name="ultimo_grado_aprobado" value="6">6o</label>
                            <label class="radio-inline"><input type="radio" name="ultimo_grado_aprobado" value="7">7o</label>
                            <label class="radio-inline"><input type="radio" name="ultimo_grado_aprobado" value="8">8o</label>
                            <label class="radio-inline"><input type="radio" name="ultimo_grado_aprobado" value="9">9o</label>
                        </div>
                        <div class="col-xs-4 text-center">
                            <h6>MEDIA</h6>
                            <label class="radio-inline"><input type="radio" name="ultimo_grado_aprobado" value="10">10o</label>
                            <label class="radio-inline"><input type="radio" name="ultimo_grado_aprobado" value="11">11o</label>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-xs-6">
                            <h6>TÍTULO OBTENIDO:</h6>
                            <select name="titulo_obtenido" class="form-control">
                                <option value="" disabled selected>Seleccione un título</option>
                                <option value="tecnica">Técnica</option>
                                <option value="tecnologica">Tecnológica</option>
                                <option value="tecnologica_especialidad">Tecnológica Especialidad</option>
                                <option value="especializacion">Especialización</option>
                                <option value="maestria">Maestría</option>
                                <option value="doctorado">Doctorado</option>
                            </select>
                        </div>
                        <div class="col-xs-6">
                            <h6>FECHA DE GRADO:</h6>
                            <div class="row">
                                <div class="col-xs-6">
                                    <input type="number" name="fecha_grado_mes" class="form-control" placeholder="Mes" min="1" max="12">
                                </div>
                                <div class="col-xs-6">
                                    <input type="number" name="fecha_grado_anio" class="form-control" placeholder="Año" min="1900" max="2100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Educación Superior Section -->
                <div class="form-section">
                    <h5>EDUCACIÓN SUPERIOR (PREGRADO Y POSTGRADO)</h5>
                    <p>Diligencie este punto en estricto orden cronológico, en modalidad académica escriba: TC (Técnica), TL (Tecnológica), TE (Tecnológica Especializada), UN (Universitaria), ES (Especialización), MG (Maestría o Magister), DOC (Doctorado o PhD).</p>
                    <table class="table-container">
                        <tr>
                            <th>Modalidad Académica</th>
                            <th>No. Semestres Aprobados</th>
                            <th>Graduado (SI / NO)</th>
                            <th>Nombre de los Estudios o Título Obtenido</th>
                            <th>Terminación (Mes / Año)</th>
                            <th>No. de Tarjeta Profesional</th>
                        </tr>
                        <tr>
                            <td><select name="Modalidad academica" class="form-control">
                                    <option value="" disabled selected>Seleccione un título</option>
                                    <option value="tecnica">TC</option>
                                    <option value="tecnologica">TL</option>
                                    <option value="tecnologica_especialidad">TE</option>
                                    <option value="especializacion">UN</option>
                                    <option value="maestria">ES</option>
                                    <option value="doctorado">MG</option>
                                    <option value="doctorado">DOC</option>
                                </select>

                            </td>
                            <td><input type="number" name="semestres_aprobados" class="form-control" min="1"></td>
                            <td>
                                <label class="radio-inline"><input type="radio" name="graduado" value="SI" required>SI</label>
                                <label class="radio-inline"><input type="radio" name="graduado" value="NO">NO</label>
                            </td>
                            <td><input type="text" name="titulo_obtenido_superior" class="form-control"></td>
                            <td>
                                <input type="number" name="terminacion_mes" class="form-control" placeholder="Mes" min="1" max="12" style="width: 45%; display: inline-block;">
                                <input type="number" name="terminacion_anio" class="form-control" placeholder="Año" min="1900" max="2100" style="width: 45%; display: inline-block;">
                            </td>
                            <td><input type="text" name="tarjeta_profesional" class="form-control"></td>
                        </tr>
                    </table>
                </div>

                <!-- Idiomas Section -->
                <div class="form-section">
                    <h5>ESPECIFIQUE LOS IDIOMAS DIFERENTES AL ESPAÑOL QUE: HABLA, LEE, ESCRIBE DE FORMA, REGULAR (R), BIEN (B) O MUY BIEN (MB)</h5>
                    <table class="table-container">
                        <tr>
                            <th>Idioma</th>
                            <th>Lo Habla</th>
                            <th>Lo Lee</th>
                            <th>Lo Escribe</th>
                        </tr>
                        <tr>
                            <td>
                                <select name="idioma" class="form-control">
                                    <option value="" disabled selected>Seleccione un idioma</option>
                                    <option value="espanol">Español</option>
                                    <option value="ingles">Inglés</option>
                                    <option value="frances">Francés</option>
                                    <option value="aleman">Alemán</option>
                                    <option value="italiano">Italiano</option>
                                    <option value="portugues">Portugués</option>
                                    <option value="mandarin">Mandarín</option>
                                </select>
                            </td>
                            <td>
                                <label class="radio-inline"><input type="radio" name="habla" value="R" required>R</label>
                                <label class="radio-inline"><input type="radio" name="habla" value="B">B</label>
                                <label class="radio-inline"><input type="radio" name="habla" value="MB">MB</label>
                            </td>
                            <td>
                                <label class="radio-inline"><input type="radio" name="lee" value="R" required>R</label>
                                <label class="radio-inline"><input type="radio" name="lee" value="B">B</label>
                                <label class="radio-inline"><input type="radio" name="lee" value="MB">MB</label>
                            </td>
                            <td>
                                <label class="radio-inline"><input type="radio" name="escribe" value="R" required>R</label>
                                <label class="radio-inline"><input type="radio" name="escribe" value="B">B</label>
                                <label class="radio-inline"><input type="radio" name="escribe" value="MB">MB</label>
                            </td>
                        </tr>
                    </table>
                </div>

                <!-- Submit Button -->
                <div class="row form-section">
                    <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-primary">Guardar Datos de Formación Académica</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>