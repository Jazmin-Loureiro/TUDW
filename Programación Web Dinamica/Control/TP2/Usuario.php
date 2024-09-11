<?php
    class Usuario {

        private $usuario;
        private $pass;
        private $clave;

        public function __construct(){
            $this->usuario="";
            $this->pass="";
            $this->clave="";
        }
        public function getUsuario() {
            return $this->usuario;
        }
        public function setUsuario($usuario) {
            $this->usuario = $usuario;
        }
        public function getPass() {
            return $this->pass;
        }
        public function setPass($pass) {
            $this->pass = $pass;
        }
        public function getClave() {
                return $this->clave;
        }
        public function setClave($clave){
                $this->clave = $clave;
        }
        
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
    
