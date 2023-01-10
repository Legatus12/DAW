<?php
//datos de conexión
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mibd";
// Creamos la conexión
$conn = new mysqli($servername, $username, $password, $dbname);
// Comprobamos la conexión
if ($conn->connect_error) {
 die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión correcta"."<br>";
// Realizamos la consulta SQL para extraer los datos
$sql = "SELECT nombre, apellidos, dni FROM clientes";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 // mostramos los resultados por filas
 while($row = $result->fetch_assoc()) {
 echo "dni: " . $row["dni"]. " - Nombre: " . $row["nombre"]. " " .
$row["apellidos"]. "<br>";
 }
} else {
 echo "0 results";
}
$conn->close();
?>