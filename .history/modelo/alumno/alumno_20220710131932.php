<?php
require_once './ModeloAlumno.php';
$modeloAlumno = new ModeloAlumno();


 switch($_GET["accion"])
 {
    case 'mostrarAlumnos':
        echo("aca");
        $rspta=$modeloAlumno->mostrarAlumnos();
        $fetch = $rspta->fetch_object();
        echo json_encode($fetch);
        break;
 }
?>
