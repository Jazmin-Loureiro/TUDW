<?php
class Control_Ej4 {
    private $resp;
    private $nombre;
    private $apellido;
    private $edad;
    private $direccion;
    private $deportes; //array
    private $suma;

    public function __construct() {
        $this->resp = "";
        $this->nombre = "";
        $this->apellido = "";
        $this->edad = "";
        $this->direccion = "";
        $this->deportes = array();
        $this->suma = 0;
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

    public function getDeportes() {
        return $this->deportes;
    }

    public function setDeportes($deportes) {
        $this->deportes = $deportes;
    }

    public function getSuma() {
        return $this->suma;
    }

    public function setSuma($suma) {
        $this->suma = $suma;
    }

    

    public function calcularDeportes($datos) {
        $this->suma = 0;
        if (isset($datos['deportes'])) {
            $this->suma = count($datos['deportes']);
        }
        $this->nombre=$datos["nombre"];
        $this->apellido=$datos["apellido"];
        $this->edad=$datos["edad"];
        $this->direccion=$datos["direccion"];
        $this->resp= "Hola yo soy ".$this->nombre." ".$this->apellido." tengo ".$this->edad." años y vivo en ".$this->direccion.". Realizo ".$this->suma." deportes";

        return $this->resp;
    }
}
?>
