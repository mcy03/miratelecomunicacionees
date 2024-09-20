<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/assets.css">
    <link rel="stylesheet" type="text/css" href="./style/calendario.css?1.0">
    <title>Calendario formación | Mira</title>
</head>
<body>
    <section class="banner-principal">
        <div class="title-page">
            <h1>Calendario formación</h1>
        </div>

        <p>
            Desarrolle sus conocimientos Cisco y mejore sus habilidades. Las certificaciones Cisco son reconocidas en todo el mundo y le preparan para los retos tecnológicos.
            <br><br>
            Encuentre la formación de su interés.
        </p>
    </section>
    <section class="ubicacion">
        <div class="ruta-ubi">
            <a class="ruta-page" href="<?=url?>">Home / </a><p class="page">Calendario</p>
        </div>
    </section>
    <div class="pagina">
        <section class="calendario">
            <table id="tabla-calendario" class="tabla-calendario">
                <!-- <tr class="buscador">
                    <td><input type="text" name="input-id" id="input-id" placeholder="Acrónimo"></td>
                    <td><input type="text" name="input-name" id="input-name" placeholder="Curso"></td>
                    <td><input type="text" name="input-start-date" id="input-start-date" placeholder="Fecha inicio"></td>
                    <td><input type="text" name="input-end-date" id="input-end-date" placeholder="Fecha fin"></td>
                    <td><input type="text" name="input-idioma" id="input-idioma" placeholder="idioma"></td>
                    <td><input type="text" name="input-pais" id="input-pais" placeholder="pais"></td>
                </tr> -->
                <tr class="separator">
                    <td></td>
                </tr>
                <tr class="head-table">
                    <td class="esquina-izquierda"><h3 class="title-id">Curso</h3></td>
                    <td><h3 class="title-start-date">Fecha Inicio</h3></td>
                    <td><h3 class="title-end-date">Fecha Fin</h3></td>
                    <td><h3 class="title-idioma">idioma</h3></td>
                    <td><h3 class="title-pais">País</h3></td>
                    <td><h3 class="title-timeZone">Time Zone</h3></td>
                    <td class="esquina-derecha"><h3 class="title-enroll">Enroll</h3></td>
                </tr>
                <tr id="load-hr">
                    <td colspan=7>
                        <div class="contenedor_carga">
                            <div class="carga"></div>
                        </div>
                    </td>
                </tr>
            </table>    
        </section>
        <section class="publi">
            <article class="publi-text">
                <img src="./resource/logos/clp_logo.png" alt="" class="logo_p">
                <a href="<?=url.'?controller=curso'?>" class="button-red">Cursos CISCO</a>
            </article>
            <article class="publi-text">
                <img src="./resource/logos/tripartita_logo.png" alt="" class="logo_p">
            </article>
            <article class="publi-text">
                <img src="./resource/logos/Pearson VUE-logo.jpg" alt="" class="logo_p">
            </article>
        </section>
    </div>
    
    <script src="./script/calendario/dataCalendario.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>  
</body>
</html>