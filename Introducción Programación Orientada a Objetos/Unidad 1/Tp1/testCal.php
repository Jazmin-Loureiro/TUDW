<?php
    include 'calculadora.php';
    $resultado= 0;
    $casio = new Calculadora (9, 3);
    $casio -> setNum1(100);
    $resultado = $casio -> sumar ();
    echo $suma;