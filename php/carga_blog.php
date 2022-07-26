<?php

date_default_timezone_set("America/Bogota");

header("Content-Type: application/json;charset=utf-8"); //Muy necesario para tildes, eñes

$servername = "localhost";
//$servername = "173.201.185.75";  // Host del servidor donde está alojada la base de datos
$username = "root"; // Usuario creado en la base de datos del servidor
$password = "";
$dbname = "i7730950_wp2"; 


// se hace la consulta a la base de datos

$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8"); //muy necesario para tildes, eñes

if($conn->connect_error) {
    die("Fallo conexion: " . $conn_error);
}

if(isset($_POST['tema'])){
  $_tema = $_POST['tema'];
  $sql = "SELECT id, entrada_comprimida, estado FROM blog WHERE tema = '$_tema' ORDER by fecha DESC";

} else {$sql = "SELECT id, entrada_comprimida, estado FROM blog ORDER by fecha DESC";}

$result = $conn->query($sql);


$string_entradas_comprimidas=""; // Se inicializa el string
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        if ($row['estado'] == "Publicada"){
        $string_entradas_comprimidas.=$row["entrada_comprimida"]; // Se concatena el string con cada resultado de la DB
      }
    }
}

//$_v_footer = file_get_contents('../footer.php');
//$string_entradas_comprimidas .= $_v_footer;
//echo $string_resultado;
$json = array("articulos_comprimidos"=>$string_entradas_comprimidas);

echo json_encode($json);
 
// Mientras haya datos, se meten en un string +=


  
  $conn = null;
?>