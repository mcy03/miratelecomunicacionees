<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/assets.css">
    <link rel="stylesheet" type="text/css" href="./style/laboratorio.css?1.0">
    <title>Laboratorios Miratelecomunicacions</title>
</head>
<body>
    <section class="banner-principal">
        <div class="title-page">
            <h1>Laboratorios</h1>
        </div>

        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Quisque a risus non sapien facilisis egestas. 
            Vivamus scelerisque ex ipsum, a tempor velit tristique id. 
            Ut in placerat erat.</span>
    </section>
    <section class="ubicacion">
        <div class="ruta-ubi">
            <a class="ruta-page" href="<?=url?>">Home / </a><p class="page">Laboratorios</p>
        </div>
    </section>
    <div class="pagina">
        <section class="lab">
            <table id="tabla-lab" class="tabla-lab">
                <tr class="buscador">
                    <td><input type="text" name="input-id" id="input-id" placeholder="id"></td>
                    <td><input type="text" name="input-name" id="input-name" placeholder="name"></td>
                    <td><input type="text" name="input-start-date" id="input-start-date" placeholder="date"></td>
                    <td><input type="text" name="input-end-date" id="input-end-date" placeholder="end date"></td>
                </tr>
                <tr class="separator">
                    <td></td>
                </tr>
                <tr class="head-table">
                    <td class="esquina-izquierda"><h3 class="title-id">ID Curso</h3></td>
                    <td><h3 class="title-name">Descripción curso</h3></td>
                    <td><h3 class="title-start-date">Duración</h3></td>
                    <td class="esquina-derecha"><h3 class="title-end-date">Pods Avaliable</h3></td>
                </tr>
                <tr id="tr-loader">
                    <td colspan=4>
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
    
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>    
    <script src="./script/laboratorio/dataLaboratorio.js"></script>
</body>
</html>