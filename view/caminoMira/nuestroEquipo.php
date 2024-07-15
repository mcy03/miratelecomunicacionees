<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/assets.css">
    <link rel="stylesheet" type="text/css" href="./style/caminoMira/nuestroEquipo.css?1.0">
    
    <title>Mira | Nuestro Equipo</title>
</head>
<body>
    <section class="banner-principal">
        <div class="title-page">
            <h1>Nuestro Equipo</h1>
        </div>

        <p>
            Pasión por lo que hacemos
        </p>
    </section>
    <section class="ubicacion">
        <div class="ruta-ubi">
            <a class="ruta-page" href="<?=url?>">Home / </a><a class="ruta-page" href="<?=url.'?controller=mira'?>">Mira / </a><p class="page">Nuestro Equipo</p>
        </div>
    </section>
    <div class="page-content grid">

        <section class="back back-white puntuaciones">
            <h4><b>Valoración de nuestros clientes:</b></h4>
            <div class="graficos">
                <ul class="chart-skills chart-skills1">
                    <li>
                        <span>4.8 / 5</span>
                    </li>
                </ul>
                <ul class="chart-skills chart-skills2">
                    <li>
                        <span>4.2 / 5</span>
                    </li>
                </ul>
                <ul class="chart-skills chart-skills3">
                    <li>
                        <span>4.8 / 5</span>
                    </li>
                </ul>
            </div>
        </section>
        <div class="back back-red">
            <p>
                Somos un grupo de profesionales PROFUNDAMENTE especializados en todas las arquitecturas de Cisco.
                <br><br>
                Estamos preparados para capacitar, gestionar y acompañar a los profesionales IT en su desarrollo tecnológico.
                <br><br>
                Entendemos como utilizar la tecnología Cisco, convirtiéndola en una herramienta estratégica para proporcionar ventajas competitivas, acelerando la introducción de las mismas en la organización y ofreciendo resultados comerciales.
            </p>
        </div>
        <div class="back back-white">
            <h4><b>Amplio currículum internacional</b></h4>
            <p>
                Hemos impartimos formación avanzada de Cisco (Data Center, DevNet, Security, Cisco Collaboration, Unified Computing, Unified Communications, Wireless, …) 
                en países como: Singapore, Alemanía, UK, Suiza, Francia, Costa Rica, Colombia, Brasil, Panamá, México, Egipto, Estados Unidos, …
                <br><br>
                Ofrecemos regularmente a clientes de Europa, LATAM, Asia, Estados Unidos, África y Oceanía 
                nuestro servicio de <a href="<?=url.'?controller=laboratorio'?>">Bar. Labs</a> proporcionando acceso remoto a nuestro laboratorio que ofrece un servicio de 24*7 donde quiera que estés en el mundo.
            </p>   
            <div id="container-img-mapa">
                <img class="img-mapa" src="./resource/mira_page/nuestro_equipo/mapaMarcas.png" alt="">
            </div>
            
        </div> 
    </div>  
    
</body>
</html>

