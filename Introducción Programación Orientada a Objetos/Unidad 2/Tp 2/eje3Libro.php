<?php
class Libro {

    //Atributos
    private $isbn;
    private $titulo;
    private $anioEd;
    private $editorial;
    private $autor;
    private $cantPags;
    private $sinopsis;


    /**
     * Metodo constructor, crea un objeto de la clase
     * @param int
     * @param string
     * @param int
     * @param string
     * @param object
     * @param int
     * @param string
     */
    public function __construct($numIsbn, $ttl, $anioEdito, $edito, $autorDatos, $paginas, $sinop) {
        $this -> isbn = $numIsbn;
        $this -> titulo = $ttl;
        $this -> anioEd = $anioEdito;
        $this -> editorial = $edito;
        $this -> autor = $autorDatos;
        $this -> cantPags = $paginas;
        $this -> sinopsis = $sinop;
    }

    /**
     * Muestra el ISBN del libro.
     * @return int
     */
    public function getIsbn() {
        return $this -> isbn;
    }

    /**
     * Muestra el titulo del libro.
     * @return string
     */
    public function getTitulo() {
        return $this -> titulo;
    }

    /**
     * Muestra el anio de edicion del libro.
     * @return int
     */
    public function getAnioEd() {
        return $this -> anioEd;
    }

    /**
     * Muestra la editorial del libro.
     * @return int
     */
    public function getEditorial() {
        return $this -> editorial;
    }

    /**
     * Muestra los datos del autor del libro.
     * @return object
     */
    public function getAutor() {
        return $this -> autor;
    }

    /**
     * Muestra cantidad de paginas del libro.
     * @return int
     */
    public function getCantPags() {
        return $this -> cantPags;
    }

    /**
     * Muestra la sinpsis del libro
     * @return string
     */
    public function getSinopsis() {
        return $this -> sinopsis;
    }

    /**
     * Permite modificar el ISBN del libro.
     * @param int $nuevoIsbn
     */
    public function setIsbn($nuevoIsbn) {
        $this -> isbn = $nuevoIsbn;
    }

    /**
     * Permite modificar el titulo del libro.
     * @param string $nuevoTitulo
     */
    public function setTitulo($nuevoTitulo) {
        $this -> titulo = $nuevoTitulo;
    }

    /**
     * Permite modificar el anio de edicion del libro.
     * @param int $nuevoAnioE
     */
    public function setAnioEd($nuevoAnioE) {
        $this -> anioEd = $nuevoAnioE;
    }

    /**
     * Permite modificar la editorial del libro.
     * @param string $nuevaEditorial
     */
    public function setEditorial($nuevaEditorial) {
        $this -> editorial = $nuevaEditorial;
    }

    /**
     * Permite modificar los datos del autor del libro.
     * @param object $nuevoA
     */
    public function setAutor($nuevoA) {
        $this -> autor = $nuevoA;
    }

    /**
     * Permite modificar la cantidad de paginas del libro.
     * @param int $nuevaCant
     */
    public function setCantPags($nuevaCant) {
        $this -> cantPags = $nuevaCant;
    }

    /**
     * Permite modificar la sinopsis del libro
     * @param string $nuevaSinop
     */
    public function setSinopsis($nuevaSinop) {
        $this -> sinopsis = $nuevaSinop;
    } 

    /**
     * Indica si el libro pertenece a una editorial dada.
     * @param string $pEditorial
     * @return boolean
     */
    public function perteneceEditorial($pEditorial) {
        If ($this -> getEditorial() == $pEditorial) {
            $respuesta = true;
        }
        else {
            $respuesta = false;
        }
        return $respuesta;
    }

    /**
     * Retorna los años que han pasado desde que el libro fue editado.
     * @return int
     */
    public function aniosDesdeEdicion() {
        $resultado = 2023 - $this -> getAnioEd();
        return $resultado;
    }

    /**
     * Muestra en un string todos los datos del libro.
     * @return string
     */
    public function __toString() {
        return "\nISBN: " . $this -> getIsbn() . "\n Titulo: " . $this -> getTitulo() . "\n Anio de edicion: " . $this -> getanioEd() . "\n Editorial: " . $this -> getEditorial() . "\n Datos del Autor: " . $this -> getAutor() . "\n Cantidad de paginas del libro: " . $this -> getCantPags() . "\n Sinopsis del libro: " . $this -> getSinopsis();
    }



}