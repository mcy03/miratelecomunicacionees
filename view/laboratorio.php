<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/assets.css">
    <link rel="stylesheet" type="text/css" href="./style/laboratorio.css?1.0">
    <title>Laboratorios Miratelecomunicacions</title>
</head>

<body>
    <section class="banner-principal">
        <div class="title-page">
            <h1>Learning Bar Labs</h1>
        </div>

        <p>Prueba y solucione problemas a su propio ritmo</p>
    </section>
    <section class="ubicacion">
        <div class="ruta-ubi">
            <a class="ruta-page" href="<?= url ?>">Home / </a>
            <p class="page">Laboratorios</p>
        </div>
    </section>

    <div class="pagina row">
        <div class="col-0 col-md-1 col-xl-1"></div>
        <section class="intro-labs col-10">
            <p>
                Nuestros laboratorios remotos en vivo ofrecen a los estudiantes un aprendizaje adicional al aplicar lo que se enseña en la clase a un entorno del mundo real.
                Estos laboratorios se pueden personalizar para la clase o un entorno de aprendizaje concreto.
                Están ubicados un lugar seguro y disponibles en cualquier momento.
            </p>
            <p>
                Ofrecemos laboratorios en vivo basados en hardware y software que permite a nuestros estudiantes practicar y perfeccionar sus habilidades.
            </p>
            <p>
                Si bien la mayoría de los proveedores de capacitación utilizan simulaciones para permitir que los estudiantes practiquen lo que aprenden, nosotros brindamos experiencia práctica del mundo real con equipos y/o software reales en la mayoría de nuestros laboratorios.
            </p>
            <p>Para más información dirigirse a: <a href="mailto:mira@miratelecomunicacions.com">mira@miratelecomunicacions.com</a></p>
        </section>
        <div class="col-0 col-md-1 col-xl-1"></div>
        <!--
        <section class="buttons-scrollDown col-12 row">
            <button class="col-10 col-md-5 col-xl-2" onclick="scrollToSection('#aprendizaje-practico')">Aprendizaje práctico</button>
            <button class="col-10 col-md-5 col-xl-2" onclick="scrollToSection('#target')">¿A quién nos dirigimos?</button>
            <button class="col-10 col-md-5 col-xl-2" onclick="scrollToSection('#opciones')">¿Qué opciones ofrecemos?</button>
            <button class="col-10 col-md-5 col-xl-2" onclick="scrollToSection('#labs')">Labs. Bar List</button>
        </section>
        -->
        <div class="div-aprendizaje-practico col-12">
            <section id="aprendizaje-practico" class="aprendizaje-practico col-12 col-xl-6 flex-column">
                <div class="title-section col-12">
                    <h3>Aprendizaje práctico</h3>
                </div>

                <div class="content-section col-12">
                    <p>Nuestra área de negocio Learning Bar Labs. ofrece a los profesionales IT la oportunidad de acceder a laboratorios a su propio ritmo para implementar configuraciones y adoptar soluciones Cisco.</p>
                    <p>Le ayudará a seguir desarrollando habilidades en un entorno guiado, estructurado que simula escenarios reales y le preparará para la certificación. </p>
                    <p>Es la oportunidad perfecta para reducir el riesgo en la implementación ya que después de asistir a alguna formación usted podrá seguir en contacto y familiarizarse con la solución Cisco.</p>
                </div>
            </section>
            <section id="target" class="aprendizaje-practico col-12 col-xl-6 flex-column">
                <div class="title-section">
                    <h3>¿A quién nos dirigimos?</h3>
                </div>
                <div class="content-section content-setion-list">
                    <ol>
                        <li>Estudiantes que hayan finalizado una capacitación dirigida por instructor</li>
                        <li>Estudiantes que estén asociados a alguna membresía digital y quieran practicar con un entorno adicional de pruebas. </li>
                        <li>A profesionales que necesitan implementar una solución y necesitan probar configuraciones de red en otro entorno antes de implementarlas.</li>
                        <li>A empresas de capacitación Cisco que tengan la necesidad de alquilar laboratorios para aquellos cursos oficiales que son free bundle.</li>
                    </ol>
                </div>
            </section>
        </div>

        <section id="opciones" class="opciones col-12">
            <div class="title-opciones">
                <h3>¿Qué opciones ofrecemos para usuarios y empresas?</h3>
            </div>
            <div class="container-user-company">
                <div class="packages">
                    <div class="list-package access-package">
                        <p>Paquete de acceso</p>
                        <ul>
                            <li><img class="img-icon-package" src="./resource/iconos/labs-page/user.png" alt=""> Por usuario</li>
                            <li><img class="img-icon-package" src="./resource/iconos/labs-page/calendario.png" alt=""> Por horas y días de acceso</li>
                            <li><img class="img-icon-package" src="./resource/iconos/labs-page/tech-support.png" alt=""> Solo soporte de recuperación</li>
                        </ul>
                    </div>
                    <div class="list-package mentor-package">
                        <p>Paquete de acceso con mentor</p>
                        <ul>
                            <li><img class="img-icon-package" src="./resource/iconos/labs-page/user.png" alt=""> Por usuario</li>
                            <li><img class="img-icon-package" src="./resource/iconos/labs-page/calendario.png" alt=""> Por horas y días de acceso</li>
                            <li><img class="img-icon-package" src="./resource/iconos/labs-page/reloj.png" alt=""> Horas de mentoría</li>
                            <li><img class="img-icon-package" src="./resource/iconos/labs-page/tech-support.png" alt=""> Soporte de recuperación y chat de resolución de dudas</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section id="labs" class="lab col-12 col-md-12 col-xl-12 row">
            <h4 id="title-labs">Listado de nuestros laboratorios</h4>
            <table id="tabla-lab" class="tabla-lab col-11">
                <tbody>
                    <tr class="buscador">
                        <td colspan="4"><input type="text" name="input-id" id="input-id" placeholder="Buscar..."></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr class="head-table">
                        <td class="esquina-izquierda id-course-table">
                            <h3 class="title-id">ID Curso</h3>
                        </td>
                        <td class="name-course-table">
                            <h3 class="title-name">Descripción curso</h3>
                        </td>
                        <td>
                            <h3 class="title-start-date">Duración</h3>
                        </td>
                        <td class="esquina-derecha">
                            <h3 class="title-end-date">Pods Avaliable</h3>
                        </td>
                    </tr>
                    <tr id="tr-loader" style="display: none;">
                        <td colspan="4">
                            <div class="contenedor_carga">
                                <div class="carga"></div>
                            </div>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr class="body-table">
                        <td class="id-course-table"><span class="valor-id">DCCOR</span></td>
                        <td class="border-center name-course-table"><span class="valor-name">Implementing and Operating Cisco Data Center Core Technologies</span></td>
                        <td class="border-center"><span class="valor-start-date">5</span></td>
                        <td class="border-center"><span class="valor-end-date">6</span></td>
                    </tr>

                    <tr class="body-table">
                        <td class="id-course-table"><span class="valor-id">DCACI</span></td>
                        <td class="border-center name-course-table"><span class="valor-name">Implementing Cisco Application Centric Infrastructure</span></td>
                        <td class="border-center"><span class="valor-start-date">5</span></td>
                        <td class="border-center"><span class="valor-end-date">8</span></td>
                    </tr>

                    <tr class="body-table">
                        <td class="id-course-table"><span class="valor-id">DCFNDU</span></td>
                        <td class="border-center name-course-table"><span class="valor-name">Understanding Cisco Data Center Foundations</span></td>
                        <td class="border-center"><span class="valor-start-date">5</span></td>
                        <td class="border-center"><span class="valor-end-date">6</span></td>
                    </tr>

                    <tr class="body-table">
                        <td class="id-course-table"><span class="valor-id">UCSDACI</span></td>
                        <td class="border-center name-course-table"><span class="valor-name">Designing and Deploying Cisco UCS Director with ACI</span></td>
                        <td class="border-center"><span class="valor-start-date">5</span></td>
                        <td class="border-center"><span class="valor-end-date">8</span></td>
                    </tr>

                    <tr class="body-table">
                        <td class="id-course-table"><span class="valor-id">ENSDWI</span></td>
                        <td class="border-center name-course-table"><span class="valor-name">Implementing Cisco SD-WAN Solutions</span></td>
                        <td class="border-center"><span class="valor-start-date">5</span></td>
                        <td class="border-center"><span class="valor-end-date">3</span></td>
                    </tr>

                    <tr class="body-table">
                        <td class="id-course-table"><span class="valor-id">ENCOR</span></td>
                        <td class="border-center name-course-table"><span class="valor-name">Implementing and Operating Cisco Enterprise Network Core Technologies</span></td>
                        <td class="border-center"><span class="valor-start-date">5</span></td>
                        <td class="border-center"><span class="valor-end-date">12</span></td>
                    </tr>

                    <tr class="body-table">
                        <td class="id-course-table"><span class="valor-id">CCNA
                            </span></td>
                        <td class="border-center name-course-table"><span class="valor-name">Implementing and Administering Cisco Solutions</span></td>
                        <td class="border-center"><span class="valor-start-date">5</span></td>
                        <td class="border-center"><span class="valor-end-date">12</span></td>
                    </tr>

                    <tr class="body-table">
                        <td class="id-course-table"><span class="valor-id">ENARSI</span></td>
                        <td class="border-center name-course-table"><span class="valor-name">Implementing Cisco Enterprise Advanced Routing and Services</span></td>
                        <td class="border-center"><span class="valor-start-date">5</span></td>
                        <td class="border-center"><span class="valor-end-date">12</span></td>
                    </tr>

                    <tr class="body-table">
                        <td class="id-course-table"><span class="valor-id">ENWLSI</span></td>
                        <td class="border-center name-course-table"><span class="valor-name">Implementing Cisco Enterprise Wireless Networks</span></td>
                        <td class="border-center"><span class="valor-start-date">5</span></td>
                        <td class="border-center"><span class="valor-end-date">12</span></td>
                    </tr>

                    <tr class="body-table">
                        <td class="id-course-table"><span class="valor-id">WLFNDU</span></td>
                        <td class="border-center name-course-table"><span class="valor-name">Understanding Cisco Wireless Foundations</span></td>
                        <td class="border-center"><span class="valor-start-date">5</span></td>
                        <td class="border-center"><span class="valor-end-date">12</span></td>
                    </tr>

                    <tr class="body-table">
                        <td class="id-course-table"><span class="valor-id">ENWLSD</span></td>
                        <td class="border-center name-course-table"><span class="valor-name">Designing Cisco Enterprise Wireless Networks</span></td>
                        <td class="border-center"><span class="valor-start-date">5</span></td>
                        <td class="border-center"><span class="valor-end-date">12</span></td>
                    </tr>

                    <tr class="body-table">
                        <td class="id-course-table"><span class="valor-id">SISE</span></td>
                        <td class="border-center name-course-table"><span class="valor-name">Implementing and Configuring Cisco Identity Services Engine</span></td>
                        <td class="border-center"><span class="valor-start-date">5</span></td>
                        <td class="border-center"><span class="valor-end-date">12</span></td>
                    </tr>

                    <tr class="body-table">
                        <td class="id-course-table"><span class="valor-id">SFWIPA</span></td>
                        <td class="border-center name-course-table"><span class="valor-name">Securing Data Center Networks and VPNs with Cisco Secure Firewall Threat Defense</span></td>
                        <td class="border-center"><span class="valor-start-date">5</span></td>
                        <td class="border-center"><span class="valor-end-date">8</span></td>
                    </tr>

                    <tr class="body-table">
                        <td class="id-course-table"><span class="valor-id">SCOR</span></td>
                        <td class="border-center name-course-table"><span class="valor-name">Implementing and Operating Cisco Security Core Technologies</span></td>
                        <td class="border-center"><span class="valor-start-date">5</span></td>
                        <td class="border-center"><span class="valor-end-date">12</span></td>
                    </tr>

                    <tr class="body-table">
                        <td class="id-course-table"><span class="valor-id">SESA</span></td>
                        <td class="border-center name-course-table"><span class="valor-name">Securing Email with Cisco Email Security Appliance</span></td>
                        <td class="border-center"><span class="valor-start-date">4</span></td>
                        <td class="border-center"><span class="valor-end-date">12</span></td>
                    </tr>

                    <tr class="body-table">
                        <td class="id-course-table"><span class="valor-id">SWSA</span></td>
                        <td class="border-center name-course-table"><span class="valor-name">Securing the Web with Cisco Web Security Appliance</span></td>
                        <td class="border-center"><span class="valor-start-date">2</span></td>
                        <td class="border-center"><span class="valor-end-date">12</span></td>
                    </tr>

                    <tr class="body-table">
                        <td class="id-course-table"><span class="valor-id">DEVOPS</span></td>
                        <td class="border-center name-course-table"><span class="valor-name">Implementing DevOps Solutions and Practices Using Cisco Platforms</span></td>
                        <td class="border-center"><span class="valor-start-date">5</span></td>
                        <td class="border-center"><span class="valor-end-date">12</span></td>
                    </tr>

                    <tr class="body-table">
                        <td class="id-course-table"><span class="valor-id">CLICA</span></td>
                        <td class="border-center name-course-table"><span class="valor-name">Implementing Cisco Collaboration Applications</span></td>
                        <td class="border-center"><span class="valor-start-date">5</span></td>
                        <td class="border-center"><span class="valor-end-date">16</span></td>
                    </tr>

                    <tr class="body-table">
                        <td class="id-course-table"><span class="valor-id">CLCOR</span></td>
                        <td class="border-center name-course-table"><span class="valor-name">Implementing Cisco Collaboration Core Technologies</span></td>
                        <td class="border-center"><span class="valor-start-date">5</span></td>
                        <td class="border-center"><span class="valor-end-date">16</span></td>
                    </tr>

                    <tr class="body-table">
                        <td class="id-course-table"><span class="valor-id">CLCEI</span></td>
                        <td class="border-center name-course-table"><span class="valor-name">CLCEI Implementing Cisco Collaboration Cloud and Edge Solutions</span></td>
                        <td class="border-center"><span class="valor-start-date">5</span></td>
                        <td class="border-center"><span class="valor-end-date">12</span></td>
                    </tr>

                    <tr class="body-table">
                        <td class="id-course-table"><span class="valor-id">CLFNDU</span></td>
                        <td class="border-center name-course-table"><span class="valor-name">Understanding Cisco Collaboration Foundations</span></td>
                        <td class="border-center"><span class="valor-start-date">5</span></td>
                        <td class="border-center"><span class="valor-end-date">12</span></td>
                    </tr>

                    <tr class="body-table">
                        <td class="id-course-table"><span class="valor-id">SPCOR</span></td>
                        <td class="border-center name-course-table"><span class="valor-name">Implementing and Operating Cisco Service Provider Network Core Technologies</span></td>
                        <td class="border-center"><span class="valor-start-date">5</span></td>
                        <td class="border-center"><span class="valor-end-date">16</span></td>
                    </tr>

                    <tr class="body-table">
                        <td class="id-course-table"><span class="valor-id">QoS</span></td>
                        <td class="border-center name-course-table"><span class="valor-name">Implementing Cisco Quality of Service</span></td>
                        <td class="border-center"><span class="valor-start-date">5</span></td>
                        <td class="border-center"><span class="valor-end-date">12</span></td>
                    </tr>

                    <tr class="body-table">
                        <td class="id-course-table"><span class="valor-id">MCAST
                            </span></td>
                        <td class="border-center name-course-table"><span class="valor-name">Implementing Cisco Multicast
                            </span></td>
                        <td class="border-center"><span class="valor-start-date">5</span></td>
                        <td class="border-center"><span class="valor-end-date">12</span></td>
                    </tr>

                    <tr class="body-table">
                        <td class="id-course-table"><span class="valor-id">BGP</span></td>
                        <td class="border-center name-course-table"><span class="valor-name">Configuring BGP on Cisco Routers
                            </span></td>
                        <td class="border-center"><span class="valor-start-date">5</span></td>
                        <td class="border-center"><span class="valor-end-date">12</span></td>
                    </tr>
                </tbody>
            </table>
        </section> -->
        <section id="labs" class="lab col-12 col-md-12 col-xl-12 row">
            <h4 id="title-labs">Listado de nuestros laboratorios</h4>
            <table id="tabla-lab" class="tabla-lab col-11">
                <tr class="buscador">
                    <td colspan='4'><input type="text" name="input-id" id="input-id" placeholder="Buscar..."></td>
                </tr
                <tr class="separator">
                    <td></td>
                </tr>
                <tr class="head-table">
                    <td class="esquina-izquierda id-course-table"><h3 class="title-id">Curso</h3></td>
                    <td><h3 class="title-start-date">Duración</h3></td>
                    <td><h3 class="title-end-date">Pods Avaliable</h3></td>
                    <td class="esquina-derecha"><h3 class="title-end-date">Precio</h3></td>
                </tr>
                <tr id="tr-loader">
                    <td colspan=4>
                        <div class="contenedor_carga">
                            <div class="carga"></div>
                        </div>
                    </td>
                </tr>
            </table>    
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./script/laboratorio/dataLaboratorio.js"></script>

    <script>
        function scrollToSection(id) {
            const seccionDestino = document.querySelector(id);
            const posicion = seccionDestino.getBoundingClientRect().top + window.scrollY;
            const mitadPantalla = window.innerHeight / 4;
            const scrollDestino = posicion - mitadPantalla;

            window.scrollTo({
                top: scrollDestino,
                behavior: 'smooth'
            });
        }
    </script>
</body>

</html>