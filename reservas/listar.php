<?php
include("../includes/conexion.php");

$sql = "SELECT r.id, c.nombre AS cliente, v.marca, v.modelo, r.fecha_inicio, r.fecha_fin, r.estado
        FROM reservas r
        JOIN clientes c ON r.cliente_id = c.id
        JOIN vehiculos v ON r.vehiculo_id = v.id";

$result = mysqli_query($conn, $sql);

echo "<h1>Historial de Reservas</h1>";
echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Cliente</th>
            <th>Vehículo</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Estado</th>
        </tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['cliente']}</td>
            <td>{$row['marca']} {$row['modelo']}</td>
            <td>{$row['fecha_inicio']}</td>
            <td>{$row['fecha_fin']}</td>
            <td>{$row['estado']}</td>
          </tr>";
}
echo "</table>";
echo "<br><br><a href='../index.php' class='boton-volver'>Volver al menú principal</a>";
?>
