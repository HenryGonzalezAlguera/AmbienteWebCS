<?php
$servername = "localhost";
$username = "root"; 
$password = "admin1234";
$database = "reduccion_desperdicio";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
