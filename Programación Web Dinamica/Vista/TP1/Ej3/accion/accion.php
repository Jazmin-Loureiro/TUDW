<?php 
include_once("../../../../configuracion.php");
include (STRUCTURE_PATH."cabecera.php");?>


<main class="flex-fill bg-light">
    <div class="container my-4">
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">Bienvenido:</h5>
            <?php
            $datos=data_submitted();
            if ($datos) {
                $control = new Control_Ej3();
                $resp = $control->mostrarMensaje($datos);
            ?>  
            <p class="card-text">
                <?php echo $resp; ?> </p>
    
            <?php
            } else {
                echo "<p>No se recibieron datos.</p>";}
            ?>
            <div class="d-flex justify-content-end">
                <a href="../index.php" class="btn btn-dark">Volver</a>
            </div>
            </div>
        </div>
    </div>
</main>
<?php include (STRUCTURE_PATH."pie.php"); ?>