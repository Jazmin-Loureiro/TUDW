<?php

include_once ("eje15Teatro.php");

echo "Ingrese el nombre del teatro: ";
$nombreT = trim(fgets(STDIN));
echo "Ingrese la direccion del teatro: ";
$direccionT = trim(fgets(STDIN));
$funcionesT = [];
for ($i = 0; $i < 4; $i++) {
    echo "\nIngrese el nombre de la funcion N" . $i + 1 . ": ";
    $funcionesT [$i] ["nombre"] = trim(fgets(STDIN));
    echo "Ingrese el precio de la funcion N" . $i + 1 . ": ";
    $funcionesT [$i] ["precio"] = trim(fgets(STDIN));
}


$teatro = new Teatro($nombreT, $direccionT, $funcionesT);

echo "Ingrese el nuevo nombre del teatro: \n";
$nuevoNT = trim(fgets(STDIN));
$teatro -> setNombre($nuevoNT);

echo "Ingrese la nueva direccion del teatro: \n";
$nuevaDire = trim(fgets(STDIN));
$teatro -> setDireccion($nuevaDire);

echo "\nIngrese el numero de funcion que desea modificar (1-4): \n";
$numF = trim(fgets(STDIN));
echo "Ingrese el nuevo nombre de la funcion: ";
$nombreF = trim(fgets(STDIN));
echo "Ingrese el nuevo precio de la funcion: ";
$precioF = trim(fgets(STDIN));
$teatro -> ModificarDatosFuncion($numF, $nombreF, $precioF);

echo $teatro;

