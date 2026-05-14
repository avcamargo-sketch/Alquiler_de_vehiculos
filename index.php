<?php
include("includes/conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestor de Alquiler de Vehículos</title>
    <link rel="stylesheet" href="css/estilo.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <h1>Gestor de Alquiler de Vehículos</h1>

    <nav>
        <ul>
            <li><a href="vehiculos/registrar.php"><i class="fas fa-car"></i> Registrar Vehículo</a></li>
      <li><a href="vehiculos/listar.php"><i class="fas fa-list"></i> Listar Vehículos</a></li>
      <li><a href="clientes/registrar.php"><i class="fas fa-user-plus"></i> Registrar Cliente</a></li>
      <li><a href="clientes/listar.php"><i class="fas fa-users"></i> Listar Clientes</a></li>
      <li><a href="reservas/registrar.php"><i class="fas fa-key"></i> Crear Reserva</a></li>
      <li><a href="reservas/listar.php"><i class="fas fa-history"></i> Historial de Reservas</a></li>
        </ul>
    </nav>
</body>
</html>