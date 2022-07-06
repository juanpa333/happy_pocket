$(document).ready(function(){

$.ajax({
    // la URL para la petición
    url : 'php/carga_blog.php',
 
    // la información a enviar
    // (también es posible utilizar una cadena de datos)
    // El valor de la derecha, es el valor de jscript (jquery)
    // El valor de la izquierda es el nombre de la variable POST
    data : { 
            col1 : 'id' ,
            col2 :  'entrada'
           
            },
 
    // especifica si será una petición POST o GET
    type : 'POST',
 
    // el tipo de información que se espera de respuesta
    dataType : 'json',
 
    // código a ejecutar si la petición es satisfactoria;
    // la respuesta es pasada como argumento a la función
    success : function(json) {
                
        $("#cuerpo_articulos").append(json.articulos_comprimidos);
       
    },
 
    // código a ejecutar si la petición falla;
    // son pasados como argumentos a la función
    // el objeto jqXHR (extensión de XMLHttpRequest), un texto con el estatus
    // de la petición y un texto con la descripción del error que haya dado el servidor
    error : function(jqXHR, status, error) {
     alert(error);
    },
 
  //  código a ejecutar sin importar si la petición falló o no
    complete : function(jqXHR, status) {
       // alert('Petición realizada');
       // alert(json.status);
    }
})

}) //End document ready function



var tema

$(document).ready(function(){

$("#pildora1").click(function(){

 
  $("#cuerpo_articulos").empty();
  tema = "Planeación financiera"

  $.post("php/carga_blog.php",
{
    
    tema : tema, 
   
},
function(json,status){
  
  $("#cuerpo_articulos").append(json.articulos_comprimidos);
});

})

$("#pildora2").click(function(){

  $("#cuerpo_articulos").empty();
  tema = "Consumidor Inteligente"

  $.post("php/carga_blog.php",
{
    
    tema : tema, 
   
},
function(json,status){
  
  $("#cuerpo_articulos").append(json.articulos_comprimidos);
});

})


$("#pildora3").click(function(){

  $("#cuerpo_articulos").empty();
  tema = "Deudor Inteligente"

  $.post("php/carga_blog.php",
{
    
    tema : tema, 
   
},
function(json,status){
  
  $("#cuerpo_articulos").append(json.articulos_comprimidos);
});

})

$("#pildora4").click(function(){

  $("#cuerpo_articulos").empty();
  tema = "Inversionista Inteligente"

  $.post("php/carga_blog.php",
{
    
    tema : tema, 
   
},
function(json,status){
  
  $("#cuerpo_articulos").append(json.articulos_comprimidos);
});

})

$("#pildora5").click(function(){

 
  $("#cuerpo_articulos").empty();
  tema = "Actualidad Económica y Financiera"

  $.post("php/carga_blog.php",
{
    
    tema : tema, 
   
},
function(json,status){
  
  $("#cuerpo_articulos").append(json.articulos_comprimidos);
});

})


$("#pildora6").click(function(){

  $("#cuerpo_articulos").empty();
  tema = "Educación Financiera"

  $.post("php/carga_blog.php",
{
    
    tema : tema, 
   
},
function(json,status){
  
  $("#cuerpo_articulos").append(json.articulos_comprimidos);
});

})






})