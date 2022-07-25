<?php
    require '../conexion/conexion.php';

    Class ModeloLogin
    {
        public function __construct()
        {

        }
        public function validarUsuario($usuario,$clave)
        {
            $sql = "";
            return ejecutarConsulta($sql);
        }
    }


?>