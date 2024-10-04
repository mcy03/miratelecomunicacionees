<?php
class cursoController{
    public function index(){
        session_start();
    
        if (isset($_COOKIE['tecnology'])) { 
            $tecnologiaFiltro = $_COOKIE['tecnology'];
            setcookie('tecnology', '', time() - 3600, '/');
    
        }else if (isset($_COOKIE['certification'])) {
            $certificacionFiltro = $_COOKIE['certification'];     
            setcookie('certification', '', time() - 3600, '/');   
        } 

        require_once("view/header.php");
        require_once("view/curso.php");
        require_once("view/footer.php");

        
        
    }

    public function view(){
        session_start();
    
        if (sizeof($_GET) == 3) {
            $courseName = $_GET['curso'];
            $course = Curso::getCourseByName($courseName)[0];
        }else {
            header('Location: '.url);
        }

        require_once("view/header.php");
        require_once("view/courseView.php");
        require_once("view/footer.php");
    }


    public function select(){
        if (isset($_GET['tecnology'])) {
            setcookie('tecnology', $_GET['tecnology'], time() + (100 * 1), "/");
        } else if (isset($_GET['certification'])) {
            setcookie('certification', $_GET['certification'], time() + (100 * 1), "/");
        }

        header('Location: '.url.'?controller=curso');
        exit;
    }

    public function prueba(){
        session_start();

        require_once("view/prueba.html");
    }
} 
?>