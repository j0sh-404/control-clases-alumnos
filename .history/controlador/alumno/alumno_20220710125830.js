$(document).ready(function () {
    $('#principal').load('../principal/principal.html');
     mostrarALumnos();
});

function mostrarALumnos(){
    alert("acas")
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