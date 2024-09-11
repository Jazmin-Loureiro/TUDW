<?php 
include_once("../../../configuracion.php");
include (STRUCTURE_PATH."cabecera.php"); ?>

<main class="flex-fill bg-light">
    <div class="container my-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Formulario de Horas de Cursada</h5> 
                <br>
                <form method="get" action="accion/accion.php" id="formCursada" novalidate>
                    <?php 
                    $dias = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes"];
                    foreach ($dias as $dia): ?>
                    <div class="row mb-2">
                        <label for="horas_<?php echo strtolower($dia); ?>" class="col-sm-2 col-form-label text-end"><?php echo $dia; ?>:</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" id="horas_<?php echo strtolower($dia); ?>" name="horas[<?php echo strtolower($dia); ?>]" >
                            <div class="invalid-feedback">
                                Ingrese un número entre 0 y 24.
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                    <div class="row">
                        <div class="col-sm-2 offset-sm-10">
                            <button type="submit" class="btn btn-dark w-100">Verificar</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</main>
<?php include (STRUCTURE_PATH."pie.php"); ?>
