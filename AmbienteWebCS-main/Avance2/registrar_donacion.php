<?php
include 'db_config.php';

$nombre_donante = $_POST['nombre_donante'];
$alimento = $_POST['alimento'];
$cantidad = $_POST['cantidad'];
$punto_recoleccion = $_POST['punto_recoleccion'];
$fecha = date("Y-m-d");

$sql = "INSERT INTO donaciones (nombre_donante, alimento, cantidad, fecha, punto_recoleccion)
        VALUES ('$nombre_donante', '$alimento', '$cantidad', '$fecha', '$punto_recoleccion')";

if ($conn->query($sql) === TRUE) {
    echo "Donación registrada con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>