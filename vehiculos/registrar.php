<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Vehículo</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>Registrar Vehículo</h1>
    <form action="guardar.php" method="POST">
        <label>Marca:</label>
        <input type="text" name="marca" required><br><br>

        <label>Modelo:</label>
        <input type="text" name="modelo" required><br><br>

        <label>Año:</label>
        <input type="number" name="anio" min="1900" max="2099" required><br><br>

        <label>Categoría:</label>
        <input type="text" name="categoria"><br><br>

        <button type="submit">Registrar</button>
    </form>
</body>
</html>
