<?php
$_titulo_seleccionado = $_POST['titulo_seleccionado'];

date_default_timezone_set("America/Bogota");
//header('Content-Type: text/html; charset=utf-8');
header("Content-Type: application/json;charset=utf-8"); //Muy necesario para tildes, eñes


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
$sql = "SELECT id, titulo, entrada_comprimida, entrada_completa, fecha, autor, estado, tema, etiquetas, texto_editor_html FROM blog WHERE titulo = '$_titulo_seleccionado' ";
$result = $conn->query($sql);


$string_entradas_comprimidas=""; // Se inicializa el string
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        $res_id = $row['id'];
        $res_titulo = $row["titulo"]; // Se concatena el string con cada resultado de la DB
        $res_entrada_comprimida = $row["entrada_comprimida"];
        $res_entrada_completa = $row["entrada_completa"];
        $res_fecha = $row["fecha"];
        $res_autor = $row["autor"];
        $res_estado = $row["estado"];
        $res_tema = $row["tema"];
        $res_etiquetas = $row["etiquetas"];
        $res_texto_editor_html = $row["texto_editor_html"];

        

      }
}
//echo $string_resultado;
$json = array("id"=>$res_id , "titulo"=>$res_titulo , "entrada_comprimida"=>$res_entrada_comprimida, 
                "entrada_completa"=>$res_entrada_completa, "fecha"=>$res_fecha , "autor"=>$res_autor,
                "estado"=>$res_estado, "tema"=>$res_tema, "etiquetas"=>$res_etiquetas , "texto_editor_html"=>$res_texto_editor_html);

echo json_encode($json);
 
// Mientras haya datos, se meten en un string +=


  
  $conn = null;
?>