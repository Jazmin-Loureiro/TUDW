<?php  
include_once("../../configuracion.php");
include (STRUCTURE_PATH."cabecera.php"); 
?>

<main class="flex-fill bg-light">
    <div class="container my-4">
        <div class="card" style="max-width: 500px; margin: auto;"> 
            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Registrar Persona:</h5>
            </div>
            <div class="card-body">
                <hr class="my-2">
                <form action="../TP4/accion/accionNuevaPersona.php" method="post" id="formPersona" name="formPersona">
                    <div class="mb-3">
                        <label for="nombre" class="form-label"><strong>Nombre:</strong></label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label"><strong>Apellido:</strong></label>
                        <input type="text" class="form-control" id="apellido" name="apellido" required>
                    </div>
                    <div class="mb-3">
                        <label for="nroDni" class="form-label"><strong>DNI:</strong></label>
                        <input type="text" class="form-control" id="nroDni" name="nroDni" required>
                    </div>
                    <div class="mb-3">
                        <label for="fechaNac" class="form-label"><strong>Fecha de Nacimiento:</strong></label>
                        <input type="date" class="form-control" id="fechaNac" name="fechaNac" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label"><strong>Teléfono:</strong></label>
                        <input type="text" class="form-control" id="telefono" name="telefono">
                    </div>
                    <div class="mb-3">
                        <label for="domicilio" class="form-label"><strong>Domicilio:</strong></label>
                        <input type="text" class="form-control" id="domicilio" name="domicilio">
                    </div>
                    
                    <div class="d-flex justify-content-end mt-3">
                        <button type="submit" class="btn btn-primary">Subir</button>
                        <a href="../listaPersonas.php" class="btn btn-danger ms-2">Volver</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php include (STRUCTURE_PATH."pie.php"); ?>