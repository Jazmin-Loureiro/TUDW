<?php  
include_once("../../../configuracion.php");
include (STRUCTURE_PATH."cabecera.php"); 
?>

<main class="flex-fill bg-light">
    <div class="container my-4">
        <div class="card" style="max-width: 500px; margin: auto;"> 
            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Resultado de búsqueda:</h5>
            </div>
            <div class="card-body">
                <?php
                $datos = data_submitted();
                if ($datos) {
                    $control = new AbmPersona();
                    $resp = $control->buscar($datos);
                    
                    if ($resp && isset($resp[0])) {
                        $persona = $resp[0];
                ?>
                    <h6 class="text-primary">Información de Persona</h6>
                    <hr class="my-2">
     
                    <form action="actualizarPersona.php" method="post">
                    
                        
                        <div class="mb-3">
                            <label for="Nombre" class="form-label"><strong>Nombre:</strong></label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $persona->getNombre(); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label"><strong>Apellido:</strong></label>
                            <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $persona->getApellido(); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="nroDni" class="form-label"><strong>DNI:</strong></label>
                            <input type="text" class="form-control" id="nroDni" name="nroDni" value="<?php echo $persona->getNroDni(); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="fecha_nacimiento" class="form-label"><strong>Fecha de Nacimiento:</strong></label>
                            <input type="date" class="form-control" id="fechaNac" name="fechaNac" value="<?php echo $persona->getFechaNac(); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label"><strong>Teléfono:</strong></label>
                            <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $persona->getTelefono(); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="domicilio" class="form-label"><strong>Domicilio:</strong></label>
                            <input type="text" class="form-control" id="domicilio" name="domicilio" value="<?php echo $persona->getDomicilio(); ?>">
                        </div>
                        
                        <div class="d-flex justify-content-end mt-3">
                            <button type="accion/actualizarPersona.php" class="btn btn-primary">Actualizar</button>
                            <a href="../listaPersonas.php" class="btn btn-danger ms-2">Volver</a>
                        </div>
                    </form>
                    
                <?php
                    } else {
                        echo '<p class="text-danger">No se encontraron datos para los criterios especificados.</p>';
                    }
                }
                ?>
               
            </div>
        </div>
    </div>
</main>

<?php include (STRUCTURE_PATH."pie.php"); ?>

