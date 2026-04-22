<?php
include("../includes/conexion.php");

$result = mysqli_query($conn, "SELECT * FROM clientes");

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

