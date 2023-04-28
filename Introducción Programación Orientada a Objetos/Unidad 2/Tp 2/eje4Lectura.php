<?php
class Lectura {

    //atributos
    private $libro;
    private $numPag;

    /**
     * Metodo constructor, crea un objeto de la clase
     * @param object
     * @param int
     */
    public function __construct($lib, $pag) {
        $this -> libro = $lib;
        $this -> numPag = $pag;
    }

    /**
     * Muestra el libro que se esta leyendo.
     * @return object
     */
    public function getLibro() {
        return $this -> libro;
    }

    /**
     * Muestra el numero de la pagina que esta leyendo.
     * @return int
     */
    public function getNumPag() {
        return $this -> numPag;
    }

    /**
     * Permite modificar el libro que se esta leyendo.
     * @param int $nuevoL
     */
    public function setLibro($nuevoL) {
        $this -> libro = $nuevoL;
    }

    /**
     * Permite modificar el numero de la pagina que esta leyendo.
     * @param int $nuevaP
     */
    public function setNumPag($nuevaP) {
        $this -> numPag = $nuevaP;
    }

    /**
     * Retorna la página del libro y actualiza la variable que contiene la pagina actual.
     * @return int
     */
    public function siguientePagina() {
        $siguienteP = $this -> getNumPag() + 1;
        $this -> setNumPag($siguienteP);
        return $siguienteP;
    }

    /**
     * Retorna la página anterior a la actual del libro y actualiza su valor.
     * @return int
     */
    public function retrocederPagina() {
        $anteriorP = $this -> getNumPag() - 1;
        $this -> setNumPag($anteriorP);
        return $anteriorP;
    }

    /**
     * Retorna la página actual y setea como página actual al valor recibido por parámetro.
     * @param int
     * @return int
     */
    public function irPagina($x) {
        $this -> setNumPag($x);
        $paginaAct = $this -> getNumPag();
        return $paginaAct;
    }

    /* Muestra en un string todos los datos de la lectura.
     * @return string
     */
    public function __toString() {
        return "\nLibro: " . $this -> getLibro() . "\n Numero de la pagina que se encuentra leyendo: " . $this -> getNumPag();
    }
}