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

    public static function countTechnologies(){
        $conn = db::connect();
        $consulta = "SELECT COUNT(*) as total FROM tecnologia";
    
        if ($resultado = $conn->query($consulta)) {
            $fila = $resultado->fetch_assoc();
            $total = $fila['total'];
            $resultado->close();
            return $total;
        } else {
            // Manejar el error si la consulta falla
            return false;
        }
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

    public static function getNombreById($id){
        if (is_null($id)) {
            return false;
        }

        $conn = db::connect();
        $consulta = "SELECT NOMBRE_TECNOLOGIA FROM tecnologia WHERE TECNOLOGIA_ID = $id";
        
        if ($resultado = $conn->query($consulta)) {
            if ($fila = $resultado->fetch_assoc()) {
                $nombre_tecnologia = $fila['NOMBRE_TECNOLOGIA'];
                $resultado->close();
                return $nombre_tecnologia;
            }
        }
        return null; // Si no se encuentra ninguna certificación con el ID proporcionado
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