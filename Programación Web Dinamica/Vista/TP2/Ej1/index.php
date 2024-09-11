<?php 
include_once("../../../configuracion.php");
include (STRUCTURE_PATH."cabecera.php"); ?>

<main class="flex-fill bg-light">
    <div class="container my-4">
        <div class="card mx-auto" style="max-width: 400px;">
            <div class="card-body">
                <h5 class="card-title text-center">Member Login</h5>
                <br>
                <form method="post" action="accion/accion.php" id="FormLogin" novalidate>
                    <!-- Fila para usuario -->
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="width: 3rem; height: calc(2.5rem + 2px); display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-user fa-lg"></i> 
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Usuario" id="usuario" name="usuario">
                            <div class="invalid-feedback">
                                Ingrese un usuario.
                            </div>
                        </div>
                    </div>
                    
                    <!-- Fila para password -->
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="width: 3rem; height: calc(2.5rem + 2px); display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-lock fa-lg"></i> 
                                </span>
                            </div>
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
                            <div class="invalid-feedback">
                                Ingrese una contraseña
                                <br>
                                Debe tener al menos 8 caracteres, letras y numeros.
                                <br>
                                No puede ser igual el usuario a la contraseña.
                            </div>
                        </div>
                    </div>

                    <!-- Fila para Botones -->
                    <div class="row">
                        <div class="col-sm-8 offset-sm-2">
                            <button type="submit" class="btn btn-success w-100">Enviar</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</main>

<?php include (STRUCTURE_PATH."pie.php"); ?>
