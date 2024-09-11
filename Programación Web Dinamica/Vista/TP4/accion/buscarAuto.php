<?php 
include_once("../../../configuracion.php");
include (STRUCTURE_PATH."cabecera.php"); ?>

<main class="flex-fill bg-light">
    <div class="container my-4">
        <div class="card mx-auto" style="max-width: 50rem;">
            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Resultado de busqueda:</h5>
            </div>
            <div class="card-body">
                <?php
                $datos = data_submitted();
                if ($datos) {
                    $control = new AbmAuto();
                    $resp = $control->buscar($datos);
                    
                    if ($resp && isset($resp[0])) {
                        $autoEncontrado = $resp[0];
                        $dniDuenio = $autoEncontrado->getDniDuenio();
                        $duenio = new AbmPersona();
                        $duenioAuto = $duenio->buscar(['nroDni' => $dniDuenio]);
                        $duenioObj = $arrayDuenio[0];
                        $nombreCompleto = $duenioObj->getNombre() . ' ' . $duenioObj->getApellido();
                        $dni = $duenioObj->getNroDni();
                        $fechaNac = $duenioObj->getFechaNac();
                        $telefono = $duenioObj->getTelefono();
                        $domicilio = $duenioObj->getDomicilio();
                    ?>
                    <!-- Información del Auto -->
                    <h6 class="text-primary">Información del Auto</h6>
                    <hr class="my-2">
                    <p class="card-text text-dark"><strong>Patente:</strong> <?php echo $autoEncontrado->getPatente(); ?> </p>
                    <p class="card-text text-dark"><strong>Marca:</strong> <?php echo $autoEncontrado->getMarca(); ?> </p>
                    <p class="card-text text-dark"><strong>Modelo:</strong> <?php echo $autoEncontrado->getModelo(); ?> </p>
                    
                    <!-- Información del Dueño -->
                    <h6 class="text-primary">Información del Dueño</h6>
                    <hr class="my-2">
                    <p class="card-text text-dark"><strong>DNI:</strong> <?php echo $dni; ?> </p>
                    <p class="card-text text-dark"><strong>Nombre y Apellido:</strong> <?php echo $nombreCompleto; ?> </p>
                    <p class="card-text text-dark"><strong>Fecha de Nacimiento:</strong> <?php echo $fecha; ?> </p>
                    <p class="card-text text-dark"><strong>Teléfono:</strong> <?php echo $telefono; ?> </p>
                    <p class="card-text text-dark"><strong>Domicilio:</strong> <?php echo $domicilio; ?> </p>
     
                <?php
                    } else {
                        echo '<p class="text-danger">No se encontraron datos para los criterios especificados.</p>';
                    }
                }
                ?>
               
                <div class="d-flex justify-content-end mt-3">
                    <a href="../verAutos.php" class="btn btn-dark">Volver</a>
                </div>

            </div>
        </div>
    </div>
</main>

<?php include (STRUCTURE_PATH."pie.php"); ?>
