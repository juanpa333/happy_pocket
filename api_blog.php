

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>

   
    <!--popper-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
   <!--  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>  -->
    

    <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <link href="css/style_hp.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <title>API blog</title>
    <link rel="icon" type="image/png" href="recursos/icono.png">
    <link href="css/carousel.css" rel="stylesheet">
    <script src="ckeditor4/ckeditor/ckeditor.js"></script>
    <script src="ckeditor4/ckfinder/ckfinder.js"></script>
    <!--<script src="js/api_blog.js"></script>-->
    <script src="js/api_blog_2.js"></script>
    
    
    
    <!-- Custom styles for this template -->
   
  </head>
    <body style="margin-bottom: 0ch;padding-bottom: 0cm; " >


    <?php
    require "barra_sup_moviles.php";
    ?>
            <?php
            require "logo_navbar_sup.php";
            ?>

     <div class="row" style="height: 70px"></div>
  <div class="container">
     <div class="row d-flex ">
              
            <div style="height: 35px" class="mb-4"></div>
          
            <div class="d-flex align-items-center my-4 gap-3" id="area_seleccion_titulos">
            <span class="input-group-text" id="boton_refresca_titulos" data-bs-toggle="tooltip" data-bs-placement="top" title="Click para volver a cargar títulos"><i class="bi bi-arrow-clockwise"></i></span>
                <select class="form-select  w-50" id="opciones_titulo" aria-label="Default select example">
                  <option id="item_seleccionado_titulo" selected>Editar entrada guardada</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              <div class=""><button id="boton_cargar"  class="btn btn-success mx-2 " type="button">Cargar entrada</button>
              
            <div class="vr"></div>
             
              <!-- Button trigger modal -->
<button type="button" class="btn btn-danger mx-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Eliminar entrada
</button>

</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content ">
      <div class="modal-header d-flex">
        <div class="col-3 ms-3"></div>
        <h5 class="fw-bold " id="exampleModalLabel">¡Confirmar acción!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center fw-bold text-warning bg-danger fs-5 ">
        ¿Está seguro que desea eliminar esta entrada?<br>
        <span class="text-light"> - No podrá deshacer esta acción - </span>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="button" id="confirmar_eliminar_entrada" class="btn btn-primary">
        <span class="spinner-border spinner-border-sm " role="status" aria-hidden="true"></span>
          <span class="visually-hidden">Loading...</span>  
        ELIMINAR ENTRADA</button>
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">CANCELAR</button>
      </div>
    </div>
  </div>
</div>
            
              </div>
            </div>
            <div id="area_a_ocultar">
            <div class="d-flex-row align-items-center justify-content-center mb-5 ">
            <div class="h3">Crear nueva entrada<button id="boton_limpiar"  class="btn btn-primary my-2 mx-2" type="submit">Limpiar</button></div>
           
            
 <div class="d-flex flex-row gap-3 mb-3 justify-items-center">           
            <div class="d-flex flex-column">
              
            <label class="mb-0 text-center">ID Entrada</label>
              <input id="Input_id" class="form-control py-0 mb-3 text-center fw-bold fs-5" style="width: 60px; height: 50px;" type="text" value="Id" aria-label="readonly input example" readonly>
              
            </div>  

          <div class="vr " style="height:80%"></div>
            <div class="d-flex flex-column">
              
              <label class="mb-0 text-center">Estado</label>
                <input id="estado_entrada" class="form-control py-0 mb-3 text-center fw-bold fs-5 bg-danger" style="width: 160px; height: 50px;" type="text" value="Borrador" aria-label="readonly input example" readonly>
                
              </div>  

</div>
           <div class="form-floating mb-3" style="width:700px;">
                
                  <input type="text" class="form-control" id="Input_titulo" placeholder="name@example.com">
                  <label for="floatingInput">Título</label>
                </div>
            
            <div class="form-floating mb-3" style="width:700px;">
              <input type="date" class="form-control" id="Input_fecha" placeholder="name@example.com">
              <label for="floatingInput">Fecha</label>
            </div>
            <div class="form-floating mb-3" style="width:700px;">
              <input type="text" class="form-control" id="Input_autor" placeholder="Password">
              <label for="floatingPassword">Autor</label>
            </div>

            <div id="temas_blog">
              <label>Temas del blog</label>
            <select class="form-select mb-3 w-50" id="selec_temas_blog" aria-label="Default select example">
              <option selected>Seleccione tema</option>
              <option value="Planeación Financiera">Planeación financiera</option>
              <option value="Consumidor Inteligente">Consumidor inteligente</option>
              <option value="Deudor Inteligente">Deudor inteligente</option>
              <option value="Inversionista Inteligente">Inversionista inteligente</option>
              <option value="Actualidad Económica y Financiera">Actualidad económica y financiera</option>
              <option value="Educación Financiera">Educación financiera</option>
            </select>
            </div>

            
              
             
            <div class="d-flex align-items-center">
            <div class="form-floating mb-3 me-3" style="width:700px;">
              <input type="text" class="form-control" id="Input_etiquetas" placeholder="Password">
              <label for="floatingPassword">Etiquetas</label>
              
           </div>
           
            </div>
              <div id="etiquetas"></div>
            </div>
            
            <p class="fw-bold ">Aquí podrá ingresar la imagen principal de la entrada y el texto principal</p>
                       
            <textarea  class="my-5" name="" id="editor1" cols="" rows=""></textarea>
            </div>


            

	<div class="d-flex flex-row justify-content-around">
  
  <button id="boton_preview" class="btn btn-primary my-5 mx-2" type="submit">Preview</button><br>

        
        <!--empieza check group-->
      <div class="d-flex flex-column justify-content-center">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              Default radio
            </label>
         </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
              Default checked radio
            </label>
        </div>
      </div>  
        <!--termina check group-->

  <button id="boton_guardar"  class="btn btn-warning my-5 mx-2" type="submit">Guardar y Publicar</button>
  
  
  </div>

  <div>
	<div id="preview_entrada" class="my-5">
  <div class="col" >
      <p class="fs-5 my-0" style="color: darkblue;" id="tema_entrada">Tema entrada</p> <!--Tema-->
      <h3 class="fw-bold" id="titulo_entrada"> <!--Titulo-->
        TITULO
      </h3>
     
      <img src="" alt="img" class="img-fluid mb-4" id="imagen_entrada"> <!--Imagen-->

      <div class="caja_fecha_completa_entrada ">
      <p class="fst-italic fs-6" >Creado el <span id="fecha_entrada"> -- de ---------- de ---- </span></p> <!--Fecha-->
      </div>
      <p class="fst-italic fs-6">por: <span id="autor_entrada"></span></p>

      <p class="fw-bold" id="parrafo_intro_entrada"> <!--Parrafo introductorio (Que se ve en el mosaico)--->
        parrafo intro
      </p>

        <div class=" d-flex justify-content-center mb-3">
        <button type="button" class="btn btn-primary boton_ver_mas " data-id-entrada="">Ver Más</button>
        </div>
      <div id="cuerpo_principal_entrada">
            
      </div>
    <p class="d-flex flex-column flex-md-row gap-2" id="etiquetas_entrada"> <a href="educacion-financiera-gratuita.html">#etiqueta</a></p> <!--Etiquetas-->
    <!-- AddToAny BEGIN -->
<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
 
  <a class="a2a_button_facebook"></a>
  <a class="a2a_button_email"></a>
  <a class="a2a_button_linkedin"></a>
  <a class="a2a_button_whatsapp"></a>
  </div>
  <script async src="https://static.addtoany.com/menu/page.js"></script>
  <!-- AddToAny END -->

      
    
    </div>
  </div>
  </div>
 <h1 class="">Texto Editor Preview</h1>
  <div id="texto_editor_preview"></div>
  
  <h1 class="">Texto editor html</h1>
  <div id="texto_editor_html" class="border"></div>
  
  <h3 class="text-danger my-3">Preview Entrada Comprimida</h3><hr>
  
  
  <div id="preview_entrada_comprimida">
 
  <div class="col-md-6 mb-3 "  id="html_comprimido_articulo_7">
      <h3 class="mx-1" id="titulo_entrada_comprimida" >
        TITULO
       </h3>
      <center><img src="" alt="" class="img-fluid mt-3 " id="imagen_entrada_comprimida"></center>
       <p class="mx-2 mt-2" id="fecha_entrada_comprimida">
        fecha
       </p>
       
        <p class="mx-2 fw-bold" id="parrafo_entrada_comprimida">
          parrafo entrada comprimida </p>
        <div class="row justify-content-end">
          <div class="col-3">
        <a type="button" id="boton_entrada_comprimida" class="btn btn-primary mb-2 " href="retos-de-informacion-que-enfrenta-un-inversionista.html" data-titulo="">Ver más</a>
         </div>
       </div>
     </div>
  
  </div>

    
        </div><!-- /.container -->


    <?php
    require "footer.php";
    ?>
  
  </body>
</html>