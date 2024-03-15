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
    protected $FECHA;
    protected $ESTADO;

    public function ___construct(){
        
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

    public static function getEntriesWhere($estado){
        $conn = db::connect();
        $consulta = "SELECT * FROM publicacion WHERE ESTADO = '$estado'";
        
        // Realizar una consulta para verificar si hay registros
        $consulta_existencia = "SELECT COUNT(*) AS cantidad FROM publicacion WHERE ESTADO = '$estado'";
        $resultado_existencia = $conn->query($consulta_existencia);
        $fila_existencia = $resultado_existencia->fetch_assoc();
        $cantidad_registros = $fila_existencia['cantidad'];
        $resultado_existencia->close();
        
        // Verificar si existen registros
        if ($cantidad_registros > 0) {
            // Si existen registros, realizar la consulta principal
            if ($resultado = $conn->query($consulta)) {
                $arrayEntries = [];
                while ($obj = $resultado->fetch_object('Publicacion')) {
                    $arrayEntries []= $obj;
                }
                $resultado->close();
                return $arrayEntries;
            } else {
                // Manejar el caso en que la consulta principal falle
                // Por ejemplo, podrías lanzar una excepción o retornar un mensaje de error
                return [];
            }
        } else {
            // Si no existen registros, retornar un array vacío o un mensaje de aviso
            return [];
        }
    }
    

    public static function deleteEntrie($id, $definitive) {
        $conn = db::connect();
        
        if ($definitive) {
            // Consulta para eliminar la entrada según el ID y el tipo de eliminación
            $consulta = "DELETE FROM publicacion WHERE PUBLICACION_ID = ?";

            // Preparar la consulta
            $stmt = $conn->prepare($consulta);
            
            // Vincular el parámetro ID
            $stmt->bind_param('i', $id);
        }else{
            $consulta = "UPDATE publicacion SET ESTADO = ? WHERE PUBLICACION_ID = ?";

            // Preparar la consulta
            $stmt = $conn->prepare($consulta);
            
            $estado = 'TRASH';

            // Vincular el parámetro ID
            $stmt->bind_param('si', $estado, $id);
        }

        
        
        
        
        // Ejecutar la consulta
        if ($stmt->execute()) {
            // Si se ejecuta correctamente, devolver verdadero
            return true;
        } else {
            // Si hay un error, devolver falso
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

    public static function setEntrie($category_id, $titulo, $subtitulo, $img, $estado){
        $conn = db::connect();
        // Consulta para insertar un nuevo producto
        $consulta = "INSERT INTO publicacion (CATEGORIA_ID, TITULO, DESCRIPCION, FECHA, ESTADO) 
        VALUES (?, ?, ?, SYSDATE(), ?)";

        $stmt = $conn->prepare($consulta);
        $stmt->bind_param('isss', $category_id, $titulo, $subtitulo, $estado);

        if ($stmt->execute()) {
            $stmt_select = $conn->prepare("SELECT PUBLICACION_ID FROM publicacion WHERE TITULO = ?");
            $stmt_select->bind_param('s', $titulo);

            $stmt_select->execute();
            $result = $stmt_select->get_result();            
            $id = $result->fetch_assoc();

            $consulta_insert_img = "INSERT INTO img (PUBLICACION_ID, IMG, POSICION, ALT, WIDTH, HEIGHT) 
            VALUES (?, ?, ?, ?, ?, ?)";

            $alt = 'alt img';
            $posicion = 0;
            $width = 100;
            $height = 100;

            $stmt_insert_img = $conn->prepare($consulta_insert_img);
            $stmt_insert_img->bind_param('isisii', $id['PUBLICACION_ID'], $img, $posicion, $alt, $width, $height);

            if ($stmt_insert_img->execute()) {
                return $id['PUBLICACION_ID'];
            } else {
                return false;
            }
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
}