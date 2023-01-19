<?php
//datos de conexión
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "AccesoUsuarios";
// Creamos la conexión
$conn = new mysqli($servername, $username, $password, $dbname);
// Comprobamos la conexión
if ($conn->connect_error) {
    die("-- Conexión fallida: " . $conn->connect_error);
}
echo "-- Conexión correcta"."<br>";

//

$user = $_POST["user"];
$pass = $_POST["password"];
$date = date('y/m/d');

$sql = "SELECT * FROM usuarios WHERE usuario = '$user'";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    echo "-- Error al insertar: el usuario ya existe.";
} else {
    $sql = "INSERT INTO usuarios (usuario, contraseña, fecha) VALUES ('$user', '$pass', '$date')";
    if ($conn->query($sql) === TRUE) {
        echo "-- Insert realizado con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

?>