<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/assets.css">
    <link rel="stylesheet" type="text/css" href="./style/curso.css?1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Cursos Mira</title>

    <style>
        #loading-courses {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* Dos columnas del mismo tamaño */
            gap: 20px; /* Espacio entre elementos */
        }
        
        .course-loading {
            width: calc(100% - 40px); /* Ajusta el ancho para que ocupen el 50% del contenedor */
            margin-bottom: 20px; /* Espacio entre filas */
        }
    </style>
</head>
<body>

    <?php 
    if (isset($tecnologiaFiltro)) { ?>
        <input type="hidden" id="selectTecnology" value="<?=$tecnologiaFiltro?>">

    <?php }else if (isset($certificacionFiltro)) {?>
        <input type="hidden" id="selectCertification" value="<?=$certificacionFiltro?>">
        
    <?php } ?>
    
    <section class="banner-principal">
        <div class="title-page">
            <h1>Formación</h1>
        </div>
    </section>
    <section class="ubicacion">
        <div class="ruta-ubi">
            <a class="ruta-page" href="<?=url?>">Home / </a><a class="ruta-page" href="<?=url?>">Formación / </a><p class="page">Cursos</p>
        </div>
    </section>
    <div class="buscador">
        <form action="" method="post">
            <input type="text" name="nombreCurso" id="inputCurso" placeholder="Nombre del curso">
        </form>
    </div>

    <div class="contenido">
        <section id="filtro" class="filtro">
            <div class="tecnologias">
                <h4>Tecnologías</h4>
                <div id="loading-tecnologies">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="tecnologias-filtro" style="display: none;">
                    
                </div>
            </div>

            <div class="certificacion">
                <h4>Certificación</h4>
                <div id="loading-certifications">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="certificacion-filtro" style="display: none;">

                </div>
            </div>
        </section>
        
        <div class="list-courses" style="display: none;">
            <section class="cursos">

            </section>
            <div class="paginacion">
                
            </div>
            <div class="no-content" style="display: none;">
                <h3 class="title-no-content">Ups...</h3>
                <p>No se han encontrado cursos con las características seleccionadas.</p>
            </div>
        </div>
        <div id="loading-courses">
                <div class="course-loading">
                    <div class="contenedor_carga">
                        <div class="carga"></div>
                    </div>
                </div>
                <div class="course-loading">
                    <div class="contenedor_carga">
                        <div class="carga"></div>
                    </div>
                </div>
                <div class="course-loading">
                    <div class="contenedor_carga">
                        <div class="carga"></div>
                    </div>
                </div>
                <div class="course-loading">
                    <div class="contenedor_carga">
                        <div class="carga"></div>
                    </div>
                </div>
                <div class="course-loading">
                    <div class="contenedor_carga">
                        <div class="carga"></div>
                    </div>
                </div>
                <div class="course-loading">
                    <div class="contenedor_carga">
                        <div class="carga"></div>
                    </div>
                </div>
                <div class="course-loading">
                    <div class="contenedor_carga">
                        <div class="carga"></div>
                    </div>
                </div>
                <div class="course-loading">
                    <div class="contenedor_carga">
                        <div class="carga"></div>
                    </div>
                </div>
                <div class="course-loading">
                    <div class="contenedor_carga">
                        <div class="carga"></div>
                    </div>
                </div>
                <div class="course-loading">
                    <div class="contenedor_carga">
                        <div class="carga"></div>
                    </div>
                </div>
        </div>
    </div>
        
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>  
    <script src="./script/curso/curso.js"></script> 
</body>
</html>