<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/assets.css">
    <link rel="stylesheet" type="text/css" href="./style/calendario.css?1.0">
    <title>Cursos Mira</title>
</head>
<body>
    <section class="banner-principal">
        <div class="title-page">
            <h1>Calendario</h1>
        </div>

        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Quisque a risus non sapien facilisis egestas. 
            Vivamus scelerisque ex ipsum, a tempor velit tristique id. 
            Ut in placerat erat.</span>
    </section>
    <section class="ubicacion">
        <div class="ruta-ubi">
            <a class="ruta-page" href="<?=url?>">Home / </a><p class="page">Calendario</p>
        </div>
    </section>
    <div class="pagina">
        <section class="calendario">
            <table id="tabla-calendario" class="tabla-calendario">
                <tr class="buscador">
                    <td><input type="text" name="input-id" id="input-id" placeholder="id"></td>
                    <td><input type="text" name="input-name" id="input-name" placeholder="name"></td>
                    <td><input type="text" name="input-start-date" id="input-start-date" placeholder="date"></td>
                    <td><input type="text" name="input-end-date" id="input-end-date" placeholder="end date"></td>
                    <td><input type="text" name="input-idioma" id="input-idioma" placeholder="language"></td>
                    <td><input type="text" name="input-timeZone" id="input-timeZone" placeholder="time"></td>
                    <td><input type="text" name="input-enroll" id="input-enroll" placeholder="contact"></td>
                </tr>
                <tr class="separator">
                    <td></td>
                </tr>
                <tr class="head-table">
                    <td class="esquina-izquierda"><h3 class="title-id">ID Curso</h3></td>
                    <td><h3 class="title-name">Curso</h3></td>
                    <td><h3 class="title-start-date">Fecha Inicio</h3></td>
                    <td><h3 class="title-end-date">Fecha Fin</h3></td>
                    <td><h3 class="title-idioma">idioma</h3></td>
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
                <h4>publicidad</h4>
                <p>
                    Esto es contenido publicitario para otras 
                    entradas de la web.
                </p>
                <button class="button-red">Ver</button>
            </article>
            <article class="publi-text">
                <h4>publicidad</h4>
                <p>
                    Esto es contenido publicitario para otras 
                    entradas de la web.
                </p>
                <button class="button-red">Ver</button>
            </article>
            <article class="publi-text">
                <h4>publicidad</h4>
                <p>
                    Esto es contenido publicitario para otras 
                    entradas de la web.
                </p>
                <button class="button-red">Ver</button>
            </article>
        </section>
    </div>
    
    <script src="./script/calendario/dataCalendario.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>  
</body>
</html>