<?php
require_once './ModeloLogin.php';
$loginUsuario = new ModeloLogin();

$usuario = $_POST["usuario"];

 switch($_GET["accion"])
 {
    case 'login':
        //$rspta=$loginUsuario->validarUsuario();
        echo "-------------------------$$$$"
        echo  $usuario;
        break;
 }
?>
