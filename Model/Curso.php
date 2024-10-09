<?php

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
    protected $CERTIFICACION = []; // Array de certificaciones
    protected $TECNOLOGIA = [];    // Array de tecnologías

    public function __construct(){
        // Constructor vacío
    }

    // Método para contar cursos
    public static function countCourses() {
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

    // Método para obtener todos los cursos
    public static function getCourses() {
        $conn = db::connect();
        $consulta = "SELECT * FROM curso";

        if ($resultado = $conn->query($consulta)) {
            $arrayCursos = [];
            while ($obj = $resultado->fetch_object('Curso')) {
                // Llenar los arrays de certificaciones y tecnologías por cada curso
                $obj->CERTIFICACION = self::getCertificationsByCourseId($obj->CURSO_ID);
                $obj->TECNOLOGIA = self::getTecnologiasByCourseId($obj->CURSO_ID);
                $arrayCursos[] = $obj;
            }
            $resultado->close();
            return $arrayCursos;
        }
    }

    // Método para obtener un curso por su ID
    public static function getCourseById($id) {
        $conn = db::connect();
        $consulta = "SELECT * FROM curso WHERE CURSO_ID = $id";

        if ($resultado = $conn->query($consulta)) {
            $arrayCurso = [];
            while ($obj = $resultado->fetch_object('Curso')) {
                // Llenar los arrays de certificaciones y tecnologías por cada curso
                $obj->CERTIFICACION = self::getCertificationsByCourseId($obj->CURSO_ID);
                $obj->TECNOLOGIA = self::getTecnologiasByCourseId($obj->CURSO_ID);
                $arrayCurso[] = $obj;
            }
            $resultado->close();
            return $arrayCurso;
        }
    }

    // Método para obtener un curso por su nombre
    public static function getCourseByName($name) {
        $conn = db::connect();
    
        $consulta = "SELECT * FROM curso WHERE NOMBRE_CURSO = ?";
        if ($stmt = $conn->prepare($consulta)) {
            $stmt->bind_param("s", $name);
            $stmt->execute();
            
            $resultado = $stmt->get_result();
            $arrayCurso = [];
            
            while ($obj = $resultado->fetch_object('Curso')) {
                // Llenar los arrays de certificaciones y tecnologías por cada curso
                $obj->CERTIFICACION = self::getCertificationsByCourseId($obj->CURSO_ID);
                $obj->TECNOLOGIA = self::getTecnologiasByCourseId($obj->CURSO_ID);
                $arrayCurso[] = $obj;
            }
            
            $resultado->close();
            $stmt->close();
            return $arrayCurso;
        } else {
            return [];
        }
    }

    // Método auxiliar para obtener las certificaciones de un curso
    private static function getCertificationsByCourseId($curso_id) {
        $conn = db::connect();
        $consulta = "
            SELECT c.CERTIFICACION_ID, c.NOMBRE_CERTIFICACION
            FROM certificacion c
            JOIN curso_certificacion cc ON c.CERTIFICACION_ID = cc.CERTIFICACION_ID
            WHERE cc.CURSO_ID = $curso_id
        ";
        
        $certificaciones = [];
        if ($resultado = $conn->query($consulta)) {
            while ($fila = $resultado->fetch_assoc()) {
                $certificaciones[] = [
                    'CERTIFICACION_ID' => $fila['CERTIFICACION_ID'],
                    'NOMBRE_CERTIFICACION' => $fila['NOMBRE_CERTIFICACION']
                ];
            }
            $resultado->close();
        }
        return $certificaciones;
    }

    // Método para obtener las tecnologías asociadas a un curso
    private static function getTecnologiasByCourseId($curso_id) {
        $conn = db::connect();
        $consulta = "
            SELECT t.TECNOLOGIA_ID, t.NOMBRE_TECNOLOGIA
            FROM tecnologia t
            JOIN curso_tecnologia ct ON t.TECNOLOGIA_ID = ct.TECNOLOGIA_ID
            WHERE ct.CURSO_ID = $curso_id
        ";

        $tecnologias = [];
        if ($resultado = $conn->query($consulta)) {
            while ($fila = $resultado->fetch_assoc()) {
                $tecnologias[] = [
                    'TECNOLOGIA_ID' => $fila['TECNOLOGIA_ID'],
                    'NOMBRE_TECNOLOGIA' => $fila['NOMBRE_TECNOLOGIA']
                ];
            }
            $resultado->close();
        }
        return $tecnologias;
    }


    // Métodos para obtener nombre y descripción del curso por ID
    public static function getNameById($id) {
        $conn = db::connect();
        $sql = "SELECT NOMBRE_CURSO FROM curso WHERE CURSO_ID = $id";

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $name_curso = $row["NOMBRE_CURSO"];
            return $name_curso;
        } else {
            return false;
        }
    }

    public static function getDescById($id) {
        $conn = db::connect();
        $sql = "SELECT COMPLETE_NAME FROM curso WHERE CURSO_ID = $id";

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row["COMPLETE_NAME"];
        } else {
            return false;
        }
    }

    public static function getNOMBRE_CURSObyId($id){
        if (is_null($id)) {
            return false;
        }

        $conn = db::connect();
        $consulta = "SELECT NOMBRE_CURSO FROM curso WHERE CURSO_ID = $id";
        
        if ($resultado = $conn->query($consulta)) {
            if ($fila = $resultado->fetch_assoc()) {
                $curso_name = $fila['NOMBRE_CURSO'];
                $resultado->close();
                return $curso_name;
            }
        }
        return null; // Si no se encuentra ninguna certificación con el ID proporcionado
    }

    public static function getCOMPLETE_NAMEbyId($id){
        if (is_null($id)) {
            return false;
        }

        $conn = db::connect();
        $consulta = "SELECT COMPLETE_NAME FROM curso WHERE CURSO_ID = $id";
        
        if ($resultado = $conn->query($consulta)) {
            if ($fila = $resultado->fetch_assoc()) {
                $complete_name = $fila['COMPLETE_NAME'];
                $resultado->close();
                return $complete_name;
            }
        }
        return null; // Si no se encuentra ninguna certificación con el ID proporcionado
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
     * Get the value of CERTIFICACION
     */ 
    public function getCERTIFICACION()
    {
        return $this->CERTIFICACION;
    }

    /**
     * Set the value of CERTIFICACION
     *
     * @return  self
     */ 
    public function setCERTIFICACION($CERTIFICACION)
    {
        $this->CERTIFICACION = $CERTIFICACION;

        return $this;
    }

    /**
     * Get the value of TECNOLOGIA
     */ 
    public function getTECNOLOGIA()
    {
        return $this->TECNOLOGIA;
    }

    /**
     * Set the value of TECNOLOGIA
     *
     * @return  self
     */ 
    public function setTECNOLOGIA($TECNOLOGIA)
    {
        $this->TECNOLOGIA = $TECNOLOGIA;

        return $this;
    }
}
