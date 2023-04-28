<?php
class Responsable {

    //atributos
    private $nombre;
    private $apellido;
    private $dni;
    private $direccion;
    private $mail;
    private $telefono;

    /**
     * Crea un objeto de la clase
     * @param string $nom\
     * @param string $ape
     * @param int $num
     * @param string $dire
     * @param string $correo
     * @param int $tel
     */
    public function __construct($nom, $ape, $num, $dire, $correo, $tel) {
        $this -> nombre = $nom;
        $this -> apellido = $ape;
        $this -> dni = $num;
        $this -> direccion = $dire;
        $this -> mail = $correo;
        $this -> telefono = $tel;
    }

    /**
     * Muestra el nombre del responsable
     * @return string
     */
    public function getNombre() {
        return $this -> nombre;
    }
    
    /**
     * Muestra el apellido del responsable
     * @return string
     */
    public function getApellido() {
        return $this -> apellido;
    }

    /**
     * Muestra el dni del responsable
     * @return int
     */
    public function getDni() {
        return $this -> dni;
    }

    /**
     * Muestra la direccion del responsable
     * @return string
     */
    public function getDireccion() {
        return $this -> direccion;
    }

    /**
     * Muestra el mail del responsable
     * @return string
     */
    public function getMail() {
        return $this -> mail;
    }

    /**
     * Muestra el telefono del responsable
     * @return int
     */
    public function getTelefono() {
        return $this -> telefono;
    }

    /**
     * Modifica el nombre del responsable
     * @param string $nuevoN
     */
    public function setNombre($nuevoN) {
        $this -> nombre = $nuevoN;
    }

    /**
     * Modifica el apellido del responsable
     * @param string $nuevoA
     */
    public function setApellido($nuevoA) {
        $this -> apellido = $nuevoA;
    }

    /**
     * Modifica el dni del responsable
     * @param int $nuevoDni
     */
    public function setDni($nuevoDni) {
        $this -> dni = $nuevoDni;
    }

    /**
     * Modifica la direccion del responsable
     * @param string $nuevaDire
     */
    public function setDireccion($nuevaDire) {
        $this -> direccion = $nuevaDire;
    }

    /**
     * Modifica el mail del responsable
     * @param string $nuevoN
     */
    public function setMail($nuevoM) {
        $this -> mail = $nuevoM;
    }

    /**
     * Modifica el telefono del responsable
     * @param int $nuevoT
     */
    public function setTelefono($nuevoT) {
        $this -> telefono = $nuevoT;
    }

    /**
     * Muestra los atributos de la clase
     * @return string
     */
    public function __toString() {
        return "\n Nombre: " . $this -> getNombre() . "\n Apellido: " . $this -> getApellido() . "\n DNI: " . $this -> getDni() . "\n Direccion: " . $this -> getDireccion() . "\n Mail: " . $this -> getMail() . "\n Telefono: " . $this -> getTelefono();
    }
}