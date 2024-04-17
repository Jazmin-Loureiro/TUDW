<?php
class BicicletasImportadas extends Bicicleta {
    //Atributos
    private $pais;
    private $impuestos;

    /**
     * Crea un objeto de la clase
     * @param int $cod
     * @param int $cost
     * @param int $anio
     * @param string $descr
     * @param float $porc
     * @param boolean $act
     * @param string $paisIm
     * @param int $imp
     */
    public function __construct($cod, $cost, $anio, $descr, $porc, $act, $paisIm, $imp){
        parent:: __construct($cod, $cost, $anio, $descr, $porc, $act);
        $this -> pais = $paisIm;
        $this -> impuestos = $imp;
    }

    /**
     * Muestra el pais de importacion
     * @return string
     */
    public function getPais() {
        return $this -> pais;
    }

    /**
     * Muestra los impuestos
     * @return int
     */
    public function getImpuestos() {
        return $this -> impuestos;
    }

    /**
     * Modifica el pais de importacion
     * @param string $nuevoPais
     */
    public function setPais($nuevoPais) {
        $this -> pais = $nuevoPais;
    }

    /**
     * Modifica los impuestos
     * @param int $nuevoImp
     */
    public function setImpuestos($nuevoImp) {
        $this -> impuestos = $nuevoImp;
    }

    /**
     * Calcula el valor por el cual puede ser vendida una bici importada
     */
    public function darPrecioVenta() {
        $venta = parent::darPrecioVenta();
        $impu = $this -> getImpuestos();
        $precioFinal = $venta + $impu;
        return $precioFinal;
    }

    /**
     * Muestra los atributos de la clase 
     * @return string
     */
    public function __toString() {
        $datos = parent::__toString();
        return $datos . "\nPais de importacion: " . $this -> getPais() . "\nImporte de los impuestos: " . $this -> getImpuestos();
    }
}