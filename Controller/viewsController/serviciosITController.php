<?php

class serviciosITController{
    public function index(){
        session_start(); // Inicia la sesión
        
        // Verifica si no existe la variable de sesión 'selecciones' y la inicializa como un array vacío si es así
        if (!isset($_SESSION['selecciones'])) {
            $_SESSION['selecciones'] = array();
        }
    
        require_once("view/header.php");
        require_once("view/serviciosIT.php");
        require_once("view/footer.php");
    }

    public function saica(){
        session_start(); // Inicia la sesión
    
        require_once("view/header.php");
        require_once("view/casosDeExito/saica.php");
        require_once("view/footer.php");
    }

    public function aenaT1(){
        session_start(); // Inicia la sesión
    
        require_once("view/header.php");
        require_once("view/casosDeExito/aenaT1.php");
        require_once("view/footer.php");
    }

    public function f1valencia(){
        session_start(); // Inicia la sesión
    
        require_once("view/header.php");
        require_once("view/casosDeExito/f1valencia.php");
        require_once("view/footer.php");
    }

    public function adif(){
        session_start(); // Inicia la sesión
    
        require_once("view/header.php");
        require_once("view/casosDeExito/adif.php");
        require_once("view/footer.php");
    }

    public function nexica(){
        session_start(); // Inicia la sesión
    
        require_once("view/header.php");
        require_once("view/casosDeExito/nexica.php");
        require_once("view/footer.php");
    }

    public function holcim(){
        session_start(); // Inicia la sesión
    
        require_once("view/header.php");
        require_once("view/casosDeExito/holcim.php");
        require_once("view/footer.php");
    }

    public function prueba(){
        session_start(); // Inicia la sesión
        
        // Verifica si no existe la variable de sesión 'selecciones' y la inicializa como un array vacío si es así
        if (!isset($_SESSION['selecciones'])) {
            $_SESSION['selecciones'] = array();
        }
    
        require_once("view/header.php");
        require_once("view/casosDeExito/saica.php");
        require_once("view/footer.php");
    }
}
?>