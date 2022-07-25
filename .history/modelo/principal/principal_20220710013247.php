
<?php
require_once './ModeloPrincipal.php';
$principal = new ModeloPrincipal();

$nombreClase = isset($_POST["nombreClase"])?$_POST["nombreClase"]:"";
$nombreGrupo = isset($_POST["nombreGrupo"])?$_POST["nombreGrupo"]:"";

$nombreAlumno = isset($_POST["nombreAlumno"])?$_POST["nombreAlumno"]:"";
$apellidoAlumno = isset($_POST["apellidoAlumno"])?$_POST["apellidoAlumno"]:"";
$correoAlumno = isset($_POST["correoAlumno"])?$_POST["correoAlumno"]:"";
$rolAlumno = isset($_POST["rolAlumno"])?$_POST["rolAlumno"]:"";
$

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
                    
                   echo '<div class="form-check form-check-inline">
                   <input class="form-check-input" type="checkbox" onChange="seleccionarTarea(\''.$res->nombre.'\',\''.$res->id_modelo_clase.'\')">
                   <label class="form-check-label" for="inlineCheckbox1" >'.$res->nombre.'</label>
                   </div>';
                }
                
                break;

                case 'guardaAlumno':
                    $rspta=$principal->guardarAlumno($nombreGrupo);
                    echo $rspta?"Alumno guardado":"";
                    break;

 }
?>
