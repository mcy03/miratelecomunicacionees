<?php
/*  
=========================================================================
                            CLASE Publicacion
=========================================================================
º Inicializamos la clase Publicacion la cual contendra las Publicacion  º
º de la base de datos.                                                  º
=========================================================================
*/
class Publicacion {
    protected $PUBLICACION_ID;
    protected $CATEGORIA_ID;
    protected $TITULO;
    protected $DESCRIPCION;
    protected $FECHA;

    public function ___construct(){
        
    }

    public static function getEntries(){
        $conn = db::connect();
        $consulta = "SELECT * FROM publicacion";

        if ($resultado = $conn->query($consulta)) {
            while ($obj = $resultado->fetch_object('Publicacion')) {
                $arrayEntries []= $obj;
            }
            
            $resultado->close();
            return $arrayEntries;
        }
    }

    public static function getEntrieById($id){
        $conn = db::connect();
        $consulta = "SELECT * FROM publicacion WHERE PUBLICACION_ID = '$id'";

        if ($resultado = $conn->query($consulta)) {
            while ($obj = $resultado->fetch_object('Publicacion')) {
                $arrayEntries []= $obj;
            }
            
            $resultado->close();
            return $arrayEntries;
        }
    }

    public static function getEntrieByName($name){
        $conn = db::connect();
        $consulta = "SELECT * FROM publicacion WHERE TITULO = '$name'";

        if ($resultado = $conn->query($consulta)) {
            while ($obj = $resultado->fetch_object('Publicacion')) {
                $arrayEntries []= $obj;
            }
            
            $resultado->close();
            return $arrayEntries;
        }
    }

    /**
     * Get the value of PUBLICACION_ID
     */ 
    public function getPUBLICACION_ID()
    {
        return $this->PUBLICACION_ID;
    }

    /**
     * Set the value of PUBLICACION_ID
     *
     * @return  self
     */ 
    public function setPUBLICACION_ID($PUBLICACION_ID)
    {
        $this->PUBLICACION_ID = $PUBLICACION_ID;

        return $this;
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
     * Get the value of TITULO
     */ 
    public function getTITULO()
    {
        return $this->TITULO;
    }

    /**
     * Set the value of TITULO
     *
     * @return  self
     */ 
    public function setTITULO($TITULO)
    {
        $this->TITULO = $TITULO;

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

    /**
     * Get the value of FECHA
     */ 
    public function getFECHA()
    {
        return $this->FECHA;
    }

    /**
     * Set the value of FECHA
     *
     * @return  self
     */ 
    public function setFECHA($FECHA)
    {
        $this->FECHA = $FECHA;

        return $this;
    }
}