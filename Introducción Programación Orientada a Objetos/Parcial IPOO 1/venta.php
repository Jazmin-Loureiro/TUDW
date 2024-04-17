<?php
class Venta {
    //atributos 
    private $numero;
    private $fecha;
    private $cliente;
    private $coleccionBicicletas;
    private $precio;

    /**
     * Crea un objeto de la clase
     * @param int $num
     * @param int $fech
     * @param object $cli
     * @param array $bicis
     * @param int $pre
     */
    public function __construct($num, $fech, $cli, $bicis, $pre) {
        $this -> numero = $num;
        $this -> fecha = $fech;
        $this -> cliente = $cli;
        $this -> coleccionBicicletas = $bicis;
        $this -> precio = $pre;
    }

    /**
     * Muestra el numero
     * @return int
     */
    public function getNumero() {
        return $this -> numero;
    }

    /**
     * Muestra la fecha
     * @return int
     */
    public function getFecha() {
        return $this -> fecha;
    }

    /**
     * Muestra el cliente
     * @return object
     */
    public function getCliente() {
        return $this -> cliente;
    }

    /**
     * Muestra el arrelgo de bicicletas
     * @return array
     */
    public function getColeccionBicicletas() {
        return $this -> coleccionBicicletas;
    }

    /**
     * Muestra el precio
     * @return int
     */
    public function getPrecio() {
        return $this -> precio;
    }

    /**
     * Modifica el numero
     * @param int $nuevoN
     */
    public function setNumero ($nuevoN) {
        $this -> numero = $nuevoN;
    }

    /**
     * Modifica la fecha
     * @param int $nuevoF
     */
    public function setFecha ($nuevoF) {
        $this -> fecha = $nuevoF;
    }

    /**
     * Modifica el cliente
     * @param object $nuevoC
     */
    public function setCliente ($nuevoC) {
        $this -> cliente = $nuevoC;
    }

    /**
     * Modifica el arrelgo de bicicletas
     * @param array $nuevoA
     */
    public function setColeccionBicicletas ($nuevoA) {
        $this -> coleccionBicicletas = $nuevoA;
    }

    /**
     * Modifica el precio
     * @param int $nuevoP
     */
    public function setPrecio($nuevoP) {
        $this -> precio = $nuevoP;
    }

    /**
     * Recibe por parámetro un objeto bicicleta y lo incorpora a la colección de bicicletas de la venta
     * @param object $objBici
     */
    public function incorporarBicicleta($objBici) {
        $arregloBicis = $this -> getColeccionBicicletas();
        $precioBici = $objBici -> darPrecioVenta();
        if ($precioBici >= 0) {
            array_push($arregloBicis, $objBici);
            $this -> setColeccionBicicletas($arregloBicis);
            $precios = $this -> getPrecio() + $precioBici;
            $this -> setPrecio($precios);
        }
    }

    /**
     * Muestra todos los objetos que estan guardados en el arrelgo de bicicletas
     * @return string
     */
    public function stringBicis() {
        $coleBicis = $this -> getColeccionBicicletas();
        $bicicletas = " ";
        $n = count($this -> getColeccionBicicletas());
        for ($i = 0; $i < $n; $i++) {
            $bicicletas = $bicicletas . "\n Bicicleta " . $i + 1 . ":" . $coleBicis [$i] -> __toString();
        }
        return $bicicletas;
    }

    /**
     * Muestra los atributos de la clase
     * @return string
     */
    public function __toString() {
    return "\nNumero: " . $this -> getNumero() . "\nFecha: " . $this -> getFecha() . "\nCliente: " . $this -> getCliente() .
    "\nBicicletas: " . $this -> stringBicis() . "\n Precio: " . $this -> getPrecio();
    }
}