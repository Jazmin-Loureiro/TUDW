<?php
class Disquera{
    //atributos
    private $horaDesde;
    private $horaHasta;
    private $estado;
    private $direccion;
    private $duenio;

    /**
     * Metodo constructor, crea un objeto de la clase
     * @param array
     * @param array
     * @param string
     * @param string
     * @param object
     */
    public function __construct($hD, $hH, $est, $due, $dire) {
        $this -> horaDesde = $hD;
        $this -> horaHasta = $hH;
        $this -> estado = $est;
        $this -> duenio = $due;
        $this -> direccion = $dire;
    }

    /**
     * Muestra la hora desde que esta abierto.
     * @return array
     */
    public function getHoraDesde() {
        return $this -> horaDesde;
    }

    /**
     * Muestra la hora hasta la que esta abierto.
     * @return array
     */
    public function getHoraHasta() {
        return $this -> horaHasta;
    }

    /**
     * Muestra el estado de la tienda.
     * @return string
     */
    public function getEstado() {
        return $this -> estado;
    }

    /**
     * Muestra la direccion de la tienda.
     * @return string
     */
    public function getDireccion() {
        return $this -> direccion;
    }

    /**
     * Muestra los datos del duenio.
     * @return object
     */
    public function getDuenio() {
        return $this -> duenio;
    }

    /**
     * Permite modificar la hora desde que esta abierto.
     * @param array $nuevoHD
     */
    public function setHoraDesde($nuevoHD) {
        $this -> horaDesde = $nuevoHD;
    }

    /**
     * Permite modificar la hora hasta la que esta abierto.
     * @param array $nuevoHH
     */
    public function setHoraHasta($nuevoHH) {
        $this -> horaHasta = $nuevoHH;
    }

    /**
     * Permite modificar el estado de la tienda.
     * @param int $nuevoE
     */
    public function setEstado($nuevoE) {
        $this -> estado = $nuevoE;
    }

    /**
     * Permite modificar la direccion de la tienda.
     * @param int $nuevaDi
     */
    public function setDireccion($nuevaDi) {
        $this -> direccion = $nuevaDi;
    }

    /**
     * Permite modificar los datos del duenio.
     * @param object $nuevoD
     */
    public function setDuenio($nuevoD) {
        $this -> duenio = $nuevoD;
    }

    /**
     * Permite saber si el local esta abierto o no.
     * @param int $hora
     * @param int $minutos
     */
    public function dentroHorarioAtencion($hora, $minutos) {
        If (($hora >= $this -> getHoraDesde()["hora"]) && ($hora <= $this -> getHoraHasta()["hora"])) {
            If ($hora == $this -> getHoraDesde()["hora"]) {
                If ($minutos >= $this -> getHoraDesde()["minutos"]) {
                    $respuestaFinal = true;
                }
                else {
                    $respuestaFinal = false;
                }
            }
            elseif ($hora == $this -> getHoraHasta()["hora"]) {
                If ($minutos <= $this -> getHoraDesde()["minutos"]) {
                    $respuestaFinal = true;
                }
                else {
                    $respuestaFinal = false;
                }
            }
            else {
                $respuestaFinal = true;
            }
        }
        else {
            $respuestaFinal = false;
        }
        return $respuestaFinal;
    }

    /**
     * Permite abrir la tienda si se encuentra en un horario permitido.
     * @param int $hora
     * @param int $minutos
     */
    public function abrirDisquera($horaA, $minutosA) {
        $estadoA = $this -> dentroHorarioAtencion($horaA, $minutosA);
        if ($estadoA == true) {
            $this -> setEstado("abierto");
        }
    }

    
    /**
     * Permite cerrar la tienda si se encuentra en un horario permitido.
     * @param int $hora
     * @param int $minutos
     */
    public function cerrarDisquera($horaC, $minutosC) {
        $estadoC = $this -> dentroHorarioAtencion($horaC, $minutosC);
        if ($estadoC == false) {
            $this -> setEstado("cerrado");
        }
    }

    /* Muestra en un string todos los datos de la disquera.
     * @return string
     */
    public function __toString() {
        return "\nHora desde que esta abierto: " . $this -> getHoraDesde()["hora"] . ":" . $this -> getHoraDesde()["minutos"] . "\nHora hasta que esta abierto: " . $this -> getHoraHasta()["hora"] . ":" . $this -> getHoraHasta()["minutos"] . "\nEstado: " . $this -> getEstado() . "\nDireccion: " . $this -> getDireccion() . "\nDuenio: " . $this -> getDuenio();
    }



}
