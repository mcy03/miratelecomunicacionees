<?php


class ApiCursoController{    
    public function index(){
        echo 'api';
        return;
    }
    public function api(){
        $accion = isset($_POST["accion"]) ? $_POST["accion"] : '';

        if(trim($accion) == "get_courses"){  
            $select = $_POST['select'];
            $skip = $_POST['skip'];

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
                    "CURSO_ID" => $curso->getCURSO_ID(),
                    "NOMBRE_CURSO" => $curso->getNOMBRE_CURSO(),
                    "DESCRIPCION" => $curso->getDESCRIPCION(),
                    "DETALLES" => $curso->getDETALLES(),
                    "IMG_CURSO" => $curso->getIMG_CURSO(),
                    "TECNOLOGIA_ID" => $curso->getTECNOLOGIA_ID(),
                    "CERTIFICACION_ID" => $curso->getCERTIFICACION_ID(),
                    "NOMBRE_CERTIFICACION" => $certificacion_nombre,
                    "NOMBRE_TECNOLOGIA" => $tecnologia_nombre
                );
            }
            
            echo json_encode($array_cursos, JSON_UNESCAPED_UNICODE);
            return;
        }
    }
}