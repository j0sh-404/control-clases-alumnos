<?php
require_once './ModeloLogin.php';
$loginUsuario = new ModeloLogin();


$usuario=isset($_POST["usuario"])? limpiarCadena($_POST["usuario"]):"";

$usuario=isset($_POST["clave"])? limpiarCadena($_POST["clave"]):"";

 switch($_GET["accion"])
 {
    case 'login':
        $rspta=$loginUsuario->validarUsuario($usuario,$clave);
        echo $rspta?"Acceso permitido":"Acceso denegado";
        break;
 }
?>
