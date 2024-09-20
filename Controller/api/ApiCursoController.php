<?php
include_once "Model/Curso.php";
include_once "Model/Certificacion.php";
include_once "Model/Tecnologia.php";

class ApiCursoController{    

    public function index(){
        echo 'api';
        return;
    }

    public function api(){
        $accion = isset($_POST["accion"]) ? $_POST["accion"] : '';

        if(trim($accion) == "get_courses"){  
            $select = isset($_POST['select']) ? $_POST['select'] : 0;
            $skip = isset($_POST['skip']) ? $_POST['skip'] : 0;

            if ($select == 0){
                $cursos = Curso::getCourses();
            }else{
                $cursos = Curso::getCoursesFilter($select, $skip);
            }
            
            $array_cursos = [];
            foreach ($cursos as $curso) {
                // Obtener nombres de certificación y tecnología por cada curso
                $certificacion_nombre = Certificacion::getNombreById($curso->getCERTIFICACION_ID());
                $tecnologia_nombre = Tecnologia::getNombreById($curso->getTECNOLOGIA_ID());

                $array_cursos[] = array(
                    "CURSO_ID" => $this->sanitizeUTF8($curso->getCURSO_ID()),
                    "NOMBRE_CURSO" => $this->sanitizeUTF8($curso->getNOMBRE_CURSO()),
                    "COMPLETE_NAME" => $this->sanitizeUTF8($curso->getCOMPLETE_NAME()),
                    "DESCRIPCION" => $this->sanitizeUTF8($curso->getDESCRIPCION()),
                    "PREREQUISITOS" => $this->sanitizeUTF8($curso->getPREREQUISITOS()),
                    "JOB_ROLES" => $this->sanitizeUTF8($curso->getJOB_ROLES()),
                    "COURSE_OBJECTIVE" => $this->sanitizeUTF8($curso->getCOURSE_OBJECTIVE()),
                    "COURSE_CONTENT" => $this->sanitizeUTF8($curso->getCOURSE_CONTENT()),
                    "LAB_OUTLINE" => $this->sanitizeUTF8($curso->getLAB_OUTLINE()),
                    "DURATION" => $this->sanitizeUTF8($curso->getDURATION()),
                    "TECNOLOGIA_ID" => $this->sanitizeUTF8($curso->getTECNOLOGIA_ID()),
                    "CERTIFICACION_ID" => $this->sanitizeUTF8($curso->getCERTIFICACION_ID()),
                    "NOMBRE_CERTIFICACION" => $this->sanitizeUTF8($certificacion_nombre),
                    "NOMBRE_TECNOLOGIA" => $this->sanitizeUTF8($tecnologia_nombre)
                );
            }
            
            $this->sendJsonResponse($array_cursos);
            return;
        }
    }

    private function sanitizeUTF8($data) {
        return mb_convert_encoding($data, 'UTF-8', 'UTF-8');
    }

    private function sendJsonResponse($data) {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        $json = json_encode($data, JSON_UNESCAPED_UNICODE);
        if ($json === false) {
            error_log("Error al codificar en JSON: " . json_last_error_msg());
            echo json_encode(["error" => "Error al codificar en JSON: " . json_last_error_msg()]);
        } else {
            echo $json;
        }
    }
}
