<?php

class adminController{
    public function index(){
        require_once("view/header.php");
        require_once("view/admin/admin.php");
        require_once("view/footer.php");
        /*
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
            
            $categorias = Categoria::getCategorias();
            
            if (isset($_GET['selection'])) {
                $selection = $_GET['selection'];
            }
            
            require_once("view/header.php");
            require_once("view/admin/admin.php");
            require_once("view/footer.php");
        }
        */
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
        /*
        if (!isset($_SESSION['admin'])) {
            header("Location: ".url."?controller=login");
        }else{
        */
            $categories = Categoria::getCategorias();
            require_once("view/header.php");
            require_once("view/admin/entrie/insertEntrie.php");
            require_once("view/footer.php");
        /*}*/
    }

    public function medios(){
        if(Recurso::countRecursos() < 1){
            $recursos= [];
        }else{
            $recursos = Recurso::getRecursos();
        }
        
        require_once("view/header.php");
        require_once("view/admin/media.php");
        require_once("view/footer.php");
    }


    public function insert_medio(){
        // Procesar los datos enviados
        $nombre = $_POST['NOMBRE'];
        $desc = $_POST['DESCRIPCION'];
        $url = $_POST['URL'];

        // Verificar si se ha subido un archivo
        if(isset($_FILES['archivo']) && $_FILES['archivo']['error'] == 0) {
            $archivo = $_FILES['archivo'];
    
            // Definir la carpeta donde se guardarán los archivos
            $directorioDestino = 'biblioteca/';  // Cambia esto a la ruta real de tu carpeta
    
            // Crear un nombre único para el archivo
            $nombreArchivo = basename($archivo['name']);
    
            // Ruta completa donde se guardará el archivo
            $rutaCompleta = $directorioDestino . $nombreArchivo;
    
            // Mover el archivo a la carpeta destino
            if(move_uploaded_file($archivo['tmp_name'], $rutaCompleta)) {
                // Generar la URL del recurso
                $url_server = url . $directorioDestino . $nombreArchivo;
    
                // Insertar el recurso en la base de datos
                $result = Recurso::addRecurso($nombre, $desc, $url, $url_server, $tipo);
    
                // Redirigir después de la inserción
                header("Location: ".url."?controller=admin&action=medios");
            } else {
                // Manejo de error si el archivo no se pudo mover
                echo "Error al subir el archivo.";
            }
        } else {
            // Manejo de error si no se recibió un archivo
            echo "No se recibió ningún archivo o hubo un error en la subida.";
        }
    }
    
    public function delete_medio() {
        if (isset($_POST['recurso_id'])) {
            $recurso_id = intval($_POST['recurso_id']);
            
            // Obtener el recurso para obtener la URL del archivo
            $recurso = Recurso::getRecursoById($recurso_id);
            
            if ($recurso) {
                // Obtener la URL del servidor
                $url_server = $recurso->getURL_SERVER(); 
    
                // Convertir la URL en una ruta de archivo
                $document_root = $_SERVER['DOCUMENT_ROOT'];
                // Eliminar el esquema (http:// o https://) y el dominio
                $relative_path = parse_url($url_server, PHP_URL_PATH);
                $absolute_path = $document_root . $relative_path;
    
                // Imprimir la ruta para depuración
                echo "Ruta absoluta del archivo: " . $absolute_path;
    
                // Eliminar el archivo del servidor
                if (file_exists($absolute_path)) {
                    unlink($absolute_path);
                } else {
                    echo "Archivo no encontrado en la ruta especificada.";
                }
    
                // Ahora eliminar el recurso de la base de datos
                if (Recurso::deleteRecurso($recurso_id)) {
                    // Redirige a la lista de recursos después de la eliminación
                    header("Location: " . url . "?controller=admin&action=medios");
                    exit();
                } else {
                    echo "Error al eliminar el recurso de la base de datos.";
                }
            } else {
                echo "Recurso no encontrado.";
            }
        } else {
            echo "ID del recurso no especificado.";
        }
    }
    
    
    public function editor() {
        require_once("view/textEditor.html");
    }
}
?>