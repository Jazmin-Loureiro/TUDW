<?
class Auto {
    private $patente;
    private $marca;
    private $modelo;
    private $dniDuenio;
    private $mensajeoperacion;

    public function __construct() {
        $this -> patente = "";
        $this -> marca = "";
        $this -> modelo = "";
        $this -> dniDuenio = "";
        $this -> mensajeoperacion = "";
    }

    public function getPatente() {
        return $this -> patente;
    }

    public function getMarca() {
        return $this -> marca;
    }   

    public function getModelo() {
        return $this -> modelo;
    }

    public function getDniDuenio() {
        return $this -> dniDuenio;
    }

    public function getMensajeoperacion() {
        return $this -> mensajeoperacion;
    }

    public function setPatente($patente) {
        $this -> patente = $patente;
    }

    public function setMarca($marca) {
        $this -> marca = $marca;
    }

    public function setModelo($modelo) {
        $this -> modelo = $modelo;
    }

    public function setDniDuenio($dniDuenio) {
        $this -> dniDuenio = $dniDuenio;
    }

    public function setMensajeoperacion($mensajeoperacion) {
        $this -> mensajeoperacion = $mensajeoperacion;
    }

    public function cargar($patente, $marca, $modelo, $dniDuenio) {
        $this -> setPatente($patente);
        $this -> setMarca($marca);
        $this -> setModelo($modelo);
        $this -> setDniDuenio($dniDuenio);
    }//Agus usa la funcion setear, por ende queda diferente a funcion cagar, ambas cumplen el objetivo igual.

    public function insertar() {
        $base = new BaseDatos();
        $resp = false;
        $consultaInsertar = "INSERT INTO auto(patente, marca, modelo, dniDuenio) VALUES('" . $this -> getPatente() . "','" . $this -> getMarca() . "','" . $this -> getModelo() . "','" . $this -> getDniDuenio() -> getNroDni() . "');";
        if ($base -> Iniciar()) {
            if ($id = $base -> Ejecutar($consultaInsertar)) {
                $this -> setPatente($id);
                $resp = true;
            } else {
                $this -> setMensajeoperacion("Auto->insertar: " . $base -> getError());
            }
        } else {
            $this -> setMensajeoperacion("Auto->insertar: " . $base -> getError());
        }
        return $resp;
    }

    public function modificar() {
        $resp = false;
        $base = new BaseDatos();
        $consultaModifica = "UPDATE auto SET marca='" . $this -> getMarca() . "',modelo='" . $this -> getModelo() . "',dniDuenio='" . $this -> getDniDuenio() -> getNroDni() . "' WHERE patente='" . $this -> getPatente() . "';";
        if ($base -> Iniciar()) {
            if ($base -> Ejecutar($consultaModifica)) {
                $resp = true;
            } else {
                $this -> setMensajeoperacion("Auto->modificar: " . $base -> getError());
            }
        } else {
            $this -> setMensajeoperacion("Auto->modificar: " . $base -> getError());
        }
        return $resp;
    }

    public function eliminar() {
        $base = new BaseDatos();
        $resp = false;
        $consultaBorra = "DELETE FROM auto WHERE patente='" . $this -> getPatente() . "';";
        if ($base -> Iniciar()) {
            if ($base -> Ejecutar($consultaBorra)) {
                $resp = true;
            } else {
                $this -> setMensajeoperacion("Auto->eliminar: " . $base -> getError());
            }
        } else {
            $this -> setMensajeoperacion("Auto->eliminar: " . $base -> getError());
        }
        return $resp;
    }

    public function buscar($patente) {
        $base = new BaseDatos();
        $consulta = "SELECT * FROM auto WHERE patente='" . $patente . "';";
        $resp = false;
        if ($base -> Iniciar()) {
            if ($base -> Ejecutar($consulta)) {
                if ($arregloAuto = $base -> Registro()) {
                    $this -> setPatente($patente);
                    $this -> setMarca($arregloAuto['marca']);
                    $this -> setModelo($arregloAuto['modelo']);
                    $objDuenio = new Persona();
                    $objDuenio -> buscar($arregloAuto['dniDuenio']);
                    $this -> setDniDuenio($objDuenio);
                    $resp = true;
                }
            } else {
                $this -> setMensajeoperacion("Auto->buscar: " . $base -> getError());
            }
        } else {
            $this -> setMensajeoperacion("Auto->buscar: " . $base -> getError());
        }
        return $resp;
    }

    //Por que es static?
    public static function listar($condicion = "") {
        $arregloAutos = null;
        $base = new BaseDatos();
        $consulta = "SELECT * FROM auto ";
        if ($condicion != "") {
            $consulta = $consulta . ' WHERE ' . $condicion;
        }
        $consulta .= " ORDER BY patente;";
        if ($base -> Iniciar()) {
            if ($base -> Ejecutar($consulta)) {
                $arregloAutos = array();
                while ($arreglo = $base -> Registro()) {
                    $objDuenio = new Persona();
                    $objDuenio -> buscar($arreglo['dniDuenio']);
                    $obj = new Auto();
                    $obj -> cargar($arreglo['patente'], $arreglo['marca'], $arreglo['modelo'], $objDuenio);//revisar el tema del duenio ya que es diferente al de agus
                    array_push($arregloAutos, $obj);
                }
            } else {
                $this -> setMensajeoperacion("Auto->listar: " . $base -> getError());
            }
        } else {
            $this -> setMensajeoperacion("Auto->listar: " . $base -> getError());
        }
        return $arregloAutos;
    }

    public function __toString() {
        return "Patente: " . $this -> getPatente() . "\n" .
                "Marca: " . $this -> getMarca() . "\n" .
                "Modelo: " . $this -> getModelo() . "\n" .
                "DNI Dueño: " . $this -> getDniDuenio();
    }
}
?>