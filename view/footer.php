<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="./style/footer.css">

    <link href="https://db.onlinewebfonts.com/c/8b8212e1382f2d794fae8b8d3d69ce30?family=Bundt+Cake" rel="stylesheet">
    <link href="https://db.onlinewebfonts.com/c/0b0e6caf1e87745dc5b17b461d7d873b?family=Shelley+Script+LT+W04+Regular" rel="stylesheet">
</head>
<body>
    <footer>
        <div class="section-one-footer">
            <div class="mira-watchword">
                <p class="sentence-mira final-sentence-mira">Conectamos un mundo con diferencia</p>
            </div>
        </div>

        <div class="hr-container">
            <hr class="hr-blanco">
        </div>

        <div class="resources-footer">
            <div class="contact-resources">
                <h5 class="title-contact">Contáctanos</h5>
                
                <ul>
                    <li>
                        <img src="./resource/icon-gmail.png" alt="Descripción de la imagen">
                        <p>mira@miratelecomunicacions.com</p>
                    </li>
                    
                </ul>
                <h6 class="subtitle-contact">España</h6>
                <ul>
                    <li>
                        <img src="./resource/ubicacion.png" alt="Descripción de la imagen">
                        <p>Av. Corts Catalanes, 2, 08173 <br>Sant Cugat del Vallés, Barcelona, España.</p>
                    </li>
                    <li>
                        <img src="./resource/icon-phone.png" alt="Descripción de la imagen">
                        <p>Tel: +34 902 876 701</p>
                    </li>
                </ul>
                <h6 class="subtitle-contact">México</h6>
                <ul>
                    <li>
                        <img src="./resource/ubicacion.png" alt="Descripción de la imagen">
                        <p>Presidente Masaryk 61 - 901B Polanco Miguel
                            Hidalgo <br>Ciudad de México  C.P. 11560</p>
                    </li>
                    <li>
                        <img src="./resource/icon-phone.png" alt="Descripción de la imagen">
                        <p>Tel: +52 55 4040 8261</p>
                    </li>
                </ul>
            </div>

            <div class="contact-resources">
                <h5 class="title-contact">Destacados</h5>
                
                <ul>
                    <li>
                        <img src="./resource/mas.png" alt="Descripción de la imagen">
                        <a href="<?=url.'?controller=curso'?>">Cursos CISCO</a>
                    </li>
                    <li>
                        <img src="./resource/mas.png" alt="Descripción de la imagen">
                        <a href="<?=url.'?controller=mira#questions'?>">Preguntas más frecuentes</a>
                    </li>
                    <li>
                        <img src="./resource/mas.png" alt="Descripción de la imagen">
                        <a href="<?=url.'?controller=mira#links-interes'?>">Links de interés L&C</a>
                    </li>
                    <li>
                        <img src="./resource/mas.png" alt="Descripción de la imagen">
                        <a href="<?=url.'?controller=blog'?>">Últimas noticias</a>
                    </li>
                </ul>
            </div>
            
            <div class="contact-resources menu-footer">
                <h5 class="title-contact">Menú principal</h5>
                
                <ul>
                    <li>
                        <img src="./resource/mas.png" alt="Descripción de la imagen">
                        <a href="<?=url.'?controller=formacion'?>">Formación</a>
                    </li>
                    <li>
                        <img src="./resource/mas.png" alt="Descripción de la imagen">
                        <a href="<?=url.'?controller=calendario'?>">Calendario</a>
                    </li>
                    <li>
                        <img src="./resource/mas.png" alt="Descripción de la imagen">
                        <a href="<?=url.'?controller=serviciosIT'?>">Servicios IT</a>
                    </li>
                    <li>
                        <img src="./resource/mas.png" alt="Descripción de la imagen">
                        <a href="<?=url.'?controller=laboratorio'?>">Laboratorios</a>
                    </li>
                    <li>
                        <img src="./resource/mas.png" alt="Descripción de la imagen">
                        <a href="<?=url.'?controller=libreriaDigital'?>">Librería Digital</a>
                    </li>
                    <li>
                        <img src="./resource/mas.png" alt="Descripción de la imagen">
                        <a href="<?=url.'?controller=mira'?>">Conoce a MIRA</a>
                    </li>
                    <li>
                        <img src="./resource/mas.png" alt="Descripción de la imagen">
                        <a href="<?=url.'?controller=blog'?>">Blog on the Go</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="logo-mira-footer">
            <img class="logo-mira" src="./resource/Miralogo/Mira.png" alt="">
        </div>
        <div class="container-logos">
            <div class="logos">
                <img src="./resource/logos/octalia-LSSI-logo.png" alt="">
                <img src="./resource/logos/logo_iso.png" alt="">
                <img src="./resource/logos/Pearson VUE-logo.jpg" alt="">
                <img src="./resource/logos/tripartita_logo.png" alt="">
                <img src="./resource/logos/clp_logo.png" alt="">
            </div>
        </div>
        <div class="social-media-container">
            <div class="hr-container">
                <hr class="hr-blanco">
            </div>
            <div class="social-media-icons">
                <a href="<?=url_facebook?>" target="_blank"><i class="fab fa-facebook-f"></i></a>   
                <a href="<?=url_twitter?>" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="<?=url_instagram?>" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="<?=url_linkedin?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="<?=url_telegram?>" target="_blank"><i class="fab fa-telegram"></i></a> 
            </div>
            <div class="hr-container">
                <hr class="hr-blanco">
            </div>
        </div>
        
        <div class="copy">
            <p>Copyright 2024 © Mira Telecomunicaciones | <a href="<?=url.'?controller=politicas&action=aviso_legal'?>">Aviso Legal</a> | <a href="<?=url.'?controller=politicas&action=politicas_privacidad'?>">Política de Privacidad</a> | <a href="<?=url.'?controller=politicas&action=cookies'?>">Política  de Cookies</a>
        </div>
    </footer>
</body>
</html>