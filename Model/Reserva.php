<?php
/*
======================================================================
                            CLASE Reserva
======================================================================
º Inicializamos la clase Reserva la cual contendrá los registros de  º
º las reservas en la base de datos.                                  º
======================================================================
*/
class Reserva {
    protected $RESERVA_ID;
    protected $CODIFICACION;
    protected $PROOVEDOR_ID;
    protected $LABORATORIO_ID;
    protected $PODS;
    protected $ALUMNOS;
    protected $FECHA_INICIO;
    protected $FECHA_FIN;
    protected $TIME_ZONE_ID;
    protected $HORA_INICIO;
    protected $HORA_FIN;
    protected $CLIENTE_ID;
    protected $COMENTARIOS;
    
    public function __construct(){
        
    }

    // Método para obtener todas las reservas
    public static function getReservas(){
        $conn = db::connect();
        $consulta = "SELECT * FROM reserva";

        if ($resultado = $conn->query($consulta)) {
            while ($obj = $resultado->fetch_object('Reserva')) {
                $arrayReservas []= $obj;
            }
            
            $resultado->close();
            return $arrayReservas;
        }
    }

    // Método para insertar una nueva reserva
    public static function insertReserva($CODIFICACION, $PROOVEDOR_ID, $LABORATORIO_ID, $PODS, $ALUMNOS, $FECHA_INICIO, $FECHA_FIN, $TIME_ZONE_ID, $HORA_INICIO, $HORA_FIN, $CLIENTE_ID, $COMENTARIOS) {
        $conn = db::connect(); // Conectar a la base de datos

        // Preparar la consulta de inserción con parámetros seguros
        $stmt = $conn->prepare("INSERT INTO reserva (CODIFICACION, PROOVEDOR_ID, LABORATORIO_ID, PODS, ALUMNOS, FECHA_INICIO, FECHA_FIN, TIME_ZONE_ID, HORA_INICIO, HORA_FIN, CLIENTE_ID, COMENTARIOS) 
                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        // Vincular parámetros a la consulta preparada
        $stmt->bind_param("siiiississis", $CODIFICACION, $PROOVEDOR_ID, $LABORATORIO_ID, $PODS, $ALUMNOS, $FECHA_INICIO, $FECHA_FIN, $TIME_ZONE_ID, $HORA_INICIO, $HORA_FIN, $CLIENTE_ID, $COMENTARIOS);
        
        if (!$stmt->execute()) {
          // Muestra el error si no se puede ejecutar la consulta
          echo "Error en la ejecución: " . $stmt->error;
        }

        $result = $stmt->get_result(); // Obtener el resultado de la ejecución (si es necesario)
        $conn->close(); // Cerrar la conexión

        return $result; // Devolver el resultado de la ejecución de la consulta
    }


    public static function insertExampleReservas() {
      $conn = db::connect(); // Conectar a la base de datos

      // Preparar la consulta para insertar una reserva
      $stmt = $conn->prepare("INSERT INTO reserva 
          (CODIFICACION, PROOVEDOR_ID, LABORATORIO_ID, PODS, ALUMNOS, FECHA_INICIO, FECHA_FIN, TIME_ZONE_ID, HORA_INICIO, HORA_FIN, CLIENTE_ID, COMENTARIOS) 
          VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

      // Reservas de ejemplo
      $reservasEjemplo = [
          ['LAB2024', 1, 84, 4, 4, '2024-10-01', '2024-10-02', 1, '09:00:00', '12:00:00', '1', 'Comentarios de ejemplo'],
          ['LAB2024', 1, 84, 8, 8, '2024-11-05', '2024-11-06', 2, '14:00:00', '17:00:00', '2', 'Comentarios de ejemplo'],
          ['LAB2024', 1, 66, 8, 8, '2024-12-10', '2024-12-11', 3, '08:00:00', '11:00:00', '3', 'Comentarios de ejemplo']
      ];

      // Recorrer cada reserva y realizar la inserción
      foreach ($reservasEjemplo as $reserva) {
          // Asignar los valores a las variables correspondientes
          $CODIFICACION = $reserva[0];
          $PROOVEDOR_ID = $reserva[1];
          $LABORATORIO_ID = $reserva[2];
          $PODS = $reserva[3];
          $ALUMNOS = $reserva[4];
          $FECHA_INICIO = $reserva[5];
          $FECHA_FIN = $reserva[6];
          $TIME_ZONE_ID = $reserva[7];
          $HORA_INICIO = $reserva[8];
          $HORA_FIN = $reserva[9];
          $CLIENTE_ID = $reserva[10];
          $COMENTARIOS = $reserva[11];

          // Vincular parámetros y ejecutar la inserción
          $stmt->bind_param(
              "siiiississis",
              $CODIFICACION, 
              $PROOVEDOR_ID, 
              $LABORATORIO_ID, 
              $PODS, 
              $ALUMNOS, 
              $FECHA_INICIO, 
              $FECHA_FIN, 
              $TIME_ZONE_ID, 
              $HORA_INICIO, 
              $HORA_FIN,
              $CLIENTE_ID,
              $COMENTARIOS
          );

          // Ejecutar la consulta para esta reserva
          $stmt->execute();
      }
      
      $result = $stmt->get_result(); // Obtener el resultado de la ejecución (si es necesario)
      $conn->close(); // Cerrar la conexión

      return $result; // Devolver el resultado de la ejecución de la consulta
  }

    // Métodos Getters y Setters para cada atributo

    /**
     * Get the value of RESERVA_ID
     */ 
    public function getRESERVA_ID() 
    {
      return $this->RESERVA_ID;
    }

    /**
     * Set the value of RESERVA_ID
     *
     * @return  self
     */ 
    public function setRESERVA_ID($RESERVA_ID) 
    {
      $this->RESERVA_ID = $RESERVA_ID;

      return $this;
    }

    /**
     * Get the value of CODIFICACION
     */ 
    public function getCODIFICACION()
    {
        return $this->CODIFICACION;
    }

    /**
     * Set the value of CODIFICACION
     *
     * @return  self
     */ 
    public function setCODIFICACION($CODIFICACION)
    {
        $this->CODIFICACION = $CODIFICACION;

        return $this;
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
     * Get the value of LABORATORIO_ID
     */ 
    public function getLABORATORIO_ID() 
    {
      return $this->LABORATORIO_ID;
    }

    /**
     * Set the value of LABORATORIO_ID
     *
     * @return  self
     */ 
    public function setLABORATORIO_ID($LABORATORIO_ID) 
    {
      $this->LABORATORIO_ID = $LABORATORIO_ID;

      return $this;
    }

    /**
     * Get the value of PODS
     */ 
    public function getPODS() 
    {
      return $this->PODS;
    }

    /**
     * Set the value of PODS
     *
     * @return  self
     */ 
    public function setPODS($PODS) 
    {
      $this->PODS = $PODS;

      return $this;
    }

    /**
     * Get the value of ALUMNOS
     */ 
    public function getALUMNOS() 
    {
      return $this->ALUMNOS;
    }

    /**
     * Set the value of ALUMNOS
     *
     * @return  self
     */ 
    public function setALUMNOS($ALUMNOS) 
    {
      $this->ALUMNOS = $ALUMNOS;

      return $this;
    }

    /**
     * Get the value of FECHA_INICIO
     */ 
    public function getFECHA_INICIO() 
    {
      return $this->FECHA_INICIO;
    }

    /**
     * Set the value of FECHA_INICIO
     *
     * @return  self
     */ 
    public function setFECHA_INICIO($FECHA_INICIO) 
    {
      $this->FECHA_INICIO = $FECHA_INICIO;

      return $this;
    }

    /**
     * Get the value of FECHA_FIN
     */ 
    public function getFECHA_FIN() 
    {
      return $this->FECHA_FIN;
    }

    /**
     * Set the value of FECHA_FIN
     *
     * @return  self
     */ 
    public function setFECHA_FIN($FECHA_FIN) 
    {
      $this->FECHA_FIN = $FECHA_FIN;

      return $this;
    }

    /**
     * Get the value of TIME_ZONE_ID
     */ 
    public function getTIME_ZONE_ID() 
    {
      return $this->TIME_ZONE_ID;
    }

    /**
     * Set the value of TIME_ZONE_ID
     *
     * @return  self
     */ 
    public function setTIME_ZONE_ID($TIME_ZONE_ID) 
    {
      $this->TIME_ZONE_ID = $TIME_ZONE_ID;

      return $this;
    }

    /**
     * Get the value of HORA_INICIO
     */ 
    public function getHORA_INICIO() 
    {
      return $this->HORA_INICIO;
    }

    /**
     * Set the value of HORA_INICIO
     *
     * @return  self
     */ 
    public function setHORA_INICIO($HORA_INICIO) 
    {
      $this->HORA_INICIO = $HORA_INICIO;

      return $this;
    }

    /**
     * Get the value of HORA_FIN
     */ 
    public function getHORA_FIN() 
    {
      return $this->HORA_FIN;
    }

    /**
     * Set the value of HORA_FIN
     *
     * @return  self
     */ 
    public function setHORA_FIN($HORA_FIN) 
    {
      $this->HORA_FIN = $HORA_FIN;

      return $this;
    }

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
     * Get the value of COMENTARIOS
     */ 
    public function getCOMENTARIOS()
    {
        return $this->COMENTARIOS;
    }

    /**
     * Set the value of COMENTARIOS
     *
     * @return  self
     */ 
    public function setCOMENTARIOS($COMENTARIOS)
    {
      $this->COMENTARIOS = $COMENTARIOS;

      return $this;
    } 
}
?>
