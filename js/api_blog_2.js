
               const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
               const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
               
               window.onload = function(){
                editor = CKEDITOR.replace("editor1", {
                width :1000,
                height:200
                });
                CKFinder.setupCKEditor(editor, 'http://localhost/jp/happy_pocket/ckeditor4/ckfinder')
            } 


           

                var titulo
                var input_fecha
                var tema 
                var autor
                var etiquetas
                var string_preview_comprimido_html
                var entrada_completa
                var titulo_seleccionado
                var texto_editor_html
                var estado
                var href_entrada
                var preview_entrada


       
          $(document).ready(function(){

            preview_entrada = $("#preview_entrada").html()
              
              $("#texto_editor_preview").hide()
              $("#texto_editor_html").hide()


              $("#boton_preview").click(function(){
                $("#preview_entrada").empty()
                $("#preview_entrada").prepend(preview_entrada)
             texto_editor_html = CKEDITOR.instances['editor1'].getData(); // Esta linea guarda el objeto que está en el editor
           /*  $("#titulo_entrada").text("")
             $("#titulo_entrada_comprimida").text("")
             $("[data-titulo]").attr("data-titulo", "")
             $("#boton_entrada_comprimida").attr("href", "")
             $("#fecha_entrada").text("");
             $("#fecha_entrada_comprimida").text("");
             $("#tema_entrada").text("");
             $("#autor_entrada").text("");
             $("#etiquetas_entrada").text("");
             $("#imagen_entrada").attr("src", "");
             $("#imagen_entrada_comprimida").attr("src", "");
             $("#parrafo_intro_entrada").text("");
             $("#parrafo_entrada_comprimida").text("");
             $("#parrafo_intro_entrada").text("")
             // $("#cuerpo_principal_entrada").empty();
            // $("#cuerpo_principal_entrada").prepend($("#conjunto_parrafos_preview").html());
           
            */

             titulo_seleccionado = $("#opciones_titulo").val()
          //  $("#texto_editor_html").text(texto_editor_html);
          $("#texto_editor_preview").empty()
            $("#texto_editor_preview").prepend(texto_editor_html);

             titulo = $("#Input_titulo").val()
             //   console.log("titulo : " + titulo)
                $("#titulo_entrada").text(titulo)
                $("#titulo_entrada_comprimida").text(titulo)
                $("[data-titulo]").attr("data-titulo", titulo)
                href_entrada = "blog_dinamico.php?titulo=" + titulo 
                $("#boton_entrada_comprimida").attr("href", href_entrada)

                input_fecha = $("#Input_fecha").val();
                console.log("input_fecha :" + input_fecha);

                const fecha = new Date($("#Input_fecha").val());
                console.log("Fecha to datestring : " + fecha.toDateString());
                console.log("Fecha UTC : " + fecha.toUTCString());
            
                var dia = "";
                if(fecha.getUTCDay()== 1) {dia = "lunes"};
                if(fecha.getUTCDay()== 2) {dia = "martes"};
                if(fecha.getUTCDay()== 3) {dia = "miercoles"};
                if(fecha.getUTCDay()== 4) {dia = "jueves"};
                if(fecha.getUTCDay()== 5) {dia = "viernes"};
                if(fecha.getUTCDay()== 6) {dia = "sábado"};
                if(fecha.getUTCDay()== 0) {dia = "domingo"}
                console.log("Dia : " + dia);

                var mes = "";
                if(fecha.getMonth() == 0) {mes = "enero"};
                if(fecha.getMonth() == 1) {mes = "febrero"};
                if(fecha.getMonth() == 2) {mes = "marzo"};
                if(fecha.getMonth() == 3) {mes = "abril"};
                if(fecha.getMonth() == 4) {mes = "mayo"};
                if(fecha.getMonth() == 5) {mes = "junio"};
                if(fecha.getMonth() == 6) {mes = "julio"};
                if(fecha.getMonth() == 7) {mes = "agosto"};
                if(fecha.getMonth() == 8) {mes = "septiembre"};
                if(fecha.getMonth() == 9) {mes = "octubre"};
                if(fecha.getMonth() == 10) {mes = "noviembre"};
                if(fecha.getMonth() == 11) {mes = "diciembre"};
                console.log("mes: " + mes);
                
                var fecha_entrada = dia + ", " + fecha.getUTCDate() + " de " + mes + " de " + fecha.getFullYear() ;
                var fecha_entrada_comprimida = fecha.getUTCDate() + " de " + mes + " de " + fecha.getFullYear() ;
                $("#fecha_entrada").text(fecha_entrada);
                $("#fecha_entrada_comprimida").text(fecha_entrada_comprimida);


              tema = $("#selec_temas_blog").val();
                console.log("Tema blog : " + tema);
                $("#tema_entrada").text(tema);


             autor = $("#Input_autor").val();
                console.log("Autor: " + autor);
                $("#autor_entrada").text(" " + autor);

            
             etiquetas = $("#Input_etiquetas").val();
                console.log("Etiquetas: " + etiquetas);
                $("#etiquetas_entrada").text(etiquetas);

            var url_img = $(texto_editor_html).find("img").attr("src");
               
                console.log("url img: " + url_img);
                $("#imagen_entrada").attr("src", url_img);
                $("#imagen_entrada_comprimida").attr("src", url_img);

            var parrafo_intro = $("#texto_editor_preview p").eq(1).text();
            console.log("parrafo intro: " + parrafo_intro); 

                $("#texto_editor_preview p").not("p:first")
                $("#parrafo_intro_entrada").text(parrafo_intro);
                $("#parrafo_entrada_comprimida").text(parrafo_intro);

             string_preview_comprimido_html = $("#preview_entrada_comprimida").html();
            console.log("Preview ent comprimida: " + string_preview_comprimido_html);


                $("#texto_editor_preview p img").parent().attr("id", "parrafo_imagen_preview");
             //   $("#texto_editor_preview p img").parent().empty();

                $("#texto_editor_preview p").eq(1).attr("id", "parrafo_intro_preview");
              //  $("#texto_editor_preview p").eq(1).empty();
           // var cuerpo_principal = $(texto_editor_html).first("p").next().nextAll().html();
          //  var cuerpo_principal = $("#texto_editor_preview p img").nextAll().html();
           // console.log("cuerpo principal: " + cuerpo_principal)
               
          //  $("#cuerpo_principal_entrada").html(cuerpo_principal);
             $("#parrafo_intro_preview").nextAll().attr("class", "parrafos_siguientes_preview"); 
             $(".parrafos_siguientes_preview").wrapAll("<div id='conjunto_parrafos_preview'></div>");
               
               console.log("Texto editor HTML: " + $("#texto_editor_preview").html());
               $("#texto_editor_html").text($("#texto_editor_preview").html());
              //  console.log("texto sin p img: " + texto_editor_html);
              $("#parrafo_intro_entrada").text($("#parrafo_intro_preview").text())
              $("#cuerpo_principal_entrada").empty();
              $("#cuerpo_principal_entrada").prepend($("#conjunto_parrafos_preview").html());

               entrada_completa = $("#preview_entrada").html();

               // Crear un div en el dom , para entrada_editor_carga, manipularlo, guardarlo en BD

               $("body").append("<div id='preview_editor_carga'></div>")
               //  $("#preview_editor_carga").hide()

                 console.log("Preview editor de carga: " + $("#preview_editor_carga").html())
                
                console.log("Entrada completa: " + entrada_completa)
     
                });
              });
     
               
              

      $("#boton_etiquetas").click(function(){
                  
        $("#etiquetas").append($("#Input_etiquetas").val()).append(" "); //Muestro el objeto en un div

        });

        $("#boton_etiquetas_limpiar").click(function(){
                  
        $("#etiquetas").empty(); 
          
        });
                
      
      $("#boton6").click(function(){
                  
        $("#area_a_ocultar").show(); 

        });

        $(document).ready(function(){
        $("#boton_insertar").click(function(){
                  
        CKEDITOR.instances['editor1'].setData('<a type="button" class="btn btn-primary" >Primary</a>');//Muestro el objeto en un div

        });
      })

    
// Cargar los titulos de las entradas guardadas en la BD
        
            // Enviar un ajax a un php y ejecutar con el objeto de retorno, la carga de los titulos

            $(document).ready(function(){
            
                $("#opciones_titulo").load("php/carga_titulos_entradas.php");

                  });


              
            // Esto se hace una vez, cuando cargue el documento
// Si se elige cargar una entrada existente, cargarla desde la BD

                  // cargar los titulos en la lista, cuando el mouse ingrese al div
            
                  $(document).ready(function(){
            
                    $("#boton_refresca_titulos").click(function(){
                      $("#opciones_titulo").load("php/carga_titulos_entradas.php")

                      $("#boton_limpiar").click()
                        })
    
                      });
                
            // enviar un ajax a un php , par que cargue en los campos, la entrada de blog


// Guardar en la BD, la entrada, bien sea guardar o publicar
        // Para guardar /publicar, se debe tener en cuenta:
        $(document).ready(function(){
            

            $("").click(function(){

              var titulos_db = $("#opciones_titulo").val();
              var titulo = $("#Input_titulo").val();
              var fecha = $("#Input_fecha").val();
              var autor = $("#Input_autor").val();
              var temas = $("#selec_temas_blog").val();
              var parrafo_introductorio = $("#Input_primer_parrafo").val();
              var etiquetas = $("#Input_etiquetas").val();
              
              $.ajax({
                // la URL para la petición
                url : 'php/ingreso_entradas_blog.php',
             
                // la información a enviar
                // (también es posible utilizar una cadena de datos)
                // El valor de la derecha, es el valor de jscript (jquery)
                // El valor de la izquierda es el nombre de la variable POST
                data : { 
                        
                        titulo :  titulo , 
                        fecha : fecha ,
                        autor : autor ,
                        tema : tema ,
                        parrafo_intro : parrafo_intro ,  
                        etiquetas : etiquetas 
                        
                                                              
                        },
             
                // especifica si será una petición POST o GET
                type : 'POST',
             
                // el tipo de información que se espera de respuesta
                dataType : 'json',
             
                // código a ejecutar si la petición es satisfactoria;
                // la respuesta es pasada como argumento a la función
                success : function(json) {
                            
                    console.log("Entrada ingresada a la BD")
                   
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

            $(document).ready(function(){
              $("#boton_guardar").click(function(){

             //   $("#boton_preview").click()
                
                if ($("#check_borrador").prop("checked") == true) {

                  estado = "Borrador"

                } else { estado = "Publicada"}



                $.post("php/ingreso_entradas_blog.php",
                {
                    id : $("#Input_id").attr("value") , 
                    titulo : titulo,
                    fecha : input_fecha, 
                    autor : autor,
                    tema : tema, 
                    etiquetas : etiquetas,
                    entrada_comprimida : string_preview_comprimido_html, 
                    entrada_completa : entrada_completa, 
                    texto_editor_html : texto_editor_html,
                    estado : estado
                    
                    
                  
                },
                function(data,status){
                  $("#principal").show();
                  alert("Data: " + data + "\nStatus: " + status);
                });
              });
            });  






            $(document).ready(function(){
              $("#boton_cargar").click(function(){
                $.post("php/carga_entradas_edicion.php",
                {
                    titulo_seleccionado : $("#opciones_titulo").val()
                    
                  
                },
                function(data,status){
                  $("#Input_id").attr("value", data.id)
                  $("#Input_titulo").val(data.titulo)
                  $("#Input_fecha").val(data.fecha)
                  $("#Input_autor").val(data.autor)
                  $("#selec_temas_blog").val(data.tema)
                  $("#Input_etiquetas").val(data.etiquetas)
                  console.log("fecha recuperada de la DB:" +  data.fecha)
                  $(data.entrada_completa).remove("img")
                  if (data.estado == "Borrador") {
                    $("#estado_entrada").removeClass("bg-danger")
                  $("#estado_entrada").removeClass("bg-success")
                  $("#estado_entrada").addClass("bg-danger")
                    
                  }

                  if (data.estado == "Publicada") {
                    $("#estado_entrada").removeClass("bg-danger")
                  $("#estado_entrada").removeClass("bg-success")
                  $("#estado_entrada").addClass("bg-success")
                    
                  }


                  $("#estado_entrada").attr("value", data.estado)
                
                 

                  CKEDITOR.instances['editor1'].setData(data.texto_editor_html);//Muestro el objeto en un div

                });
              });
            });  


            $(document).ready(function(){
              $("#boton_limpiar").click(function(){

                $("#Input_id").attr("value", "")
                $("#Input_titulo").val("")
                $("#Input_fecha").val("")
                $("#Input_autor").val("")
                $("#Input_etiquetas").val("")
                CKEDITOR.instances['editor1'].setData("");
                $("#estado_entrada").removeClass("bg-danger")
                $("#estado_entrada").removeClass("bg-success")
                $("#estado_entrada").addClass("bg-secondary")
                $("#estado_entrada").attr("value","----")


              
              
             
              });
            });  


            
            $(document).ready(function(){
              $("#confirmar_eliminar_entrada").click(function(){
                $.post("php/elimine_entrada.php",
                {
                  titulo : $("#Input_titulo").val() ,  
                  elimine_entrada : "SI"
                                   
                },
                function(data,status){
                 
                });
              });
            });  



            $(document).ready(function(){
              $("body").click(function(){

                console.log("Check_borrador: " + $("#check_borrador").prop("checked"))
                console.log("Check_publicar: " + $("#check_publicar").prop("checked"))

              });
            });  