<?php
//header('Content-type: application/json');//with header Content type 
//$_POST['nombre']= 'juanca';
//$_POST['email'] = "info@happypocket.com.co";
date_default_timezone_set("America/Bogota");
//header('Content-Type: text/html; charset=utf-8');
header("Content-Type: application/json; charset=utf-8"); //Muy necesario para tildes, eñes

$_id = $_POST['id'];
$_titulo = $_POST['titulo'];
$_fecha = $_POST['fecha'];
$_autor = $_POST['autor'];
$_estado = $_POST['estado'];
$_tema = $_POST['tema'];
//$parrafo_introductorio = $_POST['parrafo_intro'];
$_etiquetas = $_POST['etiquetas'];
$_entrada_comprimida = $_POST['entrada_comprimida'];
$_entrada_completa = $_POST['entrada_completa'];
$_texto_editor_html = $_POST['texto_editor_html'];
$_featurette = $_POST['featurette'];



//$servername = "173.201.185.75";  // Host del servidor donde está alojada la base de datos
//$username = "gomezjp"; // Usuario creado en la base de datos del servidor
//$password = "4upratos3";
//$dbname = "i7730950_wp2";

$servername = "localhost";  // Host del servidor donde está alojada la base de datos
$username = "root"; // Usuario creado en la base de datos del servidor
$password = "";
$dbname = "i7730950_wp2"; 


// se hace la consulta a la base de datos

$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8mb4"); //muy necesario para tildes, eñes

if($conn->connect_error) {
    die("Fallo conexion: " . $conn_error);
    
}



$query_consulta_existencia = "SELECT * FROM blog WHERE id = '$_id'";

$resultado_existencia_titulo = $conn->query($query_consulta_existencia);
if ($resultado_existencia_titulo->num_rows > 0){

  $query_modificar_registro_entrada = "UPDATE blog SET titulo = '$_titulo' , entrada_comprimida = '$_entrada_comprimida', entrada_completa = '$_entrada_completa', fecha = '$_fecha', autor = '$_autor', estado = '$_estado', tema = '$_tema', etiquetas = '$_etiquetas', texto_editor_html = '$_texto_editor_html' , featurette = '$_featurette'  WHERE id = '$_id'";

       $conn->query($query_modificar_registro_entrada);
  // Se debe alterar el registro
} else{
$sql = "INSERT INTO blog (titulo, entrada_comprimida, entrada_completa, fecha, autor, estado, tema, etiquetas, texto_editor_html, featurette)
               VALUES (  '$_titulo', '$_entrada_comprimida' , '$_entrada_completa', '$_fecha' , '$_autor', '$_estado' ,  '$_tema' ,
                        '$_etiquetas' , '$_texto_editor_html' ,  '$_featurette')";

$conn->query($sql);
}


//$json = array("articulos_comprimidos"=>$string_resultado);

//echo json_encode($json);
 
// Mientras haya datos, se meten en un string +=


  
  $conn = null;
?>