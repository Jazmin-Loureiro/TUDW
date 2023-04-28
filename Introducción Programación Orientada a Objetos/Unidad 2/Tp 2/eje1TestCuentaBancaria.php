<?php
Include_once("cuentaBancaria.php");
Include_once("persona.php");





echo "Ingrese el numero de cuenta: ";
$numeroCuenta = trim(fgets(STDIN));
echo "Ingrese su nombre: ";
$nombreP = trim(fgets(STDIN));
echo "Ingrese su apellido: ";
$apellidoP = trim(fgets(STDIN));
echo "Ingrese el tipo de documento: ";
$tipoP = trim(fgets(STDIN));
echo "Ingrese su numero de documento: ";
$docP = trim(fgets(STDIN));
echo 'Ingrese el saldo actual: ';
$saldoActual = trim(fgets(STDIN));
echo 'Ingrese el interes anual: ';
$interesAnual = trim(fgets(STDIN));

$persona = new persona($nombreP, $apellidoP, $tipoP, $docP);

$cuenta = new CuentaBancaria($numeroCuenta, $persona, $saldoActual, $interesAnual);

$cuenta -> actualizarSaldo();

echo 'Ingrese la cantidad de dinero que desea depositar en la cuenta: ';
$cantidad = trim(fgets(STDIN));
$resultado = $cuenta -> depositar($cantidad);

echo "Ingrese la cantidad de dinero a retirar de la cuenta: ";
$cantidadRet = trim(fgets(STDIN));
$total = $cuenta -> retirar($cantidadRet);

echo $cuenta;