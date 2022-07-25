<?php
require_once './ModeloAlumno.php';
$modeloAlumno = new ModeloAlumno();


 switch($_GET["accion"])
 {
    case 'mostrarAlumnos':
        $rspta=$modeloAlumno->mostrarAlumnos();
        while($res = $rspta->fetch_object()){
            echo '
            <row>
            <td>'.$res->nombre.'</td><td>'.$res->apellidos.'</td><td>'.$res->nombre_grupo.'</td>
            <td><button class="btn btn-primary" onclick="detalleAlumno()">Ver</button></td>
            </row>
            ';
         }
        break;
 }
?>
