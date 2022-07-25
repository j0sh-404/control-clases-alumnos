<?php

require_once './ModeloLogin.php';
$loginUsuario = new ModeloLogin();

 switch($_GET["accion"])
 {
    case 'guardaryeditar':
        $rspta=$loginUsuario->validarUsuario();
        break;
 }
?>
