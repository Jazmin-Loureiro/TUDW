<?php 
include_once("../../../configuracion.php");
include (STRUCTURE_PATH."cabecera.php"); ?>

<main class="flex-fill bg-light">
    <div class="container my-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Ingrese sus datos:</h5> 
                <br>

                <form method="post" action="accion/accion.php" id="FormDatos2" novalidate>
                    <!-- Fila para Nombre, Apellido y Edad -->
                    <div class="row mb-3">
                        <!-- Columna para Nombre -->
                        <div class="col-sm-4">
                            <label for="nombre" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                            <div class="invalid-feedback">Ingrese su nombre. (solo letras)</div>
                        </div>
                        <!-- Columna para Apellido -->
                        <div class="col-sm-4">
                            <label for="apellido" class="col-form-label">Apellido:</label>
                            <input type="text" class="form-control" id="apellido" name="apellido">
                            <div class="invalid-feedback">Ingrese su apellido. (solo letras)</div>
                        </div>
                        <!-- Columna para Edad -->
                        <div class="col-sm-3">
                            <label for="edad" class="col-form-label">Edad:</label>
                            <input type="number" class="form-control" id="edad" name="edad">
                            <div class="invalid-feedback"> Ingrese su edad. (solo numeros)</div>
                        </div>
                    </div>

                    <!-- Fila para Dirección, Educación y Sexo -->
                    <div class="row mb-3">
                        <!-- Columna para Dirección -->
                        <div class="col-sm-4">
                            <label for="direccion" class="col-form-label">Dirección:</label>
                            <input type="text" class="form-control" id="direccion" name="direccion">
                            <div class="invalid-feedback">Ingrese su dirección.</div>
                        </div>
                        
                        <!-- Columna para Educación -->
                        <div class="col-sm-4">
                            <label for="educacion" class="col-form-label">Educación:</label>
                            <div class="d-flex flex-row">
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="radio" name="educacion" id="educacion1" value="sin estudios" checked>
                                    <label class="form-check-label" for="educacion1">No tiene</label>
                                </div>
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="radio" name="educacion" id="educacion2" value="primario">
                                    <label class="form-check-label" for="educacion2">Primario</label>
                                </div>
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="radio" name="educacion" id="educacion3" value="secundario">
                                    <label class="form-check-label" for="educacion3">Secundario</label>
                                </div>
                            </div>
                            <div class="invalid-feedback">Seleccione su nivel de educación.</div>
                        </div>

                        <!-- Columna para Sexo -->
                        <div class="col-sm-2">
                            <label for="sexo" class="col-form-label">Sexo:</label>
                            <select class="form-select" id="sexo" name="sexo">
                                <option value="" disabled selected>Seleccionar</option>
                                <option value="femenino">Femenino</option>
                                <option value="masculino">Masculino</option>
                            </select>
                            <div class="invalid-feedback">Por favor, seleccione su sexo.</div>
                        </div>
                    </div>

                    <!-- Fila para Deportes -->
                    <div class="row mb-3">
                        <label for="deportes" class="col-sm-2 col-form-label">Deportes:</label>
                        <div class="col-sm-10">
                            <div class="d-flex flex-wrap">
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="checkbox" value="futbol" id="deporte1" name="deportes[]">
                                    <label class="form-check-label" for="deporte1">Futbol</label>
                                </div>
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="checkbox" value="basquet" id="deporte2" name="deportes[]">
                                    <label class="form-check-label" for="deporte2">Basquet</label>
                                </div>
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="checkbox" value="voley" id="deporte3" name="deportes[]">
                                    <label class="form-check-label" for="deporte3">Voley</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="tenis" id="deporte4" name="deportes[]">
                                    <label class="form-check-label" for="deporte4">Tenis</label>
                                </div>
                            </div>
                            <div class="invalid-feedback">Por favor, seleccione al menos un deporte.</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2 offset-sm-10">
                            <button type="submit" class="btn btn-dark w-100">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php include (STRUCTURE_PATH."pie.php"); ?>
