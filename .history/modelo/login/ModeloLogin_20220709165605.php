<?php
    require '../conexion/conexion.php';

    Class ModeloLogin
    {
        public function __construct()
        {

        }
        public function validarUsuario()
        {
            $sql = "";
            return ejecutarConsulta($sql);
        }
    }


?>