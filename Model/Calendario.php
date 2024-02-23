<?php
/*  
=========================================================================
                            CLASE calendario
=========================================================================
º Inicializamos la clase calendario la cual contendra las calendario    º
º de la base de datos.                                                  º
=========================================================================
*/
class Calendario {
    protected $REGISTRO_ID;
    protected $CURSO_ID;
    protected $FECHA_INICIO;
    protected $FECHA_FIN; 
    protected $IDIOMA;
    protected $TIME_ZONE; 
    protected $ENROLL; 

    public function ___construct(){
        
    }

    public static function getCalendario(){
        $conn = db::connect();
        $consulta = "SELECT * FROM calendario";

        if ($resultado = $conn->query($consulta)) {
            while ($obj = $resultado->fetch_object('Calendario')) {
                $arrayCalendario []= $obj;
            }
            
            $resultado->close();
            return $arrayCalendario;
        }
    }

    /**
     * Get the value of REGISTRO_ID
     */ 
    public function getREGISTRO_ID()
    {
        return $this->REGISTRO_ID;
    }

    /**
     * Set the value of REGISTRO_ID
     *
     * @return  self
     */ 
    public function setREGISTRO_ID($REGISTRO_ID)
    {
        $this->REGISTRO_ID = $REGISTRO_ID;

        return $this;
    }

    /**
     * Get the value of CURSO_ID
     */ 
    public function getCURSO_ID()
    {
        return $this->CURSO_ID;
    }

    /**
     * Set the value of CURSO_ID
     *
     * @return  self
     */ 
    public function setCURSO_ID($CURSO_ID)
    {
        $this->CURSO_ID = $CURSO_ID;

        return $this;
    }

    /**
     * Get the value of FECHA_INICIO
     */ 
    public function getFECHA_INICIO()
    {
        return $this->FECHA_INICIO;
    }

    /**
     * Set the value of FECHA_INICIO
     *
     * @return  self
     */ 
    public function setFECHA_INICIO($FECHA_INICIO)
    {
        $this->FECHA_INICIO = $FECHA_INICIO;

        return $this;
    }

    /**
     * Get the value of FECHA_FIN
     */ 
    public function getFECHA_FIN()
    {
        return $this->FECHA_FIN;
    }

    /**
     * Set the value of FECHA_FIN
     *
     * @return  self
     */ 
    public function setFECHA_FIN($FECHA_FIN)
    {
        $this->FECHA_FIN = $FECHA_FIN;

        return $this;
    }

    /**
     * Get the value of IDIOMA
     */ 
    public function getIDIOMA()
    {
        return $this->IDIOMA;
    }

    /**
     * Set the value of IDIOMA
     *
     * @return  self
     */ 
    public function setIDIOMA($IDIOMA)
    {
        $this->IDIOMA = $IDIOMA;

        return $this;
    }

    /**
     * Get the value of TIME_ZONE
     */ 
    public function getTIME_ZONE()
    {
        return $this->TIME_ZONE;
    }

    /**
     * Set the value of TIME_ZONE
     *
     * @return  self
     */ 
    public function setTIME_ZONE($TIME_ZONE)
    {
        $this->TIME_ZONE = $TIME_ZONE;

        return $this;
    }

    /**
     * Get the value of ENROLL
     */ 
    public function getENROLL()
    {
        return $this->ENROLL;
    }

    /**
     * Set the value of ENROLL
     *
     * @return  self
     */ 
    public function setENROLL($ENROLL)
    {
        $this->ENROLL = $ENROLL;

        return $this;
    }
}