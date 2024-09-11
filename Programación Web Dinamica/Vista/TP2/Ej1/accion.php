<?php
include_once("../../../configuracion.php");
include (STRUCTURE_PATH."cabecera.php"); 
include_once ('../../../Control/TP2/Control_ej1.php');

//Creo el array de usuarios
$usuarios = [
    [
        "usuario" => "juan123",
        "clave" => "contra12"
    ],
    [
        "usuario" => "maria456",
        "clave" => "clave456"
    ],
    [
        "usuario" => "pedro789",
        "clave" => "pass7890"
    ]
    ];
?>

<main class="flex-fill bg-light">
    <div class="container my-4">
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">Bienvenido:</h5>
            <?php
            $datos=data_submitted();
            if($datos){
                $obj = new Pass();
                $mensaje = $obj -> verificaPass($datos, $usuarios);
            }
            ?>
            <p class="card-text"><?php echo $mensaje; ?></p>
            <div class="d-flex justify-content-end">
                <a href="index.php" class="btn btn-dark">Volver</a>
            </div>
            </div>
        </div>
    </div>
</main>

<?php include (STRUCTURE_PATH."pie.php"); ?>
