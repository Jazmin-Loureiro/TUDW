<?php
class Login {
    //atributos
    private $nombreU;
    private $contra;
    private $fraseContra;
    private $contra1;
    private $contra2;
    private $contra3;
    private $contra4;

    //metodos
    public function __construct($nU, $c, $fC, $c1, $c2, $c3, $c4) {
        $this -> nombreU = $nU; 
        $this -> contra = $c;
        $this -> fraseContra = $fC;
        $this -> contra1 = $c1;
        $this -> contra2 = $c2;
        $this -> contra3 = $c3;
        $this -> contra4 = $c4;
 }

    public function getNombreU () {
        return $this -> nombreU;
    }

    public function getContra() {
        return $this -> contra;
    }

    public function getFraseContra() {
        return $this -> fraseContra;
    }

    public function getContra1() {
        return $this -> contra1;
    }

    public function getContra2() {
        return $this -> contra2;
    }

    public function getContra3() {
        return $this -> contra3;
    }

    public function getContra4() {
        return $this -> contra4;
    }

    public function setNombreU($nuevoN) {
        $this -> nombreU = $nuevoN;
    }

    public function setContra($nuevaC) {
        $this -> contra = $nuevaC;
    }

    public function setFraseContra($nuevaF) {
        $this -> fraseContra = $nuevaF;
    }

    public function setContra1($nuevaC1) {
        $this -> contra1 = $nuevaC1;
    }

    public function setContra2($nuevaC2) {
        $this -> contra2 = $nuevaC2;
    }

    public function setContra3($nuevaC3) {
        $this -> contra3 = $nuevaC3;
    }

    public function setContra4($nuevaC4) {
        $this -> contra4 = $nuevaC4;
    }

    //metodo para validar contrasenia
    public function validar() {
        echo "Ingrese su contrasenia: ";
        $contrasenia = trim(fgets(STDIN));
        if ($this -> getContra() == $contrasenia) {
            echo "Contrasenia correcta";
        }
        else {
            while ($this -> getContra() <> $contrasenia) {
                echo "Contrasenia incorrecta, vuelva a ingresarla: ";
                $contrasenia = trim(fgets(STDIN));
            }
            echo "Contrasenia correcta";
        }
    }

    //metodo para cambiar la contrasenia actual
    public function cambiarContra() {
        echo "Para realizar el cambio de contrasenia primero ingrese su contrasenia actual: ";
        $aContra = trim(fgets(STDIN));
        if ($aContra == $this -> getContra()) {
            echo "Ahora ingrese la nueva contrasenia: ";
            $nContra = trim(fgets(STDIN));
        }
        else {
            while ($aContra <> $this -> getContra()) {
                echo "Contrasenia ingreada incorrecta. Ingrese correctamente su contrasenia actual: ";
                $aContra = trim(fgets(STDIN));
            }
            echo "Correcto, ahora ingrese la nueva contrasenia: ";
            $nContra = trim(fgets(STDIN));
        }
        
        if ($this -> getContra1() <> $nContra && $this -> getContra2() <> $nContra && $this -> getContra3() <> $nContra && $this -> getContra4() <> $nContra && $aContra <> $nContra) {
            $this -> setContra($nContra);
            $this -> setContra4($this -> getContra3());
            $this -> setContra3($this -> getContra2());
            $this -> setContra2($this -> getContra1());
            $this -> setContra1($aContra);
            echo "Cambio de contrasenia exitoso.";
        }
        else {
            while ($this -> getContra1() == $nContra || $this -> getContra2() == $nContra || $this -> getContra3() == $nContra || $this -> getContra4() == $nContra || $aContra == $nContra) {
            echo "La nueva contrasenia es igual a alguna de las ultimas cuatro utilizadas o a la actual. Ingrese una diferente: ";
            $nContra = trim(fgets(STDIN));
            }
            $this -> setContra($nContra);
            $this -> setContra4($this -> getContra3());
            $this -> setContra3($this -> getContra2());
            $this -> setContra2($this -> getContra1());
            $this -> setContra1($aContra);
            echo "Cambio de contrasenia exitoso.";
        }
    }
    public function recordar() {
        return "su frase para recordar su contrasenia es: " . $this -> getFraseContra();
    }

    public function __toString() {
        return  "(" . $this -> getNombreU() . "," . $this -> getContra() . "," . $this -> getFraseContra() . "," . $this -> getContra1() . "," . $this -> getContra2() . "," . $this -> getContra3() . "," . $this -> getContra4() . ")";
    }

}