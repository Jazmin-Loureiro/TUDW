<?php
Include 'eje14CuentaBancaria.php';





echo "Ingrese el numero de cuenta: ";
$numeroCuenta = trim(fgets(STDIN));
echo "Ingrese el DNI del cliente: ";
$dniCliente = trim(fgets(STDIN));
echo 'Ingrese el saldo actual: ';
$saldoActual = trim(fgets(STDIN));
echo 'Ingrese el interes anual: ';
$interesAnual = trim(fgets(STDIN));

$cuenta = new CuentaBancaria($numeroCuenta, $dniCliente, $saldoActual, $interesAnual);

$cuenta -> actualizarSaldo();

echo 'Ingrese la cantidad de dinero que desea depositar en la cuenta: ';
$cantidad = trim(fgets(STDIN));
$resultado = $cuenta -> depositar($cantidad);

echo "Ingrese la cantidad de dinero a retirar de la cuenta: ";
$cantidadRet = trim(fgets(STDIN));
$total = $cuenta -> retirar($cantidadRet);

echo $cuenta;