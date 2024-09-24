<?php
    define('views_controller',array(
        'homeController.php', 'formacionController.php', 'cursoController.php', 
        'calendarioController.php','serviciosITController.php', 'libreriaDigitalController.php', 
        'laboratorioController.php', 'miraController.php', 'blogController.php', 'entradaController.php',
        'adminController.php', 'loginController.php', 'politicasController.php', 'reservasController.php'));
    
    define('apis', array(
        'ApiCertificacionController.php', 'ApiCursoController.php', 'ApiLaboratorioController.php', 
        'ApiTecnologiaController.php','ApiCalendarioController.php', 'ApiCategoriaController.php', 
        'ApiPublicacionController.php','ApiRecursoController.php', 'ApiReservasController.php'));
    
    define('model', array(
        'db.php', 'Certificacion.php', 'Laboratorio.php', 'Curso.php','Tecnologia.php', 'Calendario.php', 
        'User.php', 'email_permiso.php', 'recurso.php', 'Proovedor.php', 'Zona_Horaria.php', 'Reserva.php'));
    
    define('model_entries', array(
        'Categoria.php', 'Publicacion.php', 'Texto.php', 
        'Img.php'));

    define('url',"http://127.0.0.1/miratelecomunicacionees/");
    define('action_default',"index");
    define('action_default_product',"content");

    define('url_facebook',"https://www.facebook.com/miratelecomunicaciones/");
    define('url_twitter',"https://twitter.com/MIRATELECOM");
    define('url_instagram',"https://www.instagram.com/miratelecomunicaciones/");
    define('url_linkedin',"https://www.linkedin.com/company/mira-telecomunicaciones/");
    define('url_telegram',"https://t.me/miratelecomunicacions");
    