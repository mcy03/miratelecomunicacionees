<?php
class entradaController{
    public function index(){
        session_start(); // Inicia la sesión
        if (isset($_GET['entrie'])) {
            if ($_GET['entrie'] != '') {
                $entrada_id = $_GET['entrie'];
                $entrada = Publicacion::getEntrieById($entrada_id);
                $entradas = Publicacion::getLastEntries();
                $categorias = Categoria::getCategorias();
                $entrada = $entrada[0];
            }else {
                header("Location: ".url);
            }   
        }else{
            header("Location: ".url);
        }

        require_once("view/header.php");
        require_once("view/entrada.php");
        require_once("view/footer.php");
    }

    public function insertEntrieAdmin(){
        session_start();
        
        $categories = Categoria::getCategorias();
        require_once("view/admin/insertEntrie.php");
    }

    public function prueba(){
        session_start();

        require_once("view/prueba.html");
    }
}
?>