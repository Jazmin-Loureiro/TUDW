<?php
    class Pass {
        public function verificaPass($datosAction, $usuariosArray) {
            $i = 0;
            $cant = count($usuariosArray);
            $encontrado = false;
            while($i < $cant and $encontrado == false) {
                $usu = $usuariosArray[$i];
                if($datosAction['usuario'] == $usu['usuario'] and $datosAction['pass'] == $usu['clave']) {
                    $mensaje = "Bienvenido " . $usu['usuario'];
                    $encontrado = true;
                }
                else {
                    $mensaje = "Datos ingresados incorrectos.";
                }
                $i++;
            }
            return $mensaje;
        }
    }
    