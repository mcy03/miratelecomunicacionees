<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/assets.css">
    <link rel="stylesheet" type="text/css" href="./style/curso.css?1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Cursos Mira</title>
</head>
<body>
    <section class="banner-principal">
        <div class="title-page">
            <h1>Formación</h1>
        </div>

        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Quisque a risus non sapien facilisis egestas. 
            Vivamus scelerisque ex ipsum, a tempor velit tristique id. 
            Ut in placerat erat.</span>
    </section>
    <section class="ubicacion">
        <div class="ruta-ubi">
            <a class="ruta-page" href="<?=url?>">Home / </a><a class="ruta-page" href="<?=url?>">Formación / </a><p class="page">Cursos</p>
        </div>
    </section>
    <div class="buscador">
        <form action="" method="post">
            <input type="text" name="nombreCurso" id="inputCurso" placeholder="Enter course name">
            <select name="tecnologia" id="selectTecnologia">
                <option value="Securitiy">Securitiy</option>
                <option value="Networking">Networking</option>
                <option value="Wireless">Wireless</option>
                <option value="CustomerExperience">Customer Experience</option>
                <option value="DataCenter">Data Center</option>
                <option value="Collaboration">Collaboration</option>
                <option value="DevNet">DevNet</option>
                <option value="InternetofThings">Internet of Things</option>
                <option value="Automation">Automation</option>
                <option value="ServiceProvider">Service Provider</option>
                <option value="Foundation">Foundation</option>
                <option value="Cloud">Cloud</option>
                <option value="CyberOPs">CyberOPs</option>
            </select>
            <input class="button-red" type="submit" value="SEARCH">
        </form>
    </div>

    <div class="contenido">
        <section class="filtro">
            <h3>Filtrar</h3>
            <div class="tecnologias">
                <h4>Tecnologías</h4>
                <div class="tecnologias-filtro">

                </div>
            </div>

            <div class="certificacion">
                <h4>Certificación</h4>
                <div class="certificacion-filtro">

                </div>
            </div>
        </section>
        <div class="list-courses">
            <section class="cursos">

            </section>
            <div class="paginacion">
                
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>  
    <script src="./script/curso/curso.js"></script> 
</body>
</html>