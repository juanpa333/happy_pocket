<?php
//header('Content-type: application/json');//with header Content type 
$_titulo = $_POST['titulo'];
//$_POST['email'] = "info@happypocket.com.co";
date_default_timezone_set("America/Bogota");
//header('Content-Type: text/html; charset=utf-8');
header("Content-Type: application/json; charset=utf-8"); //Muy necesario para tildes, eñes

$servername = "localhost";  // Host del servidor donde está alojada la base de datos
$username = "root"; // Usuario creado en la base de datos del servidor
$password = "";
$dbname = "i7730950_wp2"; 


// se hace la consulta a la base de datos

$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8"); //muy necesario para tildes, eñes

if($conn->connect_error) {
    die("Fallo conexion: " . $conn_error);
    
}

if($_POST['elimine_entrada'] == 'SI'){

    $query_elimina_entrada = "DELETE FROM blog where titulo = '$_titulo'";
    $conn->query($query_elimina_entrada);
    
  }
  $conn = null;

?>