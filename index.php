<?php
include_once 'config/parameters.php';

// Incluir controladores, APIs, modelos y entradas de modelos
array_map(function($view_controller) { 
    
    include_once 'Controller/viewsController/'.$view_controller; 

}, views_controller);

array_map(function($api) { 

    include_once 'Controller/api/'.$api; 

}, apis);

array_map(function($model) { 
    
    include_once 'Model/'.$model; 

}, model);

array_map(function($model_entrie) { 
    
    include_once 'Model/Entries/'.$model_entrie; 

}, model_entries);

// Verificar si el controlador está definido en la URL
if (!isset($_GET['controller'])) {
    // Redirigir a la página principal (home) si no se especifica un controlador
    header("location:" . url . '?controller=home');
    exit();
}else {
    
    $nombre_controller = $_GET['controller'] . 'Controller';

    // Verificar si la clase del controlador existe
    if (class_exists($nombre_controller)) {
        // Crear una instancia del controlador
        $controller = new $nombre_controller;

        // Verificar si se especifica una acción en la URL
        if (isset($_GET['action']) && method_exists($controller, $_GET['action'])) {
            $action = $_GET['action'];
        } else {
            $action = action_default;
        }

        // Llamar a la acción en el controlador
        $controller->$action();

        
    }else {
        // Redirigir a la página principal (home) si el controlador no existe
        header("location:" . url . '?controller=home');
        exit();
    }
}
    
?>
