
<?php
require_once './ModeloPrincipal.php';
$principal = new ModeloPrincipal();

$nombreClase = isset($_POST["nombreClase"])?$_POST["nombreClase"]:"";
$nombreGrupo = isset($_POST["nombreGrupo"])?$_POST["nombreGrupo"]:"";


 switch($_GET["accion"])
 {
    case 'guardarClase':
        $rspta=$principal->guardarClase($nombreClase);
        echo $rspta?"Clase guardada":"";
        break;

        case 'guardarGrupo':
            $rspta=$principal->guardarGrupo($nombreGrupo);
            echo $rspta?"Grupo guardado":"";
            break;

            case 'mostrarClases':
                $rspta=$principal->mostrarClases();
                while($res = $rspta->fetch_object()){
                   echo $res->nombre+",";
                }
                
                break;

 }
?>
