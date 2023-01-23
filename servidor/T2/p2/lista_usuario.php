<?php
//datos de conexión
$servername = "localhost";
$username = "testuser";
$password = "testpassword";
$dbname = "test";
// Creamos la conexión
$conn = new mysqli($servername, $username, $password, $dbname);
// Comprobamos la conexión
if ($conn->connect_error) {
    die("--" . $conn->connect_error);
}
echo "--connected"."<br>";

//

$nombre = $_POST["filtroNombre"];
$mail = $_POST["filtroMail"];

if ($nombre != "" && $mail != "") {
    $select = "SELECT * FROM usuarios WHERE nombre = '$nombre' AND mail = '$mail'";
} elseif ($nombre != "" && $mail == "") {
    $select = "SELECT * FROM usuarios WHERE nombre = '$nombre'";
} elseif ($nombre == "" && $mail != "") {
    $select = "SELECT * FROM usuarios WHERE mail = '$mail'";
} else {
    $select = "SELECT * FROM usuarios";
}

$result = $conn->query($select);

if($result->num_rows > 0) {
    echo "<br><br>";
    while ($row = $result->fetch_assoc()){
        echo "<br>" . $row["id"] . " - " . $row["nombre"] . " - " . $row["mail"] . "<br>";
    }
}
  
$conn->close();

?>