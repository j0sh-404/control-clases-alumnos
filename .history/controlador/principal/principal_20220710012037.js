const arregloTarea=[];

function guardarAlumno(){
    const nombreAlumno = $("#nombreAlumno").val();
    const apellidoAlumno=$("#apellidoAlumno").val();
    const correo=$("#correoAlumno").val();
    
}


function seleccionarTarea(nombre,id){
    let idEncontrado=-1;
    let indexEncontrado=-1;
    const resultado = arregloTarea.find(function (idTarea,index){
      if(idTarea?.id === id){
        idEncontrado=id;
        indexEncontrado=index;
      }
    });

    if(idEncontrado>0){
        arregloTarea.splice(indexEncontrado,1);
    }else{
        const datos={
            id:id,
            nombre:nombre
         }
        arregloTarea.push(datos);
    }
            
}

function mostrarClases(){
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
function guardarClase(){
    const nombreClase = $("#nombreClase").val();
    if(nombreClase.trim()!=""){
        $.ajax({
            url: "../../modelo/principal/principal.php?accion=guardarClase",
            type: "POST",
            data: {nombreClase:nombreClase},
            success: function(respuesta)
            {
               mensajeExito(respuesta);
                $("#nombreClase").val("");
            },
            error: function(error)
            {
                console.log("error: " + error);
            } 
        });
    }else{
        mensajeError("Campo de nombre obligatorio");
    }
}

function guardarGrupo(){
    const nombreGrupo = $("#nombreGrupo").val();
    if(nombreGrupo.trim()!=""){
        $.ajax({
            url: "../../modelo/principal/principal.php?accion=guardarGrupo",
            type: "POST",
            data: {nombreGrupo:nombreGrupo},
            success: function(respuesta)
            {  console.log(respuesta)
               mensajeExito(respuesta);
               $("#nombreGrupo").val("");
            },
            error: function(error)
            {
                console.log("error: " + error);
            } 
        });
    }else{
        mensajeError("Campo de nombre obligatorio");
    }
}

function mensajeError(mensaje){
    Toastify({
        text: mensaje,
        duration: 2000,
        newWindow: true,
        close: true,
        gravity: "top",
        position: "center",
        stopOnFocus: true, 
        style: {
          background: "linear-gradient(to right, #EF2953 , #F60D3F )",
        },
        onClick: function(){} 
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