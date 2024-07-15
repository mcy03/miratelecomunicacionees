<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/assets.css">
    <link rel="stylesheet" type="text/css" href="./style/serviciosIT.css?1.0">

    <title>Servicios IT Miratelecomunicacions</title>
</head>
<body>
    <section class="banner-principal">
        <div class="title-page">
            <h1>Servicios IT</h1>
        </div>

        <span>Su aliado estratégico</span>
    </section>
    <section class="ubicacion">
        <div class="ruta-ubi">
            <a class="ruta-page" href="<?=url?>">Home / </a><p class="page">Servicios IT</p>
        </div>
    </section>
    <div class="content row">
        <section class="intro-txt col-12">
            <p>
                Somos un partner tecnológico de extremo a extremo. 
                La nutrida combinación de ser un partner de capacitación y de servicios profesionales en apoyo al partner, 
                nos convierte en el aliado estratégico que cualquier partner Cisco necesita para llevar a cabo sus proyectos.
            </p>
        </section>
        <section class="compromiso col-12">
            <h3 class="title-section">NUESTRO COMPROMISO</h3>
            <div id="img_compromiso"></div>
        </section>
        <section class="fases row">
            <div class="txt-fases col-12 col-md-6 col-lg-8">
                <h3 class="title-section">FASES DEL PROYECTO</h3>
                <ul>
                    <div class="content-list">
                        <li id="btn-content1">Consultoría Estratégica</li>
                        <p class="text-content text-content1">
                            Nuestro equipo de expertos podrá ayudarle a tomar la decisión, 
                            analizar la viabilidad e innovar acorde a la estrategia de cada compañía, 
                            con el objetivo de transformar el negocio creando un valor diferencial.
                        </p>
                        <ul class="list-two text-content text-content1">
                            <li>Soluciones en cloud</li>
                            <li>Automatización</li>
                            <li>Arquitecturas centrales de Cisco</li>
                            <li>Tecnología de futuro</li>
                            <li>Retorno de la inversión</li>
                        </ul>
                    </div>
                    <div class="content-list">
                        <li id="btn-content2">Consultoría tecnológica</li>
                        <p class="text-content text-content2">
                            Le ayudará al partner a determinar y le asesorará en la estrategia adecuada para la arquitectura de red 
                            y la traducción de la estrategia técnica que requiere su cliente en una solución real de Cisco.
                        </p>
                    </div>
                    <div class="content-list">
                        <li id="btn-content3">Retorno de la inversión</li>
                        <p class="text-content text-content3">Acompañamos al partner en la ejecución y la integración de sus proyectos.</p>
                    </div>
                    <div class="content-list">
                        <li id="btn-content4">Soporte</li>
                        <p class="text-content text-content4">Bolsa de horas para dar mantenimiento y soporte a los proyectos de los clientes.</p>
                    </div>
                </ul>

            </div>
            <div class="cont-img-fases col-12 col-md-6 col-lg-4">
                <div class="img-fases">

                </div>
            </div>
        </section>
        <section class="casos row">
            <h3 class="title-section">CASOS DE ÉXITO</h3>

            <div class="fila col-12 row">
                <div class="col-4">
                    <div class="caso">
                        <div id="img-Saica" class="img-card"></div>
                        <div class="content-card">
                            <h4>Saica</h4>
                            <button class="button-caso-exito" onclick="mostrarContenido('saica')" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <span>Ver más -></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="caso">
                        <div id="img-Aena" class="img-card"></div>
                        <div class="content-card">
                            <h4>Aena T1</h4>
                            <button class="button-caso-exito" onclick="mostrarContenido('aenaT1')" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <span>Ver más -></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="caso">
                        <div id="img-F1" class="img-card"></div>
                        <div class="content-card">
                            <h4>F1 Valencia Street Circuit</h4>
                            <button class="button-caso-exito" onclick="mostrarContenido('f1valencia')" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <span>Ver más -></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fila col-12 row">
                <div class="col-4">
                    <div class="caso">
                        <div id="img-Adif" class="img-card"></div>
                        <div class="content-card">
                            <h4>Adif</h4>
                            <button class="button-caso-exito" onclick="mostrarContenido('adif')" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <span>Ver más -></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="caso">
                        <div id="img-Nexica" class="img-card"></div>
                        <div class="content-card">
                            <h4>Nexica</h4>
                            <button class="button-caso-exito" onclick="mostrarContenido('nexica')" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <span>Ver más -></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="caso">
                        <div id="img-Holcim" class="img-card"></div>
                        <div class="content-card">
                            <h4>Holcim</h4>
                            <button class="button-caso-exito" onclick="mostrarContenido('holcim')" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <span>Ver más -></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="soluciones col-12 row">
            <h3 class="title-section">NUESTRO COMPROMISO</h3>
            <div class="content-solutions col-12 row">
                <div class="texts-solutions col-8">
                    <div class="text-solution selected">
                        <h4>Centro de Datos</h4>
                        <p>
                            Cisco ACI, Hyperflex, Nexus, UCS.
                        </p>
                        <img src="./resource/serviciosIT/Soluciones Cisco/Centro de Datos.png" alt="">
                    </div>
                    <div class="text-solution">
                        <h4>Colaboración</h4>
                        <p>
                            DNA, SD-Wan, Controladoras 9K, Catalyst.
                        </p>
                        <img src="./resource/serviciosIT/Soluciones Cisco/Colaboracion.png" alt="">
                    </div>
                    <div class="text-solution">
                        <h4>Service provider</h4>
                        <p>
                            ISE, Firewall, Umbrella, DUO, Cyber.
                        </p>
                        <img src="./resource/serviciosIT/Soluciones Cisco/Service Provider.png" alt="">
                    </div>
                    <div class="text-solution">
                        <h4>Seguridad</h4>
                        <p>
                            CUCM, Webex Team, Calling, Jabber.
                        </p>
                        <img src="./resource/serviciosIT/Soluciones Cisco/Seguridad.png" alt="">
                    </div>
                    <div class="text-solution">
                        <h4>Networking y Wireless</h4>
                        <p>
                            OSPF, Multicasting, BGP, IP for Media IPFM.
                        </p>
                        <img src="./resource/serviciosIT/Soluciones Cisco/Networking+Wireless.png" alt="">
                    </div>
                </div>
                <div class="headers-solutions col-4">
                    <div class="header-solution selected">
                        <h4>Centro de Datos</h4>
                    </div>
                    <div class="header-solution">
                        <h4>Colaboración</h4>
                    </div>
                    <div class="header-solution">
                        <h4>Service provider</h4>
                    </div>
                    <div class="header-solution">
                        <h4>Seguridad</h4>
                    </div>
                    <div class="header-solution">
                        <h4>Networking y Wireless</h4>
                    </div>
                </div>
            </div>
            <!-- como me dolio todo aquello, estoy my mal por todo esto, jdrrr -->
        </section>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modalContent"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="./script/serviciosIT.js"></script>
    <script src="./script/responsive/toggle-servicios.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>