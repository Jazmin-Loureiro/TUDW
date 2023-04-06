<?php
class Libro {

    //Atributos
    private $isbn;
    private $titulo;
    private $anioEd;
    private $editorial;
    private $nomAutor;
    private $apeAutor;

     /**
     * Metodo constructor, crea un objeto de la clase
     * @param int
     * @param string
     * @param int
     * @param string
     * @param string
     * @param string
     */
    public function __construct($numIsbn, $ttl, $anioEdito, $edito, $nombreA, $apellidoA) {
        $this -> isbn = $numIsbn;
        $this -> titulo = $ttl;
        $this -> anioEd = $anioEdito;
        $this -> editorial = $edito;
        $this -> nomAutor = $nombreA;
        $this -> apeAutor = $apellidoA;
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
     * Muestra el nombre del autor del libro.
     * @return string
     */
    public function getnNomAutor() {
        return $this -> nomAutor;
    }

    /**
     * Muestra el apellido del autor del libro.
     * @return string
     */
    public function getApeAutor() {
        return $this -> apeAutor;
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
     * Permite modificar el nombre del autor del libro.
     * @param string $nuevoNom
     */
    public function setNomAutor($nuevoNom) {
        $this -> nomAutor = $nuevoNom;
    }

    /**
     * Permite modificar el apellido del autor del libro.
     * @param string $nuevoApe
     */
    public function setApeAutor($nuevoApe) {
        $this -> apeAutor = $nuevoApe;
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
        return "\nISBN: " . $this -> getIsbn() . "\n Titulo: " . $this -> getTitulo() . "\n Anio de edicion: " . $this -> getanioEd() . "\n Editorial: " . $this -> getEditorial() . "\n Nombre del Autor: " . $this -> getnNomAutor() . "\n Apellido del autor: " . $this -> getApeAutor();
    }



}