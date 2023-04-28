<?php
class Viaje {

    //atributos
    private $destino;
    private $horaP;
    private $horaLl;
    private $numero;
    private $importe;
    private $fecha;
    private $asiTotales;
    private $asiDisponibles;
    private $responsable;

    /**
     * Crea un objeto de la clase
     * @param string $dest
     * @param int $hPartida
     * @param int $hLlegada
     * @param int $num
     * @param int $imp
     * @param int $fec
     * @param int $asientosT
     * @param int $asientosD
     * @param object $respo
     */
    public function __construct($dest, $hPartida, $hLlegada, $num, $imp, $fec, $asientosT, $asientosD, $respo) {
        $this -> destino = $dest;
        $this -> horaP = $hPartida;
        $this -> horaLl = $hLlegada;
        $this -> numero = $num;
        $this -> importe = $imp;
        $this -> fecha = $fec;
        $this -> asiTotales = $asientosT;
        $this -> asiDisponibles = $asientosD;
        $this  -> responsable = $respo;
    }

    /**
     * Muestra el destino del viaje
     * @return string
     */
    public function getDestino() {
        return $this -> destino;
    }

    /**
     * Muestra la hora de partida del viaje
     * @return int
     */
    public function getHoraP() {
        return $this -> horaP;
    }

    /**
     * Muestra la hora de llegada del viaje
     * @return int
     */
    public function getHoraLl() {
        return $this -> horaLl;
    }

    /**
     * Muestra el numero del viaje
     * @return int
     */
    public function getNumero() {
        return $this -> numero;
    }

    /**
     * Muestra el importe del viaje
     * @return int
     */
    public function getImporte() {
        return $this -> importe;
    }

    /**
     * Muestra la fecha del viaje
     * @return int
     */
    public function getFecha() {
        return $this -> fecha;
    }

    /**
     * Muestra los asientos totales del viaje
     * @return int
     */
    public function getAsiTotales() {
        return $this -> asiTotales;
    }

    /**
     * Muestra los asientos disponibles del viaje
     * @return int
     */
    public function getAsiDisponibles() {
        return $this -> asiDisponibles;
    }

    /**
     * Muestra el resonsable del viaje
     * @return object
     */
    public function getResponsable() {
        return $this -> responsable;
    }

    /**
     * Modifica el destino del viaje
     * @param string $nuevoDestino
     */
    public function setDestino($nuevoDestino) {
        $this -> destino = $nuevoDestino;
    }

    /**
     * Modifica la hora de partida del viaje
     * @param int $nuevaHoraP
     */
    public function setHoraP($nuevaHoraP) {
        $this -> horaP = $nuevaHoraP;
    }

    /**
     * Modifica la hora de llegada del viaje
     * @param int $nuevaHoraL
     */
    public function setHoraLl($nuevaHoraL) {
        $this -> horaLl = $nuevaHoraL;
    }

    /**
     * Modifica el numero del viaje
     * @param int $nuevoNumero
     */
    public function setNumero($nuevoNumero) {
        $this -> numero = $nuevoNumero;
    }

    /**
     * Modifica el importe del viaje
     * @param int $nuevoImporte
     */
    public function setImporte($nuevoImporte) {
        $this -> importe = $nuevoImporte;
    }

    /**
     * Modifica la fecha del viaje
     * @param int $nuevaFecha
     */
    public function setFecha($nuevaFecha) {
        $this -> fecha = $nuevaFecha;
    }

    /**
     * Modifica la cantidad de asientos totales del viaje
     * @param int $nuevosAsientosT
     */
    public function setAsiTotales($nuevosAsientosT) {
        $this -> asiTotales = $nuevosAsientosT;
    }

    /**
     * Modifica la cantidad de asientos disponibles del viaje
     * @param int $nuevosAsientosD
     */
    public function setAsiDisponibles($nuevosAsientosD) {
        $this -> asiDisponibles = $nuevosAsientosD;
    }

    /**
     * Modifica el responsable del viaje
     * @param object $nuevoRespo
     */
    public function setResponsable($nuevoRespo) {
        $this -> responsable = $nuevoRespo;
    }

    /**
     * Retorna verdadero en caso que la asignación pueda concretarse y falso en caso contrario
     * @param int $cantAsientos
     * @return boolean
     */
    public function asignarAsientosDisponibles($cantAsientos) {
        $asignacion = false;
        $asiD = $this -> getAsiDisponibles();
        if ($asiD >= $cantAsientos) {
            $asientosRestantes = $asiD - $cantAsientos;
            $this -> setAsiDisponibles($asientosRestantes);
            $asignacion = true;
        }
        return $asignacion;
    }

    /**
     * Muestra los atributos de la clase
     * @return string
     */
    public function __toString() {
        return "\nDestino del viaje: " . $this -> getDestino() . "\nHora de partida: " . $this -> getHoraP() . "\nHora de llegada: " . $this -> getHoraLl() . "\nNumero del viaje: " . $this -> getNumero() . "\nImporte: " . $this -> getImporte() . "\nFecha: " . $this -> getFecha() . "\n Asientos totales: " . $this -> getAsiTotales() . "\nAsientos disponibles: " . $this -> getAsiDisponibles() . "\nResponsable: " . $this -> getResponsable();
    }



}
