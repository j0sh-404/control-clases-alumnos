<?php
require_once './ModeloAlumno.php';
$modeloAlumno = new ModeloAlumno();

$idAlumno = isset($_POST["idAlumno"])?$_POST["idAlumno"]:"";

 switch($_GET["accion"])
 {
    case 'mostrarAlumnos':
        $rspta=$modeloAlumno->mostrarAlumnos();
        while($res = $rspta->fetch_object()){
            echo '
            <tr>
            <td>'.$res->nombre.'</td><td>'.$res->apellidos.'</td><td>'.$res->nombre_grupo.'</td>

            <td><button class="btn btn-primary" onclick="detalleAlumno('.$res->id_modelo_alumno.')">Ver</button></td>
            </tr>
            ';
         }
        break;

        case 'mostrarDetalleAlumno':
            $rspta=$modeloAlumno->mostrarDetalleAlumno($idAlumno);
            $obj->nombre = "Prueba json";
            while ($row = $rspta->fetch_assoc()) {
                $obj->datos= array(
                    array("nombre",$row['nombre'])
                );
                
                echo json_encode($obj);
            }
            break;
 }
?>
