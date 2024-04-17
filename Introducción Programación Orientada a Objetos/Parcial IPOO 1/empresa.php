<?php
class Empresa {

    //Atributos
    private $denominacion;
    private $direccion;
    private $coleccionClientes;
    private $coleccionBicis;
    private $coleccionVentas;

    /**
     * Crea un objeto de la clase
     * @param string $deno
     * @param string $dire
     * @param array $clientes
     * @param array $bicis
     * @param array $ventas
     */
    public function __construct($deno, $dire, $clientes, $bicis, $ventas) {
        $this -> denominacion = $deno;
        $this -> direccion = $dire;
        $this -> coleccionClientes = $clientes;
        $this -> coleccionBicis = $bicis;
        $this -> coleccionVentas = $ventas;
    }

    /**
     * Muestra la denominacion
     * @return string
     */
    public function getDenominacion() {
        return $this -> denominacion;
    }

    /**
     * Muestra la direccion
     * @return string
     */
    public function getDireccion() {
        return $this -> direccion;
    }

    /**
     * Muestra la coleccion de clientes
     * @return array
     */
    public function getColeccionClientes() {
        return $this -> coleccionClientes;
    }

    /**
     * Muestra la coleccion de bicicletas
     * @return array
     */
    public function getColeccionBicis() {
        return $this -> coleccionBicis;
    }

    /**
     * Muestra la coleccion de ventas
     * @return array
     */
    public function getColeccionVentas() {
        return $this -> coleccionVentas;
    }

    /**
     * Modifica la denominacion
     * @param $nuevaDeno
     */
    public function setDenominacion($nuevaDeno) {
        $this -> denominacion = $nuevaDeno;
    }

    /**
     * Modifica la direccion
     * @param $nuevaDire
     */
    public function setDireccion($nuevaDire) {
        $this -> direccion = $nuevaDire;
    }

    /**
     * Modifica la coleccion de clientes
     * @param $nuevaCC
     */
    public function setColeccionCLientes($nuevaCC) {
        $this -> coleccionClientes = $nuevaCC;
    }

    /**
     * Modifica la coleccion de bicicletas
     * @param $nuevaCB
     */
    public function setColeccionBicis($nuevaCB) {
        $this -> coleccionBicis = $nuevaCB;
    }

    /**
     * Modifica la coleccion de ventas
     * @param $nuevaCV
     */
    public function setColeccionVentas($nuevaCV) {
        $this -> coleccionVentas = $nuevaCV;
    }

    /**
     * Recorre la colección de bicis de la Empresa y retorna la referencia al objeto bicicleta 
     * cuyo código coincide con el recibido por parámetro.
     * @param int $codigoBici
     */
    public function retornarBici($codigoBici) {
        $array = $this -> getColeccionBicis();
        $bicicleta = null;
        $n = count($array);
        $i = 0;
        $encontrado = false;
        while ($i < $n && $encontrado == false) {
            $bici = $array [$i] -> getCodigo();
            if ($codigoBici == $bici) {
                    $encontrado = true;
                    $bicicleta = $array [$i];
                }
            $i = $i + 1;
        }
        return $bicicleta;
    }
        
    /**
     * Recibe por parámetro una colección de códigos de bicicletas, la cual es recorrida, y 
     * por cada elemento de la colección se busca el objeto bicicleta correspondiente al código y 
     * se incorpora a la colección de bicis de la instancia Venta que debe ser creada.
     */
    public function registrarVenta($colCodigosBici, $objCliente) {
        $baja = $objCliente -> getDadoBaja();
        if ($baja == false) {
            $coleVentas = $this -> getColeccionVentas();
            $num = count($coleVentas) + 1;
            $coleccionBicisVenta = [];
            $venta = new Venta ($num, "21/04/2023", $objCliente, $coleccionBicisVenta, 0);
            foreach ($colCodigosBici as $codigo) {
                $bici = $this -> retornarBici($codigo);
                if ($bici <> null) {
                    $venta -> incorporarBicicleta($bici);
                }
            }
            array_push($coleVentas, $venta);
            $this -> setColeccionVentas($coleVentas);
        }
    }

    /**
     * Recibe por parámetro el tipo y número de documento de un Cliente y retorna una colección con 
     * las ventas realizadas al cliente 
     * @param string $tipo
     * @param int $numDoc
     * @return array
     */
    public function retornarVentasXCliente($tipo,$numDoc) {
        $coleClientes = $this -> getColeccionClientes();
        $coleVentas = $this -> getColeccionVentas();
        $coleccionVentasRealizadas = [];
        $encontrado = false;
        $i = 0;
        $n = count($coleClientes);
        while ($i < $n && $encontrado == false) {
            $cliente = $coleClientes [$i]; 
            $dniCliente = $cliente -> getNumDni();
            if ($dniCliente == $numDoc) {
                $encontrado == true;
                foreach ($coleVentas as $venta) {
                    $clienteV = $venta -> getCliente();
                    if ($clienteV == $cliente) {
                        array_push($coleccionVentasRealizadas, $venta);
                    }
                }
            }
            $i++;
        }
        return $coleccionVentasRealizadas;
    }

    /**
     * Muestra todos los objetos que estan guardados en el arrelgo de clientes
     * @return string
     */
    public function stringClientes() {
        $coleClientes = $this -> getColeccionClientes();
        $clientes = " ";
        $n = count($this -> getColeccionClientes());
        for ($i = 0; $i < $n; $i++) {
            $clientes = $clientes . "\n Cliente " . $i + 1 . ":" . $coleClientes [$i] -> __toString();
        }
        return $clientes;
    }

    /**
     * Muestra todos los objetos que estan guardados en el arrelgo de bicicletas
     * @return string
     */
    public function stringBicis() {
        $coleBicis = $this -> getColeccionBicis();
        $bicicletas = " ";
        $n = count($this -> getColeccionBicis());
        for ($i = 0; $i < $n; $i++) {
            $bicicletas = $bicicletas . "\n Bicicleta " . $i + 1 . ":" . $coleBicis [$i] -> __toString();
        }
        return $bicicletas;
    }

    /**
     * Muestra todos los objetos que estan guardados en el arrelgo de ventas
     * @return string
     */
    public function stringVentas() {
        $coleVentas = $this -> getColeccionVentas();
        $ventas = " ";
        $n = count($this -> getColeccionVentas());
        for ($i = 0; $i < $n; $i++) {
            $ventas = $ventas . "\n Venta " . $i + 1 . ":" . $coleVentas[$i] -> __toString();
        }
        return $ventas;
    }

    /**
     * Muestra los atributos de la clase
     * @return string
     */
    public function __toString() {
        return "\nDenominacion: " . $this -> getDenominacion() . "\nDireccion: " . $this -> getDireccion() . 
        "\n Coleccion de clientes: " . $this -> stringClientes() . "\n Coleccion de bicicletas: " . $this -> stringBicis() . 
        "\n Coleccion de ventas: " . $this -> stringVentas();
    }



}