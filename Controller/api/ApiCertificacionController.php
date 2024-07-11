<?php
include_once "Model/Certificacion.php";

class ApiCertificacionController{    

    public function api(){
        $accion = isset($_POST["accion"]) ? $_POST["accion"] : '';
 
        if(trim($accion) == "get_certifications"){
            $certificaciones = Certificacion::getCertifications();

            $array_certificaciones = [];
            foreach ($certificaciones as $certificacion) {
                $array_certificaciones[] = array(
                    "CERTIFICACION_ID" => $certificacion->getCERTIFICACION_ID(),
                    "NOMBRE_CERTIFICACION" => $certificacion->getNOMBRE_CERTIFICACION(),
                    "DESCRIPCION" => $certificacion->getDESCRIPCION(),
                    "IMG_CERTIFICACION" => $certificacion->getIMG_CERTIFICACION()
                );
            }

            echo json_encode($array_certificaciones, JSON_UNESCAPED_UNICODE);
            return;

        }

        if(trim($accion) == "get_six_certifications"){
            $certificaciones = Certificacion::getSixCertifications();

            $array_certificaciones = [];
            foreach ($certificaciones as $certificacion) {
                $array_certificaciones[] = array(
                    "CERTIFICACION_ID" => $certificacion->getCERTIFICACION_ID(),
                    "NOMBRE_CERTIFICACION" => $certificacion->getNOMBRE_CERTIFICACION(),
                    "DESCRIPCION" => $certificacion->getDESCRIPCION(),
                    "IMG_CERTIFICACION" => $certificacion->getIMG_CERTIFICACION()
                );
            }

            echo json_encode($array_certificaciones, JSON_UNESCAPED_UNICODE);
            return;

        }

        if(trim($accion) == "get_certification_partner"){
            $certificaciones = Certificacion::getCertificationsPartner();

            $array_certificaciones = [];
            foreach ($certificaciones as $certificacion) {
                $array_certificaciones[] = array(
                    "CERTIFICACION_ID" => $certificacion->getCERTIFICACION_ID(),
                    "NOMBRE_CERTIFICACION" => $certificacion->getNOMBRE_CERTIFICACION(),
                    "DESCRIPCION" => $certificacion->getDESCRIPCION(),
                    "IMG_CERTIFICACION" => $certificacion->getIMG_CERTIFICACION()
                );
            }

            echo json_encode($array_certificaciones, JSON_UNESCAPED_UNICODE);
            return;

        }
        
        if(trim($accion) == "get_certifications_byName"){
            $certificaciones = Certificacion::getCertificationsByName();

            $array_certificaciones = [];
            foreach ($certificaciones as $certificacion) {
                $array_certificaciones[] = array(
                    "CERTIFICACION_ID" => $certificacion->getCERTIFICACION_ID(),
                    "NOMBRE_CERTIFICACION" => $certificacion->getNOMBRE_CERTIFICACION(),
                    "DESCRIPCION" => $certificacion->getDESCRIPCION(),
                    "IMG_CERTIFICACION" => $certificacion->getIMG_CERTIFICACION()
                );
            }

            echo json_encode($array_certificaciones, JSON_UNESCAPED_UNICODE);
            return;

        }
    }
}