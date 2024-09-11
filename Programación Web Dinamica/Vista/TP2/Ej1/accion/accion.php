<?php
include_once("../../../../configuracion.php");
include_once("../../../../Modelo/usuarios.php");
include (STRUCTURE_PATH."cabecera.php");

?>
<main class="flex-fill bg-light">
    <div class="container my-4">
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">Bienvenido:</h5>
            <?php
            $datos=data_submitted();
            if($datos){
                $control = new Usuario();
                $mensaje = $control -> verificaPass($datos, $usuarios);
            }
            ?>
            <p class="card-text"><?php echo $mensaje; ?></p>
            <div class="d-flex justify-content-end">
                <a href="../index.php" class="btn btn-dark">Volver</a>
            </div>
            </div>
        </div>
    </div>
</main>

<?php include (STRUCTURE_PATH."pie.php"); ?>
