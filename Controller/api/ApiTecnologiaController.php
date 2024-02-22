<?php
include_once "Model/Tecnologia.php";

class ApiTecnologiaController{    

    public function api(){
        $accion = isset($_POST["accion"]) ? $_POST["accion"] : '';
 
        if(trim($accion) == "get_tecnologies"){  
            $tecnologias = Tecnologia::getTecnologies();

            $array_tecnologias = [];
            foreach ($tecnologias as $tecnologia) {
                $array_tecnologias[] = array(
                    "TECNOLOGIA_ID" => $tecnologia->getTECNOLOGIA_ID(),
                    "NOMBRE_TECNOLOGIA" => $tecnologia->getNOMBRE_TECNOLOGIA(),
                    "DESCRIPCION" => $tecnologia->getDESCRIPCION(),
                    "ICONO_TECNOLOGIA" => $tecnologia->getICONO_TECNOLOGIA()
                );
            }

            echo json_encode($array_tecnologias, JSON_UNESCAPED_UNICODE);
            return;

        }
    }
}