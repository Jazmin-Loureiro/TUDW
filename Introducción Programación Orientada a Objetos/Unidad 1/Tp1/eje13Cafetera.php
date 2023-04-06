<?php
class Cafetera {

    //Atributos
    private $capacidadMax;
    private $cantidadAct;

     /**
     * Metodo constructor, crea un objeto de la clase
     * @param int
     * @param int
     * @param int
     * @param int
     */
    public function __construct($capMax, $cantAct) {
        $this -> capacidadMax = $capMax;
        $this -> cantidadAct = $cantAct;
    }

    /**
     * Muestra la capacidad maxima de la cafetera.
     * @return int
     */
    public function getCapacidadMax() {
        return $this -> capacidadMax;
    }
        
    /**
     * Muestra la cantidad anual de la cafetera.
     * @return int
     */
    public function getCantidadAct() {
        return $this -> cantidadAct;
    }

    /**
     * Permite modificar la capacidad maxima.
     * @param int $nuevaCap
     */
    public function setCapacidadMax($nuevaCap) {
        $this -> capacidadMax = $nuevaCap;
    }
    
    /**
     * Permite modificar la cantidad actual.
     * @param int $nuevaCant
     */
    public function setCantidadAct($nuevaCant) {
        $this -> cantidadAct = $nuevaCant;
    }

    /**
     * Llena la cafetera. 
     */
    public function llenarCafetera() {
        $cantidad = $this -> getCantidadAct();
        $capacidad = $this -> getCapacidadMax();
        $estadoAct = $capacidad - $cantidad;
        $estadoFinal = $cantidad + $estadoAct;
        $this -> setCantidadAct($estadoFinal);
    }
    
    /**
     * Sirve una taza de la cafetera.
     * @param int $cantidad
     * @return string 
     */
    public function servirTaza($cantidad) {
        if ($cantidad <= $this -> getCantidadAct()) {
            $taza = $this -> getCantidadAct() - $cantidad;
            $this -> setCantidadAct($taza);
            $respuesta = "Taza servida";
        }
        else {
            $taza = $this -> getCantidadAct();
            $this -> setCantidadAct($taza);
            $respuesta = "La cantidad de cafe en la cafetera es insuficiente, por eso se le sirve lo que hay disponible nomas";
        }
        return $respuesta;
       }

    /**
     * Vacia la cafetera.
     */
    public function vaciarCafetera() {
        $this -> getCantidadAct(0);
    }

     /**
     * Sirve una taza de la cafetera.
     * @param int $cantidad
     * @return string
     */
    public function agregarCafe($cantidad) {
        if (($cantidad + $this -> getCantidadAct()) > $this -> getCapacidadMax()) {
            $mensaje = "La cantidad que desea agregar supera la capacidad de la cafetera (" . $this -> getCapacidadMax() . ").";
        }
        else {
            $totalIng = $this -> getCantidadAct() + $cantidad;
            $this -> setCantidadAct($totalIng);
            $mensaje = "Cantidad ingresada almacenada.";
        }
        return $mensaje;
    }

    /**
     * Muestra en un string todos los datos de la cuenta bancaria
     * @return string
     */
    public function __toString() {
        return "Capacidad maxima: " . $this -> getCapacidadMax() . ". \n Cantidad actual: " . $this -> getCantidadAct() . ".\n";
    }






    
}