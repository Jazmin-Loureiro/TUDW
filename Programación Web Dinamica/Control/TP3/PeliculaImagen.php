<?php
class PeliculaImagen {

    private $titulo;
    private $actores;
    private $director;
    private $guion;
    private $produccion;
    private $año;
    private $nacionalidad;
    private $duracion;
    private $restricciones;
    private $sinopsis;
    private $imagenCine;
    private $resp;

    public function __construct() {
        $this->titulo = "";
        $this->actores = "";
        $this->director = "";
        $this->guion = "";
        $this->produccion = "";
        $this->año = "";
        $this->nacionalidad = "";
        $this->duracion = "";
        $this->restricciones = "";
        $this->sinopsis = "";
        $this->imagenCine = "";
        $this->resp = "";
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getActores() {
        return $this->actores;
    }

    public function setActores($actores) {
        $this->actores = $actores;
    }

    public function getDirector() {
        return $this->director;
    }

    public function setDirector($director) {
        $this->director = $director;
    }

    public function getGuion() {
        return $this->guion;
    }

    public function setGuion($guion) {
        $this->guion = $guion;
    }

    public function getProduccion() {
        return $this->produccion;
    }

    public function setProduccion($produccion) {
        $this->produccion = $produccion;
    }

    public function getAño() {
        return $this->año;
    }

    public function setAño($año) {
        $this->año = $año;
    }

    public function getNacionalidad() {
        return $this->nacionalidad;
    }

    public function setNacionalidad($nacionalidad) {
        $this->nacionalidad = $nacionalidad;
    }

    public function getDuracion() {
        return $this->duracion;
    }

    public function setDuracion($duracion) {
        $this->duracion = $duracion;
    }

    public function getRestricciones() {
        return $this->restricciones;
    }

    public function setRestricciones($restricciones) {
        $this->restricciones = $restricciones;
    }

    public function getSinopsis() {
        return $this->sinopsis;
    }

    public function setSinopsis($sinopsis) {
        $this->sinopsis = $sinopsis;
    }

    public function getImagenCine() {
        return $this->imagenCine;
    }

    public function setImagenCine($imagenCine) {
        $this->imagenCine = $imagenCine;
    }

    public function getResp() {
        return $this->resp;
    }

    public function setResp($resp) {
        $this->resp = $resp;
    }

    public function cargar($datos) {
        $this->titulo = $datos["titulo"] ?? null;
        $this->actores = $datos["actores"] ?? null;
        $this->director = $datos["director"] ?? null;
        $this->guion = $datos["guion"] ?? null;
        $this->produccion = $datos["produccion"] ?? null;
        $this->año = $datos["año"] ?? null;
        $this->nacionalidad = $datos["nacionalidad"] ?? null;
        $this->duracion = $datos["duracion"] ?? null;
        $this->restricciones = $datos["restricciones"] ?? null;
        $this->sinopsis = $datos["sinopsis"] ?? null;

        $this->imagenCine = null;
        $dir = "imagenes/";
        if (!is_dir($dir)) {
            if (!mkdir($dir, 0755, true)) {
                return false;
            }
        }

        if (!empty($datos['imagenCine']['tmp_name'])) {
            $imagen = $datos['imagenCine']['name'];
            $ruta = $dir . $imagen;
            if (move_uploaded_file($datos['imagenCine']['tmp_name'], $ruta)) {
                $this->imagenCine = "<img src='$ruta' class='img-fluid'>";
            }
        }
    }

    public function mostrar($datos) {
        $this->cargar($datos);
        return [
            "titulo" => $this->titulo,
            "actores" => $this->actores,
            "director" => $this->director,
            "guion" => $this->guion,
            "produccion" => $this->produccion,
            "año" => $this->año,
            "nacionalidad" => $this->nacionalidad,
            "duracion" => $this->duracion,
            "restricciones" => $this->restricciones,
            "sinopsis" => $this->sinopsis,
            "imagen" => $this->imagenCine
        ];
    }
   
}
?>
