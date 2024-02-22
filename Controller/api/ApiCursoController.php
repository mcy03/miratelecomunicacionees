<?php


class ApiCursoController{    
    public function index(){
        echo 'api';
        return;
    }
    public function api(){
        $accion = isset($_POST["accion"]) ? $_POST["accion"] : '';

        if(trim($accion) == "get_courses"){  
            $cursos = Curso::getCourses();

            $array_cursos = [];
            foreach ($cursos as $curso) {
                $array_cursos[] = array(
                    "CURSO_ID" => $curso->getCURSO_ID(),
                    "NOMBRE_CURSO" => $curso->getNOMBRE_CURSO(),
                    "DESCRIPCION" => $curso->getDESCRIPCION(),
                    "DETALLES" => $curso->getDETALLES(),
                    "IMG_CURSO" => $curso->getIMG_CURSO()
                );
            }
            
            echo json_encode($array_cursos, JSON_UNESCAPED_UNICODE);
            return;

        }else {
            echo 'hola';
            return;
        }
    }
}