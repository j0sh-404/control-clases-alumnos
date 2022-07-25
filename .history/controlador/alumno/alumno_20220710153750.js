init();
function init(){
    mostrarALumnos();
}

function mostrarALumnos(){
    $.ajax({
        url: "../../modelo/alumno/alumno.php?accion=mostrarAlumnos",
        type: "POST",
        success: function(respuesta)
        {   
            $('#mostrarAlumnos').html(respuesta);
        
        },
        error: function(error)
        {
            console.log("error: " + error);
        } 
    });
}


function detalleAlumno(id){
    $.ajax({
        url: "../../modelo/alumno/alumno.php?accion=mostrarDetalleAlumno",
        type: "POST",
        data:{idAlumno:id},
        success: function(respuesta)
        {   
            json = JSON.parse(respuesta);
            console.log(json);
            $("#detalleNombreAlumno").html(json.nombre);
            $("#detalleApellidoAlumno").html(json.apellidos);
            $("#detalleCorreo").html(json.correo_electronico);
            $("#detalleGrupo").html(json.nombreGrupo);
            $("#detalleRol").html(json.rol);
            
           var jsonClases= JSON.parse(respuesta.clase);
           console.log(jsonClases)
        },
        error: function(error)
        {
            console.log("error: " + error);
        } 
    });
}