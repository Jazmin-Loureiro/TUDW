<?php 
include_once("../../../configuracion.php");
include (STRUCTURE_PATH."cabecera.php"); 
include_once ('../../../Control/TP2/Control_ej2.php');?>

<main class="flex-fill bg-light">
    <div class="container my-4">
        <div class="card mx-auto" style="max-width: 50rem;" >
            <div class="card-header d-flex justify-content-between align-items-center text-primary">
                <h5 class="mb-0">Pelicula Introducida Es:</h5>
                <button type="button" class="btn-close" aria-label="Close"></button>
            </div>
            <div class="card-body">
                <?php
                $datos=data_submitted();
                if ($datos) {
                    $control = new Control_Ej2();
                    $resp = $control->mostrar($datos);
                ?>
                    <p class="card-text">
                    <p class="card-text text-success"><strong>Nombre:</strong> <?php echo $resp["titulo"]; ?> </p>
                    <p class="card-text text-success"><strong>Actores:</strong> <?php echo $resp["actores"]; ?> </p>
                    <p class="card-text text-success"><strong>Director:</strong> <?php echo $resp["director"]; ?> </p>
                    <p class="card-text text-success"><strong>Guion:</strong> <?php echo $resp["guion"]; ?> </p>
                    <p class="card-text text-success"><strong>Producción:</strong> <?php echo $resp["produccion"]; ?> </p>
                    <p class="card-text text-success"><strong>Año:</strong> <?php echo $resp["año"]; ?> </p>
                    <p class="card-text text-success"><strong>Nacionalidad:</strong> <?php echo $resp["nacionalidad"]; ?> </p>
                    <p class="card-text text-success"><strong>Duración:</strong> <?php echo $resp["duracion"]; ?> </p>
                    <p class="card-text text-success"><strong>Restricciones:</strong> <?php echo $resp["restricciones"]; ?> </p>
                    <p class="card-text text-success"><strong>Sinopsis:</strong> <?php echo $resp["sinopsis"]; ?> </p>
                    </p>
                <?php
                }
                ?>
               
                <div class="d-flex justify-content-end">
                    <a href="index.php" class="btn btn-dark">Volver</a>
                </div>

            </div>
        </div>
    </div>
</main>


<?php include (STRUCTURE_PATH."pie.php"); ?>


