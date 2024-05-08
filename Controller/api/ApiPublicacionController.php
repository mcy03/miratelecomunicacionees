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
                    "PUBLICACION_ID" => $entrie->getPUBLICACION_ID(),
                    "CATEGORIA_ID" => $entrie->getCATEGORIA_ID(),
                    "TITULO" => $entrie->getTITULO(),
                    "DESCRIPCION" => $entrie->getDESCRIPCION(),
                    "FECHA" => $entrie->getFECHA()
                );
            }
        
            echo json_encode($array_entries, JSON_UNESCAPED_UNICODE);
            return;

        }elseif(trim($accion) == "get_entries_view_blog"){
            
            if (isset($_POST["estado"])) {
                $entries = Publicacion::getEntriesWhere($_POST["estado"]);
            }else{
                $entries = Publicacion::getEntries();
            }

            $array_entries = [];
            foreach ($entries as $entrie) {
                $categoria = Categoria::getCategoria_ById($entrie->getCATEGORIA_ID());

                $array_entries[] = array(
                    "PUBLICACION_ID" => $entrie->getPUBLICACION_ID(),
                    "CATEGORIA" => $categoria[0]->getNOMBRE(),
                    "TITULO" => $entrie->getTITULO(),
                    "DESCRIPCION" => $entrie->getDESCRIPCION(),
                    "IMG_ENTRIE" => $entrie->getIMG_ENTRIE(),
                    "CONTENIDO" => $entrie->getCONTENIDO(),
                    "FECHA" => $entrie->getFECHA(),
                );
            }
            
            echo json_encode($array_entries, JSON_UNESCAPED_UNICODE);
            return;

        }elseif(trim($accion) == "get_entrie_byName"){
            $name = $_POST['name'];

            $entries = Publicacion::getEntrieByName($name);

            $array_entries = [];
            foreach ($entries as $entrie) {
                $array_entries[] = array(
                    "PUBLICACION_ID" => $entrie->getPUBLICACION_ID(),
                    "CATEGORIA_ID" => $entrie->getCATEGORIA_ID(),
                    "TITULO" => $entrie->getTITULO(),
                    "DESCRIPCION" => $entrie->getDESCRIPCION(),
                    "IMG_ENTRIE" => $entrie->getIMG_ENTRIE(),
                    "CONTENIDO" => $entrie->getCONTENIDO(),
                    "FECHA" => $entrie->getFECHA()
                );
            }
        
            echo json_encode($array_entries, JSON_UNESCAPED_UNICODE);
            return;

        }elseif(trim($accion) == "get_entrie_byId"){
            $id = $_POST['id'];

            $entries = Publicacion::getEntrieById($id);

            $array_entries = [];
            foreach ($entries as $entrie) {
                $array_entries[] = array(
                    "PUBLICACION_ID" => $entrie->getPUBLICACION_ID(),
                    "CATEGORIA_ID" => $entrie->getCATEGORIA_ID(),
                    "TITULO" => $entrie->getTITULO(),
                    "DESCRIPCION" => $entrie->getDESCRIPCION(),
                    "IMG_ENTRIE" => $entrie->getIMG_ENTRIE(),
                    "FECHA" => $entrie->getFECHA()
                );
            }
        
            echo json_encode($array_entries, JSON_UNESCAPED_UNICODE);
            return;

        }elseif(trim($accion) == "delete_entrie") {
            $id = $_POST['id'];
            $entrie = Publicacion::getEntrieById($id);
        
            if($entrie[0]->getESTADO() == "TRASH") {
                $definitive = true;
                $titulo = $entrie[0]->getTITULO();
                $carpeta = './resource/publicaciones/'.$titulo;
        
                if (is_dir($carpeta)) {
                    if (!rmdir($carpeta)) {
                        echo json_encode(array("success" => false, "message" => "No se pudo eliminar la carpeta."), JSON_UNESCAPED_UNICODE);
                        return;
                    }
                }
            } else {
                $definitive = false;
            }
        
            $result = Publicacion::deleteEntrie($id, $definitive);
        
            echo json_encode($result, JSON_UNESCAPED_UNICODE);
            return;
        }
        

        


        if(trim($accion) == "get_img_byPubli"){
            $publicacion_id = $_POST["publicacion_id"];
            $imgs = Img::getImg_ByPubliId($publicacion_id);

            $array_imgs = [];
            foreach ($imgs as $img) {
                $array_imgs[] = array(
                    "IMG_ID" => $img->getIMG_ID(),
                    "PUBLICACION_ID" => $img->getPUBLICACION_ID(),
                    "IMG" => $img->getIMG(),
                    "POSICION" => $img->getPOSICION(),
                    "ALT" => $img->getALT(),
                    "WIDTH" => $img->getWIDTH(),
                    "HEIGHT" => $img->getHEIGHT()
                );
            }
            
            echo json_encode($array_imgs, JSON_UNESCAPED_UNICODE);
            return;

        }elseif(trim($accion) == "get_img_byPubli_pos"){
            $publicacion_id = $_POST["publicacion_id"];
            $pos = $_POST["pos"];
            $imgs = Img::getImg_ByPubliId_Pos($publicacion_id, $pos);

            $array_imgs = [];
            foreach ($imgs as $img) {
                $array_imgs[] = array(
                    "IMG_ID" => $img->getIMG_ID(),
                    "PUBLICACION_ID" => $img->getPUBLICACION_ID(),
                    "IMG" => $img->getIMG(),
                    "POSICION" => $img->getPOSICION(),
                    "ALT" => $img->getALT(),
                    "WIDTH" => $img->getWIDTH(),
                    "HEIGHT" => $img->getHEIGHT()
                );
            }
            
            echo json_encode($array_imgs, JSON_UNESCAPED_UNICODE);
            return;

        }elseif(trim($accion) == "insert_entrie"){
            $titulo = $_POST["nombre"];
            $description = $_POST["description"];
            $imgEntrie = $_FILES["imgEntrie"];
            $category = $_POST["category"];
            $content = $_POST["content"];
            $cant = $_POST["cant_img"];
            $imagenes = array();
            for ($i=0; $i < $cant; $i++) { 
                $imagenes[$i] = $_FILES["imagen-$i"];
            }
            
            $directorioDestino = "resource/publicaciones/$titulo/";

            if (!file_exists($directorioDestino)) {
                if (mkdir($directorioDestino, 0777, true)) {
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
                                echo json_encode($imagenes, JSON_UNESCAPED_UNICODE);
                                return;
                            } else {
                                echo "Error al mover la imagen '$nombreArchivo'.\n";
                            }
                        }
                    }
                }
            }
        }
    }
}