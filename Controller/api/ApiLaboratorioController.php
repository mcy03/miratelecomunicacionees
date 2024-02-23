<?php
include_once "Model/Laboratorio.php";

class ApiLaboratorioController{    

    public function api(){
        $accion = isset($_POST["accion"]) ? $_POST["accion"] : '';
 
        if(trim($accion) == "get_labs"){  
            $laboratorios = Laboratorio::getLabs();

            $array_laboratorios = [];
            foreach ($laboratorios as $laboratorio) {
                $array_laboratorios[] = array(
                    "LABORATORIO_ID" => $laboratorio->getLABORATORIO_ID(),
                    "CURSO_ID" => $laboratorio->getCURSO_ID(),
                    "NOMBRE_LABORATORIO" => $laboratorio->getNOMBRE_LABORATORIO(),
                    "DESCRIPCION_LABORTORIO" => $laboratorio->getDESCRIPCION_LABORTORIO(),
                    "DURACION" => $laboratorio->getDURACION(),
                    "PODS_AVALIABLE" => $laboratorio->getPODS_AVALIABLE()
                );
            }

            echo json_encode($array_laboratorios, JSON_UNESCAPED_UNICODE);
            return;
            
        }elseif(trim($accion) == "get_labs_table_format"){  
            $laboratorios = Laboratorio::getLabs();

            $array_laboratorios = [];
            foreach ($laboratorios as $laboratorio) {
                $array_laboratorios[] = array(
                    "LABORATORIO_ID" => $laboratorio->getLABORATORIO_ID(),
                    "CURSO_ID" => Curso::getNameById($laboratorio->getCURSO_ID()),
                    "CURSO" => Curso::getDescById($laboratorio->getCURSO_ID()),
                    "DESCRIPCION_LABORTORIO" => $laboratorio->getDESCRIPCION_LABORATORIO(),
                    "DURACION" => $laboratorio->getDURACION(),
                    "PODS_AVALIABLE" => $laboratorio->getPODS_AVALIABLE()
                );
            }

            echo json_encode($array_laboratorios, JSON_UNESCAPED_UNICODE);
            return;

        }
    }
}