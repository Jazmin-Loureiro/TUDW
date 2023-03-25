<?php
include 'eje10bReloj.php';

echo "Ingrese la hora: ";
$hora = trim(fgets(STDIN));
echo "Ingrese los minutos: ";
$minutos = trim(fgets(STDIN));
echo "Ingrese los segundos: ";
$segundos = trim(fgets(STDIN));
$reloj = new Reloj ($hora, $minutos, $segundos);
$reloj -> incremento();
echo $reloj . "\n";
$reloj -> incremento();
echo $reloj . "\n";
$reloj -> incremento();
echo $reloj . "\n";
$reloj -> puestaACero();
echo $reloj;
