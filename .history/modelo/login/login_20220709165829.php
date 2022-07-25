<?php
require_once './ModeloLogin.php';
$loginUsuario = new ModeloLogin();

$usuario = $_GET["usuario"];

 switch($_GET["accion"])
 {
    case 'login':
        //$rspta=$loginUsuario->validarUsuario();
        echo  $usuario;
        break;
 }
?>
