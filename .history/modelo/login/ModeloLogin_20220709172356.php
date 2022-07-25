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
            correo='$usuario' OR
            nombre_usuario='$usuario' AND 
            clave='$clave'";
            return ejecutarConsulta($sql);
        }
    }


?>