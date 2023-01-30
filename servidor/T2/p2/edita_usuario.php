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

$nombre = $_POST["editaNombre"];
$mail = $_POST["editaMail"];

$update = "UPDATE usuarios SET mail='$mail' WHERE nombre='$nombre'";

if ($conn->query($insert) === TRUE) {
    echo "--update succesfull";
} else {
    echo "--error: " . $conn->error;
}

$select = "SELECT * FROM usuarios";
$result = $conn->query($select);

if($result->num_rows > 0) {
    echo "<br><br>";
    while ($row = $result->fetch_assoc()){
        echo "<br>" . $row["id"] . " - " . $row["nombre"] . " - " . $row["mail"] . "<br>";
    }
}
  
$conn->close();

?>