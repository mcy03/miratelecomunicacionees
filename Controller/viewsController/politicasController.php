<?php
class politicasController{
    public function aviso_legal(){
        session_start(); // Inicia la sesión
    
        require_once("view/header.php");
        require_once("view/politicas-ley/avisoLegal.php");
        require_once("view/footer.php");
    }
    public function cookies(){
        session_start(); // Inicia la sesión
    
        require_once("view/header.php");
        require_once("view/politicas-ley/cookies.php");
        require_once("view/footer.php");
    }
    public function politicas_privacidad(){
        session_start(); // Inicia la sesión
    
        require_once("view/header.php");
        require_once("view/politicas-ley/politicaPrivacidad.php");
        require_once("view/footer.php");
    }
}
?>