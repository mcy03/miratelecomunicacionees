<?php
/*
=========================================================================
                            CLASE Pais
=========================================================================
º Inicializamos la clase Pais la cual contendrá los registros de países  º
º en la base de datos.                                                   º
=========================================================================
*/
class Pais {
    protected $CODIGO;
    protected $PAIS;
    
    public function __construct(){
        
    }

    public static function getPaises(){
      $conn = db::connect();
      $consulta = "SELECT * FROM paises";

      if ($resultado = $conn->query($consulta)) {
          while ($obj = $resultado->fetch_object('Pais')) {
              $arrayPaises []= $obj;
          }
          
          $resultado->close();
          return $arrayPaises;
      }
    }

    public static function insertPais($CODIGO, $PAIS){    
      $conn = db::connect(); // Establecer conexión a la base de datos

      // Preparar la consulta de inserción de usuario con parámetros seguros
      $stmt = $conn->prepare("INSERT INTO paises (CODIGO, PAIS) VALUES (?, ?)");

      // Vincular parámetros a la consulta preparada
      $stmt->bind_param("ss",$CODIGO, $PAIS);

      $stmt->execute(); // Ejecutar la consulta
      $result = $stmt->get_result(); // Obtener el resultado de la ejecución (puede no ser necesario)
      $conn->close(); // Cerrar la conexión a la base de datos

      return $result; // Devolver el resultado de la ejecución de la consulta 
    }

    /**
     * Get the value of CODIGO
     */ 
    public function getCODIGO() 
    {
      return $this->CODIGO;
    }

    /**
     * Set the value of CODIGO
     *
     * @return  self
     */ 
    public function setCODIGO($CODIGO) 
    {   
      $this->CODIGO = $CODIGO;

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
}
?>
