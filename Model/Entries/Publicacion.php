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
    protected $IMG_ENTRIE;
    protected $CONTENIDO;
    protected $FECHA;
    protected $ESTADO;

    public function ___construct(){
        
    }

    public static function countEntries(){
        $conn = db::connect();
        $consulta = "SELECT COUNT(*) as total FROM publicacion";
    
        if ($resultado = $conn->query($consulta)) {
            $fila = $resultado->fetch_assoc();
            $total = $fila['total'];
            $resultado->close();
            return $total;
        } else {
            return false;
        }
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



    public static function getLastEntries(){
        $conn = db::connect();
        $consulta = "SELECT * FROM publicacion ORDER BY PUBLICACION_ID DESC LIMIT 4";
    
        if ($resultado = $conn->query($consulta)) {
            while ($obj = $resultado->fetch_object('Publicacion')) {
                $arrayEntries []= $obj;
            }
            
            $resultado->close();
            return $arrayEntries;
        }
    }
    

    public static function getEntriesWhere($estado){
        $conn = db::connect();
        $consulta = "SELECT * FROM publicacion WHERE ESTADO = '$estado'";

        $consulta_existencia = "SELECT COUNT(*) AS cantidad FROM publicacion WHERE ESTADO = '$estado'";
        $resultado_existencia = $conn->query($consulta_existencia);
        $fila_existencia = $resultado_existencia->fetch_assoc();
        $cantidad_registros = $fila_existencia['cantidad'];
        $resultado_existencia->close();
        
        if ($cantidad_registros > 0) {
            if ($resultado = $conn->query($consulta)) {
                $arrayEntries = [];
                while ($obj = $resultado->fetch_object('Publicacion')) {
                    $arrayEntries []= $obj;
                }
                $resultado->close();
                return $arrayEntries;
            } else {
                return [];
            }
        } else {
            return [];
        }
    }
    

    public static function deleteEntrie($id, $definitive) {
        $conn = db::connect();
        
        if ($definitive) {
            $consulta = "DELETE FROM publicacion WHERE PUBLICACION_ID = ?";
            
            $stmt = $conn->prepare($consulta);

            $stmt->bind_param('i', $id);
        }else{
            $consulta = "UPDATE publicacion SET ESTADO = ? WHERE PUBLICACION_ID = ?";

            $stmt = $conn->prepare($consulta);
            
            $estado = 'TRASH';

            $stmt->bind_param('si', $estado, $id);
        }

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
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

    public static function getEntriesByCategory($category_id){
        $conn = db::connect();
        $consulta = "SELECT * FROM publicacion WHERE CATEGORIA_ID = '$category_id'";

        if ($resultado = $conn->query($consulta)) {
            while ($obj = $resultado->fetch_object('Publicacion')) {
                $arrayEntries []= $obj;
            }
            
            $resultado->close();
            return $arrayEntries;
        }
    }

    public static function setEntrie($category_id, $titulo, $subtitulo, $img_entrie, $contenido, $estado){
        $conn = db::connect();

        $consulta = "INSERT INTO publicacion (CATEGORIA_ID, TITULO, DESCRIPCION, IMG_ENTRIE, CONTENIDO, FECHA, ESTADO) 
        VALUES (?, ?, ?, ?, ?, SYSDATE(), ?)";

        $stmt = $conn->prepare($consulta);
        $stmt->bind_param('isssss', $category_id, $titulo, $subtitulo, $img_entrie, $contenido, $estado);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
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

    /**
     * Get the value of ESTADO
     */ 
    public function getESTADO()
    {
        return $this->ESTADO;
    }

    /**
     * Set the value of ESTADO
     *
     * @return  self
     */ 
    public function setESTADO($ESTADO)
    {
        $this->ESTADO = $ESTADO;

        return $this;
    }

    /**
     * Get the value of CONTENIDO
     */ 
    public function getCONTENIDO()
    {
        return $this->CONTENIDO;
    }

    /**
     * Set the value of CONTENIDO
     *
     * @return  self
     */ 
    public function setCONTENIDO($CONTENIDO)
    {
        $this->CONTENIDO = $CONTENIDO;

        return $this;
    }

    /**
     * Get the value of IMG_ENTRIE
     */ 
    public function getIMG_ENTRIE()
    {
        return $this->IMG_ENTRIE;
    }

    /**
     * Set the value of IMG_ENTRIE
     *
     * @return  self
     */ 
    public function setIMG_ENTRIE($IMG_ENTRIE)
    {
        $this->IMG_ENTRIE = $IMG_ENTRIE;

        return $this;
    }
}