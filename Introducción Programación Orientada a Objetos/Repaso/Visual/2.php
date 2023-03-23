<?php
/*Te dice si un numero es par*/
echo "Ingrese el numero que desea saber si es par: ";
$num = trim(fgets(STDIN));
if ( $num % 2 == 0 ) {
    echo "Es par";
} else{
    echo "No es par";
}