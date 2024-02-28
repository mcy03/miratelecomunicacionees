<?php
class User {
    protected $USUARIO_ID;
    protected $USER;
    protected $PASSWORD;

    public function ___construct(){
        
    }

    public static function getUsers(){
        $conn = db::connect();
        $consulta = "SELECT * FROM user";

        if ($resultado = $conn->query($consulta)) {
            while ($obj = $resultado->fetch_object('User')) {
                $arrayUsers []= $obj;
            }
            
            $resultado->close();
            return $arrayUsers;
        }
    }

    public static function getUserByName($name){
        $conn = db::connect();
        $consulta = "SELECT * FROM user WHERE USER = $name";

        if ($resultado = $conn->query($consulta)) {
            while ($obj = $resultado->fetch_object('User')) {
                $arrayUsers []= $obj;
            }
            
            $resultado->close();
            return $arrayUsers;
        }
    }

    public static function insertUser($USUARIO_ID, $USER, $PASSWORD){
        $hash = password_hash($PASSWORD, PASSWORD_DEFAULT); // Encriptar la contraseña
        
        $conn = db::connect(); // Establecer conexión a la base de datos
    
        // Preparar la consulta de inserción de usuario con parámetros seguros
        $stmt = $conn->prepare("INSERT INTO user (USUARIO_ID, USER, PASSWORD) VALUES (?, ?, ?)");
    
        // Vincular parámetros a la consulta preparada
        $stmt->bind_param("iss", $USUARIO_ID, $USER, $hash);
    
        $stmt->execute(); // Ejecutar la consulta
        $result = $stmt->get_result();// Obtener el resultado de la ejecución (puede no ser necesario)
        $conn->close(); // Cerrar la conexión a la base de datos

        return $result; // Devolver el resultado de la ejecución de la consulta 
    }

    /**
     * Get the value of USUARIO_ID
     */ 
    public function getUSUARIO_ID()
    {
        return $this->USUARIO_ID;
    }

    /**
     * Set the value of USUARIO_ID
     *
     * @return  self
     */ 
    public function setUSUARIO_ID($USUARIO_ID)
    {
        $this->USUARIO_ID = $USUARIO_ID;

        return $this;
    }

    /**
     * Get the value of USER
     */ 
    public function getUSER()
    {
        return $this->USER;
    }

    /**
     * Set the value of USER
     *
     * @return  self
     */ 
    public function setUSER($USER)
    {
        $this->USER = $USER;

        return $this;
    }

    /**
     * Get the value of PASSWORD
     */ 
    public function getPASSWORD()
    {
        return $this->PASSWORD;
    }

    /**
     * Set the value of PASSWORD
     *
     * @return  self
     */ 
    public function setPASSWORD($PASSWORD)
    {
        $this->PASSWORD = $PASSWORD;

        return $this;
    }
}