
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
    <title>Blog -  Happy Pocket</title>
    <link rel="icon" type="image/png" href="recursos/icono.png">
    <link href="css/carousel.css" rel="stylesheet">
    <script src="js/carga_blog.js"></script>
    
    
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
  <div id="entrada_sola" class="row justify-content-center text-align">

    <div class="col-1">
    </div>

    <div class="col">
    <?php



$_titulo = $_GET['titulo'];
date_default_timezone_set("America/Bogota");
//header("Content-Type: application/json;charset=utf-8"); //Muy necesario para tildes, eñes
$servername = "173.201.185.75";  // Host del servidor donde está alojada la base de datos
$username = "gomezjp"; // Usuario creado en la base de datos del servidor
$password = "4upratos3";
$dbname = "i7730950_wp2"; 

$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8"); //muy necesario para tildes, eñes

if($conn->connect_error) {
    die("Fallo conexion: " . $conn_error);
}

$sql = "SELECT id, entrada_completa, estado FROM blog WHERE titulo = '$_titulo'";
$result = $conn->query($sql);

//$string_entradas_comprimidas=""; // Se inicializa el string

//echo $string_resultado;
//$json = array("articulos_comprimidos"=>$string_entradas_comprimidas);

//echo json_encode($json);
 
// Mientras haya datos, se meten en un string +=


  
  //$conn = null;




  
  //echo $_GET['titulo'];
  if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        if($row["estado"] == "Publicada"){
             echo $row["entrada_completa"]; // Se concatena el string con cada resultado de la DB
        }
       
      }
}


$conn = null;
  ?>

<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
 
  <a class="a2a_button_facebook"></a>
  <a class="a2a_button_email"></a>
  <a class="a2a_button_linkedin"></a>
  <a class="a2a_button_whatsapp"></a>
  </div>
  <script async src="https://static.addtoany.com/menu/page.js"></script>
  <!-- AddToAny END -->
    
</div>

<div class="col-1"></div>

    
    

  

  </div>
</div>



   
  <?php
  require "footer.php";
  ?>
    
    

    </script>
  </body>
</html>