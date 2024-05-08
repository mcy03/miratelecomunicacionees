<?php

class adminController{
    public function index(){
        session_start(); // Inicia la sesión
        if (!isset($_SESSION['admin'])) {
            header("Location: ".url."?controller=login");
        }else{
            
            $numEntries = Publicacion::countEntries();
            $numCategories = Categoria::countCategories();
            $numLabs = Laboratorio::countLabs();
            $numCourse = Curso::countCourses();
            $numCertifications = Certificacion::countCertifications();
            $numTecnologies = Tecnologia::countTechnologies();
            $numCalendario = Calendario::countCalendario();


            if (isset($_GET['selection'])) {
                $selection = $_GET['selection'];
            }
            
            require_once("view/header.php");
            require_once("view/admin/admin.php");
            require_once("view/footer.php");
        }
    }

    public function deloguear(){
        session_start(); // Inicia la sesión
        
        if (isset($_SESSION['admin'])) {
            session_destroy();
        }

        header("Location: ".url."?controller=login");
    }

    public function insertEntrieAdmin(){
        session_start(); // Inicia la sesión
        if (!isset($_SESSION['admin'])) {
            header("Location: ".url."?controller=login");
        }else{
            $categories = Categoria::getCategorias();
            require_once("view/header.php");
            require_once("view/admin/entrie/insertEntrie.php");
            require_once("view/footer.php");
        }
    }
}
?>