<?php
include_once "Model/Entries/Publicacion.php";
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
                    "DESCRIPCION" => $categoria->getDESCRIPCION(),
                    "FECHA" => $categoria->getFECHA()
                );
            }
        
            echo json_encode($array_categorias, JSON_UNESCAPED_UNICODE);
            return;

        }else if(trim($accion) == "get_categories_admin"){
            $categorias = Categoria::getCategorias();

            $array_categorias = [];
            foreach ($categorias as $categoria) {
                if(Categoria::countEntriesCategory($categoria->getCATEGORIA_ID()) > 0){
                    $entradas = count(Publicacion::getEntriesByCategory($categoria->getCATEGORIA_ID()));
                }else{
                    $entradas = 0;
                }
                
                $array_categorias[] = array(
                    "CATEGORIA_ID" => $categoria->getCATEGORIA_ID(),
                    "NOMBRE" => $categoria->getNOMBRE(),
                    "DESCRIPCION" => $categoria->getDESCRIPCION(),
                    "FECHA" => $categoria->getFECHA(),
                    "ENTRADAS" => $entradas
                );
            }
        
            echo json_encode($array_categorias, JSON_UNESCAPED_UNICODE);
            return;

        }
    }
}