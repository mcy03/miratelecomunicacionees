<?php
/*
======================================================================
                            CLASE Cliente
======================================================================
º Inicializamos la clase Cliente la cual contendrá los registros de  º
º los clientes en la base de datos.                                  º
======================================================================
*/
class Cliente {
    protected $CLIENTE_ID;
    protected $EMPRESA;
    protected $NOMBRE_CONTACTO;
    protected $EMAIL_CONTACTO;
    protected $DIRECCION;
    protected $PAIS;
    protected $CIUDAD;
    protected $CODIGO_POSTAL;
    protected $TELEFONO;
    protected $NOMBRE_CONTACTO_TECH;
    protected $EMAIL_CONTACTO_TECH;
    
    public function __construct(){
        
    }

    // Método para obtener todos los clientes
    public static function getClientes() {
        $conn = db::connect();
        $consulta = "SELECT * FROM cliente";

        if ($resultado = $conn->query($consulta)) {
            while ($obj = $resultado->fetch_object('Cliente')) {
                $arrayClientes []= $obj;
            }
            $resultado->close();
            return $arrayClientes;
        }
    }

    // Método para insertar un nuevo cliente
    public static function insertCliente($EMPRESA, $NOMBRE_CONTACTO, $EMAIL_CONTACTO, $DIRECCION, $PAIS, $CIUDAD, $CODIGO_POSTAL, $TELEFONO, $NOMBRE_CONTACTO_TECH, $EMAIL_CONTACTO_TECH) {
        $conn = db::connect(); // Conectar a la base de datos

        // Preparar la consulta de inserción con parámetros seguros
        $stmt = $conn->prepare("INSERT INTO cliente (EMPRESA, NOMBRE_CONTACTO, EMAIL_CONTACTO, DIRECCION, PAIS, CIUDAD, CODIGO_POSTAL, TELEFONO, NOMBRE_CONTACTO_TECH, EMAIL_CONTACTO_TECH) 
                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        // Vincular parámetros a la consulta preparada
        $stmt->bind_param("ssssssiiss", $EMPRESA, $NOMBRE_CONTACTO, $EMAIL_CONTACTO, $DIRECCION, $PAIS, $CIUDAD, $CODIGO_POSTAL, $TELEFONO, $NOMBRE_CONTACTO_TECH, $EMAIL_CONTACTO_TECH);

        $stmt->execute(); // Ejecutar la consulta
        $result = $stmt->get_result(); // Obtener el resultado de la ejecución (si es necesario)
        $conn->close(); // Cerrar la conexión

        return $result; // Devolver el resultado de la ejecución de la consulta
    }

    // Métodos Getters y Setters para cada atributo

    /**
     * Get the value of CLIENTE_ID
     */ 
    public function getCLIENTE_ID() 
    {
        return $this->CLIENTE_ID;
    }

    /**
     * Set the value of CLIENTE_ID
     *
     * @return  self
     */ 
    public function setCLIENTE_ID($CLIENTE_ID) 
    {
        $this->CLIENTE_ID = $CLIENTE_ID;

        return $this;
    }

    /**
     * Get the value of EMPRESA
     */ 
    public function getEMPRESA() 
    {
        return $this->EMPRESA;
    }

    /**
     * Set the value of EMPRESA
     *
     * @return  self
     */ 
    public function setEMPRESA($EMPRESA) 
    {
        $this->EMPRESA = $EMPRESA;

        return $this;
    }

    /**
     * Get the value of NOMBRE_CONTACTO
     */ 
    public function getNOMBRE_CONTACTO() 
    {
        return $this->NOMBRE_CONTACTO;
    }

    /**
     * Set the value of NOMBRE_CONTACTO
     *
     * @return  self
     */ 
    public function setNOMBRE_CONTACTO($NOMBRE_CONTACTO) 
    {
        $this->NOMBRE_CONTACTO = $NOMBRE_CONTACTO;

        return $this;
    }

    /**
     * Get the value of EMAIL_CONTACTO
     */ 
    public function getEMAIL_CONTACTO() 
    {
        return $this->EMAIL_CONTACTO;
    }

    /**
     * Set the value of EMAIL_CONTACTO
     *
     * @return  self
     */ 
    public function setEMAIL_CONTACTO($EMAIL_CONTACTO) 
    {
        $this->EMAIL_CONTACTO = $EMAIL_CONTACTO;

        return $this;
    }

    /**
     * Get the value of DIRECCION
     */ 
    public function getDIRECCION() 
    {
        return $this->DIRECCION;
    }

    /**
     * Set the value of DIRECCION
     *
     * @return  self
     */ 
    public function setDIRECCION($DIRECCION) 
    {
        $this->DIRECCION = $DIRECCION;

        return $this;
    }

    /**
     * Get the value of PAIS
     */ 
    public function getPAIS() 
    {
        return $this->PAIS;
    }

    /**
     * Set the value of PAIS
     *
     * @return  self
     */ 
    public function setPAIS($PAIS) 
    {
        $this->PAIS = $PAIS;

        return $this;
    }

    /**
     * Get the value of CIUDAD
     */ 
    public function getCIUDAD() 
    {
        return $this->CIUDAD;
    }

    /**
     * Set the value of CIUDAD
     *
     * @return  self
     */ 
    public function setCIUDAD($CIUDAD) 
    {
        $this->CIUDAD = $CIUDAD;

        return $this;
    }

    /**
     * Get the value of CODIGO_POSTAL
     */ 
    public function getCODIGO_POSTAL() 
    {
        return $this->CODIGO_POSTAL;
    }

    /**
     * Set the value of CODIGO_POSTAL
     *
     * @return  self
     */ 
    public function setCODIGO_POSTAL($CODIGO_POSTAL) 
    {
        $this->CODIGO_POSTAL = $CODIGO_POSTAL;

        return $this;
    }

    /**
     * Get the value of TELEFONO
     */ 
    public function getTELEFONO() 
    {
        return $this->TELEFONO;
    }

    /**
     * Set the value of TELEFONO
     *
     * @return  self
     */ 
    public function setTELEFONO($TELEFONO) 
    {
        $this->TELEFONO = $TELEFONO;

        return $this;
    }

    /**
     * Get the value of NOMBRE_CONTACTO_TECH
     */ 
    public function getNOMBRE_CONTACTO_TECH() 
    {
        return $this->NOMBRE_CONTACTO_TECH;
    }

    /**
     * Set the value of NOMBRE_CONTACTO_TECH
     *
     * @return  self
     */ 
    public function setNOMBRE_CONTACTO_TECH($NOMBRE_CONTACTO_TECH) 
    {
        $this->NOMBRE_CONTACTO_TECH = $NOMBRE_CONTACTO_TECH;

        return $this;
    }

    /**
     * Get the value of EMAIL_CONTACTO_TECH
     */ 
    public function getEMAIL_CONTACTO_TECH() 
    {
        return $this->EMAIL_CONTACTO_TECH;
    }

    /**
     * Set the value of EMAIL_CONTACTO_TECH
     *
     * @return  self
     */ 
    public function setEMAIL_CONTACTO_TECH($EMAIL_CONTACTO_TECH) 
    {
        $this->EMAIL_CONTACTO_TECH = $EMAIL_CONTACTO_TECH;

        return $this;
    }
}
?>
