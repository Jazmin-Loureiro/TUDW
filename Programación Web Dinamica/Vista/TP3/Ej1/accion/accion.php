<?php include_once("../../../../configuracion.php");
include (STRUCTURE_PATH."cabecera.php"); ?>

<main class="flex-fill bg-light">
    <div class="container my-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Bienvenido:</h5>
                <?php
                $datos = data_submitted();
                if ($datos) { 
                    $control = new archivoDoc();
                    $resultado = $control->validarArchivo($datos);
                    if ($resultado) {
                        ?> <p class="card-text">El resultado es: <?php echo $resultado; ?></p> <?php
                    } else {
                        $resp = "Archivo no válido o demasiado grande (máximo 2MB).";
                    }
                }
                ?> 
                <div class="d-flex justify-content-end">
                    <a href="../index.php" class="btn btn-dark">Volver</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include (STRUCTURE_PATH."pie.php");  ?>
