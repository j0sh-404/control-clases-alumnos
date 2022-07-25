<?php
    require '../conexion/conexion.php';

    Class ModeloPrincipal
    {
        public function __construct()
        {

        }
        public function guardarClase($nombre)
        {   
            $sql = "INSERT INTO (nombre) VALUES('$nombre')";
            echo $sql;
            return ejecutarConsulta($sql);
        }
    }


?>