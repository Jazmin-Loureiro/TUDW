<?php  
include_once("../../configuracion.php");
include (STRUCTURE_PATH."cabecera.php"); 
?>

<main class="flex-fill bg-light">
    <div class="container my-4">
        <div class="card" style="max-width: 500px; margin: auto;"> 
            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Cambio de dueño</h5>
            </div>
            <div class="card-body">
                <hr class="my-2">
                <form action="accionCambioDuenio.php" method="post" id="formCambioDuenio" name="formCambioDuenio">
                    <div class="mb-3">
                        <label for="nombre" class="form-label"><strong>Patente:</strong></label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="nroDni" class="form-label"><strong>DNI Nuevo duenio:</strong></label>
                        <input type="text" class="form-control" id="nroDni" name="nroDni" required>
                    </div>
                    
                    <div class="d-flex justify-content-end mt-3">
                        <button type="submit" class="btn btn-primary">Modificar</button>
                        <a href="../verAutos.php" class="btn btn-danger ms-2">Volver</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php include (STRUCTURE_PATH."pie.php"); ?>