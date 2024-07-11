<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/assets.css">
    <link rel="stylesheet" href="./style/slider.css">
    <!-- Fontawesome Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="./style/home.css">

    <!-- Favicon -->
    <link rel="icon" href="./resource/faviconMira.png" type="image/png">
    <title>Miratelecomunicacions</title>
</head>
<body>
    <div class="home">
        <section class="font container ofertas">
            <div class="row">
                <div class="col-md-12 text-center col-oferta">
                    <div class="contenido-ofertas">
                        <h1 class="title-home">
                            Todo lo que necesita saber sobre Cisco Learning & Certifications
                        </h1>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="primera-seccion">
            <section class="que-ofrecemos">
                <div class="container-header-que-ofrecemos">
                    <div class="titulo-que-ofrecemos">
                        <h3 class="title">¿En qué podemos ayudarle?</h3>
                        <div class="gradient-red"></div>
                    </div>
                    <img class="logos-home logo-clp" src="./resource/logos/clp_logo.png" alt="">
                </div>
                
                <div class="primera-fila fila-que">
                    <a href="<?=url.'?controller=mira#questions'?>"><img src="./resource/iconos/home/CLC.png" alt=""><p>Cisco Learning Credits</p></a>
                    <a href="<?=url.'?controller=formacion#certificaciones'?>"><img src="./resource/iconos/home/calidad.png" alt=""><p>Certificaciones Cisco</p></a>
                    <a href="<?=url.'?controller=formacion#certificaciones-partners'?>"><img src="./resource/iconos/home/Partner.png" alt=""><p>Certificaciones para Partners</p></a>
                </div>
                <div class="segunda-fila fila-que">
                    <a href="<?=url.'?controller=curso'?>"><img src="./resource/iconos/home/graduado.png" alt=""><p>Cursos Cisco</p></a>
                    <a href=""><img src="./resource/iconos/home/continuo.png" alt=""><p>Continuing Education Program (CE)</p></a>
                    <a href="<?=url.'?controller=curso&action=select&tecnology=27'?>"><img src="./resource/iconos/home/Meraki M Logo draw circle.png" alt=""><p>Formación Meraki</p></a>
                </div>
            </section>
            <div class="primera-derecha">
                <section class="quienes-somos">
                    <div class="container-quienes">
                        <h2 class="title">¿Quiénes somos?</h2>
                        <div class="preguntas-sobre-nosotros">
                            <a href="<?=url.'?controller=mira&action=premios_mira'?>">Premios y reconocimientos.</a>
                            <a href="<?=url.'?controller=mira&action=mira_global'?>">Mira a nivel global.</a>
                            <a href="<?=url.'?controller=mira&action=corporativo'?>">Inclusión, diversidad y sostenibilidad.</a> 
                            <a href="<?=url.'?controller=mira&action=mira_global'?>">Mira Training Latam.</a> 
                        </div>
                    </div>
                </section>
                <section class="oferta-pequena">
                    <div class="contenido-oferta">
                        <p class="content-oferta">
                            ¿Está listo para comenzar o impulsar su carrera?
                        </p>
                        <p class="content-oferta">
                            Prepárese para CCNA y CCNP enterprise.
                        </p>
                        <button class="button-red">Ver más</button>
                    </div>
                </section>
            </div>
        </div>
        
        <div class="slider">
            <div class="cont-title-slider">
                <h2 class="title-slider">Comunidad de aprendizaje</h2>
            </div>
            <div class="wrapper">
                <ul class="carousel">
                    
                        <li class="card">
                            <div class="img" style="background-image: url('resource/imagenes prueba web/slader/Cisco CCIE Elite Tech.png'); "></div>
                            <a class="download-link" href="./resource/pdf/home/Cisco CCIE Elite Tech 2024 SP.pdf" target="_blank">
                                <div class="text-card-slider">
                                    <h3>Cisco CCIE Elite Tech</h3>
                                    <span>
                                        Redes en manos de expertos capaces de resolver 
                                        problemas complicados y diseñar soluciones eficientes
                                    </span>
                                </div>
                            </a>
                        </li>
                    
                    <li class="card">
                        <a class="download-link" href="<?=url.'?controller=curso&action=select&tecnology=27'?>">
                            <div class="img" style="background-image: url('resource/imagenes prueba web/slader/Talleres pràcticos.png');"></div>
                            <div class="text-card-slider">
                                <h3>Talleres prácticos</h3>
                                <span>Diseñamos para ganar, resolver y convencer.</span>
                            </div>
                        </a>
                    </li>
                    <!--
                    <li class="card">
                        <div class="img" style="background-image: url('resource/imagenes prueba web/slader/Formación customizada.png');"></div>
                        <div class="text-card-slider">
                            <h3>Formación customizada</h3>
                            <span>Desde el 2003 somos un Cisco Learning Partner y 
                            actuamos como un catalizador.</span>
                        </div>
                    </li>
                        
                    <li class="card">
                        <div class="img" style="background-image: url('resource/imagenes prueba web/slader/Cursos de colaboración avanzados.png');"></div>
                        <div class="text-card-slider">
                            <h3>Parte de colaboración con Sunset</h3>
                            <span>Desde el 2003 somos un Cisco Learning Partner y 
                            actuamos como un catalizador.</span>
                        </div>
                    </li>
                    <li class="card">
                        <div class="img" style="background-image: url('resource/imagenes prueba web/slader/Certificación Cisco Cloud.png');"></div>
                        <div class="text-card-slider">
                            <h3>Certificación Cisco Cloud</h3>
                            <span>Desde el 2003 somos un Cisco Learning Partner y 
                            actuamos como un catalizador.</span>
                        </div>
                    </li>
                    -->
                    <li class="card">
                        <div class="img" style="background-image: url('resource/imagenes prueba web/slader/Impacto social.png');"></div>
                        <div class="text-card-slider">
                            <h3>Impacto social</h3>
                            <span>Comprometidos con un marco corporativo responsable para toda la cadena de valor.</span>
                        </div>
                    </li>
                    <li class="card">
                        <div class="img" style="background-image: url('resource/imagenes prueba web/slader/Soluciones Cisco seguridad.png');"></div>
                        <div class="text-card-slider">
                            <h3>Cisco seguridad</h3>
                            <span>Soluciones proporcionadas por Cisco seguridad</span>
                        </div>
                    </li> 
                </ul>
            </div>
        </div>

        <section class="noticias">
            <div class="fila-noticias">
                <article class="noticia-text">
                    <div class="img-noticia"><img src="./resource/fondo-ejemplo-ofertas.jpg" alt=""></div>
                    <div class="noticia-body">
                        <h4>CALENDARIO</h4>
                        <div class="text-body">
                            <h3>Calendario de Formación</h3>
                            <span>
                                Encuentre aquí formación oficial Cisco en las diferentes partes del mundo
                            </span>
                        </div>
                    </div>
                </article>

                <article class="noticia-img">
                    <div class="img-noticia">
                        <div class="text-img-noticia">

                        </div>
                    </div>
                    
                </article>
            </div>

            <div class="fila-noticias">
                <article class="noticia-text noticia-text-100">
                    
                    <div class="noticia-body noticia-body-max">
                        <h4>TALENTOS IT</h4>
                        <div class="text-body">
                            <h3>CONECTAMOS TALENTO</h3>
                            <span>
                                Agregamos una nueva experiencia tanto para el partner como para el cliente final. 
                                <br><br>
                                Externalice el proceso de seleccionar talento IT
                                Mira Telecomunicacions agrega una nueva experiencia tanto para el Partner como para el cliente final, 
                            </span>
                        </div>
                    </div>
                    <div class="img-noticia img-noticia-max"><img src="./resource/conectamos.png" alt=""></div>
                </article>
            </div>
        </section>
    </div>
    <script src="./script/slider.js"></script>
    <script src="./script/home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>   
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const links = document.querySelectorAll('.custom-scroll-link');
            links.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();

                    const targetId = this.getAttribute('href').split('#')[1];
                    const targetElement = document.getElementById(targetId);

                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop + 200, // Ajusta este valor para bajar más
                            behavior: 'smooth'
                        });

                        // Actualizar la URL sin recargar la página
                        history.pushState(null, null, `#${targetId}`);
                    }
                });
            });
        });
    </script>
</body>
</html>