<?php
include_once("../../configuracion.php");
include (STRUCTURE_PATH."cabecera.php"); ?>
?>
<main class="flex-fill bg-light">
<div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="col-12 text-center">
                            <h5 class="mb-4">Búsqueda de Autos</h5>
                        </div>
                        <form action="accion/buscarAuto.php" method="POST" id="buscarAutos" name="buscarAutos">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Ingrese patente:" id="patente" name="patente">
                            <button class="btn btn-outline-primary" type="submit" id="button-addon2">Buscar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include (STRUCTURE_PATH."pie.php"); ?>