<?php 
include_once("../../../configuracion.php");
include (STRUCTURE_PATH."cabecera.php"); 
?>

<main class="flex-fill bg-light">
    <div class="container my-4">
        <div class="card mx-auto" style="max-width: 50rem;">
            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Resultado de búsqueda:</h5>
            </div>
            <div class="card-body">
                <?php
                $datos = data_submitted();
                if ($datos) {
                    $controlPersona = new AbmPersona();
                    $resp = $controlPersona->buscar($datos);
                    
                    if ($resp && isset($resp[0])) {
                        $objeto = $resp[0]; // Persona encontrada
                        $personaDNI = $objeto->getNroDni();

                        // Buscar los autos asociados a la persona 
                        $controlAuto = new AbmAuto();
                        $autos = $controlAuto->buscar(NULL);

                        $autosEncontrados = false; 
                        if ($autos) {
                            echo "<h6 class='text-primary'>Autos Asociados a ".$objeto->getNombre()." ".$objeto->getApellido()."</h6>";
                            echo '<hr class="my-2">';
                            foreach ($autos as $auto) {
                                $objDuenio = $auto->getDniDuenio()->getNroDni();
                                if ($objDuenio === $personaDNI) {
                                    $autosEncontrados = true; // Se encontró un auto
                                ?>
                                    <p class="card-text text-dark"><strong>Patente:</strong> <?=$auto->getPatente(); ?></p>
                                    <p class="card-text text-dark"><strong>Marca:</strong> <?=$auto->getMarca(); ?></p>
                                    <p class="card-text text-dark"><strong>Modelo:</strong> <?= $auto->getModelo(); ?></p>
                                    <br>
                                    <hr class="my-1">
                                <?php
                                }
                            }
                            if (!$autosEncontrados) {
                                echo '<p class="text-danger">No se encontraron autos asociados a esta persona.</p>';
                            }
                        } else {
                            echo '<p class="text-danger">No se encontraron autos para la persona.</p>';
                        }
                    } else {
                        echo '<p class="text-danger">No se encontraron datos para los criterios especificados.</p>';
                    }
                }
                ?>
                
                <div class="d-flex justify-content-end mt-3">
                    <a href="../listaPersonas.php" class="btn btn-dark">Volver</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include (STRUCTURE_PATH."pie.php"); ?>
