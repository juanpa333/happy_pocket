<?php
 date_default_timezone_set("America/Bogota");

 //$servername = "localhost";  // Host del servidor donde está alojada la base de datos
 //$username = "gomezjp"; // Usuario creado en la base de datos del servidor
 //$password = "4upratos3";
 //$dbname = "i7730950_wp2"; 
 

 $servername = "localhost";  // Host del servidor donde está alojada la base de datos
$username = "root"; // Usuario creado en la base de datos del servidor
$password = "";
$dbname = "i7730950_wp2"; 

$conn = new mysqli($servername, $username, $password, $dbname);


mysqli_set_charset($conn, "utf8mb4"); //muy necesario para tildes, eñes

if($conn->connect_error) {
    die("Fallo conexion: " . $conn_error);
}
 
if(isset($_GET['titulo'])){
  $_titulo = $_GET['titulo'];
  $sql = "SELECT id, entrada_completa FROM blog WHERE titulo = '$_titulo'";
  $sql_featurette = "SELECT estado, featurette FROM blog WHERE titulo <> '$_titulo' ORDER by fecha DESC";
  $result = $conn->query($sql);
  $result_featurettes = $conn->query($sql_featurette);

  $string_resultado=""; // Se inicializa el string
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        $string_resultado.=$row["entrada_completa"]; // Se concatena el string con cada resultado de la DB
      }
$_contador_featurettes = 0;
  $string_featurette=""; // Se inicializa el string
if ($result_featurettes->num_rows > 0){
    while($row_f = $result_featurettes->fetch_assoc()) {
      
       if($row_f["estado"] == "Publicada"){
        $_contador_featurettes += 1;
        if ($_contador_featurettes < 6){
        $string_featurette.=$row_f["featurette"]."<br>"; // Se concatena el string con cada resultado de la DB
        }
       }
    }
      
  }
}
}

if(isset($_GET['etiqueta'])){
 
  $_etiqueta = $_GET['etiqueta'];
 // $sql = "SELECT id, entrada_comprimida FROM blog WHERE etiquetas LIKE '$_etiqueta'";
 $sql = "SELECT id, entrada_comprimida, etiquetas FROM blog ORDER BY fecha DESC";
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
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/style_hp.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>
          <?php
            if(isset($_GET['titulo'])){
              $_titulo_title = ($_GET['titulo']);
              echo  $_titulo_title;
            
            //  unset($_GET['titulo']);
            }else{echo "Blog - Happy Pocket";}
          ?>
    </title>
  
    <link rel="icon" type="image/png" href="recursos/icono.png">
    <link href="css/carousel.css" rel="stylesheet">
    <script src="js/blog_dinamico.js"></script>
    <script src="js/scripts.js"></script>
    
    <!-- Custom styles for this template -->
   
  </head>
  <body>

  
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



  
 
<div class="container my-5">
 
          <div id="entradas_comprimidas" class="">
  
                <span class="row justify-content-center text-align " id="entradas_comprimidas_seccion_interna"></span>
         
                
              </div>
             
   
  </div>

 
  <div class="container mb-5">
 
          <div id="entradas_por_tema" class="">
  
                <span class="row justify-content-center text-align" id="entradas_por_tema_seccion_interna">

                  <?php

                      if(isset($_GET['tema'])){
                        $_tema = $_GET['tema'];
                        $sql = "SELECT id, entrada_comprimida, estado FROM blog WHERE tema = '$_tema' ORDER by fecha DESC";

                      }

                      $result = $conn->query($sql);


                      $string_entradas_comprimidas=""; // Se inicializa el string
                      if ($result->num_rows > 0){
                          while($row = $result->fetch_assoc()) {
                              if ($row['estado'] == "Publicada"){
                              $string_entradas_comprimidas.=$row["entrada_comprimida"]; // Se concatena el string con cada resultado de la DB
                            }
                          }
                      }
                      echo $string_entradas_comprimidas;
                     // $json = array("articulos_comprimidos"=>$string_entradas_comprimidas);

                    //  echo json_encode($json);
 
                    $conn = null;
                  
                  ?>

                </span>
              
         </div>
   
  </div>
  
  <div class="container mb-5">
 
      <div id="entrada_palabras_clave" class="">

            <span class="row justify-content-center text-align" id="entrada_palabras_clave_seccion_interna">
            
            <?php
 
               
                if(isset($_GET['etiqueta'])){
                  echo '<script>$("#entradas_comprimidas").hide()</script>';
                  echo '<script>$("#entradas_por_tema").hide()</script>';
                 // echo '<script>$("#entrada_palabras_clave").hide()</script>';
                  echo '<script>$("#entrada_seleccionada").hide()</script>';
                echo '<script>$("#entrada_palabras_clave").show()</script>';
                  echo $string_resultado;
                 // unset($_GET['etiqueta']);
                 $conn = null;
                }

              ?>
            
            
          
            </span>
      
      </div>

  </div>


<div id="entrada_seleccionada" class="">
  <div >
    <div class="row">
      
            <div class="col ms-5 ps-3" id="entrada_seleccionada_seccion_interna">
              <?php

               
                if(isset($_GET['titulo'])){
             //     $_titulo_title = $_GET['titulo'];
                  echo '<script>$("#entradas_comprimidas").hide()</script>';
                  echo '<script>$("#entradas_por_tema").hide()</script>';
                  echo '<script>$("#entrada_palabras_clave").hide()</script>';
                  echo '<script>$("#entrada_seleccionada").show()</script>';
               //   $cadena_titulo = '<script>$("head title").text('.$_titulo_title.')</script>';
                //  echo $cadena_titulo;
                  echo $string_resultado;
                //  unset($_GET['titulo']);

                echo '
                <!-- AddToAny BEGIN -->
                <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                <a class="a2a_button_facebook"></a>
                <a class="a2a_button_twitter"></a>
                <a class="a2a_button_email"></a>
                <a class="a2a_button_whatsapp"></a>
                <a class="a2a_button_linkedin"></a>
                </div>
                <script async src="https://static.addtoany.com/menu/page.js"></script>
                <!-- AddToAny END -->
                  ';

                }
                $conn = null;
              ?>
              
            </div>
           

      <div id="featurettes" class="col-md-3 d-none d-md-block bg-light  me-3">
        <div id="featurettes_seccion_interna">
                        
                    <?php

                                      
                        if(isset($_GET['titulo'])){
                          echo '<script>$("#entradas_comprimidas").hide()</script>';
                          echo '<script>$("#entradas_por_tema").hide()</script>';
                          echo '<script>$("#entrada_palabras_clave").hide()</script>';
                          echo '<script>$("#featurettes").show()</script>';
                          echo $string_featurette;
                        
                        //  unset($_GET['titulo']);
                        $conn = null;
                     
                        }


                  ?>



        
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
