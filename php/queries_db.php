<?php
//header('Content-type: application/json');//with header Content type 
//$_POST['nombre']= 'juanca';
//$_POST['email'] = "info@happypocket.com.co";

$_nombre = $_POST['nombre'];
$_email = $_POST['email'];


$conn_string = "host=ec2-18-211-97-89.compute-1.amazonaws.com port=5432 dbname=dagobu2l7p43v6 user=peietnvrlphjjl password=a565e2b1f143f82a8d0c83a69612dc7ca2bc22124cb400df0e9fafa9c859ad36";
$dbconn = pg_connect($conn_string);

// if ($dbconn) {echo "conectado a DB";}

$result = pg_query($dbconn, "INSERT INTO newsletter(nombre, email) VALUES ( '$_nombre', '$_email')");

// insertar registro de newsletter (Nombre, correo)


pg_close($dbconn);
?>