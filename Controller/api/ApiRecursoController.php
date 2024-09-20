<?php
include_once "Model/Recurso.php";
include_once "Model/db.php";

class ApiRecursoController {
    public function api() {
        $accion = isset($_GET["accion"]) ? $_GET["accion"] : '';

        if (trim($accion) == "get_resources") {
            $recursos = Recurso::getRecursos();

            if ($recursos === null) {
                error_log("Error: No se pudieron obtener los recursos.");
                echo json_encode(["error" => "No se pudieron obtener los recursos."]);
                exit;
            }

            $array_recursos = [];

            foreach ($recursos as $recurso) {
                $recurso_array = [
                    "RECURSO_ID" => $this->sanitizeUTF8($recurso->getRECURSO_ID()),
                    "NOMBRE" => $this->sanitizeUTF8($recurso->getNOMBRE()),
                    "DESCRIPCION" => $this->sanitizeUTF8($recurso->getDESCRIPCION()),
                    "URL" => $this->sanitizeUTF8($recurso->getURL())
                ];

                error_log("Recurso: " . print_r($recurso_array, true));

                $array_recursos[] = $recurso_array;
            }

            $json_recursos = json_encode($array_recursos);
            if ($json_recursos === false) {
                error_log("Error al codificar en JSON: " . json_last_error_msg());
                echo json_encode(["error" => "Error al codificar en JSON: " . json_last_error_msg()]);
                exit;
            }

            header('Content-Type: application/json');
            header('Access-Control-Allow-Origin: *');
            echo $json_recursos;
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
