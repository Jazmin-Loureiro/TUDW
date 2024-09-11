<?php
include_once("../../../configuracion.php");
include (STRUCTURE_PATH."cabecera.php"); 
include_once ('../../../Control/TP3/Control_ej2.php');?>

<main class="flex-fill bg-light">
    <div class="container my-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Bienvenido:</h5>
                <?php
                $datos = data_submitted();
                if ($datos) {  
                    $control = new control_ej2();
                    $resultado = $control->validarText($datos);
                    if ($resultado) {
                        ?> 
                        <textarea class="form-control" id="text" name="text" rows="5"><?php echo $resultado; ?></textarea>
                        <?php
                    } else {
                        $resp = "Archivo no válido";
                    }
                } else {
                    $resp = "No se ha enviado ningún archivo.";
                }
                ?> 
              
             <p></p>
                
                <div class="d-flex justify-content-end">
                    <a href="index.php" class="btn btn-dark">Volver</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include (STRUCTURE_PATH."pie.php"); ?>

