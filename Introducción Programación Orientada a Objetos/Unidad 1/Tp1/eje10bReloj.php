<?php
class Reloj {
    //atributos
    private $hora;
    private $minutos;
    private $segundos;

    //metodos
    public function __construct($hr, $min, $seg) {
        $this -> hora = $hr;
        $this -> minutos = $min;
        $this -> segundos = $seg;
    }

    public function getHora() {
        return $this -> hora; 
    }

    public function getMinutos() {
        return $this -> minutos;
    }

    public function getSegundos() {
        return $this -> segundos;
    }

    public function setHora($nuevaHora) {
        $this -> hora = $nuevaHora;
    }

    public function setMinutos($nuevosMin) {
        $this -> minutos = $nuevosMin;
    }

    public function setSegundos($nuevosSeg) {
        $this -> segundos = $nuevosSeg;
    }

    public function __toString() {
        return "Hora: " . $this -> getHora() . ":" . $this -> getMinutos() . ":" . $this -> getSegundos();
    }

    public function puestaACero() {
        $this -> setHora(0);
        $this -> setMinutos(0);
        $this -> setSegundos(0);
        return "Hora: " . $this -> getHora() . ":" . $this -> getMinutos() . ":" . $this -> getSegundos();
    }

    public function incremento() {
        
        $segs = $this -> getSegundos();
        $mins = $this -> getMinutos();
        $hrs = $this -> getHora();
        
        if ($this -> getSegundos() < 59) {
            $segs = $segs + 1;
            $this -> setSegundos($segs);
        }
        elseif ($this -> getSegundos() == 59) {
            $this -> setSegundos(00);
            if ($this -> getMinutos() < 59) {
                $mins = $mins + 1;
                $this -> setMinutos($mins);
            }
            else {
                $this -> setMinutos(00);
                if ($this -> getHora() < 23) {
                    $hrs = $hrs + 1;
                    $this -> setHora($hrs);
                }
                else {
                    $this -> setHora(00);
                }
            }
        }
        return "Hora: " . $this -> getHora() . ":" . $this -> getMinutos() . ":" . $this -> getSegundos();
    }
}