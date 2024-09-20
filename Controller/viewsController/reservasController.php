<?php

class reservasController{
    public function index(){
        // Incluye archivos de vista para la cabecera, la página reservas y el footer
        require_once("view/header.php");
        require_once("view/herramientaReservas.php");
        require_once("view/footer.php");
    }
}
?>