


// cambiar de color cuando  el mouse entre al area de boton rounded pill del blog

$(document).ready(function(){
    $("#pildora1").mouseenter(function(){
      $(this).css({"background-color": "darkblue", "color": "white"});
    });
  });

  $(document).ready(function(){
    $("#pildora1").mouseleave(function(){
      $(this).css({"background-color": "white", "color": "darkblue"});
    });
  });

  $(document).ready(function(){
    $("#pildora2").mouseenter(function(){
      $(this).css({"background-color": "darkblue", "color": "white"});
    });
  });

  $(document).ready(function(){
    $("#pildora2").mouseleave(function(){
      $(this).css({"background-color": "white", "color": "darkblue"});
    });
  });

 

  $(document).ready(function(){
    $("#pildora3").mouseenter(function(){
      $(this).css({"background-color": "darkblue", "color": "white"});
    });
  });

  $(document).ready(function(){
    $("#pildora3").mouseleave(function(){
      $(this).css({"background-color": "white", "color": "darkblue"});
    });
  });

  $(document).ready(function(){
    $("#pildora4").mouseenter(function(){
      $(this).css({"background-color": "darkblue", "color": "white"});
    });
  });

  $(document).ready(function(){
    $("#pildora4").mouseleave(function(){
      $(this).css({"background-color": "white", "color": "darkblue"});
    });
  });

  $(document).ready(function(){
    $("#pildora5").mouseenter(function(){
      $(this).css({"background-color": "darkblue", "color": "white"});
    });
  });

  $(document).ready(function(){
    $("#pildora5").mouseleave(function(){
      $(this).css({"background-color": "white", "color": "darkblue"});
    });
  });

  $(document).ready(function(){
    $("#pildora1").click(function(){
      $("#grupo_pildoras").remove();
      $("#parrafo_bienvenida_blog").after("<div id='boton_volver_blog' class='row d-flex justify-content-center'><a href='blog.html' class='btn btn-primary col-2 fw-bold'>Volver</a></div>");
      $("#boton_volver_blog").after("<div class='row d-flex justify-content-start fs-5 fst-italic text-primary ms-4'>Planeación Financiera</div>");
      $("#articulo_1").remove();
      $("#articulo_2").remove();
      $("#articulo_4").remove();
      $("#articulo_5").remove();
      $("#articulo_6").remove();
    })
  })


  $(document).ready(function(){
    $("#pildora2").click(function(){
      
      $("#grupo_pildoras").remove();
     $("#parrafo_bienvenida_blog").after("<div id='boton_volver_blog' class='row d-flex justify-content-center'><a href='blog.html' class='btn btn-primary col-2 fw-bold'>Volver</a></div>");
      $("#boton_volver_blog").after("<div class='row d-flex justify-content-start fs-5 fst-italic text-primary ms-4'>Consumidor Inteligente</div>");
      $("#articulo_3").remove();
      $("#articulo_4").remove();
      $("#articulo_5").remove();
      $("#articulo_6").remove();
    })
  })

  $(document).ready(function(){
    $("#pildora3").click(function(){
      $("#grupo_pildoras").remove();
      $("#parrafo_bienvenida_blog").after("<div id='boton_volver_blog' class='row d-flex justify-content-center'><a href='blog.html' class='btn btn-primary col-2 fw-bold'>Volver</a></div>");
      $("#boton_volver_blog").after("<div class='row d-flex justify-content-start fs-5 fst-italic text-primary ms-4'>Deudor Inteligente</div>");
      $("#articulo_2").remove();
      $("#articulo_4").remove();
      $("#articulo_5").remove();
      $("#articulo_6").remove();
      $("#articulo_3").remove();
    })
  })

  $(document).ready(function(){
    $("#pildora4").click(function(){
      $("#grupo_pildoras").remove();
      $("#parrafo_bienvenida_blog").after("<div id='boton_volver_blog' class='row d-flex justify-content-center'><a href='blog.html' class='btn btn-primary col-2 fw-bold'>Volver</a></div>");
      $("#boton_volver_blog").after("<div class='row d-flex justify-content-start fs-5 fst-italic text-primary ms-4'>Inversionista Inteligente</div>");
      $("#articulo_3").remove();
      $("#articulo_4").remove();
      $("#articulo_5").remove();
      
    })
  })

  $(document).ready(function(){
    $("#pildora5").click(function(){
      $("#grupo_pildoras").remove();
      $("#parrafo_bienvenida_blog").after("<div id='boton_volver_blog' class='row d-flex justify-content-center'><a href='blog.html' class='btn btn-primary col-2 fw-bold'>Volver</a></div>");
      $("#boton_volver_blog").after("<div class='row d-flex justify-content-start fs-5 fst-italic text-primary ms-4'>Actualidad Económica y Financiera</div>");
      $("#articulo_1").remove();
      $("#articulo_2").remove();
      $("#articulo_3").remove();
      $("#articulo_6").remove();
      
    })
  })