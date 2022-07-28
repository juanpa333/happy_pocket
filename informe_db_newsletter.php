<!doctype html>
<html lang="en">
  <head>
  <?php  
    require "head.php";
    ?> 
  <body>


  <?php
    require "barra_sup_moviles.php";
    ?>

 
    <?php
    require "logo_navbar_sup.php";
    ?>

<div class="row" style="height: 120px">
  
</div>

<div class="container">
  <div class="row">
    <h4 class="text-center fw-bold">Informe de Base de datos "Newsletter"</h4>
<?php
$servername = "173.201.185.75";  // Host del servidor donde está alojada la base de datos
$username = "gomezjp"; // Usuario creado en la base de datos del servidor
$password = "4upratos3";
$dbname = "i7730950_wp2"; 

echo "<table class='table table-dark table-hover' style='border: solid 1px black;'>";
//echo "<tr><th>Id</th><th>Nombre</th><th>e-mail</th><th>Fecha</th><th>Recurso</th></tr>";
echo "<tr><th>Nombre</th><th>e-mail</th><th>Fecha</th><th>Recurso</th></tr>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}



try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT nombre, email, fecha, recurso FROM newsletter");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
</div>
</div>


<div>
  Informe DB Empresas
  <div>
  <?php
$servername = "173.201.185.75";  // Host del servidor donde está alojada la base de datos
$username = "gomezjp"; // Usuario creado en la base de datos del servidor
$password = "4upratos3";
$dbname = "i7730950_wp2"; 

echo "<table class='table table-dark table-hover' style='border: solid 1px black;'>";
//echo "<tr><th>Id</th><th>Nombre</th><th>e-mail</th><th>Fecha</th><th>Recurso</th></tr>";
echo "<tr><th>Servicio</th><th>Nombre</th><th>Correo</th><th>Celular</th><th>Comentarios</th><th>Fecha</th></tr>";

class TableRowsEmp extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}



try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT servicio_interes, nombre, correo, celular, comentarios, fecha FROM empresas");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRowsEmp(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
 

 <div >
  Informe DB Personas
  <div>
  <?php
$servername = "173.201.185.75";  // Host del servidor donde está alojada la base de datos
$username = "gomezjp"; // Usuario creado en la base de datos del servidor
$password = "4upratos3";
$dbname = "i7730950_wp2"; 

echo "<table class='table table-dark table-hover' style='border: solid 1px black;'>";
//echo "<tr><th>Id</th><th>Nombre</th><th>e-mail</th><th>Fecha</th><th>Recurso</th></tr>";
echo "<tr><th>Servicio</th><th>Nombre</th><th>Correo</th><th>Celular</th><th>Comentarios</th><th>Fecha</th></tr>";

class TableRowsPers extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}



try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT servicio_interes, nombre, correo, celular, comentarios, fecha FROM personas");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRowsPers(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>








  <?php
  require "footer.php";
  ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
      
    </script>
  </body>
</html>