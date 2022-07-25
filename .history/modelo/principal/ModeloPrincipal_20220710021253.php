<?php
    require '../conexion/conexion.php';

    Class ModeloPrincipal
    {
        public function __construct()
        {

        }
        public function guardarClase($nombre)
        {   
            $sql = "INSERT INTO modelo_clase(nombre) VALUES('$nombre')";
            if(ejecutarConsulta($sql)){
                return  true;
            }
            return false;
           
        }

        public function guardarGrupo($nombreGrupo)
        {   
            $sql = "INSERT INTO modelo_grupo(nombre) VALUES('$nombreGrupo')";
            if(ejecutarConsulta($sql)){
                return  true;
            }
            return false;
        }

        public function mostrarClases()
        {   
            $sql = "SELECT * FROM modelo_clase";
            return ejecutarConsulta($sql);
        }

        public function mostrarGrupos()
        {   
            $sql = "SELECT * FROM modelo_grupo";
            return ejecutarConsulta($sql);
        }

        public function guardarAlumno($nombreAlumno,$apellidoAlumno,$correoAlumno,$rolAlumno,$clasesAlumno,$idModeloGrupo)
        {   
            $sql = "INSERT INTO modelo_alumno(nombre,apellidos,correo_electronico,rol,clase,id_modelo_grupo) VALUES('$nombreAlumno','$apellidoAlumno','$correoAlumno','$rolAlumno','$clasesAlumno','$idModeloGrupo')";
            echo $sql;
            return ejecutarConsulta($sql);
        }
    }


?>