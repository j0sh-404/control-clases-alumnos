
<?php
require_once './ModeloPrincipal.php';
$principal = new ModeloPrincipal();

$nombreClase = $_POST["nombreClase"];

 switch($_GET["accion"])
 {
    case 'guardarClase':
        $rspta=$principal->guardarClase($nombreClase);
        echo $rspta?"Clase guardada":"";
        break;
 }
?>
