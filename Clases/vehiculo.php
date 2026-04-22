<?php
class Vehiculo {
    private $id;
    private $marca;
    private $modelo;
    private $anio;
    private $categoria;
    private $estado;

    public function __construct($marca, $modelo, $anio, $categoria, $estado = "disponible") {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->anio = $anio;
        $this->categoria = $categoria;
        $this->estado = $estado;
    }

    public function getMarca() { return $this->marca; }
    public function getModelo() { return $this->modelo; }
    public function getEstado() { return $this->estado; }
    public function setEstado($estado) { $this->estado = $estado; }
}
?>
