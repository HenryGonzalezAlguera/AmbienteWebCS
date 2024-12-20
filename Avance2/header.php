<header>
    <nav>
        <a href="index.php">Inicio</a>
        <a href="recetas.php">Recetas</a>
        <a href="donacion.php">Donaciones</a>
        <?php if (isset($_SESSION['usuario_id'])): ?>
            <a href="logout.php">Cerrar Sesión</a>
        <?php else: ?>
            <a href="login.php">Iniciar Sesión</a>
        <?php endif; ?>
    </nav>
</header>
