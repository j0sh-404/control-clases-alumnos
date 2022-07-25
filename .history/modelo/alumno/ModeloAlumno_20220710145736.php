<?php
    require '../conexion/conexion.php';

    Class ModeloAlumno
    {
        public function __construct()
        {

        }
        public function mostrarAlumnos()
        {   
            $sql = "SELECT A.id_modelo_alumno, A.nombre,A.apellidos,G.nombre AS nombre_grupo FROM modelo_alumno A JOIN
             modelo_grupo G ON A.id_modelo_grupo =G.id_modelo_grupo";
            return ejecutarConsulta($sql);
        }

        public function mostrarDetalleAlumno($idAlumno)
        {   
            $sql = "select * from modelo_alumno a join modelo_grupo g on a.id_modelo_grupo =g.id_modelo_grupo where id_modelo_alumno='$idAlumno'";
            return ejecutarConsulta($sql);
        }
    }


?>