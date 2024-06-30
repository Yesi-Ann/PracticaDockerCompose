<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "Inicio de la ejecución del script PHP<br>";

$servername = "db";
$username = "testuser";
$password = "testpassword";
$dbname = "testdb";

echo "Intentando conectar a la base de datos...<br>";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa a la base de datos";
?>
