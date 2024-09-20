<?php
/*
=========================================================================
                            CLASE Zona_Horaria
=========================================================================
º Inicializamos la clase Zona_Horaria la cual contendrá los registros   º
º de la zona horaria en la base de datos.                               º
=========================================================================
*/
class Zona_Horaria {
    protected $TIME_ZONE_ID;
    protected $TIME_ZONE;
    protected $NOMBRE;
    
    public function __construct(){
        
    }

    public static function getZonasHorarias(){
      $conn = db::connect();
      $consulta = "SELECT * FROM zona_horaria";

      if ($resultado = $conn->query($consulta)) {
          while ($obj = $resultado->fetch_object('Zona_Horaria')) {
              $arrayZona_Horaria []= $obj;
          }
          
          $resultado->close();
          return $arrayZona_Horaria;
      }
    }

    public static function insertZonasHorarias($TIME_ZONE, $NOMBRE){    
        $conn = db::connect(); // Establecer conexión a la base de datos

        // Preparar la consulta de inserción de usuario con parámetros seguros
        $stmt = $conn->prepare("INSERT INTO zona_horaria (TIME_ZONE, NOMBRE) VALUES 
        ('UTC-12:00', 'Baker Island, Howland Island'),
        ('UTC-11:00', 'Samoa, American Samoa'),
        ('UTC-10:00', 'Tiempo estándar de Hawái-Aleutiano (HST), Tahití'),
        ('UTC-09:00', 'Tiempo estándar de Alaska (AKST)'),
        ('UTC-08:00', 'Tiempo estándar de la costa del Pacífico (PST)'),
        ('UTC-07:00', 'Tiempo estándar de la montaña (MST)'),
        ('UTC-06:00', 'Tiempo estándar de California (CST)'),
        ('UTC-05:00', 'Tiempo estándar del este (EST)'),
        ('UTC-04:00', 'Tiempo estándar del Atlántico (AST), hora de verano del este (EDT)'),
        ('UTC-03:00', 'Tiempo de Brasil (BRT), Argentina, Uruguay'),
        ('UTC-02:00', 'Islas Georgias del Sur y Sandwich del Sur'),
        ('UTC-01:00', 'Azores, Cabo Verde'),
        ('UTC±00:00', 'Tiempo de Greenwich (GMT), Hora Universal Coordinada (UTC)'),
        ('UTC+01:00', 'Hora central europea (CET), Hora de África Occidental'),
        ('UTC+02:00', 'Hora de Europa del Este (EET), Hora de Israel, Hora de Sudáfrica'),
        ('UTC+03:00', 'Hora de Moscú, Hora de Arabia, Hora de Turquía'),
        ('UTC+04:00', 'Hora de los Emiratos Árabes Unidos, Hora de Azerbaiyán'),
        ('UTC+05:00', 'Hora de Pakistán, Hora de Uzbekistán'),
        ('UTC+05:30', 'Hora de India, Hora de Sri Lanka'),
        ('UTC+05:45', 'Hora de Nepal'),
        ('UTC+06:00', 'Hora de Bangladés, Hora de Omán'),
        ('UTC+06:30', 'Hora de Cocos (Keeling) y de las Islas Christmas'),
        ('UTC+07:00', 'Hora de Indochina, Hora de Mongolia'),
        ('UTC+08:00', 'Hora estándar de China, Hora de Sídney'),
        ('UTC+08:45', 'Hora de Australia Occidental (ACWST)'),
        ('UTC+09:00', 'Hora de Japón (JST), Hora de Corea'),
        ('UTC+09:30', 'Hora de Australia Central (ACST)'),
        ('UTC+10:00', 'Hora de Australia Oriental (ACST), Hora estándar de Vladivostok'),
        ('UTC+10:30', 'Hora de Lord Howe Island'),
        ('UTC+11:00', 'Hora de las Islas Salomón, Hora de Magadán'),
        ('UTC+12:00', 'Hora estándar de Fiyi, Hora de Nueva Zelanda (NZST)'),
        ('UTC+13:00', 'Hora de las Islas Tonga, Hora de Fiyi en horario de verano'),
        ('UTC+14:00', 'Línea de cambio de fecha (Islas Baker y Howland, en ciertas ciscunstancias)');");

        $stmt->execute(); // Ejecutar la consulta
        $result = $stmt->get_result();// Obtener el resultado de la ejecución (puede no ser necesario)
        $conn->close(); // Cerrar la conexión a la base de datos

        return $result; // Devolver el resultado de la ejecución de la consulta 
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
     * Get the value of TIME_ZONE
     */ 
    public function getTIME_ZONE() 
    {
      return $this->TIME_ZONE;
    }


    /**
     * Set the value of TIME_ZONE_ID
     *
     * @return  self
     */ 
   public function setTIME_ZONE($TIME_ZONE) 
   {   
    $this->TIME_ZONE = $TIME_ZONE;

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
}
?>
