
    
    $(document).ready(function(){
  $("#boton_formulario").click(function(){
    $(this).css({"background-color": "darkblue", "color": "white"});
   
  $("#parrafo_prueba").text($("#validationServer01").val());
  $("#validationServer03").removeClass("is-invalid").addClass("is-valid");
 //  $("#validationServer03").addClass("is-valid");
  $("#validationServer03Feedback").removeClass("invalid-feedback").addClass("valid-feedback");
  // $("#validationServer03Feedback").addClass("valid-feedback");

  });
});
