<?php
class control_ej8 {
    private $edad;
    private $estudiante;
    private $resultado;

    public function __construct() {
        $this->edad = 0;
        $this->estudiante = "";
        $this->resultado = 0;
    }

    public function getEdad() {
        return $this->edad;
    }
    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function getEstudiante() {
        return $this->estudiante;
    }
    public function setEstudiante($estudiante) {
        $this->estudiante = $estudiante;
    }

    public function getResultado() {
        return $this->resultado;
    }
    public function setResultado($resultado) {
        $this->resultado = $resultado;
    }

    public function validar($datos) {
        $this->edad = $datos["edad"];
        $this->estudiante = $datos["estudiante"];
        $this->resultado = 0;

        if ($this->edad <= 12 || $this->estudiante == "si") {
            $this->resultado = 160;
        } else {
            $this->resultado = 300;
        }
        // Si la edad es mayor a 12 y no es estudiante
        if ($this->edad > 12 && $this->estudiante != "no") {
            $this->resultado = 180;
        }
        return $this->resultado;       
    }
}
?>
