<?php
/*  
=========================================================================
                            CLASE Texto
=========================================================================
º Inicializamos la clase Texto la cual contendra las Texto              º
º de la base de datos.                                                  º
=========================================================================
*/
class Texto {
    protected $TEXTO_ID;
    protected $PUBLICACION_ID;
    protected $TEXTO;
    protected $POSICION;

    public function ___construct(){
        
    }

    public static function getTxt(){
        $conn = db::connect();
        $consulta = "SELECT * FROM texto";

        if ($resultado = $conn->query($consulta)) {
            while ($obj = $resultado->fetch_object('Texto')) {
                $arrayTextos []= $obj;
            }
            
            $resultado->close();
            return $arrayTextos;
        }
    }

    public static function getTxt_ByPubliId($publicacion_id){
        $conn = db::connect();
        $consulta = "SELECT * FROM texto WHERE PUBLICACION_ID = $publicacion_id";

        if ($resultado = $conn->query($consulta)) {
            while ($obj = $resultado->fetch_object('Texto')) {
                $arrayTextos []= $obj;
            }
            
            $resultado->close();
            return $arrayTextos;
        }
    }

    public static function getTxt_ByPubliId_Pos($publicacion_id, $pos){
        $conn = db::connect();
        $consulta = "SELECT * FROM texto WHERE PUBLICACION_ID = $publicacion_id AND POSICION = $pos";

        if ($resultado = $conn->query($consulta)) {
            while ($obj = $resultado->fetch_object('Texto')) {
                $arrayTextos []= $obj;
            }
            
            $resultado->close();
            return $arrayTextos;
        }
    }

    /**
     * Get the value of TEXTO_ID
     */ 
    public function getTEXTO_ID()
    {
        return $this->TEXTO_ID;
    }

    /**
     * Set the value of TEXTO_ID
     *
     * @return  self
     */ 
    public function setTEXTO_ID($TEXTO_ID)
    {
        $this->TEXTO_ID = $TEXTO_ID;

        return $this;
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
     * Get the value of TEXTO
     */ 
    public function getTEXTO()
    {
        return $this->TEXTO;
    }

    /**
     * Set the value of TEXTO
     *
     * @return  self
     */ 
    public function setTEXTO($TEXTO)
    {
        $this->TEXTO = $TEXTO;

        return $this;
    }

    /**
     * Get the value of POSICION
     */ 
    public function getPOSICION()
    {
        return $this->POSICION;
    }

    /**
     * Set the value of POSICION
     *
     * @return  self
     */ 
    public function setPOSICION($POSICION)
    {
        $this->POSICION = $POSICION;

        return $this;
    }
}