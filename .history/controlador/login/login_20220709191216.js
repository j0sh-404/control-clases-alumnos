
function accesoUsuario (){
    const usuario = $("#accesoCorreo").val();
    const clave =$("#accesoClave").val();

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


/*
{
 data:{
    nombreClase:español,
    idClase:123123
 },
 data:{
    nombreClase:ingles,
    idClase:121212
 }

}
 


 $.ajax({
        url: "../ajax/articulo.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos)
        {
            //console.log("succes");
            bootbox.alert(datos);
            mostrarform(false);
            tabla.ajax.reload();
        },
        error: function(error)
        {
            console.log("error: " + error);
        } 
    });
*/