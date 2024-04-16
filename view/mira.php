<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/assets.css">
    <link rel="stylesheet" type="text/css" href="./style/mira.css?1.0">
    <title>Miratelecomunicacions</title>
</head>
<body>
    <?php
        if (isset($section)) {
    ?>
            <input id="seccion-seleccionada" type="hidden" value="<?=$section?>">
    <?php
        }
    ?>
   
    
    <section class="banner-principal">
        <div class="title-page">
            <h1>Mira Telecomunicacions</h1>
        </div>

        <p class="subtitle">Contactamos con un mundo con diferencia</p>
        
        <span>Somos un grupo de ingenieros y profesionales que poseemos el nivel de experiencia, 
            conocimiento y convicción para convertirnos en la mejor alternativa del mercado para capacitar 
            y gestionar el conocimiento tecológico tanto de las TIC como de los clientes finales que soporten 
            su infraestructura con tecnología Cisco</span>
    </section>
    <section class="ubicacion">
        <div class="ruta-ubi">
            <a class="ruta-page" href="<?=url?>">Home / </a><p class="page">Mira</p>
        </div>
    </section>
    <div class="pagina">
        <h2>¿Que ofrecemos?</h2>
        <section class="gallery-image">
            <div class="image selected"><img src="./resource/fondo-ejemplo-ofertas.jpg" alt=""></div>
            <div class="image"><img src="./resource/fondo-ejemplo-ofertas.jpg" alt=""></div>
            <div class="image"><img src="./resource/fondo-ejemplo-ofertas.jpg" alt=""></div>
            <div class="image"><img src="./resource/fondo-ejemplo-ofertas.jpg" alt=""></div>
            <div class="image"><img src="./resource/fondo-ejemplo-ofertas.jpg" alt=""></div>
            <div class="image"><img src="./resource/fondo-ejemplo-ofertas.jpg" alt=""></div>
            <div class="image"><img src="./resource/fondo-ejemplo-ofertas.jpg" alt=""></div>
            <div id="queHacemos" class="image"><img src="./resource/fondo-ejemplo-ofertas.jpg" alt=""></div>
        </section>

        <section class="sobre-nosotros">
            <h2>Sobre nosotros</h2>
            <div class="container-sobre-nosotros">
                <div class="content">
                    <div class="imagen">
                        <img src="./resource/fondo-ejemplo-ofertas.jpg" alt="">
                    </div>
                    
                    <h3 class="title">Titulo ejemplo</h3>
                    <span>Somos un grupo de ingenieros y profesionales que poseemos el nivel de experiencia, </span>
                </div>
                <div class="content">
                    <div class="imagen">
                        <img src="./resource/fondo-ejemplo-ofertas.jpg" alt="">
                    </div>
                    
                    <h3 class="title">Titulo ejemplo</h3>
                    <span>Somos un grupo de ingenieros y profesionales que poseemos el nivel de experiencia, </span>
                </div>
                <div class="content">
                    <div class="imagen">
                        <img src="./resource/fondo-ejemplo-ofertas.jpg" alt="">
                    </div>
                    
                    <h3 class="title">Titulo ejemplo</h3>
                    <span>Somos un grupo de ingenieros y profesionales que poseemos el nivel de experiencia, </span>
                </div>
            </div>
        </section>
    </div>

    <script src="./script/mira.js"></script>
</body>
</html>