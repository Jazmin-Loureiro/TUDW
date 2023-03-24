<?php
    include 'calculadora.php';

    echo "Ingrese en simbolos la operacion que desea realizar:";
    $oper = trim(fgets(STDIN));
    echo "Ingrese el primer numero que desea " . $oper . ":";
    $numA = trim(fgets(STDIN));
    echo "Ingrese el segundo numero que desea " . $oper . ":";
    $numB = trim(fgets(STDIN));
    $casio = new Calculadora ($numA, $numB, $oper);
    $resultado = $casio -> operaciones($numA, $numB, $oper);
    echo $resultado;