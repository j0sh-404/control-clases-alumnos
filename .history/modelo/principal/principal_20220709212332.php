
<?php
require_once './ModeloLogin.php';
$principal = new ModeloPrincipal();

$nombreClase = $_POST["nombreClase"];

 switch($_GET["accion"])
 {
    case 'guardarClase':
        $rspta=$principal->guardarClase($nombreClase);
        echo $rspta;
        break;
 }
?>
