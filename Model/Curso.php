<?php
/*  
=========================================================================
                            CLASE Curso
=========================================================================
º Inicializamos la clase Curso la cual contendra los cursos de la base  º
º de datos.                                                             º
=========================================================================
*/
class Curso {
    protected $CURSO_ID;
    protected $NOMBRE_CURSO;
    protected $DESCRIPCION;
    protected $DETALLES;
    protected $IMG_CURSO;

    public function ___construct(){
            
    }

    public static function getCourses(){
        $conn = db::connect();
        $consulta = "SELECT * FROM curso";

        if ($resultado = $conn->query($consulta)) {
            while ($obj = $resultado->fetch_object('Curso')) {
                $arrayCursos []= $obj;
            }
            
            $resultado->close();
            return $arrayCursos;
        }
    }

    public static function getCourseById($id){
        $conn = db::connect();
        $consulta = "SELECT * FROM curso WHERE CURSO_ID = $id";

        if ($resultado = $conn->query($consulta)) {
            while ($obj = $resultado->fetch_object('Curso')) {
                $arrayCurso []= $obj;
            }
            
            $resultado->close();
            return $arrayCurso;
        }
    }
    
    public static function getCourseByName($name){
        $conn = db::connect();
        $consulta = "SELECT * FROM curso WHERE NOMBRE_CURSO = $name";

        if ($resultado = $conn->query($consulta)) {
            while ($obj = $resultado->fetch_object('Curso')) {
                $arrayCurso []= $obj;
            }
            
            $resultado->close();
            return $arrayCurso;
        }
    }

    /**
     * Get the value of CURSO_ID
     */ 
    public function getCURSO_ID()
    {
        return $this->CURSO_ID;
    }

    /**
     * Set the value of CURSO_ID
     *
     * @return  self
     */ 
    public function setCURSO_ID($CURSO_ID)
    {
        $this->CURSO_ID = $CURSO_ID;

        return $this;
    }

    /**
     * Get the value of NOMBRE_CURSO
     */ 
    public function getNOMBRE_CURSO()
    {
        return $this->NOMBRE_CURSO;
    }

    /**
     * Set the value of NOMBRE_CURSO
     *
     * @return  self
     */ 
    public function setNOMBRE_CURSO($NOMBRE_CURSO)
    {
        $this->NOMBRE_CURSO = $NOMBRE_CURSO;

        return $this;
    }

    /**
     * Get the value of DESCRIPCION
     */ 
    public function getDESCRIPCION()
    {
        return $this->DESCRIPCION;
    }

    /**
     * Set the value of DESCRIPCION
     *
     * @return  self
     */ 
    public function setDESCRIPCION($DESCRIPCION)
    {
        $this->DESCRIPCION = $DESCRIPCION;

        return $this;
    }

    /**
     * Get the value of DETALLES
     */ 
    public function getDETALLES()
    {
        return $this->DETALLES;
    }

    /**
     * Set the value of DETALLES
     *
     * @return  self
     */ 
    public function setDETALLES($DETALLES)
    {
        $this->DETALLES = $DETALLES;

        return $this;
    }

    /**
     * Get the value of IMG_CURSO
     */ 
    public function getIMG_CURSO()
    {
        return $this->IMG_CURSO;
    }

    /**
     * Set the value of IMG_CURSO
     *
     * @return  self
     */ 
    public function setIMG_CURSO($IMG_CURSO)
    {
        $this->IMG_CURSO = $IMG_CURSO;

        return $this;
    }
}

?>