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
        <p class="ruta-page">Home /</p><p class="page">On the Go</p>
    </section>
    <div class="pagina">
       <section class="filtro">
            <div class="buscador">
                <input type="text" placeholder="Search...">
            </div>
            <div class="opcion-filtro filtro-categorias">
                <h3 class="title-filtros">> Categorías</h3>
                <div id="enlaces-categorias" class="enlaces">
                </div>
            </div>
            <div class="opcion-filtro filtro-ultimas">
                <h3 class="title-filtros">> Ultimas publicaciones</h3>
                <div class="enlaces">
                    <a href="#">publicacion</a>
                    <a href="#">publicacion</a>
                    <a href="#">publicacion</a>
                    <a href="#">publicacion</a>
                </div>
            </div>
            <div class="opcion-filtro filtro-por-fecha">
                <h3 class="title-filtros">> Por fecha</h3>
                <div class="enlaces">
                    <a href="#">enero 2024</a>
                    <a href="#">febrero 2024</a>
                    <a href="#">marzo 2024</a>
                    <a href="#">abril 2024</a>
                </div>
            </div>
       </section>
        <section id="entradas" class="entradas">
            <article class="entrada">
                <div class="img-entrada" style="background-image: url('../resource/backgroundEjemplo.jpg');"></div>
                <div class="body-entrada">
                    <ul>
                        <li><img src="./resource/iconos/calendario.png" alt="">Ene 17, 2024</li>
                        <li><img src="./resource/iconos/etiqueta.png" alt="">Blog Cisco Training</li>
                        <li><img src="./resource/iconos/usuario.png" alt="">Mira</li>
                        <li><img src="./resource/iconos/calendario.png" alt="">12</li>
                    </ul>
                </div>
            </article>
            <article class="entrada">
                <div class="img-entrada" style="background-image: url('../resource/backgroundEjemplo.jpg');"></div>
                <div class="body-entrada">
                    <ul>
                        <li><img src="./resource/iconos/calendario.png" alt="">Ene 17, 2024</li>
                        <li><img src="./resource/iconos/etiqueta.png" alt="">Blog Cisco Training</li>
                        <li><img src="./resource/iconos/usuario.png" alt="">Mira</li>
                        <li><img src="./resource/iconos/calendario.png" alt="">12</li>
                    </ul>
                </div>
            </article>
            <article class="entrada">
                <div class="img-entrada" style="background-image: url('../resource/backgroundEjemplo.jpg');"></div>
                <div class="body-entrada">
                    <ul>
                        <li><img src="./resource/iconos/calendario.png" alt="">Ene 17, 2024</li>
                        <li><img src="./resource/iconos/etiqueta.png" alt="">Blog Cisco Training</li>
                        <li><img src="./resource/iconos/usuario.png" alt="">Mira</li>
                        <li><img src="./resource/iconos/calendario.png" alt="">12</li>
                    </ul>
                </div>
            </article>
        </section>
    </div>

    <script src="./script/blog/blog.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>  
</body>
</html>