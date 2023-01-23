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

//

$sql = "DELETE FROM usuarios";
$result = $conn->query($sql);

echo "registros borrados con exito.";

$conn->close();

?>