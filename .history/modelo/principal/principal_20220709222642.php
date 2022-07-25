
<?php
require_once './ModeloPrincipal.php';
$principal = new ModeloPrincipal();

$nombreClase = $_POST["nombreClase"];
$nombreGrupo = $_POST["nombreGrupo"];

 switch($_GET["accion"])
 {
    case 'guardarClase':
        $rspta=$principal->guardarClase($nombreClase);
        echo $rspta?"Clase guardada":"";
        break;

        case 'guardarGrupo':
            $rspta=$principal->guardarGrupo($nombreGrupo);
            echo"dddd";
            break;
 }
?>
