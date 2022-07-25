<?php
    require '../conexion/conexion.php';

    Class ModeloLogin
    {
        public function __construct()
        {

        }
        public function validarUsuario($usuario,$clave)
        {
            $sql = "SELECT * FROM login WHERE
            correo='$usuario' OR
            nombre_usuario='$usuario' AND 
            clave='$clave'";
            echo $sql
            return ejecutarConsulta($sql);
        }
    }


?>