
               window.onload = function(){
                    editor = CKEDITOR.replace("editor1", {
                    width :1000,
                    height:200
                    });
                    CKFinder.setupCKEditor(editor, 'http://localhost/jp/happy_pocket/ckeditor4/ckfinder')
                } 
           
           
              $(document).ready(function(){
	          	$("#boton").click(function(){
                var texto = CKEDITOR.instances['editor1'].getData(); // Esta linea guarda el objeto que está en el editor
                

                var titulo_html = $("<h3 id='titulo_html' class='text-center' ></h3>").text($("#Input_titulo").val());
                var parrafo_fecha = $("<p id='parrafo_fecha' class='mt-2 fst-italic fs-5'></p>").text($("#Input_fecha").val())
                var parrafo_introductorio = $("#Input_primer_parrafo").val();
                var parrafo_intro_html = $("<p id='parrafo_introductorio' class='mt-3'></p>").text(parrafo_introductorio);  
                $("#texto_de_editor").append(titulo_html);
                $("#texto_de_editor").append(texto); //Muestro el objeto en un div
                $("#texto_de_editor").addClass("border");
                $("#texto_de_editor img").after(parrafo_fecha);
                $("#parrafo_fecha").after(parrafo_intro_html);
                $("#area_a_ocultar").hide();
                var string = $("#texto_de_editor").parent().html();
                $("img").addClass("justify-content-center")
                $("#string_html").text(string);
         
					});

         
          

          $("#boton2").click(function(){
  					
					$("#texto_de_editor").empty(); //Muestro el objeto en un div

					});

          $("#boton_etiquetas").click(function(){
  					
            $("#etiquetas").append($("#Input_etiquetas").val()).append(" "); //Muestro el objeto en un div

            });

            $("#boton_etiquetas_limpiar").click(function(){
  					
            $("#etiquetas").empty(); //Muestro el objeto en un div
              
            });
					
          
          $("#boton6").click(function(){
  					
            $("#area_a_ocultar").show(); //Muestro el objeto en un div
  
            });

          $("#boton3").click(function(){
  					
            CKEDITOR.instances['editor1'].setData('<button type="button" >Primary</button>');//Muestro el objeto en un div
  
            });
            });

		
	// Cargar los titulos de las entradas guardadas en la BD
            
                // Enviar un ajax a un php y ejecutar con el objeto de retorno, la carga de los titulos

                $(document).ready(function(){
                
                    $("#opciones_titulo").load("php/carga_titulos_entradas.php");

                      });
                // Esto se hace una vez, cuando cargue el documento
    // Si se elige cargar una entrada existente, cargarla desde la BD

    
    $(document).ready(function(){
                
        $("#boton_cargar").click(function(){
  					
           //Muestro el objeto en un div
  
            });

          });
                // enviar un ajax a un php , par que cargue en los campos, la entrada de blog


    // Guardar en la BD, la entrada, bien sea guardar o publicar
            // Para guardar /publicar, se debe tener en cuenta:
            $(document).ready(function(){
                

                $("#boton_cargar").click(function(){

                  var titulos_db = $("#opciones_titulo").val();
                  var titulo = $("#Input_titulo").val();
                  var fecha = $("#Input_fecha").val();
                  var autor = $("#Input_autor").val();
                  var temas = $("#selec_temas_blog").val();
                  var parrafo_introductorio = $("#Input_primer_parrafo").val();
                  var etiquetas = $("#Input_etiquetas").val();
                  
                  $.ajax({
                    // la URL para la petición
                    url : 'php/carga_blog.php',
                 
                    // la información a enviar
                    // (también es posible utilizar una cadena de datos)
                    // El valor de la derecha, es el valor de jscript (jquery)
                    // El valor de la izquierda es el nombre de la variable POST
                    data : { 
                            titulos_db : titulos_db ,
                            titulo :  titulo , 
                            titulo_html : titulo_html ,
                            fecha : fecha ,
                            fecha_html : parrafo_fecha ,
                            autor : autor ,
                            autor_html : autor_html ,
                            temas : temas ,
                            parrafo_intro_html : parafo_intro_html ,
                            parrafo_intro : parrafo_intro ,  
                            etiquetas : etiquetas ,
                            id_boton_ver_mas : id_boton_ver_mas 
                                            
                            },
                 
                    // especifica si será una petición POST o GET
                    type : 'POST',
                 
                    // el tipo de información que se espera de respuesta
                    dataType : 'json',
                 
                    // código a ejecutar si la petición es satisfactoria;
                    // la respuesta es pasada como argumento a la función
                    success : function(json) {
                                
                        $("#etiqueta_exito_fallo").append("entrada agregada a la BD");
                       
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
                  console.log(titulos_db);
                 // alert(titulo);
                   //Muestro el objeto en un div
          
                    });
        
                  });
                // Verificar si la entrada existe, y reemplazarla
                //Si la entrada no existe, guardarla y/o publicarla

