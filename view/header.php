<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/header.css">
</head>
<body>
    <header>
        <div class="header-one">
            <div class="contacto-header">
                <div class="div-mail">
                    <img class="img-contact" src="./resource/icon-gmail.png" alt="">
                    <a href="mailto:miratelecomunicacions.com" class="text-contacto">miratelecomunicacions.com</a>
                </div>
                <div class="div-phone">
                    <img class="img-contact" src="./resource/icon-phone.png" alt="">
                    <a href="tel:+34 902 876 701" class="text-contacto">+34 902 876 701</a>
                </div>
            </div>
            <div class="idioma-header">
                <img src="./resource/espana.png" alt="">
                <p>ES</p>
            </div>
        </div>
        <div class="header-two">
            <div class="logo">
            <a href="<?=url.'?controller=home'?>"><img class="logo-mira" src="./resource/Miralogo/Mira.png" alt=""></a>
            </div>
            <nav class="nav-header">
                <div class="menu-toggle" id="mobile-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul>
                    <li><a href="<?=url.'?controller=formacion'?>">Formación</a></li>
                    <li><a href="<?=url.'?controller=calendario'?>">Calendario</a></li>
                    <li><a href="<?=url.'?controller=serviciosIT'?>">Servicios IT</a></li>
                    <li><a href="<?=url.'?controller=laboratorio'?>">Laboratorios</a></li>
                    <li><a href="<?=url.'?controller=libreriaDigital'?>">Librería Digital</a></li>
                    <li><a href="<?=url.'?controller=mira'?>">Conoce a Mira</a></li>
                    <li><a href="<?=url.'?controller=blog'?>">Blog on the Go</a></li>
                </ul>
            </nav>
            <div class="search-icon">
                <img src="./resource/lupa.png" alt="Icono de búsqueda">
            </div>
        </div>
        <?php if (isset($_SESSION['admin'])) { ?>
            <div class="cabecera-admin">
                <a href="<?=url.'?controller=admin'?>" class="inicio-admin">Mi sitio</a>
            </div>
        <?php } ?>
    </header>
    <script src="./script/header.js"></script>
</body>
</html>