<?php
class control_ej7 {
    private $num1;
    private $num2;
    private $operacion;
    private $resultado;

    public function __construct() {
        $this->num1 = 0;
        $this->num2 = 0;
        $this->operacion = "";
        $this->resultado = 0;
    }

    public function getNum1() {
        return $this->num1;
    }
    public function setNum1($num1) {
        $this->num1 = $num1;
    }

    public function getNum2() {
        return $this->num2;
    }
    public function setNum2($num2) {
        $this->num2 = $num2;
    }

    public function getOperacion() {
        return $this->operacion;
    }
    public function setOperacion($operacion) {
        $this->operacion = $operacion;
    }

    public function getResultado() {
        return $this->resultado;
    }
    public function setResultado($resultado) {
        $this->resultado = $resultado;
    }

    public function operacion($datos) {
        $this->num1=$datos["operador1"];
        $this->num2=$datos["operador2"];
        $this->operacion=$datos["operacion"];
        $this->resultado=0;
        $operacion=$this->operacion;
        switch ($operacion) {
            case "Suma":
                $this->resultado=$this->num1+$this->num2;
                break;
            case "Resta":
                $this->resultado=$this->num1-$this->num2;
                break;
            case "Multiplicacion":
                $this->resultado=$this->num1*$this->num2;
                break;
        }
        return $this->resultado;       
    }
}
?>