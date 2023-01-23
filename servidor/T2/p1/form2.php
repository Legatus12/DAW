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

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()){
        echo "<br>" . $row["usuario"] . " - " . $row["contraseña"] . " - " . $row["fecha"] . "<br>";
    }
}
else{
    echo "-- 0 resultados.";
}

$conn->close();

?>