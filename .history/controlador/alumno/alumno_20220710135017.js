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
    alert(id)
}