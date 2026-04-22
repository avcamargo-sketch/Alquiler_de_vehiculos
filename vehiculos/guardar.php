<?php
include("../includes/conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $anio = $_POST['anio'];
    $categoria = $_POST['categoria'];

    $sql = "INSERT INTO vehiculos (marca, modelo, anio, categoria) 
            VALUES ('$marca', '$modelo', '$anio', '$categoria')";

    if (mysqli_query($conn, $sql)) {
        echo "Vehículo registrado correctamente";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
