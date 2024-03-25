<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/assets.css">
    <link rel="stylesheet" href="./style/formacion.css">
    <title>Document</title>
</head>
<body>
    <section class="banner-principal">
        <div class="title-page">
            <h1>Formación</h1>
        </div>

        <span>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Quisque a risus non sapien facilisis egestas. 
            Vivamus scelerisque ex ipsum, a tempor velit tristique id. 
            Ut in placerat erat.
        </span>
    </section>

    <section class="ubicacion">
        <div class="ruta-ubi">
            <a class="ruta-page" href="<?=url?>">Home / </a><p class="page">Formación</p>
        </div>
    </section>

    <section class="section-tecnologias">
        <div class="cont-title-section">
            <h2 class="title-section">Por Tecnología</h2>
        </div>
        
        <div id="cont-tecnologias" class="cont-tecnologias">
           
        </div>
    </section>

    <div class="separador">
        <hr>
    </div>

    <section class="certificaciones">
        <div class="cont-title-section">
            <h2 class="title-section">Por Certificación</h2>
        </div>

        <div id="cont-certificaciones" class="cont-certificaciones">
            
        </div>
    </section>

    <section class="certificaciones">
        <div class="cont-title-section">
            <h2 class="title-section">Certificación Partners</h2>
        </div>

        <div id="cont-certificaciones-partners" class="cont-certificaciones">
            
        </div>
    </section>

    

    <script src="./script/formacion/dataFormacion.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>    
</body>
</html>