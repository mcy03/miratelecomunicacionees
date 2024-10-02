<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/assets.css">
    <link rel="stylesheet" type="text/css" href="./style/entrada.css?1.0">
    <title><?=$entrada->getTITULO()?></title>
</head>
<body>
    <section class="banner-principal" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?=$entrada->getIMG_ENTRIE()?>'); background-size: cover; background-position: center;">
        <div class="title-page">
            <h1><?=$entrada->getTITULO()?></h1>   
        </div>
    </section>

    <section class="ubicacion">
        <div class="ruta-ubi">
            <a class="ruta-page" href="<?=url?>">Home / </a><a class="ruta-page"  href="<?=url.'?controller=blog'?>">On the Go / </a><p class="page"><?=$entrada->getTITULO()?></p>
        </div>
    </section>

    <div class="contenido">
        <div class="contenido-entrada"> 
            <?=$entrada->getCONTENIDO()?>
        </div>
        <div>
            
        </div>
    
        <div class="publis">
            <div class="publi">
                <h5>ÚLTIMAS PUBLICACIONES</h5>
                <hr>
                <div class="last-entries">
                    <?php foreach ($entradas as $entrie) { ?>
                        <div class="entrie efect-button">
                            <?=$entrie->getTITULO()?>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="publi">
                <h5>CATEGORÍAS</h5>
                <hr>
                <div class="last-entries">
                    <?php foreach ($categorias as $categoria) { ?>
                        <div class="entrie efect-button">
                            <?=$categoria->getNOMBRE()?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>   
    <script src="./script/blog/entrie.js"></script> 
</body>
</html>
