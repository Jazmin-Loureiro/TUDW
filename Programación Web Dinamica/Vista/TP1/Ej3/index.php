<?php 
include_once("../../../configuracion.php");
include (STRUCTURE_PATH."cabecera.php"); ?>

<main class="flex-fill bg-light">
    <div class="container my-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Formulario de Datos:</h5>
                <br>
                <form method="get" action="accion/accion.php" id="formDatos" novalidate>
                    <!-- Fila para Nombre -->
                    <div class="row mb-3">
                        <label for="nombre" class="col-sm-2 col-form-label text-end">Nombre:</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="nombre" name="nombre" >
                            <div class="invalid-feedback">
                                Ingrese un nombre (solo letras)
                            </div>
                        </div>
                    </div>

                    <!-- Fila para Apellido -->
                    <div class="row mb-3">
                        <label for="apellido" class="col-sm-2 col-form-label text-end">Apellido:</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="apellido" name="apellido" >
                            <div class="invalid-feedback">
                                Ingrese un apellido (solo letras).
                            </div>
                        </div>
                    </div>

                    <!-- Fila para Edad -->
                    <div class="row mb-3">
                        <label for="edad" class="col-sm-2 col-form-label text-end">Edad:</label>
                        <div class="col-sm-2">
                            <input type="number" class="form-control" id="edad" name="edad" >
                            <div class="invalid-feedback">
                                Ingrese un número entre 0 y 100.
                            </div>
                        </div>
                    </div>

                    <!-- Fila para Dirección -->
                    <div class="row mb-3">
                        <label for="direccion" class="col-sm-2 col-form-label text-end">Dirección:</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="direccion" name="direccion" >
                            <div class="invalid-feedback">
                                Ingrese una direccion
                            </div>
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

