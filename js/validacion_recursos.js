
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
      
   $("#boton_envio_datos").click(function(){
    $("#validador_correo1").hide();
    $("#validador_nombre1").hide();

  
    let mailformat = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    let nombre1 = $("#entrada_formulario_nombre1").val();
    let correo1 = $("#entrada_formulario_correo1").val();
     
    if(!(correo1.match(mailformat)))
{
  $("#validador_correo1").show();
}
      
  if(nombre1 == null || nombre1 == "") {

    $("#validador_nombre1").show();
  }

  if(!(correo1.match(mailformat)) || (nombre1 == null || nombre1 == "") )

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
  
    
      let mailformat = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
      let nombre2 = $("#entrada_formulario_nombre2").val();
      let correo2 = $("#entrada_formulario_correo2").val();
       
      if(!(correo2.match(mailformat)))
  {
    $("#validador_correo2").show();
  }
        
    if(nombre2 == null || nombre2 == "") {
  
      $("#validador_nombre2").show();
    }
  
    if(!(correo2.match(mailformat)) || (nombre2 == null || nombre2 == "") )
  
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
    
      
        let mailformat = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        let nombre3 = $("#entrada_formulario_nombre3").val();
        let correo3 = $("#entrada_formulario_correo3").val();
         
        if(!(correo3.match(mailformat)))
    {
      $("#validador_correo3").show();
    }
          
      if(nombre3 == null || nombre3 == "") {
    
        $("#validador_nombre3").show();
      }
    
      if(!(correo3.match(mailformat)) || (nombre3 == null || nombre3 == "") )
    
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
    });
    
    
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


    
   

  