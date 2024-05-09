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
    protected $COMPLETE_NAME;
    protected $DESCRIPCION;
    protected $PREREQUISITOS;
    protected $JOB_ROLES;
    protected $COURSE_OBJECTIVE;
    protected $COURSE_CONTENT;
    protected $LAB_OUTLINE;
    protected $DURATION;
    protected $TECNOLOGIA_ID;
    protected $CERTIFICACION_ID;

    public function ___construct(){
            
    }

    public static function countCourses(){
        $conn = db::connect();
        $consulta = "SELECT COUNT(*) as total FROM curso";
    
        if ($resultado = $conn->query($consulta)) {
            $fila = $resultado->fetch_assoc();
            $total = $fila['total'];
            $resultado->close();
            return $total;
        } else {
            return false;
        }
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

    public static function getCoursesFilter($select, $skip){
        $conn = db::connect();
        $consulta = "SELECT * FROM curso ORDER BY NOMBRE_CURSO LIMIT $select OFFSET $skip";


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
    
        // Preparar la consulta
        $consulta = "SELECT * FROM curso WHERE NOMBRE_CURSO = ?";
        if ($stmt = $conn->prepare($consulta)) {
            // Vincular parámetro y ejecutar la consulta
            $stmt->bind_param("s", $name);
            $stmt->execute();
    
            // Obtener resultados
            $resultado = $stmt->get_result();
            $arrayCurso = array();
            while ($obj = $resultado->fetch_object('Curso')) {
                $arrayCurso []= $obj;
            }
            
            // Cerrar recursos y devolver resultados
            $resultado->close();
            $stmt->close();
            return $arrayCurso;
        } else {
            // Manejar el caso de consulta no válida
            return array();
        }
    }
    

    public static function getNameById($id){
        $conn = db::connect();

        // Consulta SQL para obtener el nombre del usuario con el ID dado
        $sql = "SELECT NOMBRE_CURSO FROM curso WHERE CURSO_ID = $id";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Obtener el primer resultado (asumiendo que el ID es único)
            $row = $result->fetch_assoc();
            $name_curso = $row["NOMBRE_CURSO"];
        }else {
            return false;
        }

        // Cierra la conexión
        $conn->close();

        // Devolver el nombre del usuario
        return $name_curso;
    }

    public static function getDescById($id){
        $conn = db::connect();

        // Consulta SQL para obtener el nombre del usuario con el ID dado
        $sql = "SELECT COMPLETE_NAME FROM curso WHERE CURSO_ID = $id";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Obtener el primer resultado (asumiendo que el ID es único)
            $row = $result->fetch_assoc();
            $desc_curso = $row["COMPLETE_NAME"];
        }else {
            return false;
        }

        // Cierra la conexión
        $conn->close();

        // Devolver el nombre del usuario
        return $desc_curso;
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
     * Get the value of COMPLETE_NAME
     */ 
    public function getCOMPLETE_NAME()
    {
        return $this->COMPLETE_NAME;
    }

    /**
     * Set the value of COMPLETE_NAME
     *
     * @return  self
     */ 
    public function setCOMPLETE_NAME($COMPLETE_NAME)
    {
        $this->COMPLETE_NAME = $COMPLETE_NAME;

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
     * Get the value of PREREQUISITOS
     */ 
    public function getPREREQUISITOS()
    {
        return $this->PREREQUISITOS;
    }

    /**
     * Set the value of PREREQUISITOS
     *
     * @return  self
     */ 
    public function setPREREQUISITOS($PREREQUISITOS)
    {
        $this->PREREQUISITOS = $PREREQUISITOS;

        return $this;
    }

    /**
     * Get the value of JOB_ROLES
     */ 
    public function getJOB_ROLES()
    {
        return $this->JOB_ROLES;
    }

    /**
     * Set the value of JOB_ROLES
     *
     * @return  self
     */ 
    public function setJOB_ROLES($JOB_ROLES)
    {
        $this->JOB_ROLES = $JOB_ROLES;

        return $this;
    }

    /**
     * Get the value of COURSE_OBJECTIVE
     */ 
    public function getCOURSE_OBJECTIVE()
    {
        return $this->COURSE_OBJECTIVE;
    }

    /**
     * Set the value of COURSE_OBJECTIVE
     *
     * @return  self
     */ 
    public function setCOURSE_OBJECTIVE($COURSE_OBJECTIVE)
    {
        $this->COURSE_OBJECTIVE = $COURSE_OBJECTIVE;

        return $this;
    }

    /**
     * Get the value of COURSE_CONTENT
     */ 
    public function getCOURSE_CONTENT()
    {
        return $this->COURSE_CONTENT;
    }

    /**
     * Set the value of COURSE_CONTENT
     *
     * @return  self
     */ 
    public function setCOURSE_CONTENT($COURSE_CONTENT)
    {
        $this->COURSE_CONTENT = $COURSE_CONTENT;

        return $this;
    }

    /**
     * Get the value of LAB_OUTLINE
     */ 
    public function getLAB_OUTLINE()
    {
        return $this->LAB_OUTLINE;
    }

    /**
     * Set the value of LAB_OUTLINE
     *
     * @return  self
     */ 
    public function setLAB_OUTLINE($LAB_OUTLINE)
    {
        $this->LAB_OUTLINE = $LAB_OUTLINE;

        return $this;
    }

    /**
     * Get the value of DURATION
     */ 
    public function getDURATION()
    {
        return $this->DURATION;
    }

    /**
     * Set the value of DURATION
     *
     * @return  self
     */ 
    public function setDURATION($DURATION)
    {
        $this->DURATION = $DURATION;

        return $this;
    }

    /**
     * Get the value of TECNOLOGIA_ID
     */ 
    public function getTECNOLOGIA_ID()
    {
        return $this->TECNOLOGIA_ID;
    }

    /**
     * Set the value of TECNOLOGIA_ID
     *
     * @return  self
     */ 
    public function setTECNOLOGIA_ID($TECNOLOGIA_ID)
    {
        $this->TECNOLOGIA_ID = $TECNOLOGIA_ID;

        return $this;
    }

    /**
     * Get the value of CERTIFICACION_ID
     */ 
    public function getCERTIFICACION_ID()
    {
        return $this->CERTIFICACION_ID;
    }

    /**
     * Set the value of CERTIFICACION_ID
     *
     * @return  self
     */ 
    public function setCERTIFICACION_ID($CERTIFICACION_ID)
    {
        $this->CERTIFICACION_ID = $CERTIFICACION_ID;

        return $this;
    }
}

?>