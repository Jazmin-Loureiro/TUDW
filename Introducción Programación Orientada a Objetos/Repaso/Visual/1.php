<?php 
/*Calcula el factorial de un numero*/ 
/*int $num, int $factorial, int $i,*/



echo "Ingrese el numero del que desea obtener su factorial: ";
$num = trim(fgets(STDIN));
$factorial = 1;
for ($i=0; $i < $num; $i++) { 
    $factorial = $factorial * ($i + 1);
}
echo "El factorial es: " . $factorial;