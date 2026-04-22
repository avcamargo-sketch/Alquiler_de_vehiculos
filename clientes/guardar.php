<?php
include("../includes/conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $numero_licencia = $_POST['numero_licencia'];

    $sql = "INSERT INTO clientes (nombre, telefono, correo, numero_licencia)
            VALUES ('$nombre', '$telefono', '$correo', '$numero_licencia')";

    if (mysqli_query($conn, $sql)) {
        echo "Cliente registrado correctamente ✅";
    } else {
        echo "Error al registrar cliente: " . mysqli_error($conn);
    }
}
?>
