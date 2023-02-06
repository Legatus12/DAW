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

$user = $_POST["user"];
$passwd = $_POST["passwd"];

$select = "SELECT * FROM usuarios WHERE nombre = '$user'";
$result = $conn->query($select);

if($result->num_rows > 0) {
    echo "<br><br>";
    $row = $result->fetch_assoc();
    if($row["passwd"] == $passwd){
        header("Location: ./index.php");
        die();
    }
    else
        echo "--incorrect password";
}
else
    echo "--the user does not exist";
  
$conn->close();

?>