<?php
include_once ("persona.php");

echo "Ingrese su nombre: ";
$nombreP = trim(fgets(STDIN));
echo "Ingrese su apellido: ";
$apellidoP = trim(fgets(STDIN));
echo "Ingrese el tipo de documento: ";
$tipoP = trim(fgets(STDIN));
echo "ingrese su numero de document: ";
$docP = trim(fgets(STDIN));

$persona = new persona($nombreP, $apellidoP, $tipoP, $docP);
echo $persona;