<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/assets.css">
    <link rel="stylesheet" href="./style/formacion.css">
    <style>
        html {
            scroll-behavior: smooth; /* Para un desplazamiento suave */
        }
    </style>
    <title>Formación CISCO</title>
</head>
<body>
    
    <section class="banner-principal">
        <div class="title-page">
            <h1>Formación CISCO</h1>
        </div>
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
            <div class="contenedor_carga">
                <div class="carga"></div>
            </div>
        </div>
    </section>

    <div class="separador">
        <hr>
    </div>

    <section class="certificaciones">
        <div class="cont-title-section">
            <h2 id="certificaciones" class="title-section">Por Certificación</h2>
        </div>

        <div id="cont-certificaciones" class="cont-certificaciones">
            <div class="contenedor_carga">
                <div class="carga"></div>
            </div>
        </div>
    </section>

    <section class="certificaciones">
        <div class="cont-title-section">
            <h2 class="title-section">Certificación Partners</h2>
        </div>
        <div id="certificaciones-partners" class="contentCertificacionesPartner">
            <p class="intro-section">
                Las certificaciones para los partners Select, Premier y Gold reflejan el nivel de habilidad en nuestras tecnologías.
            </p>
        </div>
        <div id="cont-certificaciones-partners" class="cont-certificaciones">
            <div class="contenedor_carga">
                <div class="carga"></div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="link-grey" data-bs-dismiss="modal">Cerrar</button>
                    
                </div>
            </div>
        </div>
    </div>

    <script src="./script/formacion/dataFormacion.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
