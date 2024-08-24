<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Propiedades</title>
</head>
<body>
    <h1>Lista de Propiedades</h1>
    <table>
        <tr>
            <th>Tipo</th>
            <th>Ubicación</th>
            <th>Precio</th>
            <th>Ambientes</th>
        </tr>
        <?php foreach ($propiedades as $propiedad): ?>
        <tr>
            <td><?php echo htmlspecialchars($propiedad['tipo']); ?></td>
            <td><?php echo htmlspecialchars($propiedad['ubicacion']); ?></td>
            <td><?php echo htmlspecialchars($propiedad['precio']); ?></td>
            <td><?php echo htmlspecialchars($propiedad['ambientes']); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="index.php">Volver a Inicio</a>
</body>
</html>
