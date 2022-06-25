<?php
//header('Content-type: application/json');//with header Content type 
//$_POST['nombre']= 'juanca';
//$_POST['email'] = "info@happypocket.com.co";
date_default_timezone_set("America/Bogota");
//header('Content-Type: text/html; charset=utf-8');
header("Content-Type: application/json;charset=utf-8"); //Muy necesario para tildes, eñes
//$_col1 = $_POST['col1'];
//$_col2 = $_POST['col2'];




/*$conn_string = "host=ec2-18-211-97-89.compute-1.amazonaws.com port=5432 dbname=dagobu2l7p43v6 user=peietnvrlphjjl password=a565e2b1f143f82a8d0c83a69612dc7ca2bc22124cb400df0e9fafa9c859ad36";
$dbconn = pg_connect($conn_string);

// if ($dbconn) {echo "conectado a DB";}

$result = pg_query($dbconn, "INSERT INTO newsletter(nombre, email) VALUES ( '$_nombre', '$_email')");

// insertar registro de newsletter (Nombre, correo)


pg_close($dbconn); */

// PDO MySQL

$servername = "173.201.185.75";  // Host del servidor donde está alojada la base de datos
$username = "gomezjp"; // Usuario creado en la base de datos del servidor
$password = "4upratos3";
$dbname = "i7730950_wp2"; 


// se hace la consulta a la base de datos

$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8"); //muy necesario para tildes, eñes

if($conn->connect_error) {
    die("Fallo conexion: " . $conn_error);
}
$sql = "SELECT id,   entrada_comprimida FROM blog ORDER by fecha";
$result = $conn->query($sql);


$string_entradas_comprimidas=""; // Se inicializa el string
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        $string_entradas_comprimidas.=$row["entrada_comprimida"]; // Se concatena el string con cada resultado de la DB
      }
}
//echo $string_resultado;
$json = array("articulos_comprimidos"=>$string_entradas_comprimidas);

echo json_encode($json);
 
// Mientras haya datos, se meten en un string +=


  
  $conn = null;
?>