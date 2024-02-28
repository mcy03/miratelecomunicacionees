<?php
class email_permiso {
    protected $EMAIL_ID;
    protected $USUARIO_ID;
    protected $EMAIL;
    protected $PERSONA;

    public function ___construct(){
        
    }

    public static function getEmails(){
        $conn = db::connect();
        $consulta = "SELECT * FROM email_permiso";

        if ($resultado = $conn->query($consulta)) {
            while ($obj = $resultado->fetch_object('email_permiso')) {
                $arrayEmails []= $obj;
            }
            
            $resultado->close();
            return $arrayEmails;
        }
    }

    public static function getEmailsByUser($id){
        $conn = db::connect();
        $consulta = "SELECT * FROM email_permiso WHERE USUARIO_ID = $id";

        if ($resultado = $conn->query($consulta)) {
            while ($obj = $resultado->fetch_object('email_permiso')) {
                $arrayEmails []= $obj;
            }
            
            $resultado->close();
            return $arrayEmails;
        }
    }


    /**
     * Get the value of EMAIL
     */ 
    public function getEMAIL()
    {
        return $this->EMAIL;
    }

    /**
     * Set the value of EMAIL
     *
     * @return  self
     */ 
    public function setEMAIL($EMAIL)
    {
        $this->EMAIL = $EMAIL;

        return $this;
    }
}