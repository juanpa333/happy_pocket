<?php
//header('Content-type: application/json');//with header Content type 
//$_POST['nombre']= 'juanca';
//$_POST['email'] = "info@happypocket.com.co";
date_default_timezone_set("America/Bogota");

$_fecha = date("d/m/Y h:i:s a");
$_nombre = $_POST['nombre'];
$_email = $_POST['email'];
// $_recurso = $_POST['recurso'];
$_empresas_servicio_interes = $_POST['empresas_servicio_interes'];
$_celular = $_POST['celular'];
$_comentarios = $_POST['comentarios'];



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




try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO empresas (servicio_interes, nombre, correo,  celular, comentarios, fecha) VALUES ('$_empresas_servicio_interes','$_nombre', '$_email',  '$_celular' , '$_comentarios' , '$_fecha' )";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;
?>