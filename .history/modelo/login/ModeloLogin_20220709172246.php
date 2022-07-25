<?php
    require '../conexion/conexion.php';

    Class ModeloLogin
    {
        public function __construct()
        {

        }
        public function validarUsuario($usuario,$clave)
        {
            $sql = "SELECT * FROM correo WHERE
            correo=";
            return ejecutarConsulta($sql);
        }
    }


?>