<?php
/*  
=========================================================================
                            CLASE Laboratorio
=========================================================================
º Inicializamos la clase Laboratorio la cual contendra los labratorios  º
de la base de datos.                                                    º
=========================================================================
*/
class Laboratorio {
    protected $LABORATORIO_ID;
    protected $CURSO_ID;
    protected $NOMBRE_LABORATORIO;
    protected $DESCRIPCION_LABORTORIO;
    protected $DURACION;
    protected $PODS_AVALIABLE;


    


    public function ___construct(){
            
    }

    public static function getLabs(){
        $conn = db::connect();
        $consulta = "SELECT * FROM laboratorio";

        if ($resultado = $conn->query($consulta)) {
            while ($obj = $resultado->fetch_object('Laboratorio')) {
                $arrayLaboratorios []= $obj;
            }
            
            $resultado->close();
            return $arrayLaboratorios;
        }
    }
    
    public static function getLabById($id){
        $conn = db::connect();
        $consulta = "SELECT * FROM laboratorio WHERE LABORATORIO_ID = $id";

        if ($resultado = $conn->query($consulta)) {
            while ($obj = $resultado->fetch_object('Laboratorio')) {
                $arrayLaboratorios []= $obj;
            }
            
            $resultado->close();
            return $arrayLaboratorios;
        }
    }
    
    public static function getLabByName($name){
        $conn = db::connect();
        $consulta = "SELECT * FROM laboratorio WHERE NOMBRE_LABORATORIO = $name";

        if ($resultado = $conn->query($consulta)) {
            while ($obj = $resultado->fetch_object('Laboratorio')) {
                $arrayLaboratorios []= $obj;
            }
            
            $resultado->close();
            return $arrayLaboratorios;
        }
    }

    /**
     * Get the value of LABORATORIO_ID
     */ 
    public function getLABORATORIO_ID()
    {
        return $this->LABORATORIO_ID;
    }

    /**
     * Set the value of LABORATORIO_ID
     *
     * @return  self
     */ 
    public function setLABORATORIO_ID($LABORATORIO_ID)
    {
        $this->LABORATORIO_ID = $LABORATORIO_ID;

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
     * Get the value of NOMBRE_LABORATORIO
     */ 
    public function getNOMBRE_LABORATORIO()
    {
        return $this->NOMBRE_LABORATORIO;
    }

    /**
     * Set the value of NOMBRE_LABORATORIO
     *
     * @return  self
     */ 
    public function setNOMBRE_LABORATORIO($NOMBRE_LABORATORIO)
    {
        $this->NOMBRE_LABORATORIO = $NOMBRE_LABORATORIO;

        return $this;
    }
}

?>