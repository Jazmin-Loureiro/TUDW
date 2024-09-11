<?php
class control_ej1 {
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
        $resp = false;
    
        // Ruta absoluta del directorio de almacenamiento
        $dir = __DIR__ . "/archivos/";
    
        // Verifica si la carpeta 'archivos/' existe; si no, la crea
        if (!file_exists($dir)) {
            if (!mkdir($dir, 0777, true)) {
                return "Error al crear el directorio 'archivos/'. Verifica los permisos.";
            }
        }
    
        $tipo =  $this->archivo['type'];
        $size =  $this->archivo['size'];
        $limite_tamano = 2 * 1024 * 1024; // 2 MB
    
        // Valida el tipo y el tamaño del archivo
        if (($tipo === "application/doc" || $tipo === "application/vnd.openxmlformats-officedocument.wordprocessingml.document" || $tipo === "application/pdf") && $size <= $limite_tamano) {
            if (move_uploaded_file($this->archivo['tmp_name'], $dir . $this->archivo['name'])){
                $rutaArchivo = $dir . $this->archivo['name']; 
                $resp = "Archivo válido. Puedes descargarlo <a href='$rutaArchivo' target='_blank'>aquí</a>.";
            } else {
                $resp = "Error al mover el archivo.";
            }
        } else {
            $resp = "Archivo no válido. Debe ser un documento DOC, DOCX o PDF y no exceder 2 MB.";
        }
    
        return $resp;
    }
    
    
}
?>
