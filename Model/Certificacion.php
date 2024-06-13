<?php
/*  
=========================================================================
                            CLASE certificacion
=========================================================================
º Inicializamos la clase certificacion la cual contendra las            º
º certificaciones de la base de datos.                                  º
=========================================================================
*/
class Certificacion {
    protected $CERTIFICACION_ID;
    protected $NOMBRE_CERTIFICACION;
    protected $DESCRIPCION;
    protected $IMG_CERTIFICACION;

    public function ___construct(){
            
    }
    
    public static function countCertifications(){
        $conn = db::connect();
        $consulta = "SELECT COUNT(*) as total FROM certificacion";
    
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
    

    public static function getCertifications(){
        $conn = db::connect();
        $consulta = "SELECT * FROM certificacion";

        if ($resultado = $conn->query($consulta)) {
            while ($obj = $resultado->fetch_object('Certificacion')) {
                $arrayCertificacion []= $obj;
            }
            
            $resultado->close();
            return $arrayCertificacion;
        }
    }

    public static function getCertificationsPartner(){
        $conn = db::connect();
        $consulta = "SELECT * FROM certificacion WHERE PARTNER = 1";
    
        if ($resultado = $conn->query($consulta)) {
            $arrayCertificacion = array(); // Inicializar el array
    
            while ($obj = $resultado->fetch_object('Certificacion')) {
                $arrayCertificacion[] = $obj;
            }
            
            $resultado->close();
            return $arrayCertificacion;
        }
    }
    

    public static function getSixCertifications(){
        $conn = db::connect();
        $consulta = "SELECT * FROM certificacion LIMIT 8";

        if ($resultado = $conn->query($consulta)) {
            while ($obj = $resultado->fetch_object('Certificacion')) {
                $arrayCertificacion []= $obj;
            }
            
            $resultado->close();
            return $arrayCertificacion;
        }
    }
    
    public static function getCertificationById($id){
        $conn = db::connect();
        $consulta = "SELECT * FROM certificacion WHERE CERTIFICACION_ID = $id";

        if ($resultado = $conn->query($consulta)) {
            while ($obj = $resultado->fetch_object('Certificacion')) {
                $arrayCertificacion []= $obj;
            }
            
            $resultado->close();
            return $arrayCertificacion;
        }
    }
    
    public static function getCertificationByName($name){
        $conn = db::connect();
        $consulta = "SELECT * FROM certificacion WHERE NOMBRE_CERTIFICACION = $name";

        if ($resultado = $conn->query($consulta)) {
            while ($obj = $resultado->fetch_object('Certificacion')) {
                $arrayCertificacion []= $obj;
            }
            
            $resultado->close();
            return $arrayCertificacion;
        }
    }

    public static function getNombreById($id){
        if (is_null($id)) {
            return false;
        }

        $conn = db::connect();
        $consulta = "SELECT NOMBRE_CERTIFICACION FROM certificacion WHERE CERTIFICACION_ID = $id";
    
        if ($resultado = $conn->query($consulta)) {
            if ($fila = $resultado->fetch_assoc()) {
                $nombre_certificacion = $fila['NOMBRE_CERTIFICACION'];
                $resultado->close();
                return $nombre_certificacion;
            }
        }
        return null; // Si no se encuentra ninguna certificación con el ID proporcionado
    }
    

    /**
     * Get the value of CERTIFICACION_ID
     */ 
    public function getCERTIFICACION_ID()
    {
        return $this->CERTIFICACION_ID;
    }

    /**
     * Set the value of CERTIFICACION_ID
     *
     * @return  self
     */ 
    public function setCERTIFICACION_ID($CERTIFICACION_ID)
    {
        $this->CERTIFICACION_ID = $CERTIFICACION_ID;

        return $this;
    }

    /**
     * Get the value of NOMBRE_CERTIFICACION
     */ 
    public function getNOMBRE_CERTIFICACION()
    {
        return $this->NOMBRE_CERTIFICACION;
    }

    /**
     * Set the value of NOMBRE_CERTIFICACION
     *
     * @return  self
     */ 
    public function setNOMBRE_CERTIFICACION($NOMBRE_CERTIFICACION)
    {
        $this->NOMBRE_CERTIFICACION = $NOMBRE_CERTIFICACION;

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
     * Get the value of IMG_CERTIFICACION
     */ 
    public function getIMG_CERTIFICACION()
    {
        return $this->IMG_CERTIFICACION;
    }

    /**
     * Set the value of IMG_CERTIFICACION
     *
     * @return  self
     */ 
    public function setIMG_CERTIFICACION($IMG_CERTIFICACION)
    {
        $this->IMG_CERTIFICACION = $IMG_CERTIFICACION;

        return $this;
    }
}

?>
