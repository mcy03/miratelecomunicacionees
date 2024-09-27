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

        if(trim($accion) == "get_labs_reservas"){
            $laboratorios = Laboratorio::getLabs();
            
            $array_laboratorios = [];
            foreach ($laboratorios as $laboratorio) {
                $nombre_curso = Curso::getNOMBRE_CURSObyId($laboratorio->getCURSO_ID());
                $complete_name = Curso::getCOMPLETE_NAMEbyId($laboratorio->getCURSO_ID());
                
                $array_laboratorios[] = array(
                    "LABORATORIO_ID" => $this->sanitizeUTF8($laboratorio->getLABORATORIO_ID()),
                    "CURSO_ID" => $this->sanitizeUTF8($laboratorio->getCURSO_ID()),
                    "NOMBRE_CURSO" => $this->sanitizeUTF8($nombre_curso),
                    "COMPLETE_NAME" => $this->sanitizeUTF8($complete_name),
                    "PODS_AVALIABLE" => $this->sanitizeUTF8($laboratorio->getPODS_AVALIABLE()),
                    "DURACION" => $this->sanitizeUTF8($laboratorio->getDURACION())
                );
            }

            $this->sendJsonResponse($array_laboratorios); 
            return;
        }

        if(trim($accion) == "get_reservas"){
            $reservas = Reserva::getReservas();
            
            $array_reservas = [];
            foreach ($reservas as $reserva) {

                $array_reservas[] = array(
                    "RESERVA_ID" => $this->sanitizeUTF8($reserva->getRESERVA_ID()),
                    "PROOVEDOR_ID" => $this->sanitizeUTF8($reserva->getPROOVEDOR_ID()),
                    "LABORATORIO_ID" => $this->sanitizeUTF8($reserva->getLABORATORIO_ID()),
                    "PODS" => $this->sanitizeUTF8($reserva->getPODS()),
                    "ALUMNOS" => $this->sanitizeUTF8($reserva->getALUMNOS()),
                    "FECHA_INICIO" => $this->sanitizeUTF8($reserva->getFECHA_INICIO()),
                    "FECHA_FIN" => $this->sanitizeUTF8($reserva->getFECHA_FIN()),
                    "TIME_ZONE_ID" => $this->sanitizeUTF8($reserva->getTIME_ZONE_ID()),
                    "HORA_INICIO" => $this->sanitizeUTF8($reserva->getHORA_INICIO()),
                    "HORA_FIN" => $this->sanitizeUTF8($reserva->getHORA_FIN())
                  );
            }

            $this->sendJsonResponse($array_reservas);
            return;
        }

        if(trim($accion) == "get_paises"){
            $paises = Pais::getPaises();
            
            $array_paises = [];
            foreach ($paises as $pais) {

                $array_paises[] = array(
                    "CODIGO" => $this->sanitizeUTF8($pais->getCODIGO()),
                    "PAIS" => $this->sanitizeUTF8($pais->getPAIS())
                  );
            }

            $this->sendJsonResponse($array_paises);
            return;
        }

        if(trim($accion) == "get_ciudades"){
            $ciudades = Ciudad::getCiudades();
            
            $array_ciudades = [];
            foreach ($ciudades as $ciudad) {

                $array_ciudades[] = array(
                    "CIUDAD_ID" => $this->sanitizeUTF8($ciudad->getCIUDAD_ID()),
                    "CODIGO_PAIS" => $this->sanitizeUTF8($ciudad->getCODIGO_PAIS()),
                    "CIUDAD" => $this->sanitizeUTF8($ciudad->getCIUDAD())
                  );
            }

            $this->sendJsonResponse($array_ciudades);
            return;
        }

        if(trim($accion) == "get_ciudades_by_codigo_pais"){
            $codigo_pais = isset($_POST["codigo_pais"]) ? $_POST["codigo_pais"] : '';
            $ciudades = Ciudad::getCiudadesByCodigoPais($codigo_pais);
            
            $array_ciudades = [];
            foreach ($ciudades as $ciudad) {

                $array_ciudades[] = array(
                    "CIUDAD_ID" => $this->sanitizeUTF8($ciudad->getCIUDAD_ID()),
                    "CODIGO_PAIS" => $this->sanitizeUTF8($ciudad->getCODIGO_PAIS()),
                    "CIUDAD" => $this->sanitizeUTF8($ciudad->getCIUDAD())
                  );
            }

            $this->sendJsonResponse($array_ciudades);
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