
function guardarClase(){
    const nombreClase = $("#nombreClase").val();

    if(nombreClase.trim()!=""){
        $.ajax({
            url: "../../modelo/principal/principal.php?accion=guardarClase",
            type: "POST",
            data: {nombreClase:nombreClase},
            success: function(respuesta)
            {
                console.log("respuesta",respuesta)
                $("#nombreClase").val("");
            },
            error: function(error)
            {
                console.log("error: " + error);
            } 
        });
    }

}
function mensajeError(mensaje){
    Toastify({
        text: mensaje,
        duration: 2000,
        newWindow: true,
        close: true,
        gravity: "top", // `top` or `bottom`
        position: "center", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
          background: "linear-gradient(to right, #EF2953 , #96c93d)",
        },
        onClick: function(){} // Callback after click
      }).showToast();
}

function mensajeExito(mensaje){
    Toastify({
        text: mensaje,
        duration: 2000,
        newWindow: true,
        close: true,
        gravity: "top", // `top` or `bottom`
        position: "center", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
          background: "linear-gradient(to right, #00b09b, #96c93d)",
        },
        onClick: function(){} // Callback after click
      }).showToast();
}