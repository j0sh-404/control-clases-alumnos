<?php
    require '../conexion/conexion.php';

    Class ModeloAlumno
    {
        public function __construct()
        {

        }
        public function mostrarAlumnos()
        {   
            $sql = "SELECT  A.nombre,A.apellidos,G.nombre AS nombre_grupo FROM modelo_alumno A JOIN
             modelo_grupo G ON A.id_modelo_grupo =G.id_modelo_grupo;";
            return ejecutarConsulta($sql);
        }
    }


?>