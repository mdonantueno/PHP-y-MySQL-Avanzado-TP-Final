<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <form action="index.php?url=login" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <input type="submit" value="Iniciar Sesión">
    </form>
    <?php if (isset($error)): ?>
    <p><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>
</body>
</html>
