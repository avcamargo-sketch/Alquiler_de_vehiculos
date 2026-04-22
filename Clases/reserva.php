<?php
class Reserva {
    private $id;
    private $cliente;
    private $vehiculo;
    private $fechaInicio;
    private $fechaFin;
    private $estado;

    public function __construct($cliente, $vehiculo, $fechaInicio, $fechaFin, $estado = "activa") {
        $this->cliente = $cliente;
        $this->vehiculo = $vehiculo;
        $this->fechaInicio = $fechaInicio;
        $this->fechaFin = $fechaFin;
        $this->estado = $estado;
    }

    public function getVehiculo() { return $this->vehiculo; }
    public function getCliente() { return $this->cliente; }
}
?>
