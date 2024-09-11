<?php 
include_once("../../configuracion.php");
include (STRUCTURE_PATH."cabecera.php"); 
?>
<main class="flex-fill bg-light">
    <!-- Contenedor Lista de personas en base de datos. -->
    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <h5 class="mb-4">Lista de Personas:</h5>
            </div>
            <?php
            $persona = new Persona();
            $personas = $persona->listar();
            if (count($personas) > 0) {
                foreach ($personas as $persona) {
            ?>
         <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body d-flex flex-column">
                    <h6 class="card-title"><?= $persona->getNombre() . " " . $persona->getApellido(); ?></h6>
                    <p class="card-text mb-1"><strong>DNI:</strong> <?= $persona->getNroDni(); ?></p>
                    <p class="card-text mb-1"><strong>Fecha de Nacimiento:</strong> <?= $persona->getFechaNac(); ?></p>
                    <p class="card-text mb-1"><strong>Teléfono:</strong> <?= $persona->getTelefono(); ?></p>
                    <p class="card-text mb-1"><strong>Domicilio:</strong> <?= $persona->getDomicilio(); ?></p>
                    <br>
                    <a href="accion/autosPersona.php"<?nroDni=<?= $persona->getNroDni(); ?>" class="btn btn-primary mt-auto">Ver Autos</a>
                </div>
            </div>
        </div>
        <?php
        }} else {
            ?>
            <div class="alert alert-info col-12">No se encontraron registros.</div>
            <?php
            }
            ?>
        </div>
    </div>
</main>
<?php include (STRUCTURE_PATH."pie.php"); ?>