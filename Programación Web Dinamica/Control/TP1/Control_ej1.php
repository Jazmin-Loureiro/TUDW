<?php
class control_ej1 {
    private $numero; 
    private $valor;

    public function __construct() {
        $this->numero = 0;
        $this->valor = "";
    }
    
    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }


    public function verificarNumero($datos) {
        $this->numero=$datos["numero"];
        if ($this->numero > 0) {
            $this->valor= "positivo";
        } elseif ($this->numero < 0) {
            $this->valor= "negativo";
        } else {
            $this->valor= "cero";
        }
        return $this->valor;
    }
}
?>