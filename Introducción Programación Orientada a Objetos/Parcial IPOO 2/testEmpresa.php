<?php
include_once ("cliente.php");
include_once ("bicicleta.php");
include_once ("venta.php");
include_once ("empresa.php");
include_once ("bicicletasNacionales.php");
include_once ("bicicletasImportadas.php");


//Clientes
$objCliente1 = new Cliente("Jazmin", "Loureiro", false, "DNI", 43155996);
$objCliente2 = new Cliente("Dario", "Loureiro", false, "DNI", 22521244);

//Arreglo de clientes
$clientes = [];
$clientes [0] = $objCliente1;
$clientes [1] = $objCliente2;

//Bicicletas
$bicicleta1 = new BicicletasNacionales(11, 89500, 2022, "Fire Bird Plegable Cuadro Acero", 85, true, 11);
$bicicleta2 = new BicicletasNacionales(12, 310000, 2021, "Bicicleta TrekMarlin 5 Rodado29 Talle L", 70, true, 12);
$bicicleta3 = new BicicletasNacionales(13, 10000, 2023, "Bicicleta a Topmega Fixie Streeter R28 Acero 1vel Azul Osc T54", 55, false, 0);
$bicicleta4 = new BicicletasImportadas(14, 12499900, 2020, "Bicicleta Vairo Xr 3.8 D 29", 100, true, "EEUU", 6244400);

//Arreglo de bicicletas
$biciletas = [];
$bicicletas [0] = $bicicleta1;
$bicicletas [1] = $bicicleta2;
$bicicletas [2] = $bicicleta3;
$bicicletas [3] = $bicicleta4;

//Arreglo de ventas
$ventas = [];

//Empresa
$empresa = new Empresa("Alta Gama", "Av. Argentina 123", $clientes, $bicicletas, $ventas);

//Arreglo de codigos de bicicletas
$codigos = [];
$codigos [0] = 11;
$codigos [1] = 12;
$codigos [2] = 13;
$codigos [3] = 14;

//Punto 4 del test
echo "Muestro la empresa sin ventas: " . $empresa . "\n";

$empresa -> registrarVenta($codigos, $objCliente2);

echo "Muestro la empresa con ventas: " . $empresa . "\n";

//Punto 5 del test
echo "Muestro la empresa sin ventas: " . $empresa . "\n";

$empresa -> registrarVenta([0, 14], $objCliente2);

echo "Muestro la empresa con ventas: " . $empresa . "\n";

//Punto 6 del test
echo "Muestro la empresa con ventas: " . $empresa . "\n";

$empresa -> registrarVenta([2, 14], $objCliente2);

echo "Muestro la empresa con ventas: " . $empresa . "\n";

//Punto 7
$ventasImp = $empresa -> informarVentasImportadas();
print_r($ventasImp);

//Punto 8
$sumaVentasN = $empresa -> informarSumaVentasNacionales();
echo "\nSuma ventas Nacionales: " . $sumaVentasN;

//Punto 9 del test
echo $empresa;