<?php
/*  
=========================================================================
                            CLASE Img
=========================================================================
º Inicializamos la clase Img la cual contendra las Img                  º
º de la base de datos.                                                  º
=========================================================================
*/
class Img {
    protected $IMG_ID;
    protected $PUBLICACION_ID;
    protected $IMG;
    protected $POSICION;
    protected $ALT;
    protected $WIDTH;
    protected $HEIGHT;

    public function ___construct(){
        
    }

    public static function getImgs(){
        $conn = db::connect();
        $consulta = "SELECT * FROM img";

        if ($resultado = $conn->query($consulta)) {
            while ($obj = $resultado->fetch_object('Img')) {
                $arrayImgs []= $obj;
            }
            
            $resultado->close();
            return $arrayImgs;
        }
    }

    public static function getImg_ByPubliId($publicacion_id){
        $conn = db::connect();
        $consulta = "SELECT * FROM img WHERE PUBLICACION_ID = $publicacion_id";

        if ($resultado = $conn->query($consulta)) {
            while ($obj = $resultado->fetch_object('Img')) {
                $arrayImg []= $obj;
            }
            
            $resultado->close();
            return $arrayImg;
        }
    }

    public static function getImg_ByPubliId_Pos($publicacion_id, $pos){
        $conn = db::connect();
        $consulta = "SELECT * FROM img WHERE PUBLICACION_ID = $publicacion_id AND POSICION = $pos";

        if ($resultado = $conn->query($consulta)) {
            while ($obj = $resultado->fetch_object('Img')) {
                $arrayImg []= $obj;
            }
            
            $resultado->close();
            return $arrayImg;
        }
    }

    /**
     * Get the value of IMG_ID
     */ 
    public function getIMG_ID()
    {
        return $this->IMG_ID;
    }

    /**
     * Set the value of IMG_ID
     *
     * @return  self
     */ 
    public function setIMG_ID($IMG_ID)
    {
        $this->IMG_ID = $IMG_ID;

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
     * Get the value of IMG
     */ 
    public function getIMG()
    {
        return $this->IMG;
    }

    /**
     * Set the value of IMG
     *
     * @return  self
     */ 
    public function setIMG($IMG)
    {
        $this->IMG = $IMG;

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

    /**
     * Get the value of ALT
     */ 
    public function getALT()
    {
        return $this->ALT;
    }

    /**
     * Set the value of ALT
     *
     * @return  self
     */ 
    public function setALT($ALT)
    {
        $this->ALT = $ALT;

        return $this;
    }

    /**
     * Get the value of WIDTH
     */ 
    public function getWIDTH()
    {
        return $this->WIDTH;
    }

    /**
     * Set the value of WIDTH
     *
     * @return  self
     */ 
    public function setWIDTH($WIDTH)
    {
        $this->WIDTH = $WIDTH;

        return $this;
    }

    /**
     * Get the value of HEIGHT
     */ 
    public function getHEIGHT()
    {
        return $this->HEIGHT;
    }

    /**
     * Set the value of HEIGHT
     *
     * @return  self
     */ 
    public function setHEIGHT($HEIGHT)
    {
        $this->HEIGHT = $HEIGHT;

        return $this;
    }
}