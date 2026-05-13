<?php
$host = "localhost";
$usuario = "root";
$clave = ""; // pon tu contraseña si la tiene
$bd = "alquiler_vehiculos_db";
$puerto = 3306; // este es el puerto correcto

$conn = mysqli_connect($host, $usuario, $clave, $bd, $puerto);

if (!$conn) {
    die("❌ Error de conexión: (" . mysqli_connect_errno() . ") " . mysqli_connect_error());
} else {
    echo "✅ Conexión exitosa a la base de datos.";
}
?>
