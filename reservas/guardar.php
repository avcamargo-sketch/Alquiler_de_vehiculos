<?php
require_once __DIR__ . '/../includes/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cliente_id = $_POST['cliente_id'];
    $vehiculo_id = $_POST['vehiculo_id'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $fecha_fin = $_POST['fecha_fin'];


    $sql = "INSERT INTO reservas (cliente_id, vehiculo_id, fecha_inicio, fecha_fin)
            VALUES ('$cliente_id', '$vehiculo_id', '$fecha_inicio', '$fecha_fin')";

    if (mysqli_query($conn, $sql)) {
        if (!mysqli_query($conn, "UPDATE vehiculos SET estado='alquilado' WHERE id='$vehiculo_id'")) {
            die("Error al actualizar estado del vehículo: " . mysqli_error($conn));
        }
        echo "Reserva creada correctamente ✅";
    } else {
        echo "Error al crear reserva: " . mysqli_error($conn);
    }
}
?>
