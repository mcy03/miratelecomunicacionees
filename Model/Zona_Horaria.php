<?php
/*
=========================================================================
                            CLASE Zona_Horaria
=========================================================================
º Inicializamos la clase Zona_Horaria la cual contendrá los registros   º
º de la zona horaria en la base de datos.                               º
=========================================================================
*/
class Zona_Horaria
{
  protected $TIME_ZONE_ID;
  protected $TIME_ZONE;
  protected $NOMBRE;

  public function __construct() {}

  public static function getZonasHorarias()
  {
    $conn = db::connect();
    $consulta = "SELECT * FROM zona_horaria";

    if ($resultado = $conn->query($consulta)) {
      while ($obj = $resultado->fetch_object('Zona_Horaria')) {
        $arrayZona_Horaria[] = $obj;
      }

      $resultado->close();
      return $arrayZona_Horaria;
    }
  }

  public static function insertZonasHorarias($TIME_ZONE, $NOMBRE)
  {
    $conn = db::connect(); // Establecer conexión a la base de datos

    // Preparar la consulta de inserción de usuario con parámetros seguros
    $stmt = $conn->prepare("INSERT INTO zona_horaria (TIME_ZONE, NOMBRE) VALUES 
        ('UTC-12:00', 'Baker Island, Howland Island'),
        ('UTC-11:00', 'Samoa, American Samoa'),
        ('UTC-10:00', 'Hawaii-Aleutian Standard Time (HST), Tahiti'),
        ('UTC-09:00', 'Alaska Standard Time (AKST)'),
        ('UTC-08:00', 'Pacific Standard Time (PST)'),
        ('UTC-07:00', 'Mountain Standard Time (MST)'),
        ('UTC-06:00', 'Central Standard Time (CST)'),
        ('UTC-05:00', 'Eastern Standard Time (EST)'),
        ('UTC-04:00', 'Atlantic Standard Time (AST), Eastern Daylight Time (EDT)'),
        ('UTC-03:00', 'Brazil Time (BRT), Argentina, Uruguay'),
        ('UTC-02:00', 'South Georgia and the South Sandwich Islands'),
        ('UTC-01:00', 'Azores, Cape Verde'),
        ('UTC±00:00', 'Greenwich Mean Time (GMT), Coordinated Universal Time (UTC)'),
        ('UTC+01:00', 'Central European Time (CET), West Africa Time'),
        ('UTC+02:00', 'Eastern European Time (EET), Israel Time, South Africa Time'),
        ('UTC+03:00', 'Moscow Time, Arabian Time, Turkey Time'),
        ('UTC+04:00', 'United Arab Emirates Time, Azerbaijan Time'),
        ('UTC+05:00', 'Pakistan Time, Uzbekistan Time'),
        ('UTC+05:30', 'India Time, Sri Lanka Time'),
        ('UTC+05:45', 'Nepal Time'),
        ('UTC+06:00', 'Bangladesh Time, Oman Time'),
        ('UTC+06:30', 'Cocos (Keeling) Islands Time, Christmas Island Time'),
        ('UTC+07:00', 'Indochina Time, Mongolia Time'),
        ('UTC+08:00', 'China Standard Time, Sydney Time'),
        ('UTC+08:45', 'Australian Western Standard Time (ACWST)'),
        ('UTC+09:00', 'Japan Standard Time (JST), Korea Time'),
        ('UTC+09:30', 'Australian Central Standard Time (ACST)'),
        ('UTC+10:00', 'Australian Eastern Standard Time (ACST), Vladivostok Standard Time'),
        ('UTC+10:30', 'Lord Howe Island Time'),
        ('UTC+11:00', 'Solomon Islands Time, Magadan Time'),
        ('UTC+12:00', 'Fiji Standard Time, New Zealand Standard Time (NZST)'),
        ('UTC+13:00', 'Tonga Time, Fiji Daylight Time'),
        ('UTC+14:00', 'International Date Line (Baker and Howland Islands, in certain circumstances)')
    ");

    $stmt->execute(); // Ejecutar la consulta
    $result = $stmt->get_result(); // Obtener el resultado de la ejecución (puede no ser necesario)
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
