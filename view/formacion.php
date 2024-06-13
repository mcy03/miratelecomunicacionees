<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/assets.css">
    <link rel="stylesheet" href="./style/formacion.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Formación CISCO</title>
</head>
<body>
    
    <section class="banner-principal">
        <div class="title-page">
            <h1>Formación CISCO</h1>
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
            <h2 class="title-section">Por Certificación</h2>
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

        <div id="cont-certificaciones-partners" class="cont-certificaciones">
            <div class="contenedor_carga">
                <div class="carga"></div>
            </div>
        </div>
    </section>



    <div class="modal fade" id="exampleModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <script src="./script/formacion/dataFormacion.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>    

    <!-- Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html>