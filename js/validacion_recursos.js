
    $(document).ready(function(){
       $("#link_recurso1_modal").hide();
       $("#validador_nombre1").hide();
       $("#validador_correo1").hide();
      
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
  $("#link_recurso1_modal").fadeIn(1000); }
    //$("#link_recurso1_modal").removeClass("d-none");
   
  
  
     });
   });
    
    
    // Validar que se ingrese nombre sin caracteres especiales

    // Validar que se ingrese  @ en el campo del email

    // validar que si este chequeada caasilla de terminos y condiciones

    // Recoger los datos en un json

    // Enviar JSON a la base de datos

    // Habilitar link de descarga


    
    

  