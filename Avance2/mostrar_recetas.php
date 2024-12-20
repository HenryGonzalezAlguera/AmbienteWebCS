<?php
include 'includes/db_config.php';

$sql = "SELECT nombre, instrucciones FROM recetas";
$result = $conn->query($sql);
?>



