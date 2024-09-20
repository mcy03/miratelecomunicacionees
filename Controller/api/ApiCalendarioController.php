<?php
include_once "Model/Calendario.php";
include_once "Model/Curso.php";

class ApiCalendarioController {    

    public function api() {
        $accion = isset($_POST["accion"]) ? $_POST["accion"] : '';

        if (trim($accion) == "get_calendario") {
            $calendario = Calendario::getCalendario();
        
            $array_calendario = [];
            foreach ($calendario as $registro) {
                $array_calendario[] = array(
                    "REGISTRO_ID" => $this->sanitizeUTF8($registro->getREGISTRO_ID()),
                    "CURSO_ID" => $this->sanitizeUTF8($registro->getCURSO_ID()),
                    "CURSO" => $this->sanitizeUTF8(Curso::getNameById($registro->getCURSO_ID())),
                    "CURSO_DESC" => $this->sanitizeUTF8(Curso::getDescById($registro->getCURSO_ID())),
                    "FECHA_INICIO" => $this->sanitizeUTF8($registro->getFECHA_INICIO()),
                    "FECHA_FIN" => $this->sanitizeUTF8($registro->getFECHA_FIN()),
                    "IDIOMA" => $this->sanitizeUTF8($registro->getIDIOMA()),
                    "TIME_ZONE" => $this->sanitizeUTF8($registro->getTIME_ZONE()),
                    "PAIS" => $this->sanitizeUTF8($registro->getPAIS()),  // Se añade el campo PAIS
                    "ENROLL" => $this->sanitizeUTF8($registro->getENROLL())
                );
            }
            
            $this->sendJsonResponse($array_calendario);
            return;
        }elseif (trim($accion) == "get_dates") {
            $dates = Calendario::getCalendario();

            $array_dates = [];
            foreach ($dates as $registro) {
                $array_dates[] = array(
                    "CURSO_ID" => $this->sanitizeUTF8($registro->getCURSO_ID()),
                    "CURSO" => $this->sanitizeUTF8(Curso::getNameById($registro->getCURSO_ID())),
                    "CURSO_DESC" => $this->sanitizeUTF8(Curso::getDescById($registro->getCURSO_ID())),
                    "FECHA_INICIO" => $this->sanitizeUTF8($registro->getFECHA_INICIO()),
                    "FECHA_FIN" => $this->sanitizeUTF8($registro->getFECHA_FIN()),
                    "IDIOMA" => $this->sanitizeUTF8($registro->getIDIOMA()),
                    "TIME_ZONE" => $this->sanitizeUTF8($registro->getTIME_ZONE()),
                    "ENROLL" => $this->sanitizeUTF8($registro->getENROLL())
                );
            }

            $this->sendJsonResponse($array_dates);
            return;
        }elseif (trim($accion) == "get_calendarioById") {
            $dates = Calendario::getCalendarioById($_POST["id"]);

            $array_dates = [];
            foreach ($dates as $registro) {
                $array_dates[] = array(
                    "CURSO_ID" => $this->sanitizeUTF8($registro->getCURSO_ID()),
                    "CURSO" => $this->sanitizeUTF8(Curso::getNameById($registro->getCURSO_ID())),
                    "CURSO_DESC" => $this->sanitizeUTF8(Curso::getDescById($registro->getCURSO_ID())),
                    "FECHA_INICIO" => $this->sanitizeUTF8($registro->getFECHA_INICIO()),
                    "FECHA_FIN" => $this->sanitizeUTF8($registro->getFECHA_FIN()),
                    "IDIOMA" => $this->sanitizeUTF8($registro->getIDIOMA()),
                    "TIME_ZONE" => $this->sanitizeUTF8($registro->getTIME_ZONE()),
                    "ENROLL" => $this->sanitizeUTF8($registro->getENROLL())
                );
            }

            $this->sendJsonResponse($array_dates);
            return;
        }elseif (trim($accion) == "delete_data") {
            $result = Calendario::deleteCalendarioById($_POST["id"]);
            $this->sendJsonResponse($result);
            return;
        }
    }

    private function sanitizeUTF8($data) {
        return mb_convert_encoding($data, 'UTF-8', 'auto');
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
