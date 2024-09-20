<?php
include_once "Model/Certificacion.php";

class ApiCertificacionController {
    public function api() {
        $accion = isset($_POST["accion"]) ? $_POST["accion"] : '';

        if (trim($accion) == "get_certifications") {
            $certificaciones = Certificacion::getCertifications();

            $array_certificaciones = [];
            foreach ($certificaciones as $certificacion) {
                $array_certificaciones[] = array(
                    "CERTIFICACION_ID" => $this->sanitizeUTF8($certificacion->getCERTIFICACION_ID()),
                    "NOMBRE_CERTIFICACION" => $this->sanitizeUTF8($certificacion->getNOMBRE_CERTIFICACION()),
                    "DESCRIPCION" => $this->sanitizeUTF8($certificacion->getDESCRIPCION()),
                    "IMG_CERTIFICACION" => $this->sanitizeUTF8($certificacion->getIMG_CERTIFICACION())
                );
            }

            $json_certificaciones = json_encode($array_certificaciones, JSON_UNESCAPED_UNICODE);
            if ($json_certificaciones === false) {
                error_log("Error al codificar en JSON: " . json_last_error_msg());
                echo json_encode(["error" => "Error al codificar en JSON: " . json_last_error_msg()]);
                return;
            }

            header('Content-Type: application/json');
            header('Access-Control-Allow-Origin: *');
            echo $json_certificaciones;
            return;
        }

        if (trim($accion) == "get_six_certifications") {
            $certificaciones = Certificacion::getSixCertifications();

            $array_certificaciones = [];
            foreach ($certificaciones as $certificacion) {
                $array_certificaciones[] = array(
                    "CERTIFICACION_ID" => $this->sanitizeUTF8($certificacion->getCERTIFICACION_ID()),
                    "NOMBRE_CERTIFICACION" => $this->sanitizeUTF8($certificacion->getNOMBRE_CERTIFICACION()),
                    "DESCRIPCION" => $this->sanitizeUTF8($certificacion->getDESCRIPCION()),
                    "IMG_CERTIFICACION" => $this->sanitizeUTF8($certificacion->getIMG_CERTIFICACION())
                );
            }

            $json_certificaciones = json_encode($array_certificaciones, JSON_UNESCAPED_UNICODE);
            if ($json_certificaciones === false) {
                error_log("Error al codificar en JSON: " . json_last_error_msg());
                echo json_encode(["error" => "Error al codificar en JSON: " . json_last_error_msg()]);
                return;
            }

            header('Content-Type: application/json');
            header('Access-Control-Allow-Origin: *');
            echo $json_certificaciones;
            return;
        }

        if (trim($accion) == "get_certification_partner") {
            $certificaciones = Certificacion::getCertificationsPartner();

            $array_certificaciones = [];
            foreach ($certificaciones as $certificacion) {
                $array_certificaciones[] = array(
                    "CERTIFICACION_ID" => $this->sanitizeUTF8($certificacion->getCERTIFICACION_ID()),
                    "NOMBRE_CERTIFICACION" => $this->sanitizeUTF8($certificacion->getNOMBRE_CERTIFICACION()),
                    "DESCRIPCION" => $this->sanitizeUTF8($certificacion->getDESCRIPCION()),
                    "IMG_CERTIFICACION" => $this->sanitizeUTF8($certificacion->getIMG_CERTIFICACION())
                );
            }

            $json_certificaciones = json_encode($array_certificaciones, JSON_UNESCAPED_UNICODE);
            if ($json_certificaciones === false) {
                error_log("Error al codificar en JSON: " . json_last_error_msg());
                echo json_encode(["error" => "Error al codificar en JSON: " . json_last_error_msg()]);
                return;
            }

            header('Content-Type: application/json');
            header('Access-Control-Allow-Origin: *');
            echo $json_certificaciones;
            return;
        }

        if (trim($accion) == "get_certifications_byName") {
            $certificaciones = Certificacion::getCertificationsByName();

            $array_certificaciones = [];
            foreach ($certificaciones as $certificacion) {
                $array_certificaciones[] = array(
                    "CERTIFICACION_ID" => $this->sanitizeUTF8($certificacion->getCERTIFICACION_ID()),
                    "NOMBRE_CERTIFICACION" => $this->sanitizeUTF8($certificacion->getNOMBRE_CERTIFICACION()),
                    "DESCRIPCION" => $this->sanitizeUTF8($certificacion->getDESCRIPCION()),
                    "IMG_CERTIFICACION" => $this->sanitizeUTF8($certificacion->getIMG_CERTIFICACION())
                );
            }

            $json_certificaciones = json_encode($array_certificaciones, JSON_UNESCAPED_UNICODE);
            if ($json_certificaciones === false) {
                error_log("Error al codificar en JSON: " . json_last_error_msg());
                echo json_encode(["error" => "Error al codificar en JSON: " . json_last_error_msg()]);
                return;
            }

            header('Content-Type: application/json');
            header('Access-Control-Allow-Origin: *');
            echo $json_certificaciones;
            return;
        }
    }

    private function sanitizeUTF8($data) {
        return mb_convert_encoding($data, 'UTF-8', 'UTF-8');
    }
}
?>
