
<?php
require_once './ModeloPrincipal.php';
$principal = new ModeloPrincipal();

$nombreClase = isset($_POST["nombreClase"])?$_POST["nombreClase"]:"";
$nombreGrupo = isset($_POST["nombreGrupo"])?$_POST["nombreGrupo"]:"";

$nombreAlumno = isset($_POST["nombreAlumno"])?$_POST["nombreAlumno"]:"";
$apellidoAlumno = isset($_POST["apellidoAlumno"])?$_POST["apellidoAlumno"]:"";
$correoAlumno = isset($_POST["correoAlumno"])?$_POST["correoAlumno"]:"";
$rolAlumno = isset($_POST["rolAlumno"])?$_POST["rolAlumno"]:"";
$clasesAlumno = isset($_POST["clasesAlumno"])?$_POST["clasesAlumno"]:"";
$id = isset($_POST["clasesAlumno"])?$_POST["clasesAlumno"]:"";

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

                case 'guardarAlumno':
                    $rspta=$principal->guardarAlumno($nombreAlumno,$apellidoAlumno,$correoAlumno,$rolAlumno,$clasesAlumno);
                    echo $rspta?"Alumno guardado":"";
                    break;

                    case 'mostrarGrupos':
                        echo "llegando";
                        $rspta=$principal->mostrarGrupos();
                        while($res = $rspta->fetch_object()){
                           echo '<option value="'.$res->id_modelo_grupo.'">'.$res->nombre.'</option>';
                        }
                        break;

 }
?>
