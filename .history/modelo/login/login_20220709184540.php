<?php
require_once './ModeloLogin.php';
$loginUsuario = new ModeloLogin();

$usuario = $_POST["usuario"];
$clave = $_POST["clave"];

 switch($_GET["accion"])
 {
    case 'login':
        $rspta=$loginUsuario->validarUsuario($usuario,$clave);
        $fetch = $rspta->fetch_object();
        $res= json_encode($fetch);
        echo $res?"Success":"Error";
        break;
 }
?>
