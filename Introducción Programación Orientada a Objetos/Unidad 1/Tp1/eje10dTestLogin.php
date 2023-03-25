<?php
include 'eje10dLogin.php';

echo "Ingrese el nombre de usuario: ";
$usuario = trim(fgets(STDIN));
echo "Ingrese la contrasenia: ";
$contrasenia = trim(fgets(STDIN));
echo "Ingrese la frase que permita recordar la cotrasenia ingresada: ";
$frase = trim(fgets(STDIN));
echo "Ingrese sus ultimas cuatro contrasenias. Empezando por la ultima contando cuatro hacia atras: ";
$contrasenia1 = trim(fgets(STDIN));
echo "Ingrese la siguiente: ";
$contrasenia2 = trim(fgets(STDIN));
echo "Ingrese la siguiente: ";
$contrasenia3 = trim(fgets(STDIN));
echo "Ingrese la cuarta y ultima: ";
$contrasenia4 = trim(fgets(STDIN));

$login = new login ($usuario, $contrasenia, $frase, $contrasenia1, $contrasenia2, $contrasenia3, $contrasenia4);

//Prueba de metodos
$login -> validar() . "\n";
$login -> cambiarContra() . "\n";
$login -> recordar() . "\n"; 
