<?php
include_once("eje1Persona.php");
include_once("eje2Disquera.php");

$horaD = [];
$horaD ["hora"] = "16";
$horaD ["minutos"] = "30";

$horaH = [];
$horaH ["hora"] = "20";
$horaH ["minutos"] = "30";

$estadoD = "abierto";

$direccionD = "Buenos Aires 766";

$duenioD = new Persona("Jazmin", "Loureiro", "DNI", "43155996");

$disquera = new Disquera($horaD, $horaH, $estadoD, $duenioD, $direccionD);

$horaAte = $disquera -> dentroHorarioAtencion("17", "17");
if ($horaAte == true) {
    echo "abierto";
}
else {
    echo "cerrado";
}

$estadoDisquera = $disquera -> cerrarDisquera("20", "31");
$estadoDisquera = $disquera -> abrirDisquera("16", "31");

echo $disquera;

