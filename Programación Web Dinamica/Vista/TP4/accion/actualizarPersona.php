<?php  
include_once("../../../configuracion.php");
include (STRUCTURE_PATH."cabecera.php"); 
?>

<main class="flex-fill bg-light">
    <div class="container my-4">
        <div class="card" style="max-width: 500px; margin: auto;"> 
            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Resultado de búsqueda:</h5>
            </div>
            <div class="card-body">
                <?php
                $datos = data_submitted();
                if ($datos) {
                    $control = new AbmPersona();
                    $resp = $control->modificacion($datos);
                    
                    if ($resp) {
                        echo '<div class="alert alert-success" role="alert">Persona actualizada con éxito.</div>';
                    } else {
                        echo '<div class="alert alert-danger" role="alert">Hubo un error al actualizar la persona. Por favor, VALIDAR que la entrada sean campos modificados.</div>';
                    }
                } else {
                    echo '<div class="alert alert-warning" role="alert">No se recibieron datos para actualizar.</div>';
                }
                  echo '<div class="d-flex justify-content-end mt-3">
                  <a href="../buscarPersona.php" class="btn btn-danger">Volver</a>
                </div>';
                ?>
            </div>
        </div>
    </div>
</main>

<?php include (STRUCTURE_PATH."pie.php"); ?>
