

//Cuando se de clic en las pildoras, se carga el div de temas

$(document).ready(function(){

    $("#pildora1").click(function(){
    
     
      $.post("php/carga_blog_dinamico.php",
    {
        
        tema : "Planeación financiera", 
       
    },
    function(json,status){
      $("#entrada_seleccionada").hide()
        $("#entradas_por_tema_seccion_interna").empty()
      $("#entradas_por_tema_seccion_interna").append(json.articulos_comprimidos)
    });
    
    })
})


$(document).ready(function(){

    $("#pildora2").click(function(){
         
      $.post("php/carga_blog_dinamico.php",
    {
        
        tema : "Consumidor Inteligente", 
       
    },
    function(json,status){
      $("#entrada_seleccionada").hide()
        $("#entradas_por_tema_seccion_interna").empty()
      $("#entradas_por_tema_seccion_interna").append(json.articulos_comprimidos)
    });
    
    })
})


$(document).ready(function(){

    $("#pildora3").click(function(){
         
      $.post("php/carga_blog_dinamico.php",
    {
        
        tema : "Deudor Inteligente", 
       
    },
    function(json,status){
      $("#entrada_seleccionada").hide()
        $("#entradas_por_tema_seccion_interna").empty()
      $("#entradas_por_tema_seccion_interna").append(json.articulos_comprimidos)
    });
    
    })
})

$(document).ready(function(){

    $("#pildora4").click(function(){
         
      $.post("php/carga_blog_dinamico.php",
    {
        
        tema : "Inversionista Inteligente", 
       
    },
    function(json,status){
      $("#entrada_seleccionada").hide()
        $("#entradas_por_tema_seccion_interna").empty()
      $("#entradas_por_tema_seccion_interna").append(json.articulos_comprimidos)
    });
    
    })
})



$(document).ready(function(){

    $("#pildora5").click(function(){
         
      $.post("php/carga_blog_dinamico.php",
    {
        
        tema : "Actualidad Económica y Financiera", 
       
    },
    function(json,status){
      $("#entrada_seleccionada").hide()
        $("#entradas_por_tema_seccion_interna").empty()
      $("#entradas_por_tema_seccion_interna").append(json.articulos_comprimidos)
    });
    
    })
})


$(document).ready(function(){

    $("#pildora6").click(function(){
         
      $.post("php/carga_blog_dinamico.php",
    {
        
        tema : "Educación Financiera", 
       
    },
    function(json,status){
      $("#entrada_seleccionada").hide()
        $("#entradas_por_tema_seccion_interna").empty()
      $("#entradas_por_tema_seccion_interna").append(json.articulos_comprimidos)
    });
    
    })
})


$(document).ready(function(){

    $("#boton_entrada_comprimida").click(function(){
    alert("hola")
    
    })
})




// Cuando se de click en etiquetas, se carga div de etiquetas


// cuando se de click en entrada , se carga div de entrada sola, con featurettes lateral, con el resto de entradas

