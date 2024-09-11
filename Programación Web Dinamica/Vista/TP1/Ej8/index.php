<?php 
include_once("../../../configuracion.php");
include (STRUCTURE_PATH."cabecera.php"); ?>

<main class="flex-fill bg-light">
    <div class="container my-4">
        <div class="card mx-auto" style="max-width: 500px;">
            <div class="card-body">
                <h5 class="card-title text-center">Bienvenido a CINEMA!</h5>
                <br>
                <form method="post" action="accion/accion.php" id="formEntradas" novalidate>
                    <!-- Fila para Edad -->
                    <div class="row mb-3 ">
                    <label for="edad" class="col-form-label col-sm-4">Edad:</label>
                        <div class="col-sm-6">
                            <input type="number" class="form-control" id="edad" name="edad">
                            <div class="invalid-feedback">Ingrese una edad válida.</div>
                        </div>
                    </div>
                    <!-- Fila para Es estudiante -->
                    <div class="row mb-3">
                        <label for="estudiante" class="col-form-label col-sm-4">¿Es estudiante?</label>
                        <div class="col-sm-8">
                            <div class="d-flex flex-wrap">
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="radio" name="estudiante" id="estudiante_si" value="si">
                                    <label class="form-check-label" for="estudiante_si">Sí</label>
                                </div>
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="radio" name="estudiante" id="estudiante_no" value="no">
                                    <label class="form-check-label" for="estudiante_no">No</label>
                                </div>
                                <div class="invalid-feedback mt-2">Seleccione una opción.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Fila para Botones -->
                    <div class="row mb-3">
                        <div class="col-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-dark me-2">Enviar</button>
                            <button type="reset" class="btn btn-danger">Borrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php include (STRUCTURE_PATH."pie.php"); ?>
