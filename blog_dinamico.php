<?php
 date_default_timezone_set("America/Bogota");

 $servername = "173.201.185.75";  // Host del servidor donde está alojada la base de datos
 $username = "gomezjp"; // Usuario creado en la base de datos del servidor
 $password = "4upratos3";
 $dbname = "i7730950_wp2"; 
 $conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8"); //muy necesario para tildes, eñes

if($conn->connect_error) {
    die("Fallo conexion: " . $conn_error);
}
 
if(isset($_GET['titulo'])){
  $_titulo = $_GET['titulo'];
  $sql = "SELECT id, entrada_completa FROM blog WHERE titulo = '$_titulo'";
  $result = $conn->query($sql);

  $string_resultado=""; // Se inicializa el string
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        $string_resultado.=$row["entrada_completa"]; // Se concatena el string con cada resultado de la DB
      }
}
}

if(isset($_GET['etiqueta'])){
 
  $_etiqueta = $_GET['etiqueta'];
 // $sql = "SELECT id, entrada_comprimida FROM blog WHERE etiquetas LIKE '$_etiqueta'";
 $sql = "SELECT id, entrada_comprimida, etiquetas FROM blog";
  $result = $conn->query($sql);

  $string_resultado=""; // Se inicializa el string
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
      $str = $row["etiquetas"];
      $pattern = "/".$_etiqueta."/i";
        if((preg_match($pattern, $str)) == 1){
        $string_resultado.=$row["entrada_comprimida"]; // Se concatena el string con cada resultado de la DB
      }
    }
}
}

 
// $sql = "SELECT id, entrada_completa FROM blog WHERE titulo = '$_titulo'";
// $result = $conn->query($sql);





 
?>


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
    <script src="js/blog_dinamico.js"></script>
    
    
    <!-- Custom styles for this template -->
   
  </head>
  <body style="margin-bottom: 0cm;padding-bottom: 0cm;" >

  
   <?php
   require "barra_sup_moviles.php";
   ?>
 
 <?php
    require "logo_navbar_sup.php";
    ?>

<div class="row bg-light" style="height: 120px">
  
</div>

<?php
require "pildoras.php";
?>




<!--Empiezan Artículos del blog-->



  
 
<div class="container mb-5">
 
          <div id="entradas_comprimidas" class="">
  
                <span class="row justify-content-center text-align border" id="entradas_comprimidas_seccion_interna">Entradas comprimidas</span>
         </div>
   
  </div>


  <div class="container mb-5">
 
          <div id="entradas_por_tema" class="border">
  
                <span class="row justify-content-center text-align border" id="entradas_por_tema_seccion_interna">Entradas por tema</span>
         </div>
   
  </div>
  
  <div class="container mb-5">
 
      <div id="entrada_palabras_clave" class="border">

            <span class="row justify-content-center text-align border" id="entrada_palabras_clave_seccion_interna">
              
            <?php

               
                if(isset($_GET['etiqueta'])){
                  echo '<script>$("#entradas_comprimidas").hide()</script>';
                  echo '<script>$("#entradas_por_tema").hide()</script>';
                 // echo '<script>$("#entrada_palabras_clave").hide()</script>';
                  echo '<script>$("#entrada_seleccionada").hide()</script>';
                echo '<script>$("#entrada_palabras_clave").show()</script>';
                  echo $string_resultado;
                  unset($_GET['etiqueta']);
                }

              ?>
            
            Entradas por palabras clave
          
            </span>
      
      </div>

  </div>


<div id="entrada_seleccionada" class="border">
  <div >
    <div class="row">
      <div class="col-1"></div>
            <div class="col" id="entrada_seleccionada_seccion_interna">
              <?php

               
                if(isset($_GET['titulo'])){
                  echo '<script>$("#entradas_comprimidas").hide()</script>';
                  echo '<script>$("#entradas_por_tema").hide()</script>';
                  echo '<script>$("#entrada_palabras_clave").hide()</script>';
                  echo '<script>$("#entrada_seleccionada").show()</script>';
                  echo $string_resultado;
                  unset($_GET['titulo']);
                }

              ?>
              Entrada Seleccionada
            </div>
      <div id="featurettes" class="col-3 border">Featurettes</div>
    </div>
  </div>
</div>
 







  <?php
  require "footer.php";
  ?>
    
    

    </script>
  </body>
</html>