<?php  
include_once("../../../configuracion.php");
include (STRUCTURE_PATH."cabecera.php"); 
?>

<main class="flex-fill bg-light">
    <div class="container my-4">
        <div class="card" style="max-width: 500px; margin: auto;"> 
            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Datos actualizados</h5>
            </div>
            <div class="card-body">
                <?php
                $datos = data_submitted();
                if ($datos) {
                    $nuevosDatos = array();
                    $nuevosDatos = $respAuto[0] -> getPatente();
                    $nuevosDatos = $respAuto[0] -> getMarca();
                    $nuevosDatos = $respAuto[0] -> getModelo();
                    $respAuto[0] -> setDniDuenio($respPersona[0] -> getNroDni());
                    $nuevosDatos = $respAuto[0] -> getDniDuenio();
                    $resp = $controlAuto->modificacion($nuevosDatos); 
    
                    if ($respAuto && $respPersona) {
                        $nuevosDatos = array();
                        $nuevosDatos = $respAuto[0];
                        $nuevosDatos -> setDniDuenio($respPersona[0] -> getNroDni());
                        $resp = $controlAuto->modificacion($nuevosDatos); 
                        
                        if($resp){
                            echo '<div class="alert alert-success" role="alert">Datos actualizados con exito.</div>';
                        } else {
                            echo '<div class="alert alert-danger" role="alert">Hubo un error al actualizar los datos.</div>';
                        }
                        
                    } elseif (!$respAuto) {
                        echo '<div class="alert alert-danger" role="alert">La patente ingresada no existe.</div>';
                    } elseif (!$respPersona) {
                        echo '<div class="alert alert-danger" role="alert">El DNI ingresado no existe.</div>';
                    }
                }
                else {
                    echo '<div class="alert alert-warning" role="alert">No se recibieron datos para ingresar.</div>';
                }
                echo '<div class="d-flex justify-content-end mt-3">
                <a href="../verAutos.php" class="btn btn-danger">Volver</a>
                </div>';
                ?>
            </div>
        </div>
    </div>
</main>

<?php include (STRUCTURE_PATH."pie.php"); ?>
