<?php
    require '../conexion/conexion.php';

    Class ModeloAlumno
    {
        public function __construct()
        {

        }
        public function mostrarAlumnos()
        {   
            $sql = "SELECT * FROM modelo_alumno";
            return ejecutarConsulta($sql);
        }
    }


?>