<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/assets.css">
    <link rel="stylesheet" type="text/css" href="./style/blog.css?1.0">
    <title>On the Go | Miratelecomunicacions</title>
</head>
<body>
    <section class="banner-principal">
        <div class="title-page">
            <h1>On the Go</h1>
        </div>

        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Quisque a risus non sapien facilisis egestas. 
            Vivamus scelerisque ex ipsum, a tempor velit tristique id. 
            Ut in placerat erat.</span>
    </section>
    <section class="ubicacion">
        <div class="ruta-ubi">
            <a class="ruta-page" href="<?=url?>">Home / </a><p class="page">On the Go</p>
        </div>
    </section>
    <div class="pagina">
       <section class="filtro">
            <div class="buscador">
                <input type="text" placeholder="Search...">
                <p class="drop-filter" id="quitar-categoria">X</p>
            </div>
            <div class="opcion-filtro filtro-categorias">
                <div class="title-close">
                    <h3 class="title-filtros" id="filtro-por-categoria">> Categorías</h3>
                </div>
                
                <div id="enlaces-categorias" class="enlaces" style="display: none;">
                </div>
            </div>
            <div class="opcion-filtro filtro-ultimas">
                <div class="title-close">
                    <h3 class="title-filtros" id="filtro-por-ultima">> Ultimas publicaciones</h3>
                </div>
                <div id="enlaces-last-entries" class="enlaces" style="display: none;">
                </div>
            </div>
            <div class="opcion-filtro filtro-por-fecha">
                <div class="title-close">
                    <h3 class="title-filtros" id="filtro-por-fecha">> Por fecha</h3>
                </div>

                <div id="enlaces-por-fecha" class="enlaces" style="display: none;">
                    <p class="fecha">enero 2024</p>
                    <p class="fecha">febrero 2024</p>
                    <p class="fecha">marzo 2024</p>
                    <p class="fecha">abril 2024</p>
                </div>
            </div>
       </section>
        <section id="entradas" class="entradas">

        </section>
    </div>

    <script src="./script/blog/blog.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>  
</body>
</html>