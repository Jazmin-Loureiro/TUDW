<?php
class Calculadora { 
    private $num1;
    private $num2;

    public function __construct ($numA, $numB) {
        $this -> num1 = $numA;
        $this -> num2 = $numB;
    }

    public function getNum1() {
        return $this -> num1;
    }

    public function getNum2() {
        return $this -> num2;
    }

    public function setNum1($nuevoNum1) {
        return $this -> num1 = $nuevoNum1;
    }

    public function setNum2($nuevoNum2) {
        return $this -> num2 = $nuevoNum2;
    }

    public function sumar () {
        $resultado = $this-> getNum1() + $this-> getNum2();
        return $resultado;
    }
    
    public function restar () {
        $resultado = $this-> getNum1() - $this-> getNum2();
        return $resultado;
    }

    public function multiplicar () {
        $resultado = $this-> getNum1() * $this-> getNum2();
        return $resultado;
    }

    public function dividir () {
        $resultado = $this-> getNum1() / $this-> getNum2();
        return $resultado;
    }

    public function __toString() {
        return "(".$this -> getNum1().",".$this -> getNum2().") \n";
    }
}