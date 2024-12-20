<?php
include 'includes/db_config.php';
if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $sql = "DELETE FROM recetas WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        $mensaje = "Receta eliminada con éxito";
    } else {
        $mensaje = "Error: " . $conn->error;
    }
} else {
    $mensaje = "ID no especificado.";
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Receta</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <a href="recetas.html" class="back-link">← Volver a recetas</a>
    </header>
    <h2><?php echo htmlspecialchars($mensaje); ?></h2>
</body>
</html>
