<?php
include_once "Model/Laboratorio.php";
include_once "Model/Curso.php";

class ApiLaboratorioController{    

    public function api(){
        $accion = isset($_POST["accion"]) ? $_POST["accion"] : '';

        if(trim($accion) == "get_labs"){  
            $laboratorios = Laboratorio::getLabs();
        
            $array_laboratorios = [];
            foreach ($laboratorios as $laboratorio) {
                $array_laboratorios[] = array(
                    "LABORATORIO_ID" => $this->sanitizeUTF8($laboratorio->getLABORATORIO_ID()),
                    "CURSO_ID" => $this->sanitizeUTF8($laboratorio->getCURSO_ID()),
                    "NOMBRE_LABORATORIO" => $this->sanitizeUTF8($laboratorio->getNOMBRE_LABORATORIO()),
                    "DESCRIPCION_LABORTORIO" => $this->sanitizeUTF8($laboratorio->getDESCRIPCION_LABORATORIO()),
                    "DURACION" => $this->sanitizeUTF8($laboratorio->getDURACION()),
                    "PODS_AVALIABLE" => $this->sanitizeUTF8($laboratorio->getPODS_AVALIABLE()),
                    "PRICE" => $this->sanitizeUTF8($laboratorio->getPRICE()) // Se añade el nuevo atributo PRICE
                );
            }
        
            $this->sendJsonResponse($array_laboratorios);
            return;
        
        } elseif(trim($accion) == "get_labs_table_format"){  
            $laboratorios = Laboratorio::getLabs();
        
            $array_laboratorios = [];
            foreach ($laboratorios as $laboratorio) {
                $array_laboratorios[] = array(
                    "LABORATORIO_ID" => $this->sanitizeUTF8($laboratorio->getLABORATORIO_ID()),
                    "CURSO_ID" => $this->sanitizeUTF8(Curso::getNameById($laboratorio->getCURSO_ID())),
                    "CURSO" => $this->sanitizeUTF8(Curso::getDescById($laboratorio->getCURSO_ID())),
                    "DESCRIPCION_LABORTORIO" => $this->sanitizeUTF8($laboratorio->getDESCRIPCION_LABORATORIO()),
                    "DURACION" => $this->sanitizeUTF8($laboratorio->getDURACION()),
                    "PODS_AVALIABLE" => $this->sanitizeUTF8($laboratorio->getPODS_AVALIABLE()),
                    "PRICE" => $this->sanitizeUTF8($laboratorio->getPRICE()) // Se añade el nuevo atributo PRICE
                );
            }
        
            $this->sendJsonResponse($array_laboratorios);
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
