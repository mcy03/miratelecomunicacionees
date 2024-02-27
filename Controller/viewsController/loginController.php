<?php
include_once 'Model/User.php';
class loginController{
    public function index(){
        session_start(); // Inicia la sesión

        // Verifica si no existe la variable de sesión 'selecciones' y la inicializa como un array vacío si es así
        if (isset($_SESSION['user'])) {
            header("Location: ".url."?controller=loginController&action=loguear");
   
        }else{
            // Incluye archivos de vista para la cabecera, la página principal (home) y el footer
            require_once("view/header.php");
            require_once("view/admin/login.php");
            require_once("view/footer.php");
        }

        
    }

    public function loguear(){
        session_start(); // Inicia la sesión
        
        echo $_POST['email'];
    }

    public function prueba(){
        session_start(); // Inicia la sesión

    
        // Incluye archivos de vista para la cabecera, la página principal (home) y el footer
        require_once("view/prueba.html");
    }
}
?>