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
            return ejecutarConsulta($sql);
        }
    }


?>