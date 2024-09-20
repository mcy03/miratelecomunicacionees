<?php
class ApiReservasController{

    public function index(){
        echo 'api';
        return;
    }

    public function api(){
      $accion = isset($_POST["accion"]) ? $_POST["accion"] : '';

        if(trim($accion) == "get_proovedores"){  


            $proovedores = Proovedor::getProovedores();
    
            
            $array_proovedores = [];
            foreach ($proovedores as $proovedor) {

                $array_proovedores[] = array(
                    "PROOVEDOR_ID" => $this->sanitizeUTF8($proovedor->getPROOVEDOR_ID()),
                    "PROOVEDOR_NAME" => $this->sanitizeUTF8($proovedor->getPROOVEDOR_NAME())
                  );
            }
            
            $this->sendJsonResponse($array_proovedores);
            return;
        }

        if(trim($accion) == "get_zona_horaria"){


            $zonas_horarias = Zona_Horaria::getZonasHorarias();


            $array_zonas_horarias = [];
            foreach ($zonas_horarias as $zona_horaria) {

                $array_zonas_horarias[] = array(
                    "TIME_ZONE_ID" => $this->sanitizeUTF8($zona_horaria->getTIME_ZONE_ID()),
                    "TIME_ZONE" => $this->sanitizeUTF8($zona_horaria->getTIME_ZONE()),
                    "NOMBRE" => $this->sanitizeUTF8($zona_horaria->getNOMBRE())
                  );
            }
            
            $this->sendJsonResponse($array_zonas_horarias);
            return;
        }

        if(trim($accion) == "get_data"){


            $proovedores = Proovedor::getProovedores();
            $zonas_horarias = Zona_Horaria::getZonasHorarias();

            
            $array_proovedores = [];
            foreach ($proovedores as $proovedor) {

                $array_proovedores[] = array(
                    "PROOVEDOR_ID" => $this->sanitizeUTF8($proovedor->getPROOVEDOR_ID()),
                    "PROOVEDOR_NAME" => $this->sanitizeUTF8($proovedor->getPROOVEDOR_NAME())
                  );
            }

            $array_zonas_horarias = [];
            foreach ($zonas_horarias as $zona_horaria) {

                $array_zonas_horarias[] = array(
                    "TIME_ZONE_ID" => $this->sanitizeUTF8($zona_horaria->getTIME_ZONE_ID()),
                    "TIME_ZONE" => $this->sanitizeUTF8($zona_horaria->getTIME_ZONE()),
                    "NOMBRE" => $this->sanitizeUTF8($zona_horaria->getNOMBRE())
                  );
            }

            $this->sendJsonResponse([$array_proovedores, $array_zonas_horarias]);
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
?>