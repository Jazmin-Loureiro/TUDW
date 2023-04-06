<?php 
include 'eje13Cafetera.php';

echo "Ingrese la capacidad maxima de la cafetera: ";
$capacidad = trim(fgets(STDIN));
echo "Ingrese la cantidad actual de la cafetera: ";
$cantidad = trim(fgets(STDIN));

$cafetera = new Cafetera($capacidad, $cantidad);

$cafetera -> llenarCafetera();

echo "Ingrese la cantidad que desea utilizar en su taza: ";
$cantidadTaza = trim(fgets(STDIN));
$cafetera -> servirTaza($cantidadTaza);

echo "Ingrese la cantidad que desea ingresar a la cafetera: ";
$cantidadIngr = trim(fgets(STDIN));
$cafetera -> agregarCafe($cantidadIngr);

echo $cafetera;