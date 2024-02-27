<?php
class User {
    protected $USUARIO_ID;
    protected $USER;
    protected $PASSSWORD;

    public function ___construct(){
        
    }

    public static function getTecnologies(){
        $conn = db::connect();
        $consulta = "SELECT * FROM tecnologia";

        if ($resultado = $conn->query($consulta)) {
            while ($obj = $resultado->fetch_object('Tecnologia')) {
                $arrayTecnologias []= $obj;
            }
            
            $resultado->close();
            return $arrayTecnologias;
        }
    }
}