<?php
class Cliente {
    private $id;
    private $nombre;
    private $telefono;
    private $correo;
    private $licencia;

    public function __construct($nombre, $telefono, $correo, $licencia) {
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->correo = $correo;
        $this->licencia = $licencia;
    }

    public function getNombre() { return $this->nombre; }
}
?>



