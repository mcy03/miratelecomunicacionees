<?php
class miraController{
    public function index(){
        session_start(); // Inicia la sesión
        
        // Verifica si no existe la variable de sesión 'selecciones' y la inicializa como un array vacío si es así
        if (isset($_GET['section'])) {
            $section = $_GET['section'];
        }
    
        require_once("view/header.php");
        require_once("view/mira.php");
        require_once("view/footer.php");
    }

    public function mision_learning_partner(){
        session_start(); // Inicia la sesión
        

        require_once("view/header.php");
        require_once("view/caminoMira/learningPartner.php");
        require_once("view/footer.php");
    }
    public function realidad_empresarial(){
        session_start(); // Inicia la sesión
        
        require_once("view/header.php");
        require_once("view/caminoMira/realidadEmpresarial.php");
        require_once("view/footer.php");
    }
    public function tecnologia_para_todos(){
        session_start(); // Inicia la sesión
        $tecnologias = Tecnologia::getTecnologies();
        require_once("view/header.php");
        require_once("view/caminoMira/tecnologiaParaTodos.php");
        require_once("view/footer.php");
    }
    public function premios_mira(){
        session_start(); // Inicia la sesión
        
        require_once("view/header.php");
        require_once("view/caminoMira/premiosMira.php");
        require_once("view/footer.php");
    }
    public function mira_global(){
        session_start(); // Inicia la sesión
            
        require_once("view/header.php");
        require_once("view/caminoMira/miraGlobal.php");
        require_once("view/footer.php");
    }
    public function nuestro_equipo(){
        session_start(); // Inicia la sesión
        
        require_once("view/header.php");
        require_once("view/caminoMira/nuestroEquipo.php");
        require_once("view/footer.php");
    }
    public function corporativo(){
        session_start(); // Inicia la sesión
        
        require_once("view/header.php");
        require_once("view/caminoMira/corporativo.php");
        require_once("view/footer.php");
    }

    public function politica_calidad(){ 
        require_once("view/header.php");
        require_once("view/politica_calidad.php");
        require_once("view/footer.php");
    }

    public function mision(){ 
        require_once("view/header.php");
        require_once("view/mision.php");
        require_once("view/footer.php");
    }

    public function cisco_builders(){ 
        require_once("view/header.php");
        require_once("view/ciscoBuilders.php");
        require_once("view/footer.php");
    }

    public function conectamos_talento(){ 
        require_once("view/header.php");
        require_once("view/conectamosTalento.php");
        require_once("view/footer.php");
    }

    public function prueba(){
        session_start(); // Inicia la sesión
        
        require_once("view/prueba.html");
    }
}
?>