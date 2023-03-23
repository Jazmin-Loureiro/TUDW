<?php
/*Calcula si un numero es divisible por otro*/
/*int $n1, int $n2*/

echo "Ingrese el numero que desea saber si es divisible: ";
$n1 = trim(fgets(STDIN));
echo "Ingrese el numero por el cual desea dividirlo: ";
$n2 = trim(fgets(STDIN));
if ($n1 % $n2 == 0) {
    echo $n1 . " es divisible por " . $n2;
}
else {
    echo $n1 . "no es divisible por " . $n2;
}
