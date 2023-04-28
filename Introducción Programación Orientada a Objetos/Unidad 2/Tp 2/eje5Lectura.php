<?php
class Lectura {

    //atributos
    private $arrayLibros;

    /**
     * Metodo constructor, crea un objeto de la clase
     * @param array
     */
    public function __construct($libros) {
        $this -> arrayLibros = $libros;
    }

    /**
     * Muestra la coleccion de libros.
     * @return array
     */
    public function getArrayLibros() {
        return $this -> arrayLibros;
    }

    /**
     * Permite modificar la coleccion de libros.
     * @param array $nuevoArray
     */
    public function setArrayLibros($nuevoArray) {
        $this -> arrayLibros = $nuevoArray;
    }

    /**
     * Retorna la siguiente página del libro y actualiza la pagina actual de ese libro en el arreglo de libros.
     * @return int
     */
    public function siguientePagina() {
        $siguienteP = $this -> getArrayLibros()["paginaActual"] + 1;
        $this -> setArrayLibros($siguienteP)["paginaActual"];
        return $siguienteP;
    }

    /**
     * Retorna la página anterior a la actual y acaliza la pagina actual de ese libro en el arreglo de libros.
     * @return int
     */
    public function retrocederPagina() {
        $anteriorP = $this -> getArrayLibros()["libro1"]["paginaActual"] - 1;
        $this -> setArrayLibros($anteriorP)["paginaActual"];
        return $anteriorP;
    }

    /**
     * Retorna la página actual y setea como página actual al valor recibido por parámetro.
     * @param int
     * @return int
     */
    public function irPagina($x) {
        $this -> setArrayLibros($x)["paginaActual"];
        $paginaAct = $this -> getArrayLibros()["paginaActual"];
        return $paginaAct;
    }



    /* Muestra en un string todos los datos de la lectura.
     * @return string
     */
    public function __toString() {
        return "\nLibro: " . $this -> getLibro() . "\n Numero de la pagina que se encuentra leyendo: " . $this -> getNumPag();
    }
}