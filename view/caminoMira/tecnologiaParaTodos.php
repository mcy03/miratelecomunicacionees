<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/assets.css">
    <link rel="stylesheet" type="text/css" href="./style/caminoMira/tecnologiaParaTodos.css?1.0">
    
    <title>MIRA | Tecnología para todos</title>
</head>
<body>
    <section class="banner-principal">
        <div class="title-page">
            <h1>MIRA | Tecnología para todos</h1>
        </div>
    </section>
    <section class="ubicacion">
        <div class="ruta-ubi">
            <a class="ruta-page" href="<?=url?>">Home / </a><a class="ruta-page" href="<?=url.'?controller=mira'?>">Mira / </a><p class="page">Tecnología para todos</p>
        </div>
    </section>
    <div class="page-content grid">
        <section class="text-content">
            <p class="text">
                Aquí incluir el career path para que se lo puedan descargar.
            </p>
            <br>
            <p class="text">
                <strong>MIRA Telecomunicaciones</strong> puede ayudarle a seguir avanzando en el mundo IT gracias a las certificaciones y especializaciones Cisco que son altamente reconocidas.
            </p>
            <br>
            <p class="text">
                Aprenda con nosotros. Encuentre la capacitación más adecuada para alcanzar sus objetivos.
            </p>
        </section>
        <section class="tecnologies">
        <?php 
            if (isset($tecnologias)) {
                $counter = 0;
                foreach ($tecnologias as $tecnologia) {
                    if ($counter % 3 == 0) {
                        if ($counter != 0) {
                        ?>
                            </div>
                        <?php 
                        }
                        ?>
                        <div class="categoria-group">
                    <?php
                    }
                    ?>
                    <div class="container-cat">
                        <a href="<?=url.'?controller=curso&action=select&tecnology='.$tecnologia->getTECNOLOGIA_ID()?>"><?=$tecnologia->getNOMBRE_TECNOLOGIA()?></a>
                    </div>
                    <?php 
                    $counter++;
                }
                ?>
                </div>
                <?php 
            } 
        ?>

        </section>
    </div>  

</body>
</html>

