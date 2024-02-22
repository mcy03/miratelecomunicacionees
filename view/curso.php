<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/assets.css">
    <link rel="stylesheet" type="text/css" href="./style/curso.css?1.0">
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
        <p class="ruta-page">Home/</p><p class="page">formación</p>
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
            <div class="tecnologias-filtro">
                <h4>Tecnologías</h4>
                <p>Securitiy</p>
                <p>Networking</p>
                <p>Wireless</p>
                <p>Customer Experience</p>
                <p>Data Center</p>
                <p>Collaboration</p>
                <p>DevNet</p>
                <p>Internet of Things</p>
                <p>Automation</p>
                <p>Service Provider</p>
                <p>Foundation</p>
                <p>Cloud</p>
                <p>CyberOPs</p>
            </div>

            <div class="certificacion-filtro">
                <h4>Certificación</h4>
                <p>CCNA</p>
                <p>DevNet Associate</p>
                <p>Wireless</p>
                <p>CCNP Enterprise</p>
            </div>
        </section>
        <section class="cursos">
            <?php for ($i=0; $i < 6; $i++) { ?>
                <div class="fila-cursos">
                    <article class="curso">
                        <h2>IMPLEMENTING CISCO INTRUSION PREVENTION SYSTEM(IPS 7)</h2>
                        <p>tecnologia</p>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Quisque a risus non sapien facilisis egestas. Lorem ipsum dolor 
                        sit amet, consectetur adipiscing elit. Quisque a risus non sapien facilisis egestas.</span>
                    </article>
                    <article class="curso">
                        <h2>nombre curso</h2>
                        <p>tecnologia</p>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Quisque a risus non sapien facilisis egestas. Lorem ipsum dolor 
                        sit amet, consectetur adipiscing elit. Quisque a risus non sapien facilisis egestas.</span>
                    </article>
                    <article class="curso">
                        <h2>nombre curso</h2>
                        <p>tecnologia</p>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Quisque a risus non sapien facilisis egestas.</span>
                    </article>
                </div>
            <?php } ?>
        </section>
    </div>
</body>
</html>