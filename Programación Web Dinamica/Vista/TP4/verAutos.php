<?php
include_once("../../configuracion.php");
include (STRUCTURE_PATH."cabecera.php");
?>
<main class="flex-fill bg-light">
    <div class="container my-2">
        <div class="row">
            <div class="col-12">
                <h5 class="mb-4">Lista de Autos:</h5>
            </div>
            <?php
            $auto = new AbmAuto();
            $listaAutos = $auto->buscar(null);

            if (count($listaAutos) > 0) {
                foreach ($listaAutos as $unAuto) {
                    $dniDuenio = $unAuto->getDniDuenio();
                    $duenio = new AbmPersona();
                    // Se busca al dueño por DNI
                    $arrayDuenio = $duenio->buscar(['nroDni' => $dniDuenio]); 

                    if (is_array($arrayDuenio) && count($arrayDuenio) > 0) {
                        $duenioObj = $arrayDuenio[0];  // Obtener el primer dueño encontrado
                        if (is_object($duenioObj)) {
                            $nombreCompleto = $duenioObj->getNombre() . ' ' . $duenioObj->getApellido();
                        } else {
                            $nombreCompleto = 'Dueño desconocido';
                        }
                    } else {
                        $nombreCompleto = 'Dueño desconocido';
                    }
            ?>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body d-flex flex-column">
                        <h6 class="card-title">Patente: <?= $unAuto->getPatente(); ?></h6>
                        <p class="card-text mb-1">Marca: <?= $unAuto->getMarca(); ?></p>
                        <p class="card-text mb-1">Modelo: <?= $unAuto->getModelo(); ?></p>
                        <p class="card-text">Dueño: <?= $nombreCompleto; ?></p>
                        <div class="mt-auto d-flex justify-content-center">
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
            } else {
            ?>
            <div class="alert alert-info col-12">No se encontraron registros.</div>
            <?php
            }
            ?>
        </div>
    </div>
</main>

<?php include (STRUCTURE_PATH."pie.php"); ?>