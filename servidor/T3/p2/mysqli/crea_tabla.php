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

$sql = "CREATE TABLE usuarios (
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
nombre VARCHAR(25) NOT NULL,
mail VARCHAR(50) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "--table created successfully";
} else {
    echo "--error creating table: " . $conn->error;
}
  
$conn->close();

?>