<?php
include("includes/conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestor de Alquiler de Vehículos</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Gestor de Alquiler de Vehículos</h1>
    <p>Conectado a la base de datos correctamente ✅</p>

    <nav>
        <ul>
            <li><a href="vehiculos/registrar.php">Registrar Vehículo</a></li>
            <li><a href="vehiculos/listar.php">Listar Vehículos</a></li>
            <li><a href="clientes/registrar.php">Registrar Cliente</a></li>
            <li><a href="clientes/listar.php">Listar Clientes</a></li>
            <li><a href="reservas/registrar.php">Crear Reserva</a></li>
            <li><a href="reservas/listar.php">Historial de Reservas</a></li>
        </ul>
    </nav>
</body>
</html>