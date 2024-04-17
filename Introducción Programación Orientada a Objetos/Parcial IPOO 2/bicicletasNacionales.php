<?php
class BicicletasNacionales extends Bicicleta {

    //Atributos
    private $porcentajeDescuento;

    /**
     * Crea un objeto de la clase
     * @param int $cod
     * @param int $cost
     * @param int $anio
     * @param string $descr
     * @param float $porc
     * @param boolean $act
     * @param int $des
     */
    public function __construct($cod, $cost, $anio, $descr, $porc, $act, $des){
        parent:: __construct($cod, $cost, $anio, $descr, $porc, $act);
        $this -> porcentajeDescuento = $des;
    }

    /**
     * Muestra el porcentade de descuento
     * @return int
     */
    public function getPorcentajeDescuento() {
        return $this -> porcentajeDescuento;
    }

    /**
     * Modifica el porcentaje de descuento
     * @param int $nuevoPD
     */
    public function setPorcentajeDescuento($nuevoPD) {
        $this -> porcentajeDescuento = $nuevoPD;
    }

    /**
     * Calcula el valor por el cual puede ser vendida una bici nacional
     */
    public function darPrecioVenta() {
        $venta = parent::darPrecioVenta();
        $descuento = $this -> getPorcentajeDescuento();
        if ($descuento == 0) {
            $descuento = 15;
        }
        $precioFinal = $venta - (($descuento * $venta)/100)/100;
        return $precioFinal;
    }

    /**
     * Muestra los atributos de la clase 
     * @return string
     */
    public function __toString() {
        $datos = parent::__toString();
        return $datos . "\nPorcentaje de descuento: " . $this -> getPorcentajeDescuento();
    }
}