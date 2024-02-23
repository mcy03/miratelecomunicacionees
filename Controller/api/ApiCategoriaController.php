<?php
include_once "Model/Entries/Categoria.php";

class ApiCategoriaController{    

    public function api(){
        $accion = isset($_POST["accion"]) ? $_POST["accion"] : '';
 
        if(trim($accion) == "get_categories"){
            $categorias = Categoria::getCategorias();

            $array_categorias = [];
            foreach ($categorias as $categoria) {
                $array_categorias[] = array(
                    "CATEGORIA_ID" => $categoria->getCATEGORIA_ID(),
                    "NOMBRE" => $categoria->getNOMBRE(),
                    "DESCRIPCION" => $categoria->getDESCRIPCION()
                );
            }
        
            echo json_encode($array_categorias, JSON_UNESCAPED_UNICODE);
            return;

        }
    }
}