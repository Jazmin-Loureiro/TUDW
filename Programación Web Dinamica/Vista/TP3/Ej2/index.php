<?php 
include_once("../../../configuracion.php");
include (STRUCTURE_PATH."cabecera.php"); ?>

<main class="flex-fill bg-light">
    <div class="container my-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Formulario textearea:</h5>
                <form method="post" action="accion/accion.php" enctype="multipart/form-data" id="formText" novalidate>
                    <div class="row mb-2 align-items-center">
                        <div class="col-md-5">
                            <div class="input-group">
                                <input type="file" name="text" id="text" class="form-control" aria-describedby="inputGroupFileAddon04" >    
                                <div class="invalid-feedback">
                                Ingrese un documento text.
                            </div>         
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-2 offset-sm-10">
                                <button type="submit" class="btn btn-dark w-100">Enviar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php include (STRUCTURE_PATH."pie.php"); ?>
