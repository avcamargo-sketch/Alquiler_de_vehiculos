<?php
require_once __DIR__ . '/../includes/conexion.php';
$result = mysqli_query($conn, "SELECT * FROM vehiculos");
if (!$result) {
    die("Error en la consulta de vehículos: " . mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Vehículos</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
<?php
echo "<h1>Listado de Vehículos</h1>";
echo "<table border='1'>
        <tr><th>ID</th><th>Marca</th><th>Modelo</th><th>Año</th><th>Categoría</th><th>Estado</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['marca']}</td>
            <td>{$row['modelo']}</td>
            <td>{$row['anio']}</td>
            <td>{$row['categoria']}</td>
            <td>{$row['estado']}</td>
          </tr>";
}
echo "</table>";
echo "<br><br><a href='../index.php' class='boton-volver'>Volver al menú principal</a>";
?>
</body>
</html>
