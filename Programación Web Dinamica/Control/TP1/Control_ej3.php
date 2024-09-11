<?php
class Control_Ej3 {
    private $resp;
    private $nombre;
    private $apellido;
    private $edad;
    private $direccion;

    public function __construct() {
        $this->resp = "";
        $this->nombre = "";
        $this->apellido = "";
        $this->edad = "";
        $this->direccion = "";
    }

    public function getResp() {
        return $this->resp;
    }
    public function setResp($resp) {
        $this->resp = $resp;
    }

    public function getNombre() {
        return $this->nombre;
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }
    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function getEdad() {
        return $this->edad;
    }
    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function getDireccion() {
        return $this->direccion;
    }
    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }


    public function mostrarMensaje($datos) {
        $this->nombre=$datos["nombre"];
        $this->apellido=$datos["apellido"];
        $this->edad=$datos["edad"];
        $this->direccion=$datos["direccion"];
        $this->resp= "Hola yo soy ".$this->nombre." ".$this->apellido." tengo ".$this->edad." años y vivo en ".$this->direccion;
        return  $this->resp;
    }
}
?>
