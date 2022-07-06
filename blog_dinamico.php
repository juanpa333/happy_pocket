<?php
 date_default_timezone_set("America/Bogota");
 //header("Content-Type: application/json;charset=utf-8"); //Muy necesario para tildes, eñes

if(isset($_GET['titulo'])){
  $_titulo = $_GET['titulo'];
}

 $servername = "173.201.185.75";  // Host del servidor donde está alojada la base de datos
 $username = "gomezjp"; // Usuario creado en la base de datos del servidor
 $password = "4upratos3";
 $dbname = "i7730950_wp2"; 
 $conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8"); //muy necesario para tildes, eñes

if($conn->connect_error) {
    die("Fallo conexion: " . $conn_error);
}
$sql = "SELECT id, entrada_completa FROM blog WHERE titulo = '$_titulo'";
$result = $conn->query($sql);


$string_resultado=""; // Se inicializa el string
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        $string_resultado.=$row["entrada_completa"]; // Se concatena el string con cada resultado de la DB
      }
}
//echo $string_resultado;
//$json = array("articulos_comprimidos"=>$string_resultado);

//echo json_encode($json);
 
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
  <div id="cuerpo_articulos" class="row justify-content-center text-align">
 </div>
</div>


<div id="entradas_comprimidas" class="border">
  <div >
    <div class="row">
      <div class="col-1"></div>
      <div class="col" id="entradas_comprimidas_seccion_interna">Entradas comprimidas</div>
      <div class="col-1"></div>
    </div>
  </div>
</div>

<div id="entradas_por_tema" class="border">
  <div >
    <div class="row">
      <div class="col-1"></div>
      <div class="col" id="entradas_por_tema_seccion_interna">Entradas por tema</div>
      <div class="col-1"></div>
    </div>
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
                echo '<script>$("#entrada_seleccionada").show()</script>';
                 echo $string_resultado;
                 unset($_GET['titulo']);
                }

               
               // echo "<br>hola desde php <br><br>";
               // echo '<script>$("body").click(function(){$("#entradas_por_tema").toggle()})</script>';
              ?>
              Entrada Seleccionada
            </div>
      <div id="featurettes" class="col-3 border">Featurettes</div>
    </div>
  </div>
</div>
 

<div id="entrada_palabras_clave">
  <div id="entrada_palabras_clave_seccion_interna">
    <div class="row">
      <div class="col"></div>
    </div>
  </div>
</div>



  <?php
  require "footer.php";
  ?>
    
    

    </script>
  </body>
</html>