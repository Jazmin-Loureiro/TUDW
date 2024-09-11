<?php  
include_once("../../../configuracion.php");
include (STRUCTURE_PATH."cabecera.php"); 
?>

<main class="flex-fill bg-light">
    <div class="container my-4">
        <div class="card" style="max-width: 500px; margin: auto;"> 
            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Nueva persona</h5>
            </div>
            <div class="card-body">
                <?php
                $datos = data_submitted();
                if ($datos) {
                    $control = new AbmPersona();
                    $duenio = $control->buscar($datos['nroDni']);
                    if ($duenio) {
                        $controlAuto = new AbmAuto();
                        $resp = $controlAuto->alta($datos);
                        echo '<div class="alert alert-success" role="alert">Auto ingresado con exito.</div>';
                    } else {
                        echo '<div class="alert alert-danger" role="alert">No se encontro la persona con el DNI ingresado. Cargue a la persona primero en el siguiente link y luego cargue el auto devuelta.</div>';
                        echo '<div class="d-flex justify-content-end mt-3">
                        <a href="../nuevaPersona.php" class="btn btn-danger">Cargar Nueva persona</a>
                        </div>';
                    }
                } 
                else {
                    echo '<div class="alert alert-warning" role="alert">No se recibieron datos para ingresar.</div>';
                }
                echo '<div class="d-flex justify-content-end mt-3">
                <a href="../nuevAuto.php" class="btn btn-danger">Volver</a>
                </div>';
                ?>
            </div>
        </div>
    </div>
</main>

<?php include (STRUCTURE_PATH."pie.php"); ?>