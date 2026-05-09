<?php
require_once __DIR__ . '/../includes/conexion.php';

$clientes = mysqli_query($conn, "SELECT id, nombre FROM clientes");
if (!$clientes) {
    die("Error en la consulta de clientes: " . mysqli_error($conn));
}

$vehiculos = mysqli_query($conn, "SELECT id, marca, modelo FROM vehiculos WHERE estado='disponible'");
if (!$vehiculos) {
    die("Error en la consulta de vehículos: " . mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Reserva</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <h1>Crear Reserva</h1>
    <form action="guardar.php" method="POST">
        <label>Cliente:</label>
        <select name="cliente_id" required>
            <option value="">Seleccione un cliente</option>
            <?php while($c = mysqli_fetch_assoc($clientes)) {
                echo "<option value='{$c['id']}'>{$c['nombre']}</option>";
            } ?>
        </select><br><br>

        <label>Vehículo:</label>
        <select name="vehiculo_id" required>
            <option value="">Seleccione un vehículo</option>
            <?php while($v = mysqli_fetch_assoc($vehiculos)) {
                echo "<option value='{$v['id']}'>{$v['marca']} {$v['modelo']}</option>";
            } ?>
        </select><br><br>

        <label>Fecha Inicio:</label>
        <input type="date" name="fecha_inicio" required><br><br>

        <label>Fecha Fin:</label>
        <input type="date" name="fecha_fin" required><br><br>

        <button type="submit">Reservar</button>
    </form>
     <br><br>
    <a href="../index.php" class="boton-volver">Volver al menú principal</a>
</body>
</html>
