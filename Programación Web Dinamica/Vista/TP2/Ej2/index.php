<?php 
include_once("../../../configuracion.php");
include (STRUCTURE_PATH."cabecera.php"); ?>

<main class="flex-fill bg-light">
    <div class="container my-4">
        <div class="card mx-auto" style="max-width: 50rem;">
            <div class="card-header">
                <!-- Encabezado del formulario -->
                <div class="d-flex align-items-center p-1 bg-light border border-light rounded-top">
                    <i class="fas fa-ticket-alt text-primary me-2"></i>
                    <span class="text-primary">Cinem@s</span>
                </div>
            </div>
            <div class="card-body">
                <form method="post" action="accion/accion.php" id="FormCinema" novalidate>
                    <!-- Fila para título y actores -->
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <label for="titulo" class="col-form-label"><strong>Título:</strong></label>
                            <input type="text" class="form-control" id="titulo" name="titulo" required>
                            <div class="invalid-feedback">
                                Ingrese un título.
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="actores" class="col-form-label"><strong>Actores:</strong></label>
                            <input type="text" class="form-control" id="actores" name="actores" required>
                            <div class="invalid-feedback">
                                Ingrese un actor.
                            </div>
                        </div>
                    </div>

                    <!-- Fila para director y guion -->
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <label for="director" class="col-form-label"><strong>Director:</strong></label>
                            <input type="text" class="form-control" id="director" name="director" pattern="[A-Za-zÀ-ÿ\s]+" title="Solo se permiten letras">
                            <div class="invalid-feedback">
                                Ingrese un Director.
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="guion" class="col-form-label"><strong>Guion:</strong></label>
                            <input type="text" class="form-control" id="guion" name="guion" pattern="[A-Za-zÀ-ÿ\s]+" title="Solo se permiten letras">
                            <div class="invalid-feedback">
                                Ingrese un guion.
                            </div>
                        </div>
                    </div>

                    <!-- Fila para producción y año -->
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <label for="produccion" class="col-form-label"><strong>Producción:</strong></label>
                            <input type="text" class="form-control" id="produccion" name="produccion" pattern="[A-Za-zÀ-ÿ\s]+" title="Solo se permiten letras">
                            <div class="invalid-feedback">
                                Ingrese producción.
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="año" class="col-form-label"><strong>Año:</strong></label>
                            <input type="number" class="form-control" id="año" name="año" min="1895" max="<?php echo date('Y'); ?>">
                            <div class="invalid-feedback">
                                El año debe ser entre 1895 y el año actual.
                            </div>
                        </div>
                    </div>

                    <!-- Fila para nacionalidad, género, duración y restricciones -->
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <label for="nacionalidad" class="col-form-label"><strong>Nacionalidad:</strong></label>
                            <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" pattern="[A-Za-zÀ-ÿ\s]+" title="Solo se permiten letras">
                            <div class="invalid-feedback">
                                Ingrese nacionalidad.
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="genero" class="col-form-label"><strong>Género:</strong></label>
                            <select class="form-select" id="genero" name="genero" required>
                                <option value="" disabled selected>Seleccionar</option>
                                <option value="Comedia">Comedia</option>
                                <option value="Drama">Drama</option>
                                <option value="Terror">Terror</option>
                                <option value="Romántica">Romántica</option>
                                <option value="Suspenso">Suspenso</option>
                                <option value="Otro">Otro</option>
                            </select>
                            <div class="invalid-feedback">Por favor, seleccione un género.</div>
                        </div>
                    </div>

                    <!-- Fila para duración y restricciones -->
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <label for="duracion" class="col-form-label"><strong>Duración:</strong></label>
                            <input type="number" class="form-control" id="duracion" name="duracion" min="1" max="999" required>
                            <div class="invalid-feedback">
                                La duración debe ser un número positivo con hasta 3 dígitos.
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="restricciones" class="col-form-label"><strong>Restricciones:</strong></label>
                            <div class="d-flex flex-row">
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="radio" name="restricciones" id="restricciones1" value="Todo publico" checked>
                                    <label class="form-check-label" for="restricciones1">Todo público</label>
                                </div>
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="radio" name="restricciones" id="restricciones2" value="Mayor a 7">
                                    <label class="form-check-label" for="restricciones2">Mayor 7</label>
                                </div>
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="radio" name="restricciones" id="restricciones3" value="Mayor 18">
                                    <label class="form-check-label" for="restricciones3">Mayor 18</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Fila para Sinopsis -->
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <label for="sinopsis" class="col-form-label"><strong>Sinopsis:</strong></label>
                            <textarea class="form-control" id="sinopsis" name="sinopsis" rows="3" required></textarea>
                            <div class="invalid-feedback">
                                Ingrese una sinopsis.
                            </div>
                        </div>
                    </div>

                    <!-- Botones de Enviar y Borrar -->
                    <div class="d-flex justify-content-end mt-3">
                        <button type="submit" class="btn btn-primary me-2">Enviar</button>
                        <button type="reset" class="btn btn-danger">Borrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php include (STRUCTURE_PATH."pie.php"); ?>
