<?php
    require '../conexion/conexion.php';

    Class Articulo 
    {
        public function __construct()
        {

        }
        public function insertar($idcategoria,$codigo,$nombre,$stock,$descripcion,$imagen)
        {
            $sql = "";
            return ejecutarConsulta($sql);
        }
    }


?>