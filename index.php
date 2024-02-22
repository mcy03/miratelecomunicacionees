<?php
include_once 'controller/viewsController/homeController.php';
include_once 'controller/viewsController/formacionController.php';
include_once 'controller/viewsController/cursoController.php';
include_once 'controller/viewsController/calendarioController.php';
include_once 'controller/viewsController/serviciosITController.php';
include_once 'controller/viewsController/libreriaDigitalController.php';
include_once 'controller/viewsController/laboratorioController.php';
include_once 'controller/viewsController/miraController.php';
include_once 'controller/viewsController/blogController.php';

include_once 'controller/api/ApiCertificacionController.php';
include_once 'controller/api/ApiCursoController.php';
include_once 'controller/api/ApiLaboratorioController.php';
include_once 'controller/api/ApiTecnologiaController.php';

include_once 'Model/db.php';
include_once 'Model/Certificacion.php';
include_once 'Model/Curso.php';
include_once 'Model/Laboratorio.php';
include_once 'Model/Tecnologia.php';

include_once 'config/parameters.php';

if (!isset($_GET['controller'])) {
    //Si no le pasamos nada se pasara pagina principal de productos
    header("location:" . url . '?controller=home');
} else {
    $nombre_controller = $_GET['controller'] . 'Controller';

    if (class_exists($nombre_controller)) {
        //Miro si nos pasa una accion
        //En caso contrario mostramos una accion por defecto
        $controller = new $nombre_controller;

        if (isset($_GET['action']) && method_exists($controller, $_GET['action'])) {
            $action = $_GET['action'];
        } else {
            $action = action_default;
        }

        $controller->$action();
    } else {
        header("location:" . url . '?controller=home');
    }
}
?>  