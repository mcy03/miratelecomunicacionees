<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/assets.css">
    <link rel="stylesheet" type="text/css" href="./style/entrada.css?1.0">
    <title>Document</title>
</head>
<body>
    <input id='input-entradaId' type="hidden" value="<?=$entrada?>">
    <section class="banner-principal">
        <div class="title-page">
            <h1></h1>   
        </div>
    </section>
    <section class="ubicacion">
        <div class="ruta-ubi">
            <a class="ruta-page" href="<?=url?>">Home / </a><a class="ruta-page"  href="<?=url.'?controller=blog'?>">On the Go / </a><p class="page"></p>
        </div>
    </section>

    <div class="contenido">
        <div class="contenido-entrada"> 
            <div id="loader-entrie" class="contenedor_carga">
                <div class="carga"></div>
            </div>
        </div>
        <div class="publi">
            <h5>Ultimas entradas</h5>
            <div class="last-entries">
                <div class="entrie efect-button">
                    Entrada de prueba
                </div>

                <div class="entrie efect-button">   
                    Lo ultimo sobre CLC
                </div>

                <div class="entrie efect-button">
                    Brueba de vista de ultima entrada
                </div>
                
                <div class="entrie efect-button">
                    Entrada de prueba
                </div>
                
            
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>   
    <script src="./script/blog/entrie.js"></script> 
</body>
</html>
