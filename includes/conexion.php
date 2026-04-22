<?php
$host = "localhost";
$usuario = "root";
$clave = "";
$bd = "alquiler_vehiculos_db";
$puerto = 3306;

$conn = mysqli_connect($host, $usuario, $clave, $bd, $puerto);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>