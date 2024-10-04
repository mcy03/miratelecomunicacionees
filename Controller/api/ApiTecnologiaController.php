<?php
include_once "Model/Tecnologia.php";
include_once "Model/db.php";

class ApiTecnologiaController {
    public function api() {
        $accion = isset($_POST["accion"]) ? $_POST["accion"] : '';

        if (trim($accion) == "get_tecnologies") {
            $tecnologias = Tecnologia::getTecnologies();

            $array_tecnologias = [];
            foreach ($tecnologias as $tecnologia) {
                $array_tecnologias[] = array(
                    "TECNOLOGIA_ID" => $this->sanitizeUTF8($tecnologia->getTECNOLOGIA_ID()),
                    "NOMBRE_TECNOLOGIA" => $this->sanitizeUTF8($tecnologia->getNOMBRE_TECNOLOGIA()),
                    "DESCRIPCION" => $this->sanitizeUTF8($tecnologia->getDESCRIPCION()),
                    "ICONO_TECNOLOGIA" => $this->sanitizeUTF8($tecnologia->getICONO_TECNOLOGIA())
                );
            }
            
            $json_tecnologias = json_encode($array_tecnologias, JSON_UNESCAPED_UNICODE);
            if ($json_tecnologias === false) {
                error_log("Error al codificar en JSON: " . json_last_error_msg());
                echo json_encode(["error" => "Error al codificar en JSON: " . json_last_error_msg()]);
                return;
            }

            header('Content-Type: application/json');
            header('Access-Control-Allow-Origin: *');
            echo $json_tecnologias;
            return;
        }
    }

    private function sanitizeUTF8($data) {
        return mb_convert_encoding($data, 'UTF-8', 'UTF-8');
    }
}?>
