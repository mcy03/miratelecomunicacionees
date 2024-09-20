<?php
/*  
=========================================================================
                            CLASE Curso
=========================================================================
º Inicializamos la clase Curso la cual contendra los cursos de la base  º
º de datos.                                                             º
=========================================================================
*/
class Recurso {
    protected $RECURSO_ID;
    protected $NOMBRE;
    protected $DESCRIPCION;
    protected $URL;
    protected $URL_SERVER;
    public function ___construct(){
            
    }

    public static function countRecursos(){
        $conn = db::connect();
        $consulta = "SELECT COUNT(*) as total FROM recurso";
    
        if ($resultado = $conn->query($consulta)) {
            $fila = $resultado->fetch_assoc();
            $total = $fila['total'];
            $resultado->close();
            return $total;
        } else {
            return false;
        }
    }
    

    public static function getRecursos(){
        $conn = db::connect();
        $consulta = "SELECT * FROM recurso";

        if ($resultado = $conn->query($consulta)) {
            while ($obj = $resultado->fetch_object('Recurso')) {
                $arrayRecurso []= $obj;
            }
            
            $resultado->close();
            return $arrayRecurso;
        }
    }

    public static function getRecursoById($id) {
        $conn = db::connect();
        $consulta = "SELECT * FROM recurso WHERE RECURSO_ID = ?";
    
        if ($stmt = $conn->prepare($consulta)) {
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $resultado = $stmt->get_result();
            $recurso = $resultado->fetch_object('Recurso');
            
            $stmt->close();
            return $recurso; // Retorna el objeto Recurso
        } else {
            return false;
        }
    }
    
    
    public static function getRecursoByName($name){
        $conn = db::connect();
    
        // Preparar la consulta
        $consulta = "SELECT * FROM recurso WHERE NOMBRE = ?";
        if ($stmt = $conn->prepare($consulta)) {
            // Vincular parámetro y ejecutar la consulta
            $stmt->bind_param("s", $name);
            $stmt->execute();
    
            // Obtener resultados
            $resultado = $stmt->get_result();
            $arrayCurso = array();
            while ($obj = $resultado->fetch_object('Recurso')) {
                $arrayCurso []= $obj;
            }
            
            // Cerrar recursos y devolver resultados
            $resultado->close();
            $stmt->close();
            return $arrayRecurso;
        } else {
            // Manejar el caso de consulta no válida
            return array();
        }
    }
    

    public static function getNameById($id){
        $conn = db::connect();

        // Consulta SQL para obtener el nombre del usuario con el ID dado
        $sql = "SELECT NOMBRE FROM recurso WHERE RECURSO_ID = $id";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Obtener el primer resultado (asumiendo que el ID es único)
            $row = $result->fetch_assoc();
            $name = $row["NOMBRE"];
        }else {
            return false;
        }

        // Cierra la conexión
        $conn->close();

        // Devolver el nombre del usuario
        return $name;
    }

    public static function addRecurso($nombre, $descripcion, $url, $url_server) {
        $conn = db::connect();
        
        // Preparar la consulta SQL para insertar el recurso
        $consulta = "INSERT INTO recurso (NOMBRE, DESCRIPCION, URL, URL_SERVER) VALUES (?, ?, ?, ?)";
        
        if ($stmt = $conn->prepare($consulta)) {
            // Vincular los parámetros
            $stmt->bind_param("ssss", $nombre, $descripcion, $url, $url_server);
            
            // Ejecutar la consulta
            if ($stmt->execute()) {
                // Devuelve el ID del recurso insertado o true en caso de éxito
                $recursoId = $stmt->insert_id;
                $stmt->close();
                return $recursoId;
            } else {
                // Si hay un error en la ejecución, devolver false
                $stmt->close();
                return false;
            }
        } else {
            // Si hay un error en la preparación de la consulta, devolver false
            return false;
        }
    }

    public static function deleteRecurso($id) {
        $conn = db::connect();
        
        // Preparar la consulta SQL para eliminar el recurso
        $consulta = "DELETE FROM recurso WHERE RECURSO_ID = ?";
        
        if ($stmt = $conn->prepare($consulta)) {
            // Vincular el parámetro
            $stmt->bind_param("i", $id);
            
            // Ejecutar la consulta
            if ($stmt->execute()) {
                // Verificar si se eliminó alguna fila
                if ($stmt->affected_rows > 0) {
                    // Cerrar la declaración y devolver true en caso de éxito
                    $stmt->close();
                    return true;
                } else {
                    // Si no se eliminó ninguna fila, devolver false
                    $stmt->close();
                    return false;
                }
            } else {
                // Si hay un error en la ejecución, devolver false
                $stmt->close();
                return false;
            }
        } else {
            // Si hay un error en la preparación de la consulta, devolver false
            return false;
        }
    }

    /**
     * Get the value of RECURSO_ID
     */ 
    public function getRECURSO_ID()
    {
        return $this->RECURSO_ID;
    }

    /**
     * Set the value of RECURSO_ID
     *
     * @return  self
     */ 
    public function setRECURSO_ID($RECURSO_ID)
    {
        $this->RECURSO_ID = $RECURSO_ID;

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
     * Get the value of URL
     */ 
    public function getURL()
    {
        return $this->URL;
    }

    /**
     * Set the value of URL
     *
     * @return  self
     */ 
    public function setURL($URL)
    {
        $this->URL = $URL;

        return $this;
    }

    /**
     * Get the value of URL_SERVER
     */ 
    public function getURL_SERVER()
    {
        return $this->URL_SERVER;
    }

    /**
     * Set the value of URL_SERVER
     *
     * @return  self
     */ 
    public function setURL_SERVER($URL_SERVER)
    {
        $this->URL_SERVER = $URL_SERVER;

        return $this;
    }
}