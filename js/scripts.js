


// Hacer aparecer la barra de navegración, cuando el link esté en la parte superior de la pagina
$(document).ready(function(){
  $("#barranav1").hide();
  });


 
  $(document).scroll(function(){
     $("#barranav1").slideUp();
  });

  
$(document).ready(function(){
  $("#colppal").mouseenter(function(){
  	     $("#barranav1").slideDown();
  });
  });