<?php 
include_once("../../../configuracion.php");
include (STRUCTURE_PATH."cabecera.php"); 
include_once ('../../../Control/TP1/Control_ej2.php');?>

<main class="flex-fill bg-light">
    <div class="container my-4">
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">Resultado:</h5>
            <?php
            $datos=data_submitted();
            if (isset($datos)) {
                $horas = $datos["horas"];
                echo "<ul>";
                foreach ($horas as $dia => $hora) {
                    echo "<li><strong>" . ucfirst($dia) . ":</strong> " . $hora . " horas</li>";
                }
                echo "</ul>";
                $control = new control_ej2();
                $resultado = $control->calcularHoras($horas);
                ?>  <p class="card-text">Cantidad de horas semanales: <?php echo $resultado; ?></p>
                 <?php

            } else {
                echo "<p>No se recibieron datos.</p>";
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

