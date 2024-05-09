<?php
class cursoController{
    public function index(){
        session_start();
    
        
        require_once("view/header.php");
        require_once("view/curso.php");
        require_once("view/footer.php");
    }

    public function view(){
        session_start();
    
        if (sizeof($_GET) == 3) {
            $keys = array_keys($_GET);
            $courseName = $keys[2];
            $course = Curso::getCourseByName($courseName)[0];
        }else {
            header('Location: http://127.0.0.1/miratelecomunicacionees/');
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

        header('Location: http://127.0.0.1/miratelecomunicacionees/?controller=curso');
        exit;
    }

    public function prueba(){
        session_start();

        require_once("view/prueba.html");
    }
} 
?>