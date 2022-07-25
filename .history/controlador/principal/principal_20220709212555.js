
function guardarClase(){
    const nombreClase = $("#nombreClase").val();
    $.ajax({
        url: "../../modelo/principal/principal.php?accion=guardarClase",
        type: "POST",
        data: {nombreClase:nombreClase},
        success: function(respuesta)
        {
          if(respuesta!="null"){
           location.href ="../../vista/principal/principal.html";
           return 
          }

        },
        error: function(error)
        {
            console.log("error: " + error);
        } 
    });
}