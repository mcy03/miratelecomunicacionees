<?php

class blogController{
    public function index(){
        session_start(); // Inicia la sesión
        
        // Verifica si no existe la variable de sesión 'selecciones' y la inicializa como un array vacío si es así
        if (!isset($_SESSION['selecciones'])) {
            $_SESSION['selecciones'] = array();
        }
    
        // Incluye archivos de vista para la cabecera, la página principal (home) y el footer
        require_once("view/header.php");
        require_once("view/blog.php");
        require_once("view/footer.php");
    }

    public function prueba(){
        session_start(); // Inicia la sesión
        
        // Verifica si no existe la variable de sesión 'selecciones' y la inicializa como un array vacío si es así
        if (!isset($_SESSION['selecciones'])) {
            $_SESSION['selecciones'] = array();
        }
    
        // Incluye archivos de vista para la cabecera, la página principal (home) y el footer
        require_once("view/prueba.html");
    }
}
?>