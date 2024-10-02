<?php
/*
=========================================================================
                            CLASE Ciudad
=========================================================================
º Inicializamos la clase Ciudad la cual contendrá los registros de       º
º ciudades en la base de datos.                                          º
=========================================================================
*/
class Ciudad {
    protected $CIUDAD_ID;
    protected $CODIGO_PAIS;
    protected $CIUDAD;
    
    public function __construct(){
        
    }

    public static function getCiudades(){
      $conn = db::connect();
      $consulta = "SELECT * FROM ciudades";

      if ($resultado = $conn->query($consulta)) {
          while ($obj = $resultado->fetch_object('Ciudad')) {
              $arrayCiudades []= $obj;
          }
          
          $resultado->close();
          return $arrayCiudades;
      }
    }

    public static function getCiudadesByCodigoPais($codigo_pais){
      $conn = db::connect();
      $consulta = "SELECT * FROM ciudades WHERE CODIGO_PAIS = '$codigo_pais'";

      if ($resultado = $conn->query($consulta)) {
          while ($obj = $resultado->fetch_object('Ciudad')) {
              $arrayCiudades []= $obj;
          }
          
          $resultado->close();
          return $arrayCiudades;
      }
    }

    public static function insertCiudad($CODIGO_PAIS, $CIUDAD){    
      $conn = db::connect(); // Establecer conexión a la base de datos

      // Preparar la consulta de inserción con parámetros seguros
      $stmt = $conn->prepare("INSERT INTO ciudades (CODIGO_PAIS, CIUDAD) VALUES (?, ?)");

      // Vincular parámetros a la consulta preparada
      $stmt->bind_param("ss", $CODIGO_PAIS, $CIUDAD);

      $stmt->execute(); // Ejecutar la consulta
      $result = $stmt->get_result(); // Obtener el resultado de la ejecución (puede no ser necesario)
      $conn->close(); // Cerrar la conexión a la base de datos

      return $result; // Devolver el resultado de la ejecución de la consulta 
    }

    /**
     * Get the value of CIUDAD_ID
     */ 
    public function getCIUDAD_ID() 
    {
      return $this->CIUDAD_ID;
    }

    /**
     * Set the value of CIUDAD_ID
     *
     * @return  self
     */ 
    public function setCIUDAD_ID($CIUDAD_ID) 
    {   
      $this->CIUDAD_ID = $CIUDAD_ID;

      return $this;
    }

    /**
     * Get the value of CODIGO_PAIS
     */ 
    public function getCODIGO_PAIS() 
    {
      return $this->CODIGO_PAIS;
    }

    /**
     * Set the value of CODIGO_PAIS
     *
     * @return  self
     */ 
    public function setCODIGO_PAIS($CODIGO_PAIS) 
    {   
      $this->CODIGO_PAIS = $CODIGO_PAIS;

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
}
?>
