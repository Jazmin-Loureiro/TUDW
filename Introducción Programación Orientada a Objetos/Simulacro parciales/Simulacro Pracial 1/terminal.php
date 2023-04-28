<?php
class Terminal {
    //atributos
    private $denominacion;
    private $direccion;
    private $coleccionEmpresas;

    /**
     * Crea un objeto de la clase
     * @param string $deno;
     * @param string $dire
     * @param array $arrayEmpresas;
     */
    public function __construct($deno, $dire, $arrayEmpresas) {
        $this -> denominacion = $deno;
        $this -> direccion = $dire;
        $this -> coleccionEmpresas = $arrayEmpresas;
    }

    /**
     * Muestra la denominacion de la terminal
     * @return string
     */
    public function getDenominacion() {
        return $this -> denominacion;
    }

    /**
     * Muestra la direccion de la terminal
     * @return string
     */
    public function getDireccion() {
        return $this -> direccion;
    }

    /**
     * Muestra la coleccion de empresas de la terminal
     * @return array
     */
    public function getColeccionEmpresas() {
        return $this -> coleccionEmpresas;
    }

    /**
     * Modifica la denominacion de la terminal
     * @param string $nuevaD
     */
    public function setDenominacion($nuevaD) {
        $this -> denominacion = $nuevaD;
    }

    /**
     * Modifica la direccion de la terminal
     * @param string $nuevaDire
     */
    public function setDireccion($nuevaDire) {
        $this -> direccion = $nuevaDire;
    }

    /**
     * Modifica la coleccion de empresas de la terminal
     * @param array $nuevaCE
     */
    public function setColeccionEmpresas($nuevaCE) {
        $this -> coleccionEmpresas = $nuevaCE;
    }

    /**
     * Registra automaticamente la venta de un viaje
     * @param int $cantAsientos
     * @param int $fecha
     * @param string $destino
     * @param object $empresa
     * @return string
     */
    public function ventaAutomatica($cantAsientos, $fecha, $destino, $empresa) {
        $estado = $empresa -> venderViajeADestino($cantAsientos, $destino, $fecha);
        if ($estado == null) {
            $venta = "No vendido\n";
        }
        else {
            $venta = "Vendido\n";
        }
        return $venta;
    }

    /**
     * Retorna un objeto de la clase empresa que se corresponde con la de mayor recaudación.
     * @return object
     */
    public function empresaMayorRecaudacion() {
        $array = $this -> getColeccionEmpresas();
        $n = count($array);
        $monto = 0;
        for ($i = 0; $i < $n; $i++) {
            $montoRecaudado = $array [$i] -> montoRecaudado();
            if ($montoRecaudado > $monto) {
                $monto = $montoRecaudado;
                $empresaM = $array [$i];
            }
        }
        return $empresaM;
    }

    /**
     * Retorna al responsable del viaje
     * @param int $numeroViaje
     * @return object
     */
    public function responsableViaje($numeroViaje) {
        $array = $this -> getColeccionEmpresas();
        $n = count($array);
        $i = 0;
        $encontrado = false;
        while ($i < $n && $encontrado == false) {
            $viaje = $array [$i] -> getColeccionViajes();
            $v = count($viaje);
            $j = 0;
            while ($j < $v && $encontrado == false) {
                $numero = $viaje [$j] -> getNumero();
                if ($numeroViaje == $numero) {
                    $encontrado = true;
                    $responsable = $viaje [$j] -> getResponsable();
                } 
                $j = $j + 1;
            }
        $i = $i + 1;
        }
        return $responsable;
    }

    /**
     * Muestra los atributos de la clase
     * @return string
     */
    public function _toString() {
        $datosEmpresas = " ";
        $empresas = $this -> getColeccionEmpresas();
        for ($i = 0; $i < count($empresas); $i++) {
            $datosEmpresas = $datosEmpresas . "\n Identificacion: " . $empresas [$i] -> getIdentificacion() . 
            "\n Nombre de la empresa: " . $empresas [$i] -> getNombreE() . "\n Coleccion de viajes: " . $empresas [$i] -> getColeccionViajes();
        }
        return "\nDenominacion: " . $this -> getDenominacion() . "\nDireccion: " . $this -> getDireccion() . "\nColeccion de empresas: " . $datosEmpresas;
    }
}