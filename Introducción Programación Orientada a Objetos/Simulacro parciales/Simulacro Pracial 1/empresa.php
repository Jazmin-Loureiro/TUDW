<?php
class Empresa {
    //atributos
    private $identificacion;
    private $nombreE;
    private $coleccionViajes;

    /**
     * Crea un objeto de la clase
     * @param $ide
     * @param $nEmpresa
     * @param $arrayV
     */
    public function __construct($ide, $nEmpresa, $arrayV) {
        $this -> identificacion = $ide;
        $this -> nombreE = $nEmpresa;
        $this -> coleccionViajes = $arrayV;
    }

    /**
     * Muestra la identificacion de la empresa
     * @return string
     */
    public function getIdentificacion() {
        return $this -> identificacion;
    }

    /**
     * Muestra el nombre de la empresa
     * @return string
     */
    public function getNombreE() {
        return $this -> nombreE;
    }

    /**
     * Muestra la coleccion de viajes de la empresa
     * @return array
     */
    public function getColeccionViajes() {
        return $this -> coleccionViajes;
    }

    /**
     * Modifica la identificacion de la empresa
     * @param string $nuevaIden
     */
    public function setIdentificacion($nuevaIden) {
        $this -> identificacion = $nuevaIden;
    }

    /**
     * Modifica el nombre de la empresa
     * @param string $nuevoNom
     */
    public function setNombreE($nuevoNom) {
        $this -> nombreE = $nuevoNom;
    }

    /**
     * Modifica la coleccion de viajes de la empresa
     * @param string $nuevaColeccion
     */
    public function setColeccionViajes($nuevaColeccion) {
        $this -> coleccionViajes = $nuevaColeccion;
    }

    /**
     * Retorna una colección con todos los viajes disponibles a ese destino.
     * @param string $destinoV
     * @return array
     */
    public function darViajeADestino($destinoV) {
        $arrayViajes = $this -> getColeccionViajes();
        $viajes = count($arrayViajes);
        $viajesDestino = [];
        $j = 0;
        for ($i = 0; $i < $viajes; $i++) {
            if ($destinoV == $arrayViajes[$i]) {
                $viajesDestino [$j] = $arrayViajes [$i];
                $j = $j + 1;
            }
        }
        return $viajesDestino;
    }
    
    /**
     * Retorna verdadero si la incorporación del viaje se realizó correctamente y falso en caso contrario.
     * @param object $viajeNuevo
     * @return boolean
     */
    public function incorporarViaje($viajeNuevo) {
        $arrayViajes = $this -> getColeccionViajes();
        $n = count($arrayViajes);
        $i = 0;
        $incorporacion = true;
        while($i < $n) {
            if ($arrayViajes[$i] -> getDestino() == $viajeNuevo -> getDestino()) {
                if ($arrayViajes[$i] -> getFecha() == $viajeNuevo -> getFecha()) {
                    if ($arrayViajes[$i] -> getHoraP() == $viajeNuevo -> getHoraP()){
                        $incorporacion = false;
                    }
                }
            }
            $i = $i + 1;
        }
        if ($incorporacion == true) {
            array_push($arrayViajes, $viajeNuevo);
            $this -> setColeccionViajes($arrayViajes);
        }
        return $incorporacion;
    }

    /**
     * Retorna la instancia del viaje asignado o null en caso contrario.
     * @param int $cantAsientos
     * @param string $destino
     * @param int $fecha
     * @return object
     */
    public function venderViajeADestino($canAsientos, $destino, $fecha) {
        $arrayViajes = $this -> getColeccionViajes();
        $n = count($arrayViajes);
        $i = 0;
        $viajeAsignado = null;
        while ($i < $n) {
            $destinoA = $arrayViajes [$i] -> getDestino();
            if ($destinoA == $destino) {
                $fechaA = $arrayViajes [$i] -> getFecha();
                if ($fechaA == $fecha) {
                    $asientos = $arrayViajes [$i] -> asignarAsientosDisponibles($canAsientos);
                    if ($asientos == true) {
                        $viajeAsignado = $arrayViajes [$i];
                    }
                }
            }
            $i = $i + 1;
        }
        return $viajeAsignado;
    }

    /**
     * Retorna el monto recaudado por la Empresa.
     * @return int
     */
    public function montoRecaudado() {
        $arrayViajes = $this -> getColeccionViajes();
        $n = count($arrayViajes);
        $i = 0;
        $totalRecaudado = 0;
        for ($i = 0; $i < $n; $i++) {
            $asientosVendidos = $arrayViajes [$i] -> getAsiTotales() - $arrayViajes [$i] -> getAsidisponibles();
            $totalRecaudado = $totalRecaudado + ($asientosVendidos * $arrayViajes [$i] ->getImporte());
        }
        return $totalRecaudado;
    }

    /**
     * Muestra los atributos de la clase
     * @return string
     */
    public function __toString() {
        $datosViajes = "";
        $coleccionV = $this -> getColeccionViajes();
        for ($i = 0; $i < count($coleccionV); $i++) {
            $datosViajes = $datosViajes . 
            "\n Destino: " . $coleccionV [$i] -> getDestino() . "\n Hora de partida: " . $coleccionV [$i] -> getHoraP() . 
            "\n Hora de llegada: " . $coleccionV [$i] -> getHoraLl() . "\n Numero: " . $coleccionV [$i] -> getNumero() . 
            "\n Importe: " . $coleccionV [$i] -> getImporte() . "\n Fecha: " . $coleccionV [$i] -> getFecha() . 
            "\n Asientos totales: " . $coleccionV [$i] -> getAsiTotales() . "\n Asientos disponibles: " . $coleccionV [$i] -> getAsiDisponibles() .
            "\n Responsable: " . $coleccionV [$i] -> getResponsable();
            ;
        }
        return "\nIdentificacion de la empresa: " . $this -> getIdentificacion() . "\nNombre de la empresa: " . $this -> getNombreE() . "\nColeccion de viajes: " . $datosViajes;    
    }
}