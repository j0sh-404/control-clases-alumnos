
function guardarClase(){
    const nombreClase = $("#nombreClase").val();
    $.ajax({
        url: "../../modelo/principal/principal.php?accion=guardarClase",
        type: "POST",
        data: {nombreClase:nombreClase},
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