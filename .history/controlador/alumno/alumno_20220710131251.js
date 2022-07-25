init();
function init(){
    mostrarALumnos();
}

function mostrarALumnos(){
    $.ajax({
        url: "../../modelo/principal/principal.php?accion=mostrarClases",
        type: "POST",
        success: function(respuesta)
        {   
            $('#mostrarClases').html(respuesta);
        
        },
        error: function(error)
        {
            console.log("error: " + error);
        } 
    });
}