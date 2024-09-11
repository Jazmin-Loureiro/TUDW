<?php
class Control_Ej2 {
    private $suma;

    public function __construct() {
        $this->suma = 0;
    }

    public function getSuma() {
        return $this->suma;
    }

    public function setSuma($suma) {
        $this->suma = $suma;
    }

    public function calcularHoras($datos) {
        $suma =  $this->suma;
        foreach ($datos as $horas => $hora) {
            $suma += $hora; 
        }
        return $suma;
    }
}
?>
