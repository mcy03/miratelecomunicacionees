<?php

class blogController{
    public function index(){
        session_start();
    
        require_once("view/header.php");
        require_once("view/blog.php");
        require_once("view/footer.php");
    }

    public function prueba(){
        session_start();
    
        require_once("view/prueba.html");
    }
}
?>