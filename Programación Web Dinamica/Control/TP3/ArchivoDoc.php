<?php
class ArchivoDoc {
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

    public function validarArchivo($datos) {
        $this->archivo = $datos['archivo']; 
        $dir = "imagenes/";
        if (!is_dir($dir)) {
            if (!mkdir($dir, 0755, true)) {
                return false;
            }
        }
        $tipo =  $this->archivo['type'];
        $size =  $this->archivo['size'];
        $limite_tamano = 2 * 1024 * 1024; // 2 MB
        // Valida el tipo y el tamaño del archivo
        if ($tipo === "application/doc" || $tipo === "application/docx" || $tipo === "application/pdf" && $size <= $limite_tamano) {
            if (move_uploaded_file( $this->archivo['tmp_name'], $dir. $this->archivo['name'])){
                $rutaArchivo = $dir .  $this->archivo['name']; 
                $this->resp = "Archivo válido. Puedes descargarlo <a href='$rutaArchivo' target='_blank'>aquí</a>.";
            } 
            return $this->resp; // Archivo válido
        } else {
            return $this->resp; // Archivo no válido
        }
    }
}
?>
