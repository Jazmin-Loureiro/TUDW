<?php
class ArchivoText {
    private $archivo;
    private $resp;

    public function __construct() {
        $this->archivo = "";
        $this->resp = "";
    }

    public function getArchivo() {
        return $this->archivo;
    }

    public function setArchivo($archivo) {
        $this->archivo = $archivo;
    }

    public function getResp() {
        return $this->resp;
    }

    public function setResp($resp) {
        $this->resp = $resp;
    }

    public function validarText($datos) {
       $this->archivo = $datos['text']; 
        $tipo = $this->archivo['type'];
        $dir = "archivos/";
        if (!is_dir($dir)) {
            if (!mkdir($dir, 0755, true)) {
                return false;
            }
        }
        $resp = "";
        // Valida el tipo y el tamaño del archivo
        if ($tipo === "text" || $tipo === "text/plain") {
            if (move_uploaded_file($this->archivo['tmp_name'], $dir. $this->archivo['name'])){
                $rutaArchivo = $dir .  $this->archivo['name']; // Generar la ruta completa del archivo
                // Leer el contenido del archivo
                $this->resp = file_get_contents($rutaArchivo);
            } else {
                $this->resp = "Hubo un problema al guardar el archivo.";
            }
            return $this->resp; 
        } else {
            return $this->resp; 
        }
    }
}
?>
