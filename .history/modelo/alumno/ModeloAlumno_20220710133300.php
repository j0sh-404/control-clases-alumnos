<?php
    require '../conexion/conexion.php';

    Class ModeloAlumno
    {
        public function __construct()
        {

        }
        public function mostrarAlumnos()
        {   
            $sql = "select a.nombre,a.apellidos,g.nombre from modelo_alumno a join modelo_grupo g on a.id_modelo_grupo =g.id_modelo_grupo";
            return ejecutarConsulta($sql);
        }
    }


?>