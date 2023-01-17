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
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión correcta"."<br>";
// Realizamos la consulta SQL para extraer los datos

$user = $_POST["user"];
$pass = $_POST["password"];
$date = date('d/m/y');

$sql = "SELECT * FROM usuarios WHERE usuario = '$user'";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    $sql = "INSERT INTO usuarios (usuario, contraseña, fecha) VALUES ('$user', '$pass', '$date')";
} else {
    echo "el usuario ya existe";
}

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>