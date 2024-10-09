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

        if(trim($accion) == "get_clientes"){
            $clientes = Cliente::getClientes();
            
            $array_clientes = [];
            foreach ($clientes as $cliente) {

                $array_clientes[] = array(
                    "CLIENTE_ID" => $this->sanitizeUTF8($cliente->getCLIENTE_ID()),
                    "EMPRESA" => $this->sanitizeUTF8($cliente->getEMPRESA()),
                    "NOMBRE_CONTACTO" => $this->sanitizeUTF8($cliente->getNOMBRE_CONTACTO()),
                    "EMAIL_CONTACTO" => $this->sanitizeUTF8($cliente->getEMAIL_CONTACTO()),
                    "DIRECCION" => $this->sanitizeUTF8($cliente->getDIRECCION()),
                    "PAIS" => $this->sanitizeUTF8($cliente->getPAIS()),
                    "CIUDAD" => $this->sanitizeUTF8($cliente->getCIUDAD()),
                    "CODIGO_POSTAL" => $this->sanitizeUTF8($cliente->getCODIGO_POSTAL()),
                    "TELEFONO" => $this->sanitizeUTF8($cliente->getTELEFONO()),
                    "NOMBRE_CONTACTO_TECH" => $this->sanitizeUTF8($cliente->getNOMBRE_CONTACTO_TECH()),
                    "EMAIL_CONTACTO_TECH" => $this->sanitizeUTF8($cliente->getEMAIL_CONTACTO_TECH())
                  );
            }

            $this->sendJsonResponse($array_clientes);
            return;
        }

        if(trim($accion) == "get_reservas"){
            $reservas = Reserva::getReservas();
            
            $array_reservas = [];
            foreach ($reservas as $reserva) {

                $array_reservas[] = array(
                    "RESERVA_ID" => $this->sanitizeUTF8($reserva->getRESERVA_ID()),
                    "CODIFICACION" => $this->sanitizeUTF8($reserva->getCODIFICACION()),
                    "PROOVEDOR_ID" => $this->sanitizeUTF8($reserva->getPROOVEDOR_ID()),
                    "LABORATORIO_ID" => $this->sanitizeUTF8($reserva->getLABORATORIO_ID()),
                    "PODS" => $this->sanitizeUTF8($reserva->getPODS()),
                    "ALUMNOS" => $this->sanitizeUTF8($reserva->getALUMNOS()),
                    "FECHA_INICIO" => $this->sanitizeUTF8($reserva->getFECHA_INICIO()),
                    "FECHA_FIN" => $this->sanitizeUTF8($reserva->getFECHA_FIN()),
                    "TIME_ZONE_ID" => $this->sanitizeUTF8($reserva->getTIME_ZONE_ID()),
                    "HORA_INICIO" => $this->sanitizeUTF8($reserva->getHORA_INICIO()),
                    "HORA_FIN" => $this->sanitizeUTF8($reserva->getHORA_FIN()),
                    "CLIENTE_ID" => $this->sanitizeUTF8($reserva->getCLIENTE_ID()),
                    "COMENTARIOS" => $this->sanitizeUTF8($reserva->getCOMENTARIOS())
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

        if (trim($accion) == "insert_cliente") {
            $EMPRESA = isset($_POST["companyName"]) ? $_POST["companyName"] : '';
            $NOMBRE_CONTACTO = isset($_POST["contactName"]) ? $_POST["contactName"] : '';
            $EMAIL_CONTACTO = isset($_POST["contactEmail"]) ? $_POST["contactEmail"] : '';
            $DIRECCION = isset($_POST["address"]) ? $_POST["address"] : '';
            $PAIS = isset($_POST["country"]) ? $_POST["country"] : '';
            $CIUDAD = isset($_POST["city"]) ? $_POST["city"] : '';
            $CODIGO_POSTAL = isset($_POST["zipCode"]) ? $_POST["zipCode"] : '';
            $TELEFONO = isset($_POST["phone"]) ? $_POST["phone"] : '';
            $NOMBRE_CONTACTO_TECH = isset($_POST["technicalContactName"]) ? $_POST["technicalContactName"] : '';
            $EMAIL_CONTACTO_TECH = isset($_POST["technicalContactEmail"]) ? $_POST["technicalContactEmail"] : '';
 
            $cliente = Cliente::insertCliente($EMPRESA, $NOMBRE_CONTACTO, $EMAIL_CONTACTO, $DIRECCION, $PAIS, $CIUDAD, $CODIGO_POSTAL, $TELEFONO, $NOMBRE_CONTACTO_TECH, $EMAIL_CONTACTO_TECH);
            
            $this->sendJsonResponse($cliente);
            return;
        }

        if (trim($accion) == "insert_reserva") {
            $CODIFICACION = isset($_POST["codificacion"]) ? $_POST["codificacion"] : '';
            $PROOVEDOR_ID = isset($_POST["vendorSelectValue"]) ? $_POST["vendorSelectValue"] : '';
            $LABORATORIO_ID = isset($_POST["laboratorySelectValue"]) ? $_POST["laboratorySelectValue"] : '';
            $PODS = isset($_POST["numPods"]) ? $_POST["numPods"] : '';
            $ALUMNOS = isset($_POST["numStudents"]) ? $_POST["numStudents"] : '';
            $FECHA_INICIO = isset($_POST["fechaInicio"]) ? $_POST["fechaInicio"] : '';
            $FECHA_FIN = isset($_POST["fechaFin"]) ? $_POST["fechaFin"] : '';
            $TIME_ZONE_ID = isset($_POST["zonasHorariasValue"]) ? $_POST["zonasHorariasValue"] : '';
            $HORA_INICIO = isset($_POST["horaInicio"]) ? $_POST["horaInicio"] : '';
            $HORA_FIN = isset($_POST["horaFin"]) ? $_POST["horaFin"] : '';
            $CLIENTE_ID = isset($_POST["clienteId"]) ? $_POST["clienteId"] : '';
            $COMENTARIOS = isset($_POST["comentarios"]) ? $_POST["comentarios"] : '';
            $reserva = Reserva::insertReserva($CODIFICACION, $PROOVEDOR_ID, $LABORATORIO_ID, $PODS, $ALUMNOS, $FECHA_INICIO, $FECHA_FIN, $TIME_ZONE_ID, $HORA_INICIO, $HORA_FIN, $CLIENTE_ID, $COMENTARIOS);

            $this->sendJsonResponse($reserva);
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