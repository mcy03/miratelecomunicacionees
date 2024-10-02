<?php
include_once "Model/Entries/Publicacion.php";
include_once "Model/Entries/Categoria.php";
include_once "Model/Entries/Img.php";
include_once "Model/Entries/Texto.php";

class ApiPublicacionController{    

    public function api(){
        $accion = isset($_POST["accion"]) ? $_POST["accion"] : '';

        if(trim($accion) == "get_entries"){
            $entries = Publicacion::getEntries();
            $array_entries = [];

            foreach ($entries as $entrie) {
                $array_entries[] = array(
                    "PUBLICACION_ID" => $this->sanitizeUTF8($entrie->getPUBLICACION_ID()),
                    "CATEGORIA_ID" => $this->sanitizeUTF8($entrie->getCATEGORIA_ID()),
                    "TITULO" => $this->sanitizeUTF8($entrie->getTITULO()),
                    "DESCRIPCION" => $this->sanitizeUTF8($entrie->getDESCRIPCION()),
                    "FECHA" => $this->sanitizeUTF8($entrie->getFECHA())
                );
            }
        
            $this->sendJsonResponse($array_entries);
            return;

        } elseif(trim($accion) == "get_entries_view_blog"){
            $entries = isset($_POST["estado"]) ? Publicacion::getEntriesWhere($_POST["estado"]) : Publicacion::getEntries();
            $array_entries = [];

            foreach ($entries as $entrie) {
                $categoria = Categoria::getCategoria_ById($entrie->getCATEGORIA_ID());
                $array_entries[] = array(
                    "PUBLICACION_ID" => $this->sanitizeUTF8($entrie->getPUBLICACION_ID()),
                    "CATEGORIA" => $this->sanitizeUTF8($categoria[0]->getNOMBRE()),
                    "TITULO" => $this->sanitizeUTF8($entrie->getTITULO()),
                    "DESCRIPCION" => $this->sanitizeUTF8($entrie->getDESCRIPCION()),
                    "IMG_ENTRIE" => $this->sanitizeUTF8($entrie->getIMG_ENTRIE()),
                    "CONTENIDO" => $this->sanitizeUTF8($entrie->getCONTENIDO()),
                    "FECHA" => $this->sanitizeUTF8($entrie->getFECHA())
                );
            }

            $this->sendJsonResponse($array_entries);
            return;

        } elseif(trim($accion) == "get_entrie_byName"){
            $name = $_POST['name'];
            $entries = Publicacion::getEntrieByName($name);
            $array_entries = [];

            foreach ($entries as $entrie) {
                $array_entries[] = array(
                    "PUBLICACION_ID" => $this->sanitizeUTF8($entrie->getPUBLICACION_ID()),
                    "CATEGORIA_ID" => $this->sanitizeUTF8($entrie->getCATEGORIA_ID()),
                    "TITULO" => $this->sanitizeUTF8($entrie->getTITULO()),
                    "DESCRIPCION" => $this->sanitizeUTF8($entrie->getDESCRIPCION()),
                    "IMG_ENTRIE" => $this->sanitizeUTF8($entrie->getIMG_ENTRIE()),
                    "CONTENIDO" => $this->sanitizeUTF8($entrie->getCONTENIDO()),
                    "FECHA" => $this->sanitizeUTF8($entrie->getFECHA())
                );
            }
        
            $this->sendJsonResponse($array_entries);
            return;

        } elseif(trim($accion) == "get_entrie_byId"){
            $id = $_POST['id'];
            $entries = Publicacion::getEntrieById($id);
            $array_entries = [];

            foreach ($entries as $entrie) {
                $array_entries[] = array(
                    "PUBLICACION_ID" => $this->sanitizeUTF8($entrie->getPUBLICACION_ID()),
                    "CATEGORIA_ID" => $this->sanitizeUTF8($entrie->getCATEGORIA_ID()),
                    "TITULO" => $this->sanitizeUTF8($entrie->getTITULO()),
                    "DESCRIPCION" => $this->sanitizeUTF8($entrie->getDESCRIPCION()),
                    "IMG_ENTRIE" => $this->sanitizeUTF8($entrie->getIMG_ENTRIE()),
                    "FECHA" => $this->sanitizeUTF8($entrie->getFECHA())
                );
            }
        
            $this->sendJsonResponse($array_entries);
            return;

        } elseif(trim($accion) == "delete_entrie") {
            $id = $_POST['id'];
            $entrie = Publicacion::getEntrieById($id);
            
            $definitive = ($entrie[0]->getESTADO() == "TRASH");
            $titulo = $entrie[0]->getTITULO();
            $carpeta = './resource/publicaciones/'.$titulo;
            
            if ($definitive && is_dir($carpeta) && !$this->eliminarCarpeta($carpeta)) {
                $this->sendJsonResponse(["error" => false, "message" => "No se pudo eliminar la carpeta."]);
                return;
            }
            
            $result = Publicacion::deleteEntrie($id, $definitive);
            
            if (!$result) {
                $this->sendJsonResponse(["success" => false, "message" => "No se pudo eliminar la publicación."]);
                return;
            }

            $this->sendJsonResponse($result);
            return;


            
        } elseif(trim($accion) == "get_img_byPubli"){
            $publicacion_id = $_POST["publicacion_id"];
            $imgs = Img::getImg_ByPubliId($publicacion_id);
            $array_imgs = [];

            foreach ($imgs as $img) {
                $array_imgs[] = array(
                    "IMG_ID" => $this->sanitizeUTF8($img->getIMG_ID()),
                    "PUBLICACION_ID" => $this->sanitizeUTF8($img->getPUBLICACION_ID()),
                    "IMG" => $this->sanitizeUTF8($img->getIMG()),
                    "POSICION" => $this->sanitizeUTF8($img->getPOSICION()),
                    "ALT" => $this->sanitizeUTF8($img->getALT()),
                    "WIDTH" => $this->sanitizeUTF8($img->getWIDTH()),
                    "HEIGHT" => $this->sanitizeUTF8($img->getHEIGHT())
                );
            }

            $this->sendJsonResponse($array_imgs);
            return;

        } elseif(trim($accion) == "get_img_byPubli_pos"){
            $publicacion_id = $_POST["publicacion_id"];
            $pos = $_POST["pos"];
            $imgs = Img::getImg_ByPubliId_Pos($publicacion_id, $pos);
            $array_imgs = [];

            foreach ($imgs as $img) {
                $array_imgs[] = array(
                    "IMG_ID" => $this->sanitizeUTF8($img->getIMG_ID()),
                    "PUBLICACION_ID" => $this->sanitizeUTF8($img->getPUBLICACION_ID()),
                    "IMG" => $this->sanitizeUTF8($img->getIMG()),
                    "POSICION" => $this->sanitizeUTF8($img->getPOSICION()),
                    "ALT" => $this->sanitizeUTF8($img->getALT()),
                    "WIDTH" => $this->sanitizeUTF8($img->getWIDTH()),
                    "HEIGHT" => $this->sanitizeUTF8($img->getHEIGHT())
                );
            }

            $this->sendJsonResponse($array_imgs);
            return;

        } elseif(trim($accion) == "insert_entrie"){
            $titulo = $POST["nombre"];
            $description = $POST["description"];
            $imgEntrie = $_FILES["imgEntrie"];
            $category = $POST["category"];
            $content = $POST["content"];
            $cant = $POST["cant_img"];
            $imagenes = array();
            
            for ($i = 0; $i < $cant; $i++) {
                $imagenes[$i] = $_FILES["imagen-$i"];
            }
            echo $titulo;
            $directorioDestino = "resource/publicaciones/$titulo/";

            if (!file_exists($directorioDestino) && mkdir($directorioDestino, 0777, true)) {
                foreach ($imagenes as $imagen) {
                    $nombreArchivo = $imagen["name"];
                    $archivoTemporal = $imagen["tmp_name"];
                    $rutaDestinoCompleta = $directorioDestino . $nombreArchivo;

                    if (move_uploaded_file($archivoTemporal, $rutaDestinoCompleta)) {
                        $nombreArchivo = $imgEntrie["name"];
                        $archivoTemporal = $imgEntrie["tmp_name"];
                        $rutaDestinoCompleta = $directorioDestino . $nombreArchivo;

                        if (move_uploaded_file($archivoTemporal, $rutaDestinoCompleta)) {
                            Publicacion::setEntrie($category, $titulo, $description, $rutaDestinoCompleta, $content, 'PUBLIC');
                            $this->sendJsonResponse($imagenes);
                            return;
                        } else {
                            $this->sendJsonResponse(["error" => "Error al mover la imagen '$nombreArchivo'."]);
                            return;
                        }
                    }
                }
            }
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

    private function eliminarCarpeta($carpeta) {
        if (!is_dir($carpeta)) {
            return false;
        }
        foreach (scandir($carpeta) as $item) {
            if ($item == '.' || $item == '..') {
                continue;
            }
            $itemPath = $carpeta . DIRECTORY_SEPARATOR . $item;
            if (is_dir($itemPath)) {
                eliminarCarpeta($itemPath); // Eliminar subcarpetas de manera recursiva
            } else {
                unlink($itemPath); // Eliminar archivos
            }
        }
        return rmdir($carpeta); // Eliminar la carpeta vacía
    }
    
}
?>
