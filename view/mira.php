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
    <div class="pagina">
        <section class="intro-page row">
            <div class="row-intro col-11 row">
                <div class="line col-2"><hr><hr></div>
                <div class="content-intro content-intro-center col-8">
                    Desde el año 2023 somos un Cisco Learning Partner Global que actúa como catalizador de capacitación en las tecnologías centrales de Cisco.
                </div>
                <div class="line col-2"><hr><hr></div>
            </div>
            <div class="row-intro col-11 row">
                <div class="content-intro border-right col-4">
                    Los socios de aprendizaje estamos autorizados y 
                    avalados por Cisco para brindar formación oficial de todas sus arquitecturas tecnológicas y apoyar a partners y 
                    clientes en sus planes de formación y certificaciones, maximizando sus habilidades IT para ser capaces de afrontar los retos de sus compañías, 
                    transformando el conocimiento en resultados medibles.
                </div>
                <div class="content-intro border-right col-4">
                    Nuestra apuesta constante por las iniciativas estratégicas de Cisco
                     hace necesario alinear nuestros objetivos empresariales acorde a los nuevos escenarios tecnológicos para tener 
                     la capacidad de transmitir el conocimiento para diseñar, implementar y operar soluciones Cisco.
                    </div>
                <div class="content-intro list-intro col-4">
                    <ul>
                        <li>:: Seguridad</li>
                        <li>:: IA</li>
                        <li>:: Observabilidad</li>
                        <li>:: Cyberops</li>
                        <li>:: Data Center</li>
                        <li>:: Collaboration</li>
                    </ul>
                    <ul>
                        <li>:: Enterprise</li>
                        <li>:: Multicloud</li>
                        <li>:: Service Provider</li>
                        <li>:: DevNet</li>
                        <li>:: Design</li>
                    </ul>
                </div>
            </div>
        </section>
        <div class="section-gallery">
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
                        <a href="">Saber más</a>
                    </div>
                </div>
                <div class="image unselected">
                    <img src="./resource/slader_img/IMG Conoce MIRA S/Inicios.png" alt="" class="a">
                    <img src="./resource/slader_img/IMG Conoce MIRA L/Inicios.png" alt="" class="b">
                    <h4>Somos una realidad empresarial</h4>
                    <div class="ifselected">
                        <p>Iniciamos nuestra actividad en 2003 y tras más de 20 años como Cisco Learning Partner hemos alcanzado ser un partner de referencia tecnológica para el mercado IT. </p>
                        <a href="">Saber más</a>
                    </div>
                </div>
                <div class="image unselected">
                    <img src="./resource/slader_img/IMG Conoce MIRA S/Tecnologia.png" alt="" class="a">
                    <img src="./resource/slader_img/IMG Conoce MIRA L/Tecnologia.png" alt="" class="b">
                    <h4>Tecnología para todos</h4>
                    <div class="ifselected">
                        <p>MIRA Telecomunicacions puede ayudarle a seguir avanzando en el mundo IT gracias a las certificaciones y especializaciones Cisco que son altamente reconocidas. </p>
                        <a href="">Saber más</a>
                    </div>
                </div>
                <div class="image unselected">
                    <div class="container-a a image-container">
                        <img src="./resource/slader_img/IMG Conoce MIRA S/Premios.png" alt="a">
                    </div>
                    <img src="./resource/slader_img/IMG Conoce MIRA L/Premios.png" alt="" class="b">
                    <h4>Premios y reconocimientos</h4>
                    <div class="ifselected">
                        <p>La transformación digital trae nuevos retos que exigen tener las habilidades y capacidades para entender las necesidades de los clientes</p>
                        <a href="">Saber más</a>
                    </div>
                </div>
                <div class="image unselected">
                    <img src="./resource/slader_img/IMG Conoce MIRA S/Global.png" alt="" class="a">
                    <img src="./resource/slader_img/IMG Conoce MIRA L/Global.png" alt="" class="b">
                    <h4>MIRA a nivel global</h4>
                    <div class="ifselected">
                        <p>Nuestra metodología ILT (Instructor Led Training) virtual, mediante Webex, nos permite atender a clientes de EMEA y América Latina, así como cualquier otro lugar del mundo, adaptándonos a la zona horaria del cliente. </p>
                        <a href="">Saber más</a>
                    </div>
                </div>
                <div class="image unselected">
                    <img src="./resource/slader_img/IMG Conoce MIRA S/Team.png" alt="" class="a">
                    <img src="./resource/slader_img/IMG Conoce MIRA L/Team.png" alt="" class="b">
                    <h4>Nuestro equipo</h4>
                    <div class="ifselected">
                        <p>Somos un grupo de profesionales PROFUNDAMENTE especializados en todas las arquitecturas de Cisco.  </p>
                        <a href="">Saber más</a>
                    </div>
                </div>
                <div class="image unselected">
                    <img src="./resource/slader_img/IMG Conoce MIRA S/Corporate.png" alt="" class="a">
                    <img src="./resource/slader_img/IMG Conoce MIRA L/Corporate.png" alt="" class="b">
                    <h4>Marco corporativo</h4>
                    <div class="ifselected">
                        <p>En Mira telecomunicacions somos conscientes de que el bienestar de los empleados influye directamente en su motivación, inspiración y eficiencia. </p>
                        <a href="">Saber más</a>
                    </div>
                </div>
            </section>
        </div>
        


        <section class="slader-info">
            <div class="title-section">
                <h2>CISCO BUILDERS</h2>
            </div>
            <div class="title-section title-section-2">
                <h2>CISCO BUILDERS 2</h2>
            </div>
            <div class="content-slader">
                <p class="left">
                    Si tiene interés por empezar, cambiar o impulsar su carrera IT y 
                    prepararse para aprender las habilidades básicas de redes con la certificación CCNA (Cisco Certified Network Associate) o 
                    su interés es la certificación CCNP Enterprise ENCOR (Cisco Enterprise Network Core) para atender conceptos y redes más avanzadas, 
                    nuestro programa Cisco Builders es la respuesta a la necesidad de reforzar el ecosistema de Cisco que tanto profesionales, 
                    partners como clientes están buscando para construir un futuro más exitoso
                </p>

                <p class="left left2">
                    Si tiene interés por empezar, cambiar o impulsar su carrera IT y 
                    prepararse para aprender las habilidades básicas de redes con la certificación CCNA (Cisco Certified Network Associate) o 
                    su interés es la certificación CCNP Enterprise ENCOR (Cisco Enterprise Network Core) para atender conceptos y redes más avanzadas, 
                    nuestro programa Cisco Builders es la respuesta a la necesidad de reforzar el ecosistema de Cisco que tanto profesionales, 
                    partners como clientes están buscando para construir un futuro más exitoso
                </p>

                <p class="right">
                    MIRA Telecomunicaciones como Cisco Learning Partner está comprometido en desarrollar 
                    y validar los conocimientos adecuados adecuados para que los equipos IT de las organizaciones sean 
                    capaces de garantizar que sus redes estén en manos de expertos capaces de resolver problemas y diseñar soluciones eficientes.
                </p>
                <p class="right right2">
                    MIRA Telecomunicaciones como Cisco Learning Partner está comprometido en desarrollar 
                    y validar los conocimientos adecuados adecuados para que los equipos IT de las organizaciones sean 
                    capaces de garantizar que sus redes estén en manos de expertos capaces de resolver problemas y diseñar soluciones eficientes.
                </p>
            </div>
            <div class="link-container">
                <a class="link-slader" href="">Ver convocatorias...</a>
            </div>
            <div class="link-container link2">
                <a class="link-slader" href="">Ver convocatorias...</a>
            </div>
            
        </section>

        <section class="questions">
            <div class="title-section">
                <h2>PREGUNTAS MÁS FRECUENTES</h2>
            </div>

            <div class="question">
                <h3>Cisco Learning Credits</h3>
                <div class="content-question">
                    <p>
                        Los Cisco Learning Credits (CLC) son cupones prepagos que puede usar para planificar y pagar la capacitación y los exámenes de Cisco. <br>

                        Cada 1 CLC tiene el valor de 100 USD (dólares americanos) y vencen 1 año después de la fecha de emisión. <br>

                        Los podrá utilizar en formación tanto dirigida por instructor como digital, vales de exámenes o entradas a Cisco Live. <br>

                        ¡Usa tus Cisco Learning Credits acumulados y aprovecha al máximo tu inversión en formación! 🏆 <br>

                        ¿Se te caducan los Cisco Learning Credits y necesitas soporte para canjearlos?, ¿Quieres saber cómo utilizarlos?, ¿Te gustaría conocer la ruta de certificaciones y prepararte para la certificación? 🤷♀️ <br> 

                        Puedo responderte las preguntas más frecuentes sobre los Cisco Learning Credits y guiarte en el canjeo de tus créditos de aprendizaje.<br>
                        
                        Es vital recordar a los clientes que disponen de CLC el valor que supone este programa y el beneficio que representa tener la oportunidad de que el equipo IT pueda seguir desarrollándose obteniendo un aprendizaje integral para la empresa. <br>

                        Al dejar que se expiren, te estás perdiendo una gran oportunidad de mantenerte a la vanguardia y maximizar el rendimiento de las soluciones Cisco adquiridas. <br>

                        ¡No dejes que tus Cisco Learning Credits caduquen! 🆗 <br>

                        Desde la comunidad de Learning estamos comprometidos en brindarte el mejor servicio. 
                    </p>
                </div>
            </div>
            <div class="question">
                <h3>Plan de recertificación Cisco</h3>
                <div class="content-question">
                    <p>
                        Puede revisar toda la política de recertificación de Cisco pulsando <a href="https://www.cisco.com/c/en/us/training-events/training-certifications/certifications/recertification.html">aquí</a>
                    </p>
                </div>
            </div>
            <div class="question">
                <h3>Programa de formación Continua</h3>
                <div class="content-question">
                    <p>
                        Es un programa que permite a los profesionales de TI lograr una re-certificación en cada uno de los distintos niveles existentes: <br> CCNA, Specialist, CCNP o CCIE utilizando un sistema de “créditos” (Continuing Education Credit - CEC) o combinaciones de CEC’s + exámenes.
                    </p>
                </div>
            </div>
        </section>

        <section class="questions">
            <div>
                <div class="title-section">
                    <h2>PREGUNTAS MÁS FRECUENTES</h2>
                </div>

                <div class="question">
                    <h3>Cisco Learning Credits</h3>
                </div>
            </div>
            
            <div>
                <div class="title-section">
                    <h2>PREGUNTAS MÁS FRECUENTES</h2>
                </div>

                <div class="question">
                    <h3>Cisco Learning Credits</h3>
                </div>
            </div>

            <div>
                <div class="title-section">
                    <h2>PREGUNTAS MÁS FRECUENTES</h2>
                </div>

                <div class="question">
                    <h3>Cisco Learning Credits</h3>
                </div>
            </div>
        </section>
    </div>

    <script src="./script/mira.js"></script>
    <script src="./script/slider-image.js"></script>
</body>
</html>