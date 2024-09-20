<?php
/*
=========================================================================
                            CLASE Proovedor
=========================================================================
º Inicializamos la clase Proovedor la cual contendrá los registros del  º
º proovedor en la base de datos.                                        º
=========================================================================
*/
class Proovedor {
    protected $PROOVEDOR_ID;
    protected $PROOVEDOR_NAME;
    
    public function __construct(){
        
    }

    public static function getProovedores(){
      $conn = db::connect();
      $consulta = "SELECT * FROM proovedor";

      if ($resultado = $conn->query($consulta)) {
          while ($obj = $resultado->fetch_object('Proovedor')) {
              $arrayProovedores []= $obj;
          }
          
          $resultado->close();
          return $arrayProovedores;
      }
  }

  public static function insertProovedor($PROOVEDOR_NAME){    
    $conn = db::connect(); // Establecer conexión a la base de datos

    // Preparar la consulta de inserción de usuario con parámetros seguros
    $stmt = $conn->prepare("INSERT INTO proovedor (PROOVEDOR_NAME) VALUES (?)");

    // Vincular parámetros a la consulta preparada
    $stmt->bind_param("s", $PROOVEDOR_NAME);

    $stmt->execute(); // Ejecutar la consulta
    $result = $stmt->get_result();// Obtener el resultado de la ejecución (puede no ser necesario)
    $conn->close(); // Cerrar la conexión a la base de datos

    return $result; // Devolver el resultado de la ejecución de la consulta 
  }

    /**
     * Get the value of PROOVEDOR_ID
     */ 
    public function getPROOVEDOR_ID() 
    {
      return $this->PROOVEDOR_ID;
    }


    /**
     * Set the value of PROOVEDOR_ID
     *
     * @return  self
     */ 
   public function setPROOVEDOR_ID($PROOVEDOR_ID) 
   {   
    $this->PROOVEDOR_ID = $PROOVEDOR_ID;

    return $this;
   }

   /**
     * Get the value of PROOVEDOR_NAME
     */ 
    public function getPROOVEDOR_NAME() 
    {
      return $this->PROOVEDOR_NAME;
    }


    /**
     * Set the value of PROOVEDOR_ID
     *
     * @return  self
     */ 
   public function setPROOVEDOR_NAME($PROOVEDOR_NAME) 
   {   
    $this->PROOVEDOR_NAME = $PROOVEDOR_NAME;

    return $this;
   }
}
?>
