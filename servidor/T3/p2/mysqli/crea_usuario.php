<?php
require_once("Alumno.php");

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

$alumnos = [];

$nombre = $_POST["nombre"];
$mail = $_POST["mail"];

$insert = "INSERT INTO usuarios (nombre, mail) VALUES ('$nombre', '$mail')";

if ($conn->query($insert) === TRUE) {
    echo "--insert succesfull";
} else {
    echo "--error: " . $conn->error;
}

$select = "SELECT * FROM usuarios";
$result = $conn->query($select);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        array_push($alumnos, new Alumno($row["id"], $row["nombre"], $row["mail"]));
    }
} else {
    echo "0 results";
}

echo "<br><br>";

foreach ($alumnos as $alumno) {
    echo $alumno->pinta_alumno() . "<br>";
}

  
$conn->close();

?>