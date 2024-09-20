<?php

class laboratorioController{
    public function index(){
        session_start(); // Inicia la sesión
    
        // Incluye archivos de vista para la cabecera, la página principal (home) y el footer
        require_once("view/header.php");
        require_once("view/laboratorio.php");
        require_once("view/footer.php");
    }

    public function insertLab(){
        session_start(); // Inicia la sesión
        /*if (isset($_SESSION['admin'])) {*/
            $course = $_POST['course'];
            $desc = $_POST['description'];
            $duration = $_POST['duration'];
            $capacity = $_POST['capacity'];

            laboratorio::insertLab($course, $desc, $duration, $capacity);

            require_once("view/header.php");
            require_once("view/admin/admin.php");
            require_once("view/footer.php");
        /*}else{
            header("Location: ".url."?controller=login");
        }*/
    }
}
?>