<?php 
include_once("../../../configuracion.php");
include (STRUCTURE_PATH."cabecera.php"); ?>

<main class="flex-fill bg-light">
    <div class="container my-4">
        <div class="d-flex justify-content-center align-items-center" style="min-height: 50vh;">
            <div class="card w-100 " style="max-width: 800px;">
                <div class="card-body">
                    <h5 class="card-title text-center mb-2">Calculadora</h5>
                    <hr>
                    <form method="get" action="accion/accion.php" id="formOperacion" novalidate>
                        <!-- Fila para Operador 1 y Operador 2 -->
                        <div class="row mb-3 justify-content-center">
                            <!-- Operador 1 -->
                            <div class="col-sm-4 mb-3">
                                <label for="operador1" class="form-label">Operador 1:</label>
                                <input type="text" class="form-control" id="operador1" name="operador1" >
                                <div class="invalid-feedback">
                                    Ingrese un número válido.
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label for="operacion" class="form-label">Operación:</label>
                                <select class="form-select" id="operacion" name="operacion" >
                                    <option value="" disabled selected>operación</option>
                                    <option value="Suma">Suma</option>
                                    <option value="Resta">Resta</option>
                                    <option value="Multiplicacion">Multiplicacion</option>
                                </select>
                                <div class="invalid-feedback">
                                    Seleccione una operación.
                                </div>
                            </div>
                            <!-- Operador 2 -->
                            <div class="col-sm-4 mb-2">
                                <label for="operador2" class="form-label">Operador 2:</label>
                                <input type="text" class="form-control" id="operador2" name="operador2" >
                                <div class="invalid-feedback">
                                    Ingrese un número válido.
                                </div>
                            </div>
                        </div>
                        <!-- Fila para el Botón de Enviar -->
                        <div class="row justify-content-center">
                            <div class="col-sm-7 mb-4" >
                                <button type="submit" class="btn btn-dark w-100">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include (STRUCTURE_PATH."pie.php"); ?>
