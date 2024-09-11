<? 
class Persona {
    private $nroDni;
    private $apellido;
    private $nombre;
    private $fechaNac;
    private $telefono;
    private $domicilio;
    private $mensajeoperacion;

    public function __construct() {
        $this -> nroDni = "";
        $this -> apellido = "";
        $this -> nombre = "";
        $this -> fechaNac = "";
        $this -> telefono = "";
        $this -> domicilio = "";
    }

    public function getNroDni() {
        return $this -> nroDni;
    }

    public function getApellido() {
        return $this -> apellido;
    }

    public function getNombre() {
        return $this -> nombre;
    }

    public function getFechaNac() {
        return $this -> fechaNac;
    }

    public function getTelefono() {
        return $this -> telefono;
    }

    public function getDomicilio() {
        return $this -> domicilio;
    }

    public function getMensajeoperacion() {
        return $this -> mensajeoperacion;
    }

    public function setNroDni($nroDni) {
        $this -> nroDni = $nroDni;
    }

    public function setApellido($apellido) {
        $this -> apellido = $apellido;
    }

    public function setNombre($nombre) {
        $this -> nombre = $nombre;
    }

    public function setFechaNac($fechaNac) {
        $this -> fechaNac = $fechaNac;
    }

    public function setTelefono($telefono) {
        $this -> telefono = $telefono;
    }

    public function setDomicilio($domicilio) {
        $this -> domicilio = $domicilio;
    }

    public function setMensajeoperacion($mensajeoperacion) {
        $this -> mensajeoperacion = $mensajeoperacion;
    }

    public function cargar($nroDni, $apellido, $nombre, $fechaNac, $telefono, $domicilio) {
        $this -> setNroDni($nroDni);
        $this -> setApellido($apellido);
        $this -> setNombre($nombre);
        $this -> setFechaNac($fechaNac);
        $this -> setTelefono($telefono);
        $this -> setDomicilio($domicilio);
    }

    public function insertar() {
        $base = new BaseDatos();
        $consultaInsertar = "INSERT INTO persona(nroDni, apellido, nombre, fechaNac, telefono, domicilio) VALUES ('" . $this -> getNroDni() . "', '" . $this -> getApellido() . "', '" . $this -> getNombre() . "', '" . $this -> getFechaNac() . "', '" . $this -> getTelefono() . "', '" . $this -> getDomicilio() . "');";
        $resp = false;
        if ($base -> Iniciar()) {
            if ($id = $base -> Ejecutar($consultaInsertar)) {
                $this -> setNroDni($id);
                $resp = true;
            } else {
                $this -> setMensajeoperacion("Persona->insertar: " . $base ->getError());
            }
        } else {
            $this -> setMensajeoperacion("Persona->insertar: " . $base ->getError());
        }
        return $resp;
    }

    public function modificar() {
        $resp = false;
        $base = new BaseDatos();
        $consultaModifica = "UPDATE persona SET apellido='" . $this -> getApellido() . "', nombre='" . $this -> getNombre() . "', fechaNac='" . $this -> getFechaNac() . "', telefono='" . $this -> getTelefono() . "', domicilio='" . $this -> getDomicilio() . "' WHERE nroDni=" . $this -> getNroDni();
        if ($base -> Iniciar()) {
            if ($base -> Ejecutar($consultaModifica)) {
                $resp = true;
            } else {
                $this -> setMensajeoperacion("Persona->modificar: " . $base ->getError());
            }
        } else {
            $this -> setMensajeoperacion("Persona->modificar: " . $base ->getError());
        }
        return $resp;
    }

    public function eliminar() {
        $base = new BaseDatos();
        $resp = false;
        $consultaBorra = "DELETE FROM persona WHERE nroDni=" . $this -> getNroDni();
        if ($base -> Iniciar()) {
            if ($base -> Ejecutar($consultaBorra)) {
                $resp = true;
            } else {
                $this -> setMensajeoperacion("Persona->eliminar: " . $base ->getError());
            }
        } else {
            $this -> setMensajeoperacion("Persona->eliminar: " . $base ->getError());
        }
        return $resp;
    }

    public function buscar($nroDni) {
        $base = new BaseDatos();
        $consulta = "SELECT * FROM persona WHERE nroDni=" . $nroDni;
        $resp = false;
        if ($base -> Iniciar()) {
            if ($base -> Ejecutar($consulta)) {
                if ($arregloPersona = $base -> Registro()) {
                    $this -> setNroDni($nroDni);
                    $this -> setApellido($arregloPersona['apellido']);
                    $this -> setNombre($arregloPersona['nombre']);
                    $this -> setFechaNac($arregloPersona['fechaNac']);
                    $this -> setTelefono($arregloPersona['telefono']);
                    $this -> setDomicilio($arregloPersona['domicilio']);
                    $resp = true;
                }
            } else {
                $this -> setMensajeoperacion("Persona->buscar: " . $base ->getError());
            }
        } else {
            $this -> setMensajeoperacion("Persona->buscar: " . $base ->getError());
        }
        return $resp;
    }

    public static function listar($parametro = "") {
        $arregloPersonas = null;
        $base = new BaseDatos();
        $consulta = "SELECT * FROM persona ";
        if ($parametro != "") {
            $consulta = $consulta . 'WHERE ' . $parametro;
        }
        $consulta .= " ORDER BY apellido";
        if ($base -> Iniciar()) {
            if ($base -> Ejecutar($consulta)) {
                $arregloPersonas = array();
                while ($arreglo = $base -> Registro()) {
                    $obj = new Persona();
                    $obj -> cargar($arreglo['nroDni'], $arreglo['apellido'], $arreglo['nombre'], $arreglo['fechaNac'], $arreglo['telefono'], $arreglo['domicilio']);
                    array_push($arregloPersonas, $obj);
                }
            } else {
                $this -> setMensajeoperacion("Persona->listar: " . $base ->getError());
            }
        } else {
            $this -> setMensajeoperacion("Persona->listar: " . $base ->getError());
        }
        return $arregloPersonas;
    }

    public function __toString() {
        return "DNI: " . $this -> getNroDni() . "\n" .
                "Apellido: " . $this -> getApellido() . "\n" .
                "Nombre: " . $this -> getNombre() . "\n" .
                "Fecha de Nacimiento: " . $this -> getFechaNac() . "\n" .
                "Telefono: " . $this -> getTelefono() . "\n" .
                "Domicilio: " . $this -> getDomicilio();
    }
}
?>