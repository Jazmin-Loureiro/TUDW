<?php
class CuentaBancaria {

    //Atributos
    private $numCuenta;
    private $dni;
    private $saldoAct;
    private $intAnual;

    /**
     * Metodo constructor, crea un objeto de la clase
     * @param int
     * @param int
     * @param int
     * @param int
     */
    public function __construct($nCuenta, $dni1, $sActual, $interesA) {
        $this -> numCuenta = $nCuenta;
        $this -> dni = $dni1;
        $this -> saldoAct = $sActual;
        $this -> intAnual = $interesA;
    }

     /**
     * Muestra el numero de la cuenta.
     * @return int
     */
    public function getNumCuenta() {
        return $this -> numCuenta;
    }

     /**
     * Muestra el dni del cliente.
     * @return int
     */
    public function getDni() {
        return $this -> dni;
    }

     /**
     * Muestra el codigo del viaje.
     * @return int
     */
    public function getSaldoAct() {
        return $this -> saldoAct;
    }

     /**
     * Muestra el codigo del viaje.
     * @return int
     */
    public function getIntAnual() {
        return $this -> intAnual;
    }

     /**
     * Permite modificar el numero de cuenta.
     * @param int $nuevoNumC
     */
    public function setNumCuenta($nuevoNumC) {
        $this -> numCuenta = $nuevoNumC;
    }

     /**
     * Permite modificar el dni.
     * @param int $nuevoDni
     */
    public function setDni($nuevoDni) {
        $this -> dni = $nuevoDni;
    }
    
     /**
     * Permite modificar el saldo actual.
     * @param int $nuevoSaldo
     */
    public function setSaldoAct($nuevoSaldo) {
        $this -> saldoAct = $nuevoSaldo;
    }

     /**
     * Permite modificar el destino del viaje.
     * @param int $nuevoInt
     */
    public function setIntAnual($nuevoInt) {
        $this -> intAnual = $nuevoInt;
    }

    /**
     * Permite actualizar el saldo aplicandole el interes diario.
     */
    public function actualizarSaldo() {
        $saldo = $this -> getSaldoAct();
        $interesDiario = (($this -> getSaldoAct() * ($this -> getIntAnual() / 365)) / 100);
        $saldoActualizado = $saldo + $interesDiario;
        $this -> setSaldoAct($saldoActualizado);
    }

    /**
     * Permite depositar cierta cantidad de dinero.
     * @param int $cant
     */
    public function depositar($cantD) {
        $total = $cantD + $this -> getSaldoAct();
        $this -> setSaldoAct($total);
    }

    /**
     * Permite retirar cierta cantidad de dinero siempre y cuando haya disponible en la cuenta.
     * @param int $cant
     */
    public function retirar($cantR) {
        if ($this -> getSaldoAct() >= $cantR) {
            $total = $this -> getSaldoAct() - $cantR;
            $this -> setSaldoAct($total);
        }
        else {
            echo "Saldo insuficiente.";
        }
    }
    

     /**
     * Muestra en un string todos los datos de la cuenta bancaria
     * @return string
     */
    public function __toString() {
        return "Numero de cuenta: " . $this -> getNumCuenta() . "\n DNI del cliente: " . $this -> getDni() . "\nSaldo actual: " . $this -> getSaldoAct() . "\nInteres anual: " . $this -> getIntAnual();
    }









}