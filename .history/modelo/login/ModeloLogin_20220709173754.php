<?php
    require '../conexion/conexion.php';

    Class ModeloLogin
    {
        public function __construct()
        {

        }
        public function validarUsuario($usuario,$clave)
        {
            $sql = "SELECT nombre_usuario FROM login_usuario WHERE
            nombre_usuario='$usuario' AND 
            clave='$clave'";
            echo $sql;
            return ejecutarConsulta($sql);
        }
    }


?>