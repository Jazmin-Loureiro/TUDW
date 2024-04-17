<?php
class Bicicleta {
    
    //Atributos
    private $codigo;
    private $costo;
    private $anioF;
    private $descripcion;
    private $porcentajeIncrAnual;
    private $activa;

    /**
     * Crea un objeto de la clase
     * @param int $cod
     * @param int $cost
     * @param int $anio
     * @param string $descr
     * @param float $porc
     * @param boolean $act
     */
    public function __construct($cod, $cost, $anio, $descr, $porc, $act){
        $this -> codigo = $cod;
        $this -> costo = $cost;
        $this -> anioF = $anio;
        $this -> descripcion = $descr;
        $this -> porcentajeIncrAnual = $porc;
        $this -> activa = $act;
    }

    /**
     * Muestra el codigo
     * @return int
     */
    public function getCodigo() {
        return $this -> codigo;
    }

    /**
     * Muestra el costo
     * @return int
     */
    public function getCosto() {
        return $this -> costo;
    }

    /**
     * Muestra el anio de fabricacion
     * @return int
     */
    public function getAnioF() {
        return $this -> anioF;
    }

    /**
     * Muestra la descripcion
     * @return string
     */
    public function getDescripcion() {
        return $this -> descripcion;
    }

    /**
     * Muestra el porcentaje
     * @return float
     */
    public function getPorcentajeIncrAnual() {
        return $this -> porcentajeIncrAnual;
    }

    /**
     * Muestra el valor del atributo activa
     * @return boolean
     */
    public function getActiva() {
        return $this -> activa;
    }

    /**
     * Modifica el codigo
     * @param int $nuevoC
     */
    public function setCodigo($nuevoC) {
        $this -> codigo = $nuevoC;
    }

    /**
     * Modifica el costo
     * @param int $nuevoC
     */
    public function setCosto($nuevoCos) {
        $this -> costo = $nuevoCos;
    }

    /**
     * Modifica el anio de fabricacion
     * @param int $nuevoA
     */
    public function setAnioF($nuevoA) {
        $this -> anioF = $nuevoA;
    }

    /**
     * Modifica la descripcion
     * @param string $nuevaA
     */
    public function setDescripcion($nuevaA) {
        $this -> descripcion = $nuevaA;
    }
    
    /**
     * Modifica el porcentaje
     * @param float $nuevoP
     */
    public function setPorcentajeIncrAnual($nuevoP) {
        $this -> porcentajeIncrAnual = $nuevoP;
    }

    /**
     * Modifica la variable $activa
     * @param boolean $nuevoAct
     */
    public function setActiva($nuevoAct) {
        $this -> activa = $nuevoAct;
    }

    /**
     * Calcula el valor por el cual puede ser vendida una bici
     */
    public function darPrecioVenta() {
        $estado = $this -> getActiva();
        if ($estado == true) {
            $costoBici = $this -> getCosto();
            $anio = 2023 - $this -> getAnioF();
            $porAnual = $this -> getPorcentajeIncrAnual();
            $venta =  $costoBici + $costoBici * ($anio * ($porAnual/100));
        }
        else {
            $venta = -1;
        }
        return $venta;
    }

    /**
     * Retorna un string diciendo si esta disponible la bicicleta
     * @return string
     */
    public function disponible() {
        if ($this -> getActiva() == true) {
            $respuesta = "Disponnible";
        }
        else {
            $respuesta = "No disponible";
        }
        return $respuesta;
    }

    /**
     * Muestra los atributos de la clase 
     * @return string
     */
    public function __toString() {
        return "\nCodigo: " . $this -> getCodigo() . "\nCosto: " . $this -> getCosto() . "\nAnio de fabricacion: " . $this -> getAnioF() . 
        "\nDescripcion: " . $this -> getDescripcion() . "\nPorcentaje del incremento anual: " . $this -> getPorcentajeIncrAnual() . 
        "\nEstado de disponibilidad: " . $this -> disponible();
    }



}