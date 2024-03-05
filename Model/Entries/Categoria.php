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
    protected $FECHA;

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

    public static function countEntriesCategory($category_id){
        $conn = db::connect();
        $consulta = "SELECT COUNT(*) as entries FROM publicacion WHERE CATEGORIA_ID = '$category_id'";
        
        $resultado = $conn->query($consulta);
    
        if ($resultado) {
            $fila = $resultado->fetch_assoc(); // Obtener la primera fila del resultado como un array asociativo
            return $fila['entries']; // Devolver el valor de la columna 'entries'
        } else {
            return 0; // Si la consulta no se ejecuta correctamente, devolver 0
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