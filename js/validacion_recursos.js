
    $(document).ready(function(){
       $("#link_recurso1_modal").hide();
       $("#validador_nombre1").hide();
       $("#validador_correo1").hide();
       $("#link_recurso2_modal").hide();
       $("#validador_nombre2").hide();
       $("#validador_correo2").hide();
       $("#link_recurso3_modal").hide();
       $("#validador_nombre3").hide();
       $("#validador_correo3").hide();
       $("#validador_terminos1").hide();
       $("#validador_terminos2").hide();
       $("#validador_terminos3").hide();
       $("#validacion_nl_index_nombre").hide();
       $("#validacion_nl_index_correo").hide();
       $("#validacion_nl_index_tyc").hide();
       $("#validador_nombre_empresas").hide();
       $("#validador_correo_empresas").hide();
       $("#alerta_datos_exito_empresas").hide();


      $("#boton_formulario_empresas").click(function(){
      $("#validador_nombre_empresas").hide();
      $("#validador_correo_empresas").hide();
      $("#alerta_datos_exito_empresas").hide();
      
        let mailformat = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        let nombre1 = $("#empresas_nombre").val();
        let correo1 = $("#empresas_correo").val();
        let empresas_servicio_interes1 = $("#empresas_servicio_interes").val();
        let comentarios1 = $("#empresas_comentarios").val();
        let celular1 = $("#empresas_celular").val();
       
        let terminos1 = $("#flexCheckDefault").prop("checked");
      
        if(!(correo1.match(mailformat)))
    {
      $("#validador_correo_empresas").show();
    }
    
      if(terminos1 == false){
    
     
       $("#validacion_nl_index_tyc").show();
      }
          
      if(nombre1 == null || nombre1 == "") {
    
        $("#validador_nombre_empresas").show();
      }
    
      if(!(correo1.match(mailformat)) || (nombre1 == null || nombre1 == "")  )
    
      {}
      else{
       $("#alerta_datos_exito_empresas").show();
       
    
      $.ajax({
        // la URL para la petición
        url : 'php/db_empresas.php',
     
        // la información a enviar
        // (también es posible utilizar una cadena de datos)
        data : { 
                empresas_servicio_interes : empresas_servicio_interes1 ,
                nombre : nombre1 ,
                email : correo1 ,
                celular : celular1 ,
                comentarios : comentarios1
                },
     
        // especifica si será una petición POST o GET
        type : 'POST',
     
        // el tipo de información que se espera de respuesta
        dataType : 'json',
     
        // código a ejecutar si la petición es satisfactoria;
        // la respuesta es pasada como argumento a la función
        success : function(json) {
                    
      
        },
     
        // código a ejecutar si la petición falla;
        // son pasados como argumentos a la función
        // el objeto jqXHR (extensión de XMLHttpRequest), un texto con el estatus
        // de la petición y un texto con la descripción del error que haya dado el servidor
        error : function(jqXHR, status, error) {
        // alert(error);
        },
     
      //  código a ejecutar sin importar si la petición falló o no
        complete : function(jqXHR, status) {
           // alert('Petición realizada');
           // alert(json.status);
        }
    })
    
    }
        //$("#link_recurso1_modal").removeClass("d-none");
       
      
      
         });


       $("#enviar_datos_nl_index").click(function(){
        $("#validacion_nl_index_nombre").hide();
        $("#validacion_nl_index_correo").hide();
        $("#validacion_nl_index_tyc").hide();
        $("#alerta_datos_exito").hide();
      
        let mailformat = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        let nombre1 = $("#entrada_nombre_nl_index").val();
        let correo1 = $("#entrada_correo_nl_index").val();
       let terminos1 = $("#flexCheckDefault").prop("checked");
      
        if(!(correo1.match(mailformat)))
    {
      $("#validacion_nl_index_correo").show();
    }
    
      if(terminos1 == false){
    
     
       $("#validacion_nl_index_tyc").show();
      }
          
      if(nombre1 == null || nombre1 == "") {
    
        $("#validacion_nl_index_nombre").show();
      }
    
      if(!(correo1.match(mailformat)) || (nombre1 == null || nombre1 == "") || (terminos1 == false) )
    
      {}
      else{
       
        $("#etiqueta_acepto").after("<br><p id='alerta_datos_exito' class='text-primary fw-bold text-center fst-italic fs-3'>¡Datos enviados con éxito!</p>");
      $("#link_recurso1_modal").fadeIn(1000);
    
      $.ajax({
        // la URL para la petición
        url : 'php/queries_db.php',
     
        // la información a enviar
        // (también es posible utilizar una cadena de datos)
        data : { 
                 nombre : nombre1 ,
                 email : correo1 ,
                 recurso : 0
                },
     
        // especifica si será una petición POST o GET
        type : 'POST',
     
        // el tipo de información que se espera de respuesta
        dataType : 'json',
     
        // código a ejecutar si la petición es satisfactoria;
        // la respuesta es pasada como argumento a la función
        success : function(json) {
                    
      
        },
     
        // código a ejecutar si la petición falla;
        // son pasados como argumentos a la función
        // el objeto jqXHR (extensión de XMLHttpRequest), un texto con el estatus
        // de la petición y un texto con la descripción del error que haya dado el servidor
        error : function(jqXHR, status, error) {
        // alert(error);
        },
     
      //  código a ejecutar sin importar si la petición falló o no
        complete : function(jqXHR, status) {
           // alert('Petición realizada');
           // alert(json.status);
        }
    })
    
    }
        //$("#link_recurso1_modal").removeClass("d-none");
       
      
      
         });
      
   $("#boton_envio_datos").click(function(){
    $("#validador_correo1").hide();
    $("#validador_nombre1").hide();
    $("#validador_terminos1").hide();
  
    let mailformat = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    let nombre1 = $("#entrada_formulario_nombre1").val();
    let correo1 = $("#entrada_formulario_correo1").val();
   let terminos1 = $("#flexCheckChecked1").prop("checked");
  
    if(!(correo1.match(mailformat)))
{
  $("#validador_correo1").show();
}

  if(terminos1 == false){

 
   $("#validador_terminos1").show();
  }
      
  if(nombre1 == null || nombre1 == "") {

    $("#validador_nombre1").show();
  }

  if(!(correo1.match(mailformat)) || (nombre1 == null || nombre1 == "") || (terminos1 == false) )

  {}
  else{
  $("#link_recurso1_modal").fadeIn(1000);

  $.ajax({
    // la URL para la petición
    url : 'php/queries_db.php',
 
    // la información a enviar
    // (también es posible utilizar una cadena de datos)
    data : { 
             nombre : nombre1 ,
             email : correo1 ,
             recurso : 1
            },
 
    // especifica si será una petición POST o GET
    type : 'POST',
 
    // el tipo de información que se espera de respuesta
    dataType : 'json',
 
    // código a ejecutar si la petición es satisfactoria;
    // la respuesta es pasada como argumento a la función
    success : function(json) {
                
  
    },
 
    // código a ejecutar si la petición falla;
    // son pasados como argumentos a la función
    // el objeto jqXHR (extensión de XMLHttpRequest), un texto con el estatus
    // de la petición y un texto con la descripción del error que haya dado el servidor
    error : function(jqXHR, status, error) {
    // alert(error);
    },
 
  //  código a ejecutar sin importar si la petición falló o no
    complete : function(jqXHR, status) {
       // alert('Petición realizada');
       // alert(json.status);
    }
})

}
    //$("#link_recurso1_modal").removeClass("d-none");
   
  
  
     });


     $("#boton_envio_datos2").click(function(){
      $("#validador_correo2").hide();
      $("#validador_nombre2").hide();
      $("#validador_terminos2").hide();
  
    
      let mailformat = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
      let nombre2 = $("#entrada_formulario_nombre2").val();
      let correo2 = $("#entrada_formulario_correo2").val();
      let terminos2 = $("#flexCheckChecked2").prop("checked");
       
      if(!(correo2.match(mailformat)))
  {
    $("#validador_correo2").show();
  }
  if(terminos2 == false){

 
    $("#validador_terminos2").show();
   }
        
    if(nombre2 == null || nombre2 == "") {
  
      $("#validador_nombre2").show();
    }
  
    if(!(correo2.match(mailformat)) || (nombre2 == null || nombre2 == "") || (terminos2 == false) )
  
    {}
    else{
    $("#link_recurso2_modal").fadeIn(1000);
      
    $.ajax({
      // la URL para la petición
      url : 'php/queries_db.php',
   
      // la información a enviar
      // (también es posible utilizar una cadena de datos)
      data : { 
               nombre : nombre2 ,
               email : correo2 , 
               recurso : 2
              },
   
      // especifica si será una petición POST o GET
      type : 'POST',
   
      // el tipo de información que se espera de respuesta
      dataType : 'json',
   
      // código a ejecutar si la petición es satisfactoria;
      // la respuesta es pasada como argumento a la función
      success : function(json) {
                  
    
      },
   
      // código a ejecutar si la petición falla;
      // son pasados como argumentos a la función
      // el objeto jqXHR (extensión de XMLHttpRequest), un texto con el estatus
      // de la petición y un texto con la descripción del error que haya dado el servidor
      error : function(jqXHR, status, error) {
      // alert(error);
      },
   
    //  código a ejecutar sin importar si la petición falló o no
      complete : function(jqXHR, status) {
         // alert('Petición realizada');
         // alert(json.status);
      }
  })
  
  }
      //$("#link_recurso1_modal").removeClass("d-none");
     
    
    
       });




       $("#boton_envio_datos3").click(function(){
        $("#validador_correo3").hide();
        $("#validador_nombre3").hide();
        $("#validador_terminos3").hide();
    
      
        let mailformat = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        let nombre3 = $("#entrada_formulario_nombre3").val();
        let correo3 = $("#entrada_formulario_correo3").val();
        let terminos3 = $("#flexCheckChecked3").prop("checked");
         
        if(!(correo3.match(mailformat)))
    {
      $("#validador_correo3").show();
    }
    if(terminos3 == false){
  
   
      $("#validador_terminos3").show();
     }
          
      if(nombre3 == null || nombre3 == "") {
    
        $("#validador_nombre3").show();
      }
    
      if(!(correo3.match(mailformat)) || (nombre3 == null || nombre3 == "") || (terminos3 == false) )
    
      {}
      else{
      $("#link_recurso3_modal").fadeIn(1000);
        
      $.ajax({
        // la URL para la petición
        url : 'php/queries_db.php',
     
        // la información a enviar
        // (también es posible utilizar una cadena de datos)
        data : { 
                 nombre : nombre3 ,
                 email : correo3 , 
                 recurso : 3
                },
     
        // especifica si será una petición POST o GET
        type : 'POST',
     
        // el tipo de información que se espera de respuesta
        dataType : 'json',
     
        // código a ejecutar si la petición es satisfactoria;
        // la respuesta es pasada como argumento a la función
        success : function(json) {
                    
      
        },
     
        // código a ejecutar si la petición falla;
        // son pasados como argumentos a la función
        // el objeto jqXHR (extensión de XMLHttpRequest), un texto con el estatus
        // de la petición y un texto con la descripción del error que haya dado el servidor
        error : function(jqXHR, status, error) {
        // alert(error);
        },
     
      //  código a ejecutar sin importar si la petición falló o no
        complete : function(jqXHR, status) {
           // alert('Petición realizada');
           // alert(json.status);
        }
    })
    
    }
        //$("#link_recurso1_modal").removeClass("d-none");
       
      
      
         });


   });
    
    
    // Validar que se ingrese nombre sin caracteres especiales

    // Validar que se ingrese  @ en el campo del email

    // validar que si este chequeada caasilla de terminos y condiciones

    // Recoger los datos en un json

    // Enviar JSON a la base de datos

    // Habilitar link de descarga


    
   

  