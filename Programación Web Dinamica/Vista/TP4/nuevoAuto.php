<?php  
include_once("../../configuracion.php");
include (STRUCTURE_PATH."cabecera.php"); 
?>

<main class="flex-fill bg-light">
    <div class="container my-4">
        <div class="card" style="max-width: 500px; margin: auto;"> 
            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Registrar Auto:</h5>
            </div>
            <div class="card-body">
                <hr class="my-2">
                <form action="../TP4/accion/accionNuevoAuto.php" method="post" id="formAuto" name="formAuto">
                    <div class="mb-3">
                        <label for="patente" class="form-label"><strong>Patente:</strong></label>
                        <input type="text" class="form-control" id="patente" name="patente" required>
                    </div>
                    <div class="mb-3">
                        <label for="marca" class="form-label"><strong>Marca:</strong></label>
                        <input type="text" class="form-control" id="marca" name="marca" required>
                    </div>
                    <div class="mb-3">
                        <label for="modelo" class="form-label"><strong>Modelo:</strong></label>
                        <input type="text" class="form-control" id="Modelo" name="Modelo" required>
                    </div>
                    <div class="mb-3">
                        <label for="nroDni" class="form-label"><strong>DNI del duenio:</strong></label>
                        <input type="text" class="form-control" id="nroDni" name="nroDni" required>
                    </div>
                    
                    <div class="d-flex justify-content-end mt-3">
                        <button type="submit" class="btn btn-primary">Registrar</button>
                        <a href="../verAutos.php" class="btn btn-danger ms-2">Volver</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php include (STRUCTURE_PATH."pie.php"); ?>