<?php
class Teatro{

    //Atributos
    private $nombre;
    private $direccion;
    private $funciones;

    /**
     * Metodo constructor, crea un objeto de la clase
     * @param string
     * @param string
     * @param array
     */
    public function __construct($nNombre, $nDireccion, $nFunciones) {
        $this -> nombre = $nNombre;
        $this -> direccion = $nDireccion;
        $this -> funciones = $nFunciones;
    }

    /**
     * Muestra el nombre del teatro.
     * @return string
     */
    public function getNombre() {
        return $this -> nombre;
    }

    /**
     * Muestra la direccion del teatro.
     * @return string
     */
    public function getDireccion() {
        return $this -> direccion;
    }

    /**
     * Muestra las funciones del dia del teatro.
     * @return array
     */
    public function getFunciones() {
        return $this -> funciones;
    }

    /**
     * Permite modificar el nombre del teatro.
     * @param string $nuevoNombre
     */
    public function setNombre($nuevoNombre) {
        $this -> nombre = $nuevoNombre;
    }

    /**
     * Permite modificar la direccion del teatro.
     * @param string $nuevaDireccion
     */
    public function setDireccion($nuevaDireccion) {
        $this -> direccion = $nuevaDireccion;
    }

    /**
     * Permite modificar el array de funciones.
     * @param array $nuevasFunciones
     */
    public function setFunciones($nuevasFunciones) {
        $this -> funciones = $nuevasFunciones;
    }

    /**
     * Modifica los datos de una funcion.
     * @param int $nFuncion
     * @param string $nNom
     * @param int $nPre
     */
    public function modificarDatosFuncion($nFuncion, $nNom, $nPre) {
        $arrayF = $this -> getFunciones();
        $arrayF [$nFuncion - 1] ["nombre"] = $nNom;
        $arrayF [$nFuncion - 1] ["precio"] = $nPre;
        $this -> setFunciones($arrayF);
    }

     /**
     * Muestra en un string todos los datos del teatro
     * @return string
     */
    public function __toString() {
        $arregloF = $this -> getFunciones();
        $datosT = "";
       for ($i = 0; $i < 4; $i++) {
        $datosT = $datosT . "\nFuncion N" . $i + 1 . ": " . $arregloF [$i] ["nombre"] . " $" . $arregloF [$i] ["precio"];
       } 
       return "Teatro " . $this -> getNombre() . "\n Direccion: " . $this -> getDireccion() . $datosT;
    }
}