
function guardarClase(){
    Toastify({
  text: "This is a toast",
  duration: 3000,
  destination: "https://github.com/apvarun/toastify-js",
  newWindow: true,
  close: true,
  gravity: "top", // `top` or `bottom`
  position: "left", // `left`, `center` or `right`
  stopOnFocus: true, // Prevents dismissing of toast on hover
  style: {
    background: "linear-gradient(to right, #00b09b, #96c93d)",
  },
  onClick: function(){} // Callback after click
}).showToast();
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