<?php 
include_once("../../../configuracion.php");
include (STRUCTURE_PATH."cabecera.php"); ?>
<main class="flex-fill bg-light">
    <div class="container my-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Formulario numero:</h5>
                <form  method="post" action="accion/vernumero.php" id="form" novalidate>
                    <div class="row mb-2">
                        <label for="numeros" class="col-form-label">Ingrese un número:</label>
                        <div class="col-md-3">
                            <input type="number" class="form-control" id="numero" name="numero">
                            <div class="invalid-feedback">
                                Ingrese un numero.
                            </div>
                        </div>
                        <div class="col-md-2 mt-3 mt-md-0">
                            <button type="submit" class="btn btn-dark w-100">Verificar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php include (STRUCTURE_PATH."pie.php"); ?>
