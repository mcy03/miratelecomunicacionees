<?php
include_once "Model/Calendario.php";
include_once "Model/Curso.php";

class ApiCalendarioController{    

    public function api(){
        $accion = isset($_POST["accion"]) ? $_POST["accion"] : '';
 
        if(trim($accion) == "get_calendario"){
            $calendario = Calendario::getCalendario();

            $array_calendario = [];
            foreach ($calendario as $registro) {
                $array_calendario[] = array(
                    "REGISTRO_ID" => $registro->getREGISTRO_ID(),
                    "CURSO_ID" => $registro->getCURSO_ID(),
                    "FECHA_INICIO" => $registro->getFECHA_INICIO(),
                    "FECHA_FIN" => $registro->getFECHA_FIN(),
                    "IDIOMA" => $registro->getIDIOMA(),
                    "TIME_ZONE" => $registro->getTIME_ZONE(),
                    "ENROLL" => $registro->getENROLL()
                );
            }

            echo json_encode($array_calendario, JSON_UNESCAPED_UNICODE);
            return;

        }

        if(trim($accion) == "get_dates"){
            $dates = Calendario::getCalendario();

            $array_dates = [];
            foreach ($dates as $registro) {
                $array_dates[] = array(
                    "CURSO_ID" => Curso::getNameById($registro->getCURSO_ID()),
                    "CURSO" => Curso::getDescById($registro->getCURSO_ID()),
                    "FECHA_INICIO" => $registro->getFECHA_INICIO(),
                    "FECHA_FIN" => $registro->getFECHA_FIN(),
                    "IDIOMA" => $registro->getIDIOMA(),
                    "TIME_ZONE" => $registro->getTIME_ZONE(),
                    "ENROLL" => $registro->getENROLL()
                );
            }

            echo json_encode($array_dates, JSON_UNESCAPED_UNICODE);
            return;

        }
    }
}