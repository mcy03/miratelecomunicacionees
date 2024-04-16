<?php

class cursoController{
    public function index(){
        session_start(); // Inicia la sesión
        
        // Verifica si no existe la variable de sesión 'selecciones' y la inicializa como un array vacío si es así
        if (!isset($_SESSION['selecciones'])) {
            $_SESSION['selecciones'] = array();
        }
    
        // Incluye archivos de vista para la cabecera, la página principal (home) y el footer
        require_once("view/header.php");
        require_once("view/curso.php");
        require_once("view/footer.php");
    }

    public function select(){
        // Verifica si se ha proporcionado la tecnología o la certificación y establece la cookie correspondiente
        if (isset($_GET['tecnology'])) {
            setcookie('tecnology', $_GET['tecnology'], time() + (100 * 1), "/");
        } else if (isset($_GET['certification'])) {
            setcookie('certification', $_GET['certification'], time() + (100 * 1), "/");
        }
        
        // Redirige a la URL deseada
        header('Location: http://127.0.0.1/miratelecomunicacionees/?controller=curso');
        exit; // Asegura que no se ejecute más código después de la redirección
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