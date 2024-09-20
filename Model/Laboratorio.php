<?php
/*  
=========================================================================
                            CLASE Laboratorio
=========================================================================
º Inicializamos la clase Laboratorio la cual contendra los laboratorios  º
de la base de datos.                                                    º
=========================================================================
*/
class Laboratorio {
    protected $LABORATORIO_ID;
    protected $CURSO_ID;
    protected $DESCRIPCION_LABORATORIO;
    protected $DURACION;
    protected $PODS_AVALIABLE;
    protected $PRICE;
    
    public function ___construct(){
        // Constructor vacío
    }    

    public static function countLabs(){
        $conn = db::connect();
        $consulta = "SELECT COUNT(*) as total FROM laboratorio";
    
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
        $consulta = "SELECT * FROM laboratorio WHERE NOMBRE_LABORATORIO = '$name'";

        if ($resultado = $conn->query($consulta)) {
            while ($obj = $resultado->fetch_object('Laboratorio')) {
                $arrayLaboratorios []= $obj;
            }
            
            $resultado->close();
            return $arrayLaboratorios;
        }
    }
    
    public static function insertLab($CURSO_ID, $DESCRIPCION_LABORATORIO, $DURACION, $PODS_AVALIABLE, $PRICE) {
        $conn = db::connect();
        
        // Preparar la consulta SQL para insertar un nuevo laboratorio
        $consulta = $conn->prepare("INSERT INTO laboratorio (CURSO_ID, DESCRIPCION_LABORATORIO, DURACION, PODS_AVALIABLE, PRICE) VALUES (?, ?, ?, ?, ?)");
        
        // Asociar los parámetros con los valores
        $consulta->bind_param("isiid", $CURSO_ID, $DESCRIPCION_LABORATORIO, $DURACION, $PODS_AVALIABLE, $PRICE);
        
        // Ejecutar la consulta
        $resultado = $consulta->execute();
        
        if ($resultado) {
            // Devolver el ID del laboratorio insertado
            return $conn->insert_id;
        } else {
            // Manejar el error si la consulta falla
            return false;
        }
        
        // Cerrar la consulta y la conexión
        $consulta->close();
        $conn->close();
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
     * Get the value of DESCRIPCION_LABORATORIO
     */ 
    public function getDESCRIPCION_LABORATORIO()
    {
        return $this->DESCRIPCION_LABORATORIO;
    }

    /**
     * Set the value of DESCRIPCION_LABORATORIO
     *
     * @return  self
     */ 
    public function setDESCRIPCION_LABORATORIO($DESCRIPCION_LABORATORIO)
    {
        $this->DESCRIPCION_LABORATORIO = $DESCRIPCION_LABORATORIO;

        return $this;
    }

    /**
     * Get the value of DURACION
     */ 
    public function getDURACION()
    {
        return $this->DURACION;
    }

    /**
     * Set the value of DURACION
     *
     * @return  self
     */ 
    public function setDURACION($DURACION)
    {
        $this->DURACION = $DURACION;

        return $this;
    }

    /**
     * Get the value of PODS_AVALIABLE
     */ 
    public function getPODS_AVALIABLE()
    {
        return $this->PODS_AVALIABLE;
    }

    /**
     * Set the value of PODS_AVALIABLE
     *
     * @return  self
     */ 
    public function setPODS_AVALIABLE($PODS_AVALIABLE)
    {
        $this->PODS_AVALIABLE = $PODS_AVALIABLE;

        return $this;
    }

    /**
     * Get the value of PRICE
     */ 
    public function getPRICE()
    {
        return $this->PRICE;
    }

    /**
     * Set the value of PRICE
     *
     * @return  self
     */ 
    public function setPRICE($PRICE)
    {
        $this->PRICE = $PRICE;

        return $this;
    }
}

?>
