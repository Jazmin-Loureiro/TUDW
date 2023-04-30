<?php
class Lectura1 {

    //atributos
    private $libro;
    private $numPag;
    private $arrayLeidos;

    /**
     * Metodo constructor, crea un objeto de la clase
     * @param object
     * @param int
     */
    public function __construct($lib, $pag, $arreglo) {
        $this -> libro = $lib;
        $this -> numPag = $pag;
        $this -> arrayLeidos = $arreglo;
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
     * Muestra el arreglo de libros leidos.
     * @return array
     */
    public function getArrayLeidos() {
        return $this -> arrayLeidos;
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
     * Permite modificar el arreglo de lobros leidos.
     * @param int $nuevoA
     */
    public function setArrayLeidos($nuevoA) {
        $this -> arrayLeidos = $nuevoA;
    }

    /**
     * Retorna la página del libro y actualiza la variable que contiene la pagina actual.
     * @return int
     */
    public function siguientePagina() {
        $siguienteP = $this -> getNumPag() + 1;
        $this -> setNumPag($siguienteP);
        $libroF = $this -> getLibro();
        $arreglo = $this -> getArrayLeidos();
        If ($libroF -> getCantPags() == $this -> getNumPag()) {
            array_push($arreglo, $libroF) ;
            $this -> setArrayLeidos($arreglo);
        }
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
        $libroF = $this -> getLibro();
        $arreglo = $this -> getArrayLeidos();
        If ($libroF -> getCantPags() == $this -> getNumPag()) {
            array_push($arreglo, $libroF) ;
            $this -> setArrayLeidos($arreglo);
        }
        return $paginaAct;
    }

    /**
     * Retorna si un libro se encuentra leido o no.
     * @param object $libroL
     * @return boolean
     */
    public function estado($libroL) {
        $array = $this -> getArrayLeidos();
        $n = count($array);
        $i = 0;
        $estado = "false";
        while ($i < $n && $estado == "false") {
            if ($libroL == $array[$i]) {
                $estado = "true";
            }
            $i = $i + 1;
        }
        return $estado;
    }

    /**
     * Retorna la sinopsis del libro cuyo título se recibe por parámetro.
     * @param object $libroS
     * @return string
     */
    public function darSinopsis($libroS) {
        $sinopsis = $libroS -> getSinopsis();
        return $sinopsis;
    }

    /* Muestra en un string todos los datos de la lectura.
     * @return string
     */
    public function __toString() {
        return "\nLibro: " . $this -> getLibro() . "\n Numero de la pagina que se encuentra leyendo: " . $this -> getNumPag();
    }
}

//$n = count($this -> getArrayLeidos());
        //$i = 0;
        //$existe = false;
        //while ($i < $n && $existe == false) {
            //if ($libroS == $this -> getArrayLeidos()[$i]) {
               // $existe = true;
                //$sinopsis = $this -> getArrayLeidos()[]
            //}
            //$i = $i + 1;
        //}