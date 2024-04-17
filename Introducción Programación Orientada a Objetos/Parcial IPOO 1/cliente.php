<?php
class Cliente {

    //atributos
    private $nombre;
    private $apellido;
    private $dadoBaja;
    private $tipoD;
    private $numDni;

    /**
     * Crea un objeto de la clase
     * @param string $nom
     * @param string $ape
     * @param boolean $baja
     * @param string $tip
     * @param int $num
     */
    public function __construct($nom, $ape, $baja, $tip, $num){
        $this -> nombre = $nom;
        $this -> apellido = $ape;
        $this -> dadoBaja = $baja;
        $this -> tipoD = $tip;
        $this -> numDni = $num;
    }

    /**
     * Muestra el nombre
     * @return string
     */
    public function getNombre() {
        return $this -> nombre;
    }

    /**
     * Muestra el apellido
     * @return string
     */
    public function getApellido() {
        return $this -> apellido;
    }

    /**
     * Muestra la baja 
     * @return boolean
     */
    public function getDadoBaja() {
        return $this -> dadoBaja;
    }

    /**
     * Muestra el tipo de documento
     * @return string
     */
    public function getTipo() {
        return $this -> tipoD;
    }

    /**
     * Muestra el numero del documento
     * @return int
     */
    public function getNumDni() {
        return $this -> numDni;
    }

    /**
     * Modifica el nombre
     * @param string $nuevoN
     */
    public function setNombre($nuevoN) {
        $this -> nombre = $nuevoN;
    }

    /**
     * Modifica el apellido
     * @param string $nuevoA
     */
    public function setApellido($nuevoA) {
        $this -> apellido = $nuevoA;
    }

    /**
     * Modifica la baja
     * @param boolean $nuevaB
     */
    public function setDadoBaja($nuevaB) {
        $this -> dadoBaja = $nuevaB;
    }

    /**
     * Modifica el tipo de documento
     * @param string $nuevoT
     */
    public function setTipoD($nuevoT) {
        $this -> tipoD = $nuevoT;
    }

    /**
     * Modifica el numero de documento
     * @param int $nuevoND
     */
    public function setNumDni($nuevoND) {
        $this -> numDni = $nuevoND;
    }

    /**
     * Retorna un string diciendo si el cliente esta dado de alta o no
     * @return string
     */
    public function alta() {
        if ($this -> getDadoBaja() == true) {
            $respuesta = "Esta dado de baja";
        }
        else {
            $respuesta = "Esta dado de alta";
        }
        return $respuesta;
    }

    /**
     * Muestra los datos de la clase
     * @return string
     */
    public function __toString() {
        return "\nNombre: " . $this -> getNombre() . "\nApellido: " . $this -> getApellido() . 
        "\nBaja: " . $this -> alta() .
        "\nTipo de documento: " . $this -> getTipo() . "\nDocumento: " . $this -> getNumDni();
    }





}