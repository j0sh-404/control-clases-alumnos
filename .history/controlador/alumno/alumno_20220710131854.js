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
           console.log(respuesta)
        
        },
        error: function(error)
        {
            console.log("error: " + error);
        } 
    });
}