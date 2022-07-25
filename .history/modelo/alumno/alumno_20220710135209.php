<?php
require_once './ModeloAlumno.php';
$modeloAlumno = new ModeloAlumno();


 switch($_GET["accion"])
 {
    case 'mostrarAlumnos':
        $rspta=$modeloAlumno->mostrarAlumnos();
        while($res = $rspta->fetch_object()){
            echo '
            <tr>
            <td>'.$res->nombre.'</td><td>'.$res->apellidos.'</td><td>'.$res->nombre_grupo.'</td>
            <td><button class="btn btn-primary" onclick="detalleAlumno(\''.$res->id_modelo_alumno.'\')">Ver</button></td>
            </tr>
            ';
         }
        break;
 }
?>
