<?php
class Persona {
    //atributos
    private $nombre;
    private $apellido;
    private $tipo;
    private $numDoc;

    /**
     * Metodo constructor, crea un objeto de la clase
     * @param string
     * @param string
     * @param string
     * @param int
     */
    public function __construct($nbr, $ape, $tipoDoc, $nroDoc) {
        $this -> nombre = $nbr;
        $this -> apellido = $ape;
        $this -> tipo = $tipoDoc;
        $this -> numDoc = $nroDoc;
    }

    /**
     * Muestra el nombre de la persona.
     * @return string
     */
    public function getNombre() {
        return $this -> nombre;
    }

    /**
     * Muestra el apellido de la persona.
     * @return string
     */
    public function getApellido() {
        return $this -> apellido;
    }

    /**
     * Muestra el tipo de documento.
     * @return string
     */
    public function getTipo() {
        return $this -> tipo;
    }

    /**
     * Muestra el numero documento.
     * @return int
     */
    public function getNumDoc() {
        return $this -> numDoc;
    }

    /**
     * Permite modificar el nombre de la persona.
     * @param int $nuevoN
     */
    public function setNombre($nuevoN) {
        $this -> nombre = $nuevoN;
    }

    /**
     * Permite modificar el apellido de la persona.
     * @param int $nuevoA
     */
    public function setApellido($nuevoA) {
        $this -> apellido = $nuevoA;
    }

    /**
     * Permite modificar el tipo de documento.
     * @param int $nuevoN
     */
    public function setTipo($nuevoT) {
        $this -> tipo = $nuevoT;
    }
    
    /**
     * Permite modificar el numero de documento.
     * @param int $nuevoD
     */
    public function setNumDoc($nuevoD) {
        $this -> numDoc = $nuevoD;
    }

    /* Muestra en un string todos los datos de la persona.
     * @return string
     */
    public function __toString() {
        return "\n Nombre: " . $this -> getNombre() . "\n Apellido: " . $this -> getApellido() . "\n Tipo de documento: " . $this -> getTipo() . "\n Numero de documento: " . $this -> getNumDoc();
    }






}