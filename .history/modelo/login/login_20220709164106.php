<?php

require_once './ModeloLogin.php';
$loginUsuario = new ModeloLogin();

 switch($_GET["accion"])
 {
    case 'login':
        //$rspta=$loginUsuario->validarUsuario();
        echo "llegaste";
        break;
 }
?>
