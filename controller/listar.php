<?php
require_once __DIR__ . '/../includes/conexion.php';

$result = mysqli_query($conn, "SELECT * FROM clientes");
if (!$result) {
    die("Error en la consulta: " . mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Clientes</title>
    <link rel="stylesheet" href="../views/estilo.css">
</head>
<body>
<?php
echo "<h1>Listado de Clientes</h1>";
echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Número de Licencia</th>
        </tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['nombre']}</td>
            <td>{$row['telefono']}</td>
            <td>{$row['correo']}</td>
            <td>{$row['numero_licencia']}</td>
          </tr>";
}
echo "</table>";
echo "<br><br><a href='../index.php' class='boton-volver'>Volver al menú principal</a>";
?>
</body>
</html>

