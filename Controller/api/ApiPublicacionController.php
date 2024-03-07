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
                $img = Img::getImg_ByPubliId_Pos($entrie->getPUBLICACION_ID(), 0);
                $categoria = Categoria::getCategoria_ById($entrie->getCATEGORIA_ID());

                $array_entries[] = array(
                    "PUBLICACION_ID" => $entrie->getPUBLICACION_ID(),
                    "CATEGORIA" => $categoria[0]->getNOMBRE(),
                    "TITULO" => $entrie->getTITULO(),
                    "DESCRIPCION" => $entrie->getDESCRIPCION(),
                    "FECHA" => $entrie->getFECHA(),
                    'IMG' => $img[0]->getImg(),
                    'ALT_IMG' => $img[0]->getALT()
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
                    "FECHA" => $entrie->getFECHA()
                );
            }
        
            echo json_encode($array_entries, JSON_UNESCAPED_UNICODE);
            return;

        }elseif(trim($accion) == "delete_entrie"){
            $id = $_POST['id'];

            $entrie = Publicacion::getEntrieById($id);

            if($entrie[0]->getESTADO() == "TRASH"){
                $definitive = true;
            }else{
                $definitive = false;
            }

            $result = Publicacion::deleteEntrie($id, $definitive);

            echo json_encode($result, JSON_UNESCAPED_UNICODE);
            return;
        }

        
        if(trim($accion) == "get_text_byPubli"){
            $publicacion_id = $_POST["publicacion_id"];
            $textos = Texto::getTxt_ByPubliId($publicacion_id);

            $array_textos = [];
            foreach ($textos as $texto) {
                $array_textos[] = array(
                    "TEXTO_ID" => $texto->getTEXTO_ID(),
                    "PUBLICACION_ID" => $texto->getPUBLICACION_ID(),
                    "TEXTO" => $texto->getTEXTO(),
                    "POSICION" => $texto->getPOSICION()
                );
            }
            
            echo json_encode($array_textos, JSON_UNESCAPED_UNICODE);
            return;

        }elseif(trim($accion) == "get_text_byPubli_pos"){
            $publicacion_id = $_POST["publicacion_id"];
            $pos = $_POST["pos"];
            $textos = Texto::getTxt_ByPubliId_Pos($publicacion_id, $pos);

            $array_textos = [];
            foreach ($textos as $texto) {
                $array_textos[] = array(
                    "TEXTO_ID" => $texto->getTEXTO_ID(),
                    "PUBLICACION_ID" => $texto->getPUBLICACION_ID(),
                    "TEXTO" => $texto->getTEXTO(),
                    "POSICION" => $texto->getPOSICION()
                );
            }
            
            echo json_encode($array_textos, JSON_UNESCAPED_UNICODE);
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
            $titulo = $_POST["titulo"];
            $subtitulo = $_POST["subtitulo"];
            $categoria_id = $_POST["categoria_id"];
            $cantidad = $_POST["cantidad"];
            
            $directorioDestino = "resource/publicaciones/$titulo/";

            if (!file_exists($directorioDestino)) {
                if (mkdir($directorioDestino, 0777, true)) {
                    $confirm = '';
                }
            }
            
            $nombrePortada = $_FILES["img_portada"]['name'];
            $rutaTemporalPortada = $_FILES["img_portada"]['tmp_name'];

            $rutaDestinoPortada = $directorioDestino . $nombrePortada;

            if (move_uploaded_file($rutaTemporalPortada, $rutaDestinoPortada)) {
                $portada = $_FILES["img_portada"]['name'];
            }

            $contenido = array();
            for ($i=1; $i <= $cantidad; $i++) {
                if (isset($_FILES["contenido$i"])) {
                    $nombreArchivo = $_FILES["contenido$i"]['name'];
                    $rutaTemporal = $_FILES["contenido$i"]['tmp_name'];

                    $rutaDestino = $directorioDestino . $nombreArchivo;

                    if (move_uploaded_file($rutaTemporal, $rutaDestino)) {
                        $contenido[$i-1] = "IMGseparator".$_FILES["contenido$i"]['name'];
                    }
                }else{  
                    $contenido[$i-1] = "TXTseparator".$_POST["contenido$i"];
                }
                
            }

            $entrie = Publicacion::setEntrie($categoria_id, $titulo, $subtitulo, $titulo."/".$portada, 'DRAFT');

            if ($entrie) {
                foreach ($contenido as $key => $value) {
                    $valor = explode("separator", $value);
                    if ($valor[0] == "TXT") {
                        Texto::setText($entrie, $valor[1], $key + 1);
                    } else {
                        Img::setImgEnt($entrie, $titulo."/".$valor[1], $key + 1, 'alt', 100, 100);
                    }
                }
                
                echo(json_encode("insertada correctamente", JSON_UNESCAPED_UNICODE));
                return;
            }else {
                return false;
            }
        }
    }
}