
function guardarClase(){
    const nombreClase = $("#nombreClase").val();
    $.ajax({
        url: "../../modelo/login/login.php?accion=login",
        type: "POST",
        data: {usuario:usuario,clave:clave},
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