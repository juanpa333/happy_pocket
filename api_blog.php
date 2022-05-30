

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/style_hp.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <title>API blog</title>
    <link rel="icon" type="image/png" href="recursos/icono.png">
    <link href="css/carousel.css" rel="stylesheet">
    <script src="ckeditor/ckeditor.js"></script>
    <script src="ckfinder/ckfinder.js"></script>
    
    
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
     <div class="row d-flex justify-content-center">
              
            <div style="height: 35px" class="mb-4"></div>
           
            <textarea  class="my-5" name="" id="editor1" cols="" rows=""></textarea>
           
            <script type="text/javascript">
              //  ClassicEditor.create(document.getElementById("editor1"));
                window.onload = function(){
                    editor = CKEDITOR.replace("editor1", {
                    width :1000,
                    height:200
                    });
                    CKFinder.setupCKEditor(editor, 'http://localhost/jp/happy_pocket/ckfinder')
                }
            </script>
            <script>
$(document).ready(function(){
		$("#boton").click(function(){
  					var texto = CKEDITOR.instances['editor1'].getData(); // Esta linea guarda el objeto que está en el editor
					$("#texto_de_editor").append(texto); //Muestro el objeto en un div

					});



          $("#boton2").click(function(){
  					
					$("#texto_de_editor").empty(); //Muestro el objeto en un div

					});
					});

		
		</script>
	<div class=" d-flex flex-row justify-content-center ">
  <button id="boton"  class="btn btn-primary my-5 mx-2" type="submit">Preview</button>
  <button id="boton2"  class="btn btn-primary my-5 mx-2 " type="submit">Limpiar</button>
  </div>
	<div id="texto_de_editor" class="my-5"></div>
           
    
        </div><!-- /.container -->


    <?php
    require "footer.php";
    ?>
  
  </body>
</html>