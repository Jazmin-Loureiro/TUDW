<?php
class Calculadora { 
   //atributos
    private $num1;
    private $num2;
    private $operacion;

    //metodos
    public function __construct ($numA, $numB, $operacionCal) {
        $this -> num1 = $numA;
        $this -> num2 = $numB;
        $this -> operacion = $operacionCal;
    }

    public function getNum1() {
        return $this -> num1;
    }

    public function getNum2() {
        return $this -> num2;
    }

    public function getOperacion() {
        return $this -> operacion;
    }

    public function setNum1($nuevoNum1) {
        $this -> num1 = $nuevoNum1;
    }

    public function setNum2($nuevoNum2) {
        $this -> num2 = $nuevoNum2;
    }

    public function setOperacion($nuevaOpe) {
        $this -> operacion = $nuevaOpe;
    }

    public function operaciones($num1, $num2, $operacion) {
        if ($this -> getOperacion() == "+") {
            $resultado = $this -> getNum1() + $this -> getNum2();
        }
        elseif ($this -> getOperacion() == "-") {
            $resultado = $this -> getNum1() - $this -> getNum2();
        }
        elseif ($this -> getOperacion() == "*") {
            $resultado = $this -> getNum1() * $this -> getNum2();
        }
        elseif ($this -> getOperacion() == "/") {
            $resultado = $this -> getNum1() / $this -> getNum2();
        }
        return $resultado;
    }
    
    public function __toString() {
        return "(".$this -> getNum1().",".$this -> getNum2().") \n";
    }
}