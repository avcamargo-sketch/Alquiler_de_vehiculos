<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Cliente</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>Registrar Cliente</h1>
    <form action="guardar.php" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label>Teléfono:</label>
        <input type="text" name="telefono"><br><br>

        <label>Correo:</label>
        <input type="email" name="correo"><br><br>

        <label>Número de Licencia:</label>
        <input type="text" name="numero_licencia" required><br><br>

        <button type="submit">Registrar</button>
    </form>
 <br><br>
    <a href="../index.php" class="boton-volver">Volver al menú principal</a>
</body>
</html>

