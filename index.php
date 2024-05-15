<?php
include_once 'config/parameters.php';

array_map(function($view_controller) { include_once 'controller/viewsController/'.$view_controller; }, views_controller);
array_map(function($api) { include_once 'controller/api/'.$api; }, apis);
array_map(function($model) { include_once 'Model/'.$model; }, model);
array_map(function($model_entrie) { include_once 'Model/Entries/'.$model_entrie; }, model_entries);

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