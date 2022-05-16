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
    <title>Blog -  Happy Pocket</title>
    <link rel="icon" type="image/png" href="recursos/icono.png">
    <link href="css/carousel.css" rel="stylesheet">
    
    
    <!-- Custom styles for this template -->
   
  </head>
  <body style="margin-bottom: 0cm;padding-bottom: 0cm; ">


   <?php
   require "barra_sup_moviles.php";
   require "logo_navbar_sup.php";
   ?>


<div class="row bg-light" style="height: 120px">
  
</div>

<?php
require "pildoras.php";
?>


<!--Empiezan Artículos del blog-->


<div class="container mb-5">
  <div class="row justify-content-center text-align">
    
     


    <div class="col-md-6 mb-3 " id="articulo_2">
      <center><img src="recursos/salud_financiera.jpg" alt="" class="img-fluid mt-3 "></center>
       <p class="mx-3">
        31 de Marzo - 2022
       </p>
       <h3 class="mx-3" >
          MEJORA TU CONDICIÓN FINANCIERA CON UN CONSEJERO FINANCIERO       </h3>
        <p class="mx-3">
          Si cuando quieres mejorar tu condición física, piensas en ejercicio, dieta y entrenador, cuándo quieres mejorar tu condición financiera, ¿en qué herramientas piensas?        </p>
        <div class="row justify-content-end">
          <div class="col-3">
        <a type="button" class="btn btn-primary mb-2"  href="mejora-tu-condicion-financiera-con-un-consejero-financiero.html">Ver más</a>
         </div>
       </div>
     </div>

   </div>
</div>


  <?php
  require "footer.php";
  ?>
  </body>
</html>