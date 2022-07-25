init();
function init(){
    $("#detalleAlumno").hide();
    $("#tablaAlumno").show();
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
    $("#detalleAlumno").show();
    $("#tablaAlumno").hide();
    $('#detalleMostrarClases').append("")
    $.ajax({
        url: "../../modelo/alumno/alumno.php?accion=mostrarDetalleAlumno",
        type: "POST",
        data:{idAlumno:id},
        success: function(respuesta)
        {   
            json = JSON.parse(respuesta);
            $("#detalleNombreAlumno").html(json.nombre);
            $("#detalleApellidoAlumno").html(json.apellidos);
            $("#detalleCorreo").html(json.correo_electronico);
            $("#detalleGrupo").html(json.nombreGrupo);
            $("#detalleRol").html(json.rol);
            
           var jsonClases= JSON.parse(json.clase);
           var html="";
           jsonClases.forEach(function(e) {
            html+='<button style="background: rgba(174, 214, 241,0.9); margin: 3px; color:white;border:0;">'+e.nombre+'</button>';
           })
           $('#detalleMostrarClases').html(html);

        },
        error: function(error)
        {
            console.log("error: " + error);
        } 
    });
}


function regresar(){
    $("#detalleAlumno").hide();
}