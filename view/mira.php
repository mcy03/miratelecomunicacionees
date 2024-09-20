<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/assets.css">
    <link rel="stylesheet" type="text/css" href="./style/mira.css?1.0">
    <title>Miratelecomunicacions</title>
</head>
<body>
    <?php
        if (isset($section)) {
    ?>
            <input id="seccion-seleccionada" type="hidden" value="<?=$section?>">
    <?php
        }
    ?>
   
    <section class="banner-principal">
        <div class="title-page">
            <h1>Conectamos con un mundo con diferencia</h1>
        </div>
    </section>
    <section class="ubicacion">
        <div class="ruta-ubi">
            <a class="ruta-page" href="<?=url?>">Home / </a><p class="page">Mira</p>
        </div>
    </section>
    <div class="pagina row">
        <section class="intro-page row col-12">
            <div class="row-intro col-11 row">
                <div class="line col-0 col-md-0 col-lg-2"><hr><hr></div>
                <div class="content-intro content-intro-center col-12 col-md-12 col-lg-8">
                    Desde el año 2023 somos un Cisco Learning Partner Global que actúa como catalizador de capacitación en las tecnologías centrales de Cisco.
                </div>
                <div class="line col-0 col-md-0 col-lg-2"><hr><hr></div>
            </div>
            <div class="row-intro col-11 row">
                <div class="content-intro borderBottom col-12">
                    Los socios de aprendizaje estamos autorizados y 
                    avalados por Cisco para brindar formación oficial de todas sus arquitecturas tecnológicas y apoyar a partners y 
                    clientes en sus planes de formación y certificaciones, maximizando sus habilidades IT para ser capaces de afrontar los retos de sus compañías, 
                    transformando el conocimiento en resultados medibles.
                </div>
                <div class="content-intro borderBottom col-12">
                    Nuestra apuesta constante por las iniciativas estratégicas de Cisco
                     hace necesario alinear nuestros objetivos empresariales acorde a los nuevos escenarios tecnológicos para tener 
                     la capacidad de transmitir el conocimiento para diseñar, implementar y operar soluciones Cisco.
                    </div>
                <div class="content-intro list-intro col-12">
                    <ul>
                        <li class="">  :: Seguridad & Cyberops</li>
                        <li class="">  :: IA</li>
                        <li class="">  :: Observabilidad</li>
                        <li class="">  :: Data Center</li>
                        <li class="">  :: Collaboration</li>
                    </ul>
                    <ul>
                        <li class="">  :: Enterprise</li>
                        <li class="">  :: Multicloud</li>
                        <li class="">  :: Service Provider</li>
                        <li class="">  :: DevNet</li>
                        <li class="">  :: Design</li>
                    </ul>
                </div>
            </div>
        </section>
        <div class="section-gallery col-12">
            <div class="title-section">
                <h2>EL CAMINO QUE GENERA CAMBIOS</h2>
            </div>
            <section class="gallery-image">
                <div class="image selected">
                    <img src="./resource/slader_img/IMG Conoce MIRA S/Mision L.png" alt="" class="a">
                    <img src="./resource/slader_img/IMG Conoce MIRA L/Mision L.png" alt="" class="b">
                    <h4>Misión como Cisco Learning Partner</h4>
                    <div class="ifselected">
                        <p>La transformación digital trae nuevos retos que exigen tener las habilidades y capacidades para entender las necesidades de los clientes</p>
                        <a href="<?=url.'?controller=mira&action=mision_learning_partner'?>">Saber más</a>
                    </div>
                </div>
                <div class="image unselected">
                    <img src="./resource/slader_img/IMG Conoce MIRA S/Inicios.png" alt="" class="a">
                    <img src="./resource/slader_img/IMG Conoce MIRA L/Inicios.png" alt="" class="b">
                    <h4>Somos una realidad empresarial</h4>
                    <div class="ifselected">
                        <p>Iniciamos nuestra actividad en 2003 y tras más de 20 años como Cisco Learning Partner hemos alcanzado ser un partner de referencia tecnológica para el mercado IT. </p>
                        <a href="<?=url.'?controller=mira&action=realidad_empresarial'?>">Saber más</a>
                    </div>
                </div>
                <div class="image unselected">
                    <img src="./resource/slader_img/IMG Conoce MIRA S/Tecnologia.png" alt="" class="a">
                    <img src="./resource/slader_img/IMG Conoce MIRA L/Tecnologia.png" alt="" class="b">
                    <h4>Tecnología para todos</h4>
                    <div class="ifselected">
                        <p><strong>Mira telecomunicaciones</strong> puede ayudarle a seguir avanzando en el mundo IT gracias a las certificaciones y especializaciones Cisco que son altamente reconocidas. </p>
                        <a href="<?=url.'?controller=mira&action=tecnologia_para_todos'?>">Saber más</a>
                    </div>
                </div>
                <div class="image unselected">
                    <div class="container-a a image-container">
                        <img src="./resource/slader_img/IMG Conoce MIRA S/Premios.png" alt="a">
                    </div>
                    <img src="./resource/slader_img/IMG Conoce MIRA L/Premios.png" alt="" class="b">
                    <h4>Premios y reconocimientos</h4>
                    <div class="ifselected">
                        <p>La transformación digital trae nuevos retos que exigen tener las habilidades y capacidades para entender las necesidades de los clientes. Descubre los reconocimientos a nuestro equipo.</p>
                        <a href="<?=url.'?controller=mira&action=premios_mira'?>">Saber más</a>
                    </div>
                </div>
                <div class="image unselected">
                    <img src="./resource/slader_img/IMG Conoce MIRA S/Global.png" alt="" class="a">
                    <img src="./resource/slader_img/IMG Conoce MIRA L/Global.png" alt="" class="b">
                    <h4>MIRA a nivel global</h4>
                    <div class="ifselected">
                        <p>Actores claves internacionalmente para atender a clientes de cualquier parte del mundo.</p>
                        <a href="<?=url.'?controller=mira&action=mira_global'?>">Saber más</a>
                    </div>
                </div>
                <div class="image unselected">
                    <img src="./resource/slader_img/IMG Conoce MIRA S/Team.png" alt="" class="a">
                    <img src="./resource/slader_img/IMG Conoce MIRA L/Team.png" alt="" class="b">
                    <h4>Nuestro equipo</h4>
                    <div class="ifselected">
                        <p>Somos un grupo de profesionales con pasión por lo que hacemos y profundamente especializados...</p>
                        <a href="<?=url.'?controller=mira&action=nuestro_equipo'?>">Saber más</a>
                    </div>
                </div>
                <div class="image unselected">
                    <img src="./resource/slader_img/IMG Conoce MIRA S/Corporate.png" alt="" class="a">
                    <img src="./resource/slader_img/IMG Conoce MIRA L/Corporate.png" alt="" class="b">
                    <h4>Marco corporativo</h4>
                    <div class="ifselected">
                        <p>Tenemos un firme compromiso con el bienestar, la diversidad y la inclusión de cada uno de nuestros profesionales.</p>
                        <a href="<?=url.'?controller=mira&action=corporativo'?>">Saber más</a>
                    </div>
                </div>
            </section>
        </div>
        


        <section class="slader-info col-12">
            <div class="title-section title-section-left">
                <h2>CISCO BUILDERS</h2>
            </div>
            <div class="content-slader">
                <p class="left">
                    Si tiene interés por empezar, cambiar o impulsar su carrera IT y 
                    prepararse para aprender las habilidades básicas de redes con la certificación CCNA (Cisco Certified Network Associate) o 
                    su interés es la certificación CCNP Enterprise ENCOR (Cisco Enterprise Network Core) para atender conceptos y redes más avanzadas.
                    <br>
                    Nuestro programa Cisco Builders es la respuesta a la necesidad de reforzar el ecosistema de Cisco que tanto profesionales, 
                    partners como clientes están buscando para construir un futuro más exitoso.
                </p>
                <p class="right black">
                    Mira telecomunicaciones como Cisco Learning Partner está comprometido en desarrollar 
                    y validar los conocimientos adecuados adecuados para que los equipos IT de las organizaciones sean 
                    capaces de garantizar que sus redes estén en manos de expertos capaces de resolver problemas y diseñar soluciones eficientes.
                </p>
            </div>
            <div class="link-container link1">
                <a class="link-slader" href="<?=url.'?controller=mira&action=cisco_builders'?>">Saber más...</a>
            </div>
        </section>
        <div class="red">

        </div>
        <section class="reverse-slader col-12">
            <div class="title-section title-section-right">
                <h2>CONECTAMOS TALENTO</h2>
            </div>
            <div class="content-slader">

                <p class="left black left2">
                    Mira telecomunicaciones agrega una nueva experiencia tanto para el Partner como para el cliente final, 
                    diversificando sus procesos, agregando a su cadena de valor un área que focalizará procesos en el reclutamiento y la selección de Talentos IT.
                </p>

                <p class="right white right2">
                    Desde finales del 2018 hemos trabajado en la idea de generar una incubadora de talentos para responder a la demanda de nuestros clientes.
                </p>
            </div>
            <div class="link-container reverse-link">
                <a class="link-slader" href="<?=url.'?controller=mira&action=conectamos_talento'?>">Saber más...</a>
            </div>
        </section>

        <section id="questions" class="questions  col-12">
            <div class="title-section">
                <h2>PREGUNTAS MÁS FRECUENTES</h2>
            </div>

            <div class="question">
                <h3>Cisco Learning Credits</h3>
                <div class="content-question">
                    <p>
                        Los Cisco Learning Credits (CLC) son cupones prepagos que puede usar para planificar y pagar la capacitación y los exámenes de Cisco. <br><br>

                        Cada 1 CLC tiene el valor de 100 USD (dólares americanos) y vencen 1 año después de la fecha de emisión. <br><br>

                        Los podrá utilizar en formación tanto dirigida por instructor como digital, vales de exámenes o entradas a Cisco Live. <br><br>

                        ¡Use sus Cisco Learning Credits acumulados y aproveche al máximo su inversión en formación! 🏆 <br><br>

                        ¿Se le caducan los Cisco Learning Credits y necesita soporte para canjearlos?, ¿Quiere saber cómo utilizarlos?, ¿le gustaría conocer la ruta de certificaciones y prepararte para la certificación? 🤷♀️ <br> <br>

                        Puedo responderle las preguntas más frecuentes sobre los Cisco Learning Credits y guiarle en el canjeo de sus créditos de aprendizaje.<br><br>
                        
                        Es vital recordar a los clientes que disponen de CLC el valor que supone este programa y el beneficio que representa tener la oportunidad de que el equipo IT pueda seguir desarrollándose obteniendo un aprendizaje integral para la empresa. <br><br>

                        Al dejar que se expiren, se está perdiendo una gran oportunidad de mantenerse a la vanguardia y maximizar el rendimiento de las soluciones Cisco adquiridas. <br><br>

                        ¡No deje que sus Cisco Learning Credits caduquen! 🆗 <br><br>

                        Desde la comunidad de Learning estamos comprometidos en brindarle el mejor servicio. 
                    </p>
                </div>
            </div>
            <div class="question">
                <h3>Plan de recertificación Cisco</h3>
                <div class="content-question">
                    <p>
                        Puede revisar toda la política de recertificación de Cisco pulsando <a href="https://www.cisco.com/c/en/us/training-events/training-certifications/certifications/recertification.html" target="_blank">aquí</a>
                    </p>
                </div>
            </div>
            <div class="question">
                <h3>Programa de formación Continua</h3>
                <div class="content-question">
                    <p>
                    Es un programa que permite a los profesionales de TI lograr una re-certificación en cada uno de los distintos niveles existentes: CCNA, Specialist, CCNP o CCIE utilizando un sistema de “créditos” (Continuing Education Credit - CEC) o combinaciones de CEC’s + exámenes.
                    <br><br>
                    ¿Cómo puede obtenerlos? <br>
                    •	Asistencia a formación oficial en cualquier formato: presencial/virtual o Digital<br>
                    •	Compra de materiales autorizados<br>
                    •	Asistencia a entrenamientos disponibles en eventos como Cisco Live.<br><br>

                    El proceso se realiza por medio del portal web Continuing Education Program. Cada profesional de TI certificado utiliza sus credenciales (Cisco ID) y va registrando los créditos ganados. En ese sitio Web también se encuentra un resumen de sus certificaciones activas y un catálogo de cursos elegibles para obtener CECs.
                    <br><br>¿Se necesita algún requisito?<br><br>
                    Para participar en el programa es contar con una certificación vigente en cualquiera de los niveles.<br>
                    El objetivo de este programa es animar a los profesionales IT a mantener, crecer y ampliar sus habilidades mientras validan y re-certifican lo existente.<br> 
                    Una vez más, destacar que es vital estar certificado para respaldar los conocimientos mediante las reconocidas certificaciones Cisco. <br><br>
                    Ver vídeo: <a href="https://www.youtube.com/watch?v=Sa_DtRzB5Aw" target="_blank">https://www.youtube.com/watch?v=Sa_DtRzB5Aw<a><br>
                    Link: <a href="https://www.cisco.com/c/en/us/training-events/training-certifications/certifications/continuing-education.html" target="_blank">https://www.cisco.com/c/en/us/training-events/training-certifications/certifications/continuing-education.html</a>

                    </p>
                </div>
            </div>
        </section>

        <section id="links-interes" class="links-interes row col-12">
            <div class="title-section col-12">
                <h2>TOP LINKS DE INTERÉS SOBRE L&C</h2>
            </div>

            <div class="link-interes col-3">
                <a href="https://www.cisco.com/c/en/us/training-events/training-certifications/certifications/recertification.html" target="_blank">Recertificaciones Cisco</a>
            </div>
        
            <div class="link-interes col-3">
                <a href="https://www.cisco.com/c/en/us/training-events/training-certifications/certifications/continuing-education.html" target="_blank">Education Program</a>
            </div>

            <div class="link-interes col-3">
                <a href="https://id.cisco.com/oauth2/default/v1/authorize?response_type=code&scope=openid%20profile%20address%20offline_access%20cci_coimemberOf%20email&client_id=cae-okta-web-gslb-01&state=ZHvxWGDA0__Zp9lqcwqEcDIWsvw&redirect_uri=https%3A%2F%2Flearningcredit.cloudapps.cisco.com%2Fcb%2Fsso&nonce=7xh5Lggo-p40pMu2uggrD7M9pCclaunkVRrQ1oPR8u0#/" target="_blank">Cisco Learning Credits tool</a>
            </div>

            <div class="link-interes col-3">
                <a href="https://learninglocator.cloudapps.cisco.com/#/home" target="_blank">Cisco Learning Locator</a>
            </div>
            
            <div class="link-interes col-3">
                <a href="https://learningspace.cisco.com/" target="_blank">Cisco Learning Network Space</a>
            </div>

            <div class="link-interes col-3">
                <a href="https://www.cisco.com/site/us/en/learn/training-certifications/certifications/index.html" target="_blank">Cisco Learning & Certifications</a>
            </div>
        </section>
    </div>

    <script src="./script/mira.js"></script>
    <script src="./script/slider-image.js"></script>
</body>
</html>