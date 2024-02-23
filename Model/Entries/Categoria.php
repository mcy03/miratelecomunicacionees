<?php
/*  
=========================================================================
                            CLASE categoria
=========================================================================
º Inicializamos la clase categoria la cual contendra las categoria      º
º de la base de datos.                                                  º
=========================================================================
*/
class Categoria {
    protected $CATEGORIA_ID;
    protected $NOMBRE;
    protected $DESCRIPCION;

    public function ___construct(){
        
    }

    public static function getCategorias(){
        $conn = db::connect();
        $consulta = "SELECT * FROM categoria";

        if ($resultado = $conn->query($consulta)) {
            while ($obj = $resultado->fetch_object('Categoria')) {
                $arrayCategorias []= $obj;
            }
            
            $resultado->close();
            return $arrayCategorias;
        }
    }

    public static function getCategoria_ById($id){
        $conn = db::connect();
        $consulta = "SELECT * FROM categoria WHERE CATEGORIA_ID = $id";

        if ($resultado = $conn->query($consulta)) {
            while ($obj = $resultado->fetch_object('Categoria')) {
                $arrayCategorias []= $obj;
            }
            
            $resultado->close();
            return $arrayCategorias;
        }
    }

    /**
     * Get the value of CATEGORIA_ID
     */ 
    public function getCATEGORIA_ID()
    {
        return $this->CATEGORIA_ID;
    }

    /**
     * Set the value of CATEGORIA_ID
     *
     * @return  self
     */ 
    public function setCATEGORIA_ID($CATEGORIA_ID)
    {
        $this->CATEGORIA_ID = $CATEGORIA_ID;

        return $this;
    }

    /**
     * Get the value of NOMBRE
     */ 
    public function getNOMBRE()
    {
        return $this->NOMBRE;
    }

    /**
     * Set the value of NOMBRE
     *
     * @return  self
     */ 
    public function setNOMBRE($NOMBRE)
    {
        $this->NOMBRE = $NOMBRE;

        return $this;
    }

    /**
     * Get the value of DESCRIPCION
     */ 
    public function getDESCRIPCION()
    {
        return $this->DESCRIPCION;
    }

    /**
     * Set the value of DESCRIPCION
     *
     * @return  self
     */ 
    public function setDESCRIPCION($DESCRIPCION)
    {
        $this->DESCRIPCION = $DESCRIPCION;

        return $this;
    }
}