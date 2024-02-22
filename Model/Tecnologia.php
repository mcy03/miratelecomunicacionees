<?php
/*  
=========================================================================
                            CLASE Tecnologia
=========================================================================
º Inicializamos la clase Tecnologia la cual contendra las tecnologias   º
º de la base de datos.                                                  º
=========================================================================
*/
class Tecnologia {
    protected $TECNOLOGIA_ID;
    protected $NOMBRE_TECNOLOGIA;
    protected $DESCRIPCION;
    protected $ICONO_TECNOLOGIA;

    public function ___construct(){
        
    }

    public static function getTecnologies(){
        $conn = db::connect();
        $consulta = "SELECT * FROM tecnologia";

        if ($resultado = $conn->query($consulta)) {
            while ($obj = $resultado->fetch_object('Tecnologia')) {
                $arrayTecnologias []= $obj;
            }
            
            $resultado->close();
            return $arrayTecnologias;
        }
    }

    public static function getTecnologyById($id){
        $conn = db::connect();
        $consulta = "SELECT * FROM tecnologia WHERE TECNOLOGIA_ID = $id";

        if ($resultado = $conn->query($consulta)) {
            while ($obj = $resultado->fetch_object('Tecnologia')) {
                $arrayTecnologias []= $obj;
            }
            
            $resultado->close();
            return $arrayTecnologias;
        }
    }
    
    public static function getTecnologyByName($name){
        $conn = db::connect();
        $consulta = "SELECT * FROM tecnologia WHERE NOMBRE_TECNOLOGIA = $name";

        if ($resultado = $conn->query($consulta)) {
            while ($obj = $resultado->fetch_object('Tecnologia')) {
                $arrayTecnologias []= $obj;
            }
            
            $resultado->close();
            return $arrayTecnologias;
        }
    }

    /**
     * Get the value of TECNOLOGIA_ID
     */ 
    public function getTECNOLOGIA_ID()
    {
        return $this->TECNOLOGIA_ID;
    }

    /**
     * Set the value of TECNOLOGIA_ID
     *
     * @return  self
     */ 
    public function setTECNOLOGIA_ID($TECNOLOGIA_ID)
    {
        $this->TECNOLOGIA_ID = $TECNOLOGIA_ID;

        return $this;
    }

    /**
     * Get the value of NOMBRE_TECNOLOGIA
     */ 
    public function getNOMBRE_TECNOLOGIA()
    {
        return $this->NOMBRE_TECNOLOGIA;
    }

    /**
     * Set the value of NOMBRE_TECNOLOGIA
     *
     * @return  self
     */ 
    public function setNOMBRE_TECNOLOGIA($NOMBRE_TECNOLOGIA)
    {
        $this->NOMBRE_TECNOLOGIA = $NOMBRE_TECNOLOGIA;

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
     * Get the value of ICONO_TECNOLOGIA
     */ 
    public function getICONO_TECNOLOGIA()
    {
        return $this->ICONO_TECNOLOGIA;
    }

    /**
     * Set the value of ICONO_TECNOLOGIA
     *
     * @return  self
     */ 
    public function setICONO_TECNOLOGIA($ICONO_TECNOLOGIA)
    {
        $this->ICONO_TECNOLOGIA = $ICONO_TECNOLOGIA;

        return $this;
    }


}

?>