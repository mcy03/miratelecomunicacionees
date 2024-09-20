<?php
include_once "Model/Entries/Publicacion.php";
include_once "Model/Entries/Categoria.php";

class ApiCategoriaController {    

    public function api() {
        $accion = isset($_POST["accion"]) ? $_POST["accion"] : '';

        if(trim($accion) == "get_categories") {
            $categorias = Categoria::getCategorias();

            $array_categorias = [];
            foreach ($categorias as $categoria) {
                $array_categorias[] = array(
                    "CATEGORIA_ID" => $this->sanitizeUTF8($categoria->getCATEGORIA_ID()),
                    "NOMBRE" => $this->sanitizeUTF8($categoria->getNOMBRE()),
                    "DESCRIPCION" => $this->sanitizeUTF8($categoria->getDESCRIPCION()),
                    "FECHA" => $this->sanitizeUTF8($categoria->getFECHA())
                );
            }

            $this->sendJsonResponse($array_categorias);
            return;

        } elseif(trim($accion) == "get_categories_admin") {
            $categorias = Categoria::getCategorias();

            $array_categorias = [];
            foreach ($categorias as $categoria) {
                if (Categoria::countEntriesCategory($categoria->getCATEGORIA_ID()) > 0) {
                    $entradas = count(Publicacion::getEntriesByCategory($categoria->getCATEGORIA_ID()));
                } else {
                    $entradas = 0;
                }
                
                $array_categorias[] = array(
                    "CATEGORIA_ID" => $this->sanitizeUTF8($categoria->getCATEGORIA_ID()),
                    "NOMBRE" => $this->sanitizeUTF8($categoria->getNOMBRE()),
                    "DESCRIPCION" => $this->sanitizeUTF8($categoria->getDESCRIPCION()),
                    "FECHA" => $this->sanitizeUTF8($categoria->getFECHA()),
                    "ENTRADAS" => $entradas
                );
            }

            $this->sendJsonResponse($array_categorias);
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
