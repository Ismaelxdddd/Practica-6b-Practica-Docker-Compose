<?php
$servername = "db";
$username = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');
$dbname = getenv('MYSQL_DATABASE');

// Crear conexi�n
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexi�n
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to the database!<br>";

echo "Hola Mundo!";
?>
