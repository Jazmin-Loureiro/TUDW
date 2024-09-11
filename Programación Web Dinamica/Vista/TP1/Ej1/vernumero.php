<?php 
include_once("../../../configuracion.php");
include (STRUCTURE_PATH."cabecera.php"); 
include_once ('../../../Control/TP1/Control_ej1.php');?>

<main class="flex-fill bg-light">
    <div class="container my-4">
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">Resultado:</h5>
            <?php
            if($_POST){
                $datos=data_submitted();
                $control = new control_ej1();
                $resultado = $control->verificarNumero($datos);
             }
            ?>
            <p class="card-text">El número es: <?php echo $resultado; ?></p>
            <div class="d-flex justify-content-end">
                <a href="index.php" class="btn btn-dark">Volver</a>
            </div>
            </div>
        </div>
    </div>
</main>
<?php include (STRUCTURE_PATH."pie.php"); ?>

