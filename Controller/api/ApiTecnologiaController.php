<?php
include_once "Model/Tecnologia.php";
include_once "Model/db.php";

class ApiTecnologiaController {
    public function api() {
        $accion = isset($_GET["accion"]) ? $_GET["accion"] : '';

        error_log("Acción recibida: " . $accion);

        if (trim($accion) == "get_tecnologies") {
            $tecnologias = Tecnologia::getTecnologies();

            if ($tecnologias === null) {
                error_log("Error: No se pudieron obtener las tecnologías.");
                echo json_encode(["error" => "No se pudieron obtener las tecnologías."]);
                exit;
            }

            $array_tecnologias = [];

            foreach ($tecnologias as $tecnologia) {
                $tecnologia_array = [
                    "TECNOLOGIA_ID" => $this->sanitizeUTF8($tecnologia->getTECNOLOGIA_ID()),
                    "NOMBRE_TECNOLOGIA" => $this->sanitizeUTF8($tecnologia->getNOMBRE_TECNOLOGIA()),
                    "DESCRIPCION" => $this->sanitizeUTF8($tecnologia->getDESCRIPCION()),
                    "ICONO_TECNOLOGIA" => $this->sanitizeUTF8($tecnologia->getICONO_TECNOLOGIA())
                ];

                error_log("Tecnología: " . print_r($tecnologia_array, true));

                $array_tecnologias[] = $tecnologia_array;
            }

            $json_tecnologias = json_encode($array_tecnologias);
            if ($json_tecnologias === false) {
                error_log("Error al codificar en JSON: " . json_last_error_msg());
                echo json_encode(["error" => "Error al codificar en JSON: " . json_last_error_msg()]);
                exit;
            }

            header('Content-Type: application/json');
            header('Access-Control-Allow-Origin: *');
            echo $json_tecnologias;
            exit;
        } else {
            error_log("Acción no reconocida: " . $accion);
            echo json_encode(["error" => "Acción no reconocida."]);
            exit;
        }
    }

    private function sanitizeUTF8($data) {
        return mb_convert_encoding($data, 'UTF-8', 'UTF-8');
    }
}?>
