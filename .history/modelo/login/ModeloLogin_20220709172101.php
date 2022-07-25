<?php
    require '../conexion/conexion.php';

    Class ModeloLogin
    {
        public function __construct()
        {

        }
        public function validarUsuario($usuario,$clave)
        {
            $sql = "select * from where 
            correo";
            return ejecutarConsulta($sql);
        }
    }


?>