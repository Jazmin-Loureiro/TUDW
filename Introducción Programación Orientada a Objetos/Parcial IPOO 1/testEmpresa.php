<?php
include_once ("cliente.php");
include_once ("bicicleta.php");
include_once ("venta.php");
include_once ("empresa.php");;


//Clientes
$objCliente1 = new Cliente("Jazmin", "Loureiro", false, "DNI", 43155996);
$objCliente2 = new Cliente("Dario", "Loureiro", false, "DNI", 22521244);

//Arreglo de clientes
$clientes = [];
$clientes [0] = $objCliente1;
$clientes [1] = $objCliente2;

//Bicicletas
$bicicleta1 = new Bicicleta(11, 89500, 2022, "Fire Bird Plegable Cuadro Acero", 85, true);
$bicicleta2 = new Bicicleta(12, 310000, 2021, "Bicicleta TrekMarlin 5 Rodado29 Talle L", 70, true);
$bicicleta3 = new Bicicleta(13, 10000, 2023, "Bicicleta a Topmega Fixie Streeter R28 Acero 1vel Azul Osc T54", 55, false);

//Arreglo de bicicletas
$biciletas = [];
$bicicletas [0] = $bicicleta1;
$bicicletas [1] = $bicicleta2;
$bicicletas [2] = $bicicleta3;

//Arreglo de ventas
$ventas = [];

//Empresa
$empresa = new Empresa("Alta Gama", "Av. Argentina 123", $clientes, $bicicletas, $ventas);

//Arreglo de codigos de bicicletas
$codigos = [];
$codigos [0] = 11;
$codigos [1] = 12;
$codigos [2] = 13;

//Punto 5 del test
echo "Muestro la empresa sin ventas: " . $empresa . "\n";

$empresa -> registrarVenta($codigos, $objCliente2);

echo "Muestro la empresa con ventas: " . $empresa . "\n";

//Punto 6 del test
echo "Muestro la empresa sin ventas: " . $empresa . "\n";

$empresa -> registrarVenta([0], $objCliente2);

echo "Muestro la empresa con ventas: " . $empresa . "\n";

//Punto 7 del test
echo "Muestro la empresa con ventas: " . $empresa . "\n";

$empresa -> registrarVenta([2], $objCliente2);

echo "Muestro la empresa con ventas: " . $empresa . "\n";

//Punto 8 del test
$tipo = "DNI";
$numDoc = "43155996";
$ventasCli1 = $empresa -> retornarVentasXCliente($tipo,$numDoc);
$numVentas = count($ventasCli1);
if ($numVentas > 0)
    echo "Realizo " . $numVentas . " compras.";
else {
    echo "No realizo compras";
}

//Punto 9 del test
$tipo = "DNI";
$numDoc = "22521244";
$ventasCli1 = $empresa -> retornarVentasXCliente($tipo,$numDoc);
$numVentas = count($ventasCli1);
if ($numVentas > 0)
    echo "Realizo " . $numVentas . " compras.";
else {
    echo "No realizo compras";
}

//Punto 10 del test
echo $empresa;