<?php
    require '../conexion/conexion.php';

    Class ModeloLogin
    {
        public function __construct()
        {

        }
        public function validarUsuario($usuario,$clave)
        {   
            $sql = "SELECT * FROM login_usuario WHERE
            nombre_usuario='$usuario' OR 
            
             AND clave='$clave'";
            return ejecutarConsulta($sql);
        }
    }


?>